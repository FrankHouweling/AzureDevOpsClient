# FrankHouweling\AzureDevOpsClient\Work\BacklogsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**backlogsGetBacklog**](BacklogsApi.md#backlogsGetBacklog) | **GET** /{organization}/{project}/{team}/_apis/work/backlogs/{id} | 
[**backlogsGetBacklogLevelWorkItems**](BacklogsApi.md#backlogsGetBacklogLevelWorkItems) | **GET** /{organization}/{project}/{team}/_apis/work/backlogs/{backlogId}/workItems | 
[**backlogsList**](BacklogsApi.md#backlogsList) | **GET** /{organization}/{project}/{team}/_apis/work/backlogs | 


# **backlogsGetBacklog**
> \FrankHouweling\AzureDevOpsClient\Work\Model\BacklogLevelConfiguration backlogsGetBacklog($organization, $project, $team, $id, $apiVersion)



Get a backlog level

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Work\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Work\Api\BacklogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$team = "team_example"; // string | Team ID or team name
$id = "id_example"; // string | The id of the backlog level
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->backlogsGetBacklog($organization, $project, $team, $id, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BacklogsApi->backlogsGetBacklog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **team** | **string**| Team ID or team name |
 **id** | **string**| The id of the backlog level |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Work\Model\BacklogLevelConfiguration**](../Model/BacklogLevelConfiguration.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **backlogsGetBacklogLevelWorkItems**
> \FrankHouweling\AzureDevOpsClient\Work\Model\BacklogLevelWorkItems backlogsGetBacklogLevelWorkItems($organization, $project, $team, $backlogId, $apiVersion)



Get a list of work items within a backlog level

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Work\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Work\Api\BacklogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$team = "team_example"; // string | Team ID or team name
$backlogId = "backlogId_example"; // string | 
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->backlogsGetBacklogLevelWorkItems($organization, $project, $team, $backlogId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BacklogsApi->backlogsGetBacklogLevelWorkItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **team** | **string**| Team ID or team name |
 **backlogId** | **string**|  |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Work\Model\BacklogLevelWorkItems**](../Model/BacklogLevelWorkItems.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **backlogsList**
> \FrankHouweling\AzureDevOpsClient\Work\Model\BacklogLevelConfiguration[] backlogsList($organization, $project, $team, $apiVersion)



List all backlog levels

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Work\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Work\Api\BacklogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$team = "team_example"; // string | Team ID or team name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->backlogsList($organization, $project, $team, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BacklogsApi->backlogsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **team** | **string**| Team ID or team name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Work\Model\BacklogLevelConfiguration[]**](../Model/BacklogLevelConfiguration.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

