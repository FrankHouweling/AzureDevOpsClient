# FrankHouweling\AzureDevOpsClient\Notification\DiagnosticsApi

All URIs are relative to *https://{service}.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**diagnosticsGet**](DiagnosticsApi.md#diagnosticsGet) | **GET** /{organization}/_apis/notification/subscriptions/{subscriptionId}/diagnostics | 
[**diagnosticsUpdate**](DiagnosticsApi.md#diagnosticsUpdate) | **PUT** /{organization}/_apis/notification/subscriptions/{subscriptionId}/diagnostics | 


# **diagnosticsGet**
> \FrankHouweling\AzureDevOpsClient\Notification\Model\SubscriptionDiagnostics diagnosticsGet($subscriptionId, $organization, $apiVersion)



Get the diagnostics settings for a subscription.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Notification\Api\DiagnosticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscriptionId = "subscriptionId_example"; // string | The id of the notifications subscription.
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->diagnosticsGet($subscriptionId, $organization, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiagnosticsApi->diagnosticsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscriptionId** | **string**| The id of the notifications subscription. |
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Notification\Model\SubscriptionDiagnostics**](../Model/SubscriptionDiagnostics.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **diagnosticsUpdate**
> \FrankHouweling\AzureDevOpsClient\Notification\Model\SubscriptionDiagnostics diagnosticsUpdate($body, $subscriptionId, $organization, $apiVersion)



Update the diagnostics settings for a subscription.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Notification\Api\DiagnosticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \FrankHouweling\AzureDevOpsClient\Notification\Model\UpdateSubscripitonDiagnosticsParameters(); // \FrankHouweling\AzureDevOpsClient\Notification\Model\UpdateSubscripitonDiagnosticsParameters | 
$subscriptionId = "subscriptionId_example"; // string | The id of the notifications subscription.
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->diagnosticsUpdate($body, $subscriptionId, $organization, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiagnosticsApi->diagnosticsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\FrankHouweling\AzureDevOpsClient\Notification\Model\UpdateSubscripitonDiagnosticsParameters**](../Model/UpdateSubscripitonDiagnosticsParameters.md)|  |
 **subscriptionId** | **string**| The id of the notifications subscription. |
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Notification\Model\SubscriptionDiagnostics**](../Model/SubscriptionDiagnostics.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

