# FrankHouweling\AzureDevOpsClient\Clt\PluginsApi

All URIs are relative to *https://vsclt.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pluginsGet**](PluginsApi.md#pluginsGet) | **GET** /{organization}/_apis/clt/apm/plugins/{type} | 
[**pluginsList**](PluginsApi.md#pluginsList) | **GET** /{organization}/_apis/clt/apm/plugins | 


# **pluginsGet**
> \FrankHouweling\AzureDevOpsClient\Clt\Model\ApplicationType pluginsGet($organization, $type, $apiVersion)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Clt\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Clt\Api\PluginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$type = "type_example"; // string | Currently ApplicationInsights is the only available plugin type.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->pluginsGet($organization, $type, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginsApi->pluginsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **type** | **string**| Currently ApplicationInsights is the only available plugin type. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Clt\Model\ApplicationType**](../Model/ApplicationType.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pluginsList**
> \FrankHouweling\AzureDevOpsClient\Clt\Model\ApplicationType[] pluginsList($organization, $apiVersion)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Clt\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Clt\Api\PluginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->pluginsList($organization, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginsApi->pluginsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Clt\Model\ApplicationType[]**](../Model/ApplicationType.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

