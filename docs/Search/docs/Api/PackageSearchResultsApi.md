# AzureDevOpsClient\Search\PackageSearchResultsApi

All URIs are relative to *https://almsearch.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**packageSearchResultsFetchPackageSearchResults**](PackageSearchResultsApi.md#packageSearchResultsFetchPackageSearchResults) | **POST** /{organization}/_apis/search/packagesearchresults | 


# **packageSearchResultsFetchPackageSearchResults**
> \AzureDevOpsClient\Search\AzureDevOpsClient\Search\Model\PackageSearchResponseContent packageSearchResultsFetchPackageSearchResults($organization, $body, $apiVersion)



Provides a set of results for the search text.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Search\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Search\Api\PackageSearchResultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Search\AzureDevOpsClient\Search\Model\PackageSearchRequest(); // \AzureDevOpsClient\Search\AzureDevOpsClient\Search\Model\PackageSearchRequest | The Package Search Request.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->packageSearchResultsFetchPackageSearchResults($organization, $body, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackageSearchResultsApi->packageSearchResultsFetchPackageSearchResults: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Search\AzureDevOpsClient\Search\Model\PackageSearchRequest**](../Model/PackageSearchRequest.md)| The Package Search Request. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Search\AzureDevOpsClient\Search\Model\PackageSearchResponseContent**](../Model/PackageSearchResponseContent.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

