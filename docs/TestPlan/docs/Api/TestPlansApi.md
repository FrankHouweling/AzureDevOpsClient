# FrankHouweling\AzureDevOpsClient\TestPlan\TestPlansApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**testPlansCreate**](TestPlansApi.md#testPlansCreate) | **POST** /{organization}/{project}/_apis/testplan/plans | 
[**testPlansDelete**](TestPlansApi.md#testPlansDelete) | **DELETE** /{organization}/{project}/_apis/testplan/plans/{planId} | 
[**testPlansGet**](TestPlansApi.md#testPlansGet) | **GET** /{organization}/{project}/_apis/testplan/plans/{planId} | 
[**testPlansList**](TestPlansApi.md#testPlansList) | **GET** /{organization}/{project}/_apis/testplan/plans | 
[**testPlansUpdate**](TestPlansApi.md#testPlansUpdate) | **PATCH** /{organization}/{project}/_apis/testplan/plans/{planId} | 


# **testPlansCreate**
> \FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestPlan testPlansCreate($organization, $body, $project, $apiVersion)



Create a test plan.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\TestPlan\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\TestPlan\Api\TestPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestPlanCreateParams(); // \FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestPlanCreateParams | A testPlanCreateParams object.TestPlanCreateParams
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->testPlansCreate($organization, $body, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestPlansApi->testPlansCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestPlanCreateParams**](../Model/TestPlanCreateParams.md)| A testPlanCreateParams object.TestPlanCreateParams |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestPlan**](../Model/TestPlan.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testPlansDelete**
> testPlansDelete($organization, $project, $planId, $apiVersion)



Delete a test plan.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\TestPlan\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\TestPlan\Api\TestPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$planId = 56; // int | ID of the test plan to be deleted.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->testPlansDelete($organization, $project, $planId, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling TestPlansApi->testPlansDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **planId** | **int**| ID of the test plan to be deleted. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testPlansGet**
> \FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestPlan testPlansGet($organization, $project, $planId, $apiVersion)



Get a test plan by Id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\TestPlan\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\TestPlan\Api\TestPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$planId = 56; // int | ID of the test plan to get.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->testPlansGet($organization, $project, $planId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestPlansApi->testPlansGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **planId** | **int**| ID of the test plan to get. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestPlan**](../Model/TestPlan.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testPlansList**
> \FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestPlan[] testPlansList($organization, $project, $apiVersion, $owner, $continuationToken, $includePlanDetails, $filterActivePlans)



Get a list of test plans

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\TestPlan\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\TestPlan\Api\TestPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$owner = "owner_example"; // string | Filter for test plan by owner ID or name
$continuationToken = "continuationToken_example"; // string | If the list of plans returned is not complete, a continuation token to query next batch of plans is included in the response header as \"x-ms-continuationtoken\". Omit this parameter to get the first batch of test plans.
$includePlanDetails = true; // bool | Get all properties of the test plan
$filterActivePlans = true; // bool | Get just the active plans

try {
    $result = $apiInstance->testPlansList($organization, $project, $apiVersion, $owner, $continuationToken, $includePlanDetails, $filterActivePlans);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestPlansApi->testPlansList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **owner** | **string**| Filter for test plan by owner ID or name | [optional]
 **continuationToken** | **string**| If the list of plans returned is not complete, a continuation token to query next batch of plans is included in the response header as \&quot;x-ms-continuationtoken\&quot;. Omit this parameter to get the first batch of test plans. | [optional]
 **includePlanDetails** | **bool**| Get all properties of the test plan | [optional]
 **filterActivePlans** | **bool**| Get just the active plans | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestPlan[]**](../Model/TestPlan.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testPlansUpdate**
> \FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestPlan testPlansUpdate($organization, $body, $project, $planId, $apiVersion)



Update a test plan.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\TestPlan\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\TestPlan\Api\TestPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestPlanUpdateParams(); // \FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestPlanUpdateParams | A testPlanUpdateParams object.TestPlanUpdateParams
$project = "project_example"; // string | Project ID or project name
$planId = 56; // int | ID of the test plan to be updated.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->testPlansUpdate($organization, $body, $project, $planId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestPlansApi->testPlansUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestPlanUpdateParams**](../Model/TestPlanUpdateParams.md)| A testPlanUpdateParams object.TestPlanUpdateParams |
 **project** | **string**| Project ID or project name |
 **planId** | **int**| ID of the test plan to be updated. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestPlan**](../Model/TestPlan.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

