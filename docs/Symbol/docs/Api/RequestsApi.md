# AzureDevOpsClient\Symbol\RequestsApi

All URIs are relative to *https://artifacts.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**requestsCreateRequests**](RequestsApi.md#requestsCreateRequests) | **POST** /{organization}/_apis/symbol/requests | 
[**requestsCreateRequestsRequestIdDebugEntries**](RequestsApi.md#requestsCreateRequestsRequestIdDebugEntries) | **POST** /{organization}/_apis/symbol/requests/{requestId} | 
[**requestsDeleteRequestsRequestId**](RequestsApi.md#requestsDeleteRequestsRequestId) | **DELETE** /{organization}/_apis/symbol/requests/{requestId} | 
[**requestsDeleteRequestsRequestName**](RequestsApi.md#requestsDeleteRequestsRequestName) | **DELETE** /{organization}/_apis/symbol/requests | 
[**requestsGetRequestsRequestId**](RequestsApi.md#requestsGetRequestsRequestId) | **GET** /{organization}/_apis/symbol/requests/{requestId} | 
[**requestsGetRequestsRequestName**](RequestsApi.md#requestsGetRequestsRequestName) | **GET** /{organization}/_apis/symbol/requests | 
[**requestsUpdateRequestsRequestId**](RequestsApi.md#requestsUpdateRequestsRequestId) | **PATCH** /{organization}/_apis/symbol/requests/{requestId} | 
[**requestsUpdateRequestsRequestName**](RequestsApi.md#requestsUpdateRequestsRequestName) | **PATCH** /{organization}/_apis/symbol/requests | 


# **requestsCreateRequests**
> \AzureDevOpsClient\Symbol\AzureDevOpsClient\Symbol\Model\Request requestsCreateRequests($organization, $body, $apiVersion)



Create a new symbol request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Symbol\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Symbol\Api\RequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Symbol\AzureDevOpsClient\Symbol\Model\Request(); // \AzureDevOpsClient\Symbol\AzureDevOpsClient\Symbol\Model\Request | The symbol request to create.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->requestsCreateRequests($organization, $body, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequestsApi->requestsCreateRequests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Symbol\AzureDevOpsClient\Symbol\Model\Request**](../Model/Request.md)| The symbol request to create. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Symbol\AzureDevOpsClient\Symbol\Model\Request**](../Model/Request.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestsCreateRequestsRequestIdDebugEntries**
> \AzureDevOpsClient\Symbol\AzureDevOpsClient\Symbol\Model\DebugEntry[] requestsCreateRequestsRequestIdDebugEntries($organization, $body, $requestId, $collection, $apiVersion)



Create debug entries for a symbol request as specified by its identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Symbol\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Symbol\Api\RequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Symbol\AzureDevOpsClient\Symbol\Model\DebugEntryCreateBatch(); // \AzureDevOpsClient\Symbol\AzureDevOpsClient\Symbol\Model\DebugEntryCreateBatch | A batch that contains debug entries to create.
$requestId = "requestId_example"; // string | The symbol request identifier.
$collection = "collection_example"; // string | A valid debug entry collection name. Must be \"debugentries\".
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->requestsCreateRequestsRequestIdDebugEntries($organization, $body, $requestId, $collection, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequestsApi->requestsCreateRequestsRequestIdDebugEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Symbol\AzureDevOpsClient\Symbol\Model\DebugEntryCreateBatch**](../Model/DebugEntryCreateBatch.md)| A batch that contains debug entries to create. |
 **requestId** | **string**| The symbol request identifier. |
 **collection** | **string**| A valid debug entry collection name. Must be \&quot;debugentries\&quot;. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Symbol\AzureDevOpsClient\Symbol\Model\DebugEntry[]**](../Model/DebugEntry.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestsDeleteRequestsRequestId**
> requestsDeleteRequestsRequestId($organization, $requestId, $apiVersion, $synchronous)



Delete a symbol request by request identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Symbol\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Symbol\Api\RequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$requestId = "requestId_example"; // string | The symbol request identifier.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$synchronous = true; // bool | If true, delete all the debug entries under this request synchronously in the current session. If false, the deletion will be postponed to a later point and be executed automatically by the system.

try {
    $apiInstance->requestsDeleteRequestsRequestId($organization, $requestId, $apiVersion, $synchronous);
} catch (Exception $e) {
    echo 'Exception when calling RequestsApi->requestsDeleteRequestsRequestId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **requestId** | **string**| The symbol request identifier. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **synchronous** | **bool**| If true, delete all the debug entries under this request synchronously in the current session. If false, the deletion will be postponed to a later point and be executed automatically by the system. | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestsDeleteRequestsRequestName**
> requestsDeleteRequestsRequestName($organization, $requestName, $apiVersion, $synchronous)



Delete a symbol request by request name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Symbol\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Symbol\Api\RequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$requestName = "requestName_example"; // string | The symbol request name.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$synchronous = true; // bool | If true, delete all the debug entries under this request synchronously in the current session. If false, the deletion will be postponed to a later point and be executed automatically by the system.

try {
    $apiInstance->requestsDeleteRequestsRequestName($organization, $requestName, $apiVersion, $synchronous);
} catch (Exception $e) {
    echo 'Exception when calling RequestsApi->requestsDeleteRequestsRequestName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **requestName** | **string**| The symbol request name. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **synchronous** | **bool**| If true, delete all the debug entries under this request synchronously in the current session. If false, the deletion will be postponed to a later point and be executed automatically by the system. | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestsGetRequestsRequestId**
> \AzureDevOpsClient\Symbol\AzureDevOpsClient\Symbol\Model\Request requestsGetRequestsRequestId($organization, $requestId, $apiVersion)



Get a symbol request by request identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Symbol\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Symbol\Api\RequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$requestId = "requestId_example"; // string | The symbol request identifier.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->requestsGetRequestsRequestId($organization, $requestId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequestsApi->requestsGetRequestsRequestId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **requestId** | **string**| The symbol request identifier. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Symbol\AzureDevOpsClient\Symbol\Model\Request**](../Model/Request.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestsGetRequestsRequestName**
> \AzureDevOpsClient\Symbol\AzureDevOpsClient\Symbol\Model\Request requestsGetRequestsRequestName($organization, $requestName, $apiVersion)



Get a symbol request by request name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Symbol\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Symbol\Api\RequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$requestName = "requestName_example"; // string | The symbol request name.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->requestsGetRequestsRequestName($organization, $requestName, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequestsApi->requestsGetRequestsRequestName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **requestName** | **string**| The symbol request name. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Symbol\AzureDevOpsClient\Symbol\Model\Request**](../Model/Request.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestsUpdateRequestsRequestId**
> \AzureDevOpsClient\Symbol\AzureDevOpsClient\Symbol\Model\Request requestsUpdateRequestsRequestId($organization, $body, $requestId, $apiVersion)



Update a symbol request by request identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Symbol\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Symbol\Api\RequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Symbol\AzureDevOpsClient\Symbol\Model\Request(); // \AzureDevOpsClient\Symbol\AzureDevOpsClient\Symbol\Model\Request | The symbol request.
$requestId = "requestId_example"; // string | The symbol request identifier.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->requestsUpdateRequestsRequestId($organization, $body, $requestId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequestsApi->requestsUpdateRequestsRequestId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Symbol\AzureDevOpsClient\Symbol\Model\Request**](../Model/Request.md)| The symbol request. |
 **requestId** | **string**| The symbol request identifier. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Symbol\AzureDevOpsClient\Symbol\Model\Request**](../Model/Request.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestsUpdateRequestsRequestName**
> \AzureDevOpsClient\Symbol\AzureDevOpsClient\Symbol\Model\Request requestsUpdateRequestsRequestName($organization, $body, $requestName, $apiVersion)



Update a symbol request by request name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Symbol\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Symbol\Api\RequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Symbol\AzureDevOpsClient\Symbol\Model\Request(); // \AzureDevOpsClient\Symbol\AzureDevOpsClient\Symbol\Model\Request | The symbol request.
$requestName = "requestName_example"; // string | The symbol request name.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->requestsUpdateRequestsRequestName($organization, $body, $requestName, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RequestsApi->requestsUpdateRequestsRequestName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Symbol\AzureDevOpsClient\Symbol\Model\Request**](../Model/Request.md)| The symbol request. |
 **requestName** | **string**| The symbol request name. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Symbol\AzureDevOpsClient\Symbol\Model\Request**](../Model/Request.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

