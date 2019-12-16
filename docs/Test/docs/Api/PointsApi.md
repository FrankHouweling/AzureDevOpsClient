# AzureDevOpsClient\Test\PointsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pointsGetPoint**](PointsApi.md#pointsGetPoint) | **GET** /{organization}/{project}/_apis/test/Plans/{planId}/Suites/{suiteId}/points/{pointIds} | 
[**pointsGetPointsByQuery**](PointsApi.md#pointsGetPointsByQuery) | **POST** /{organization}/{project}/_apis/test/points | 
[**pointsList**](PointsApi.md#pointsList) | **GET** /{organization}/{project}/_apis/test/Plans/{planId}/Suites/{suiteId}/points | 
[**pointsUpdate**](PointsApi.md#pointsUpdate) | **PATCH** /{organization}/{project}/_apis/test/Plans/{planId}/Suites/{suiteId}/points/{pointIds} | 


# **pointsGetPoint**
> \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestPoint pointsGetPoint($organization, $project, $planId, $suiteId, $pointIds, $apiVersion, $witFields)



Get a test point.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Test\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Test\Api\PointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$planId = 56; // int | ID of the test plan.
$suiteId = 56; // int | ID of the suite that contains the point.
$pointIds = 56; // int | ID of the test point to get.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.
$witFields = "witFields_example"; // string | Comma-separated list of work item field names.

try {
    $result = $apiInstance->pointsGetPoint($organization, $project, $planId, $suiteId, $pointIds, $apiVersion, $witFields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PointsApi->pointsGetPoint: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **planId** | **int**| ID of the test plan. |
 **suiteId** | **int**| ID of the suite that contains the point. |
 **pointIds** | **int**| ID of the test point to get. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |
 **witFields** | **string**| Comma-separated list of work item field names. | [optional]

### Return type

[**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestPoint**](../Model/TestPoint.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pointsGetPointsByQuery**
> \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestPointsQuery pointsGetPointsByQuery($organization, $body, $project, $apiVersion, $skip, $top)



Get test points using query.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Test\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Test\Api\PointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestPointsQuery(); // \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestPointsQuery | TestPointsQuery to get test points.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.
$skip = 56; // int | Number of test points to skip..
$top = 56; // int | Number of test points to return.

try {
    $result = $apiInstance->pointsGetPointsByQuery($organization, $body, $project, $apiVersion, $skip, $top);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PointsApi->pointsGetPointsByQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestPointsQuery**](../Model/TestPointsQuery.md)| TestPointsQuery to get test points. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |
 **skip** | **int**| Number of test points to skip.. | [optional]
 **top** | **int**| Number of test points to return. | [optional]

### Return type

[**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestPointsQuery**](../Model/TestPointsQuery.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pointsList**
> \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestPoint[] pointsList($organization, $project, $planId, $suiteId, $apiVersion, $witFields, $configurationId, $testCaseId, $testPointIds, $includePointDetails, $skip, $top)



Get a list of test points.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Test\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Test\Api\PointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$planId = 56; // int | ID of the test plan.
$suiteId = 56; // int | ID of the suite that contains the points.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.
$witFields = "witFields_example"; // string | Comma-separated list of work item field names.
$configurationId = "configurationId_example"; // string | Get test points for specific configuration.
$testCaseId = "testCaseId_example"; // string | Get test points for a specific test case, valid when configurationId is not set.
$testPointIds = "testPointIds_example"; // string | Get test points for comma-separated list of test point IDs, valid only when configurationId and testCaseId are not set.
$includePointDetails = true; // bool | Include all properties for the test point.
$skip = 56; // int | Number of test points to skip..
$top = 56; // int | Number of test points to return.

try {
    $result = $apiInstance->pointsList($organization, $project, $planId, $suiteId, $apiVersion, $witFields, $configurationId, $testCaseId, $testPointIds, $includePointDetails, $skip, $top);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PointsApi->pointsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **planId** | **int**| ID of the test plan. |
 **suiteId** | **int**| ID of the suite that contains the points. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |
 **witFields** | **string**| Comma-separated list of work item field names. | [optional]
 **configurationId** | **string**| Get test points for specific configuration. | [optional]
 **testCaseId** | **string**| Get test points for a specific test case, valid when configurationId is not set. | [optional]
 **testPointIds** | **string**| Get test points for comma-separated list of test point IDs, valid only when configurationId and testCaseId are not set. | [optional]
 **includePointDetails** | **bool**| Include all properties for the test point. | [optional]
 **skip** | **int**| Number of test points to skip.. | [optional]
 **top** | **int**| Number of test points to return. | [optional]

### Return type

[**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestPoint[]**](../Model/TestPoint.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pointsUpdate**
> \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestPoint[] pointsUpdate($organization, $body, $project, $planId, $suiteId, $pointIds, $apiVersion)



Update test points.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Test\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Test\Api\PointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\PointUpdateModel(); // \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\PointUpdateModel | Data to update.
$project = "project_example"; // string | Project ID or project name
$planId = 56; // int | ID of the test plan.
$suiteId = 56; // int | ID of the suite that contains the points.
$pointIds = "pointIds_example"; // string | ID of the test point to get. Use a comma-separated list of IDs to update multiple test points.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $result = $apiInstance->pointsUpdate($organization, $body, $project, $planId, $suiteId, $pointIds, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PointsApi->pointsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\PointUpdateModel**](../Model/PointUpdateModel.md)| Data to update. |
 **project** | **string**| Project ID or project name |
 **planId** | **int**| ID of the test plan. |
 **suiteId** | **int**| ID of the suite that contains the points. |
 **pointIds** | **string**| ID of the test point to get. Use a comma-separated list of IDs to update multiple test points. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestPoint[]**](../Model/TestPoint.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

