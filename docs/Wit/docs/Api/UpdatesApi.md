# FrankHouweling\AzureDevOpsClient\Wit\UpdatesApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**updatesGet**](UpdatesApi.md#updatesGet) | **GET** /{organization}/{project}/_apis/wit/workItems/{id}/updates/{updateNumber} | 
[**updatesList**](UpdatesApi.md#updatesList) | **GET** /{organization}/{project}/_apis/wit/workItems/{id}/updates | 


# **updatesGet**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemUpdate updatesGet($organization, $id, $updateNumber, $project, $apiVersion)



Returns a single update for a work item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\UpdatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$id = 56; // int | 
$updateNumber = 56; // int | 
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.

try {
    $result = $apiInstance->updatesGet($organization, $id, $updateNumber, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UpdatesApi->updatesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **id** | **int**|  |
 **updateNumber** | **int**|  |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemUpdate**](../Model/WorkItemUpdate.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatesList**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemUpdate[] updatesList($organization, $id, $project, $apiVersion, $top, $skip)



Returns a the deltas between work item revisions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\UpdatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$id = 56; // int | 
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.
$top = 56; // int | 
$skip = 56; // int | 

try {
    $result = $apiInstance->updatesList($organization, $id, $project, $apiVersion, $top, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UpdatesApi->updatesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **id** | **int**|  |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |
 **top** | **int**|  | [optional]
 **skip** | **int**|  | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemUpdate[]**](../Model/WorkItemUpdate.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

