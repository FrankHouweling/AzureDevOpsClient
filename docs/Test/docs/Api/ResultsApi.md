# AzureDevOpsClient\Test\ResultsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**resultsAdd**](ResultsApi.md#resultsAdd) | **POST** /{organization}/{project}/_apis/test/Runs/{runId}/results | 
[**resultsGet**](ResultsApi.md#resultsGet) | **GET** /{organization}/{project}/_apis/test/Runs/{runId}/results/{testCaseResultId} | 
[**resultsList**](ResultsApi.md#resultsList) | **GET** /{organization}/{project}/_apis/test/Runs/{runId}/results | 
[**resultsUpdate**](ResultsApi.md#resultsUpdate) | **PATCH** /{organization}/{project}/_apis/test/Runs/{runId}/results | 


# **resultsAdd**
> \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestCaseResult[] resultsAdd($organization, $body, $project, $runId, $apiVersion)



Add test results to a test run.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Test\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Test\Api\ResultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = array(new \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestCaseResult()); // \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestCaseResult[] | List of test results to add.
$project = "project_example"; // string | Project ID or project name
$runId = 56; // int | Test run ID into which test results to add.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.6' to use this version of the api.

try {
    $result = $apiInstance->resultsAdd($organization, $body, $project, $runId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResultsApi->resultsAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestCaseResult[]**](../Model/TestCaseResult.md)| List of test results to add. |
 **project** | **string**| Project ID or project name |
 **runId** | **int**| Test run ID into which test results to add. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.6&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestCaseResult[]**](../Model/TestCaseResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resultsGet**
> \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestCaseResult resultsGet($organization, $project, $runId, $testCaseResultId, $apiVersion, $detailsToInclude)



Get a test result for a test run.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Test\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Test\Api\ResultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$runId = 56; // int | Test run ID of a test result to fetch.
$testCaseResultId = 56; // int | Test result ID.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.6' to use this version of the api.
$detailsToInclude = "detailsToInclude_example"; // string | Details to include with test results. Default is None. Other values are Iterations, WorkItems and SubResults.

try {
    $result = $apiInstance->resultsGet($organization, $project, $runId, $testCaseResultId, $apiVersion, $detailsToInclude);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResultsApi->resultsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **runId** | **int**| Test run ID of a test result to fetch. |
 **testCaseResultId** | **int**| Test result ID. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.6&#39; to use this version of the api. |
 **detailsToInclude** | **string**| Details to include with test results. Default is None. Other values are Iterations, WorkItems and SubResults. | [optional]

### Return type

[**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestCaseResult**](../Model/TestCaseResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resultsList**
> \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestCaseResult[] resultsList($organization, $project, $runId, $apiVersion, $detailsToInclude, $skip, $top, $outcomes)



Get test results for a test run.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Test\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Test\Api\ResultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$runId = 56; // int | Test run ID of test results to fetch.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.6' to use this version of the api.
$detailsToInclude = "detailsToInclude_example"; // string | Details to include with test results. Default is None. Other values are Iterations and WorkItems.
$skip = 56; // int | Number of test results to skip from beginning.
$top = 56; // int | Number of test results to return. Maximum is 1000 when detailsToInclude is None and 200 otherwise.
$outcomes = "outcomes_example"; // string | Comma separated list of test outcomes to filter test results.

try {
    $result = $apiInstance->resultsList($organization, $project, $runId, $apiVersion, $detailsToInclude, $skip, $top, $outcomes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResultsApi->resultsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **runId** | **int**| Test run ID of test results to fetch. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.6&#39; to use this version of the api. |
 **detailsToInclude** | **string**| Details to include with test results. Default is None. Other values are Iterations and WorkItems. | [optional]
 **skip** | **int**| Number of test results to skip from beginning. | [optional]
 **top** | **int**| Number of test results to return. Maximum is 1000 when detailsToInclude is None and 200 otherwise. | [optional]
 **outcomes** | **string**| Comma separated list of test outcomes to filter test results. | [optional]

### Return type

[**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestCaseResult[]**](../Model/TestCaseResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resultsUpdate**
> \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestCaseResult[] resultsUpdate($organization, $body, $project, $runId, $apiVersion)



Update test results in a test run.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Test\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Test\Api\ResultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = array(new \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestCaseResult()); // \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestCaseResult[] | List of test results to update.
$project = "project_example"; // string | Project ID or project name
$runId = 56; // int | Test run ID whose test results to update.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.6' to use this version of the api.

try {
    $result = $apiInstance->resultsUpdate($organization, $body, $project, $runId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResultsApi->resultsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestCaseResult[]**](../Model/TestCaseResult.md)| List of test results to update. |
 **project** | **string**| Project ID or project name |
 **runId** | **int**| Test run ID whose test results to update. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.6&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestCaseResult[]**](../Model/TestCaseResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

