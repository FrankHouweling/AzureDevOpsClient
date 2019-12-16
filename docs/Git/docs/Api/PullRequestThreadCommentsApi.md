# FrankHouweling\AzureDevOpsClient\Git\PullRequestThreadCommentsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pullRequestThreadCommentsCreate**](PullRequestThreadCommentsApi.md#pullRequestThreadCommentsCreate) | **POST** /{organization}/{project}/_apis/git/repositories/{repositoryId}/pullRequests/{pullRequestId}/threads/{threadId}/comments | 
[**pullRequestThreadCommentsDelete**](PullRequestThreadCommentsApi.md#pullRequestThreadCommentsDelete) | **DELETE** /{organization}/{project}/_apis/git/repositories/{repositoryId}/pullRequests/{pullRequestId}/threads/{threadId}/comments/{commentId} | 
[**pullRequestThreadCommentsGet**](PullRequestThreadCommentsApi.md#pullRequestThreadCommentsGet) | **GET** /{organization}/{project}/_apis/git/repositories/{repositoryId}/pullRequests/{pullRequestId}/threads/{threadId}/comments/{commentId} | 
[**pullRequestThreadCommentsList**](PullRequestThreadCommentsApi.md#pullRequestThreadCommentsList) | **GET** /{organization}/{project}/_apis/git/repositories/{repositoryId}/pullRequests/{pullRequestId}/threads/{threadId}/comments | 
[**pullRequestThreadCommentsUpdate**](PullRequestThreadCommentsApi.md#pullRequestThreadCommentsUpdate) | **PATCH** /{organization}/{project}/_apis/git/repositories/{repositoryId}/pullRequests/{pullRequestId}/threads/{threadId}/comments/{commentId} | 


# **pullRequestThreadCommentsCreate**
> \FrankHouweling\AzureDevOpsClient\Git\Model\Comment pullRequestThreadCommentsCreate($organization, $body, $repositoryId, $pullRequestId, $threadId, $project, $apiVersion)



Create a comment on a specific thread in a pull request (up to 500 comments can be created per thread).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\PullRequestThreadCommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Git\Model\Comment(); // \FrankHouweling\AzureDevOpsClient\Git\Model\Comment | The comment to create. Comments can be up to 150,000 characters.
$repositoryId = "repositoryId_example"; // string | The repository ID of the pull request's target branch.
$pullRequestId = 56; // int | ID of the pull request.
$threadId = 56; // int | ID of the thread that the desired comment is in.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->pullRequestThreadCommentsCreate($organization, $body, $repositoryId, $pullRequestId, $threadId, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestThreadCommentsApi->pullRequestThreadCommentsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\Comment**](../Model/Comment.md)| The comment to create. Comments can be up to 150,000 characters. |
 **repositoryId** | **string**| The repository ID of the pull request&#39;s target branch. |
 **pullRequestId** | **int**| ID of the pull request. |
 **threadId** | **int**| ID of the thread that the desired comment is in. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Git\Model\Comment**](../Model/Comment.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pullRequestThreadCommentsDelete**
> pullRequestThreadCommentsDelete($organization, $repositoryId, $pullRequestId, $threadId, $commentId, $project, $apiVersion)



Delete a comment associated with a specific thread in a pull request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\PullRequestThreadCommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$repositoryId = "repositoryId_example"; // string | The repository ID of the pull request's target branch.
$pullRequestId = 56; // int | ID of the pull request.
$threadId = 56; // int | ID of the thread that the desired comment is in.
$commentId = 56; // int | ID of the comment.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->pullRequestThreadCommentsDelete($organization, $repositoryId, $pullRequestId, $threadId, $commentId, $project, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestThreadCommentsApi->pullRequestThreadCommentsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **repositoryId** | **string**| The repository ID of the pull request&#39;s target branch. |
 **pullRequestId** | **int**| ID of the pull request. |
 **threadId** | **int**| ID of the thread that the desired comment is in. |
 **commentId** | **int**| ID of the comment. |
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

# **pullRequestThreadCommentsGet**
> \FrankHouweling\AzureDevOpsClient\Git\Model\Comment pullRequestThreadCommentsGet($organization, $repositoryId, $pullRequestId, $threadId, $commentId, $project, $apiVersion)



Retrieve a comment associated with a specific thread in a pull request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\PullRequestThreadCommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$repositoryId = "repositoryId_example"; // string | The repository ID of the pull request's target branch.
$pullRequestId = 56; // int | ID of the pull request.
$threadId = 56; // int | ID of the thread that the desired comment is in.
$commentId = 56; // int | ID of the comment.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->pullRequestThreadCommentsGet($organization, $repositoryId, $pullRequestId, $threadId, $commentId, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestThreadCommentsApi->pullRequestThreadCommentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **repositoryId** | **string**| The repository ID of the pull request&#39;s target branch. |
 **pullRequestId** | **int**| ID of the pull request. |
 **threadId** | **int**| ID of the thread that the desired comment is in. |
 **commentId** | **int**| ID of the comment. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Git\Model\Comment**](../Model/Comment.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pullRequestThreadCommentsList**
> \FrankHouweling\AzureDevOpsClient\Git\Model\Comment[] pullRequestThreadCommentsList($organization, $repositoryId, $pullRequestId, $threadId, $project, $apiVersion)



Retrieve all comments associated with a specific thread in a pull request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\PullRequestThreadCommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$repositoryId = "repositoryId_example"; // string | The repository ID of the pull request's target branch.
$pullRequestId = 56; // int | ID of the pull request.
$threadId = 56; // int | ID of the thread.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->pullRequestThreadCommentsList($organization, $repositoryId, $pullRequestId, $threadId, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestThreadCommentsApi->pullRequestThreadCommentsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **repositoryId** | **string**| The repository ID of the pull request&#39;s target branch. |
 **pullRequestId** | **int**| ID of the pull request. |
 **threadId** | **int**| ID of the thread. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Git\Model\Comment[]**](../Model/Comment.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pullRequestThreadCommentsUpdate**
> \FrankHouweling\AzureDevOpsClient\Git\Model\Comment pullRequestThreadCommentsUpdate($organization, $body, $repositoryId, $pullRequestId, $threadId, $commentId, $project, $apiVersion)



Update a comment associated with a specific thread in a pull request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\PullRequestThreadCommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Git\Model\Comment(); // \FrankHouweling\AzureDevOpsClient\Git\Model\Comment | The comment content that should be updated. Comments can be up to 150,000 characters.
$repositoryId = "repositoryId_example"; // string | The repository ID of the pull request's target branch.
$pullRequestId = 56; // int | ID of the pull request.
$threadId = 56; // int | ID of the thread that the desired comment is in.
$commentId = 56; // int | ID of the comment to update.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->pullRequestThreadCommentsUpdate($organization, $body, $repositoryId, $pullRequestId, $threadId, $commentId, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestThreadCommentsApi->pullRequestThreadCommentsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\Comment**](../Model/Comment.md)| The comment content that should be updated. Comments can be up to 150,000 characters. |
 **repositoryId** | **string**| The repository ID of the pull request&#39;s target branch. |
 **pullRequestId** | **int**| ID of the pull request. |
 **threadId** | **int**| ID of the thread that the desired comment is in. |
 **commentId** | **int**| ID of the comment to update. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Git\Model\Comment**](../Model/Comment.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

