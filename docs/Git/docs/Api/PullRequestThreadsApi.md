# AzureDevOpsClient\Git\PullRequestThreadsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pullRequestThreadsCreate**](PullRequestThreadsApi.md#pullRequestThreadsCreate) | **POST** /{organization}/{project}/_apis/git/repositories/{repositoryId}/pullRequests/{pullRequestId}/threads | 
[**pullRequestThreadsGet**](PullRequestThreadsApi.md#pullRequestThreadsGet) | **GET** /{organization}/{project}/_apis/git/repositories/{repositoryId}/pullRequests/{pullRequestId}/threads/{threadId} | 
[**pullRequestThreadsList**](PullRequestThreadsApi.md#pullRequestThreadsList) | **GET** /{organization}/{project}/_apis/git/repositories/{repositoryId}/pullRequests/{pullRequestId}/threads | 
[**pullRequestThreadsUpdate**](PullRequestThreadsApi.md#pullRequestThreadsUpdate) | **PATCH** /{organization}/{project}/_apis/git/repositories/{repositoryId}/pullRequests/{pullRequestId}/threads/{threadId} | 


# **pullRequestThreadsCreate**
> \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitPullRequestCommentThread pullRequestThreadsCreate($organization, $body, $repositoryId, $pullRequestId, $project, $apiVersion)



Create a thread in a pull request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Git\Api\PullRequestThreadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitPullRequestCommentThread(); // \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitPullRequestCommentThread | The thread to create. Thread must contain at least one comment.
$repositoryId = "repositoryId_example"; // string | Repository ID of the pull request's target branch.
$pullRequestId = 56; // int | ID of the pull request.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->pullRequestThreadsCreate($organization, $body, $repositoryId, $pullRequestId, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestThreadsApi->pullRequestThreadsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitPullRequestCommentThread**](../Model/GitPullRequestCommentThread.md)| The thread to create. Thread must contain at least one comment. |
 **repositoryId** | **string**| Repository ID of the pull request&#39;s target branch. |
 **pullRequestId** | **int**| ID of the pull request. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitPullRequestCommentThread**](../Model/GitPullRequestCommentThread.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pullRequestThreadsGet**
> \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitPullRequestCommentThread pullRequestThreadsGet($organization, $repositoryId, $pullRequestId, $threadId, $project, $apiVersion, $iteration, $baseIteration)



Retrieve a thread in a pull request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Git\Api\PullRequestThreadsApi(
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
$iteration = 56; // int | If specified, thread position will be tracked using this iteration as the right side of the diff.
$baseIteration = 56; // int | If specified, thread position will be tracked using this iteration as the left side of the diff.

try {
    $result = $apiInstance->pullRequestThreadsGet($organization, $repositoryId, $pullRequestId, $threadId, $project, $apiVersion, $iteration, $baseIteration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestThreadsApi->pullRequestThreadsGet: ', $e->getMessage(), PHP_EOL;
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
 **iteration** | **int**| If specified, thread position will be tracked using this iteration as the right side of the diff. | [optional]
 **baseIteration** | **int**| If specified, thread position will be tracked using this iteration as the left side of the diff. | [optional]

### Return type

[**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitPullRequestCommentThread**](../Model/GitPullRequestCommentThread.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pullRequestThreadsList**
> \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitPullRequestCommentThread[] pullRequestThreadsList($organization, $repositoryId, $pullRequestId, $project, $apiVersion, $iteration, $baseIteration)



Retrieve all threads in a pull request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Git\Api\PullRequestThreadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$repositoryId = "repositoryId_example"; // string | The repository ID of the pull request's target branch.
$pullRequestId = 56; // int | ID of the pull request.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$iteration = 56; // int | If specified, thread positions will be tracked using this iteration as the right side of the diff.
$baseIteration = 56; // int | If specified, thread positions will be tracked using this iteration as the left side of the diff.

try {
    $result = $apiInstance->pullRequestThreadsList($organization, $repositoryId, $pullRequestId, $project, $apiVersion, $iteration, $baseIteration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestThreadsApi->pullRequestThreadsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **repositoryId** | **string**| The repository ID of the pull request&#39;s target branch. |
 **pullRequestId** | **int**| ID of the pull request. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **iteration** | **int**| If specified, thread positions will be tracked using this iteration as the right side of the diff. | [optional]
 **baseIteration** | **int**| If specified, thread positions will be tracked using this iteration as the left side of the diff. | [optional]

### Return type

[**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitPullRequestCommentThread[]**](../Model/GitPullRequestCommentThread.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pullRequestThreadsUpdate**
> \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitPullRequestCommentThread pullRequestThreadsUpdate($organization, $body, $repositoryId, $pullRequestId, $threadId, $project, $apiVersion)



Update a thread in a pull request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Git\Api\PullRequestThreadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitPullRequestCommentThread(); // \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitPullRequestCommentThread | The thread content that should be updated.
$repositoryId = "repositoryId_example"; // string | The repository ID of the pull request's target branch.
$pullRequestId = 56; // int | ID of the pull request.
$threadId = 56; // int | ID of the thread to update.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->pullRequestThreadsUpdate($organization, $body, $repositoryId, $pullRequestId, $threadId, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestThreadsApi->pullRequestThreadsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitPullRequestCommentThread**](../Model/GitPullRequestCommentThread.md)| The thread content that should be updated. |
 **repositoryId** | **string**| The repository ID of the pull request&#39;s target branch. |
 **pullRequestId** | **int**| ID of the pull request. |
 **threadId** | **int**| ID of the thread to update. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitPullRequestCommentThread**](../Model/GitPullRequestCommentThread.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

