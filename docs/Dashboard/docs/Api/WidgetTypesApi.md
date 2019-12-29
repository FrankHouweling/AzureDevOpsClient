# FrankHouweling\AzureDevOpsClient\Dashboard\WidgetTypesApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**widgetTypesGetWidgetMetadata**](WidgetTypesApi.md#widgetTypesGetWidgetMetadata) | **GET** /{organization}/{project}/_apis/dashboard/widgettypes/{contributionId} | 
[**widgetTypesGetWidgetTypes**](WidgetTypesApi.md#widgetTypesGetWidgetTypes) | **GET** /{organization}/{project}/_apis/dashboard/widgettypes | 


# **widgetTypesGetWidgetMetadata**
> \FrankHouweling\AzureDevOpsClient\Dashboard\Model\WidgetMetadataResponse widgetTypesGetWidgetMetadata($organization, $contributionId, $project, $apiVersion)



Get the widget metadata satisfying the specified contribution ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Dashboard\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Dashboard\Api\WidgetTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$contributionId = "contributionId_example"; // string | The ID of Contribution for the Widget
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->widgetTypesGetWidgetMetadata($organization, $contributionId, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetTypesApi->widgetTypesGetWidgetMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **contributionId** | **string**| The ID of Contribution for the Widget |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Dashboard\Model\WidgetMetadataResponse**](../Model/WidgetMetadataResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **widgetTypesGetWidgetTypes**
> \FrankHouweling\AzureDevOpsClient\Dashboard\Model\WidgetTypesResponse widgetTypesGetWidgetTypes($organization, $scope, $project, $apiVersion)



Get all available widget metadata in alphabetical order, including widgets marked with isVisibleFromCatalog == false.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Dashboard\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Dashboard\Api\WidgetTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$scope = "scope_example"; // string | 
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->widgetTypesGetWidgetTypes($organization, $scope, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetTypesApi->widgetTypesGetWidgetTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **scope** | **string**|  |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Dashboard\Model\WidgetTypesResponse**](../Model/WidgetTypesResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

