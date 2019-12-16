# AzureDevOpsClient\TestPlan\TestPlanCloneApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**testPlanCloneCloneTestPlan**](TestPlanCloneApi.md#testPlanCloneCloneTestPlan) | **POST** /{organization}/{project}/_apis/testplan/Plans/CloneOperation | 
[**testPlanCloneGet**](TestPlanCloneApi.md#testPlanCloneGet) | **GET** /{organization}/{project}/_apis/testplan/Plans/CloneOperation/{cloneOperationId} | 


# **testPlanCloneCloneTestPlan**
> \AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\CloneTestPlanOperationInformation testPlanCloneCloneTestPlan($organization, $body, $project, $apiVersion, $deepClone)



Clone test plan

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\TestPlan\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\TestPlan\Api\TestPlanCloneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\CloneTestPlanParams(); // \AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\CloneTestPlanParams | Plan Clone Request Body detail TestPlanCloneRequest
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.
$deepClone = true; // bool | Clones all the associated test cases as well

try {
    $result = $apiInstance->testPlanCloneCloneTestPlan($organization, $body, $project, $apiVersion, $deepClone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestPlanCloneApi->testPlanCloneCloneTestPlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\CloneTestPlanParams**](../Model/CloneTestPlanParams.md)| Plan Clone Request Body detail TestPlanCloneRequest |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |
 **deepClone** | **bool**| Clones all the associated test cases as well | [optional]

### Return type

[**\AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\CloneTestPlanOperationInformation**](../Model/CloneTestPlanOperationInformation.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testPlanCloneGet**
> \AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\CloneTestPlanOperationInformation testPlanCloneGet($organization, $project, $cloneOperationId, $apiVersion)



Get clone information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\TestPlan\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\TestPlan\Api\TestPlanCloneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$cloneOperationId = 56; // int | Operation ID returned when we queue a clone operation
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $result = $apiInstance->testPlanCloneGet($organization, $project, $cloneOperationId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestPlanCloneApi->testPlanCloneGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **cloneOperationId** | **int**| Operation ID returned when we queue a clone operation |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\CloneTestPlanOperationInformation**](../Model/CloneTestPlanOperationInformation.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

