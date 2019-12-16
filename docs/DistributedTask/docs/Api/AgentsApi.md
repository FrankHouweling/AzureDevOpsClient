# FrankHouweling\AzureDevOpsClient\DistributedTask\AgentsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**agentsAdd**](AgentsApi.md#agentsAdd) | **POST** /{organization}/_apis/distributedtask/pools/{poolId}/agents | 
[**agentsDelete**](AgentsApi.md#agentsDelete) | **DELETE** /{organization}/_apis/distributedtask/pools/{poolId}/agents/{agentId} | 
[**agentsGet**](AgentsApi.md#agentsGet) | **GET** /{organization}/_apis/distributedtask/pools/{poolId}/agents/{agentId} | 
[**agentsList**](AgentsApi.md#agentsList) | **GET** /{organization}/_apis/distributedtask/pools/{poolId}/agents | 
[**agentsReplaceAgent**](AgentsApi.md#agentsReplaceAgent) | **PUT** /{organization}/_apis/distributedtask/pools/{poolId}/agents/{agentId} | 
[**agentsUpdate**](AgentsApi.md#agentsUpdate) | **PATCH** /{organization}/_apis/distributedtask/pools/{poolId}/agents/{agentId} | 


# **agentsAdd**
> \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgent agentsAdd($organization, $body, $poolId, $apiVersion)



Adds an agent to a pool.  You probably don't want to call this endpoint directly. Instead, [configure an agent](https://docs.microsoft.com/azure/devops/pipelines/agents/agents) using the agent download package.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\DistributedTask\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\DistributedTask\Api\AgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgent(); // \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgent | Details about the agent being added
$poolId = 56; // int | The agent pool in which to add the agent
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->agentsAdd($organization, $body, $poolId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentsApi->agentsAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgent**](../Model/TaskAgent.md)| Details about the agent being added |
 **poolId** | **int**| The agent pool in which to add the agent |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgent**](../Model/TaskAgent.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **agentsDelete**
> agentsDelete($organization, $poolId, $agentId, $apiVersion)



Delete an agent.  You probably don't want to call this endpoint directly. Instead, [use the agent configuration script](https://docs.microsoft.com/azure/devops/pipelines/agents/agents) to remove an agent from your organization.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\DistributedTask\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\DistributedTask\Api\AgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$poolId = 56; // int | The pool ID to remove the agent from
$agentId = 56; // int | The agent ID to remove
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->agentsDelete($organization, $poolId, $agentId, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling AgentsApi->agentsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **poolId** | **int**| The pool ID to remove the agent from |
 **agentId** | **int**| The agent ID to remove |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **agentsGet**
> \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgent agentsGet($organization, $poolId, $agentId, $apiVersion, $includeCapabilities, $includeAssignedRequest, $includeLastCompletedRequest, $propertyFilters)



Get information about an agent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\DistributedTask\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\DistributedTask\Api\AgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$poolId = 56; // int | The agent pool containing the agent
$agentId = 56; // int | The agent ID to get information about
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$includeCapabilities = true; // bool | Whether to include the agent's capabilities in the response
$includeAssignedRequest = true; // bool | Whether to include details about the agent's current work
$includeLastCompletedRequest = true; // bool | Whether to include details about the agents' most recent completed work
$propertyFilters = "propertyFilters_example"; // string | Filter which custom properties will be returned

try {
    $result = $apiInstance->agentsGet($organization, $poolId, $agentId, $apiVersion, $includeCapabilities, $includeAssignedRequest, $includeLastCompletedRequest, $propertyFilters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentsApi->agentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **poolId** | **int**| The agent pool containing the agent |
 **agentId** | **int**| The agent ID to get information about |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **includeCapabilities** | **bool**| Whether to include the agent&#39;s capabilities in the response | [optional]
 **includeAssignedRequest** | **bool**| Whether to include details about the agent&#39;s current work | [optional]
 **includeLastCompletedRequest** | **bool**| Whether to include details about the agents&#39; most recent completed work | [optional]
 **propertyFilters** | **string**| Filter which custom properties will be returned | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgent**](../Model/TaskAgent.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **agentsList**
> \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgent[] agentsList($organization, $poolId, $apiVersion, $agentName, $includeCapabilities, $includeAssignedRequest, $includeLastCompletedRequest, $propertyFilters, $demands)



Get a list of agents.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\DistributedTask\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\DistributedTask\Api\AgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$poolId = 56; // int | The agent pool containing the agents
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$agentName = "agentName_example"; // string | Filter on agent name
$includeCapabilities = true; // bool | Whether to include the agents' capabilities in the response
$includeAssignedRequest = true; // bool | Whether to include details about the agents' current work
$includeLastCompletedRequest = true; // bool | Whether to include details about the agents' most recent completed work
$propertyFilters = "propertyFilters_example"; // string | Filter which custom properties will be returned
$demands = "demands_example"; // string | Filter by demands the agents can satisfy

try {
    $result = $apiInstance->agentsList($organization, $poolId, $apiVersion, $agentName, $includeCapabilities, $includeAssignedRequest, $includeLastCompletedRequest, $propertyFilters, $demands);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentsApi->agentsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **poolId** | **int**| The agent pool containing the agents |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **agentName** | **string**| Filter on agent name | [optional]
 **includeCapabilities** | **bool**| Whether to include the agents&#39; capabilities in the response | [optional]
 **includeAssignedRequest** | **bool**| Whether to include details about the agents&#39; current work | [optional]
 **includeLastCompletedRequest** | **bool**| Whether to include details about the agents&#39; most recent completed work | [optional]
 **propertyFilters** | **string**| Filter which custom properties will be returned | [optional]
 **demands** | **string**| Filter by demands the agents can satisfy | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgent[]**](../Model/TaskAgent.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **agentsReplaceAgent**
> \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgent agentsReplaceAgent($organization, $body, $poolId, $agentId, $apiVersion)



Replace an agent.  You probably don't want to call this endpoint directly. Instead, [use the agent configuration script](https://docs.microsoft.com/azure/devops/pipelines/agents/agents) to remove and reconfigure an agent from your organization.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\DistributedTask\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\DistributedTask\Api\AgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgent(); // \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgent | Updated details about the replacing agent
$poolId = 56; // int | The agent pool to use
$agentId = 56; // int | The agent to replace
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->agentsReplaceAgent($organization, $body, $poolId, $agentId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentsApi->agentsReplaceAgent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgent**](../Model/TaskAgent.md)| Updated details about the replacing agent |
 **poolId** | **int**| The agent pool to use |
 **agentId** | **int**| The agent to replace |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgent**](../Model/TaskAgent.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **agentsUpdate**
> \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgent agentsUpdate($organization, $body, $poolId, $agentId, $apiVersion)



Update agent details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\DistributedTask\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\DistributedTask\Api\AgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgent(); // \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgent | Updated details about the agent
$poolId = 56; // int | The agent pool to use
$agentId = 56; // int | The agent to update
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->agentsUpdate($organization, $body, $poolId, $agentId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentsApi->agentsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgent**](../Model/TaskAgent.md)| Updated details about the agent |
 **poolId** | **int**| The agent pool to use |
 **agentId** | **int**| The agent to update |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgent**](../Model/TaskAgent.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

