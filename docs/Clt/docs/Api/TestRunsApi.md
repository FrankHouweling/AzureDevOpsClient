# FrankHouweling\AzureDevOpsClient\Clt\TestRunsApi

All URIs are relative to *https://vsclt.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**testRunsCreate**](TestRunsApi.md#testRunsCreate) | **POST** /{organization}/_apis/clt/testruns | 
[**testRunsGetTestRun**](TestRunsApi.md#testRunsGetTestRun) | **GET** /{organization}/_apis/clt/testruns/{testRunId} | 
[**testRunsGetTestRuns**](TestRunsApi.md#testRunsGetTestRuns) | **GET** /{organization}/_apis/clt/testruns | 
[**testRunsUpdate**](TestRunsApi.md#testRunsUpdate) | **PATCH** /{organization}/_apis/clt/testruns/{testRunId} | 


# **testRunsCreate**
> \FrankHouweling\AzureDevOpsClient\Clt\Model\TestRun testRunsCreate($organization, $body, $apiVersion)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Clt\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Clt\Api\TestRunsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Clt\Model\TestRun(); // \FrankHouweling\AzureDevOpsClient\Clt\Model\TestRun | 
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->testRunsCreate($organization, $body, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestRunsApi->testRunsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Clt\Model\TestRun**](../Model/TestRun.md)|  |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Clt\Model\TestRun**](../Model/TestRun.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testRunsGetTestRun**
> \FrankHouweling\AzureDevOpsClient\Clt\Model\TestRun testRunsGetTestRun($organization, $testRunId, $apiVersion)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Clt\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Clt\Api\TestRunsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$testRunId = "testRunId_example"; // string | Unique ID of the test run
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->testRunsGetTestRun($organization, $testRunId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestRunsApi->testRunsGetTestRun: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **testRunId** | **string**| Unique ID of the test run |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Clt\Model\TestRun**](../Model/TestRun.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testRunsGetTestRuns**
> object testRunsGetTestRuns($organization, $apiVersion, $name, $requestedBy, $status, $runType, $fromDate, $toDate, $detailed, $top, $runsourceidentifier, $retentionState)



Returns test runs based on the filter specified. Returns all runs of the tenant if there is no filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Clt\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Clt\Api\TestRunsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$name = "name_example"; // string | Name for the test run. Names are not unique. Test runs with same name are assigned sequential rolling numbers.
$requestedBy = "requestedBy_example"; // string | Filter by the user who requested the test run. Here requestedBy should be the display name of the user.
$status = "status_example"; // string | Filter by the test run status.
$runType = "runType_example"; // string | Valid values include: null, one of TestRunType, or \"*\"
$fromDate = "fromDate_example"; // string | Filter by the test runs that have been modified after the fromDate timestamp.
$toDate = "toDate_example"; // string | Filter by the test runs that have been modified before the toDate timestamp.
$detailed = true; // bool | Include the detailed test run attributes.
$top = 56; // int | The maximum number of test runs to return.
$runsourceidentifier = "runsourceidentifier_example"; // string | 
$retentionState = "retentionState_example"; // string | 

try {
    $result = $apiInstance->testRunsGetTestRuns($organization, $apiVersion, $name, $requestedBy, $status, $runType, $fromDate, $toDate, $detailed, $top, $runsourceidentifier, $retentionState);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestRunsApi->testRunsGetTestRuns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **name** | **string**| Name for the test run. Names are not unique. Test runs with same name are assigned sequential rolling numbers. | [optional]
 **requestedBy** | **string**| Filter by the user who requested the test run. Here requestedBy should be the display name of the user. | [optional]
 **status** | **string**| Filter by the test run status. | [optional]
 **runType** | **string**| Valid values include: null, one of TestRunType, or \&quot;*\&quot; | [optional]
 **fromDate** | **string**| Filter by the test runs that have been modified after the fromDate timestamp. | [optional]
 **toDate** | **string**| Filter by the test runs that have been modified before the toDate timestamp. | [optional]
 **detailed** | **bool**| Include the detailed test run attributes. | [optional]
 **top** | **int**| The maximum number of test runs to return. | [optional]
 **runsourceidentifier** | **string**|  | [optional]
 **retentionState** | **string**|  | [optional]

### Return type

**object**

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testRunsUpdate**
> testRunsUpdate($organization, $body, $testRunId, $apiVersion)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Clt\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Clt\Api\TestRunsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Clt\Model\TestRun(); // \FrankHouweling\AzureDevOpsClient\Clt\Model\TestRun | 
$testRunId = "testRunId_example"; // string | 
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->testRunsUpdate($organization, $body, $testRunId, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling TestRunsApi->testRunsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Clt\Model\TestRun**](../Model/TestRun.md)|  |
 **testRunId** | **string**|  |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

