# FrankHouweling\AzureDevOpsClient\ProcessDefinitions\StatesApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**callList**](StatesApi.md#callList) | **GET** /{organization}/_apis/work/processdefinitions/{processId}/workItemTypes/{witRefName}/states | 
[**create**](StatesApi.md#create) | **POST** /{organization}/_apis/work/processdefinitions/{processId}/workItemTypes/{witRefName}/states | 
[**delete**](StatesApi.md#delete) | **DELETE** /{organization}/_apis/work/processdefinitions/{processId}/workItemTypes/{witRefName}/states/{stateId} | 
[**get**](StatesApi.md#get) | **GET** /{organization}/_apis/work/processdefinitions/{processId}/workItemTypes/{witRefName}/states/{stateId} | 
[**hideStateDefinition**](StatesApi.md#hideStateDefinition) | **PUT** /{organization}/_apis/work/processdefinitions/{processId}/workItemTypes/{witRefName}/states/{stateId} | 
[**update**](StatesApi.md#update) | **PATCH** /{organization}/_apis/work/processdefinitions/{processId}/workItemTypes/{witRefName}/states/{stateId} | 


# **callList**
> \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemStateResultModel[] callList($organization, $processId, $witRefName, $apiVersion)



Returns a list of all state definitions in the work item type of the process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Api\StatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$processId = "processId_example"; // string | The ID of the process
$witRefName = "witRefName_example"; // string | The reference name of the work item type
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '4.1-preview.1' to use this version of the api.

try {
    $result = $apiInstance->callList($organization, $processId, $witRefName, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatesApi->callList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **processId** | [**string**](../Model/.md)| The ID of the process |
 **witRefName** | **string**| The reference name of the work item type |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;4.1-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemStateResultModel[]**](../Model/WorkItemStateResultModel.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **create**
> \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemStateResultModel create($organization, $body, $processId, $witRefName, $apiVersion)



Creates a state definition in the work item type of the process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Api\StatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemStateInputModel(); // \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemStateInputModel | 
$processId = "processId_example"; // string | The ID of the process
$witRefName = "witRefName_example"; // string | The reference name of the work item type
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '4.1-preview.1' to use this version of the api.

try {
    $result = $apiInstance->create($organization, $body, $processId, $witRefName, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatesApi->create: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemStateInputModel**](../Model/WorkItemStateInputModel.md)|  |
 **processId** | [**string**](../Model/.md)| The ID of the process |
 **witRefName** | **string**| The reference name of the work item type |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;4.1-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemStateResultModel**](../Model/WorkItemStateResultModel.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delete**
> delete($organization, $processId, $witRefName, $stateId, $apiVersion)



Removes a state definition in the work item type of the process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Api\StatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$processId = "processId_example"; // string | ID of the process
$witRefName = "witRefName_example"; // string | The reference name of the work item type
$stateId = "stateId_example"; // string | ID of the state
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '4.1-preview.1' to use this version of the api.

try {
    $apiInstance->delete($organization, $processId, $witRefName, $stateId, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling StatesApi->delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **processId** | [**string**](../Model/.md)| ID of the process |
 **witRefName** | **string**| The reference name of the work item type |
 **stateId** | [**string**](../Model/.md)| ID of the state |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;4.1-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get**
> \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemStateResultModel get($organization, $processId, $witRefName, $stateId, $apiVersion)



Returns a state definition in the work item type of the process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Api\StatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$processId = "processId_example"; // string | The ID of the process
$witRefName = "witRefName_example"; // string | The reference name of the work item type
$stateId = "stateId_example"; // string | The ID of the state
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '4.1-preview.1' to use this version of the api.

try {
    $result = $apiInstance->get($organization, $processId, $witRefName, $stateId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatesApi->get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **processId** | [**string**](../Model/.md)| The ID of the process |
 **witRefName** | **string**| The reference name of the work item type |
 **stateId** | [**string**](../Model/.md)| The ID of the state |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;4.1-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemStateResultModel**](../Model/WorkItemStateResultModel.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hideStateDefinition**
> \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemStateResultModel hideStateDefinition($organization, $body, $processId, $witRefName, $stateId, $apiVersion)



Hides a state definition in the work item type of the process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Api\StatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\HideStateModel(); // \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\HideStateModel | 
$processId = "processId_example"; // string | The ID of the process
$witRefName = "witRefName_example"; // string | The reference name of the work item type
$stateId = "stateId_example"; // string | The ID of the state
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '4.1-preview.1' to use this version of the api.

try {
    $result = $apiInstance->hideStateDefinition($organization, $body, $processId, $witRefName, $stateId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatesApi->hideStateDefinition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\HideStateModel**](../Model/HideStateModel.md)|  |
 **processId** | [**string**](../Model/.md)| The ID of the process |
 **witRefName** | **string**| The reference name of the work item type |
 **stateId** | [**string**](../Model/.md)| The ID of the state |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;4.1-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemStateResultModel**](../Model/WorkItemStateResultModel.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **update**
> \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemStateResultModel update($organization, $body, $processId, $witRefName, $stateId, $apiVersion)



Updates a given state definition in the work item type of the process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Api\StatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemStateInputModel(); // \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemStateInputModel | 
$processId = "processId_example"; // string | ID of the process
$witRefName = "witRefName_example"; // string | The reference name of the work item type
$stateId = "stateId_example"; // string | ID of the state
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '4.1-preview.1' to use this version of the api.

try {
    $result = $apiInstance->update($organization, $body, $processId, $witRefName, $stateId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatesApi->update: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemStateInputModel**](../Model/WorkItemStateInputModel.md)|  |
 **processId** | [**string**](../Model/.md)| ID of the process |
 **witRefName** | **string**| The reference name of the work item type |
 **stateId** | [**string**](../Model/.md)| ID of the state |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;4.1-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemStateResultModel**](../Model/WorkItemStateResultModel.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

