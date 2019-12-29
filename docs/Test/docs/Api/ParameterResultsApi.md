# FrankHouweling\AzureDevOpsClient\Test\ParameterResultsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**parameterResultsList**](ParameterResultsApi.md#parameterResultsList) | **GET** /{organization}/{project}/_apis/test/Runs/{runId}/Results/{testCaseResultId}/Iterations/{iterationId}/parameterresults | 


# **parameterResultsList**
> \FrankHouweling\AzureDevOpsClient\Test\Model\TestResultParameterModel[] parameterResultsList($organization, $project, $runId, $testCaseResultId, $iterationId, $apiVersion, $paramName)



Get a list of parameterized results

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Test\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Test\Api\ParameterResultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$runId = 56; // int | ID of the test run that contains the result.
$testCaseResultId = 56; // int | ID of the test result that contains the iterations.
$iterationId = 56; // int | ID of the iteration that contains the parameterized results.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.
$paramName = "paramName_example"; // string | Name of the parameter.

try {
    $result = $apiInstance->parameterResultsList($organization, $project, $runId, $testCaseResultId, $iterationId, $apiVersion, $paramName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParameterResultsApi->parameterResultsList: ', $e->getMessage(), PHP_EOL;
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
 **iterationId** | **int**| ID of the iteration that contains the parameterized results. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |
 **paramName** | **string**| Name of the parameter. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Test\Model\TestResultParameterModel[]**](../Model/TestResultParameterModel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

