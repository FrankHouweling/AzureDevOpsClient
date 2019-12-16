# AzureDevOpsClient\Git\ItemsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**itemsGetItemsBatch**](ItemsApi.md#itemsGetItemsBatch) | **POST** /{organization}/{project}/_apis/git/repositories/{repositoryId}/itemsbatch | 
[**itemsList**](ItemsApi.md#itemsList) | **GET** /{organization}/{project}/_apis/git/repositories/{repositoryId}/items | 


# **itemsGetItemsBatch**
> null[][] itemsGetItemsBatch($organization, $body, $repositoryId, $project, $apiVersion)



Post for retrieving a creating a batch out of a set of items in a repo / project given a list of paths or a long path

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Git\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitItemRequestData(); // \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitItemRequestData | Request data attributes: ItemDescriptors, IncludeContentMetadata, LatestProcessedChange, IncludeLinks. ItemDescriptors: Collection of items to fetch, including path, version, and recursion level. IncludeContentMetadata: Whether to include metadata for all items LatestProcessedChange: Whether to include shallow ref to commit that last changed each item. IncludeLinks: Whether to include the _links field on the shallow references.
$repositoryId = "repositoryId_example"; // string | The name or ID of the repository
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->itemsGetItemsBatch($organization, $body, $repositoryId, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->itemsGetItemsBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitItemRequestData**](../Model/GitItemRequestData.md)| Request data attributes: ItemDescriptors, IncludeContentMetadata, LatestProcessedChange, IncludeLinks. ItemDescriptors: Collection of items to fetch, including path, version, and recursion level. IncludeContentMetadata: Whether to include metadata for all items LatestProcessedChange: Whether to include shallow ref to commit that last changed each item. IncludeLinks: Whether to include the _links field on the shallow references. |
 **repositoryId** | **string**| The name or ID of the repository |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**null[][]**](../Model/array.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **itemsList**
> \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitItem[] itemsList($organization, $repositoryId, $project, $apiVersion, $scopePath, $recursionLevel, $includeContentMetadata, $latestProcessedChange, $download, $includeLinks, $format, $versionDescriptorVersion, $versionDescriptorVersionOptions, $versionDescriptorVersionType)



Get Item Metadata and/or Content for a collection of items. The download parameter is to indicate whether the content should be available as a download or just sent as a stream in the response. Doesn't apply to zipped content which is always returned as a download.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Git\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$repositoryId = "repositoryId_example"; // string | The name or ID of the repository.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$scopePath = "scopePath_example"; // string | The path scope.  The default is null.
$recursionLevel = "recursionLevel_example"; // string | The recursion level of this request. The default is 'none', no recursion.
$includeContentMetadata = true; // bool | Set to true to include content metadata.  Default is false.
$latestProcessedChange = true; // bool | Set to true to include the latest changes.  Default is false.
$download = true; // bool | Set to true to download the response as a file.  Default is false.
$includeLinks = true; // bool | Set to true to include links to items.  Default is false.
$format = "format_example"; // string | If specified, this overrides the HTTP Accept request header to return either 'json' or 'zip'. If $format is specified, then api-version should also be specified as a query parameter.
$versionDescriptorVersion = "versionDescriptorVersion_example"; // string | Version string identifier (name of tag/branch, SHA1 of commit)
$versionDescriptorVersionOptions = "versionDescriptorVersionOptions_example"; // string | Version options - Specify additional modifiers to version (e.g Previous)
$versionDescriptorVersionType = "versionDescriptorVersionType_example"; // string | Version type (branch, tag, or commit). Determines how Id is interpreted

try {
    $result = $apiInstance->itemsList($organization, $repositoryId, $project, $apiVersion, $scopePath, $recursionLevel, $includeContentMetadata, $latestProcessedChange, $download, $includeLinks, $format, $versionDescriptorVersion, $versionDescriptorVersionOptions, $versionDescriptorVersionType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->itemsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **repositoryId** | **string**| The name or ID of the repository. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **scopePath** | **string**| The path scope.  The default is null. | [optional]
 **recursionLevel** | **string**| The recursion level of this request. The default is &#39;none&#39;, no recursion. | [optional]
 **includeContentMetadata** | **bool**| Set to true to include content metadata.  Default is false. | [optional]
 **latestProcessedChange** | **bool**| Set to true to include the latest changes.  Default is false. | [optional]
 **download** | **bool**| Set to true to download the response as a file.  Default is false. | [optional]
 **includeLinks** | **bool**| Set to true to include links to items.  Default is false. | [optional]
 **format** | **string**| If specified, this overrides the HTTP Accept request header to return either &#39;json&#39; or &#39;zip&#39;. If $format is specified, then api-version should also be specified as a query parameter. | [optional]
 **versionDescriptorVersion** | **string**| Version string identifier (name of tag/branch, SHA1 of commit) | [optional]
 **versionDescriptorVersionOptions** | **string**| Version options - Specify additional modifiers to version (e.g Previous) | [optional]
 **versionDescriptorVersionType** | **string**| Version type (branch, tag, or commit). Determines how Id is interpreted | [optional]

### Return type

[**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitItem[]**](../Model/GitItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

