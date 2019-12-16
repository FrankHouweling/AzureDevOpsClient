# AzureDevOpsClient\TestPlan\TestSuiteEntryApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**testSuiteEntryList**](TestSuiteEntryApi.md#testSuiteEntryList) | **GET** /{organization}/{project}/_apis/testplan/suiteentry/{suiteId} | 
[**testSuiteEntryReorderSuiteEntries**](TestSuiteEntryApi.md#testSuiteEntryReorderSuiteEntries) | **PATCH** /{organization}/{project}/_apis/testplan/suiteentry/{suiteId} | 


# **testSuiteEntryList**
> \AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\SuiteEntry[] testSuiteEntryList($organization, $project, $suiteId, $apiVersion, $suiteEntryType)



Get a list of test suite entries in the test suite.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\TestPlan\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\TestPlan\Api\TestSuiteEntryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$suiteId = 56; // int | Id of the parent suite.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$suiteEntryType = "suiteEntryType_example"; // string | 

try {
    $result = $apiInstance->testSuiteEntryList($organization, $project, $suiteId, $apiVersion, $suiteEntryType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestSuiteEntryApi->testSuiteEntryList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **suiteId** | **int**| Id of the parent suite. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **suiteEntryType** | **string**|  | [optional]

### Return type

[**\AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\SuiteEntry[]**](../Model/SuiteEntry.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testSuiteEntryReorderSuiteEntries**
> \AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\SuiteEntry[] testSuiteEntryReorderSuiteEntries($organization, $body, $project, $suiteId, $apiVersion)



Reorder test suite entries in the test suite.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\TestPlan\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\TestPlan\Api\TestSuiteEntryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = array(new \AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\SuiteEntryUpdateParams()); // \AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\SuiteEntryUpdateParams[] | List of SuiteEntry to reorder.
$project = "project_example"; // string | Project ID or project name
$suiteId = 56; // int | Id of the parent test suite.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->testSuiteEntryReorderSuiteEntries($organization, $body, $project, $suiteId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestSuiteEntryApi->testSuiteEntryReorderSuiteEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\SuiteEntryUpdateParams[]**](../Model/SuiteEntryUpdateParams.md)| List of SuiteEntry to reorder. |
 **project** | **string**| Project ID or project name |
 **suiteId** | **int**| Id of the parent test suite. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\SuiteEntry[]**](../Model/SuiteEntry.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

