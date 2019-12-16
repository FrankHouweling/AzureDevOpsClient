# FrankHouweling\AzureDevOpsClient\Processes\FieldsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fieldsAdd**](FieldsApi.md#fieldsAdd) | **POST** /{organization}/_apis/work/processes/{processId}/workItemTypes/{witRefName}/fields | 
[**fieldsGet**](FieldsApi.md#fieldsGet) | **GET** /{organization}/_apis/work/processes/{processId}/workItemTypes/{witRefName}/fields/{fieldRefName} | 
[**fieldsList**](FieldsApi.md#fieldsList) | **GET** /{organization}/_apis/work/processes/{processId}/workItemTypes/{witRefName}/fields | 
[**fieldsRemoveWorkItemTypeField**](FieldsApi.md#fieldsRemoveWorkItemTypeField) | **DELETE** /{organization}/_apis/work/processes/{processId}/workItemTypes/{witRefName}/fields/{fieldRefName} | 
[**fieldsUpdate**](FieldsApi.md#fieldsUpdate) | **PATCH** /{organization}/_apis/work/processes/{processId}/workItemTypes/{witRefName}/fields/{fieldRefName} | 


# **fieldsAdd**
> \FrankHouweling\AzureDevOpsClient\Processes\Model\ProcessWorkItemTypeField fieldsAdd($organization, $body, $processId, $witRefName, $apiVersion)



Adds a field to a work item type.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Processes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Processes\Api\FieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Processes\Model\AddProcessWorkItemTypeFieldRequest(); // \FrankHouweling\AzureDevOpsClient\Processes\Model\AddProcessWorkItemTypeFieldRequest | 
$processId = "processId_example"; // string | The ID of the process.
$witRefName = "witRefName_example"; // string | The reference name of the work item type.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $result = $apiInstance->fieldsAdd($organization, $body, $processId, $witRefName, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FieldsApi->fieldsAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Processes\Model\AddProcessWorkItemTypeFieldRequest**](../Model/AddProcessWorkItemTypeFieldRequest.md)|  |
 **processId** | [**string**](../Model/.md)| The ID of the process. |
 **witRefName** | **string**| The reference name of the work item type. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Processes\Model\ProcessWorkItemTypeField**](../Model/ProcessWorkItemTypeField.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fieldsGet**
> \FrankHouweling\AzureDevOpsClient\Processes\Model\ProcessWorkItemTypeField fieldsGet($organization, $processId, $witRefName, $fieldRefName, $apiVersion, $expand)



Returns a field in a work item type.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Processes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Processes\Api\FieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$processId = "processId_example"; // string | The ID of the process.
$witRefName = "witRefName_example"; // string | The reference name of the work item type.
$fieldRefName = "fieldRefName_example"; // string | The reference name of the field.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.
$expand = "expand_example"; // string | 

try {
    $result = $apiInstance->fieldsGet($organization, $processId, $witRefName, $fieldRefName, $apiVersion, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FieldsApi->fieldsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **processId** | [**string**](../Model/.md)| The ID of the process. |
 **witRefName** | **string**| The reference name of the work item type. |
 **fieldRefName** | **string**| The reference name of the field. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |
 **expand** | **string**|  | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Processes\Model\ProcessWorkItemTypeField**](../Model/ProcessWorkItemTypeField.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fieldsList**
> \FrankHouweling\AzureDevOpsClient\Processes\Model\ProcessWorkItemTypeField[] fieldsList($organization, $processId, $witRefName, $apiVersion)



Returns a list of all fields in a work item type.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Processes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Processes\Api\FieldsApi(
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
    $result = $apiInstance->fieldsList($organization, $processId, $witRefName, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FieldsApi->fieldsList: ', $e->getMessage(), PHP_EOL;
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

[**\FrankHouweling\AzureDevOpsClient\Processes\Model\ProcessWorkItemTypeField[]**](../Model/ProcessWorkItemTypeField.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fieldsRemoveWorkItemTypeField**
> fieldsRemoveWorkItemTypeField($organization, $processId, $witRefName, $fieldRefName, $apiVersion)



Removes a field from a work item type. Does not permanently delete the field.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Processes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Processes\Api\FieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$processId = "processId_example"; // string | The ID of the process.
$witRefName = "witRefName_example"; // string | The reference name of the work item type.
$fieldRefName = "fieldRefName_example"; // string | The reference name of the field.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $apiInstance->fieldsRemoveWorkItemTypeField($organization, $processId, $witRefName, $fieldRefName, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling FieldsApi->fieldsRemoveWorkItemTypeField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **processId** | [**string**](../Model/.md)| The ID of the process. |
 **witRefName** | **string**| The reference name of the work item type. |
 **fieldRefName** | **string**| The reference name of the field. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fieldsUpdate**
> \FrankHouweling\AzureDevOpsClient\Processes\Model\ProcessWorkItemTypeField fieldsUpdate($organization, $body, $processId, $witRefName, $fieldRefName, $apiVersion)



Updates a field in a work item type.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Processes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Processes\Api\FieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Processes\Model\UpdateProcessWorkItemTypeFieldRequest(); // \FrankHouweling\AzureDevOpsClient\Processes\Model\UpdateProcessWorkItemTypeFieldRequest | 
$processId = "processId_example"; // string | The ID of the process.
$witRefName = "witRefName_example"; // string | The reference name of the work item type.
$fieldRefName = "fieldRefName_example"; // string | The reference name of the field.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $result = $apiInstance->fieldsUpdate($organization, $body, $processId, $witRefName, $fieldRefName, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FieldsApi->fieldsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Processes\Model\UpdateProcessWorkItemTypeFieldRequest**](../Model/UpdateProcessWorkItemTypeFieldRequest.md)|  |
 **processId** | [**string**](../Model/.md)| The ID of the process. |
 **witRefName** | **string**| The reference name of the work item type. |
 **fieldRefName** | **string**| The reference name of the field. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Processes\Model\ProcessWorkItemTypeField**](../Model/ProcessWorkItemTypeField.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

