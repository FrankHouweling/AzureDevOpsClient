# FrankHouweling\AzureDevOpsClient\Release\AttachmentsApi

All URIs are relative to *https://vsrm.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**attachmentsGetReleaseTaskAttachmentContent**](AttachmentsApi.md#attachmentsGetReleaseTaskAttachmentContent) | **GET** /{organization}/{project}/_apis/release/releases/{releaseId}/environments/{environmentId}/attempts/{attemptId}/plan/{planId}/timelines/{timelineId}/records/{recordId}/attachments/{type}/{name} | 
[**attachmentsGetReleaseTaskAttachments**](AttachmentsApi.md#attachmentsGetReleaseTaskAttachments) | **GET** /{organization}/{project}/_apis/release/releases/{releaseId}/environments/{environmentId}/attempts/{attemptId}/plan/{planId}/attachments/{type} | 
[**attachmentsGetTaskAttachmentContent**](AttachmentsApi.md#attachmentsGetTaskAttachmentContent) | **GET** /{organization}/{project}/_apis/release/releases/{releaseId}/environments/{environmentId}/attempts/{attemptId}/timelines/{timelineId}/records/{recordId}/attachments/{type}/{name} | 
[**attachmentsGetTaskAttachments**](AttachmentsApi.md#attachmentsGetTaskAttachments) | **GET** /{organization}/{project}/_apis/release/releases/{releaseId}/environments/{environmentId}/attempts/{attemptId}/timelines/{timelineId}/attachments/{type} | 


# **attachmentsGetReleaseTaskAttachmentContent**
> string attachmentsGetReleaseTaskAttachmentContent($organization, $project, $releaseId, $environmentId, $attemptId, $planId, $timelineId, $recordId, $type, $name, $apiVersion)



Get a release task attachment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Release\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Release\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$releaseId = 56; // int | Id of the release.
$environmentId = 56; // int | Id of the release environment.
$attemptId = 56; // int | Attempt number of deployment.
$planId = "planId_example"; // string | Plan Id of the deploy phase.
$timelineId = "timelineId_example"; // string | Timeline Id of the task.
$recordId = "recordId_example"; // string | Record Id of attachment.
$type = "type_example"; // string | Type of the attachment.
$name = "name_example"; // string | Name of the attachment.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->attachmentsGetReleaseTaskAttachmentContent($organization, $project, $releaseId, $environmentId, $attemptId, $planId, $timelineId, $recordId, $type, $name, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->attachmentsGetReleaseTaskAttachmentContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **releaseId** | **int**| Id of the release. |
 **environmentId** | **int**| Id of the release environment. |
 **attemptId** | **int**| Attempt number of deployment. |
 **planId** | [**string**](../Model/.md)| Plan Id of the deploy phase. |
 **timelineId** | [**string**](../Model/.md)| Timeline Id of the task. |
 **recordId** | [**string**](../Model/.md)| Record Id of attachment. |
 **type** | **string**| Type of the attachment. |
 **name** | **string**| Name of the attachment. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

**string**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attachmentsGetReleaseTaskAttachments**
> \FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseTaskAttachment[] attachmentsGetReleaseTaskAttachments($organization, $project, $releaseId, $environmentId, $attemptId, $planId, $type, $apiVersion)



Get the release task attachments.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Release\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Release\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$releaseId = 56; // int | Id of the release.
$environmentId = 56; // int | Id of the release environment.
$attemptId = 56; // int | Attempt number of deployment.
$planId = "planId_example"; // string | Plan Id of the deploy phase.
$type = "type_example"; // string | Type of the attachment.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->attachmentsGetReleaseTaskAttachments($organization, $project, $releaseId, $environmentId, $attemptId, $planId, $type, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->attachmentsGetReleaseTaskAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **releaseId** | **int**| Id of the release. |
 **environmentId** | **int**| Id of the release environment. |
 **attemptId** | **int**| Attempt number of deployment. |
 **planId** | [**string**](../Model/.md)| Plan Id of the deploy phase. |
 **type** | **string**| Type of the attachment. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseTaskAttachment[]**](../Model/ReleaseTaskAttachment.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attachmentsGetTaskAttachmentContent**
> string attachmentsGetTaskAttachmentContent($organization, $project, $releaseId, $environmentId, $attemptId, $timelineId, $recordId, $type, $name, $apiVersion)



GetTaskAttachmentContent API is deprecated. Use GetReleaseTaskAttachmentContent API instead.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Release\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Release\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$releaseId = 56; // int | Id of the release.
$environmentId = 56; // int | Id of the release environment.
$attemptId = 56; // int | Attempt number of deployment.
$timelineId = "timelineId_example"; // string | Timeline Id of the task.
$recordId = "recordId_example"; // string | Record Id of attachment.
$type = "type_example"; // string | Type of the attachment.
$name = "name_example"; // string | Name of the attachment.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->attachmentsGetTaskAttachmentContent($organization, $project, $releaseId, $environmentId, $attemptId, $timelineId, $recordId, $type, $name, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->attachmentsGetTaskAttachmentContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **releaseId** | **int**| Id of the release. |
 **environmentId** | **int**| Id of the release environment. |
 **attemptId** | **int**| Attempt number of deployment. |
 **timelineId** | [**string**](../Model/.md)| Timeline Id of the task. |
 **recordId** | [**string**](../Model/.md)| Record Id of attachment. |
 **type** | **string**| Type of the attachment. |
 **name** | **string**| Name of the attachment. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

**string**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attachmentsGetTaskAttachments**
> \FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseTaskAttachment[] attachmentsGetTaskAttachments($organization, $project, $releaseId, $environmentId, $attemptId, $timelineId, $type, $apiVersion)



GetTaskAttachments API is deprecated. Use GetReleaseTaskAttachments API instead.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Release\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Release\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$releaseId = 56; // int | Id of the release.
$environmentId = 56; // int | Id of the release environment.
$attemptId = 56; // int | Attempt number of deployment.
$timelineId = "timelineId_example"; // string | Timeline Id of the task.
$type = "type_example"; // string | Type of the attachment.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->attachmentsGetTaskAttachments($organization, $project, $releaseId, $environmentId, $attemptId, $timelineId, $type, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->attachmentsGetTaskAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **releaseId** | **int**| Id of the release. |
 **environmentId** | **int**| Id of the release environment. |
 **attemptId** | **int**| Attempt number of deployment. |
 **timelineId** | [**string**](../Model/.md)| Timeline Id of the task. |
 **type** | **string**| Type of the attachment. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseTaskAttachment[]**](../Model/ReleaseTaskAttachment.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

