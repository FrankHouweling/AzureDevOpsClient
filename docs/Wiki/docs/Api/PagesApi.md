# FrankHouweling\AzureDevOpsClient\Wiki\PagesApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pagesCreateOrUpdate**](PagesApi.md#pagesCreateOrUpdate) | **PUT** /{organization}/{project}/_apis/wiki/wikis/{wikiIdentifier}/pages | 
[**pagesDeletePage**](PagesApi.md#pagesDeletePage) | **DELETE** /{organization}/{project}/_apis/wiki/wikis/{wikiIdentifier}/pages | 
[**pagesDeletePageById**](PagesApi.md#pagesDeletePageById) | **DELETE** /{organization}/{project}/_apis/wiki/wikis/{wikiIdentifier}/pages/{id} | 
[**pagesGetPage**](PagesApi.md#pagesGetPage) | **GET** /{organization}/{project}/_apis/wiki/wikis/{wikiIdentifier}/pages | 
[**pagesGetPageById**](PagesApi.md#pagesGetPageById) | **GET** /{organization}/{project}/_apis/wiki/wikis/{wikiIdentifier}/pages/{id} | 
[**pagesUpdate**](PagesApi.md#pagesUpdate) | **PATCH** /{organization}/{project}/_apis/wiki/wikis/{wikiIdentifier}/pages/{id} | 


# **pagesCreateOrUpdate**
> \FrankHouweling\AzureDevOpsClient\Wiki\Model\WikiPage pagesCreateOrUpdate($organization, $body, $project, $wikiIdentifier, $path, $version, $apiVersion, $comment, $versionDescriptorVersion, $versionDescriptorVersionOptions, $versionDescriptorVersionType)



Creates or edits a wiki page.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wiki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wiki\Api\PagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Wiki\Model\WikiPageCreateOrUpdateParameters(); // \FrankHouweling\AzureDevOpsClient\Wiki\Model\WikiPageCreateOrUpdateParameters | Wiki create or update operation parameters.
$project = "project_example"; // string | Project ID or project name
$wikiIdentifier = "wikiIdentifier_example"; // string | Wiki ID or wiki name.
$path = "path_example"; // string | Wiki page path.
$version = "version_example"; // string | Version of the page on which the change is to be made. Mandatory for `Edit` scenario. To be populated in the If-Match header of the request.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$comment = "comment_example"; // string | Comment to be associated with the page operation.
$versionDescriptorVersion = "versionDescriptorVersion_example"; // string | Version string identifier (name of tag/branch, SHA1 of commit)
$versionDescriptorVersionOptions = "versionDescriptorVersionOptions_example"; // string | Version options - Specify additional modifiers to version (e.g Previous)
$versionDescriptorVersionType = "versionDescriptorVersionType_example"; // string | Version type (branch, tag, or commit). Determines how Id is interpreted

try {
    $result = $apiInstance->pagesCreateOrUpdate($organization, $body, $project, $wikiIdentifier, $path, $version, $apiVersion, $comment, $versionDescriptorVersion, $versionDescriptorVersionOptions, $versionDescriptorVersionType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PagesApi->pagesCreateOrUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Wiki\Model\WikiPageCreateOrUpdateParameters**](../Model/WikiPageCreateOrUpdateParameters.md)| Wiki create or update operation parameters. |
 **project** | **string**| Project ID or project name |
 **wikiIdentifier** | **string**| Wiki ID or wiki name. |
 **path** | **string**| Wiki page path. |
 **version** | **string**| Version of the page on which the change is to be made. Mandatory for &#x60;Edit&#x60; scenario. To be populated in the If-Match header of the request. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **comment** | **string**| Comment to be associated with the page operation. | [optional]
 **versionDescriptorVersion** | **string**| Version string identifier (name of tag/branch, SHA1 of commit) | [optional]
 **versionDescriptorVersionOptions** | **string**| Version options - Specify additional modifiers to version (e.g Previous) | [optional]
 **versionDescriptorVersionType** | **string**| Version type (branch, tag, or commit). Determines how Id is interpreted | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wiki\Model\WikiPage**](../Model/WikiPage.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pagesDeletePage**
> \FrankHouweling\AzureDevOpsClient\Wiki\Model\WikiPage pagesDeletePage($organization, $project, $wikiIdentifier, $path, $apiVersion, $comment, $versionDescriptorVersion, $versionDescriptorVersionOptions, $versionDescriptorVersionType)



Deletes a wiki page.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wiki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wiki\Api\PagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$wikiIdentifier = "wikiIdentifier_example"; // string | Wiki ID or wiki name.
$path = "path_example"; // string | Wiki page path.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$comment = "comment_example"; // string | Comment to be associated with this page delete.
$versionDescriptorVersion = "versionDescriptorVersion_example"; // string | Version string identifier (name of tag/branch, SHA1 of commit)
$versionDescriptorVersionOptions = "versionDescriptorVersionOptions_example"; // string | Version options - Specify additional modifiers to version (e.g Previous)
$versionDescriptorVersionType = "versionDescriptorVersionType_example"; // string | Version type (branch, tag, or commit). Determines how Id is interpreted

try {
    $result = $apiInstance->pagesDeletePage($organization, $project, $wikiIdentifier, $path, $apiVersion, $comment, $versionDescriptorVersion, $versionDescriptorVersionOptions, $versionDescriptorVersionType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PagesApi->pagesDeletePage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **wikiIdentifier** | **string**| Wiki ID or wiki name. |
 **path** | **string**| Wiki page path. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **comment** | **string**| Comment to be associated with this page delete. | [optional]
 **versionDescriptorVersion** | **string**| Version string identifier (name of tag/branch, SHA1 of commit) | [optional]
 **versionDescriptorVersionOptions** | **string**| Version options - Specify additional modifiers to version (e.g Previous) | [optional]
 **versionDescriptorVersionType** | **string**| Version type (branch, tag, or commit). Determines how Id is interpreted | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wiki\Model\WikiPage**](../Model/WikiPage.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pagesDeletePageById**
> \FrankHouweling\AzureDevOpsClient\Wiki\Model\WikiPage pagesDeletePageById($organization, $project, $wikiIdentifier, $id, $apiVersion, $comment)



Deletes a wiki page.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wiki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wiki\Api\PagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$wikiIdentifier = "wikiIdentifier_example"; // string | Wiki ID or wiki name.
$id = 56; // int | Wiki page ID.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$comment = "comment_example"; // string | Comment to be associated with this page delete.

try {
    $result = $apiInstance->pagesDeletePageById($organization, $project, $wikiIdentifier, $id, $apiVersion, $comment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PagesApi->pagesDeletePageById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **wikiIdentifier** | **string**| Wiki ID or wiki name. |
 **id** | **int**| Wiki page ID. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **comment** | **string**| Comment to be associated with this page delete. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wiki\Model\WikiPage**](../Model/WikiPage.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pagesGetPage**
> \FrankHouweling\AzureDevOpsClient\Wiki\Model\WikiPage pagesGetPage($organization, $project, $wikiIdentifier, $apiVersion, $path, $recursionLevel, $versionDescriptorVersion, $versionDescriptorVersionOptions, $versionDescriptorVersionType, $includeContent)



Gets metadata or content of the wiki page for the provided path. Content negotiation is done based on the `Accept` header sent in the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wiki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wiki\Api\PagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$wikiIdentifier = "wikiIdentifier_example"; // string | Wiki ID or wiki name.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$path = "path_example"; // string | Wiki page path.
$recursionLevel = "recursionLevel_example"; // string | Recursion level for subpages retrieval. Defaults to `None` (Optional).
$versionDescriptorVersion = "versionDescriptorVersion_example"; // string | Version string identifier (name of tag/branch, SHA1 of commit)
$versionDescriptorVersionOptions = "versionDescriptorVersionOptions_example"; // string | Version options - Specify additional modifiers to version (e.g Previous)
$versionDescriptorVersionType = "versionDescriptorVersionType_example"; // string | Version type (branch, tag, or commit). Determines how Id is interpreted
$includeContent = true; // bool | True to include the content of the page in the response for Json content type. Defaults to false (Optional)

try {
    $result = $apiInstance->pagesGetPage($organization, $project, $wikiIdentifier, $apiVersion, $path, $recursionLevel, $versionDescriptorVersion, $versionDescriptorVersionOptions, $versionDescriptorVersionType, $includeContent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PagesApi->pagesGetPage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **wikiIdentifier** | **string**| Wiki ID or wiki name. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **path** | **string**| Wiki page path. | [optional]
 **recursionLevel** | **string**| Recursion level for subpages retrieval. Defaults to &#x60;None&#x60; (Optional). | [optional]
 **versionDescriptorVersion** | **string**| Version string identifier (name of tag/branch, SHA1 of commit) | [optional]
 **versionDescriptorVersionOptions** | **string**| Version options - Specify additional modifiers to version (e.g Previous) | [optional]
 **versionDescriptorVersionType** | **string**| Version type (branch, tag, or commit). Determines how Id is interpreted | [optional]
 **includeContent** | **bool**| True to include the content of the page in the response for Json content type. Defaults to false (Optional) | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wiki\Model\WikiPage**](../Model/WikiPage.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/zip, text/plain, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pagesGetPageById**
> \FrankHouweling\AzureDevOpsClient\Wiki\Model\WikiPage pagesGetPageById($organization, $project, $wikiIdentifier, $id, $apiVersion, $recursionLevel, $includeContent)



Gets metadata or content of the wiki page for the provided page id. Content negotiation is done based on the `Accept` header sent in the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wiki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wiki\Api\PagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$wikiIdentifier = "wikiIdentifier_example"; // string | Wiki ID or wiki name..
$id = 56; // int | Wiki page ID.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$recursionLevel = "recursionLevel_example"; // string | Recursion level for subpages retrieval. Defaults to `None` (Optional).
$includeContent = true; // bool | True to include the content of the page in the response for Json content type. Defaults to false (Optional)

try {
    $result = $apiInstance->pagesGetPageById($organization, $project, $wikiIdentifier, $id, $apiVersion, $recursionLevel, $includeContent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PagesApi->pagesGetPageById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **wikiIdentifier** | **string**| Wiki ID or wiki name.. |
 **id** | **int**| Wiki page ID. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **recursionLevel** | **string**| Recursion level for subpages retrieval. Defaults to &#x60;None&#x60; (Optional). | [optional]
 **includeContent** | **bool**| True to include the content of the page in the response for Json content type. Defaults to false (Optional) | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wiki\Model\WikiPage**](../Model/WikiPage.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/zip, text/plain, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pagesUpdate**
> \FrankHouweling\AzureDevOpsClient\Wiki\Model\WikiPage pagesUpdate($organization, $body, $project, $wikiIdentifier, $id, $version, $apiVersion, $comment)



Edits a wiki page.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wiki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wiki\Api\PagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Wiki\Model\WikiPageCreateOrUpdateParameters(); // \FrankHouweling\AzureDevOpsClient\Wiki\Model\WikiPageCreateOrUpdateParameters | Wiki update operation parameters.
$project = "project_example"; // string | Project ID or project name
$wikiIdentifier = "wikiIdentifier_example"; // string | Wiki ID or wiki name.
$id = 56; // int | Wiki page ID.
$version = "version_example"; // string | Version of the page on which the change is to be made. Mandatory for `Edit` scenario. To be populated in the If-Match header of the request.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$comment = "comment_example"; // string | Comment to be associated with the page operation.

try {
    $result = $apiInstance->pagesUpdate($organization, $body, $project, $wikiIdentifier, $id, $version, $apiVersion, $comment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PagesApi->pagesUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Wiki\Model\WikiPageCreateOrUpdateParameters**](../Model/WikiPageCreateOrUpdateParameters.md)| Wiki update operation parameters. |
 **project** | **string**| Project ID or project name |
 **wikiIdentifier** | **string**| Wiki ID or wiki name. |
 **id** | **int**| Wiki page ID. |
 **version** | **string**| Version of the page on which the change is to be made. Mandatory for &#x60;Edit&#x60; scenario. To be populated in the If-Match header of the request. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **comment** | **string**| Comment to be associated with the page operation. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wiki\Model\WikiPage**](../Model/WikiPage.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

