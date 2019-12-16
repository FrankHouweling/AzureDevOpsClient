# AzureDevOpsClient\Notification\EventTypesApi

All URIs are relative to *https://{service}.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**eventTypesGet**](EventTypesApi.md#eventTypesGet) | **GET** /{organization}/_apis/notification/eventtypes/{eventType} | 
[**eventTypesList**](EventTypesApi.md#eventTypesList) | **GET** /{organization}/_apis/notification/eventtypes | 


# **eventTypesGet**
> \AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\NotificationEventType eventTypesGet($eventType, $organization, $apiVersion)



Get a specific event type.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Notification\Api\EventTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$eventType = "eventType_example"; // string | The ID of the event type.
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->eventTypesGet($eventType, $organization, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventTypesApi->eventTypesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **eventType** | **string**| The ID of the event type. |
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\NotificationEventType**](../Model/NotificationEventType.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventTypesList**
> \AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\NotificationEventType[] eventTypesList($organization, $apiVersion, $publisherId)



List available event types for this service. Optionally filter by only event types for the specified publisher.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Notification\Api\EventTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$publisherId = "publisherId_example"; // string | Limit to event types for this publisher

try {
    $result = $apiInstance->eventTypesList($organization, $apiVersion, $publisherId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventTypesApi->eventTypesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **publisherId** | **string**| Limit to event types for this publisher | [optional]

### Return type

[**\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\NotificationEventType[]**](../Model/NotificationEventType.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

