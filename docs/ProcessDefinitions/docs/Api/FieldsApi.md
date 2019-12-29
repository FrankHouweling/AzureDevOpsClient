# FrankHouweling\AzureDevOpsClient\ProcessDefinitions\FieldsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create**](FieldsApi.md#create) | **POST** /{organization}/_apis/work/processdefinitions/{processId}/fields | 
[**update**](FieldsApi.md#update) | **PATCH** /{organization}/_apis/work/processdefinitions/{processId}/fields | 


# **create**
> \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\FieldModel create($organization, $body, $processId, $apiVersion)



Creates a single field in the process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Api\FieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\FieldModel(); // \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\FieldModel | 
$processId = "processId_example"; // string | The ID of the process
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '4.1-preview.1' to use this version of the api.

try {
    $result = $apiInstance->create($organization, $body, $processId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FieldsApi->create: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\FieldModel**](../Model/FieldModel.md)|  |
 **processId** | [**string**](../Model/.md)| The ID of the process |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;4.1-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\FieldModel**](../Model/FieldModel.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **update**
> \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\FieldModel update($organization, $body, $processId, $apiVersion)



Updates a given field in the process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Api\FieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\FieldUpdate(); // \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\FieldUpdate | 
$processId = "processId_example"; // string | The ID of the process
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '4.1-preview.1' to use this version of the api.

try {
    $result = $apiInstance->update($organization, $body, $processId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FieldsApi->update: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\FieldUpdate**](../Model/FieldUpdate.md)|  |
 **processId** | [**string**](../Model/.md)| The ID of the process |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;4.1-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\FieldModel**](../Model/FieldModel.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

