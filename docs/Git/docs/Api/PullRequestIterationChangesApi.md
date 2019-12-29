# FrankHouweling\AzureDevOpsClient\Git\PullRequestIterationChangesApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pullRequestIterationChangesGet**](PullRequestIterationChangesApi.md#pullRequestIterationChangesGet) | **GET** /{organization}/{project}/_apis/git/repositories/{repositoryId}/pullRequests/{pullRequestId}/iterations/{iterationId}/changes | 


# **pullRequestIterationChangesGet**
> \FrankHouweling\AzureDevOpsClient\Git\Model\GitPullRequestIterationChanges pullRequestIterationChangesGet($organization, $repositoryId, $pullRequestId, $iterationId, $project, $apiVersion, $top, $skip, $compareTo)



Retrieve the changes made in a pull request between two iterations.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\PullRequestIterationChangesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$repositoryId = "repositoryId_example"; // string | The repository ID of the pull request's target branch.
$pullRequestId = 56; // int | ID of the pull request.
$iterationId = 56; // int | ID of the pull request iteration. <br /> Iteration IDs are zero-based with zero indicating the common commit between the source and target branches. Iteration one is the head of the source branch at the time the pull request is created and subsequent iterations are created when there are pushes to the source branch.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$top = 56; // int | Optional. The number of changes to retrieve.  The default value is 100 and the maximum value is 2000.
$skip = 56; // int | Optional. The number of changes to ignore.  For example, to retrieve changes 101-150, set top 50 and skip to 100.
$compareTo = 56; // int | ID of the pull request iteration to compare against.  The default value is zero which indicates the comparison is made against the common commit between the source and target branches

try {
    $result = $apiInstance->pullRequestIterationChangesGet($organization, $repositoryId, $pullRequestId, $iterationId, $project, $apiVersion, $top, $skip, $compareTo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestIterationChangesApi->pullRequestIterationChangesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **repositoryId** | **string**| The repository ID of the pull request&#39;s target branch. |
 **pullRequestId** | **int**| ID of the pull request. |
 **iterationId** | **int**| ID of the pull request iteration. &lt;br /&gt; Iteration IDs are zero-based with zero indicating the common commit between the source and target branches. Iteration one is the head of the source branch at the time the pull request is created and subsequent iterations are created when there are pushes to the source branch. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **top** | **int**| Optional. The number of changes to retrieve.  The default value is 100 and the maximum value is 2000. | [optional]
 **skip** | **int**| Optional. The number of changes to ignore.  For example, to retrieve changes 101-150, set top 50 and skip to 100. | [optional]
 **compareTo** | **int**| ID of the pull request iteration to compare against.  The default value is zero which indicates the comparison is made against the common commit between the source and target branches | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Git\Model\GitPullRequestIterationChanges**](../Model/GitPullRequestIterationChanges.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

