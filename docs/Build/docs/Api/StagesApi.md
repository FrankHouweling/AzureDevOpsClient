# AzureDevOpsClient\Build\StagesApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**stagesUpdate**](StagesApi.md#stagesUpdate) | **PATCH** /{organization}/{project}/_apis/build/builds/{buildId}/stages/{stageRefName} | 


# **stagesUpdate**
> stagesUpdate($organization, $body, $buildId, $stageRefName, $project, $apiVersion)



Update a build stage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Build\Api\StagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\UpdateStageParameters(); // \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\UpdateStageParameters | 
$buildId = 56; // int | 
$stageRefName = "stageRefName_example"; // string | 
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->stagesUpdate($organization, $body, $buildId, $stageRefName, $project, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling StagesApi->stagesUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\UpdateStageParameters**](../Model/UpdateStageParameters.md)|  |
 **buildId** | **int**|  |
 **stageRefName** | **string**|  |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

