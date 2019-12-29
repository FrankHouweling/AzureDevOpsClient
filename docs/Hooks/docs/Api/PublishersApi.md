# FrankHouweling\AzureDevOpsClient\Hooks\PublishersApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**publishersGet**](PublishersApi.md#publishersGet) | **GET** /{organization}/_apis/hooks/publishers/{publisherId} | 
[**publishersGetEventType**](PublishersApi.md#publishersGetEventType) | **GET** /{organization}/_apis/hooks/publishers/{publisherId}/eventtypes/{eventTypeId} | 
[**publishersList**](PublishersApi.md#publishersList) | **GET** /{organization}/_apis/hooks/publishers | 
[**publishersListEventTypes**](PublishersApi.md#publishersListEventTypes) | **GET** /{organization}/_apis/hooks/publishers/{publisherId}/eventtypes | 
[**publishersQueryInputValues**](PublishersApi.md#publishersQueryInputValues) | **POST** /{organization}/_apis/hooks/publishers/{publisherId}/inputValuesQuery | 
[**publishersQueryPublishers**](PublishersApi.md#publishersQueryPublishers) | **POST** /{organization}/_apis/hooks/publishersquery | 


# **publishersGet**
> \FrankHouweling\AzureDevOpsClient\Hooks\Model\Publisher publishersGet($organization, $publisherId, $apiVersion)



Get a specific service hooks publisher.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Hooks\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Hooks\Api\PublishersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$publisherId = "publisherId_example"; // string | ID for a publisher.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->publishersGet($organization, $publisherId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublishersApi->publishersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **publisherId** | **string**| ID for a publisher. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Hooks\Model\Publisher**](../Model/Publisher.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publishersGetEventType**
> \FrankHouweling\AzureDevOpsClient\Hooks\Model\EventTypeDescriptor publishersGetEventType($organization, $publisherId, $eventTypeId, $apiVersion)



Get a specific event type.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Hooks\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Hooks\Api\PublishersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$publisherId = "publisherId_example"; // string | ID for a publisher.
$eventTypeId = "eventTypeId_example"; // string | 
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->publishersGetEventType($organization, $publisherId, $eventTypeId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublishersApi->publishersGetEventType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **publisherId** | **string**| ID for a publisher. |
 **eventTypeId** | **string**|  |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Hooks\Model\EventTypeDescriptor**](../Model/EventTypeDescriptor.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publishersList**
> \FrankHouweling\AzureDevOpsClient\Hooks\Model\Publisher[] publishersList($organization, $apiVersion)



Get a list of publishers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Hooks\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Hooks\Api\PublishersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->publishersList($organization, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublishersApi->publishersList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Hooks\Model\Publisher[]**](../Model/Publisher.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publishersListEventTypes**
> \FrankHouweling\AzureDevOpsClient\Hooks\Model\EventTypeDescriptor[] publishersListEventTypes($organization, $publisherId, $apiVersion)



Get the event types for a specific publisher.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Hooks\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Hooks\Api\PublishersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$publisherId = "publisherId_example"; // string | ID for a publisher.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->publishersListEventTypes($organization, $publisherId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublishersApi->publishersListEventTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **publisherId** | **string**| ID for a publisher. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Hooks\Model\EventTypeDescriptor[]**](../Model/EventTypeDescriptor.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publishersQueryInputValues**
> \FrankHouweling\AzureDevOpsClient\Hooks\Model\InputValuesQuery publishersQueryInputValues($organization, $body, $publisherId, $apiVersion)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Hooks\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Hooks\Api\PublishersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Hooks\Model\InputValuesQuery(); // \FrankHouweling\AzureDevOpsClient\Hooks\Model\InputValuesQuery | 
$publisherId = "publisherId_example"; // string | 
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->publishersQueryInputValues($organization, $body, $publisherId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublishersApi->publishersQueryInputValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Hooks\Model\InputValuesQuery**](../Model/InputValuesQuery.md)|  |
 **publisherId** | **string**|  |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Hooks\Model\InputValuesQuery**](../Model/InputValuesQuery.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publishersQueryPublishers**
> \FrankHouweling\AzureDevOpsClient\Hooks\Model\PublishersQuery publishersQueryPublishers($organization, $body, $apiVersion)



Query for service hook publishers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Hooks\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Hooks\Api\PublishersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Hooks\Model\PublishersQuery(); // \FrankHouweling\AzureDevOpsClient\Hooks\Model\PublishersQuery | 
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->publishersQueryPublishers($organization, $body, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublishersApi->publishersQueryPublishers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Hooks\Model\PublishersQuery**](../Model/PublishersQuery.md)|  |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Hooks\Model\PublishersQuery**](../Model/PublishersQuery.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

