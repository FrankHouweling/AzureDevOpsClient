# AzureDevOpsClient\Build\FoldersApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**foldersCreate**](FoldersApi.md#foldersCreate) | **PUT** /{organization}/{project}/_apis/build/folders | 
[**foldersDelete**](FoldersApi.md#foldersDelete) | **DELETE** /{organization}/{project}/_apis/build/folders | 
[**foldersList**](FoldersApi.md#foldersList) | **GET** /{organization}/{project}/_apis/build/folders/{path} | 
[**foldersUpdate**](FoldersApi.md#foldersUpdate) | **POST** /{organization}/{project}/_apis/build/folders | 


# **foldersCreate**
> \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\Folder foldersCreate($organization, $body, $project, $path, $apiVersion)



Creates a new folder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Build\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\Folder(); // \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\Folder | The folder.
$project = "project_example"; // string | Project ID or project name
$path = "path_example"; // string | The full path of the folder.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $result = $apiInstance->foldersCreate($organization, $body, $project, $path, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->foldersCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\Folder**](../Model/Folder.md)| The folder. |
 **project** | **string**| Project ID or project name |
 **path** | **string**| The full path of the folder. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\Folder**](../Model/Folder.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **foldersDelete**
> foldersDelete($organization, $project, $path, $apiVersion)



Deletes a definition folder. Definitions and their corresponding builds will also be deleted.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Build\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$path = "path_example"; // string | The full path to the folder.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $apiInstance->foldersDelete($organization, $project, $path, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->foldersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **path** | **string**| The full path to the folder. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **foldersList**
> \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\Folder[] foldersList($organization, $project, $path, $apiVersion, $queryOrder)



Gets a list of build definition folders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Build\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$path = "path_example"; // string | The path to start with.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.
$queryOrder = "queryOrder_example"; // string | The order in which folders should be returned.

try {
    $result = $apiInstance->foldersList($organization, $project, $path, $apiVersion, $queryOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->foldersList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **path** | **string**| The path to start with. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |
 **queryOrder** | **string**| The order in which folders should be returned. | [optional]

### Return type

[**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\Folder[]**](../Model/Folder.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **foldersUpdate**
> \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\Folder foldersUpdate($organization, $body, $project, $path, $apiVersion)



Updates an existing folder at given  existing path

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Build\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\Folder(); // \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\Folder | The new version of the folder.
$project = "project_example"; // string | Project ID or project name
$path = "path_example"; // string | The full path to the folder.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $result = $apiInstance->foldersUpdate($organization, $body, $project, $path, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->foldersUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\Folder**](../Model/Folder.md)| The new version of the folder. |
 **project** | **string**| Project ID or project name |
 **path** | **string**| The full path to the folder. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\Folder**](../Model/Folder.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

