# AzureDevOpsClient\Test\TestHistoryApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**testHistoryQuery**](TestHistoryApi.md#testHistoryQuery) | **POST** /{organization}/{project}/_apis/test/Results/testhistory | 


# **testHistoryQuery**
> \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestHistoryQuery testHistoryQuery($organization, $body, $project, $apiVersion)



Get history of a test method using TestHistoryQuery

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Test\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Test\Api\TestHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestHistoryQuery(); // \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestHistoryQuery | TestHistoryQuery to get history
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $result = $apiInstance->testHistoryQuery($organization, $body, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestHistoryApi->testHistoryQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestHistoryQuery**](../Model/TestHistoryQuery.md)| TestHistoryQuery to get history |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestHistoryQuery**](../Model/TestHistoryQuery.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

