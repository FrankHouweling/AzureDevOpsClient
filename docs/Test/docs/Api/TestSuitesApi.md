# FrankHouweling\AzureDevOpsClient\Test\TestSuitesApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**testSuitesAdd**](TestSuitesApi.md#testSuitesAdd) | **POST** /{organization}/{project}/_apis/test/Plans/{planId}/suites/{suiteId}/testcases/{testCaseIds} | 
[**testSuitesGet**](TestSuitesApi.md#testSuitesGet) | **GET** /{organization}/{project}/_apis/test/Plans/{planId}/suites/{suiteId}/testcases/{testCaseIds} | 
[**testSuitesList**](TestSuitesApi.md#testSuitesList) | **GET** /{organization}/{project}/_apis/test/Plans/{planId}/suites/{suiteId}/testcases | 
[**testSuitesRemoveTestCasesFromSuiteUrl**](TestSuitesApi.md#testSuitesRemoveTestCasesFromSuiteUrl) | **DELETE** /{organization}/{project}/_apis/test/Plans/{planId}/suites/{suiteId}/testcases/{testCaseIds} | 
[**testSuitesUpdate**](TestSuitesApi.md#testSuitesUpdate) | **PATCH** /{organization}/{project}/_apis/test/Plans/{planId}/suites/{suiteId}/testcases/{testCaseIds} | 


# **testSuitesAdd**
> \FrankHouweling\AzureDevOpsClient\Test\Model\SuiteTestCase[] testSuitesAdd($organization, $project, $planId, $suiteId, $testCaseIds, $apiVersion)



Add test cases to suite.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Test\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Test\Api\TestSuitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$planId = 56; // int | ID of the test plan that contains the suite.
$suiteId = 56; // int | ID of the test suite to which the test cases must be added.
$testCaseIds = "testCaseIds_example"; // string | IDs of the test cases to add to the suite. Ids are specified in comma separated format.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.

try {
    $result = $apiInstance->testSuitesAdd($organization, $project, $planId, $suiteId, $testCaseIds, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestSuitesApi->testSuitesAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **planId** | **int**| ID of the test plan that contains the suite. |
 **suiteId** | **int**| ID of the test suite to which the test cases must be added. |
 **testCaseIds** | **string**| IDs of the test cases to add to the suite. Ids are specified in comma separated format. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Test\Model\SuiteTestCase[]**](../Model/SuiteTestCase.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testSuitesGet**
> \FrankHouweling\AzureDevOpsClient\Test\Model\SuiteTestCase testSuitesGet($organization, $project, $planId, $suiteId, $testCaseIds, $apiVersion)



Get a specific test case in a test suite with test case id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Test\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Test\Api\TestSuitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$planId = 56; // int | ID of the test plan that contains the suites.
$suiteId = 56; // int | ID of the suite that contains the test case.
$testCaseIds = 56; // int | ID of the test case to get.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.

try {
    $result = $apiInstance->testSuitesGet($organization, $project, $planId, $suiteId, $testCaseIds, $apiVersion);
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
 **suiteId** | **int**| ID of the suite that contains the test case. |
 **testCaseIds** | **int**| ID of the test case to get. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Test\Model\SuiteTestCase**](../Model/SuiteTestCase.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testSuitesList**
> \FrankHouweling\AzureDevOpsClient\Test\Model\SuiteTestCase[] testSuitesList($organization, $project, $planId, $suiteId, $apiVersion)



Get all test cases in a suite.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Test\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Test\Api\TestSuitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$planId = 56; // int | ID of the test plan that contains the suites.
$suiteId = 56; // int | ID of the suite to get.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.

try {
    $result = $apiInstance->testSuitesList($organization, $project, $planId, $suiteId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestSuitesApi->testSuitesList: ', $e->getMessage(), PHP_EOL;
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
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Test\Model\SuiteTestCase[]**](../Model/SuiteTestCase.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testSuitesRemoveTestCasesFromSuiteUrl**
> testSuitesRemoveTestCasesFromSuiteUrl($organization, $project, $planId, $suiteId, $testCaseIds, $apiVersion)



The test points associated with the test cases are removed from the test suite. The test case work item is not deleted from the system. See test cases resource to delete a test case permanently.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Test\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Test\Api\TestSuitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$planId = 56; // int | ID of the test plan that contains the suite.
$suiteId = 56; // int | ID of the suite to get.
$testCaseIds = "testCaseIds_example"; // string | IDs of the test cases to remove from the suite.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.

try {
    $apiInstance->testSuitesRemoveTestCasesFromSuiteUrl($organization, $project, $planId, $suiteId, $testCaseIds, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling TestSuitesApi->testSuitesRemoveTestCasesFromSuiteUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **planId** | **int**| ID of the test plan that contains the suite. |
 **suiteId** | **int**| ID of the suite to get. |
 **testCaseIds** | **string**| IDs of the test cases to remove from the suite. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testSuitesUpdate**
> \FrankHouweling\AzureDevOpsClient\Test\Model\SuiteTestCase[] testSuitesUpdate($organization, $body, $project, $planId, $suiteId, $testCaseIds, $apiVersion)



Updates the properties of the test case association in a suite.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Test\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Test\Api\TestSuitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Test\Model\SuiteTestCaseUpdateModel(); // \FrankHouweling\AzureDevOpsClient\Test\Model\SuiteTestCaseUpdateModel | Model for updation of the properties of test case suite association.
$project = "project_example"; // string | Project ID or project name
$planId = 56; // int | ID of the test plan that contains the suite.
$suiteId = 56; // int | ID of the test suite to which the test cases must be added.
$testCaseIds = "testCaseIds_example"; // string | IDs of the test cases to add to the suite. Ids are specified in comma separated format.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.

try {
    $result = $apiInstance->testSuitesUpdate($organization, $body, $project, $planId, $suiteId, $testCaseIds, $apiVersion);
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
 **body** | [**\FrankHouweling\AzureDevOpsClient\Test\Model\SuiteTestCaseUpdateModel**](../Model/SuiteTestCaseUpdateModel.md)| Model for updation of the properties of test case suite association. |
 **project** | **string**| Project ID or project name |
 **planId** | **int**| ID of the test plan that contains the suite. |
 **suiteId** | **int**| ID of the test suite to which the test cases must be added. |
 **testCaseIds** | **string**| IDs of the test cases to add to the suite. Ids are specified in comma separated format. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Test\Model\SuiteTestCase[]**](../Model/SuiteTestCase.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

