# FrankHouweling\AzureDevOpsClient\ProcessDefinitions\WorkItemTypesFieldsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**add**](WorkItemTypesFieldsApi.md#add) | **POST** /{organization}/_apis/work/processdefinitions/{processId}/workItemTypes/{witRefNameForFields}/fields | 
[**callList**](WorkItemTypesFieldsApi.md#callList) | **GET** /{organization}/_apis/work/processdefinitions/{processId}/workItemTypes/{witRefNameForFields}/fields | 
[**get**](WorkItemTypesFieldsApi.md#get) | **GET** /{organization}/_apis/work/processdefinitions/{processId}/workItemTypes/{witRefNameForFields}/fields/{fieldRefName} | 
[**removeFieldFromWorkItemType**](WorkItemTypesFieldsApi.md#removeFieldFromWorkItemType) | **DELETE** /{organization}/_apis/work/processdefinitions/{processId}/workItemTypes/{witRefNameForFields}/fields/{fieldRefName} | 


# **add**
> \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemTypeFieldModel add($organization, $body, $processId, $witRefNameForFields, $apiVersion)



Adds a field to the work item type in the process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Api\WorkItemTypesFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemTypeFieldModel(); // \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemTypeFieldModel | 
$processId = "processId_example"; // string | The ID of the process
$witRefNameForFields = "witRefNameForFields_example"; // string | Work item type reference name for the field
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '4.1-preview.1' to use this version of the api.

try {
    $result = $apiInstance->add($organization, $body, $processId, $witRefNameForFields, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkItemTypesFieldsApi->add: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemTypeFieldModel**](../Model/WorkItemTypeFieldModel.md)|  |
 **processId** | [**string**](../Model/.md)| The ID of the process |
 **witRefNameForFields** | **string**| Work item type reference name for the field |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;4.1-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemTypeFieldModel**](../Model/WorkItemTypeFieldModel.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **callList**
> \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemTypeFieldModel[] callList($organization, $processId, $witRefNameForFields, $apiVersion)



Returns a list of all fields in the work item type of the process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Api\WorkItemTypesFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$processId = "processId_example"; // string | The ID of the process
$witRefNameForFields = "witRefNameForFields_example"; // string | Work item type reference name for fields
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '4.1-preview.1' to use this version of the api.

try {
    $result = $apiInstance->callList($organization, $processId, $witRefNameForFields, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkItemTypesFieldsApi->callList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **processId** | [**string**](../Model/.md)| The ID of the process |
 **witRefNameForFields** | **string**| Work item type reference name for fields |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;4.1-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemTypeFieldModel[]**](../Model/WorkItemTypeFieldModel.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get**
> \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemTypeFieldModel get($organization, $processId, $witRefNameForFields, $fieldRefName, $apiVersion)



Returns a single field in the work item type of the process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Api\WorkItemTypesFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$processId = "processId_example"; // string | The ID of the process
$witRefNameForFields = "witRefNameForFields_example"; // string | Work item type reference name for fields
$fieldRefName = "fieldRefName_example"; // string | The reference name of the field
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '4.1-preview.1' to use this version of the api.

try {
    $result = $apiInstance->get($organization, $processId, $witRefNameForFields, $fieldRefName, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkItemTypesFieldsApi->get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **processId** | [**string**](../Model/.md)| The ID of the process |
 **witRefNameForFields** | **string**| Work item type reference name for fields |
 **fieldRefName** | **string**| The reference name of the field |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;4.1-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemTypeFieldModel**](../Model/WorkItemTypeFieldModel.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeFieldFromWorkItemType**
> removeFieldFromWorkItemType($organization, $processId, $witRefNameForFields, $fieldRefName, $apiVersion)



Removes a field in the work item type of the process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Api\WorkItemTypesFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$processId = "processId_example"; // string | The ID of the process
$witRefNameForFields = "witRefNameForFields_example"; // string | Work item type reference name for fields
$fieldRefName = "fieldRefName_example"; // string | The reference name of the field
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '4.1-preview.1' to use this version of the api.

try {
    $apiInstance->removeFieldFromWorkItemType($organization, $processId, $witRefNameForFields, $fieldRefName, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling WorkItemTypesFieldsApi->removeFieldFromWorkItemType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **processId** | [**string**](../Model/.md)| The ID of the process |
 **witRefNameForFields** | **string**| Work item type reference name for fields |
 **fieldRefName** | **string**| The reference name of the field |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;4.1-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

