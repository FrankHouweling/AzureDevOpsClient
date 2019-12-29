# FrankHouweling\AzureDevOpsClient\Hooks\SubscriptionsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**subscriptionsCreate**](SubscriptionsApi.md#subscriptionsCreate) | **POST** /{organization}/_apis/hooks/subscriptions | 
[**subscriptionsCreateSubscriptionsQuery**](SubscriptionsApi.md#subscriptionsCreateSubscriptionsQuery) | **POST** /{organization}/_apis/hooks/subscriptionsquery | 
[**subscriptionsDelete**](SubscriptionsApi.md#subscriptionsDelete) | **DELETE** /{organization}/_apis/hooks/subscriptions/{subscriptionId} | 
[**subscriptionsGet**](SubscriptionsApi.md#subscriptionsGet) | **GET** /{organization}/_apis/hooks/subscriptions/{subscriptionId} | 
[**subscriptionsList**](SubscriptionsApi.md#subscriptionsList) | **GET** /{organization}/_apis/hooks/subscriptions | 
[**subscriptionsReplaceSubscription**](SubscriptionsApi.md#subscriptionsReplaceSubscription) | **PUT** /{organization}/_apis/hooks/subscriptions/{subscriptionId} | 


# **subscriptionsCreate**
> \FrankHouweling\AzureDevOpsClient\Hooks\Model\Subscription subscriptionsCreate($organization, $body, $apiVersion)



Create a subscription.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Hooks\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Hooks\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Hooks\Model\Subscription(); // \FrankHouweling\AzureDevOpsClient\Hooks\Model\Subscription | Subscription to be created.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->subscriptionsCreate($organization, $body, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Hooks\Model\Subscription**](../Model/Subscription.md)| Subscription to be created. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Hooks\Model\Subscription**](../Model/Subscription.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsCreateSubscriptionsQuery**
> \FrankHouweling\AzureDevOpsClient\Hooks\Model\SubscriptionsQuery subscriptionsCreateSubscriptionsQuery($organization, $body, $apiVersion)



Query for service hook subscriptions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Hooks\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Hooks\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Hooks\Model\SubscriptionsQuery(); // \FrankHouweling\AzureDevOpsClient\Hooks\Model\SubscriptionsQuery | 
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->subscriptionsCreateSubscriptionsQuery($organization, $body, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsCreateSubscriptionsQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Hooks\Model\SubscriptionsQuery**](../Model/SubscriptionsQuery.md)|  |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Hooks\Model\SubscriptionsQuery**](../Model/SubscriptionsQuery.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsDelete**
> subscriptionsDelete($organization, $subscriptionId, $apiVersion)



Delete a specific service hooks subscription.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Hooks\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Hooks\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$subscriptionId = "subscriptionId_example"; // string | ID for a subscription.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->subscriptionsDelete($organization, $subscriptionId, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **subscriptionId** | [**string**](../Model/.md)| ID for a subscription. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsGet**
> \FrankHouweling\AzureDevOpsClient\Hooks\Model\Subscription subscriptionsGet($organization, $subscriptionId, $apiVersion)



Get a specific service hooks subscription.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Hooks\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Hooks\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$subscriptionId = "subscriptionId_example"; // string | ID for a subscription.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->subscriptionsGet($organization, $subscriptionId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **subscriptionId** | [**string**](../Model/.md)| ID for a subscription. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Hooks\Model\Subscription**](../Model/Subscription.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsList**
> \FrankHouweling\AzureDevOpsClient\Hooks\Model\Subscription[] subscriptionsList($organization, $apiVersion, $publisherId, $eventType, $consumerId, $consumerActionId)



Get a list of subscriptions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Hooks\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Hooks\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$publisherId = "publisherId_example"; // string | ID for a subscription.
$eventType = "eventType_example"; // string | The event type to filter on (if any).
$consumerId = "consumerId_example"; // string | ID for a consumer.
$consumerActionId = "consumerActionId_example"; // string | ID for a consumerActionId.

try {
    $result = $apiInstance->subscriptionsList($organization, $apiVersion, $publisherId, $eventType, $consumerId, $consumerActionId);
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
 **publisherId** | **string**| ID for a subscription. | [optional]
 **eventType** | **string**| The event type to filter on (if any). | [optional]
 **consumerId** | **string**| ID for a consumer. | [optional]
 **consumerActionId** | **string**| ID for a consumerActionId. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Hooks\Model\Subscription[]**](../Model/Subscription.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsReplaceSubscription**
> \FrankHouweling\AzureDevOpsClient\Hooks\Model\Subscription subscriptionsReplaceSubscription($organization, $body, $subscriptionId, $apiVersion)



Update a subscription. <param name=\"subscriptionId\">ID for a subscription that you wish to update.</param>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Hooks\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Hooks\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Hooks\Model\Subscription(); // \FrankHouweling\AzureDevOpsClient\Hooks\Model\Subscription | 
$subscriptionId = "subscriptionId_example"; // string | 
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->subscriptionsReplaceSubscription($organization, $body, $subscriptionId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsReplaceSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Hooks\Model\Subscription**](../Model/Subscription.md)|  |
 **subscriptionId** | [**string**](../Model/.md)|  |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Hooks\Model\Subscription**](../Model/Subscription.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

