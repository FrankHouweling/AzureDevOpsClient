# AzureDevOpsClient\TestPlan\TestPointApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**testPointGetPoints**](TestPointApi.md#testPointGetPoints) | **GET** /{organization}/{project}/_apis/testplan/Plans/{planId}/Suites/{suiteId}/TestPoint/{pointIds} | 
[**testPointGetPointsList**](TestPointApi.md#testPointGetPointsList) | **GET** /{organization}/{project}/_apis/testplan/Plans/{planId}/Suites/{suiteId}/TestPoint | 
[**testPointUpdate**](TestPointApi.md#testPointUpdate) | **PATCH** /{organization}/{project}/_apis/testplan/Plans/{planId}/Suites/{suiteId}/TestPoint | 


# **testPointGetPoints**
> \AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TestPoint[] testPointGetPoints($organization, $project, $planId, $suiteId, $pointIds, $apiVersion, $returnIdentityRef, $includePointDetails)



Get a list of points based on point Ids provided.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\TestPlan\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\TestPlan\Api\TestPointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$planId = 56; // int | ID of the test plan for which test points are requested.
$suiteId = 56; // int | ID of the test suite for which test points are requested.
$pointIds = "pointIds_example"; // string | ID of test points to be fetched.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.
$returnIdentityRef = true; // bool | If set to true, returns the AssignedTo field in TestCaseReference as IdentityRef object.
$includePointDetails = true; // bool | If set to false, will get a smaller payload containing only basic details about the test point object

try {
    $result = $apiInstance->testPointGetPoints($organization, $project, $planId, $suiteId, $pointIds, $apiVersion, $returnIdentityRef, $includePointDetails);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestPointApi->testPointGetPoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **planId** | **int**| ID of the test plan for which test points are requested. |
 **suiteId** | **int**| ID of the test suite for which test points are requested. |
 **pointIds** | **string**| ID of test points to be fetched. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |
 **returnIdentityRef** | **bool**| If set to true, returns the AssignedTo field in TestCaseReference as IdentityRef object. | [optional]
 **includePointDetails** | **bool**| If set to false, will get a smaller payload containing only basic details about the test point object | [optional]

### Return type

[**\AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TestPoint[]**](../Model/TestPoint.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testPointGetPointsList**
> \AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TestPoint[] testPointGetPointsList($organization, $project, $planId, $suiteId, $apiVersion, $testPointIds, $testCaseId, $continuationToken, $returnIdentityRef, $includePointDetails)



Get all the points inside a suite based on some filters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\TestPlan\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\TestPlan\Api\TestPointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$planId = 56; // int | ID of the test plan for which test points are requested.
$suiteId = 56; // int | ID of the test suite for which test points are requested
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.
$testPointIds = "testPointIds_example"; // string | ID of test points to fetch.
$testCaseId = "testCaseId_example"; // string | Get Test Points for specific test case Ids.
$continuationToken = "continuationToken_example"; // string | If the list of test point returned is not complete, a continuation token to query next batch of test points is included in the response header as \"x-ms-continuationtoken\". Omit this parameter to get the first batch of test points.
$returnIdentityRef = true; // bool | If set to true, returns the AssignedTo field in TestCaseReference as IdentityRef object.
$includePointDetails = true; // bool | If set to false, will get a smaller payload containing only basic details about the test point object

try {
    $result = $apiInstance->testPointGetPointsList($organization, $project, $planId, $suiteId, $apiVersion, $testPointIds, $testCaseId, $continuationToken, $returnIdentityRef, $includePointDetails);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestPointApi->testPointGetPointsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **planId** | **int**| ID of the test plan for which test points are requested. |
 **suiteId** | **int**| ID of the test suite for which test points are requested |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |
 **testPointIds** | **string**| ID of test points to fetch. | [optional]
 **testCaseId** | **string**| Get Test Points for specific test case Ids. | [optional]
 **continuationToken** | **string**| If the list of test point returned is not complete, a continuation token to query next batch of test points is included in the response header as \&quot;x-ms-continuationtoken\&quot;. Omit this parameter to get the first batch of test points. | [optional]
 **returnIdentityRef** | **bool**| If set to true, returns the AssignedTo field in TestCaseReference as IdentityRef object. | [optional]
 **includePointDetails** | **bool**| If set to false, will get a smaller payload containing only basic details about the test point object | [optional]

### Return type

[**\AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TestPoint[]**](../Model/TestPoint.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testPointUpdate**
> \AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TestPoint[] testPointUpdate($organization, $body, $project, $planId, $suiteId, $apiVersion, $includePointDetails, $returnIdentityRef)



Update Test Points. This is used to Reset test point to active, update the outcome of a test point or update the tester of a test point

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\TestPlan\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\TestPlan\Api\TestPointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = array(new \AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TestPointUpdateParams()); // \AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TestPointUpdateParams[] | A TestPointUpdateParams Object.
$project = "project_example"; // string | Project ID or project name
$planId = 56; // int | ID of the test plan for which test points are requested.
$suiteId = 56; // int | ID of the test suite for which test points are requested.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.
$includePointDetails = true; // bool | If set to false, will get a smaller payload containing only basic details about the test point object
$returnIdentityRef = true; // bool | If set to true, returns the AssignedTo field in TestCaseReference as IdentityRef object.

try {
    $result = $apiInstance->testPointUpdate($organization, $body, $project, $planId, $suiteId, $apiVersion, $includePointDetails, $returnIdentityRef);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestPointApi->testPointUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TestPointUpdateParams[]**](../Model/TestPointUpdateParams.md)| A TestPointUpdateParams Object. |
 **project** | **string**| Project ID or project name |
 **planId** | **int**| ID of the test plan for which test points are requested. |
 **suiteId** | **int**| ID of the test suite for which test points are requested. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |
 **includePointDetails** | **bool**| If set to false, will get a smaller payload containing only basic details about the test point object | [optional]
 **returnIdentityRef** | **bool**| If set to true, returns the AssignedTo field in TestCaseReference as IdentityRef object. | [optional]

### Return type

[**\AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TestPoint[]**](../Model/TestPoint.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

