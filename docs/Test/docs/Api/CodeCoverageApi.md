# FrankHouweling\AzureDevOpsClient\Test\CodeCoverageApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**codeCoverageGetBuildCodeCoverage**](CodeCoverageApi.md#codeCoverageGetBuildCodeCoverage) | **GET** /{organization}/{project}/_apis/test/codecoverage | 
[**codeCoverageGetTestRunCodeCoverage**](CodeCoverageApi.md#codeCoverageGetTestRunCodeCoverage) | **GET** /{organization}/{project}/_apis/test/Runs/{runId}/codecoverage | 


# **codeCoverageGetBuildCodeCoverage**
> \FrankHouweling\AzureDevOpsClient\Test\Model\BuildCoverage[] codeCoverageGetBuildCodeCoverage($organization, $project, $buildId, $flags, $apiVersion)



Get code coverage data for a build.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Test\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Test\Api\CodeCoverageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$buildId = 56; // int | ID of the build for which code coverage data needs to be fetched.
$flags = 56; // int | Value of flags determine the level of code coverage details to be fetched. Flags are additive. Expected Values are 1 for Modules, 2 for Functions, 4 for BlockData.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->codeCoverageGetBuildCodeCoverage($organization, $project, $buildId, $flags, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodeCoverageApi->codeCoverageGetBuildCodeCoverage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **buildId** | **int**| ID of the build for which code coverage data needs to be fetched. |
 **flags** | **int**| Value of flags determine the level of code coverage details to be fetched. Flags are additive. Expected Values are 1 for Modules, 2 for Functions, 4 for BlockData. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Test\Model\BuildCoverage[]**](../Model/BuildCoverage.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **codeCoverageGetTestRunCodeCoverage**
> \FrankHouweling\AzureDevOpsClient\Test\Model\TestRunCoverage[] codeCoverageGetTestRunCodeCoverage($organization, $project, $runId, $flags, $apiVersion)



Get code coverage data for a test run

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Test\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Test\Api\CodeCoverageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$runId = 56; // int | ID of the test run for which code coverage data needs to be fetched.
$flags = 56; // int | Value of flags determine the level of code coverage details to be fetched. Flags are additive. Expected Values are 1 for Modules, 2 for Functions, 4 for BlockData.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->codeCoverageGetTestRunCodeCoverage($organization, $project, $runId, $flags, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodeCoverageApi->codeCoverageGetTestRunCodeCoverage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **runId** | **int**| ID of the test run for which code coverage data needs to be fetched. |
 **flags** | **int**| Value of flags determine the level of code coverage details to be fetched. Flags are additive. Expected Values are 1 for Modules, 2 for Functions, 4 for BlockData. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Test\Model\TestRunCoverage[]**](../Model/TestRunCoverage.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

