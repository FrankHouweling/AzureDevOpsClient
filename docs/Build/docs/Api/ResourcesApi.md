# FrankHouweling\AzureDevOpsClient\Build\ResourcesApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**resourcesAuthorizeDefinitionResources**](ResourcesApi.md#resourcesAuthorizeDefinitionResources) | **PATCH** /{organization}/{project}/_apis/build/definitions/{definitionId}/resources | 
[**resourcesList**](ResourcesApi.md#resourcesList) | **GET** /{organization}/{project}/_apis/build/definitions/{definitionId}/resources | 


# **resourcesAuthorizeDefinitionResources**
> \FrankHouweling\AzureDevOpsClient\Build\Model\DefinitionResourceReference[] resourcesAuthorizeDefinitionResources($organization, $body, $project, $definitionId, $apiVersion)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Build\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = array(new \FrankHouweling\AzureDevOpsClient\Build\Model\DefinitionResourceReference()); // \FrankHouweling\AzureDevOpsClient\Build\Model\DefinitionResourceReference[] | 
$project = "project_example"; // string | Project ID or project name
$definitionId = 56; // int | 
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->resourcesAuthorizeDefinitionResources($organization, $body, $project, $definitionId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->resourcesAuthorizeDefinitionResources: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Build\Model\DefinitionResourceReference[]**](../Model/DefinitionResourceReference.md)|  |
 **project** | **string**| Project ID or project name |
 **definitionId** | **int**|  |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Build\Model\DefinitionResourceReference[]**](../Model/DefinitionResourceReference.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resourcesList**
> \FrankHouweling\AzureDevOpsClient\Build\Model\DefinitionResourceReference[] resourcesList($organization, $project, $definitionId, $apiVersion)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Build\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$definitionId = 56; // int | 
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->resourcesList($organization, $project, $definitionId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->resourcesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **definitionId** | **int**|  |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Build\Model\DefinitionResourceReference[]**](../Model/DefinitionResourceReference.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

