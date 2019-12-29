# FrankHouweling\AzureDevOpsClient\DistributedTask\PoolsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**poolsAdd**](PoolsApi.md#poolsAdd) | **POST** /{organization}/_apis/distributedtask/pools | 
[**poolsDelete**](PoolsApi.md#poolsDelete) | **DELETE** /{organization}/_apis/distributedtask/pools/{poolId} | 
[**poolsGet**](PoolsApi.md#poolsGet) | **GET** /{organization}/_apis/distributedtask/pools/{poolId} | 
[**poolsGetAgentPoolsByIds**](PoolsApi.md#poolsGetAgentPoolsByIds) | **GET** /{organization}/_apis/distributedtask/pools | 
[**poolsUpdate**](PoolsApi.md#poolsUpdate) | **PATCH** /{organization}/_apis/distributedtask/pools/{poolId} | 


# **poolsAdd**
> \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentPool poolsAdd($organization, $body, $apiVersion)



Create an agent pool.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\DistributedTask\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\DistributedTask\Api\PoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentPool(); // \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentPool | Details about the new agent pool
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->poolsAdd($organization, $body, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoolsApi->poolsAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentPool**](../Model/TaskAgentPool.md)| Details about the new agent pool |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentPool**](../Model/TaskAgentPool.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **poolsDelete**
> poolsDelete($organization, $poolId, $apiVersion)



Delete an agent pool.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\DistributedTask\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\DistributedTask\Api\PoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$poolId = 56; // int | ID of the agent pool to delete
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->poolsDelete($organization, $poolId, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling PoolsApi->poolsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **poolId** | **int**| ID of the agent pool to delete |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **poolsGet**
> \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentPool poolsGet($organization, $poolId, $apiVersion, $properties, $actionFilter)



Get information about an agent pool.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\DistributedTask\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\DistributedTask\Api\PoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$poolId = 56; // int | An agent pool ID
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$properties = "properties_example"; // string | Agent pool properties (comma-separated)
$actionFilter = "actionFilter_example"; // string | Filter by whether the calling user has use or manage permissions

try {
    $result = $apiInstance->poolsGet($organization, $poolId, $apiVersion, $properties, $actionFilter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoolsApi->poolsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **poolId** | **int**| An agent pool ID |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **properties** | **string**| Agent pool properties (comma-separated) | [optional]
 **actionFilter** | **string**| Filter by whether the calling user has use or manage permissions | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentPool**](../Model/TaskAgentPool.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **poolsGetAgentPoolsByIds**
> \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentPool[] poolsGetAgentPoolsByIds($organization, $poolIds, $apiVersion, $actionFilter)



Get a list of agent pools.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\DistributedTask\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\DistributedTask\Api\PoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$poolIds = "poolIds_example"; // string | pool Ids to fetch
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$actionFilter = "actionFilter_example"; // string | Filter by whether the calling user has use or manage permissions

try {
    $result = $apiInstance->poolsGetAgentPoolsByIds($organization, $poolIds, $apiVersion, $actionFilter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoolsApi->poolsGetAgentPoolsByIds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **poolIds** | **string**| pool Ids to fetch |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **actionFilter** | **string**| Filter by whether the calling user has use or manage permissions | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentPool[]**](../Model/TaskAgentPool.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **poolsUpdate**
> \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentPool poolsUpdate($organization, $body, $poolId, $apiVersion)



Update properties on an agent pool

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\DistributedTask\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\DistributedTask\Api\PoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentPool(); // \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentPool | Updated agent pool details
$poolId = 56; // int | The agent pool to update
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->poolsUpdate($organization, $body, $poolId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoolsApi->poolsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentPool**](../Model/TaskAgentPool.md)| Updated agent pool details |
 **poolId** | **int**| The agent pool to update |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentPool**](../Model/TaskAgentPool.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

