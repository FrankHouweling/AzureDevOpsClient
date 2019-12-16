# AzureDevOpsClient\Git\StatusesApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**statusesCreate**](StatusesApi.md#statusesCreate) | **POST** /{organization}/{project}/_apis/git/repositories/{repositoryId}/commits/{commitId}/statuses | 
[**statusesList**](StatusesApi.md#statusesList) | **GET** /{organization}/{project}/_apis/git/repositories/{repositoryId}/commits/{commitId}/statuses | 


# **statusesCreate**
> \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitStatus statusesCreate($organization, $body, $commitId, $repositoryId, $project, $apiVersion)



Create Git commit status.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Git\Api\StatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitStatus(); // \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitStatus | Git commit status object to create.
$commitId = "commitId_example"; // string | ID of the Git commit.
$repositoryId = "repositoryId_example"; // string | ID of the repository.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->statusesCreate($organization, $body, $commitId, $repositoryId, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusesApi->statusesCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitStatus**](../Model/GitStatus.md)| Git commit status object to create. |
 **commitId** | **string**| ID of the Git commit. |
 **repositoryId** | **string**| ID of the repository. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitStatus**](../Model/GitStatus.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **statusesList**
> \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitStatus[] statusesList($organization, $commitId, $repositoryId, $project, $apiVersion, $top, $skip, $latestOnly)



Get statuses associated with the Git commit.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Git\Api\StatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$commitId = "commitId_example"; // string | ID of the Git commit.
$repositoryId = "repositoryId_example"; // string | ID of the repository.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$top = 56; // int | Optional. The number of statuses to retrieve. Default is 1000.
$skip = 56; // int | Optional. The number of statuses to ignore. Default is 0. For example, to retrieve results 101-150, set top to 50 and skip to 100.
$latestOnly = true; // bool | The flag indicates whether to get only latest statuses grouped by `Context.Name` and `Context.Genre`.

try {
    $result = $apiInstance->statusesList($organization, $commitId, $repositoryId, $project, $apiVersion, $top, $skip, $latestOnly);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusesApi->statusesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **commitId** | **string**| ID of the Git commit. |
 **repositoryId** | **string**| ID of the repository. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **top** | **int**| Optional. The number of statuses to retrieve. Default is 1000. | [optional]
 **skip** | **int**| Optional. The number of statuses to ignore. Default is 0. For example, to retrieve results 101-150, set top to 50 and skip to 100. | [optional]
 **latestOnly** | **bool**| The flag indicates whether to get only latest statuses grouped by &#x60;Context.Name&#x60; and &#x60;Context.Genre&#x60;. | [optional]

### Return type

[**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitStatus[]**](../Model/GitStatus.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

