# AzureDevOpsClient\Wiki\PageMovesApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pageMovesCreate**](PageMovesApi.md#pageMovesCreate) | **POST** /{organization}/{project}/_apis/wiki/wikis/{wikiIdentifier}/pagemoves | 


# **pageMovesCreate**
> \AzureDevOpsClient\Wiki\AzureDevOpsClient\Wiki\Model\WikiPageMove pageMovesCreate($organization, $body, $project, $wikiIdentifier, $apiVersion, $comment, $versionDescriptorVersion, $versionDescriptorVersionOptions, $versionDescriptorVersionType)



Creates a page move operation that updates the path and order of the page as provided in the parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Wiki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Wiki\Api\PageMovesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Wiki\AzureDevOpsClient\Wiki\Model\WikiPageMoveParameters(); // \AzureDevOpsClient\Wiki\AzureDevOpsClient\Wiki\Model\WikiPageMoveParameters | Page more operation parameters.
$project = "project_example"; // string | Project ID or project name
$wikiIdentifier = "wikiIdentifier_example"; // string | Wiki ID or wiki name.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$comment = "comment_example"; // string | Comment that is to be associated with this page move.
$versionDescriptorVersion = "versionDescriptorVersion_example"; // string | Version string identifier (name of tag/branch, SHA1 of commit)
$versionDescriptorVersionOptions = "versionDescriptorVersionOptions_example"; // string | Version options - Specify additional modifiers to version (e.g Previous)
$versionDescriptorVersionType = "versionDescriptorVersionType_example"; // string | Version type (branch, tag, or commit). Determines how Id is interpreted

try {
    $result = $apiInstance->pageMovesCreate($organization, $body, $project, $wikiIdentifier, $apiVersion, $comment, $versionDescriptorVersion, $versionDescriptorVersionOptions, $versionDescriptorVersionType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageMovesApi->pageMovesCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Wiki\AzureDevOpsClient\Wiki\Model\WikiPageMoveParameters**](../Model/WikiPageMoveParameters.md)| Page more operation parameters. |
 **project** | **string**| Project ID or project name |
 **wikiIdentifier** | **string**| Wiki ID or wiki name. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **comment** | **string**| Comment that is to be associated with this page move. | [optional]
 **versionDescriptorVersion** | **string**| Version string identifier (name of tag/branch, SHA1 of commit) | [optional]
 **versionDescriptorVersionOptions** | **string**| Version options - Specify additional modifiers to version (e.g Previous) | [optional]
 **versionDescriptorVersionType** | **string**| Version type (branch, tag, or commit). Determines how Id is interpreted | [optional]

### Return type

[**\AzureDevOpsClient\Wiki\AzureDevOpsClient\Wiki\Model\WikiPageMove**](../Model/WikiPageMove.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

