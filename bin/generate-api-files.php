<?php
/**
 * Bash script to regenerate all client files based on the official Microsoft specs.
 */

if (!isset($argv[1]))
{
    echo 'Include path to swagger-codegen-cli.jar file. Exiting...' . PHP_EOL;
    exit;
}

if (file_exists('/tmp/vsts-specs') === false) {
    echo 'Retrieving devops swagger specification.' . PHP_EOL;
    shell_exec('git clone https://github.com/MicrosoftDocs/vsts-rest-api-specs.git /tmp/vsts-specs');
}

$iterator = new DirectoryIterator('/tmp/vsts-specs/specification');

$modules = [];
foreach ($iterator as $file) {
    if ($file->isDir() === false || $file->isDot()) {
        continue;
    }
    // Gather basic info about DevOps module
    $path = $file->getRealPath();
    $exploded = explode('/', $path);
    $name = ucfirst(end($exploded));

    // Retrieve last version only
    $versionCollection = [];
    $versionIterator = new DirectoryIterator($file->getRealPath());
    $newestVersion = null;
    foreach ($versionIterator as $versionFile) {
        if ($versionFile->isDir() === false || $versionFile->isDot()) {
            continue;
        }
        $versionPath = $versionFile->getRealPath();
        $exploded = explode('/', $versionPath);
        $versionName = ucfirst(end($exploded));
        if (
            $newestVersion === null ||
            (is_numeric(substr($versionName, 0, 1)) === true &&
                (float)$versionName > (float)$newestVersion)
        ) {
            $newestVersion = $versionName;
        }
    }
    $modules[] = [
        'name' => $name,
        'path' => $path . '/' . $newestVersion,
    ];
}

// Remove all existing code.
shell_exec('rm -r lib/ docs/');
shell_exec('mkdir -p lib/AzureDevOpsClient docs/');

// Initialize code..
foreach ($modules as $module) {
    $moduleNamespace = ucfirst($module['name']);

    // Init docs directory
    shell_exec('mkdir -p docs/' . $module['name']);

    // Write swagger client generator config file
    $config = [
        'modelPackage' => 'Model',
        'apiPackage' => 'Api',
        'variableNamingConvention' => 'camelCase',
        'invokerPackage' => 'FrankHouweling\\AzureDevOpsClient\\' . $moduleNamespace,
        'srcBasePath' => 'lib/AzureDevOpsClient/' . $moduleNamespace
    ];
    file_put_contents('/tmp/config.json', json_encode($config));

    // Find json file, because the specs are inconsistent.
    $jsonFileIterator = new DirectoryIterator($module['path']);
    foreach ($jsonFileIterator as $file)
    {
        if ($file->isDir() === false && $file->getExtension() === 'json')
        {
            $filePath = $file->getRealPath();
            break;
        }
    }

    // Generate!!
    shell_exec(sprintf(
        'java -jar %s generate -i %s -l php -c /tmp/config.json',
        $argv[1],
        $filePath
    ));
    shell_exec(sprintf(
        'mv SwaggerClient-php/lib/AzureDevOpsClient/%s lib/AzureDevOpsClient/%s',
        $module['name'],
        $module['name']
    ));
    shell_exec(sprintf(
        'mv SwaggerClient-php/docs/ docs/%s',
        $module['name']
    ));
    shell_exec(sprintf(
        'mv SwaggerClient-php/README.md docs/%s/README.md',
        $module['name']
    ));
    shell_exec('rm -R SwaggerClient-php');
}

// Update README.md
$content = file_get_contents('README.md');
$explode = explode('## Module specific README', $content);
$start = $explode[0];

foreach ($modules as $module)
{
    $content .= sprintf(
        PHP_EOL  . '* [%s](docs/%s)',
        $module['name'],
        $module['name']
    );
}
file_put_contents('README.md', $content);

// Update composer autoloading
shell_exec('composer dump-autoload');