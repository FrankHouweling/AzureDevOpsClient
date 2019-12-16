# AzureDevOpsClient\Git\PullRequestQueryApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pullRequestQueryGet**](PullRequestQueryApi.md#pullRequestQueryGet) | **POST** /{organization}/{project}/_apis/git/repositories/{repositoryId}/pullrequestquery | 


# **pullRequestQueryGet**
> \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitPullRequestQuery pullRequestQueryGet($organization, $body, $repositoryId, $project, $apiVersion)



This API is used to find what pull requests are related to a given commit.  It can be used to either find the pull request that created a particular merge commit or it can be used to find all pull requests that have ever merged a particular commit.  The input is a list of queries which each contain a list of commits. For each commit that you search against, you will get back a dictionary of commit -> pull requests.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Git\Api\PullRequestQueryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitPullRequestQuery(); // \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitPullRequestQuery | The list of queries to perform.
$repositoryId = "repositoryId_example"; // string | ID of the repository.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->pullRequestQueryGet($organization, $body, $repositoryId, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestQueryApi->pullRequestQueryGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitPullRequestQuery**](../Model/GitPullRequestQuery.md)| The list of queries to perform. |
 **repositoryId** | **string**| ID of the repository. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitPullRequestQuery**](../Model/GitPullRequestQuery.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

