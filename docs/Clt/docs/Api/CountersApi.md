# FrankHouweling\AzureDevOpsClient\Clt\CountersApi

All URIs are relative to *https://vsclt.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**countersList**](CountersApi.md#countersList) | **GET** /{organization}/_apis/clt/apm/counters | 


# **countersList**
> \FrankHouweling\AzureDevOpsClient\Clt\Model\ApplicationCounters[] countersList($organization, $apiVersion, $applicationId, $plugintype)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Clt\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Clt\Api\CountersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$applicationId = "applicationId_example"; // string | Filter by APM application identifier.
$plugintype = "plugintype_example"; // string | Currently ApplicationInsights is the only available plugin type.

try {
    $result = $apiInstance->countersList($organization, $apiVersion, $applicationId, $plugintype);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CountersApi->countersList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **applicationId** | **string**| Filter by APM application identifier. | [optional]
 **plugintype** | **string**| Currently ApplicationInsights is the only available plugin type. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Clt\Model\ApplicationCounters[]**](../Model/ApplicationCounters.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

