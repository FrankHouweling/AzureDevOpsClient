# FrankHouweling\AzureDevOpsClient\Wit\RevisionsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**revisionsGet**](RevisionsApi.md#revisionsGet) | **GET** /{organization}/{project}/_apis/wit/workItems/{id}/revisions/{revisionNumber} | 
[**revisionsList**](RevisionsApi.md#revisionsList) | **GET** /{organization}/{project}/_apis/wit/workItems/{id}/revisions | 


# **revisionsGet**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItem revisionsGet($organization, $id, $revisionNumber, $project, $apiVersion, $expand)



Returns a fully hydrated work item for the requested revision

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\RevisionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$id = 56; // int | 
$revisionNumber = 56; // int | 
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.
$expand = "expand_example"; // string | 

try {
    $result = $apiInstance->revisionsGet($organization, $id, $revisionNumber, $project, $apiVersion, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RevisionsApi->revisionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **id** | **int**|  |
 **revisionNumber** | **int**|  |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |
 **expand** | **string**|  | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItem**](../Model/WorkItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **revisionsList**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItem[] revisionsList($organization, $id, $project, $apiVersion, $top, $skip, $expand)



Returns the list of fully hydrated work item revisions, paged.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\RevisionsApi(
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
$expand = "expand_example"; // string | 

try {
    $result = $apiInstance->revisionsList($organization, $id, $project, $apiVersion, $top, $skip, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RevisionsApi->revisionsList: ', $e->getMessage(), PHP_EOL;
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
 **expand** | **string**|  | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItem[]**](../Model/WorkItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

