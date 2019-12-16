# FrankHouweling\AzureDevOpsClient\Wit\QueriesApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**queriesCreate**](QueriesApi.md#queriesCreate) | **POST** /{organization}/{project}/_apis/wit/queries/{query} | 
[**queriesDelete**](QueriesApi.md#queriesDelete) | **DELETE** /{organization}/{project}/_apis/wit/queries/{query} | 
[**queriesGet**](QueriesApi.md#queriesGet) | **GET** /{organization}/{project}/_apis/wit/queries/{query} | 
[**queriesGetQueriesBatch**](QueriesApi.md#queriesGetQueriesBatch) | **POST** /{organization}/{project}/_apis/wit/queriesbatch | 
[**queriesList**](QueriesApi.md#queriesList) | **GET** /{organization}/{project}/_apis/wit/queries | 
[**queriesUpdate**](QueriesApi.md#queriesUpdate) | **PATCH** /{organization}/{project}/_apis/wit/queries/{query} | 


# **queriesCreate**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\QueryHierarchyItem queriesCreate($organization, $body, $project, $query, $apiVersion, $validateWiqlOnly)



Creates a query, or moves a query.  Learn more about Work Item Query Language (WIQL) syntax [here](https://docs.microsoft.com/en-us/vsts/collaborate/wiql-syntax?toc=/vsts/work/track/toc.json&bc=/vsts/work/track/breadcrumb/toc.json&view=vsts).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\QueriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Wit\Model\QueryHierarchyItem(); // \FrankHouweling\AzureDevOpsClient\Wit\Model\QueryHierarchyItem | The query to create.
$project = "project_example"; // string | Project ID or project name
$query = "query_example"; // string | The parent id or path under which the query is to be created.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.
$validateWiqlOnly = true; // bool | If you only want to validate your WIQL query without actually creating one, set it to true. Default is false.

try {
    $result = $apiInstance->queriesCreate($organization, $body, $project, $query, $apiVersion, $validateWiqlOnly);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueriesApi->queriesCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Wit\Model\QueryHierarchyItem**](../Model/QueryHierarchyItem.md)| The query to create. |
 **project** | **string**| Project ID or project name |
 **query** | **string**| The parent id or path under which the query is to be created. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |
 **validateWiqlOnly** | **bool**| If you only want to validate your WIQL query without actually creating one, set it to true. Default is false. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\QueryHierarchyItem**](../Model/QueryHierarchyItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queriesDelete**
> queriesDelete($organization, $project, $query, $apiVersion)



Delete a query or a folder. This deletes any permission change on the deleted query or folder and any of its descendants if it is a folder. It is important to note that the deleted permission changes cannot be recovered upon undeleting the query or folder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\QueriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$query = "query_example"; // string | ID or path of the query or folder to delete.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $apiInstance->queriesDelete($organization, $project, $query, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling QueriesApi->queriesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **query** | **string**| ID or path of the query or folder to delete. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queriesGet**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\QueryHierarchyItem queriesGet($organization, $project, $query, $apiVersion, $expand, $depth, $includeDeleted)



Retrieves an individual query and its children

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\QueriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$query = "query_example"; // string | ID or path of the query.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.
$expand = "expand_example"; // string | Include the query string (wiql), clauses, query result columns, and sort options in the results.
$depth = 56; // int | In the folder of queries, return child queries and folders to this depth.
$includeDeleted = true; // bool | Include deleted queries and folders

try {
    $result = $apiInstance->queriesGet($organization, $project, $query, $apiVersion, $expand, $depth, $includeDeleted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueriesApi->queriesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **query** | **string**| ID or path of the query. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |
 **expand** | **string**| Include the query string (wiql), clauses, query result columns, and sort options in the results. | [optional]
 **depth** | **int**| In the folder of queries, return child queries and folders to this depth. | [optional]
 **includeDeleted** | **bool**| Include deleted queries and folders | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\QueryHierarchyItem**](../Model/QueryHierarchyItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queriesGetQueriesBatch**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\QueryHierarchyItem[] queriesGetQueriesBatch($organization, $body, $project, $apiVersion)



Gets a list of queries by ids (Maximum 1000)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\QueriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Wit\Model\QueryBatchGetRequest(); // \FrankHouweling\AzureDevOpsClient\Wit\Model\QueryBatchGetRequest | 
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->queriesGetQueriesBatch($organization, $body, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueriesApi->queriesGetQueriesBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Wit\Model\QueryBatchGetRequest**](../Model/QueryBatchGetRequest.md)|  |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\QueryHierarchyItem[]**](../Model/QueryHierarchyItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queriesList**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\QueryHierarchyItem[] queriesList($organization, $project, $apiVersion, $expand, $depth, $includeDeleted)



Gets the root queries and their children

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\QueriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.
$expand = "expand_example"; // string | Include the query string (wiql), clauses, query result columns, and sort options in the results.
$depth = 56; // int | In the folder of queries, return child queries and folders to this depth.
$includeDeleted = true; // bool | Include deleted queries and folders

try {
    $result = $apiInstance->queriesList($organization, $project, $apiVersion, $expand, $depth, $includeDeleted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueriesApi->queriesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |
 **expand** | **string**| Include the query string (wiql), clauses, query result columns, and sort options in the results. | [optional]
 **depth** | **int**| In the folder of queries, return child queries and folders to this depth. | [optional]
 **includeDeleted** | **bool**| Include deleted queries and folders | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\QueryHierarchyItem[]**](../Model/QueryHierarchyItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queriesUpdate**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\QueryHierarchyItem queriesUpdate($organization, $body, $project, $query, $apiVersion, $undeleteDescendants)



Update a query or a folder. This allows you to update, rename and move queries and folders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\QueriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Wit\Model\QueryHierarchyItem(); // \FrankHouweling\AzureDevOpsClient\Wit\Model\QueryHierarchyItem | The query to update.
$project = "project_example"; // string | Project ID or project name
$query = "query_example"; // string | The ID or path for the query to update.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.
$undeleteDescendants = true; // bool | Undelete the children of this folder. It is important to note that this will not bring back the permission changes that were previously applied to the descendants.

try {
    $result = $apiInstance->queriesUpdate($organization, $body, $project, $query, $apiVersion, $undeleteDescendants);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueriesApi->queriesUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Wit\Model\QueryHierarchyItem**](../Model/QueryHierarchyItem.md)| The query to update. |
 **project** | **string**| Project ID or project name |
 **query** | **string**| The ID or path for the query to update. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |
 **undeleteDescendants** | **bool**| Undelete the children of this folder. It is important to note that this will not bring back the permission changes that were previously applied to the descendants. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\QueryHierarchyItem**](../Model/QueryHierarchyItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

