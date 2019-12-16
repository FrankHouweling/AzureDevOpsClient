# AzureDevOpsClient\Build\PropertiesApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**propertiesGetBuildProperties**](PropertiesApi.md#propertiesGetBuildProperties) | **GET** /{organization}/{project}/_apis/build/builds/{buildId}/properties | 
[**propertiesGetDefinitionProperties**](PropertiesApi.md#propertiesGetDefinitionProperties) | **GET** /{organization}/{project}/_apis/build/definitions/{definitionId}/properties | 
[**propertiesUpdateBuildProperties**](PropertiesApi.md#propertiesUpdateBuildProperties) | **PATCH** /{organization}/{project}/_apis/build/builds/{buildId}/properties | 
[**propertiesUpdateDefinitionProperties**](PropertiesApi.md#propertiesUpdateDefinitionProperties) | **PATCH** /{organization}/{project}/_apis/build/definitions/{definitionId}/properties | 


# **propertiesGetBuildProperties**
> \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\PropertiesCollection propertiesGetBuildProperties($organization, $project, $buildId, $apiVersion, $filter)



Gets properties for a build.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Build\Api\PropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$buildId = 56; // int | The ID of the build.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$filter = "filter_example"; // string | A comma-delimited list of properties. If specified, filters to these specific properties.

try {
    $result = $apiInstance->propertiesGetBuildProperties($organization, $project, $buildId, $apiVersion, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertiesApi->propertiesGetBuildProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **buildId** | **int**| The ID of the build. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **filter** | **string**| A comma-delimited list of properties. If specified, filters to these specific properties. | [optional]

### Return type

[**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\PropertiesCollection**](../Model/PropertiesCollection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **propertiesGetDefinitionProperties**
> \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\PropertiesCollection propertiesGetDefinitionProperties($organization, $project, $definitionId, $apiVersion, $filter)



Gets properties for a definition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Build\Api\PropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$definitionId = 56; // int | The ID of the definition.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$filter = "filter_example"; // string | A comma-delimited list of properties. If specified, filters to these specific properties.

try {
    $result = $apiInstance->propertiesGetDefinitionProperties($organization, $project, $definitionId, $apiVersion, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertiesApi->propertiesGetDefinitionProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **definitionId** | **int**| The ID of the definition. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **filter** | **string**| A comma-delimited list of properties. If specified, filters to these specific properties. | [optional]

### Return type

[**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\PropertiesCollection**](../Model/PropertiesCollection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **propertiesUpdateBuildProperties**
> \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\PropertiesCollection propertiesUpdateBuildProperties($organization, $body, $project, $buildId, $apiVersion)



Updates properties for a build.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Build\Api\PropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\JsonPatchDocument(); // \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\JsonPatchDocument | A json-patch document describing the properties to update.
$project = "project_example"; // string | Project ID or project name
$buildId = 56; // int | The ID of the build.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->propertiesUpdateBuildProperties($organization, $body, $project, $buildId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertiesApi->propertiesUpdateBuildProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\JsonPatchDocument**](../Model/JsonPatchDocument.md)| A json-patch document describing the properties to update. |
 **project** | **string**| Project ID or project name |
 **buildId** | **int**| The ID of the build. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\PropertiesCollection**](../Model/PropertiesCollection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **propertiesUpdateDefinitionProperties**
> \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\PropertiesCollection propertiesUpdateDefinitionProperties($organization, $body, $project, $definitionId, $apiVersion)



Updates properties for a definition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Build\Api\PropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\JsonPatchDocument(); // \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\JsonPatchDocument | A json-patch document describing the properties to update.
$project = "project_example"; // string | Project ID or project name
$definitionId = 56; // int | The ID of the definition.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->propertiesUpdateDefinitionProperties($organization, $body, $project, $definitionId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertiesApi->propertiesUpdateDefinitionProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\JsonPatchDocument**](../Model/JsonPatchDocument.md)| A json-patch document describing the properties to update. |
 **project** | **string**| Project ID or project name |
 **definitionId** | **int**| The ID of the definition. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\PropertiesCollection**](../Model/PropertiesCollection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

