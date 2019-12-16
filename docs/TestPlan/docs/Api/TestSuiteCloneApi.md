# FrankHouweling\AzureDevOpsClient\TestPlan\TestSuiteCloneApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**testSuiteCloneCloneTestSuite**](TestSuiteCloneApi.md#testSuiteCloneCloneTestSuite) | **POST** /{organization}/{project}/_apis/testplan/Suites/CloneOperation | 
[**testSuiteCloneGet**](TestSuiteCloneApi.md#testSuiteCloneGet) | **GET** /{organization}/{project}/_apis/testplan/Suites/CloneOperation/{cloneOperationId} | 


# **testSuiteCloneCloneTestSuite**
> \FrankHouweling\AzureDevOpsClient\TestPlan\Model\CloneTestSuiteOperationInformation testSuiteCloneCloneTestSuite($organization, $body, $project, $apiVersion, $deepClone)



Clone test suite

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\TestPlan\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\TestPlan\Api\TestSuiteCloneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\TestPlan\Model\CloneTestSuiteParams(); // \FrankHouweling\AzureDevOpsClient\TestPlan\Model\CloneTestSuiteParams | Suite Clone Request Body detail TestSuiteCloneRequest
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.
$deepClone = true; // bool | Clones all the associated test cases as well

try {
    $result = $apiInstance->testSuiteCloneCloneTestSuite($organization, $body, $project, $apiVersion, $deepClone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestSuiteCloneApi->testSuiteCloneCloneTestSuite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\TestPlan\Model\CloneTestSuiteParams**](../Model/CloneTestSuiteParams.md)| Suite Clone Request Body detail TestSuiteCloneRequest |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |
 **deepClone** | **bool**| Clones all the associated test cases as well | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\TestPlan\Model\CloneTestSuiteOperationInformation**](../Model/CloneTestSuiteOperationInformation.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testSuiteCloneGet**
> \FrankHouweling\AzureDevOpsClient\TestPlan\Model\CloneTestSuiteOperationInformation testSuiteCloneGet($organization, $project, $cloneOperationId, $apiVersion)



Get clone information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\TestPlan\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\TestPlan\Api\TestSuiteCloneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$cloneOperationId = 56; // int | Operation ID returned when we queue a clone operation
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $result = $apiInstance->testSuiteCloneGet($organization, $project, $cloneOperationId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestSuiteCloneApi->testSuiteCloneGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **cloneOperationId** | **int**| Operation ID returned when we queue a clone operation |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\TestPlan\Model\CloneTestSuiteOperationInformation**](../Model/CloneTestSuiteOperationInformation.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

