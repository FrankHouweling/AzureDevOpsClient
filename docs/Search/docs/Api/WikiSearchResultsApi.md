# AzureDevOpsClient\Search\WikiSearchResultsApi

All URIs are relative to *https://almsearch.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**wikiSearchResultsFetchWikiSearchResults**](WikiSearchResultsApi.md#wikiSearchResultsFetchWikiSearchResults) | **POST** /{organization}/{project}/_apis/search/wikisearchresults | 


# **wikiSearchResultsFetchWikiSearchResults**
> \AzureDevOpsClient\Search\AzureDevOpsClient\Search\Model\WikiSearchResponse wikiSearchResultsFetchWikiSearchResults($organization, $body, $project, $apiVersion)



Provides a set of results for the search request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Search\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Search\Api\WikiSearchResultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Search\AzureDevOpsClient\Search\Model\WikiSearchRequest(); // \AzureDevOpsClient\Search\AzureDevOpsClient\Search\Model\WikiSearchRequest | The Wiki Search Request.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->wikiSearchResultsFetchWikiSearchResults($organization, $body, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WikiSearchResultsApi->wikiSearchResultsFetchWikiSearchResults: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Search\AzureDevOpsClient\Search\Model\WikiSearchRequest**](../Model/WikiSearchRequest.md)| The Wiki Search Request. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Search\AzureDevOpsClient\Search\Model\WikiSearchResponse**](../Model/WikiSearchResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

