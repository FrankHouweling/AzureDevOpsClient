# AzureDevOpsClient\TestResults\TestlogApi

All URIs are relative to *https://vstmr.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**testlogGetTestResultLogs**](TestlogApi.md#testlogGetTestResultLogs) | **GET** /{organization}/{project}/_apis/testresults/runs/{runId}/results/{resultId}/testlog | 
[**testlogGetTestRunLogs**](TestlogApi.md#testlogGetTestRunLogs) | **GET** /{organization}/{project}/_apis/testresults/runs/{runId}/testlog | 


# **testlogGetTestResultLogs**
> \AzureDevOpsClient\TestResults\AzureDevOpsClient\TestResults\Model\TestLog[] testlogGetTestResultLogs($organization, $project, $runId, $resultId, $type, $apiVersion, $directoryPath, $fileNamePrefix, $fetchMetaData, $top, $continuationToken)



Get list of test result attachments reference

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\TestResults\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\TestResults\Api\TestlogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$runId = 56; // int | Id of the test run that contains the result
$resultId = 56; // int | Id of the test result
$type = "type_example"; // string | type of attachments to get
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$directoryPath = "directoryPath_example"; // string | directory path of attachments to get
$fileNamePrefix = "fileNamePrefix_example"; // string | file name prefix to filter the list of attachment
$fetchMetaData = true; // bool | Default is false, set if metadata is needed
$top = 56; // int | Numbe of attachments reference to return
$continuationToken = "continuationToken_example"; // string | Header to pass the continuationToken

try {
    $result = $apiInstance->testlogGetTestResultLogs($organization, $project, $runId, $resultId, $type, $apiVersion, $directoryPath, $fileNamePrefix, $fetchMetaData, $top, $continuationToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestlogApi->testlogGetTestResultLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **runId** | **int**| Id of the test run that contains the result |
 **resultId** | **int**| Id of the test result |
 **type** | **string**| type of attachments to get |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **directoryPath** | **string**| directory path of attachments to get | [optional]
 **fileNamePrefix** | **string**| file name prefix to filter the list of attachment | [optional]
 **fetchMetaData** | **bool**| Default is false, set if metadata is needed | [optional]
 **top** | **int**| Numbe of attachments reference to return | [optional]
 **continuationToken** | **string**| Header to pass the continuationToken | [optional]

### Return type

[**\AzureDevOpsClient\TestResults\AzureDevOpsClient\TestResults\Model\TestLog[]**](../Model/TestLog.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testlogGetTestRunLogs**
> \AzureDevOpsClient\TestResults\AzureDevOpsClient\TestResults\Model\TestLog[] testlogGetTestRunLogs($organization, $project, $runId, $type, $apiVersion, $directoryPath, $fileNamePrefix, $fetchMetaData, $top, $continuationToken)



Get list of test run attachments reference

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\TestResults\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\TestResults\Api\TestlogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$runId = 56; // int | Id of the test run
$type = "type_example"; // string | type of the attachments to get
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$directoryPath = "directoryPath_example"; // string | directory path for which attachments are needed
$fileNamePrefix = "fileNamePrefix_example"; // string | file name prefix to filter the list of attachment
$fetchMetaData = true; // bool | Default is false, set if metadata is needed
$top = 56; // int | Number of attachments reference to return
$continuationToken = "continuationToken_example"; // string | Header to pass the continuationToken

try {
    $result = $apiInstance->testlogGetTestRunLogs($organization, $project, $runId, $type, $apiVersion, $directoryPath, $fileNamePrefix, $fetchMetaData, $top, $continuationToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestlogApi->testlogGetTestRunLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **runId** | **int**| Id of the test run |
 **type** | **string**| type of the attachments to get |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **directoryPath** | **string**| directory path for which attachments are needed | [optional]
 **fileNamePrefix** | **string**| file name prefix to filter the list of attachment | [optional]
 **fetchMetaData** | **bool**| Default is false, set if metadata is needed | [optional]
 **top** | **int**| Number of attachments reference to return | [optional]
 **continuationToken** | **string**| Header to pass the continuationToken | [optional]

### Return type

[**\AzureDevOpsClient\TestResults\AzureDevOpsClient\TestResults\Model\TestLog[]**](../Model/TestLog.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

