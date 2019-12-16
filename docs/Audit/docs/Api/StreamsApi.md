# AzureDevOpsClient\Audit\StreamsApi

All URIs are relative to *https://auditservice.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**streamsCreate**](StreamsApi.md#streamsCreate) | **POST** /{organization}/_apis/audit/streams | 
[**streamsDelete**](StreamsApi.md#streamsDelete) | **DELETE** /{organization}/_apis/audit/streams/{streamId} | 
[**streamsQueryAllStreams**](StreamsApi.md#streamsQueryAllStreams) | **GET** /{organization}/_apis/audit/streams | 
[**streamsQueryStreamById**](StreamsApi.md#streamsQueryStreamById) | **GET** /{organization}/_apis/audit/streams/{streamId} | 
[**streamsUpdateStatus**](StreamsApi.md#streamsUpdateStatus) | **PUT** /{organization}/_apis/audit/streams/{streamId} | 
[**streamsUpdateStream**](StreamsApi.md#streamsUpdateStream) | **PUT** /{organization}/_apis/audit/streams | 


# **streamsCreate**
> \AzureDevOpsClient\Audit\AzureDevOpsClient\Audit\Model\AuditStream streamsCreate($organization, $body, $daysToBackfill, $apiVersion)



Create new Audit Stream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = AzureDevOpsClient\Audit\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new AzureDevOpsClient\Audit\Api\StreamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Audit\AzureDevOpsClient\Audit\Model\AuditStream(); // \AzureDevOpsClient\Audit\AzureDevOpsClient\Audit\Model\AuditStream | Stream entry
$daysToBackfill = 56; // int | The number of days of previously recorded audit data that will be replayed into the stream. A value of zero will result in only new events being streamed.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->streamsCreate($organization, $body, $daysToBackfill, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamsApi->streamsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Audit\AzureDevOpsClient\Audit\Model\AuditStream**](../Model/AuditStream.md)| Stream entry |
 **daysToBackfill** | **int**| The number of days of previously recorded audit data that will be replayed into the stream. A value of zero will result in only new events being streamed. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Audit\AzureDevOpsClient\Audit\Model\AuditStream**](../Model/AuditStream.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **streamsDelete**
> streamsDelete($organization, $streamId, $apiVersion)



Delete Audit Stream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = AzureDevOpsClient\Audit\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new AzureDevOpsClient\Audit\Api\StreamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$streamId = 56; // int | Id of stream entry to delete
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->streamsDelete($organization, $streamId, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling StreamsApi->streamsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **streamId** | **int**| Id of stream entry to delete |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **streamsQueryAllStreams**
> \AzureDevOpsClient\Audit\AzureDevOpsClient\Audit\Model\AuditStream[] streamsQueryAllStreams($organization, $apiVersion)



Return all Audit Streams scoped to an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = AzureDevOpsClient\Audit\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new AzureDevOpsClient\Audit\Api\StreamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->streamsQueryAllStreams($organization, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamsApi->streamsQueryAllStreams: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Audit\AzureDevOpsClient\Audit\Model\AuditStream[]**](../Model/AuditStream.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **streamsQueryStreamById**
> \AzureDevOpsClient\Audit\AzureDevOpsClient\Audit\Model\AuditStream streamsQueryStreamById($organization, $streamId, $apiVersion)



Return Audit Stream with id of streamId if one exists otherwise throw

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = AzureDevOpsClient\Audit\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new AzureDevOpsClient\Audit\Api\StreamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$streamId = 56; // int | Id of stream entry to retrieve
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->streamsQueryStreamById($organization, $streamId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamsApi->streamsQueryStreamById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **streamId** | **int**| Id of stream entry to retrieve |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Audit\AzureDevOpsClient\Audit\Model\AuditStream**](../Model/AuditStream.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **streamsUpdateStatus**
> \AzureDevOpsClient\Audit\AzureDevOpsClient\Audit\Model\AuditStream streamsUpdateStatus($organization, $streamId, $status, $apiVersion)



Update existing Audit Stream status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = AzureDevOpsClient\Audit\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new AzureDevOpsClient\Audit\Api\StreamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$streamId = 56; // int | Id of stream entry to be updated
$status = "status_example"; // string | Status of the stream
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->streamsUpdateStatus($organization, $streamId, $status, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamsApi->streamsUpdateStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **streamId** | **int**| Id of stream entry to be updated |
 **status** | **string**| Status of the stream |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Audit\AzureDevOpsClient\Audit\Model\AuditStream**](../Model/AuditStream.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **streamsUpdateStream**
> \AzureDevOpsClient\Audit\AzureDevOpsClient\Audit\Model\AuditStream streamsUpdateStream($organization, $body, $apiVersion)



Update existing Audit Stream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = AzureDevOpsClient\Audit\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new AzureDevOpsClient\Audit\Api\StreamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Audit\AzureDevOpsClient\Audit\Model\AuditStream(); // \AzureDevOpsClient\Audit\AzureDevOpsClient\Audit\Model\AuditStream | Stream entry
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->streamsUpdateStream($organization, $body, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamsApi->streamsUpdateStream: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Audit\AzureDevOpsClient\Audit\Model\AuditStream**](../Model/AuditStream.md)| Stream entry |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Audit\AzureDevOpsClient\Audit\Model\AuditStream**](../Model/AuditStream.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

