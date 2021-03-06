# FrankHouweling\AzureDevOpsClient\Search\WorkItemSearchResultsApi

All URIs are relative to *https://almsearch.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**workItemSearchResultsFetchWorkItemSearchResults**](WorkItemSearchResultsApi.md#workItemSearchResultsFetchWorkItemSearchResults) | **POST** /{organization}/{project}/_apis/search/workitemsearchresults | 


# **workItemSearchResultsFetchWorkItemSearchResults**
> \FrankHouweling\AzureDevOpsClient\Search\Model\WorkItemSearchResponse workItemSearchResultsFetchWorkItemSearchResults($organization, $body, $project, $apiVersion)



Provides a set of results for the search text.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Search\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Search\Api\WorkItemSearchResultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Search\Model\WorkItemSearchRequest(); // \FrankHouweling\AzureDevOpsClient\Search\Model\WorkItemSearchRequest | The Work Item Search Request.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->workItemSearchResultsFetchWorkItemSearchResults($organization, $body, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkItemSearchResultsApi->workItemSearchResultsFetchWorkItemSearchResults: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Search\Model\WorkItemSearchRequest**](../Model/WorkItemSearchRequest.md)| The Work Item Search Request. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Search\Model\WorkItemSearchResponse**](../Model/WorkItemSearchResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

