# FrankHouweling\AzureDevOpsClient\Git\MergesApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**mergesCreate**](MergesApi.md#mergesCreate) | **POST** /{organization}/{project}/_apis/git/repositories/{repositoryNameOrId}/merges | 
[**mergesGet**](MergesApi.md#mergesGet) | **GET** /{organization}/{project}/_apis/git/repositories/{repositoryNameOrId}/merges/{mergeOperationId} | 


# **mergesCreate**
> \FrankHouweling\AzureDevOpsClient\Git\Model\GitMerge mergesCreate($organization, $body, $project, $repositoryNameOrId, $apiVersion, $includeLinks)



Request a git merge operation. Currently we support merging only 2 commits.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\MergesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Git\Model\GitMergeParameters(); // \FrankHouweling\AzureDevOpsClient\Git\Model\GitMergeParameters | Parents commitIds and merge commit messsage.
$project = "project_example"; // string | Project ID or project name
$repositoryNameOrId = "repositoryNameOrId_example"; // string | The name or ID of the repository.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$includeLinks = true; // bool | True to include links

try {
    $result = $apiInstance->mergesCreate($organization, $body, $project, $repositoryNameOrId, $apiVersion, $includeLinks);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MergesApi->mergesCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\GitMergeParameters**](../Model/GitMergeParameters.md)| Parents commitIds and merge commit messsage. |
 **project** | **string**| Project ID or project name |
 **repositoryNameOrId** | **string**| The name or ID of the repository. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **includeLinks** | **bool**| True to include links | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Git\Model\GitMerge**](../Model/GitMerge.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mergesGet**
> \FrankHouweling\AzureDevOpsClient\Git\Model\GitMerge mergesGet($organization, $project, $repositoryNameOrId, $mergeOperationId, $apiVersion, $includeLinks)



Get a specific merge operation's details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\MergesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$repositoryNameOrId = "repositoryNameOrId_example"; // string | The name or ID of the repository.
$mergeOperationId = 56; // int | OperationId of the merge request.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$includeLinks = true; // bool | True to include links

try {
    $result = $apiInstance->mergesGet($organization, $project, $repositoryNameOrId, $mergeOperationId, $apiVersion, $includeLinks);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MergesApi->mergesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **repositoryNameOrId** | **string**| The name or ID of the repository. |
 **mergeOperationId** | **int**| OperationId of the merge request. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **includeLinks** | **bool**| True to include links | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Git\Model\GitMerge**](../Model/GitMerge.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

