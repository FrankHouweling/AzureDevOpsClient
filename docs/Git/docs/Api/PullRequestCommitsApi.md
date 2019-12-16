# AzureDevOpsClient\Git\PullRequestCommitsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pullRequestCommitsGetPullRequestCommits**](PullRequestCommitsApi.md#pullRequestCommitsGetPullRequestCommits) | **GET** /{organization}/{project}/_apis/git/repositories/{repositoryId}/pullRequests/{pullRequestId}/commits | 
[**pullRequestCommitsGetPullRequestIterationCommits**](PullRequestCommitsApi.md#pullRequestCommitsGetPullRequestIterationCommits) | **GET** /{organization}/{project}/_apis/git/repositories/{repositoryId}/pullRequests/{pullRequestId}/iterations/{iterationId}/commits | 


# **pullRequestCommitsGetPullRequestCommits**
> \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitCommitRef[] pullRequestCommitsGetPullRequestCommits($organization, $repositoryId, $pullRequestId, $project, $apiVersion, $top, $continuationToken)



Get the commits for the specified pull request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Git\Api\PullRequestCommitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$repositoryId = "repositoryId_example"; // string | ID or name of the repository.
$pullRequestId = 56; // int | ID of the pull request.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$top = 56; // int | Maximum number of commits to return.
$continuationToken = "continuationToken_example"; // string | The continuation token used for pagination.

try {
    $result = $apiInstance->pullRequestCommitsGetPullRequestCommits($organization, $repositoryId, $pullRequestId, $project, $apiVersion, $top, $continuationToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestCommitsApi->pullRequestCommitsGetPullRequestCommits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **repositoryId** | **string**| ID or name of the repository. |
 **pullRequestId** | **int**| ID of the pull request. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **top** | **int**| Maximum number of commits to return. | [optional]
 **continuationToken** | **string**| The continuation token used for pagination. | [optional]

### Return type

[**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitCommitRef[]**](../Model/GitCommitRef.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pullRequestCommitsGetPullRequestIterationCommits**
> \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitCommitRef[] pullRequestCommitsGetPullRequestIterationCommits($organization, $repositoryId, $pullRequestId, $iterationId, $project, $apiVersion, $top, $skip)



Get the commits for the specified iteration of a pull request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Git\Api\PullRequestCommitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$repositoryId = "repositoryId_example"; // string | ID or name of the repository.
$pullRequestId = 56; // int | ID of the pull request.
$iterationId = 56; // int | ID of the iteration from which to get the commits.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$top = 56; // int | Maximum number of commits to return. The maximum number of commits that can be returned per batch is 500.
$skip = 56; // int | Number of commits to skip.

try {
    $result = $apiInstance->pullRequestCommitsGetPullRequestIterationCommits($organization, $repositoryId, $pullRequestId, $iterationId, $project, $apiVersion, $top, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestCommitsApi->pullRequestCommitsGetPullRequestIterationCommits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **repositoryId** | **string**| ID or name of the repository. |
 **pullRequestId** | **int**| ID of the pull request. |
 **iterationId** | **int**| ID of the iteration from which to get the commits. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **top** | **int**| Maximum number of commits to return. The maximum number of commits that can be returned per batch is 500. | [optional]
 **skip** | **int**| Number of commits to skip. | [optional]

### Return type

[**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitCommitRef[]**](../Model/GitCommitRef.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

