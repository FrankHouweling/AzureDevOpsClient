# FrankHouweling\AzureDevOpsClient\Artifacts\ServiceSettingsApi

All URIs are relative to *https://feeds.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**serviceSettingsGetGlobalPermissions**](ServiceSettingsApi.md#serviceSettingsGetGlobalPermissions) | **GET** /{organization}/_apis/packaging/globalpermissions | 
[**serviceSettingsSetGlobalPermissions**](ServiceSettingsApi.md#serviceSettingsSetGlobalPermissions) | **PATCH** /{organization}/_apis/packaging/globalpermissions | 


# **serviceSettingsGetGlobalPermissions**
> \FrankHouweling\AzureDevOpsClient\Artifacts\Model\GlobalPermission[] serviceSettingsGetGlobalPermissions($organization, $apiVersion, $includeIds)



Get all service-wide feed creation and administration permissions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Artifacts\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Artifacts\Api\ServiceSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$includeIds = true; // bool | Set to true to add IdentityIds to the permission objects.

try {
    $result = $apiInstance->serviceSettingsGetGlobalPermissions($organization, $apiVersion, $includeIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceSettingsApi->serviceSettingsGetGlobalPermissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **includeIds** | **bool**| Set to true to add IdentityIds to the permission objects. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\GlobalPermission[]**](../Model/GlobalPermission.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceSettingsSetGlobalPermissions**
> \FrankHouweling\AzureDevOpsClient\Artifacts\Model\GlobalPermission[] serviceSettingsSetGlobalPermissions($organization, $body, $apiVersion)



Set service-wide permissions that govern feed creation and administration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Artifacts\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Artifacts\Api\ServiceSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = array(new \FrankHouweling\AzureDevOpsClient\Artifacts\Model\GlobalPermission()); // \FrankHouweling\AzureDevOpsClient\Artifacts\Model\GlobalPermission[] | New permissions for the organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->serviceSettingsSetGlobalPermissions($organization, $body, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceSettingsApi->serviceSettingsSetGlobalPermissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\GlobalPermission[]**](../Model/GlobalPermission.md)| New permissions for the organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\GlobalPermission[]**](../Model/GlobalPermission.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

