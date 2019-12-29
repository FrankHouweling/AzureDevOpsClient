# FrankHouweling\AzureDevOpsClient\DistributedTask\YamlschemaApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**yamlschemaGet**](YamlschemaApi.md#yamlschemaGet) | **GET** /{organization}/_apis/distributedtask/yamlschema | 


# **yamlschemaGet**
> object yamlschemaGet($organization, $apiVersion, $validateTaskNames)



GET the Yaml schema used for Yaml file validation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\DistributedTask\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\DistributedTask\Api\YamlschemaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$validateTaskNames = true; // bool | Whether the schema should validate that tasks are actually installed (useful for offline tools where you don't want validation).

try {
    $result = $apiInstance->yamlschemaGet($organization, $apiVersion, $validateTaskNames);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling YamlschemaApi->yamlschemaGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **validateTaskNames** | **bool**| Whether the schema should validate that tasks are actually installed (useful for offline tools where you don&#39;t want validation). | [optional]

### Return type

**object**

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

