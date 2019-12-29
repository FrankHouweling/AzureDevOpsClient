# FrankHouweling\AzureDevOpsClient\Git\PullRequestAttachmentsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pullRequestAttachmentsCreate**](PullRequestAttachmentsApi.md#pullRequestAttachmentsCreate) | **POST** /{organization}/{project}/_apis/git/repositories/{repositoryId}/pullRequests/{pullRequestId}/attachments/{fileName} | 
[**pullRequestAttachmentsDelete**](PullRequestAttachmentsApi.md#pullRequestAttachmentsDelete) | **DELETE** /{organization}/{project}/_apis/git/repositories/{repositoryId}/pullRequests/{pullRequestId}/attachments/{fileName} | 
[**pullRequestAttachmentsGet**](PullRequestAttachmentsApi.md#pullRequestAttachmentsGet) | **GET** /{organization}/{project}/_apis/git/repositories/{repositoryId}/pullRequests/{pullRequestId}/attachments/{fileName} | 
[**pullRequestAttachmentsList**](PullRequestAttachmentsApi.md#pullRequestAttachmentsList) | **GET** /{organization}/{project}/_apis/git/repositories/{repositoryId}/pullRequests/{pullRequestId}/attachments | 


# **pullRequestAttachmentsCreate**
> \FrankHouweling\AzureDevOpsClient\Git\Model\Attachment pullRequestAttachmentsCreate($organization, $body, $fileName, $repositoryId, $pullRequestId, $project, $apiVersion)



Attach a new file to a pull request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\PullRequestAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = "body_example"; // string | Stream to upload
$fileName = "fileName_example"; // string | The name of the file.
$repositoryId = "repositoryId_example"; // string | The repository ID of the pull request’s target branch.
$pullRequestId = 56; // int | ID of the pull request.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->pullRequestAttachmentsCreate($organization, $body, $fileName, $repositoryId, $pullRequestId, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestAttachmentsApi->pullRequestAttachmentsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | **string**| Stream to upload |
 **fileName** | **string**| The name of the file. |
 **repositoryId** | **string**| The repository ID of the pull request’s target branch. |
 **pullRequestId** | **int**| ID of the pull request. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Git\Model\Attachment**](../Model/Attachment.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pullRequestAttachmentsDelete**
> pullRequestAttachmentsDelete($organization, $fileName, $repositoryId, $pullRequestId, $project, $apiVersion)



Delete a pull request attachment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\PullRequestAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$fileName = "fileName_example"; // string | The name of the attachment to delete.
$repositoryId = "repositoryId_example"; // string | The repository ID of the pull request’s target branch.
$pullRequestId = 56; // int | ID of the pull request.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->pullRequestAttachmentsDelete($organization, $fileName, $repositoryId, $pullRequestId, $project, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestAttachmentsApi->pullRequestAttachmentsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **fileName** | **string**| The name of the attachment to delete. |
 **repositoryId** | **string**| The repository ID of the pull request’s target branch. |
 **pullRequestId** | **int**| ID of the pull request. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pullRequestAttachmentsGet**
> string pullRequestAttachmentsGet($organization, $fileName, $repositoryId, $pullRequestId, $project, $apiVersion)



Get the file content of a pull request attachment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\PullRequestAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$fileName = "fileName_example"; // string | The name of the attachment.
$repositoryId = "repositoryId_example"; // string | The repository ID of the pull request’s target branch.
$pullRequestId = 56; // int | ID of the pull request.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->pullRequestAttachmentsGet($organization, $fileName, $repositoryId, $pullRequestId, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestAttachmentsApi->pullRequestAttachmentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **fileName** | **string**| The name of the attachment. |
 **repositoryId** | **string**| The repository ID of the pull request’s target branch. |
 **pullRequestId** | **int**| ID of the pull request. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

**string**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream, application/zip

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pullRequestAttachmentsList**
> \FrankHouweling\AzureDevOpsClient\Git\Model\Attachment[] pullRequestAttachmentsList($organization, $repositoryId, $pullRequestId, $project, $apiVersion)



Get a list of files attached to a given pull request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\PullRequestAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$repositoryId = "repositoryId_example"; // string | The repository ID of the pull request’s target branch.
$pullRequestId = 56; // int | ID of the pull request.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->pullRequestAttachmentsList($organization, $repositoryId, $pullRequestId, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestAttachmentsApi->pullRequestAttachmentsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **repositoryId** | **string**| The repository ID of the pull request’s target branch. |
 **pullRequestId** | **int**| ID of the pull request. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Git\Model\Attachment[]**](../Model/Attachment.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

