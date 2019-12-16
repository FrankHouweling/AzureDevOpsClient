# FrankHouweling\AzureDevOpsClient\Git\StatsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**statsList**](StatsApi.md#statsList) | **GET** /{organization}/{project}/_apis/git/repositories/{repositoryId}/stats/branches | 


# **statsList**
> \FrankHouweling\AzureDevOpsClient\Git\Model\GitBranchStats[] statsList($organization, $repositoryId, $project, $apiVersion, $baseVersionDescriptorVersion, $baseVersionDescriptorVersionOptions, $baseVersionDescriptorVersionType)



Retrieve statistics about all branches within a repository.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\StatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$repositoryId = "repositoryId_example"; // string | The name or ID of the repository.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$baseVersionDescriptorVersion = "baseVersionDescriptorVersion_example"; // string | Version string identifier (name of tag/branch, SHA1 of commit)
$baseVersionDescriptorVersionOptions = "baseVersionDescriptorVersionOptions_example"; // string | Version options - Specify additional modifiers to version (e.g Previous)
$baseVersionDescriptorVersionType = "baseVersionDescriptorVersionType_example"; // string | Version type (branch, tag, or commit). Determines how Id is interpreted

try {
    $result = $apiInstance->statsList($organization, $repositoryId, $project, $apiVersion, $baseVersionDescriptorVersion, $baseVersionDescriptorVersionOptions, $baseVersionDescriptorVersionType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatsApi->statsList: ', $e->getMessage(), PHP_EOL;
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
 **baseVersionDescriptorVersion** | **string**| Version string identifier (name of tag/branch, SHA1 of commit) | [optional]
 **baseVersionDescriptorVersionOptions** | **string**| Version options - Specify additional modifiers to version (e.g Previous) | [optional]
 **baseVersionDescriptorVersionType** | **string**| Version type (branch, tag, or commit). Determines how Id is interpreted | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Git\Model\GitBranchStats[]**](../Model/GitBranchStats.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

