# FrankHouweling\AzureDevOpsClient\Wit\ProjectProcessMigrationApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**projectProcessMigrationMigrateProjectsProcess**](ProjectProcessMigrationApi.md#projectProcessMigrationMigrateProjectsProcess) | **POST** /{organization}/{project}/_apis/wit/projectprocessmigration | 


# **projectProcessMigrationMigrateProjectsProcess**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\ProcessMigrationResultModel projectProcessMigrationMigrateProjectsProcess($organization, $body, $project, $apiVersion)



Migrates a project to a different process within the same OOB type. For example, you can only migrate a project from agile/custom-agile to agile/custom-agile.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\ProjectProcessMigrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Wit\Model\ProcessIdModel(); // \FrankHouweling\AzureDevOpsClient\Wit\Model\ProcessIdModel | 
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->projectProcessMigrationMigrateProjectsProcess($organization, $body, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectProcessMigrationApi->projectProcessMigrationMigrateProjectsProcess: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Wit\Model\ProcessIdModel**](../Model/ProcessIdModel.md)|  |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\ProcessMigrationResultModel**](../Model/ProcessMigrationResultModel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

