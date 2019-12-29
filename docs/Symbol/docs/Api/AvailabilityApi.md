# FrankHouweling\AzureDevOpsClient\Symbol\AvailabilityApi

All URIs are relative to *https://artifacts.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**availabilityCheckAvailability**](AvailabilityApi.md#availabilityCheckAvailability) | **GET** /{organization}/_apis/symbol/availability | 


# **availabilityCheckAvailability**
> availabilityCheckAvailability($organization, $apiVersion)



Check the availability of symbol service. This includes checking for feature flag, and possibly license in future. Note this is NOT an anonymous endpoint, and the caller will be redirected to authentication before hitting it.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Symbol\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Symbol\Api\AvailabilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->availabilityCheckAvailability($organization, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilityApi->availabilityCheckAvailability: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

