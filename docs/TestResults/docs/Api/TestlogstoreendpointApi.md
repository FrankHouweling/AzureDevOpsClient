# FrankHouweling\AzureDevOpsClient\TestResults\TestlogstoreendpointApi

All URIs are relative to *https://vstmr.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**testlogstoreendpointGetTestLogStoreEndpointDetailsForResultLog**](TestlogstoreendpointApi.md#testlogstoreendpointGetTestLogStoreEndpointDetailsForResultLog) | **GET** /{organization}/{project}/_apis/testresults/runs/{runId}/results/{resultId}/testlogstoreendpoint | 
[**testlogstoreendpointGetTestLogStoreEndpointDetailsForRunLog**](TestlogstoreendpointApi.md#testlogstoreendpointGetTestLogStoreEndpointDetailsForRunLog) | **GET** /{organization}/{project}/_apis/testresults/runs/{runId}/testlogstoreendpoint | 
[**testlogstoreendpointTestLogStoreEndpointDetailsForResult**](TestlogstoreendpointApi.md#testlogstoreendpointTestLogStoreEndpointDetailsForResult) | **POST** /{organization}/{project}/_apis/testresults/runs/{runId}/results/{resultId}/testlogstoreendpoint | 
[**testlogstoreendpointTestLogStoreEndpointDetailsForRun**](TestlogstoreendpointApi.md#testlogstoreendpointTestLogStoreEndpointDetailsForRun) | **POST** /{organization}/{project}/_apis/testresults/runs/{runId}/testlogstoreendpoint | 


# **testlogstoreendpointGetTestLogStoreEndpointDetailsForResultLog**
> \FrankHouweling\AzureDevOpsClient\TestResults\Model\TestLogStoreEndpointDetails testlogstoreendpointGetTestLogStoreEndpointDetailsForResultLog($organization, $project, $runId, $resultId, $type, $filePath, $apiVersion)



Get SAS Uri of a test results attachment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\TestResults\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\TestResults\Api\TestlogstoreendpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$runId = 56; // int | Id of the test run that contains result
$resultId = 56; // int | Id of the test result whose files need to be downloaded
$type = "type_example"; // string | type of the file
$filePath = "filePath_example"; // string | filePath for which sas uri is needed
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->testlogstoreendpointGetTestLogStoreEndpointDetailsForResultLog($organization, $project, $runId, $resultId, $type, $filePath, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestlogstoreendpointApi->testlogstoreendpointGetTestLogStoreEndpointDetailsForResultLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **runId** | **int**| Id of the test run that contains result |
 **resultId** | **int**| Id of the test result whose files need to be downloaded |
 **type** | **string**| type of the file |
 **filePath** | **string**| filePath for which sas uri is needed |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\TestResults\Model\TestLogStoreEndpointDetails**](../Model/TestLogStoreEndpointDetails.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testlogstoreendpointGetTestLogStoreEndpointDetailsForRunLog**
> \FrankHouweling\AzureDevOpsClient\TestResults\Model\TestLogStoreEndpointDetails testlogstoreendpointGetTestLogStoreEndpointDetailsForRunLog($organization, $project, $runId, $type, $filePath, $apiVersion)



Get SAS Uri of a test run attachment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\TestResults\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\TestResults\Api\TestlogstoreendpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$runId = 56; // int | Id of the test run whose file has to be downloaded
$type = "type_example"; // string | type of the file
$filePath = "filePath_example"; // string | filePath for which sas uri is needed
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->testlogstoreendpointGetTestLogStoreEndpointDetailsForRunLog($organization, $project, $runId, $type, $filePath, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestlogstoreendpointApi->testlogstoreendpointGetTestLogStoreEndpointDetailsForRunLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **runId** | **int**| Id of the test run whose file has to be downloaded |
 **type** | **string**| type of the file |
 **filePath** | **string**| filePath for which sas uri is needed |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\TestResults\Model\TestLogStoreEndpointDetails**](../Model/TestLogStoreEndpointDetails.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testlogstoreendpointTestLogStoreEndpointDetailsForResult**
> \FrankHouweling\AzureDevOpsClient\TestResults\Model\TestLogStoreEndpointDetails testlogstoreendpointTestLogStoreEndpointDetailsForResult($organization, $project, $runId, $resultId, $subResultId, $filePath, $type, $apiVersion)



Create empty file for a result and Get Sas uri for the file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\TestResults\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\TestResults\Api\TestlogstoreendpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$runId = 56; // int | Id of the test run that contains the result
$resultId = 56; // int | Id of the test results that contains sub result
$subResultId = 56; // int | Id of the test sub result whose file sas uri is needed
$filePath = "filePath_example"; // string | file path inside the sub result for which sas uri is needed
$type = "type_example"; // string | Type of the file for download
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->testlogstoreendpointTestLogStoreEndpointDetailsForResult($organization, $project, $runId, $resultId, $subResultId, $filePath, $type, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestlogstoreendpointApi->testlogstoreendpointTestLogStoreEndpointDetailsForResult: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **runId** | **int**| Id of the test run that contains the result |
 **resultId** | **int**| Id of the test results that contains sub result |
 **subResultId** | **int**| Id of the test sub result whose file sas uri is needed |
 **filePath** | **string**| file path inside the sub result for which sas uri is needed |
 **type** | **string**| Type of the file for download |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\TestResults\Model\TestLogStoreEndpointDetails**](../Model/TestLogStoreEndpointDetails.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testlogstoreendpointTestLogStoreEndpointDetailsForRun**
> \FrankHouweling\AzureDevOpsClient\TestResults\Model\TestLogStoreEndpointDetails testlogstoreendpointTestLogStoreEndpointDetailsForRun($organization, $project, $runId, $testLogStoreOperationType, $apiVersion, $filePath, $type)



Create empty file for a run and Get Sas uri for the file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\TestResults\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\TestResults\Api\TestlogstoreendpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$runId = 56; // int | Id of the run to get endpoint details
$testLogStoreOperationType = "testLogStoreOperationType_example"; // string | Type of operation to perform using sas uri
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$filePath = "filePath_example"; // string | file path to create an empty file
$type = "type_example"; // string | Default is GeneralAttachment, type of empty file to be created

try {
    $result = $apiInstance->testlogstoreendpointTestLogStoreEndpointDetailsForRun($organization, $project, $runId, $testLogStoreOperationType, $apiVersion, $filePath, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestlogstoreendpointApi->testlogstoreendpointTestLogStoreEndpointDetailsForRun: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **runId** | **int**| Id of the run to get endpoint details |
 **testLogStoreOperationType** | **string**| Type of operation to perform using sas uri |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **filePath** | **string**| file path to create an empty file | [optional]
 **type** | **string**| Default is GeneralAttachment, type of empty file to be created | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\TestResults\Model\TestLogStoreEndpointDetails**](../Model/TestLogStoreEndpointDetails.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

