# FrankHouweling\AzureDevOpsClient\Tfvc\ChangesetsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**changesetsCreate**](ChangesetsApi.md#changesetsCreate) | **POST** /{organization}/{project}/_apis/tfvc/changesets | 
[**changesetsGet**](ChangesetsApi.md#changesetsGet) | **GET** /{organization}/{project}/_apis/tfvc/changesets/{id} | 
[**changesetsGetBatchedChangesets**](ChangesetsApi.md#changesetsGetBatchedChangesets) | **POST** /{organization}/_apis/tfvc/changesetsbatch | 
[**changesetsGetChangesetChanges**](ChangesetsApi.md#changesetsGetChangesetChanges) | **GET** /{organization}/_apis/tfvc/changesets/{id}/changes | 
[**changesetsGetChangesetWorkItems**](ChangesetsApi.md#changesetsGetChangesetWorkItems) | **GET** /{organization}/_apis/tfvc/changesets/{id}/workItems | 
[**changesetsGetChangesets**](ChangesetsApi.md#changesetsGetChangesets) | **GET** /{organization}/{project}/_apis/tfvc/changesets | 


# **changesetsCreate**
> \FrankHouweling\AzureDevOpsClient\Tfvc\Model\TfvcChangesetRef changesetsCreate($organization, $body, $project, $apiVersion)



Create a new changeset.  Accepts TfvcChangeset as JSON body

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Tfvc\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Tfvc\Api\ChangesetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Tfvc\Model\TfvcChangeset(); // \FrankHouweling\AzureDevOpsClient\Tfvc\Model\TfvcChangeset | 
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.

try {
    $result = $apiInstance->changesetsCreate($organization, $body, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChangesetsApi->changesetsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Tfvc\Model\TfvcChangeset**](../Model/TfvcChangeset.md)|  |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Tfvc\Model\TfvcChangesetRef**](../Model/TfvcChangesetRef.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **changesetsGet**
> \FrankHouweling\AzureDevOpsClient\Tfvc\Model\TfvcChangeset changesetsGet($organization, $id, $project, $apiVersion, $maxChangeCount, $includeDetails, $includeWorkItems, $maxCommentLength, $includeSourceRename, $skip, $top, $orderby, $searchCriteriaAuthor, $searchCriteriaFollowRenames, $searchCriteriaFromDate, $searchCriteriaFromId, $searchCriteriaIncludeLinks, $searchCriteriaItemPath, $searchCriteriaMappings, $searchCriteriaToDate, $searchCriteriaToId)



Retrieve a Tfvc Changeset

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Tfvc\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Tfvc\Api\ChangesetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$id = 56; // int | Changeset Id to retrieve.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.
$maxChangeCount = 56; // int | Number of changes to return (maximum 100 changes) Default: 0
$includeDetails = true; // bool | Include policy details and check-in notes in the response. Default: false
$includeWorkItems = true; // bool | Include workitems. Default: false
$maxCommentLength = 56; // int | Include details about associated work items in the response. Default: null
$includeSourceRename = true; // bool | Include renames.  Default: false
$skip = 56; // int | Number of results to skip. Default: null
$top = 56; // int | The maximum number of results to return. Default: null
$orderby = "orderby_example"; // string | Results are sorted by ID in descending order by default. Use id asc to sort by ID in ascending order.
$searchCriteriaAuthor = "searchCriteriaAuthor_example"; // string | Alias or display name of user who made the changes.
$searchCriteriaFollowRenames = true; // bool | Whether or not to follow renames for the given item being queried.
$searchCriteriaFromDate = "searchCriteriaFromDate_example"; // string | If provided, only include changesets created after this date (string).
$searchCriteriaFromId = 56; // int | If provided, only include changesets after this changesetID.
$searchCriteriaIncludeLinks = true; // bool | Whether to include the _links field on the shallow references.
$searchCriteriaItemPath = "searchCriteriaItemPath_example"; // string | Path of item to search under.
$searchCriteriaMappings = new \stdClass; // object | Following criteria available (.itemPath, .version, .versionType, .versionOption, .author, .fromId, .toId, .fromDate, .toDate) Default: null
$searchCriteriaToDate = "searchCriteriaToDate_example"; // string | If provided, only include changesets created before this date (string).
$searchCriteriaToId = 56; // int | If provided, a version descriptor for the latest change list to include.

try {
    $result = $apiInstance->changesetsGet($organization, $id, $project, $apiVersion, $maxChangeCount, $includeDetails, $includeWorkItems, $maxCommentLength, $includeSourceRename, $skip, $top, $orderby, $searchCriteriaAuthor, $searchCriteriaFollowRenames, $searchCriteriaFromDate, $searchCriteriaFromId, $searchCriteriaIncludeLinks, $searchCriteriaItemPath, $searchCriteriaMappings, $searchCriteriaToDate, $searchCriteriaToId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChangesetsApi->changesetsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **id** | **int**| Changeset Id to retrieve. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |
 **maxChangeCount** | **int**| Number of changes to return (maximum 100 changes) Default: 0 | [optional]
 **includeDetails** | **bool**| Include policy details and check-in notes in the response. Default: false | [optional]
 **includeWorkItems** | **bool**| Include workitems. Default: false | [optional]
 **maxCommentLength** | **int**| Include details about associated work items in the response. Default: null | [optional]
 **includeSourceRename** | **bool**| Include renames.  Default: false | [optional]
 **skip** | **int**| Number of results to skip. Default: null | [optional]
 **top** | **int**| The maximum number of results to return. Default: null | [optional]
 **orderby** | **string**| Results are sorted by ID in descending order by default. Use id asc to sort by ID in ascending order. | [optional]
 **searchCriteriaAuthor** | **string**| Alias or display name of user who made the changes. | [optional]
 **searchCriteriaFollowRenames** | **bool**| Whether or not to follow renames for the given item being queried. | [optional]
 **searchCriteriaFromDate** | **string**| If provided, only include changesets created after this date (string). | [optional]
 **searchCriteriaFromId** | **int**| If provided, only include changesets after this changesetID. | [optional]
 **searchCriteriaIncludeLinks** | **bool**| Whether to include the _links field on the shallow references. | [optional]
 **searchCriteriaItemPath** | **string**| Path of item to search under. | [optional]
 **searchCriteriaMappings** | [**object**](../Model/.md)| Following criteria available (.itemPath, .version, .versionType, .versionOption, .author, .fromId, .toId, .fromDate, .toDate) Default: null | [optional]
 **searchCriteriaToDate** | **string**| If provided, only include changesets created before this date (string). | [optional]
 **searchCriteriaToId** | **int**| If provided, a version descriptor for the latest change list to include. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Tfvc\Model\TfvcChangeset**](../Model/TfvcChangeset.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **changesetsGetBatchedChangesets**
> \FrankHouweling\AzureDevOpsClient\Tfvc\Model\TfvcChangesetRef[] changesetsGetBatchedChangesets($organization, $body, $apiVersion)



Returns changesets for a given list of changeset Ids.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Tfvc\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Tfvc\Api\ChangesetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Tfvc\Model\TfvcChangesetsRequestData(); // \FrankHouweling\AzureDevOpsClient\Tfvc\Model\TfvcChangesetsRequestData | List of changeset IDs.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->changesetsGetBatchedChangesets($organization, $body, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChangesetsApi->changesetsGetBatchedChangesets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Tfvc\Model\TfvcChangesetsRequestData**](../Model/TfvcChangesetsRequestData.md)| List of changeset IDs. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Tfvc\Model\TfvcChangesetRef[]**](../Model/TfvcChangesetRef.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **changesetsGetChangesetChanges**
> \FrankHouweling\AzureDevOpsClient\Tfvc\Model\TfvcChange[] changesetsGetChangesetChanges($organization, $id, $apiVersion, $skip, $top, $continuationToken)



Retrieve Tfvc changes for a given changeset.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Tfvc\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Tfvc\Api\ChangesetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$id = 56; // int | ID of the changeset. Default: null
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$skip = 56; // int | Number of results to skip. Default: null
$top = 56; // int | The maximum number of results to return. Default: null
$continuationToken = "continuationToken_example"; // string | Return the next page of results. Default: null

try {
    $result = $apiInstance->changesetsGetChangesetChanges($organization, $id, $apiVersion, $skip, $top, $continuationToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChangesetsApi->changesetsGetChangesetChanges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **id** | **int**| ID of the changeset. Default: null |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **skip** | **int**| Number of results to skip. Default: null | [optional]
 **top** | **int**| The maximum number of results to return. Default: null | [optional]
 **continuationToken** | **string**| Return the next page of results. Default: null | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Tfvc\Model\TfvcChange[]**](../Model/TfvcChange.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **changesetsGetChangesetWorkItems**
> \FrankHouweling\AzureDevOpsClient\Tfvc\Model\AssociatedWorkItem[] changesetsGetChangesetWorkItems($organization, $id, $apiVersion)



Retrieves the work items associated with a particular changeset.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Tfvc\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Tfvc\Api\ChangesetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$id = 56; // int | ID of the changeset.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->changesetsGetChangesetWorkItems($organization, $id, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChangesetsApi->changesetsGetChangesetWorkItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **id** | **int**| ID of the changeset. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Tfvc\Model\AssociatedWorkItem[]**](../Model/AssociatedWorkItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **changesetsGetChangesets**
> \FrankHouweling\AzureDevOpsClient\Tfvc\Model\TfvcChangesetRef[] changesetsGetChangesets($organization, $project, $apiVersion, $maxCommentLength, $skip, $top, $orderby, $searchCriteriaAuthor, $searchCriteriaFollowRenames, $searchCriteriaFromDate, $searchCriteriaFromId, $searchCriteriaIncludeLinks, $searchCriteriaItemPath, $searchCriteriaMappings, $searchCriteriaToDate, $searchCriteriaToId)



Retrieve Tfvc Changesets  Note: This is a new version of the GetChangesets API that doesn't expose the unneeded queryParams present in the 1.0 version of the API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Tfvc\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Tfvc\Api\ChangesetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.
$maxCommentLength = 56; // int | Include details about associated work items in the response. Default: null
$skip = 56; // int | Number of results to skip. Default: null
$top = 56; // int | The maximum number of results to return. Default: null
$orderby = "orderby_example"; // string | Results are sorted by ID in descending order by default. Use id asc to sort by ID in ascending order.
$searchCriteriaAuthor = "searchCriteriaAuthor_example"; // string | Alias or display name of user who made the changes.
$searchCriteriaFollowRenames = true; // bool | Whether or not to follow renames for the given item being queried.
$searchCriteriaFromDate = "searchCriteriaFromDate_example"; // string | If provided, only include changesets created after this date (string).
$searchCriteriaFromId = 56; // int | If provided, only include changesets after this changesetID.
$searchCriteriaIncludeLinks = true; // bool | Whether to include the _links field on the shallow references.
$searchCriteriaItemPath = "searchCriteriaItemPath_example"; // string | Path of item to search under.
$searchCriteriaMappings = new \stdClass; // object | Following criteria available (.itemPath, .version, .versionType, .versionOption, .author, .fromId, .toId, .fromDate, .toDate) Default: null
$searchCriteriaToDate = "searchCriteriaToDate_example"; // string | If provided, only include changesets created before this date (string).
$searchCriteriaToId = 56; // int | If provided, a version descriptor for the latest change list to include.

try {
    $result = $apiInstance->changesetsGetChangesets($organization, $project, $apiVersion, $maxCommentLength, $skip, $top, $orderby, $searchCriteriaAuthor, $searchCriteriaFollowRenames, $searchCriteriaFromDate, $searchCriteriaFromId, $searchCriteriaIncludeLinks, $searchCriteriaItemPath, $searchCriteriaMappings, $searchCriteriaToDate, $searchCriteriaToId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChangesetsApi->changesetsGetChangesets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |
 **maxCommentLength** | **int**| Include details about associated work items in the response. Default: null | [optional]
 **skip** | **int**| Number of results to skip. Default: null | [optional]
 **top** | **int**| The maximum number of results to return. Default: null | [optional]
 **orderby** | **string**| Results are sorted by ID in descending order by default. Use id asc to sort by ID in ascending order. | [optional]
 **searchCriteriaAuthor** | **string**| Alias or display name of user who made the changes. | [optional]
 **searchCriteriaFollowRenames** | **bool**| Whether or not to follow renames for the given item being queried. | [optional]
 **searchCriteriaFromDate** | **string**| If provided, only include changesets created after this date (string). | [optional]
 **searchCriteriaFromId** | **int**| If provided, only include changesets after this changesetID. | [optional]
 **searchCriteriaIncludeLinks** | **bool**| Whether to include the _links field on the shallow references. | [optional]
 **searchCriteriaItemPath** | **string**| Path of item to search under. | [optional]
 **searchCriteriaMappings** | [**object**](../Model/.md)| Following criteria available (.itemPath, .version, .versionType, .versionOption, .author, .fromId, .toId, .fromDate, .toDate) Default: null | [optional]
 **searchCriteriaToDate** | **string**| If provided, only include changesets created before this date (string). | [optional]
 **searchCriteriaToId** | **int**| If provided, a version descriptor for the latest change list to include. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Tfvc\Model\TfvcChangesetRef[]**](../Model/TfvcChangesetRef.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

