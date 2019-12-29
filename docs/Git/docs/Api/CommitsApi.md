# FrankHouweling\AzureDevOpsClient\Git\CommitsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**commitsGet**](CommitsApi.md#commitsGet) | **GET** /{organization}/{project}/_apis/git/repositories/{repositoryId}/commits/{commitId} | 
[**commitsGetChanges**](CommitsApi.md#commitsGetChanges) | **GET** /{organization}/{project}/_apis/git/repositories/{repositoryId}/commits/{commitId}/changes | 
[**commitsGetCommitsBatch**](CommitsApi.md#commitsGetCommitsBatch) | **POST** /{organization}/{project}/_apis/git/repositories/{repositoryId}/commitsbatch | 
[**commitsGetPushCommits**](CommitsApi.md#commitsGetPushCommits) | **GET** /{organization}/{project}/_apis/git/repositories/{repositoryId}/commits | 


# **commitsGet**
> \FrankHouweling\AzureDevOpsClient\Git\Model\GitCommit commitsGet($organization, $commitId, $repositoryId, $project, $apiVersion, $changeCount)



Retrieve a particular commit.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\CommitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$commitId = "commitId_example"; // string | The id of the commit.
$repositoryId = "repositoryId_example"; // string | The id or friendly name of the repository. To use the friendly name, projectId must also be specified.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$changeCount = 56; // int | The number of changes to include in the result.

try {
    $result = $apiInstance->commitsGet($organization, $commitId, $repositoryId, $project, $apiVersion, $changeCount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommitsApi->commitsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **commitId** | **string**| The id of the commit. |
 **repositoryId** | **string**| The id or friendly name of the repository. To use the friendly name, projectId must also be specified. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **changeCount** | **int**| The number of changes to include in the result. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Git\Model\GitCommit**](../Model/GitCommit.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **commitsGetChanges**
> \FrankHouweling\AzureDevOpsClient\Git\Model\GitCommitChanges commitsGetChanges($organization, $commitId, $repositoryId, $project, $apiVersion, $top, $skip)



Retrieve changes for a particular commit.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\CommitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$commitId = "commitId_example"; // string | The id of the commit.
$repositoryId = "repositoryId_example"; // string | The id or friendly name of the repository. To use the friendly name, projectId must also be specified.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$top = 56; // int | The maximum number of changes to return.
$skip = 56; // int | The number of changes to skip.

try {
    $result = $apiInstance->commitsGetChanges($organization, $commitId, $repositoryId, $project, $apiVersion, $top, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommitsApi->commitsGetChanges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **commitId** | **string**| The id of the commit. |
 **repositoryId** | **string**| The id or friendly name of the repository. To use the friendly name, projectId must also be specified. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **top** | **int**| The maximum number of changes to return. | [optional]
 **skip** | **int**| The number of changes to skip. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Git\Model\GitCommitChanges**](../Model/GitCommitChanges.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **commitsGetCommitsBatch**
> \FrankHouweling\AzureDevOpsClient\Git\Model\GitCommitRef[] commitsGetCommitsBatch($organization, $body, $repositoryId, $project, $apiVersion, $skip, $top, $includeStatuses)



Retrieve git commits for a project matching the search criteria

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\CommitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Git\Model\GitQueryCommitsCriteria(); // \FrankHouweling\AzureDevOpsClient\Git\Model\GitQueryCommitsCriteria | Search options
$repositoryId = "repositoryId_example"; // string | The name or ID of the repository.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$skip = 56; // int | Number of commits to skip.
$top = 56; // int | Maximum number of commits to return.
$includeStatuses = true; // bool | True to include additional commit status information.

try {
    $result = $apiInstance->commitsGetCommitsBatch($organization, $body, $repositoryId, $project, $apiVersion, $skip, $top, $includeStatuses);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommitsApi->commitsGetCommitsBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\GitQueryCommitsCriteria**](../Model/GitQueryCommitsCriteria.md)| Search options |
 **repositoryId** | **string**| The name or ID of the repository. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **skip** | **int**| Number of commits to skip. | [optional]
 **top** | **int**| Maximum number of commits to return. | [optional]
 **includeStatuses** | **bool**| True to include additional commit status information. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Git\Model\GitCommitRef[]**](../Model/GitCommitRef.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **commitsGetPushCommits**
> \FrankHouweling\AzureDevOpsClient\Git\Model\GitCommitRef[] commitsGetPushCommits($organization, $repositoryId, $pushId, $project, $apiVersion, $top, $skip, $includeLinks)



Retrieve a list of commits associated with a particular push.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\CommitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$repositoryId = "repositoryId_example"; // string | The id or friendly name of the repository. To use the friendly name, projectId must also be specified.
$pushId = 56; // int | The id of the push.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$top = 56; // int | The maximum number of commits to return (\"get the top x commits\").
$skip = 56; // int | The number of commits to skip.
$includeLinks = true; // bool | Set to false to avoid including REST Url links for resources. Defaults to true.

try {
    $result = $apiInstance->commitsGetPushCommits($organization, $repositoryId, $pushId, $project, $apiVersion, $top, $skip, $includeLinks);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommitsApi->commitsGetPushCommits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **repositoryId** | **string**| The id or friendly name of the repository. To use the friendly name, projectId must also be specified. |
 **pushId** | **int**| The id of the push. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **top** | **int**| The maximum number of commits to return (\&quot;get the top x commits\&quot;). | [optional]
 **skip** | **int**| The number of commits to skip. | [optional]
 **includeLinks** | **bool**| Set to false to avoid including REST Url links for resources. Defaults to true. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Git\Model\GitCommitRef[]**](../Model/GitCommitRef.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

