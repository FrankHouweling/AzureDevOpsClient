# FrankHouweling\AzureDevOpsClient\Clt\CounterInstancesApi

All URIs are relative to *https://vsclt.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**counterInstancesList**](CounterInstancesApi.md#counterInstancesList) | **GET** /{organization}/_apis/clt/testRuns/{testRunId}/counterinstances | 


# **counterInstancesList**
> \FrankHouweling\AzureDevOpsClient\Clt\Model\TestRunCounterInstance[] counterInstancesList($organization, $testRunId, $groupNames, $apiVersion, $includeSummary)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Clt\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Clt\Api\CounterInstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$testRunId = "testRunId_example"; // string | The test run identifier
$groupNames = "groupNames_example"; // string | Comma separated names of counter groups, such as 'Application', 'Performance' and 'Throughput'
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$includeSummary = true; // bool | 

try {
    $result = $apiInstance->counterInstancesList($organization, $testRunId, $groupNames, $apiVersion, $includeSummary);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CounterInstancesApi->counterInstancesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **testRunId** | **string**| The test run identifier |
 **groupNames** | **string**| Comma separated names of counter groups, such as &#39;Application&#39;, &#39;Performance&#39; and &#39;Throughput&#39; |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **includeSummary** | **bool**|  | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Clt\Model\TestRunCounterInstance[]**](../Model/TestRunCounterInstance.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

