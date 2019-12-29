# FrankHouweling\AzureDevOpsClient\Wit\WorkItemsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**workItemsCreate**](WorkItemsApi.md#workItemsCreate) | **POST** /{organization}/{project}/_apis/wit/workitems/${type} | 
[**workItemsDelete**](WorkItemsApi.md#workItemsDelete) | **DELETE** /{organization}/{project}/_apis/wit/workitems/{id} | 
[**workItemsGetWorkItem**](WorkItemsApi.md#workItemsGetWorkItem) | **GET** /{organization}/{project}/_apis/wit/workitems/{id} | 
[**workItemsGetWorkItemTemplate**](WorkItemsApi.md#workItemsGetWorkItemTemplate) | **GET** /{organization}/{project}/_apis/wit/workitems/${type} | 
[**workItemsGetWorkItemsBatch**](WorkItemsApi.md#workItemsGetWorkItemsBatch) | **POST** /{organization}/{project}/_apis/wit/workitemsbatch | 
[**workItemsList**](WorkItemsApi.md#workItemsList) | **GET** /{organization}/{project}/_apis/wit/workitems | 
[**workItemsUpdate**](WorkItemsApi.md#workItemsUpdate) | **PATCH** /{organization}/{project}/_apis/wit/workitems/{id} | 


# **workItemsCreate**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItem workItemsCreate($organization, $body, $project, $type, $apiVersion, $validateOnly, $bypassRules, $suppressNotifications, $expand)



Creates a single work item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\WorkItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Wit\Model\JsonPatchDocument(); // \FrankHouweling\AzureDevOpsClient\Wit\Model\JsonPatchDocument | The JSON Patch document representing the work item
$project = "project_example"; // string | Project ID or project name
$type = "type_example"; // string | The work item type of the work item to create
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.
$validateOnly = true; // bool | Indicate if you only want to validate the changes without saving the work item
$bypassRules = true; // bool | Do not enforce the work item type rules on this update
$suppressNotifications = true; // bool | Do not fire any notifications for this change
$expand = "expand_example"; // string | The expand parameters for work item attributes. Possible options are { None, Relations, Fields, Links, All }.

try {
    $result = $apiInstance->workItemsCreate($organization, $body, $project, $type, $apiVersion, $validateOnly, $bypassRules, $suppressNotifications, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkItemsApi->workItemsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Wit\Model\JsonPatchDocument**](../Model/JsonPatchDocument.md)| The JSON Patch document representing the work item |
 **project** | **string**| Project ID or project name |
 **type** | **string**| The work item type of the work item to create |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |
 **validateOnly** | **bool**| Indicate if you only want to validate the changes without saving the work item | [optional]
 **bypassRules** | **bool**| Do not enforce the work item type rules on this update | [optional]
 **suppressNotifications** | **bool**| Do not fire any notifications for this change | [optional]
 **expand** | **string**| The expand parameters for work item attributes. Possible options are { None, Relations, Fields, Links, All }. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItem**](../Model/WorkItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **workItemsDelete**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemDelete workItemsDelete($organization, $id, $project, $apiVersion, $destroy)



Deletes the specified work item and sends it to the Recycle Bin, so that it can be restored back, if required. Optionally, if the destroy parameter has been set to true, it destroys the work item permanently. WARNING: If the destroy parameter is set to true, work items deleted by this command will NOT go to recycle-bin and there is no way to restore/recover them after deletion. It is recommended NOT to use this parameter. If you do, please use this parameter with extreme caution.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\WorkItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$id = 56; // int | ID of the work item to be deleted
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.
$destroy = true; // bool | Optional parameter, if set to true, the work item is deleted permanently. Please note: the destroy action is PERMANENT and cannot be undone.

try {
    $result = $apiInstance->workItemsDelete($organization, $id, $project, $apiVersion, $destroy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkItemsApi->workItemsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **id** | **int**| ID of the work item to be deleted |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |
 **destroy** | **bool**| Optional parameter, if set to true, the work item is deleted permanently. Please note: the destroy action is PERMANENT and cannot be undone. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemDelete**](../Model/WorkItemDelete.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **workItemsGetWorkItem**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItem workItemsGetWorkItem($organization, $id, $project, $apiVersion, $fields, $asOf, $expand)



Returns a single work item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\WorkItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$id = 56; // int | The work item id
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.
$fields = "fields_example"; // string | Comma-separated list of requested fields
$asOf = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | AsOf UTC date time string
$expand = "expand_example"; // string | The expand parameters for work item attributes. Possible options are { None, Relations, Fields, Links, All }.

try {
    $result = $apiInstance->workItemsGetWorkItem($organization, $id, $project, $apiVersion, $fields, $asOf, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkItemsApi->workItemsGetWorkItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **id** | **int**| The work item id |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |
 **fields** | **string**| Comma-separated list of requested fields | [optional]
 **asOf** | **\DateTime**| AsOf UTC date time string | [optional]
 **expand** | **string**| The expand parameters for work item attributes. Possible options are { None, Relations, Fields, Links, All }. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItem**](../Model/WorkItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **workItemsGetWorkItemTemplate**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItem workItemsGetWorkItemTemplate($organization, $project, $type, $apiVersion, $fields, $asOf, $expand)



Returns a single work item from a template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\WorkItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$type = "type_example"; // string | The work item type name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.
$fields = "fields_example"; // string | Comma-separated list of requested fields
$asOf = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | AsOf UTC date time string
$expand = "expand_example"; // string | The expand parameters for work item attributes. Possible options are { None, Relations, Fields, Links, All }.

try {
    $result = $apiInstance->workItemsGetWorkItemTemplate($organization, $project, $type, $apiVersion, $fields, $asOf, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkItemsApi->workItemsGetWorkItemTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **type** | **string**| The work item type name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |
 **fields** | **string**| Comma-separated list of requested fields | [optional]
 **asOf** | **\DateTime**| AsOf UTC date time string | [optional]
 **expand** | **string**| The expand parameters for work item attributes. Possible options are { None, Relations, Fields, Links, All }. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItem**](../Model/WorkItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **workItemsGetWorkItemsBatch**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItem[] workItemsGetWorkItemsBatch($organization, $body, $project, $apiVersion)



Gets work items for a list of work item ids (Maximum 200)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\WorkItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemBatchGetRequest(); // \FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemBatchGetRequest | 
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->workItemsGetWorkItemsBatch($organization, $body, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkItemsApi->workItemsGetWorkItemsBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemBatchGetRequest**](../Model/WorkItemBatchGetRequest.md)|  |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItem[]**](../Model/WorkItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **workItemsList**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItem[] workItemsList($organization, $ids, $project, $apiVersion, $fields, $asOf, $expand, $errorPolicy)



Returns a list of work items (Maximum 200)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\WorkItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$ids = "ids_example"; // string | The comma-separated list of requested work item ids. (Maximum 200 ids allowed).
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.
$fields = "fields_example"; // string | Comma-separated list of requested fields
$asOf = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | AsOf UTC date time string
$expand = "expand_example"; // string | The expand parameters for work item attributes. Possible options are { None, Relations, Fields, Links, All }.
$errorPolicy = "errorPolicy_example"; // string | The flag to control error policy in a bulk get work items request. Possible options are {Fail, Omit}.

try {
    $result = $apiInstance->workItemsList($organization, $ids, $project, $apiVersion, $fields, $asOf, $expand, $errorPolicy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkItemsApi->workItemsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **ids** | **string**| The comma-separated list of requested work item ids. (Maximum 200 ids allowed). |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |
 **fields** | **string**| Comma-separated list of requested fields | [optional]
 **asOf** | **\DateTime**| AsOf UTC date time string | [optional]
 **expand** | **string**| The expand parameters for work item attributes. Possible options are { None, Relations, Fields, Links, All }. | [optional]
 **errorPolicy** | **string**| The flag to control error policy in a bulk get work items request. Possible options are {Fail, Omit}. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItem[]**](../Model/WorkItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **workItemsUpdate**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItem workItemsUpdate($organization, $body, $id, $project, $apiVersion, $validateOnly, $bypassRules, $suppressNotifications, $expand)



Updates a single work item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\WorkItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Wit\Model\JsonPatchDocument(); // \FrankHouweling\AzureDevOpsClient\Wit\Model\JsonPatchDocument | The JSON Patch document representing the update
$id = 56; // int | The id of the work item to update
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.
$validateOnly = true; // bool | Indicate if you only want to validate the changes without saving the work item
$bypassRules = true; // bool | Do not enforce the work item type rules on this update
$suppressNotifications = true; // bool | Do not fire any notifications for this change
$expand = "expand_example"; // string | The expand parameters for work item attributes. Possible options are { None, Relations, Fields, Links, All }.

try {
    $result = $apiInstance->workItemsUpdate($organization, $body, $id, $project, $apiVersion, $validateOnly, $bypassRules, $suppressNotifications, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkItemsApi->workItemsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Wit\Model\JsonPatchDocument**](../Model/JsonPatchDocument.md)| The JSON Patch document representing the update |
 **id** | **int**| The id of the work item to update |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |
 **validateOnly** | **bool**| Indicate if you only want to validate the changes without saving the work item | [optional]
 **bypassRules** | **bool**| Do not enforce the work item type rules on this update | [optional]
 **suppressNotifications** | **bool**| Do not fire any notifications for this change | [optional]
 **expand** | **string**| The expand parameters for work item attributes. Possible options are { None, Relations, Fields, Links, All }. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItem**](../Model/WorkItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

