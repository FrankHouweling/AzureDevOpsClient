# AzureDevOpsClient\Wiki\PageStatsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pageStatsGet**](PageStatsApi.md#pageStatsGet) | **GET** /{organization}/{project}/_apis/wiki/wikis/{wikiIdentifier}/pages/{pageId}/stats | 


# **pageStatsGet**
> \AzureDevOpsClient\Wiki\AzureDevOpsClient\Wiki\Model\WikiPageDetail pageStatsGet($organization, $project, $wikiIdentifier, $pageId, $apiVersion, $pageViewsForDays)



Returns page detail corresponding to Page ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Wiki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Wiki\Api\PageStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$wikiIdentifier = "wikiIdentifier_example"; // string | Wiki ID or wiki name.
$pageId = 56; // int | Wiki page ID.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$pageViewsForDays = 56; // int | last N days from the current day for which page views is to be returned. It's inclusive of current day.

try {
    $result = $apiInstance->pageStatsGet($organization, $project, $wikiIdentifier, $pageId, $apiVersion, $pageViewsForDays);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageStatsApi->pageStatsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **wikiIdentifier** | **string**| Wiki ID or wiki name. |
 **pageId** | **int**| Wiki page ID. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **pageViewsForDays** | **int**| last N days from the current day for which page views is to be returned. It&#39;s inclusive of current day. | [optional]

### Return type

[**\AzureDevOpsClient\Wiki\AzureDevOpsClient\Wiki\Model\WikiPageDetail**](../Model/WikiPageDetail.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

