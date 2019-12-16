# AzureDevOpsClient\Test\AttachmentsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**attachmentsCreateTestResultAttachment**](AttachmentsApi.md#attachmentsCreateTestResultAttachment) | **POST** /{organization}/{project}/_apis/test/Runs/{runId}/Results/{testCaseResultId}/attachments | 
[**attachmentsCreateTestRunAttachment**](AttachmentsApi.md#attachmentsCreateTestRunAttachment) | **POST** /{organization}/{project}/_apis/test/Runs/{runId}/attachments | 
[**attachmentsGetTestResultAttachmentZip**](AttachmentsApi.md#attachmentsGetTestResultAttachmentZip) | **GET** /{organization}/{project}/_apis/test/Runs/{runId}/Results/{testCaseResultId}/attachments/{attachmentId} | 
[**attachmentsGetTestResultAttachments**](AttachmentsApi.md#attachmentsGetTestResultAttachments) | **GET** /{organization}/{project}/_apis/test/Runs/{runId}/Results/{testCaseResultId}/attachments | 
[**attachmentsGetTestRunAttachmentZip**](AttachmentsApi.md#attachmentsGetTestRunAttachmentZip) | **GET** /{organization}/{project}/_apis/test/Runs/{runId}/attachments/{attachmentId} | 
[**attachmentsGetTestRunAttachments**](AttachmentsApi.md#attachmentsGetTestRunAttachments) | **GET** /{organization}/{project}/_apis/test/Runs/{runId}/attachments | 


# **attachmentsCreateTestResultAttachment**
> \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestAttachmentReference attachmentsCreateTestResultAttachment($organization, $body, $project, $runId, $testCaseResultId, $apiVersion)



Attach a file to a test result.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Test\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Test\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestAttachmentRequestModel(); // \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestAttachmentRequestModel | Attachment details TestAttachmentRequestModel
$project = "project_example"; // string | Project ID or project name
$runId = 56; // int | ID of the test run that contains the result.
$testCaseResultId = 56; // int | ID of the test result against which attachment has to be uploaded.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->attachmentsCreateTestResultAttachment($organization, $body, $project, $runId, $testCaseResultId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->attachmentsCreateTestResultAttachment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestAttachmentRequestModel**](../Model/TestAttachmentRequestModel.md)| Attachment details TestAttachmentRequestModel |
 **project** | **string**| Project ID or project name |
 **runId** | **int**| ID of the test run that contains the result. |
 **testCaseResultId** | **int**| ID of the test result against which attachment has to be uploaded. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestAttachmentReference**](../Model/TestAttachmentReference.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attachmentsCreateTestRunAttachment**
> \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestAttachmentReference attachmentsCreateTestRunAttachment($organization, $body, $project, $runId, $apiVersion)



Attach a file to a test run.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Test\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Test\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestAttachmentRequestModel(); // \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestAttachmentRequestModel | Attachment details TestAttachmentRequestModel
$project = "project_example"; // string | Project ID or project name
$runId = 56; // int | ID of the test run against which attachment has to be uploaded.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->attachmentsCreateTestRunAttachment($organization, $body, $project, $runId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->attachmentsCreateTestRunAttachment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestAttachmentRequestModel**](../Model/TestAttachmentRequestModel.md)| Attachment details TestAttachmentRequestModel |
 **project** | **string**| Project ID or project name |
 **runId** | **int**| ID of the test run against which attachment has to be uploaded. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestAttachmentReference**](../Model/TestAttachmentReference.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attachmentsGetTestResultAttachmentZip**
> string attachmentsGetTestResultAttachmentZip($organization, $project, $runId, $testCaseResultId, $attachmentId, $apiVersion)



Download a test result attachment by its ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Test\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Test\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$runId = 56; // int | ID of the test run that contains the testCaseResultId.
$testCaseResultId = 56; // int | ID of the test result whose attachment has to be downloaded.
$attachmentId = 56; // int | ID of the test result attachment to be downloaded.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->attachmentsGetTestResultAttachmentZip($organization, $project, $runId, $testCaseResultId, $attachmentId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->attachmentsGetTestResultAttachmentZip: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **runId** | **int**| ID of the test run that contains the testCaseResultId. |
 **testCaseResultId** | **int**| ID of the test result whose attachment has to be downloaded. |
 **attachmentId** | **int**| ID of the test result attachment to be downloaded. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

**string**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream, application/zip

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attachmentsGetTestResultAttachments**
> \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestAttachment[] attachmentsGetTestResultAttachments($organization, $project, $runId, $testCaseResultId, $apiVersion)



Get list of test result attachments reference.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Test\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Test\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$runId = 56; // int | ID of the test run that contains the result.
$testCaseResultId = 56; // int | ID of the test result.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->attachmentsGetTestResultAttachments($organization, $project, $runId, $testCaseResultId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->attachmentsGetTestResultAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **runId** | **int**| ID of the test run that contains the result. |
 **testCaseResultId** | **int**| ID of the test result. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestAttachment[]**](../Model/TestAttachment.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attachmentsGetTestRunAttachmentZip**
> string attachmentsGetTestRunAttachmentZip($organization, $project, $runId, $attachmentId, $apiVersion)



Download a test run attachment by its ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Test\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Test\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$runId = 56; // int | ID of the test run whose attachment has to be downloaded.
$attachmentId = 56; // int | ID of the test run attachment to be downloaded.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->attachmentsGetTestRunAttachmentZip($organization, $project, $runId, $attachmentId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->attachmentsGetTestRunAttachmentZip: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **runId** | **int**| ID of the test run whose attachment has to be downloaded. |
 **attachmentId** | **int**| ID of the test run attachment to be downloaded. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

**string**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream, application/zip

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attachmentsGetTestRunAttachments**
> \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestAttachment[] attachmentsGetTestRunAttachments($organization, $project, $runId, $apiVersion)



Get list of test run attachments reference.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Test\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Test\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$runId = 56; // int | ID of the test run.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->attachmentsGetTestRunAttachments($organization, $project, $runId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->attachmentsGetTestRunAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **runId** | **int**| ID of the test run. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\TestAttachment[]**](../Model/TestAttachment.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

