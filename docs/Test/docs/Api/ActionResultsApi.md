# FrankHouweling\AzureDevOpsClient\Test\ActionResultsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**actionResultsList**](ActionResultsApi.md#actionResultsList) | **GET** /{organization}/{project}/_apis/test/Runs/{runId}/Results/{testCaseResultId}/Iterations/{iterationId}/actionresults/{actionPath} | 


# **actionResultsList**
> \FrankHouweling\AzureDevOpsClient\Test\Model\TestActionResultModel[] actionResultsList($organization, $project, $runId, $testCaseResultId, $iterationId, $actionPath, $apiVersion)



Gets the action results for an iteration in a test result.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Test\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Test\Api\ActionResultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$runId = 56; // int | ID of the test run that contains the result.
$testCaseResultId = 56; // int | ID of the test result that contains the iterations.
$iterationId = 56; // int | ID of the iteration that contains the actions.
$actionPath = "actionPath_example"; // string | Path of a specific action, used to get just that action.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.

try {
    $result = $apiInstance->actionResultsList($organization, $project, $runId, $testCaseResultId, $iterationId, $actionPath, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionResultsApi->actionResultsList: ', $e->getMessage(), PHP_EOL;
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
 **iterationId** | **int**| ID of the iteration that contains the actions. |
 **actionPath** | **string**| Path of a specific action, used to get just that action. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Test\Model\TestActionResultModel[]**](../Model/TestActionResultModel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

