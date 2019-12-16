# AzureDevOpsClient\Tfvc\ItemsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**itemsGetItemsBatch**](ItemsApi.md#itemsGetItemsBatch) | **POST** /{organization}/{project}/_apis/tfvc/itembatch | 
[**itemsList**](ItemsApi.md#itemsList) | **GET** /{organization}/{project}/_apis/tfvc/items | 


# **itemsGetItemsBatch**
> null[][] itemsGetItemsBatch($organization, $body, $project, $apiVersion)



Post for retrieving a set of items given a list of paths or a long path. Allows for specifying the recursionLevel and version descriptors for each path.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Tfvc\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Tfvc\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Tfvc\AzureDevOpsClient\Tfvc\Model\TfvcItemRequestData(); // \AzureDevOpsClient\Tfvc\AzureDevOpsClient\Tfvc\Model\TfvcItemRequestData | 
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->itemsGetItemsBatch($organization, $body, $project, $apiVersion);
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
 **body** | [**\AzureDevOpsClient\Tfvc\AzureDevOpsClient\Tfvc\Model\TfvcItemRequestData**](../Model/TfvcItemRequestData.md)|  |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**null[][]**](../Model/array.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/zip, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **itemsList**
> \AzureDevOpsClient\Tfvc\AzureDevOpsClient\Tfvc\Model\TfvcItem[] itemsList($organization, $project, $apiVersion, $scopePath, $recursionLevel, $includeLinks, $versionDescriptorVersion, $versionDescriptorVersionOption, $versionDescriptorVersionType)



Get a list of Tfvc items

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Tfvc\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Tfvc\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$scopePath = "scopePath_example"; // string | Version control path of a folder to return multiple items.
$recursionLevel = "recursionLevel_example"; // string | None (just the item), or OneLevel (contents of a folder).
$includeLinks = true; // bool | True to include links.
$versionDescriptorVersion = "versionDescriptorVersion_example"; // string | Version object.
$versionDescriptorVersionOption = "versionDescriptorVersionOption_example"; // string | 
$versionDescriptorVersionType = "versionDescriptorVersionType_example"; // string | 

try {
    $result = $apiInstance->itemsList($organization, $project, $apiVersion, $scopePath, $recursionLevel, $includeLinks, $versionDescriptorVersion, $versionDescriptorVersionOption, $versionDescriptorVersionType);
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
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **scopePath** | **string**| Version control path of a folder to return multiple items. | [optional]
 **recursionLevel** | **string**| None (just the item), or OneLevel (contents of a folder). | [optional]
 **includeLinks** | **bool**| True to include links. | [optional]
 **versionDescriptorVersion** | **string**| Version object. | [optional]
 **versionDescriptorVersionOption** | **string**|  | [optional]
 **versionDescriptorVersionType** | **string**|  | [optional]

### Return type

[**\AzureDevOpsClient\Tfvc\AzureDevOpsClient\Tfvc\Model\TfvcItem[]**](../Model/TfvcItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

