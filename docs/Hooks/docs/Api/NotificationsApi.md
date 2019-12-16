# FrankHouweling\AzureDevOpsClient\Hooks\NotificationsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**notificationsCreate**](NotificationsApi.md#notificationsCreate) | **POST** /{organization}/_apis/hooks/testnotifications | 
[**notificationsGet**](NotificationsApi.md#notificationsGet) | **GET** /{organization}/_apis/hooks/subscriptions/{subscriptionId}/notifications/{notificationId} | 
[**notificationsList**](NotificationsApi.md#notificationsList) | **GET** /{organization}/_apis/hooks/subscriptions/{subscriptionId}/notifications | 
[**notificationsQuery**](NotificationsApi.md#notificationsQuery) | **POST** /{organization}/_apis/hooks/notificationsquery | 


# **notificationsCreate**
> \FrankHouweling\AzureDevOpsClient\Hooks\Model\Notification notificationsCreate($organization, $body, $apiVersion, $useRealData)



Sends a test notification. This is useful for verifying the configuration of an updated or new service hooks subscription.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Hooks\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Hooks\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Hooks\Model\Notification(); // \FrankHouweling\AzureDevOpsClient\Hooks\Model\Notification | 
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$useRealData = true; // bool | Only allow testing with real data in existing subscriptions.

try {
    $result = $apiInstance->notificationsCreate($organization, $body, $apiVersion, $useRealData);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->notificationsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Hooks\Model\Notification**](../Model/Notification.md)|  |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **useRealData** | **bool**| Only allow testing with real data in existing subscriptions. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Hooks\Model\Notification**](../Model/Notification.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **notificationsGet**
> \FrankHouweling\AzureDevOpsClient\Hooks\Model\Notification notificationsGet($organization, $subscriptionId, $notificationId, $apiVersion)



Get a specific notification for a subscription.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Hooks\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Hooks\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$subscriptionId = "subscriptionId_example"; // string | ID for a subscription.
$notificationId = 56; // int | 
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->notificationsGet($organization, $subscriptionId, $notificationId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->notificationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **subscriptionId** | [**string**](../Model/.md)| ID for a subscription. |
 **notificationId** | **int**|  |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Hooks\Model\Notification**](../Model/Notification.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **notificationsList**
> \FrankHouweling\AzureDevOpsClient\Hooks\Model\Notification[] notificationsList($organization, $subscriptionId, $apiVersion, $maxResults, $status, $result)



Get a list of notifications for a specific subscription. A notification includes details about the event, the request to and the response from the consumer service.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Hooks\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Hooks\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$subscriptionId = "subscriptionId_example"; // string | ID for a subscription.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$maxResults = 56; // int | Maximum number of notifications to return. Default is **100**.
$status = "status_example"; // string | Get only notifications with this status.
$result = "result_example"; // string | Get only notifications with this result type.

try {
    $result = $apiInstance->notificationsList($organization, $subscriptionId, $apiVersion, $maxResults, $status, $result);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->notificationsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **subscriptionId** | [**string**](../Model/.md)| ID for a subscription. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **maxResults** | **int**| Maximum number of notifications to return. Default is **100**. | [optional]
 **status** | **string**| Get only notifications with this status. | [optional]
 **result** | **string**| Get only notifications with this result type. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Hooks\Model\Notification[]**](../Model/Notification.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **notificationsQuery**
> \FrankHouweling\AzureDevOpsClient\Hooks\Model\NotificationsQuery notificationsQuery($organization, $body, $apiVersion)



Query for notifications. A notification includes details about the event, the request to and the response from the consumer service.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Hooks\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Hooks\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Hooks\Model\NotificationsQuery(); // \FrankHouweling\AzureDevOpsClient\Hooks\Model\NotificationsQuery | 
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->notificationsQuery($organization, $body, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->notificationsQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Hooks\Model\NotificationsQuery**](../Model/NotificationsQuery.md)|  |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Hooks\Model\NotificationsQuery**](../Model/NotificationsQuery.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

