# FrankHouweling\AzureDevOpsClient\Wit\CommentsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**commentsAdd**](CommentsApi.md#commentsAdd) | **POST** /{organization}/{project}/_apis/wit/workItems/{workItemId}/comments | 
[**commentsDelete**](CommentsApi.md#commentsDelete) | **DELETE** /{organization}/{project}/_apis/wit/workItems/{workItemId}/comments/{commentId} | 
[**commentsGetComment**](CommentsApi.md#commentsGetComment) | **GET** /{organization}/{project}/_apis/wit/workItems/{workItemId}/comments/{commentId} | 
[**commentsGetCommentsBatch**](CommentsApi.md#commentsGetCommentsBatch) | **GET** /{organization}/{project}/_apis/wit/workItems/{workItemId}/comments | 
[**commentsUpdate**](CommentsApi.md#commentsUpdate) | **PATCH** /{organization}/{project}/_apis/wit/workItems/{workItemId}/comments/{commentId} | 


# **commentsAdd**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\Comment commentsAdd($organization, $body, $project, $workItemId, $apiVersion)



Add a comment on a work item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Wit\Model\CommentCreate(); // \FrankHouweling\AzureDevOpsClient\Wit\Model\CommentCreate | Comment create request.
$project = "project_example"; // string | Project ID or project name
$workItemId = 56; // int | Id of a work item.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.

try {
    $result = $apiInstance->commentsAdd($organization, $body, $project, $workItemId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->commentsAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Wit\Model\CommentCreate**](../Model/CommentCreate.md)| Comment create request. |
 **project** | **string**| Project ID or project name |
 **workItemId** | **int**| Id of a work item. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\Comment**](../Model/Comment.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **commentsDelete**
> commentsDelete($organization, $project, $workItemId, $commentId, $apiVersion)



Delete a comment on a work item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$workItemId = 56; // int | Id of a work item.
$commentId = 56; // int | 
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.

try {
    $apiInstance->commentsDelete($organization, $project, $workItemId, $commentId, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->commentsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **workItemId** | **int**| Id of a work item. |
 **commentId** | **int**|  |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **commentsGetComment**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\Comment commentsGetComment($organization, $project, $workItemId, $commentId, $apiVersion, $includeDeleted, $expand)



Returns a work item comment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$workItemId = 56; // int | Id of a work item to get the comment.
$commentId = 56; // int | Id of the comment to return.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.
$includeDeleted = true; // bool | Specify if the deleted comment should be retrieved.
$expand = "expand_example"; // string | Specifies the additional data retrieval options for work item comments.

try {
    $result = $apiInstance->commentsGetComment($organization, $project, $workItemId, $commentId, $apiVersion, $includeDeleted, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->commentsGetComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **workItemId** | **int**| Id of a work item to get the comment. |
 **commentId** | **int**| Id of the comment to return. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |
 **includeDeleted** | **bool**| Specify if the deleted comment should be retrieved. | [optional]
 **expand** | **string**| Specifies the additional data retrieval options for work item comments. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\Comment**](../Model/Comment.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **commentsGetCommentsBatch**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\CommentList commentsGetCommentsBatch($organization, $project, $workItemId, $ids, $apiVersion, $includeDeleted, $expand)



Returns a list of work item comments by ids.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$workItemId = 56; // int | Id of a work item to get comments for.
$ids = "ids_example"; // string | Comma-separated list of comment ids to return.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.
$includeDeleted = true; // bool | Specify if the deleted comments should be retrieved.
$expand = "expand_example"; // string | Specifies the additional data retrieval options for work item comments.

try {
    $result = $apiInstance->commentsGetCommentsBatch($organization, $project, $workItemId, $ids, $apiVersion, $includeDeleted, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->commentsGetCommentsBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **workItemId** | **int**| Id of a work item to get comments for. |
 **ids** | **string**| Comma-separated list of comment ids to return. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |
 **includeDeleted** | **bool**| Specify if the deleted comments should be retrieved. | [optional]
 **expand** | **string**| Specifies the additional data retrieval options for work item comments. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\CommentList**](../Model/CommentList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **commentsUpdate**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\Comment commentsUpdate($organization, $body, $project, $workItemId, $commentId, $apiVersion)



Update a comment on a work item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Wit\Model\CommentUpdate(); // \FrankHouweling\AzureDevOpsClient\Wit\Model\CommentUpdate | Comment update request.
$project = "project_example"; // string | Project ID or project name
$workItemId = 56; // int | Id of a work item.
$commentId = 56; // int | 
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.

try {
    $result = $apiInstance->commentsUpdate($organization, $body, $project, $workItemId, $commentId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->commentsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Wit\Model\CommentUpdate**](../Model/CommentUpdate.md)| Comment update request. |
 **project** | **string**| Project ID or project name |
 **workItemId** | **int**| Id of a work item. |
 **commentId** | **int**|  |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\Comment**](../Model/Comment.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

