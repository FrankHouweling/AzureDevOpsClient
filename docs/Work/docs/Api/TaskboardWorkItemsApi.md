# FrankHouweling\AzureDevOpsClient\Work\TaskboardWorkItemsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**taskboardWorkItemsList**](TaskboardWorkItemsApi.md#taskboardWorkItemsList) | **GET** /{organization}/{project}/{team}/_apis/work/taskboardworkitems/{iterationId} | 
[**taskboardWorkItemsUpdate**](TaskboardWorkItemsApi.md#taskboardWorkItemsUpdate) | **PATCH** /{organization}/{project}/{team}/_apis/work/taskboardworkitems/{iterationId}/{workItemId} | 


# **taskboardWorkItemsList**
> \FrankHouweling\AzureDevOpsClient\Work\Model\TaskboardWorkItemColumn[] taskboardWorkItemsList($organization, $project, $team, $iterationId, $apiVersion)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Work\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Work\Api\TaskboardWorkItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$team = "team_example"; // string | Team ID or team name
$iterationId = "iterationId_example"; // string | 
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->taskboardWorkItemsList($organization, $project, $team, $iterationId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskboardWorkItemsApi->taskboardWorkItemsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **team** | **string**| Team ID or team name |
 **iterationId** | [**string**](../Model/.md)|  |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Work\Model\TaskboardWorkItemColumn[]**](../Model/TaskboardWorkItemColumn.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskboardWorkItemsUpdate**
> taskboardWorkItemsUpdate($organization, $body, $project, $team, $iterationId, $workItemId, $apiVersion)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Work\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Work\Api\TaskboardWorkItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Work\Model\UpdateTaskboardWorkItemColumn(); // \FrankHouweling\AzureDevOpsClient\Work\Model\UpdateTaskboardWorkItemColumn | 
$project = "project_example"; // string | Project ID or project name
$team = "team_example"; // string | Team ID or team name
$iterationId = "iterationId_example"; // string | 
$workItemId = 56; // int | 
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->taskboardWorkItemsUpdate($organization, $body, $project, $team, $iterationId, $workItemId, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling TaskboardWorkItemsApi->taskboardWorkItemsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Work\Model\UpdateTaskboardWorkItemColumn**](../Model/UpdateTaskboardWorkItemColumn.md)|  |
 **project** | **string**| Project ID or project name |
 **team** | **string**| Team ID or team name |
 **iterationId** | [**string**](../Model/.md)|  |
 **workItemId** | **int**|  |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

