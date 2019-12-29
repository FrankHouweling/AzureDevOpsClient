# FrankHouweling\AzureDevOpsClient\Wit\FieldsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fieldsCreate**](FieldsApi.md#fieldsCreate) | **POST** /{organization}/{project}/_apis/wit/fields | 
[**fieldsDelete**](FieldsApi.md#fieldsDelete) | **DELETE** /{organization}/{project}/_apis/wit/fields/{fieldNameOrRefName} | 
[**fieldsGet**](FieldsApi.md#fieldsGet) | **GET** /{organization}/{project}/_apis/wit/fields/{fieldNameOrRefName} | 
[**fieldsList**](FieldsApi.md#fieldsList) | **GET** /{organization}/{project}/_apis/wit/fields | 
[**fieldsUpdate**](FieldsApi.md#fieldsUpdate) | **PATCH** /{organization}/{project}/_apis/wit/fields/{fieldNameOrRefName} | 


# **fieldsCreate**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemField fieldsCreate($organization, $body, $project, $apiVersion)



Create a new field.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\FieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemField(); // \FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemField | New field definition
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $result = $apiInstance->fieldsCreate($organization, $body, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FieldsApi->fieldsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemField**](../Model/WorkItemField.md)| New field definition |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemField**](../Model/WorkItemField.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fieldsDelete**
> fieldsDelete($organization, $fieldNameOrRefName, $project, $apiVersion)



Deletes the field. To undelete a filed, see \"Update Field\" API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\FieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$fieldNameOrRefName = "fieldNameOrRefName_example"; // string | Field simple name or reference name
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $apiInstance->fieldsDelete($organization, $fieldNameOrRefName, $project, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling FieldsApi->fieldsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **fieldNameOrRefName** | **string**| Field simple name or reference name |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fieldsGet**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemField fieldsGet($organization, $fieldNameOrRefName, $project, $apiVersion)



Gets information on a specific field.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\FieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$fieldNameOrRefName = "fieldNameOrRefName_example"; // string | Field simple name or reference name
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $result = $apiInstance->fieldsGet($organization, $fieldNameOrRefName, $project, $apiVersion);
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
 **fieldNameOrRefName** | **string**| Field simple name or reference name |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemField**](../Model/WorkItemField.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fieldsList**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemField[] fieldsList($organization, $project, $apiVersion, $expand)



Returns information for all fields. The project ID/name parameter is optional.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\FieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.
$expand = "expand_example"; // string | Use ExtensionFields to include extension fields, otherwise exclude them. Unless the feature flag for this parameter is enabled, extension fields are always included.

try {
    $result = $apiInstance->fieldsList($organization, $project, $apiVersion, $expand);
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
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |
 **expand** | **string**| Use ExtensionFields to include extension fields, otherwise exclude them. Unless the feature flag for this parameter is enabled, extension fields are always included. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemField[]**](../Model/WorkItemField.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fieldsUpdate**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemField fieldsUpdate($organization, $body, $fieldNameOrRefName, $project, $apiVersion)



Update a field.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\FieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Wit\Model\UpdateWorkItemField(); // \FrankHouweling\AzureDevOpsClient\Wit\Model\UpdateWorkItemField | Payload contains desired value of the field's properties
$fieldNameOrRefName = "fieldNameOrRefName_example"; // string | Name/reference name of the field to be updated
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $result = $apiInstance->fieldsUpdate($organization, $body, $fieldNameOrRefName, $project, $apiVersion);
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
 **body** | [**\FrankHouweling\AzureDevOpsClient\Wit\Model\UpdateWorkItemField**](../Model/UpdateWorkItemField.md)| Payload contains desired value of the field&#39;s properties |
 **fieldNameOrRefName** | **string**| Name/reference name of the field to be updated |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemField**](../Model/WorkItemField.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

