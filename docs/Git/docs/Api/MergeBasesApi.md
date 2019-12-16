# FrankHouweling\AzureDevOpsClient\Git\MergeBasesApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**mergeBasesList**](MergeBasesApi.md#mergeBasesList) | **GET** /{organization}/{project}/_apis/git/repositories/{repositoryNameOrId}/commits/{commitId}/mergebases | 


# **mergeBasesList**
> \FrankHouweling\AzureDevOpsClient\Git\Model\GitCommitRef[] mergeBasesList($organization, $repositoryNameOrId, $commitId, $otherCommitId, $project, $apiVersion, $otherCollectionId, $otherRepositoryId)



Find the merge bases of two commits, optionally across forks. If otherRepositoryId is not specified, the merge bases will only be calculated within the context of the local repositoryNameOrId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\MergeBasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$repositoryNameOrId = "repositoryNameOrId_example"; // string | ID or name of the local repository.
$commitId = "commitId_example"; // string | First commit, usually the tip of the target branch of the potential merge.
$otherCommitId = "otherCommitId_example"; // string | Other commit, usually the tip of the source branch of the potential merge.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$otherCollectionId = "otherCollectionId_example"; // string | The collection ID where otherCommitId lives.
$otherRepositoryId = "otherRepositoryId_example"; // string | The repository ID where otherCommitId lives.

try {
    $result = $apiInstance->mergeBasesList($organization, $repositoryNameOrId, $commitId, $otherCommitId, $project, $apiVersion, $otherCollectionId, $otherRepositoryId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MergeBasesApi->mergeBasesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **repositoryNameOrId** | **string**| ID or name of the local repository. |
 **commitId** | **string**| First commit, usually the tip of the target branch of the potential merge. |
 **otherCommitId** | **string**| Other commit, usually the tip of the source branch of the potential merge. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **otherCollectionId** | [**string**](../Model/.md)| The collection ID where otherCommitId lives. | [optional]
 **otherRepositoryId** | [**string**](../Model/.md)| The repository ID where otherCommitId lives. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Git\Model\GitCommitRef[]**](../Model/GitCommitRef.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

