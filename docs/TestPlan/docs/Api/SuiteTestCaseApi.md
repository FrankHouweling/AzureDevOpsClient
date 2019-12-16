# AzureDevOpsClient\TestPlan\SuiteTestCaseApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**suiteTestCaseAdd**](SuiteTestCaseApi.md#suiteTestCaseAdd) | **POST** /{organization}/{project}/_apis/testplan/Plans/{planId}/Suites/{suiteId}/TestCase | 
[**suiteTestCaseGetTestCase**](SuiteTestCaseApi.md#suiteTestCaseGetTestCase) | **GET** /{organization}/{project}/_apis/testplan/Plans/{planId}/Suites/{suiteId}/TestCase/{testCaseIds} | 
[**suiteTestCaseGetTestCaseList**](SuiteTestCaseApi.md#suiteTestCaseGetTestCaseList) | **GET** /{organization}/{project}/_apis/testplan/Plans/{planId}/Suites/{suiteId}/TestCase | 
[**suiteTestCaseRemoveTestCasesFromSuite**](SuiteTestCaseApi.md#suiteTestCaseRemoveTestCasesFromSuite) | **DELETE** /{organization}/{project}/_apis/testplan/Plans/{planId}/Suites/{suiteId}/TestCase/{testCaseIds} | 
[**suiteTestCaseUpdate**](SuiteTestCaseApi.md#suiteTestCaseUpdate) | **PATCH** /{organization}/{project}/_apis/testplan/Plans/{planId}/Suites/{suiteId}/TestCase | 


# **suiteTestCaseAdd**
> \AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TestCase[] suiteTestCaseAdd($organization, $body, $project, $planId, $suiteId, $apiVersion)



Add test cases to a suite with specified configurations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\TestPlan\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\TestPlan\Api\SuiteTestCaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = array(new \AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\SuiteTestCaseCreateUpdateParameters()); // \AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\SuiteTestCaseCreateUpdateParameters[] | SuiteTestCaseCreateUpdateParameters object.
$project = "project_example"; // string | Project ID or project name
$planId = 56; // int | ID of the test plan to which test cases are to be added.
$suiteId = 56; // int | ID of the test suite to which test cases are to be added.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $result = $apiInstance->suiteTestCaseAdd($organization, $body, $project, $planId, $suiteId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuiteTestCaseApi->suiteTestCaseAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\SuiteTestCaseCreateUpdateParameters[]**](../Model/SuiteTestCaseCreateUpdateParameters.md)| SuiteTestCaseCreateUpdateParameters object. |
 **project** | **string**| Project ID or project name |
 **planId** | **int**| ID of the test plan to which test cases are to be added. |
 **suiteId** | **int**| ID of the test suite to which test cases are to be added. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TestCase[]**](../Model/TestCase.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **suiteTestCaseGetTestCase**
> \AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TestCase[] suiteTestCaseGetTestCase($organization, $project, $planId, $suiteId, $testCaseIds, $apiVersion, $witFields, $returnIdentityRef)



Get Test Cases For a Suite.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\TestPlan\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\TestPlan\Api\SuiteTestCaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$planId = 56; // int | ID of the test plan for which test cases are requested.
$suiteId = 56; // int | ID of the test suite for which test cases are requested.
$testCaseIds = "testCaseIds_example"; // string | Test Case Ids to be fetched.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.
$witFields = "witFields_example"; // string | Get the list of witFields.
$returnIdentityRef = true; // bool | If set to true, returns all identity fields, like AssignedTo, ActivatedBy etc., as IdentityRef objects. If set to false, these fields are returned as unique names in string format. This is false by default.

try {
    $result = $apiInstance->suiteTestCaseGetTestCase($organization, $project, $planId, $suiteId, $testCaseIds, $apiVersion, $witFields, $returnIdentityRef);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuiteTestCaseApi->suiteTestCaseGetTestCase: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **planId** | **int**| ID of the test plan for which test cases are requested. |
 **suiteId** | **int**| ID of the test suite for which test cases are requested. |
 **testCaseIds** | **string**| Test Case Ids to be fetched. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |
 **witFields** | **string**| Get the list of witFields. | [optional]
 **returnIdentityRef** | **bool**| If set to true, returns all identity fields, like AssignedTo, ActivatedBy etc., as IdentityRef objects. If set to false, these fields are returned as unique names in string format. This is false by default. | [optional]

### Return type

[**\AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TestCase[]**](../Model/TestCase.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **suiteTestCaseGetTestCaseList**
> \AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TestCase[] suiteTestCaseGetTestCaseList($organization, $project, $planId, $suiteId, $apiVersion, $testIds, $configurationIds, $witFields, $continuationToken, $returnIdentityRef, $expand, $excludeFlags)



Get Test Case List return those test cases which have all the configuration Ids as mentioned in the optional parameter. If configuration Ids is null, it return all the test cases

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\TestPlan\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\TestPlan\Api\SuiteTestCaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$planId = 56; // int | ID of the test plan for which test cases are requested.
$suiteId = 56; // int | ID of the test suite for which test cases are requested.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.
$testIds = "testIds_example"; // string | Test Case Ids to be fetched.
$configurationIds = "configurationIds_example"; // string | Fetch Test Cases which contains all the configuration Ids specified.
$witFields = "witFields_example"; // string | Get the list of witFields.
$continuationToken = "continuationToken_example"; // string | If the list of test cases returned is not complete, a continuation token to query next batch of test cases is included in the response header as \"x-ms-continuationtoken\". Omit this parameter to get the first batch of test cases.
$returnIdentityRef = true; // bool | If set to true, returns all identity fields, like AssignedTo, ActivatedBy etc., as IdentityRef objects. If set to false, these fields are returned as unique names in string format. This is false by default.
$expand = true; // bool | If set to false, will get a smaller payload containing only basic details about the suite test case object
$excludeFlags = "excludeFlags_example"; // string | Flag to exclude various values from payload. For example to remove point assignments pass exclude = 1. To remove extra information (links, test plan , test suite) pass exclude = 2. To remove both extra information and point assignments pass exclude = 3 (1 + 2).

try {
    $result = $apiInstance->suiteTestCaseGetTestCaseList($organization, $project, $planId, $suiteId, $apiVersion, $testIds, $configurationIds, $witFields, $continuationToken, $returnIdentityRef, $expand, $excludeFlags);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuiteTestCaseApi->suiteTestCaseGetTestCaseList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **planId** | **int**| ID of the test plan for which test cases are requested. |
 **suiteId** | **int**| ID of the test suite for which test cases are requested. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |
 **testIds** | **string**| Test Case Ids to be fetched. | [optional]
 **configurationIds** | **string**| Fetch Test Cases which contains all the configuration Ids specified. | [optional]
 **witFields** | **string**| Get the list of witFields. | [optional]
 **continuationToken** | **string**| If the list of test cases returned is not complete, a continuation token to query next batch of test cases is included in the response header as \&quot;x-ms-continuationtoken\&quot;. Omit this parameter to get the first batch of test cases. | [optional]
 **returnIdentityRef** | **bool**| If set to true, returns all identity fields, like AssignedTo, ActivatedBy etc., as IdentityRef objects. If set to false, these fields are returned as unique names in string format. This is false by default. | [optional]
 **expand** | **bool**| If set to false, will get a smaller payload containing only basic details about the suite test case object | [optional]
 **excludeFlags** | **string**| Flag to exclude various values from payload. For example to remove point assignments pass exclude &#x3D; 1. To remove extra information (links, test plan , test suite) pass exclude &#x3D; 2. To remove both extra information and point assignments pass exclude &#x3D; 3 (1 + 2). | [optional]

### Return type

[**\AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TestCase[]**](../Model/TestCase.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **suiteTestCaseRemoveTestCasesFromSuite**
> suiteTestCaseRemoveTestCasesFromSuite($organization, $project, $planId, $suiteId, $testCaseIds, $apiVersion)



Removes test cases from a suite based on the list of test case Ids provided.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\TestPlan\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\TestPlan\Api\SuiteTestCaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$planId = 56; // int | ID of the test plan from which test cases are to be removed.
$suiteId = 56; // int | ID of the test suite from which test cases are to be removed.
$testCaseIds = "testCaseIds_example"; // string | Test Case Ids to be removed.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $apiInstance->suiteTestCaseRemoveTestCasesFromSuite($organization, $project, $planId, $suiteId, $testCaseIds, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling SuiteTestCaseApi->suiteTestCaseRemoveTestCasesFromSuite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **planId** | **int**| ID of the test plan from which test cases are to be removed. |
 **suiteId** | **int**| ID of the test suite from which test cases are to be removed. |
 **testCaseIds** | **string**| Test Case Ids to be removed. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **suiteTestCaseUpdate**
> \AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TestCase[] suiteTestCaseUpdate($organization, $body, $project, $planId, $suiteId, $apiVersion)



Update the configurations for test cases

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\TestPlan\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\TestPlan\Api\SuiteTestCaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = array(new \AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\SuiteTestCaseCreateUpdateParameters()); // \AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\SuiteTestCaseCreateUpdateParameters[] | A SuiteTestCaseCreateUpdateParameters object.
$project = "project_example"; // string | Project ID or project name
$planId = 56; // int | ID of the test plan to which test cases are to be updated.
$suiteId = 56; // int | ID of the test suite to which test cases are to be updated.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $result = $apiInstance->suiteTestCaseUpdate($organization, $body, $project, $planId, $suiteId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuiteTestCaseApi->suiteTestCaseUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\SuiteTestCaseCreateUpdateParameters[]**](../Model/SuiteTestCaseCreateUpdateParameters.md)| A SuiteTestCaseCreateUpdateParameters object. |
 **project** | **string**| Project ID or project name |
 **planId** | **int**| ID of the test plan to which test cases are to be updated. |
 **suiteId** | **int**| ID of the test suite to which test cases are to be updated. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TestCase[]**](../Model/TestCase.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

