# FrankHouweling\AzureDevOpsClient\Hooks\DiagnosticsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**diagnosticsGet**](DiagnosticsApi.md#diagnosticsGet) | **GET** /{organization}/_apis/hooks/subscriptions/{subscriptionId}/diagnostics | 
[**diagnosticsUpdate**](DiagnosticsApi.md#diagnosticsUpdate) | **PUT** /{organization}/_apis/hooks/subscriptions/{subscriptionId}/diagnostics | 


# **diagnosticsGet**
> \FrankHouweling\AzureDevOpsClient\Hooks\Model\SubscriptionDiagnostics diagnosticsGet($organization, $subscriptionId, $apiVersion)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Hooks\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Hooks\Api\DiagnosticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$subscriptionId = "subscriptionId_example"; // string | 
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->diagnosticsGet($organization, $subscriptionId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiagnosticsApi->diagnosticsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **subscriptionId** | **string**|  |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Hooks\Model\SubscriptionDiagnostics**](../Model/SubscriptionDiagnostics.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **diagnosticsUpdate**
> \FrankHouweling\AzureDevOpsClient\Hooks\Model\SubscriptionDiagnostics diagnosticsUpdate($organization, $body, $subscriptionId, $apiVersion)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Hooks\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Hooks\Api\DiagnosticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Hooks\Model\UpdateSubscripitonDiagnosticsParameters(); // \FrankHouweling\AzureDevOpsClient\Hooks\Model\UpdateSubscripitonDiagnosticsParameters | 
$subscriptionId = "subscriptionId_example"; // string | 
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->diagnosticsUpdate($organization, $body, $subscriptionId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiagnosticsApi->diagnosticsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Hooks\Model\UpdateSubscripitonDiagnosticsParameters**](../Model/UpdateSubscripitonDiagnosticsParameters.md)|  |
 **subscriptionId** | **string**|  |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Hooks\Model\SubscriptionDiagnostics**](../Model/SubscriptionDiagnostics.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

