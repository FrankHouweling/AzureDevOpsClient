# AzureDevOpsClient\Test\RunsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**runsCreate**](RunsApi.md#runsCreate) | **POST** /{organization}/{project}/_apis/test/runs | 
[**runsDelete**](RunsApi.md#runsDelete) | **DELETE** /{organization}/{project}/_apis/test/runs/{runId} | 
[**runsGetTestRunById**](RunsApi.md#runsGetTestRunById) | **GET** /{organization}/{project}/_apis/test/runs/{runId} | 
[**runsGetTestRunStatistics**](RunsApi.md#runsGetTestRunStatistics) | **GET** /{organization}/{project}/_apis/test/runs/{runId}/Statistics | 
[**runsList**](RunsApi.md#runsList) | **GET** /{organization}/{project}/_apis/test/runs | 
[**runsUpdate**](RunsApi.md#runsUpdate) | **PATCH** /{organization}/{project}/_apis/test/runs/{runId} | 


# **runsCreate**
> \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestRun runsCreate($organization, $body, $project, $apiVersion)



Create new test run.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Test\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Test\Api\RunsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\RunCreateModel(); // \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\RunCreateModel | Run details RunCreateModel
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.

try {
    $result = $apiInstance->runsCreate($organization, $body, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RunsApi->runsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\RunCreateModel**](../Model/RunCreateModel.md)| Run details RunCreateModel |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestRun**](../Model/TestRun.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **runsDelete**
> runsDelete($organization, $project, $runId, $apiVersion)



Delete a test run by its ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Test\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Test\Api\RunsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$runId = 56; // int | ID of the run to delete.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.

try {
    $apiInstance->runsDelete($organization, $project, $runId, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling RunsApi->runsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **runId** | **int**| ID of the run to delete. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **runsGetTestRunById**
> \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestRun runsGetTestRunById($organization, $project, $runId, $apiVersion, $includeDetails)



Get a test run by its ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Test\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Test\Api\RunsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$runId = 56; // int | ID of the run to get.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.
$includeDetails = true; // bool | Default value is true. It includes details like run statistics, release, build, test environment, post process state, and more.

try {
    $result = $apiInstance->runsGetTestRunById($organization, $project, $runId, $apiVersion, $includeDetails);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RunsApi->runsGetTestRunById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **runId** | **int**| ID of the run to get. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |
 **includeDetails** | **bool**| Default value is true. It includes details like run statistics, release, build, test environment, post process state, and more. | [optional]

### Return type

[**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestRun**](../Model/TestRun.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **runsGetTestRunStatistics**
> \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestRunStatistic runsGetTestRunStatistics($organization, $project, $runId, $apiVersion)



Get test run statistics , used when we want to get summary of a run by outcome.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Test\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Test\Api\RunsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$runId = 56; // int | ID of the run to get.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.

try {
    $result = $apiInstance->runsGetTestRunStatistics($organization, $project, $runId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RunsApi->runsGetTestRunStatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **runId** | **int**| ID of the run to get. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestRunStatistic**](../Model/TestRunStatistic.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **runsList**
> \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestRun[] runsList($organization, $project, $apiVersion, $buildUri, $owner, $tmiRunId, $planId, $includeRunDetails, $automated, $skip, $top)



Get a list of test runs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Test\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Test\Api\RunsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.
$buildUri = "buildUri_example"; // string | URI of the build that the runs used.
$owner = "owner_example"; // string | Team foundation ID of the owner of the runs.
$tmiRunId = "tmiRunId_example"; // string | 
$planId = 56; // int | ID of the test plan that the runs are a part of.
$includeRunDetails = true; // bool | If true, include all the properties of the runs.
$automated = true; // bool | If true, only returns automated runs.
$skip = 56; // int | Number of test runs to skip.
$top = 56; // int | Number of test runs to return.

try {
    $result = $apiInstance->runsList($organization, $project, $apiVersion, $buildUri, $owner, $tmiRunId, $planId, $includeRunDetails, $automated, $skip, $top);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RunsApi->runsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |
 **buildUri** | **string**| URI of the build that the runs used. | [optional]
 **owner** | **string**| Team foundation ID of the owner of the runs. | [optional]
 **tmiRunId** | **string**|  | [optional]
 **planId** | **int**| ID of the test plan that the runs are a part of. | [optional]
 **includeRunDetails** | **bool**| If true, include all the properties of the runs. | [optional]
 **automated** | **bool**| If true, only returns automated runs. | [optional]
 **skip** | **int**| Number of test runs to skip. | [optional]
 **top** | **int**| Number of test runs to return. | [optional]

### Return type

[**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestRun[]**](../Model/TestRun.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **runsUpdate**
> \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestRun runsUpdate($organization, $body, $project, $runId, $apiVersion)



Update test run by its ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Test\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Test\Api\RunsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\RunUpdateModel(); // \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\RunUpdateModel | Run details RunUpdateModel
$project = "project_example"; // string | Project ID or project name
$runId = 56; // int | ID of the run to update.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.

try {
    $result = $apiInstance->runsUpdate($organization, $body, $project, $runId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RunsApi->runsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\RunUpdateModel**](../Model/RunUpdateModel.md)| Run details RunUpdateModel |
 **project** | **string**| Project ID or project name |
 **runId** | **int**| ID of the run to update. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestRun**](../Model/TestRun.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

