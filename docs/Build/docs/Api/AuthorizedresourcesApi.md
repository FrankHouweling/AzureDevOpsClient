# AzureDevOpsClient\Build\AuthorizedresourcesApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authorizedresourcesAuthorizeProjectResources**](AuthorizedresourcesApi.md#authorizedresourcesAuthorizeProjectResources) | **PATCH** /{organization}/{project}/_apis/build/authorizedresources | 
[**authorizedresourcesList**](AuthorizedresourcesApi.md#authorizedresourcesList) | **GET** /{organization}/{project}/_apis/build/authorizedresources | 


# **authorizedresourcesAuthorizeProjectResources**
> \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\DefinitionResourceReference[] authorizedresourcesAuthorizeProjectResources($organization, $body, $project, $apiVersion)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Build\Api\AuthorizedresourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = array(new \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\DefinitionResourceReference()); // \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\DefinitionResourceReference[] | 
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->authorizedresourcesAuthorizeProjectResources($organization, $body, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizedresourcesApi->authorizedresourcesAuthorizeProjectResources: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\DefinitionResourceReference[]**](../Model/DefinitionResourceReference.md)|  |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\DefinitionResourceReference[]**](../Model/DefinitionResourceReference.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authorizedresourcesList**
> \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\DefinitionResourceReference[] authorizedresourcesList($organization, $project, $apiVersion, $type, $id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Build\Api\AuthorizedresourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$type = "type_example"; // string | 
$id = "id_example"; // string | 

try {
    $result = $apiInstance->authorizedresourcesList($organization, $project, $apiVersion, $type, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizedresourcesApi->authorizedresourcesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **type** | **string**|  | [optional]
 **id** | **string**|  | [optional]

### Return type

[**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\DefinitionResourceReference[]**](../Model/DefinitionResourceReference.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

