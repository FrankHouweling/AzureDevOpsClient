# FrankHouweling\AzureDevOpsClient\DistributedTask\TaskgroupsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**taskgroupsAdd**](TaskgroupsApi.md#taskgroupsAdd) | **POST** /{organization}/{project}/_apis/distributedtask/taskgroups | 
[**taskgroupsDelete**](TaskgroupsApi.md#taskgroupsDelete) | **DELETE** /{organization}/{project}/_apis/distributedtask/taskgroups/{taskGroupId} | 
[**taskgroupsList**](TaskgroupsApi.md#taskgroupsList) | **GET** /{organization}/{project}/_apis/distributedtask/taskgroups/{taskGroupId} | 
[**taskgroupsUpdate**](TaskgroupsApi.md#taskgroupsUpdate) | **PUT** /{organization}/{project}/_apis/distributedtask/taskgroups/{taskGroupId} | 


# **taskgroupsAdd**
> \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskGroup taskgroupsAdd($organization, $body, $project, $apiVersion)



Create a task group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\DistributedTask\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\DistributedTask\Api\TaskgroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskGroupCreateParameter(); // \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskGroupCreateParameter | Task group object to create.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->taskgroupsAdd($organization, $body, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskgroupsApi->taskgroupsAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskGroupCreateParameter**](../Model/TaskGroupCreateParameter.md)| Task group object to create. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskGroup**](../Model/TaskGroup.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskgroupsDelete**
> taskgroupsDelete($organization, $project, $taskGroupId, $apiVersion, $comment)



Delete a task group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\DistributedTask\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\DistributedTask\Api\TaskgroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$taskGroupId = "taskGroupId_example"; // string | Id of the task group to be deleted.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$comment = "comment_example"; // string | Comments to delete.

try {
    $apiInstance->taskgroupsDelete($organization, $project, $taskGroupId, $apiVersion, $comment);
} catch (Exception $e) {
    echo 'Exception when calling TaskgroupsApi->taskgroupsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **taskGroupId** | [**string**](../Model/.md)| Id of the task group to be deleted. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **comment** | **string**| Comments to delete. | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskgroupsList**
> \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskGroup[] taskgroupsList($organization, $project, $taskGroupId, $apiVersion, $expanded, $taskIdFilter, $deleted, $top, $continuationToken, $queryOrder)



List task groups.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\DistributedTask\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\DistributedTask\Api\TaskgroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$taskGroupId = "taskGroupId_example"; // string | Id of the task group.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$expanded = true; // bool | 'true' to recursively expand task groups. Default is 'false'.
$taskIdFilter = "taskIdFilter_example"; // string | Guid of the taskId to filter.
$deleted = true; // bool | 'true'to include deleted task groups. Default is 'false'.
$top = 56; // int | Number of task groups to get.
$continuationToken = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Gets the task groups after the continuation token provided.
$queryOrder = "queryOrder_example"; // string | Gets the results in the defined order. Default is 'CreatedOnDescending'.

try {
    $result = $apiInstance->taskgroupsList($organization, $project, $taskGroupId, $apiVersion, $expanded, $taskIdFilter, $deleted, $top, $continuationToken, $queryOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskgroupsApi->taskgroupsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **taskGroupId** | [**string**](../Model/.md)| Id of the task group. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **expanded** | **bool**| &#39;true&#39; to recursively expand task groups. Default is &#39;false&#39;. | [optional]
 **taskIdFilter** | [**string**](../Model/.md)| Guid of the taskId to filter. | [optional]
 **deleted** | **bool**| &#39;true&#39;to include deleted task groups. Default is &#39;false&#39;. | [optional]
 **top** | **int**| Number of task groups to get. | [optional]
 **continuationToken** | **\DateTime**| Gets the task groups after the continuation token provided. | [optional]
 **queryOrder** | **string**| Gets the results in the defined order. Default is &#39;CreatedOnDescending&#39;. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskGroup[]**](../Model/TaskGroup.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskgroupsUpdate**
> \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskGroup taskgroupsUpdate($organization, $body, $project, $taskGroupId, $apiVersion)



Update a task group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\DistributedTask\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\DistributedTask\Api\TaskgroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskGroupUpdateParameter(); // \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskGroupUpdateParameter | Task group to update.
$project = "project_example"; // string | Project ID or project name
$taskGroupId = "taskGroupId_example"; // string | Id of the task group to update.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->taskgroupsUpdate($organization, $body, $project, $taskGroupId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskgroupsApi->taskgroupsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskGroupUpdateParameter**](../Model/TaskGroupUpdateParameter.md)| Task group to update. |
 **project** | **string**| Project ID or project name |
 **taskGroupId** | [**string**](../Model/.md)| Id of the task group to update. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskGroup**](../Model/TaskGroup.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

