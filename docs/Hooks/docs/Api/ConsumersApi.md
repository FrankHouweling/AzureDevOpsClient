# FrankHouweling\AzureDevOpsClient\Hooks\ConsumersApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**consumersGet**](ConsumersApi.md#consumersGet) | **GET** /{organization}/_apis/hooks/consumers/{consumerId} | 
[**consumersGetConsumerAction**](ConsumersApi.md#consumersGetConsumerAction) | **GET** /{organization}/_apis/hooks/consumers/{consumerId}/actions/{consumerActionId} | 
[**consumersList**](ConsumersApi.md#consumersList) | **GET** /{organization}/_apis/hooks/consumers | 
[**consumersListConsumerActions**](ConsumersApi.md#consumersListConsumerActions) | **GET** /{organization}/_apis/hooks/consumers/{consumerId}/actions | 


# **consumersGet**
> \FrankHouweling\AzureDevOpsClient\Hooks\Model\Consumer consumersGet($organization, $consumerId, $apiVersion, $publisherId)



Get a specific consumer service. Optionally filter out consumer actions that do not support any event types for the specified publisher.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Hooks\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Hooks\Api\ConsumersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$consumerId = "consumerId_example"; // string | ID for a consumer.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$publisherId = "publisherId_example"; // string | 

try {
    $result = $apiInstance->consumersGet($organization, $consumerId, $apiVersion, $publisherId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsumersApi->consumersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **consumerId** | **string**| ID for a consumer. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **publisherId** | **string**|  | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Hooks\Model\Consumer**](../Model/Consumer.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **consumersGetConsumerAction**
> \FrankHouweling\AzureDevOpsClient\Hooks\Model\ConsumerAction consumersGetConsumerAction($organization, $consumerId, $consumerActionId, $apiVersion, $publisherId)



Get details about a specific consumer action.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Hooks\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Hooks\Api\ConsumersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$consumerId = "consumerId_example"; // string | ID for a consumer.
$consumerActionId = "consumerActionId_example"; // string | ID for a consumerActionId.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$publisherId = "publisherId_example"; // string | 

try {
    $result = $apiInstance->consumersGetConsumerAction($organization, $consumerId, $consumerActionId, $apiVersion, $publisherId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsumersApi->consumersGetConsumerAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **consumerId** | **string**| ID for a consumer. |
 **consumerActionId** | **string**| ID for a consumerActionId. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **publisherId** | **string**|  | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Hooks\Model\ConsumerAction**](../Model/ConsumerAction.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **consumersList**
> \FrankHouweling\AzureDevOpsClient\Hooks\Model\Consumer[] consumersList($organization, $apiVersion, $publisherId)



Get a list of available service hook consumer services. Optionally filter by consumers that support at least one event type from the specific publisher.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Hooks\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Hooks\Api\ConsumersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$publisherId = "publisherId_example"; // string | 

try {
    $result = $apiInstance->consumersList($organization, $apiVersion, $publisherId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsumersApi->consumersList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **publisherId** | **string**|  | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Hooks\Model\Consumer[]**](../Model/Consumer.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **consumersListConsumerActions**
> \FrankHouweling\AzureDevOpsClient\Hooks\Model\ConsumerAction[] consumersListConsumerActions($organization, $consumerId, $apiVersion, $publisherId)



Get a list of consumer actions for a specific consumer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Hooks\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Hooks\Api\ConsumersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$consumerId = "consumerId_example"; // string | ID for a consumer.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$publisherId = "publisherId_example"; // string | 

try {
    $result = $apiInstance->consumersListConsumerActions($organization, $consumerId, $apiVersion, $publisherId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsumersApi->consumersListConsumerActions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **consumerId** | **string**| ID for a consumer. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **publisherId** | **string**|  | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Hooks\Model\ConsumerAction[]**](../Model/ConsumerAction.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

