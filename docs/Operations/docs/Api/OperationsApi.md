# AzureDevOpsClient\Operations\OperationsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**operationsGet**](OperationsApi.md#operationsGet) | **GET** /{organization}/_apis/operations/{operationId} | 


# **operationsGet**
> \AzureDevOpsClient\Operations\AzureDevOpsClient\Operations\Model\Operation operationsGet($operationId, $organization, $apiVersion, $pluginId)



Gets an operation from the the operationId using the given pluginId.  Some scenarios don’t require a pluginId. If a pluginId is not included in the call then just the operationId will be used to find an operation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = AzureDevOpsClient\Operations\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new AzureDevOpsClient\Operations\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$operationId = "operationId_example"; // string | The ID for the operation.
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$pluginId = "pluginId_example"; // string | The ID for the plugin.

try {
    $result = $apiInstance->operationsGet($operationId, $organization, $apiVersion, $pluginId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **operationId** | [**string**](../Model/.md)| The ID for the operation. |
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **pluginId** | [**string**](../Model/.md)| The ID for the plugin. | [optional]

### Return type

[**\AzureDevOpsClient\Operations\AzureDevOpsClient\Operations\Model\Operation**](../Model/Operation.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

