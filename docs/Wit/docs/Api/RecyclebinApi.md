# FrankHouweling\AzureDevOpsClient\Wit\RecyclebinApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**recyclebinDestroyWorkItem**](RecyclebinApi.md#recyclebinDestroyWorkItem) | **DELETE** /{organization}/{project}/_apis/wit/recyclebin/{id} | 
[**recyclebinGet**](RecyclebinApi.md#recyclebinGet) | **GET** /{organization}/{project}/_apis/wit/recyclebin/{id} | 
[**recyclebinGetDeletedWorkItemShallowReferences**](RecyclebinApi.md#recyclebinGetDeletedWorkItemShallowReferences) | **GET** /{organization}/{project}/_apis/wit/recyclebin | 
[**recyclebinRestoreWorkItem**](RecyclebinApi.md#recyclebinRestoreWorkItem) | **PATCH** /{organization}/{project}/_apis/wit/recyclebin/{id} | 


# **recyclebinDestroyWorkItem**
> recyclebinDestroyWorkItem($organization, $id, $project, $apiVersion)



Destroys the specified work item permanently from the Recycle Bin. This action can not be undone.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\RecyclebinApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$id = 56; // int | ID of the work item to be destroyed permanently
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $apiInstance->recyclebinDestroyWorkItem($organization, $id, $project, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling RecyclebinApi->recyclebinDestroyWorkItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **id** | **int**| ID of the work item to be destroyed permanently |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recyclebinGet**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemDelete recyclebinGet($organization, $id, $project, $apiVersion)



Gets a deleted work item from Recycle Bin.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\RecyclebinApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$id = 56; // int | ID of the work item to be returned
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $result = $apiInstance->recyclebinGet($organization, $id, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecyclebinApi->recyclebinGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **id** | **int**| ID of the work item to be returned |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemDelete**](../Model/WorkItemDelete.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recyclebinGetDeletedWorkItemShallowReferences**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemDeleteShallowReference[] recyclebinGetDeletedWorkItemShallowReferences($organization, $project, $apiVersion)



Gets a list of the IDs and the URLs of the deleted the work items in the Recycle Bin.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\RecyclebinApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $result = $apiInstance->recyclebinGetDeletedWorkItemShallowReferences($organization, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecyclebinApi->recyclebinGetDeletedWorkItemShallowReferences: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemDeleteShallowReference[]**](../Model/WorkItemDeleteShallowReference.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recyclebinRestoreWorkItem**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemDelete recyclebinRestoreWorkItem($organization, $body, $id, $project, $apiVersion)



Restores the deleted work item from Recycle Bin.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\RecyclebinApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemDeleteUpdate(); // \FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemDeleteUpdate | Paylod with instructions to update the IsDeleted flag to false
$id = 56; // int | ID of the work item to be restored
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $result = $apiInstance->recyclebinRestoreWorkItem($organization, $body, $id, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecyclebinApi->recyclebinRestoreWorkItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemDeleteUpdate**](../Model/WorkItemDeleteUpdate.md)| Paylod with instructions to update the IsDeleted flag to false |
 **id** | **int**| ID of the work item to be restored |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemDelete**](../Model/WorkItemDelete.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

