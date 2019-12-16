# FrankHouweling\AzureDevOpsClient\Clt\CounterSamplesApi

All URIs are relative to *https://vsclt.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**counterSamplesGet**](CounterSamplesApi.md#counterSamplesGet) | **POST** /{organization}/_apis/clt/testRuns/{testRunId}/countersamples | 


# **counterSamplesGet**
> \FrankHouweling\AzureDevOpsClient\Clt\Model\CounterSamplesResult counterSamplesGet($organization, $body, $testRunId, $apiVersion)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Clt\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Clt\Api\CounterSamplesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Clt\Model\VssJsonCollectionWrapper(); // \FrankHouweling\AzureDevOpsClient\Clt\Model\VssJsonCollectionWrapper | 
$testRunId = "testRunId_example"; // string | The test run identifier
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->counterSamplesGet($organization, $body, $testRunId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CounterSamplesApi->counterSamplesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Clt\Model\VssJsonCollectionWrapper**](../Model/VssJsonCollectionWrapper.md)|  |
 **testRunId** | **string**| The test run identifier |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Clt\Model\CounterSamplesResult**](../Model/CounterSamplesResult.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

