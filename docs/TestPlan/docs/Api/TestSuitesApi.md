# FrankHouweling\AzureDevOpsClient\TestPlan\TestSuitesApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**testSuitesCreate**](TestSuitesApi.md#testSuitesCreate) | **POST** /{organization}/{project}/_apis/testplan/Plans/{planId}/suites | 
[**testSuitesDelete**](TestSuitesApi.md#testSuitesDelete) | **DELETE** /{organization}/{project}/_apis/testplan/Plans/{planId}/suites/{suiteId} | 
[**testSuitesGet**](TestSuitesApi.md#testSuitesGet) | **GET** /{organization}/{project}/_apis/testplan/Plans/{planId}/suites/{suiteId} | 
[**testSuitesGetSuitesByTestCaseId**](TestSuitesApi.md#testSuitesGetSuitesByTestCaseId) | **GET** /{organization}/_apis/testplan/suites | 
[**testSuitesGetTestSuitesForPlan**](TestSuitesApi.md#testSuitesGetTestSuitesForPlan) | **GET** /{organization}/{project}/_apis/testplan/Plans/{planId}/suites | 
[**testSuitesUpdate**](TestSuitesApi.md#testSuitesUpdate) | **PATCH** /{organization}/{project}/_apis/testplan/Plans/{planId}/suites/{suiteId} | 


# **testSuitesCreate**
> \FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestSuite testSuitesCreate($organization, $body, $project, $planId, $apiVersion)



Create test suite.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\TestPlan\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\TestPlan\Api\TestSuitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestSuiteCreateParams(); // \FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestSuiteCreateParams | Parameters for suite creation
$project = "project_example"; // string | Project ID or project name
$planId = 56; // int | ID of the test plan that contains the suites.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->testSuitesCreate($organization, $body, $project, $planId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestSuitesApi->testSuitesCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestSuiteCreateParams**](../Model/TestSuiteCreateParams.md)| Parameters for suite creation |
 **project** | **string**| Project ID or project name |
 **planId** | **int**| ID of the test plan that contains the suites. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestSuite**](../Model/TestSuite.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testSuitesDelete**
> testSuitesDelete($organization, $project, $planId, $suiteId, $apiVersion)



Delete test suite.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\TestPlan\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\TestPlan\Api\TestSuitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$planId = 56; // int | ID of the test plan that contains the suite.
$suiteId = 56; // int | ID of the test suite to delete.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->testSuitesDelete($organization, $project, $planId, $suiteId, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling TestSuitesApi->testSuitesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **planId** | **int**| ID of the test plan that contains the suite. |
 **suiteId** | **int**| ID of the test suite to delete. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testSuitesGet**
> \FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestSuite testSuitesGet($organization, $project, $planId, $suiteId, $apiVersion, $expand)



Get test suite by suite id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\TestPlan\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\TestPlan\Api\TestSuitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$planId = 56; // int | ID of the test plan that contains the suites.
$suiteId = 56; // int | ID of the suite to get.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$expand = "expand_example"; // string | Include the children suites and testers details

try {
    $result = $apiInstance->testSuitesGet($organization, $project, $planId, $suiteId, $apiVersion, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestSuitesApi->testSuitesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **planId** | **int**| ID of the test plan that contains the suites. |
 **suiteId** | **int**| ID of the suite to get. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **expand** | **string**| Include the children suites and testers details | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestSuite**](../Model/TestSuite.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testSuitesGetSuitesByTestCaseId**
> \FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestSuite[] testSuitesGetSuitesByTestCaseId($organization, $testCaseId, $apiVersion)



Find the list of all test suites in which a given test case is present. This is helpful if you need to find out which test suites are using a test case, when you need to make changes to a test case.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\TestPlan\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\TestPlan\Api\TestSuitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$testCaseId = 56; // int | ID of the test case for which suites need to be fetched.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->testSuitesGetSuitesByTestCaseId($organization, $testCaseId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestSuitesApi->testSuitesGetSuitesByTestCaseId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **testCaseId** | **int**| ID of the test case for which suites need to be fetched. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestSuite[]**](../Model/TestSuite.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testSuitesGetTestSuitesForPlan**
> \FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestSuite[] testSuitesGetTestSuitesForPlan($organization, $project, $planId, $apiVersion, $expand, $continuationToken, $asTreeView)



Get test suites for plan.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\TestPlan\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\TestPlan\Api\TestSuitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$planId = 56; // int | ID of the test plan for which suites are requested.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$expand = "expand_example"; // string | Include the children suites and testers details.
$continuationToken = "continuationToken_example"; // string | If the list of suites returned is not complete, a continuation token to query next batch of suites is included in the response header as \"x-ms-continuationtoken\". Omit this parameter to get the first batch of test suites.
$asTreeView = true; // bool | If the suites returned should be in a tree structure.

try {
    $result = $apiInstance->testSuitesGetTestSuitesForPlan($organization, $project, $planId, $apiVersion, $expand, $continuationToken, $asTreeView);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestSuitesApi->testSuitesGetTestSuitesForPlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **planId** | **int**| ID of the test plan for which suites are requested. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **expand** | **string**| Include the children suites and testers details. | [optional]
 **continuationToken** | **string**| If the list of suites returned is not complete, a continuation token to query next batch of suites is included in the response header as \&quot;x-ms-continuationtoken\&quot;. Omit this parameter to get the first batch of test suites. | [optional]
 **asTreeView** | **bool**| If the suites returned should be in a tree structure. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestSuite[]**](../Model/TestSuite.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testSuitesUpdate**
> \FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestSuite testSuitesUpdate($organization, $body, $project, $planId, $suiteId, $apiVersion)



Update test suite.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\TestPlan\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\TestPlan\Api\TestSuitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestSuiteUpdateParams(); // \FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestSuiteUpdateParams | Parameters for suite updation
$project = "project_example"; // string | Project ID or project name
$planId = 56; // int | ID of the test plan that contains the suites.
$suiteId = 56; // int | ID of the parent suite.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->testSuitesUpdate($organization, $body, $project, $planId, $suiteId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestSuitesApi->testSuitesUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestSuiteUpdateParams**](../Model/TestSuiteUpdateParams.md)| Parameters for suite updation |
 **project** | **string**| Project ID or project name |
 **planId** | **int**| ID of the test plan that contains the suites. |
 **suiteId** | **int**| ID of the parent suite. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestSuite**](../Model/TestSuite.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

