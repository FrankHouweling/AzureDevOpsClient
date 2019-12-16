# AzureDevOpsClient\Release\FoldersApi

All URIs are relative to *https://vsrm.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**foldersCreate**](FoldersApi.md#foldersCreate) | **POST** /{organization}/{project}/_apis/release/folders/{path} | 
[**foldersDelete**](FoldersApi.md#foldersDelete) | **DELETE** /{organization}/{project}/_apis/release/folders/{path} | 
[**foldersList**](FoldersApi.md#foldersList) | **GET** /{organization}/{project}/_apis/release/folders/{path} | 
[**foldersUpdate**](FoldersApi.md#foldersUpdate) | **PATCH** /{organization}/{project}/_apis/release/folders/{path} | 


# **foldersCreate**
> \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\Folder foldersCreate($organization, $body, $project, $path, $apiVersion)



This method is no longer supported. Use CreateFolder with folder parameter API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Release\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Release\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\Folder(); // \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\Folder | folder.
$project = "project_example"; // string | Project ID or project name
$path = "path_example"; // string | Path of the folder.
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
 **body** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\Folder**](../Model/Folder.md)| folder. |
 **project** | **string**| Project ID or project name |
 **path** | **string**| Path of the folder. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\Folder**](../Model/Folder.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **foldersDelete**
> foldersDelete($organization, $project, $path, $apiVersion)



Deletes a definition folder for given folder name and path and all it's existing definitions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Release\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Release\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$path = "path_example"; // string | Path of the folder to delete.
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
 **path** | **string**| Path of the folder to delete. |
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
> \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\Folder[] foldersList($organization, $project, $path, $apiVersion, $queryOrder)



Gets folders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Release\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Release\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$path = "path_example"; // string | Path of the folder.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.
$queryOrder = "queryOrder_example"; // string | Gets the results in the defined order. Default is 'None'.

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
 **path** | **string**| Path of the folder. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |
 **queryOrder** | **string**| Gets the results in the defined order. Default is &#39;None&#39;. | [optional]

### Return type

[**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\Folder[]**](../Model/Folder.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **foldersUpdate**
> \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\Folder foldersUpdate($organization, $body, $project, $path, $apiVersion)



Updates an existing folder at given existing path.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Release\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Release\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\Folder(); // \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\Folder | folder.
$project = "project_example"; // string | Project ID or project name
$path = "path_example"; // string | Path of the folder to update.
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
 **body** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\Folder**](../Model/Folder.md)| folder. |
 **project** | **string**| Project ID or project name |
 **path** | **string**| Path of the folder to update. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\Folder**](../Model/Folder.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

