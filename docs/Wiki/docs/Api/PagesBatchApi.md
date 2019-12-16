# AzureDevOpsClient\Wiki\PagesBatchApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pagesBatchGet**](PagesBatchApi.md#pagesBatchGet) | **POST** /{organization}/{project}/_apis/wiki/wikis/{wikiIdentifier}/pagesbatch | 


# **pagesBatchGet**
> \AzureDevOpsClient\Wiki\AzureDevOpsClient\Wiki\Model\WikiPageDetail[] pagesBatchGet($organization, $body, $project, $wikiIdentifier, $apiVersion, $versionDescriptorVersion, $versionDescriptorVersionOptions, $versionDescriptorVersionType)



Returns pageable list of Wiki Pages

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Wiki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Wiki\Api\PagesBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Wiki\AzureDevOpsClient\Wiki\Model\WikiPagesBatchRequest(); // \AzureDevOpsClient\Wiki\AzureDevOpsClient\Wiki\Model\WikiPagesBatchRequest | Wiki batch page request.
$project = "project_example"; // string | Project ID or project name
$wikiIdentifier = "wikiIdentifier_example"; // string | Wiki ID or wiki name.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$versionDescriptorVersion = "versionDescriptorVersion_example"; // string | Version string identifier (name of tag/branch, SHA1 of commit)
$versionDescriptorVersionOptions = "versionDescriptorVersionOptions_example"; // string | Version options - Specify additional modifiers to version (e.g Previous)
$versionDescriptorVersionType = "versionDescriptorVersionType_example"; // string | Version type (branch, tag, or commit). Determines how Id is interpreted

try {
    $result = $apiInstance->pagesBatchGet($organization, $body, $project, $wikiIdentifier, $apiVersion, $versionDescriptorVersion, $versionDescriptorVersionOptions, $versionDescriptorVersionType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PagesBatchApi->pagesBatchGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Wiki\AzureDevOpsClient\Wiki\Model\WikiPagesBatchRequest**](../Model/WikiPagesBatchRequest.md)| Wiki batch page request. |
 **project** | **string**| Project ID or project name |
 **wikiIdentifier** | **string**| Wiki ID or wiki name. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **versionDescriptorVersion** | **string**| Version string identifier (name of tag/branch, SHA1 of commit) | [optional]
 **versionDescriptorVersionOptions** | **string**| Version options - Specify additional modifiers to version (e.g Previous) | [optional]
 **versionDescriptorVersionType** | **string**| Version type (branch, tag, or commit). Determines how Id is interpreted | [optional]

### Return type

[**\AzureDevOpsClient\Wiki\AzureDevOpsClient\Wiki\Model\WikiPageDetail[]**](../Model/WikiPageDetail.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

