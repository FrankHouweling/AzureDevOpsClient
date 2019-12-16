# AzureDevOpsClient\Git\PullRequestLabelsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pullRequestLabelsCreate**](PullRequestLabelsApi.md#pullRequestLabelsCreate) | **POST** /{organization}/{project}/_apis/git/repositories/{repositoryId}/pullRequests/{pullRequestId}/labels | 
[**pullRequestLabelsDelete**](PullRequestLabelsApi.md#pullRequestLabelsDelete) | **DELETE** /{organization}/{project}/_apis/git/repositories/{repositoryId}/pullRequests/{pullRequestId}/labels/{labelIdOrName} | 
[**pullRequestLabelsGet**](PullRequestLabelsApi.md#pullRequestLabelsGet) | **GET** /{organization}/{project}/_apis/git/repositories/{repositoryId}/pullRequests/{pullRequestId}/labels/{labelIdOrName} | 
[**pullRequestLabelsList**](PullRequestLabelsApi.md#pullRequestLabelsList) | **GET** /{organization}/{project}/_apis/git/repositories/{repositoryId}/pullRequests/{pullRequestId}/labels | 


# **pullRequestLabelsCreate**
> \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\WebApiTagDefinition pullRequestLabelsCreate($organization, $body, $repositoryId, $pullRequestId, $project, $apiVersion, $projectId)



Create a label for a specified pull request. The only required field is the name of the new label.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Git\Api\PullRequestLabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\WebApiCreateTagRequestData(); // \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\WebApiCreateTagRequestData | Label to assign to the pull request.
$repositoryId = "repositoryId_example"; // string | The repository ID of the pull request’s target branch.
$pullRequestId = 56; // int | ID of the pull request.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$projectId = "projectId_example"; // string | Project ID or project name.

try {
    $result = $apiInstance->pullRequestLabelsCreate($organization, $body, $repositoryId, $pullRequestId, $project, $apiVersion, $projectId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestLabelsApi->pullRequestLabelsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\WebApiCreateTagRequestData**](../Model/WebApiCreateTagRequestData.md)| Label to assign to the pull request. |
 **repositoryId** | **string**| The repository ID of the pull request’s target branch. |
 **pullRequestId** | **int**| ID of the pull request. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **projectId** | **string**| Project ID or project name. | [optional]

### Return type

[**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\WebApiTagDefinition**](../Model/WebApiTagDefinition.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pullRequestLabelsDelete**
> pullRequestLabelsDelete($organization, $repositoryId, $pullRequestId, $labelIdOrName, $project, $apiVersion, $projectId)



Removes a label from the set of those assigned to the pull request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Git\Api\PullRequestLabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$repositoryId = "repositoryId_example"; // string | The repository ID of the pull request’s target branch.
$pullRequestId = 56; // int | ID of the pull request.
$labelIdOrName = "labelIdOrName_example"; // string | The name or ID of the label requested.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$projectId = "projectId_example"; // string | Project ID or project name.

try {
    $apiInstance->pullRequestLabelsDelete($organization, $repositoryId, $pullRequestId, $labelIdOrName, $project, $apiVersion, $projectId);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestLabelsApi->pullRequestLabelsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **repositoryId** | **string**| The repository ID of the pull request’s target branch. |
 **pullRequestId** | **int**| ID of the pull request. |
 **labelIdOrName** | **string**| The name or ID of the label requested. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **projectId** | **string**| Project ID or project name. | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pullRequestLabelsGet**
> \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\WebApiTagDefinition pullRequestLabelsGet($organization, $repositoryId, $pullRequestId, $labelIdOrName, $project, $apiVersion, $projectId)



Retrieves a single label that has been assigned to a pull request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Git\Api\PullRequestLabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$repositoryId = "repositoryId_example"; // string | The repository ID of the pull request’s target branch.
$pullRequestId = 56; // int | ID of the pull request.
$labelIdOrName = "labelIdOrName_example"; // string | The name or ID of the label requested.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$projectId = "projectId_example"; // string | Project ID or project name.

try {
    $result = $apiInstance->pullRequestLabelsGet($organization, $repositoryId, $pullRequestId, $labelIdOrName, $project, $apiVersion, $projectId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestLabelsApi->pullRequestLabelsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **repositoryId** | **string**| The repository ID of the pull request’s target branch. |
 **pullRequestId** | **int**| ID of the pull request. |
 **labelIdOrName** | **string**| The name or ID of the label requested. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **projectId** | **string**| Project ID or project name. | [optional]

### Return type

[**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\WebApiTagDefinition**](../Model/WebApiTagDefinition.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pullRequestLabelsList**
> \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\WebApiTagDefinition[] pullRequestLabelsList($organization, $repositoryId, $pullRequestId, $project, $apiVersion, $projectId)



Get all the labels assigned to a pull request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Git\Api\PullRequestLabelsApi(
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
$projectId = "projectId_example"; // string | Project ID or project name.

try {
    $result = $apiInstance->pullRequestLabelsList($organization, $repositoryId, $pullRequestId, $project, $apiVersion, $projectId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestLabelsApi->pullRequestLabelsList: ', $e->getMessage(), PHP_EOL;
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
 **projectId** | **string**| Project ID or project name. | [optional]

### Return type

[**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\WebApiTagDefinition[]**](../Model/WebApiTagDefinition.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

