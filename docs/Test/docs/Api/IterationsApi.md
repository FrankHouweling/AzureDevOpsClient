# FrankHouweling\AzureDevOpsClient\Test\IterationsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**iterationsGet**](IterationsApi.md#iterationsGet) | **GET** /{organization}/{project}/_apis/test/Runs/{runId}/Results/{testCaseResultId}/iterations/{iterationId} | 
[**iterationsList**](IterationsApi.md#iterationsList) | **GET** /{organization}/{project}/_apis/test/Runs/{runId}/Results/{testCaseResultId}/iterations | 


# **iterationsGet**
> \FrankHouweling\AzureDevOpsClient\Test\Model\TestIterationDetailsModel iterationsGet($organization, $project, $runId, $testCaseResultId, $iterationId, $apiVersion, $includeActionResults)



Get iteration for a result

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Test\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Test\Api\IterationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$runId = 56; // int | ID of the test run that contains the result.
$testCaseResultId = 56; // int | ID of the test result that contains the iterations.
$iterationId = 56; // int | Id of the test results Iteration.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.
$includeActionResults = true; // bool | Include result details for each action performed in the test iteration. ActionResults refer to outcome (pass/fail) of test steps that are executed as part of a running a manual test. Including the ActionResults flag gets the outcome of test steps in the actionResults section and test parameters in the parameters section for each test iteration.

try {
    $result = $apiInstance->iterationsGet($organization, $project, $runId, $testCaseResultId, $iterationId, $apiVersion, $includeActionResults);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IterationsApi->iterationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **runId** | **int**| ID of the test run that contains the result. |
 **testCaseResultId** | **int**| ID of the test result that contains the iterations. |
 **iterationId** | **int**| Id of the test results Iteration. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |
 **includeActionResults** | **bool**| Include result details for each action performed in the test iteration. ActionResults refer to outcome (pass/fail) of test steps that are executed as part of a running a manual test. Including the ActionResults flag gets the outcome of test steps in the actionResults section and test parameters in the parameters section for each test iteration. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Test\Model\TestIterationDetailsModel**](../Model/TestIterationDetailsModel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **iterationsList**
> \FrankHouweling\AzureDevOpsClient\Test\Model\TestIterationDetailsModel[] iterationsList($organization, $project, $runId, $testCaseResultId, $apiVersion, $includeActionResults)



Get iterations for a result

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Test\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Test\Api\IterationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$runId = 56; // int | ID of the test run that contains the result.
$testCaseResultId = 56; // int | ID of the test result that contains the iterations.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.
$includeActionResults = true; // bool | Include result details for each action performed in the test iteration. ActionResults refer to outcome (pass/fail) of test steps that are executed as part of a running a manual test. Including the ActionResults flag gets the outcome of test steps in the actionResults section and test parameters in the parameters section for each test iteration.

try {
    $result = $apiInstance->iterationsList($organization, $project, $runId, $testCaseResultId, $apiVersion, $includeActionResults);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IterationsApi->iterationsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **runId** | **int**| ID of the test run that contains the result. |
 **testCaseResultId** | **int**| ID of the test result that contains the iterations. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |
 **includeActionResults** | **bool**| Include result details for each action performed in the test iteration. ActionResults refer to outcome (pass/fail) of test steps that are executed as part of a running a manual test. Including the ActionResults flag gets the outcome of test steps in the actionResults section and test parameters in the parameters section for each test iteration. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Test\Model\TestIterationDetailsModel[]**](../Model/TestIterationDetailsModel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

