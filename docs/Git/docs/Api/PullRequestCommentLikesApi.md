# FrankHouweling\AzureDevOpsClient\Git\PullRequestCommentLikesApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pullRequestCommentLikesCreate**](PullRequestCommentLikesApi.md#pullRequestCommentLikesCreate) | **POST** /{organization}/{project}/_apis/git/repositories/{repositoryId}/pullRequests/{pullRequestId}/threads/{threadId}/comments/{commentId}/likes | 
[**pullRequestCommentLikesDelete**](PullRequestCommentLikesApi.md#pullRequestCommentLikesDelete) | **DELETE** /{organization}/{project}/_apis/git/repositories/{repositoryId}/pullRequests/{pullRequestId}/threads/{threadId}/comments/{commentId}/likes | 
[**pullRequestCommentLikesList**](PullRequestCommentLikesApi.md#pullRequestCommentLikesList) | **GET** /{organization}/{project}/_apis/git/repositories/{repositoryId}/pullRequests/{pullRequestId}/threads/{threadId}/comments/{commentId}/likes | 


# **pullRequestCommentLikesCreate**
> pullRequestCommentLikesCreate($organization, $repositoryId, $pullRequestId, $threadId, $commentId, $project, $apiVersion)



Add a like on a comment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\PullRequestCommentLikesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$repositoryId = "repositoryId_example"; // string | The repository ID of the pull request's target branch.
$pullRequestId = 56; // int | ID of the pull request.
$threadId = 56; // int | The ID of the thread that contains the comment.
$commentId = 56; // int | The ID of the comment.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->pullRequestCommentLikesCreate($organization, $repositoryId, $pullRequestId, $threadId, $commentId, $project, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestCommentLikesApi->pullRequestCommentLikesCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **repositoryId** | **string**| The repository ID of the pull request&#39;s target branch. |
 **pullRequestId** | **int**| ID of the pull request. |
 **threadId** | **int**| The ID of the thread that contains the comment. |
 **commentId** | **int**| The ID of the comment. |
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

# **pullRequestCommentLikesDelete**
> pullRequestCommentLikesDelete($organization, $repositoryId, $pullRequestId, $threadId, $commentId, $project, $apiVersion)



Delete a like on a comment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\PullRequestCommentLikesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$repositoryId = "repositoryId_example"; // string | The repository ID of the pull request's target branch.
$pullRequestId = 56; // int | ID of the pull request.
$threadId = 56; // int | The ID of the thread that contains the comment.
$commentId = 56; // int | The ID of the comment.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->pullRequestCommentLikesDelete($organization, $repositoryId, $pullRequestId, $threadId, $commentId, $project, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestCommentLikesApi->pullRequestCommentLikesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **repositoryId** | **string**| The repository ID of the pull request&#39;s target branch. |
 **pullRequestId** | **int**| ID of the pull request. |
 **threadId** | **int**| The ID of the thread that contains the comment. |
 **commentId** | **int**| The ID of the comment. |
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

# **pullRequestCommentLikesList**
> \FrankHouweling\AzureDevOpsClient\Git\Model\IdentityRef[] pullRequestCommentLikesList($organization, $repositoryId, $pullRequestId, $threadId, $commentId, $project, $apiVersion)



Get likes for a comment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\PullRequestCommentLikesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$repositoryId = "repositoryId_example"; // string | The repository ID of the pull request's target branch.
$pullRequestId = 56; // int | ID of the pull request.
$threadId = 56; // int | The ID of the thread that contains the comment.
$commentId = 56; // int | The ID of the comment.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->pullRequestCommentLikesList($organization, $repositoryId, $pullRequestId, $threadId, $commentId, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestCommentLikesApi->pullRequestCommentLikesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **repositoryId** | **string**| The repository ID of the pull request&#39;s target branch. |
 **pullRequestId** | **int**| ID of the pull request. |
 **threadId** | **int**| The ID of the thread that contains the comment. |
 **commentId** | **int**| The ID of the comment. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Git\Model\IdentityRef[]**](../Model/IdentityRef.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

