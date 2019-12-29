# FrankHouweling\AzureDevOpsClient\Processes\StatesApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**statesCreate**](StatesApi.md#statesCreate) | **POST** /{organization}/_apis/work/processes/{processId}/workItemTypes/{witRefName}/states | 
[**statesDelete**](StatesApi.md#statesDelete) | **DELETE** /{organization}/_apis/work/processes/{processId}/workItemTypes/{witRefName}/states/{stateId} | 
[**statesGet**](StatesApi.md#statesGet) | **GET** /{organization}/_apis/work/processes/{processId}/workItemTypes/{witRefName}/states/{stateId} | 
[**statesHideStateDefinition**](StatesApi.md#statesHideStateDefinition) | **PUT** /{organization}/_apis/work/processes/{processId}/workItemTypes/{witRefName}/states/{stateId} | 
[**statesList**](StatesApi.md#statesList) | **GET** /{organization}/_apis/work/processes/{processId}/workItemTypes/{witRefName}/states | 
[**statesUpdate**](StatesApi.md#statesUpdate) | **PATCH** /{organization}/_apis/work/processes/{processId}/workItemTypes/{witRefName}/states/{stateId} | 


# **statesCreate**
> \FrankHouweling\AzureDevOpsClient\Processes\Model\WorkItemStateResultModel statesCreate($organization, $body, $processId, $witRefName, $apiVersion)



Creates a state definition in the work item type of the process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Processes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Processes\Api\StatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Processes\Model\WorkItemStateInputModel(); // \FrankHouweling\AzureDevOpsClient\Processes\Model\WorkItemStateInputModel | 
$processId = "processId_example"; // string | The ID of the process
$witRefName = "witRefName_example"; // string | The reference name of the work item type
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->statesCreate($organization, $body, $processId, $witRefName, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatesApi->statesCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Processes\Model\WorkItemStateInputModel**](../Model/WorkItemStateInputModel.md)|  |
 **processId** | [**string**](../Model/.md)| The ID of the process |
 **witRefName** | **string**| The reference name of the work item type |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Processes\Model\WorkItemStateResultModel**](../Model/WorkItemStateResultModel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **statesDelete**
> statesDelete($organization, $processId, $witRefName, $stateId, $apiVersion)



Removes a state definition in the work item type of the process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Processes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Processes\Api\StatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$processId = "processId_example"; // string | ID of the process
$witRefName = "witRefName_example"; // string | The reference name of the work item type
$stateId = "stateId_example"; // string | ID of the state
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->statesDelete($organization, $processId, $witRefName, $stateId, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling StatesApi->statesDelete: ', $e->getMessage(), PHP_EOL;
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
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **statesGet**
> \FrankHouweling\AzureDevOpsClient\Processes\Model\WorkItemStateResultModel statesGet($organization, $processId, $witRefName, $stateId, $apiVersion)



Returns a single state definition in a work item type of the process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Processes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Processes\Api\StatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$processId = "processId_example"; // string | The ID of the process
$witRefName = "witRefName_example"; // string | The reference name of the work item type
$stateId = "stateId_example"; // string | The ID of the state
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->statesGet($organization, $processId, $witRefName, $stateId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatesApi->statesGet: ', $e->getMessage(), PHP_EOL;
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
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Processes\Model\WorkItemStateResultModel**](../Model/WorkItemStateResultModel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **statesHideStateDefinition**
> \FrankHouweling\AzureDevOpsClient\Processes\Model\WorkItemStateResultModel statesHideStateDefinition($organization, $body, $processId, $witRefName, $stateId, $apiVersion)



Hides a state definition in the work item type of the process.Only states with customizationType:System can be hidden.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Processes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Processes\Api\StatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Processes\Model\HideStateModel(); // \FrankHouweling\AzureDevOpsClient\Processes\Model\HideStateModel | 
$processId = "processId_example"; // string | The ID of the process
$witRefName = "witRefName_example"; // string | The reference name of the work item type
$stateId = "stateId_example"; // string | The ID of the state
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->statesHideStateDefinition($organization, $body, $processId, $witRefName, $stateId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatesApi->statesHideStateDefinition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Processes\Model\HideStateModel**](../Model/HideStateModel.md)|  |
 **processId** | [**string**](../Model/.md)| The ID of the process |
 **witRefName** | **string**| The reference name of the work item type |
 **stateId** | [**string**](../Model/.md)| The ID of the state |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Processes\Model\WorkItemStateResultModel**](../Model/WorkItemStateResultModel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **statesList**
> \FrankHouweling\AzureDevOpsClient\Processes\Model\WorkItemStateResultModel[] statesList($organization, $processId, $witRefName, $apiVersion)



Returns a list of all state definitions in a work item type of the process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Processes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Processes\Api\StatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$processId = "processId_example"; // string | The ID of the process
$witRefName = "witRefName_example"; // string | The reference name of the work item type
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->statesList($organization, $processId, $witRefName, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatesApi->statesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **processId** | [**string**](../Model/.md)| The ID of the process |
 **witRefName** | **string**| The reference name of the work item type |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Processes\Model\WorkItemStateResultModel[]**](../Model/WorkItemStateResultModel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **statesUpdate**
> \FrankHouweling\AzureDevOpsClient\Processes\Model\WorkItemStateResultModel statesUpdate($organization, $body, $processId, $witRefName, $stateId, $apiVersion)



Updates a given state definition in the work item type of the process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Processes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Processes\Api\StatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Processes\Model\WorkItemStateInputModel(); // \FrankHouweling\AzureDevOpsClient\Processes\Model\WorkItemStateInputModel | 
$processId = "processId_example"; // string | ID of the process
$witRefName = "witRefName_example"; // string | The reference name of the work item type
$stateId = "stateId_example"; // string | ID of the state
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->statesUpdate($organization, $body, $processId, $witRefName, $stateId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatesApi->statesUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Processes\Model\WorkItemStateInputModel**](../Model/WorkItemStateInputModel.md)|  |
 **processId** | [**string**](../Model/.md)| ID of the process |
 **witRefName** | **string**| The reference name of the work item type |
 **stateId** | [**string**](../Model/.md)| ID of the state |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Processes\Model\WorkItemStateResultModel**](../Model/WorkItemStateResultModel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

