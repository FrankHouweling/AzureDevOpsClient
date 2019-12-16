# FrankHouweling\AzureDevOpsClient\Processes\WorkItemTypesApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**workItemTypesCreate**](WorkItemTypesApi.md#workItemTypesCreate) | **POST** /{organization}/_apis/work/processes/{processId}/workitemtypes | 
[**workItemTypesDelete**](WorkItemTypesApi.md#workItemTypesDelete) | **DELETE** /{organization}/_apis/work/processes/{processId}/workitemtypes/{witRefName} | 
[**workItemTypesGet**](WorkItemTypesApi.md#workItemTypesGet) | **GET** /{organization}/_apis/work/processes/{processId}/workitemtypes/{witRefName} | 
[**workItemTypesList**](WorkItemTypesApi.md#workItemTypesList) | **GET** /{organization}/_apis/work/processes/{processId}/workitemtypes | 
[**workItemTypesUpdate**](WorkItemTypesApi.md#workItemTypesUpdate) | **PATCH** /{organization}/_apis/work/processes/{processId}/workitemtypes/{witRefName} | 


# **workItemTypesCreate**
> \FrankHouweling\AzureDevOpsClient\Processes\Model\ProcessWorkItemType workItemTypesCreate($organization, $body, $processId, $apiVersion)



Creates a work item type in the process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Processes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Processes\Api\WorkItemTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Processes\Model\CreateProcessWorkItemTypeRequest(); // \FrankHouweling\AzureDevOpsClient\Processes\Model\CreateProcessWorkItemTypeRequest | 
$processId = "processId_example"; // string | The ID of the process on which to create work item type.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $result = $apiInstance->workItemTypesCreate($organization, $body, $processId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkItemTypesApi->workItemTypesCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Processes\Model\CreateProcessWorkItemTypeRequest**](../Model/CreateProcessWorkItemTypeRequest.md)|  |
 **processId** | [**string**](../Model/.md)| The ID of the process on which to create work item type. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Processes\Model\ProcessWorkItemType**](../Model/ProcessWorkItemType.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **workItemTypesDelete**
> workItemTypesDelete($organization, $processId, $witRefName, $apiVersion)



Removes a work itewm type in the process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Processes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Processes\Api\WorkItemTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$processId = "processId_example"; // string | The ID of the process.
$witRefName = "witRefName_example"; // string | The reference name of the work item type.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $apiInstance->workItemTypesDelete($organization, $processId, $witRefName, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling WorkItemTypesApi->workItemTypesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **processId** | [**string**](../Model/.md)| The ID of the process. |
 **witRefName** | **string**| The reference name of the work item type. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **workItemTypesGet**
> \FrankHouweling\AzureDevOpsClient\Processes\Model\ProcessWorkItemType workItemTypesGet($organization, $processId, $witRefName, $apiVersion, $expand)



Returns a single work item type in a process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Processes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Processes\Api\WorkItemTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$processId = "processId_example"; // string | The ID of the process
$witRefName = "witRefName_example"; // string | The reference name of the work item type
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.
$expand = "expand_example"; // string | Flag to determine what properties of work item type to return

try {
    $result = $apiInstance->workItemTypesGet($organization, $processId, $witRefName, $apiVersion, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkItemTypesApi->workItemTypesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **processId** | [**string**](../Model/.md)| The ID of the process |
 **witRefName** | **string**| The reference name of the work item type |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |
 **expand** | **string**| Flag to determine what properties of work item type to return | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Processes\Model\ProcessWorkItemType**](../Model/ProcessWorkItemType.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **workItemTypesList**
> \FrankHouweling\AzureDevOpsClient\Processes\Model\ProcessWorkItemType[] workItemTypesList($organization, $processId, $apiVersion, $expand)



Returns a list of all work item types in a process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Processes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Processes\Api\WorkItemTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$processId = "processId_example"; // string | The ID of the process
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.
$expand = "expand_example"; // string | Flag to determine what properties of work item type to return

try {
    $result = $apiInstance->workItemTypesList($organization, $processId, $apiVersion, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkItemTypesApi->workItemTypesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **processId** | [**string**](../Model/.md)| The ID of the process |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |
 **expand** | **string**| Flag to determine what properties of work item type to return | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Processes\Model\ProcessWorkItemType[]**](../Model/ProcessWorkItemType.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **workItemTypesUpdate**
> \FrankHouweling\AzureDevOpsClient\Processes\Model\ProcessWorkItemType workItemTypesUpdate($organization, $body, $processId, $witRefName, $apiVersion)



Updates a work item type of the process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Processes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Processes\Api\WorkItemTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Processes\Model\UpdateProcessWorkItemTypeRequest(); // \FrankHouweling\AzureDevOpsClient\Processes\Model\UpdateProcessWorkItemTypeRequest | 
$processId = "processId_example"; // string | The ID of the process
$witRefName = "witRefName_example"; // string | The reference name of the work item type
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $result = $apiInstance->workItemTypesUpdate($organization, $body, $processId, $witRefName, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkItemTypesApi->workItemTypesUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Processes\Model\UpdateProcessWorkItemTypeRequest**](../Model/UpdateProcessWorkItemTypeRequest.md)|  |
 **processId** | [**string**](../Model/.md)| The ID of the process |
 **witRefName** | **string**| The reference name of the work item type |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Processes\Model\ProcessWorkItemType**](../Model/ProcessWorkItemType.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

