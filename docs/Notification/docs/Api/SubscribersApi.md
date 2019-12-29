# FrankHouweling\AzureDevOpsClient\Notification\SubscribersApi

All URIs are relative to *https://{service}.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**subscribersGet**](SubscribersApi.md#subscribersGet) | **GET** /{organization}/_apis/notification/subscribers/{subscriberId} | 
[**subscribersUpdate**](SubscribersApi.md#subscribersUpdate) | **PATCH** /{organization}/_apis/notification/subscribers/{subscriberId} | 


# **subscribersGet**
> \FrankHouweling\AzureDevOpsClient\Notification\Model\NotificationSubscriber subscribersGet($subscriberId, $organization, $apiVersion)



Get delivery preferences of a notifications subscriber.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Notification\Api\SubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscriberId = "subscriberId_example"; // string | ID of the user or group.
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->subscribersGet($subscriberId, $organization, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscribersApi->subscribersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscriberId** | [**string**](../Model/.md)| ID of the user or group. |
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Notification\Model\NotificationSubscriber**](../Model/NotificationSubscriber.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscribersUpdate**
> \FrankHouweling\AzureDevOpsClient\Notification\Model\NotificationSubscriber subscribersUpdate($body, $subscriberId, $organization, $apiVersion)



Update delivery preferences of a notifications subscriber.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Notification\Api\SubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \FrankHouweling\AzureDevOpsClient\Notification\Model\NotificationSubscriberUpdateParameters(); // \FrankHouweling\AzureDevOpsClient\Notification\Model\NotificationSubscriberUpdateParameters | 
$subscriberId = "subscriberId_example"; // string | ID of the user or group.
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->subscribersUpdate($body, $subscriberId, $organization, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscribersApi->subscribersUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\FrankHouweling\AzureDevOpsClient\Notification\Model\NotificationSubscriberUpdateParameters**](../Model/NotificationSubscriberUpdateParameters.md)|  |
 **subscriberId** | [**string**](../Model/.md)| ID of the user or group. |
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Notification\Model\NotificationSubscriber**](../Model/NotificationSubscriber.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

