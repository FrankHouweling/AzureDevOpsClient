# AzureDevOpsClient\Notification\SubscriptionsApi

All URIs are relative to *https://{service}.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**subscriptionsCreate**](SubscriptionsApi.md#subscriptionsCreate) | **POST** /{organization}/_apis/notification/subscriptions | 
[**subscriptionsDelete**](SubscriptionsApi.md#subscriptionsDelete) | **DELETE** /{organization}/_apis/notification/subscriptions/{subscriptionId} | 
[**subscriptionsGet**](SubscriptionsApi.md#subscriptionsGet) | **GET** /{organization}/_apis/notification/subscriptions/{subscriptionId} | 
[**subscriptionsGetSubscriptionTemplates**](SubscriptionsApi.md#subscriptionsGetSubscriptionTemplates) | **GET** /{organization}/_apis/notification/subscriptiontemplates | 
[**subscriptionsList**](SubscriptionsApi.md#subscriptionsList) | **GET** /{organization}/_apis/notification/subscriptions | 
[**subscriptionsQuery**](SubscriptionsApi.md#subscriptionsQuery) | **POST** /{organization}/_apis/notification/subscriptionquery | 
[**subscriptionsUpdate**](SubscriptionsApi.md#subscriptionsUpdate) | **PATCH** /{organization}/_apis/notification/subscriptions/{subscriptionId} | 
[**subscriptionsUpdateSubscriptionUserSettings**](SubscriptionsApi.md#subscriptionsUpdateSubscriptionUserSettings) | **PUT** /{organization}/_apis/notification/Subscriptions/{subscriptionId}/usersettings/{userId} | 


# **subscriptionsCreate**
> \AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\NotificationSubscription subscriptionsCreate($body, $organization, $apiVersion)



Create a new subscription.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Notification\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\NotificationSubscriptionCreateParameters(); // \AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\NotificationSubscriptionCreateParameters | 
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->subscriptionsCreate($body, $organization, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\NotificationSubscriptionCreateParameters**](../Model/NotificationSubscriptionCreateParameters.md)|  |
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\NotificationSubscription**](../Model/NotificationSubscription.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsDelete**
> subscriptionsDelete($subscriptionId, $organization, $apiVersion)



Delete a subscription.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Notification\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscriptionId = "subscriptionId_example"; // string | 
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->subscriptionsDelete($subscriptionId, $organization, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscriptionId** | **string**|  |
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsGet**
> \AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\NotificationSubscription subscriptionsGet($subscriptionId, $organization, $apiVersion, $queryFlags)



Get a notification subscription by its ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Notification\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscriptionId = "subscriptionId_example"; // string | 
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$queryFlags = "queryFlags_example"; // string | 

try {
    $result = $apiInstance->subscriptionsGet($subscriptionId, $organization, $apiVersion, $queryFlags);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscriptionId** | **string**|  |
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **queryFlags** | **string**|  | [optional]

### Return type

[**\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\NotificationSubscription**](../Model/NotificationSubscription.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsGetSubscriptionTemplates**
> \AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\NotificationSubscriptionTemplate[] subscriptionsGetSubscriptionTemplates($organization, $apiVersion)



Get available subscription templates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Notification\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->subscriptionsGetSubscriptionTemplates($organization, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsGetSubscriptionTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\NotificationSubscriptionTemplate[]**](../Model/NotificationSubscriptionTemplate.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsList**
> \AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\NotificationSubscription[] subscriptionsList($organization, $apiVersion, $targetId, $ids, $queryFlags)



Get a list of notification subscriptions, either by subscription IDs or by all subscriptions for a given user or group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Notification\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$targetId = "targetId_example"; // string | User or Group ID
$ids = "ids_example"; // string | List of subscription IDs
$queryFlags = "queryFlags_example"; // string | 

try {
    $result = $apiInstance->subscriptionsList($organization, $apiVersion, $targetId, $ids, $queryFlags);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **targetId** | [**string**](../Model/.md)| User or Group ID | [optional]
 **ids** | **string**| List of subscription IDs | [optional]
 **queryFlags** | **string**|  | [optional]

### Return type

[**\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\NotificationSubscription[]**](../Model/NotificationSubscription.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsQuery**
> \AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\NotificationSubscription[] subscriptionsQuery($body, $organization, $apiVersion)



Query for subscriptions. A subscription is returned if it matches one or more of the specified conditions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Notification\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\SubscriptionQuery(); // \AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\SubscriptionQuery | 
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->subscriptionsQuery($body, $organization, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\SubscriptionQuery**](../Model/SubscriptionQuery.md)|  |
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\NotificationSubscription[]**](../Model/NotificationSubscription.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsUpdate**
> \AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\NotificationSubscription subscriptionsUpdate($body, $subscriptionId, $organization, $apiVersion)



Update an existing subscription. Depending on the type of subscription and permissions, the caller can update the description, filter settings, channel (delivery) settings and more.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Notification\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\NotificationSubscriptionUpdateParameters(); // \AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\NotificationSubscriptionUpdateParameters | 
$subscriptionId = "subscriptionId_example"; // string | 
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->subscriptionsUpdate($body, $subscriptionId, $organization, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\NotificationSubscriptionUpdateParameters**](../Model/NotificationSubscriptionUpdateParameters.md)|  |
 **subscriptionId** | **string**|  |
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\NotificationSubscription**](../Model/NotificationSubscription.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsUpdateSubscriptionUserSettings**
> \AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\SubscriptionUserSettings subscriptionsUpdateSubscriptionUserSettings($body, $subscriptionId, $userId, $organization, $apiVersion)



Update the specified user's settings for the specified subscription. This API is typically used to opt in or out of a shared subscription. User settings can only be applied to shared subscriptions, like team subscriptions or default subscriptions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Notification\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\SubscriptionUserSettings(); // \AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\SubscriptionUserSettings | 
$subscriptionId = "subscriptionId_example"; // string | 
$userId = "userId_example"; // string | ID of the user
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->subscriptionsUpdateSubscriptionUserSettings($body, $subscriptionId, $userId, $organization, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsUpdateSubscriptionUserSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\SubscriptionUserSettings**](../Model/SubscriptionUserSettings.md)|  |
 **subscriptionId** | **string**|  |
 **userId** | [**string**](../Model/.md)| ID of the user |
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Notification\AzureDevOpsClient\Notification\Model\SubscriptionUserSettings**](../Model/SubscriptionUserSettings.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

