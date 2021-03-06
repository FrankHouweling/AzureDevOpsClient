# SwaggerClient-php
No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 6.0-preview
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Processadmin\Configuration::getDefaultConfiguration()
    ->setUsername('YOUR_USERNAME')
    ->setPassword('YOUR_PASSWORD');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Processadmin\Api\BehaviorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$processId = "processId_example"; // string | The ID of the process
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->behaviorsList($organization, $processId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BehaviorsApi->behaviorsList: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://dev.azure.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BehaviorsApi* | [**behaviorsList**](docs/Api/BehaviorsApi.md#behaviorslist) | **GET** /{organization}/_apis/work/processadmin/{processId}/behaviors | 
*ProcessesApi* | [**processesExportProcessTemplate**](docs/Api/ProcessesApi.md#processesexportprocesstemplate) | **GET** /{organization}/_apis/work/processadmin/processes/export/{id} | 
*ProcessesApi* | [**processesImportProcessTemplate**](docs/Api/ProcessesApi.md#processesimportprocesstemplate) | **POST** /{organization}/_apis/work/processadmin/processes/import | 
*ProcessesApi* | [**processesImportProcessTemplateStatus**](docs/Api/ProcessesApi.md#processesimportprocesstemplatestatus) | **GET** /{organization}/_apis/work/processadmin/processes/status/{id} | 


## Documentation For Models

 - [AdminBehavior](docs/Model/AdminBehavior.md)
 - [AdminBehaviorField](docs/Model/AdminBehaviorField.md)
 - [CheckTemplateExistenceResult](docs/Model/CheckTemplateExistenceResult.md)
 - [ProcessImportResult](docs/Model/ProcessImportResult.md)
 - [ProcessPromoteStatus](docs/Model/ProcessPromoteStatus.md)
 - [ValidationIssue](docs/Model/ValidationIssue.md)
 - [VssJsonCollectionWrapperBase](docs/Model/VssJsonCollectionWrapperBase.md)
 - [VssJsonCollectionWrapper](docs/Model/VssJsonCollectionWrapper.md)


## Documentation For Authorization


## accessToken

- **Type**: HTTP basic authentication


## Author

nugetvss@microsoft.com


