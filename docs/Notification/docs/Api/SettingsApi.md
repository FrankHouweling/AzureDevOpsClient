# AzureDevOpsClient\Notification\SettingsApi

All URIs are relative to *https://{service}.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**settingsGet**](SettingsApi.md#settingsGet) | **GET** /{organization}/_apis/notification/settings | 
[**settingsUpdate**](SettingsApi.md#settingsUpdate) | **PATCH** /{organization}/_apis/notification/settings | 


# **settingsGet**
> \AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\NotificationAdminSettings settingsGet($organization, $apiVersion)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = AzureDevOpsClient\Notification\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new AzureDevOpsClient\Notification\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->settingsGet($organization, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->settingsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\NotificationAdminSettings**](../Model/NotificationAdminSettings.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **settingsUpdate**
> \AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\NotificationAdminSettings settingsUpdate($body, $organization, $apiVersion)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = AzureDevOpsClient\Notification\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new AzureDevOpsClient\Notification\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\NotificationAdminSettingsUpdateParameters(); // \AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\NotificationAdminSettingsUpdateParameters | 
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->settingsUpdate($body, $organization, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->settingsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\NotificationAdminSettingsUpdateParameters**](../Model/NotificationAdminSettingsUpdateParameters.md)|  |
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\NotificationAdminSettings**](../Model/NotificationAdminSettings.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

