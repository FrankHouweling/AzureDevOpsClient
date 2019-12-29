# FrankHouweling\AzureDevOpsClient\DistributedTask\QueuesApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**queuesAdd**](QueuesApi.md#queuesAdd) | **POST** /{organization}/{project}/_apis/distributedtask/queues | 
[**queuesDelete**](QueuesApi.md#queuesDelete) | **DELETE** /{organization}/{project}/_apis/distributedtask/queues/{queueId} | 
[**queuesGet**](QueuesApi.md#queuesGet) | **GET** /{organization}/{project}/_apis/distributedtask/queues/{queueId} | 
[**queuesGetAgentQueuesForPools**](QueuesApi.md#queuesGetAgentQueuesForPools) | **GET** /{organization}/{project}/_apis/distributedtask/queues | 


# **queuesAdd**
> \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentQueue queuesAdd($organization, $body, $project, $apiVersion, $authorizePipelines)



Create a new agent queue to connect a project to an agent pool.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\DistributedTask\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\DistributedTask\Api\QueuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentQueue(); // \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentQueue | Details about the queue to create
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$authorizePipelines = true; // bool | Automatically authorize this queue when using YAML

try {
    $result = $apiInstance->queuesAdd($organization, $body, $project, $apiVersion, $authorizePipelines);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueuesApi->queuesAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentQueue**](../Model/TaskAgentQueue.md)| Details about the queue to create |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **authorizePipelines** | **bool**| Automatically authorize this queue when using YAML | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentQueue**](../Model/TaskAgentQueue.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queuesDelete**
> queuesDelete($organization, $queueId, $project, $apiVersion)



Removes an agent queue from a project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\DistributedTask\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\DistributedTask\Api\QueuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$queueId = 56; // int | The agent queue to remove
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->queuesDelete($organization, $queueId, $project, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling QueuesApi->queuesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **queueId** | **int**| The agent queue to remove |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queuesGet**
> \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentQueue queuesGet($organization, $queueId, $project, $apiVersion, $actionFilter)



Get information about an agent queue.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\DistributedTask\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\DistributedTask\Api\QueuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$queueId = 56; // int | The agent queue to get information about
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$actionFilter = "actionFilter_example"; // string | Filter by whether the calling user has use or manage permissions

try {
    $result = $apiInstance->queuesGet($organization, $queueId, $project, $apiVersion, $actionFilter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueuesApi->queuesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **queueId** | **int**| The agent queue to get information about |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **actionFilter** | **string**| Filter by whether the calling user has use or manage permissions | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentQueue**](../Model/TaskAgentQueue.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queuesGetAgentQueuesForPools**
> \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentQueue[] queuesGetAgentQueuesForPools($organization, $poolIds, $project, $apiVersion, $actionFilter)



Get a list of agent queues by pool ids

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\DistributedTask\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\DistributedTask\Api\QueuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$poolIds = "poolIds_example"; // string | A comma-separated list of pool ids to get the corresponding queues for
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$actionFilter = "actionFilter_example"; // string | Filter by whether the calling user has use or manage permissions

try {
    $result = $apiInstance->queuesGetAgentQueuesForPools($organization, $poolIds, $project, $apiVersion, $actionFilter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueuesApi->queuesGetAgentQueuesForPools: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **poolIds** | **string**| A comma-separated list of pool ids to get the corresponding queues for |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **actionFilter** | **string**| Filter by whether the calling user has use or manage permissions | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentQueue[]**](../Model/TaskAgentQueue.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

