# AzureDevOpsClient\Git\PullRequestIterationsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pullRequestIterationsGet**](PullRequestIterationsApi.md#pullRequestIterationsGet) | **GET** /{organization}/{project}/_apis/git/repositories/{repositoryId}/pullRequests/{pullRequestId}/iterations/{iterationId} | 
[**pullRequestIterationsList**](PullRequestIterationsApi.md#pullRequestIterationsList) | **GET** /{organization}/{project}/_apis/git/repositories/{repositoryId}/pullRequests/{pullRequestId}/iterations | 


# **pullRequestIterationsGet**
> \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitPullRequestIteration pullRequestIterationsGet($organization, $repositoryId, $pullRequestId, $iterationId, $project, $apiVersion)



Get the specified iteration for a pull request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Git\Api\PullRequestIterationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$repositoryId = "repositoryId_example"; // string | ID or name of the repository.
$pullRequestId = 56; // int | ID of the pull request.
$iterationId = 56; // int | ID of the pull request iteration to return.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->pullRequestIterationsGet($organization, $repositoryId, $pullRequestId, $iterationId, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestIterationsApi->pullRequestIterationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **repositoryId** | **string**| ID or name of the repository. |
 **pullRequestId** | **int**| ID of the pull request. |
 **iterationId** | **int**| ID of the pull request iteration to return. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitPullRequestIteration**](../Model/GitPullRequestIteration.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pullRequestIterationsList**
> \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitPullRequestIteration[] pullRequestIterationsList($organization, $repositoryId, $pullRequestId, $project, $apiVersion, $includeCommits)



Get the list of iterations for the specified pull request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Git\Api\PullRequestIterationsApi(
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
$includeCommits = true; // bool | If true, include the commits associated with each iteration in the response.

try {
    $result = $apiInstance->pullRequestIterationsList($organization, $repositoryId, $pullRequestId, $project, $apiVersion, $includeCommits);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestIterationsApi->pullRequestIterationsList: ', $e->getMessage(), PHP_EOL;
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
 **includeCommits** | **bool**| If true, include the commits associated with each iteration in the response. | [optional]

### Return type

[**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitPullRequestIteration[]**](../Model/GitPullRequestIteration.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

