# AzureDevOpsClient\Git\PullRequestPropertiesApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pullRequestPropertiesList**](PullRequestPropertiesApi.md#pullRequestPropertiesList) | **GET** /{organization}/{project}/_apis/git/repositories/{repositoryId}/pullRequests/{pullRequestId}/properties | 
[**pullRequestPropertiesUpdate**](PullRequestPropertiesApi.md#pullRequestPropertiesUpdate) | **PATCH** /{organization}/{project}/_apis/git/repositories/{repositoryId}/pullRequests/{pullRequestId}/properties | 


# **pullRequestPropertiesList**
> \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\PropertiesCollection pullRequestPropertiesList($organization, $repositoryId, $pullRequestId, $project, $apiVersion)



Get external properties of the pull request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Git\Api\PullRequestPropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$repositoryId = "repositoryId_example"; // string | The repository ID of the pull request’s target branch.
$pullRequestId = 56; // int | ID of the pull request.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->pullRequestPropertiesList($organization, $repositoryId, $pullRequestId, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestPropertiesApi->pullRequestPropertiesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **repositoryId** | **string**| The repository ID of the pull request’s target branch. |
 **pullRequestId** | **int**| ID of the pull request. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\PropertiesCollection**](../Model/PropertiesCollection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pullRequestPropertiesUpdate**
> \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\PropertiesCollection pullRequestPropertiesUpdate($organization, $body, $repositoryId, $pullRequestId, $project, $apiVersion)



Create or update pull request external properties. The patch operation can be `add`, `replace` or `remove`. For `add` operation, the path can be empty. If the path is empty, the value must be a list of key value pairs. For `replace` operation, the path cannot be empty. If the path does not exist, the property will be added to the collection. For `remove` operation, the path cannot be empty. If the path does not exist, no action will be performed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Git\Api\PullRequestPropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\JsonPatchDocument(); // \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\JsonPatchDocument | Properties to add, replace or remove in JSON Patch format.
$repositoryId = "repositoryId_example"; // string | The repository ID of the pull request’s target branch.
$pullRequestId = 56; // int | ID of the pull request.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->pullRequestPropertiesUpdate($organization, $body, $repositoryId, $pullRequestId, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestPropertiesApi->pullRequestPropertiesUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\JsonPatchDocument**](../Model/JsonPatchDocument.md)| Properties to add, replace or remove in JSON Patch format. |
 **repositoryId** | **string**| The repository ID of the pull request’s target branch. |
 **pullRequestId** | **int**| ID of the pull request. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\PropertiesCollection**](../Model/PropertiesCollection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

