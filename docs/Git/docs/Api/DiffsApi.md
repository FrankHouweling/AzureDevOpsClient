# FrankHouweling\AzureDevOpsClient\Git\DiffsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**diffsGet**](DiffsApi.md#diffsGet) | **GET** /{organization}/{project}/_apis/git/repositories/{repositoryId}/diffs/commits | 


# **diffsGet**
> \FrankHouweling\AzureDevOpsClient\Git\Model\GitCommitDiffs diffsGet($organization, $repositoryId, $project, $apiVersion, $diffCommonCommit, $top, $skip, $baseVersion, $baseVersionOptions, $baseVersionType, $targetVersion, $targetVersionOptions, $targetVersionType)



Find the closest common commit (the merge base) between base and target commits, and get the diff between either the base and target commits or common and target commits.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\DiffsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$repositoryId = "repositoryId_example"; // string | The name or ID of the repository.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$diffCommonCommit = true; // bool | If true, diff between common and target commits. If false, diff between base and target commits.
$top = 56; // int | Maximum number of changes to return. Defaults to 100.
$skip = 56; // int | Number of changes to skip
$baseVersion = "baseVersion_example"; // string | Version string identifier (name of tag/branch, SHA1 of commit)
$baseVersionOptions = "baseVersionOptions_example"; // string | Version options - Specify additional modifiers to version (e.g Previous)
$baseVersionType = "baseVersionType_example"; // string | Version type (branch, tag, or commit). Determines how Id is interpreted
$targetVersion = "targetVersion_example"; // string | Version string identifier (name of tag/branch, SHA1 of commit)
$targetVersionOptions = "targetVersionOptions_example"; // string | Version options - Specify additional modifiers to version (e.g Previous)
$targetVersionType = "targetVersionType_example"; // string | Version type (branch, tag, or commit). Determines how Id is interpreted

try {
    $result = $apiInstance->diffsGet($organization, $repositoryId, $project, $apiVersion, $diffCommonCommit, $top, $skip, $baseVersion, $baseVersionOptions, $baseVersionType, $targetVersion, $targetVersionOptions, $targetVersionType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiffsApi->diffsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **repositoryId** | **string**| The name or ID of the repository. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **diffCommonCommit** | **bool**| If true, diff between common and target commits. If false, diff between base and target commits. | [optional]
 **top** | **int**| Maximum number of changes to return. Defaults to 100. | [optional]
 **skip** | **int**| Number of changes to skip | [optional]
 **baseVersion** | **string**| Version string identifier (name of tag/branch, SHA1 of commit) | [optional]
 **baseVersionOptions** | **string**| Version options - Specify additional modifiers to version (e.g Previous) | [optional]
 **baseVersionType** | **string**| Version type (branch, tag, or commit). Determines how Id is interpreted | [optional]
 **targetVersion** | **string**| Version string identifier (name of tag/branch, SHA1 of commit) | [optional]
 **targetVersionOptions** | **string**| Version options - Specify additional modifiers to version (e.g Previous) | [optional]
 **targetVersionType** | **string**| Version type (branch, tag, or commit). Determines how Id is interpreted | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Git\Model\GitCommitDiffs**](../Model/GitCommitDiffs.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

