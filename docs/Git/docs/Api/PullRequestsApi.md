# AzureDevOpsClient\Git\PullRequestsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pullRequestsCreate**](PullRequestsApi.md#pullRequestsCreate) | **POST** /{organization}/{project}/_apis/git/repositories/{repositoryId}/pullrequests | 
[**pullRequestsGetPullRequest**](PullRequestsApi.md#pullRequestsGetPullRequest) | **GET** /{organization}/{project}/_apis/git/repositories/{repositoryId}/pullrequests/{pullRequestId} | 
[**pullRequestsGetPullRequestById**](PullRequestsApi.md#pullRequestsGetPullRequestById) | **GET** /{organization}/{project}/_apis/git/pullrequests/{pullRequestId} | 
[**pullRequestsGetPullRequests**](PullRequestsApi.md#pullRequestsGetPullRequests) | **GET** /{organization}/{project}/_apis/git/repositories/{repositoryId}/pullrequests | 
[**pullRequestsGetPullRequestsByProject**](PullRequestsApi.md#pullRequestsGetPullRequestsByProject) | **GET** /{organization}/{project}/_apis/git/pullrequests | 
[**pullRequestsUpdate**](PullRequestsApi.md#pullRequestsUpdate) | **PATCH** /{organization}/{project}/_apis/git/repositories/{repositoryId}/pullrequests/{pullRequestId} | 


# **pullRequestsCreate**
> \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitPullRequest pullRequestsCreate($organization, $body, $repositoryId, $project, $apiVersion, $supportsIterations)



Create a pull request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Git\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitPullRequest(); // \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitPullRequest | The pull request to create.
$repositoryId = "repositoryId_example"; // string | The repository ID of the pull request's target branch.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$supportsIterations = true; // bool | If true, subsequent pushes to the pull request will be individually reviewable. Set this to false for large pull requests for performance reasons if this functionality is not needed.

try {
    $result = $apiInstance->pullRequestsCreate($organization, $body, $repositoryId, $project, $apiVersion, $supportsIterations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->pullRequestsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitPullRequest**](../Model/GitPullRequest.md)| The pull request to create. |
 **repositoryId** | **string**| The repository ID of the pull request&#39;s target branch. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **supportsIterations** | **bool**| If true, subsequent pushes to the pull request will be individually reviewable. Set this to false for large pull requests for performance reasons if this functionality is not needed. | [optional]

### Return type

[**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitPullRequest**](../Model/GitPullRequest.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pullRequestsGetPullRequest**
> \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitPullRequest pullRequestsGetPullRequest($organization, $repositoryId, $pullRequestId, $project, $apiVersion, $maxCommentLength, $skip, $top, $includeCommits, $includeWorkItemRefs)



Retrieve a pull request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Git\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$repositoryId = "repositoryId_example"; // string | The repository ID of the pull request's target branch.
$pullRequestId = 56; // int | The ID of the pull request to retrieve.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$maxCommentLength = 56; // int | Not used.
$skip = 56; // int | Not used.
$top = 56; // int | Not used.
$includeCommits = true; // bool | If true, the pull request will be returned with the associated commits.
$includeWorkItemRefs = true; // bool | If true, the pull request will be returned with the associated work item references.

try {
    $result = $apiInstance->pullRequestsGetPullRequest($organization, $repositoryId, $pullRequestId, $project, $apiVersion, $maxCommentLength, $skip, $top, $includeCommits, $includeWorkItemRefs);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->pullRequestsGetPullRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **repositoryId** | **string**| The repository ID of the pull request&#39;s target branch. |
 **pullRequestId** | **int**| The ID of the pull request to retrieve. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **maxCommentLength** | **int**| Not used. | [optional]
 **skip** | **int**| Not used. | [optional]
 **top** | **int**| Not used. | [optional]
 **includeCommits** | **bool**| If true, the pull request will be returned with the associated commits. | [optional]
 **includeWorkItemRefs** | **bool**| If true, the pull request will be returned with the associated work item references. | [optional]

### Return type

[**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitPullRequest**](../Model/GitPullRequest.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pullRequestsGetPullRequestById**
> \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitPullRequest pullRequestsGetPullRequestById($organization, $pullRequestId, $project, $apiVersion)



Retrieve a pull request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Git\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$pullRequestId = 56; // int | The ID of the pull request to retrieve.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->pullRequestsGetPullRequestById($organization, $pullRequestId, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->pullRequestsGetPullRequestById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **pullRequestId** | **int**| The ID of the pull request to retrieve. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitPullRequest**](../Model/GitPullRequest.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pullRequestsGetPullRequests**
> \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitPullRequest[] pullRequestsGetPullRequests($organization, $repositoryId, $project, $apiVersion, $searchCriteriaCreatorId, $searchCriteriaIncludeLinks, $searchCriteriaRepositoryId, $searchCriteriaReviewerId, $searchCriteriaSourceRefName, $searchCriteriaSourceRepositoryId, $searchCriteriaStatus, $searchCriteriaTargetRefName, $maxCommentLength, $skip, $top)



Retrieve all pull requests matching a specified criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Git\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$repositoryId = "repositoryId_example"; // string | The repository ID of the pull request's target branch.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$searchCriteriaCreatorId = "searchCriteriaCreatorId_example"; // string | If set, search for pull requests that were created by this identity.
$searchCriteriaIncludeLinks = true; // bool | Whether to include the _links field on the shallow references
$searchCriteriaRepositoryId = "searchCriteriaRepositoryId_example"; // string | If set, search for pull requests whose target branch is in this repository.
$searchCriteriaReviewerId = "searchCriteriaReviewerId_example"; // string | If set, search for pull requests that have this identity as a reviewer.
$searchCriteriaSourceRefName = "searchCriteriaSourceRefName_example"; // string | If set, search for pull requests from this branch.
$searchCriteriaSourceRepositoryId = "searchCriteriaSourceRepositoryId_example"; // string | If set, search for pull requests whose source branch is in this repository.
$searchCriteriaStatus = "searchCriteriaStatus_example"; // string | If set, search for pull requests that are in this state. Defaults to Active if unset.
$searchCriteriaTargetRefName = "searchCriteriaTargetRefName_example"; // string | If set, search for pull requests into this branch.
$maxCommentLength = 56; // int | Not used.
$skip = 56; // int | The number of pull requests to ignore. For example, to retrieve results 101-150, set top to 50 and skip to 100.
$top = 56; // int | The number of pull requests to retrieve.

try {
    $result = $apiInstance->pullRequestsGetPullRequests($organization, $repositoryId, $project, $apiVersion, $searchCriteriaCreatorId, $searchCriteriaIncludeLinks, $searchCriteriaRepositoryId, $searchCriteriaReviewerId, $searchCriteriaSourceRefName, $searchCriteriaSourceRepositoryId, $searchCriteriaStatus, $searchCriteriaTargetRefName, $maxCommentLength, $skip, $top);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->pullRequestsGetPullRequests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **repositoryId** | **string**| The repository ID of the pull request&#39;s target branch. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **searchCriteriaCreatorId** | [**string**](../Model/.md)| If set, search for pull requests that were created by this identity. | [optional]
 **searchCriteriaIncludeLinks** | **bool**| Whether to include the _links field on the shallow references | [optional]
 **searchCriteriaRepositoryId** | [**string**](../Model/.md)| If set, search for pull requests whose target branch is in this repository. | [optional]
 **searchCriteriaReviewerId** | [**string**](../Model/.md)| If set, search for pull requests that have this identity as a reviewer. | [optional]
 **searchCriteriaSourceRefName** | **string**| If set, search for pull requests from this branch. | [optional]
 **searchCriteriaSourceRepositoryId** | [**string**](../Model/.md)| If set, search for pull requests whose source branch is in this repository. | [optional]
 **searchCriteriaStatus** | **string**| If set, search for pull requests that are in this state. Defaults to Active if unset. | [optional]
 **searchCriteriaTargetRefName** | **string**| If set, search for pull requests into this branch. | [optional]
 **maxCommentLength** | **int**| Not used. | [optional]
 **skip** | **int**| The number of pull requests to ignore. For example, to retrieve results 101-150, set top to 50 and skip to 100. | [optional]
 **top** | **int**| The number of pull requests to retrieve. | [optional]

### Return type

[**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitPullRequest[]**](../Model/GitPullRequest.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pullRequestsGetPullRequestsByProject**
> \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitPullRequest[] pullRequestsGetPullRequestsByProject($organization, $project, $apiVersion, $searchCriteriaCreatorId, $searchCriteriaIncludeLinks, $searchCriteriaRepositoryId, $searchCriteriaReviewerId, $searchCriteriaSourceRefName, $searchCriteriaSourceRepositoryId, $searchCriteriaStatus, $searchCriteriaTargetRefName, $maxCommentLength, $skip, $top)



Retrieve all pull requests matching a specified criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Git\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$searchCriteriaCreatorId = "searchCriteriaCreatorId_example"; // string | If set, search for pull requests that were created by this identity.
$searchCriteriaIncludeLinks = true; // bool | Whether to include the _links field on the shallow references
$searchCriteriaRepositoryId = "searchCriteriaRepositoryId_example"; // string | If set, search for pull requests whose target branch is in this repository.
$searchCriteriaReviewerId = "searchCriteriaReviewerId_example"; // string | If set, search for pull requests that have this identity as a reviewer.
$searchCriteriaSourceRefName = "searchCriteriaSourceRefName_example"; // string | If set, search for pull requests from this branch.
$searchCriteriaSourceRepositoryId = "searchCriteriaSourceRepositoryId_example"; // string | If set, search for pull requests whose source branch is in this repository.
$searchCriteriaStatus = "searchCriteriaStatus_example"; // string | If set, search for pull requests that are in this state. Defaults to Active if unset.
$searchCriteriaTargetRefName = "searchCriteriaTargetRefName_example"; // string | If set, search for pull requests into this branch.
$maxCommentLength = 56; // int | Not used.
$skip = 56; // int | The number of pull requests to ignore. For example, to retrieve results 101-150, set top to 50 and skip to 100.
$top = 56; // int | The number of pull requests to retrieve.

try {
    $result = $apiInstance->pullRequestsGetPullRequestsByProject($organization, $project, $apiVersion, $searchCriteriaCreatorId, $searchCriteriaIncludeLinks, $searchCriteriaRepositoryId, $searchCriteriaReviewerId, $searchCriteriaSourceRefName, $searchCriteriaSourceRepositoryId, $searchCriteriaStatus, $searchCriteriaTargetRefName, $maxCommentLength, $skip, $top);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->pullRequestsGetPullRequestsByProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **searchCriteriaCreatorId** | [**string**](../Model/.md)| If set, search for pull requests that were created by this identity. | [optional]
 **searchCriteriaIncludeLinks** | **bool**| Whether to include the _links field on the shallow references | [optional]
 **searchCriteriaRepositoryId** | [**string**](../Model/.md)| If set, search for pull requests whose target branch is in this repository. | [optional]
 **searchCriteriaReviewerId** | [**string**](../Model/.md)| If set, search for pull requests that have this identity as a reviewer. | [optional]
 **searchCriteriaSourceRefName** | **string**| If set, search for pull requests from this branch. | [optional]
 **searchCriteriaSourceRepositoryId** | [**string**](../Model/.md)| If set, search for pull requests whose source branch is in this repository. | [optional]
 **searchCriteriaStatus** | **string**| If set, search for pull requests that are in this state. Defaults to Active if unset. | [optional]
 **searchCriteriaTargetRefName** | **string**| If set, search for pull requests into this branch. | [optional]
 **maxCommentLength** | **int**| Not used. | [optional]
 **skip** | **int**| The number of pull requests to ignore. For example, to retrieve results 101-150, set top to 50 and skip to 100. | [optional]
 **top** | **int**| The number of pull requests to retrieve. | [optional]

### Return type

[**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitPullRequest[]**](../Model/GitPullRequest.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pullRequestsUpdate**
> \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitPullRequest pullRequestsUpdate($organization, $body, $repositoryId, $pullRequestId, $project, $apiVersion)



Update a pull request  These are the properties that can be updated with the API:  - Status  - Title  - Description (up to 4000 characters)  - CompletionOptions  - MergeOptions  - AutoCompleteSetBy.Id  - TargetRefName (when the PR retargeting feature is enabled)  Attempting to update other properties outside of this list will either cause the server to throw an `InvalidArgumentValueException`,  or to silently ignore the update.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Git\Api\PullRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitPullRequest(); // \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitPullRequest | The pull request content that should be updated.
$repositoryId = "repositoryId_example"; // string | The repository ID of the pull request's target branch.
$pullRequestId = 56; // int | ID of the pull request to update.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->pullRequestsUpdate($organization, $body, $repositoryId, $pullRequestId, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestsApi->pullRequestsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitPullRequest**](../Model/GitPullRequest.md)| The pull request content that should be updated. |
 **repositoryId** | **string**| The repository ID of the pull request&#39;s target branch. |
 **pullRequestId** | **int**| ID of the pull request to update. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitPullRequest**](../Model/GitPullRequest.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

