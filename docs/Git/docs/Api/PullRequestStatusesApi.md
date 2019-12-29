# FrankHouweling\AzureDevOpsClient\Git\PullRequestStatusesApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pullRequestStatusesCreate**](PullRequestStatusesApi.md#pullRequestStatusesCreate) | **POST** /{organization}/{project}/_apis/git/repositories/{repositoryId}/pullRequests/{pullRequestId}/statuses | 
[**pullRequestStatusesDelete**](PullRequestStatusesApi.md#pullRequestStatusesDelete) | **DELETE** /{organization}/{project}/_apis/git/repositories/{repositoryId}/pullRequests/{pullRequestId}/statuses/{statusId} | 
[**pullRequestStatusesGet**](PullRequestStatusesApi.md#pullRequestStatusesGet) | **GET** /{organization}/{project}/_apis/git/repositories/{repositoryId}/pullRequests/{pullRequestId}/statuses/{statusId} | 
[**pullRequestStatusesList**](PullRequestStatusesApi.md#pullRequestStatusesList) | **GET** /{organization}/{project}/_apis/git/repositories/{repositoryId}/pullRequests/{pullRequestId}/statuses | 
[**pullRequestStatusesUpdate**](PullRequestStatusesApi.md#pullRequestStatusesUpdate) | **PATCH** /{organization}/{project}/_apis/git/repositories/{repositoryId}/pullRequests/{pullRequestId}/statuses | 


# **pullRequestStatusesCreate**
> \FrankHouweling\AzureDevOpsClient\Git\Model\GitPullRequestStatus pullRequestStatusesCreate($organization, $body, $repositoryId, $pullRequestId, $project, $apiVersion)



Create a pull request status.  The only required field for the status is `Context.Name` that uniquely identifies the status. Note that you can specify iterationId in the request body to post the status on the iteration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\PullRequestStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Git\Model\GitPullRequestStatus(); // \FrankHouweling\AzureDevOpsClient\Git\Model\GitPullRequestStatus | Pull request status to create.
$repositoryId = "repositoryId_example"; // string | The repository ID of the pull request’s target branch.
$pullRequestId = 56; // int | ID of the pull request.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->pullRequestStatusesCreate($organization, $body, $repositoryId, $pullRequestId, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestStatusesApi->pullRequestStatusesCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\GitPullRequestStatus**](../Model/GitPullRequestStatus.md)| Pull request status to create. |
 **repositoryId** | **string**| The repository ID of the pull request’s target branch. |
 **pullRequestId** | **int**| ID of the pull request. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Git\Model\GitPullRequestStatus**](../Model/GitPullRequestStatus.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pullRequestStatusesDelete**
> pullRequestStatusesDelete($organization, $repositoryId, $pullRequestId, $statusId, $project, $apiVersion)



Delete pull request status.  You can remove multiple statuses in one call by using Update operation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\PullRequestStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$repositoryId = "repositoryId_example"; // string | The repository ID of the pull request’s target branch.
$pullRequestId = 56; // int | ID of the pull request.
$statusId = 56; // int | ID of the pull request status.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->pullRequestStatusesDelete($organization, $repositoryId, $pullRequestId, $statusId, $project, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestStatusesApi->pullRequestStatusesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **repositoryId** | **string**| The repository ID of the pull request’s target branch. |
 **pullRequestId** | **int**| ID of the pull request. |
 **statusId** | **int**| ID of the pull request status. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pullRequestStatusesGet**
> \FrankHouweling\AzureDevOpsClient\Git\Model\GitPullRequestStatus pullRequestStatusesGet($organization, $repositoryId, $pullRequestId, $statusId, $project, $apiVersion)



Get the specific pull request status by ID. The status ID is unique within the pull request across all iterations.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\PullRequestStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$repositoryId = "repositoryId_example"; // string | The repository ID of the pull request’s target branch.
$pullRequestId = 56; // int | ID of the pull request.
$statusId = 56; // int | ID of the pull request status.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->pullRequestStatusesGet($organization, $repositoryId, $pullRequestId, $statusId, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestStatusesApi->pullRequestStatusesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **repositoryId** | **string**| The repository ID of the pull request’s target branch. |
 **pullRequestId** | **int**| ID of the pull request. |
 **statusId** | **int**| ID of the pull request status. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Git\Model\GitPullRequestStatus**](../Model/GitPullRequestStatus.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pullRequestStatusesList**
> \FrankHouweling\AzureDevOpsClient\Git\Model\GitPullRequestStatus[] pullRequestStatusesList($organization, $repositoryId, $pullRequestId, $project, $apiVersion)



Get all the statuses associated with a pull request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\PullRequestStatusesApi(
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
    $result = $apiInstance->pullRequestStatusesList($organization, $repositoryId, $pullRequestId, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestStatusesApi->pullRequestStatusesList: ', $e->getMessage(), PHP_EOL;
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

[**\FrankHouweling\AzureDevOpsClient\Git\Model\GitPullRequestStatus[]**](../Model/GitPullRequestStatus.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pullRequestStatusesUpdate**
> pullRequestStatusesUpdate($organization, $body, $repositoryId, $pullRequestId, $project, $apiVersion)



Update pull request statuses collection. The only supported operation type is `remove`.  This operation allows to delete multiple statuses in one call. The path of the `remove` operation should refer to the ID of the pull request status. For example `path=\"/1\"` refers to the pull request status with ID 1.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\PullRequestStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Git\Model\JsonPatchDocument(); // \FrankHouweling\AzureDevOpsClient\Git\Model\JsonPatchDocument | Operations to apply to the pull request statuses in JSON Patch format.
$repositoryId = "repositoryId_example"; // string | The repository ID of the pull request’s target branch.
$pullRequestId = 56; // int | ID of the pull request.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->pullRequestStatusesUpdate($organization, $body, $repositoryId, $pullRequestId, $project, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling PullRequestStatusesApi->pullRequestStatusesUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\JsonPatchDocument**](../Model/JsonPatchDocument.md)| Operations to apply to the pull request statuses in JSON Patch format. |
 **repositoryId** | **string**| The repository ID of the pull request’s target branch. |
 **pullRequestId** | **int**| ID of the pull request. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

