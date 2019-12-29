# FrankHouweling\AzureDevOpsClient\Wit\WorkItemIconsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**workItemIconsGet**](WorkItemIconsApi.md#workItemIconsGet) | **GET** /{organization}/_apis/wit/workitemicons/{icon} | 
[**workItemIconsList**](WorkItemIconsApi.md#workItemIconsList) | **GET** /{organization}/_apis/wit/workitemicons | 


# **workItemIconsGet**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemIcon workItemIconsGet($icon, $organization, $apiVersion, $color, $v)



Get a work item icon given the friendly name and icon color.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\WorkItemIconsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$icon = "icon_example"; // string | The name of the icon
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$color = "color_example"; // string | The 6-digit hex color for the icon
$v = 56; // int | The version of the icon (used only for cache invalidation)

try {
    $result = $apiInstance->workItemIconsGet($icon, $organization, $apiVersion, $color, $v);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkItemIconsApi->workItemIconsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **icon** | **string**| The name of the icon |
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **color** | **string**| The 6-digit hex color for the icon | [optional]
 **v** | **int**| The version of the icon (used only for cache invalidation) | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemIcon**](../Model/WorkItemIcon.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: image/svg+xml, image/xaml+xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **workItemIconsList**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemIcon[] workItemIconsList($organization, $apiVersion)



Get a list of all work item icons.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\WorkItemIconsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->workItemIconsList($organization, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkItemIconsApi->workItemIconsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemIcon[]**](../Model/WorkItemIcon.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

