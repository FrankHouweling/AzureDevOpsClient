# FrankHouweling\AzureDevOpsClient\Artifacts\ChangeTrackingApi

All URIs are relative to *https://feeds.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**changeTrackingGetFeedChange**](ChangeTrackingApi.md#changeTrackingGetFeedChange) | **GET** /{organization}/{project}/_apis/packaging/feedchanges/{feedId} | 
[**changeTrackingGetFeedChanges**](ChangeTrackingApi.md#changeTrackingGetFeedChanges) | **GET** /{organization}/{project}/_apis/packaging/feedchanges | 
[**changeTrackingGetPackageChanges**](ChangeTrackingApi.md#changeTrackingGetPackageChanges) | **GET** /{organization}/{project}/_apis/packaging/Feeds/{feedId}/packagechanges | 


# **changeTrackingGetFeedChange**
> \FrankHouweling\AzureDevOpsClient\Artifacts\Model\FeedChange changeTrackingGetFeedChange($organization, $feedId, $project, $apiVersion)



Query a feed to determine its current state.  The project parameter must be supplied if the feed was created in a project. If the feed is not associated with any project, omit the project parameter from the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Artifacts\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Artifacts\Api\ChangeTrackingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$feedId = "feedId_example"; // string | Name or ID of the feed.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->changeTrackingGetFeedChange($organization, $feedId, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChangeTrackingApi->changeTrackingGetFeedChange: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **feedId** | **string**| Name or ID of the feed. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\FeedChange**](../Model/FeedChange.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **changeTrackingGetFeedChanges**
> \FrankHouweling\AzureDevOpsClient\Artifacts\Model\FeedChangesResponse changeTrackingGetFeedChanges($organization, $project, $apiVersion, $includeDeleted, $continuationToken, $batchSize)



Query to determine which feeds have changed since the last call, tracked through the provided continuationToken. Only changes to a feed itself are returned and impact the continuationToken, not additions or alterations to packages within the feeds.  If the project parameter is present, gets all feed changes in the given project. If omitted, gets all feed changes in the organization.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Artifacts\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Artifacts\Api\ChangeTrackingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$includeDeleted = true; // bool | If true, get changes for all feeds including deleted feeds. The default value is false.
$continuationToken = 789; // int | A continuation token which acts as a bookmark to a previously retrieved change. This token allows the user to continue retrieving changes in batches, picking up where the previous batch left off. If specified, all the changes that occur strictly after the token will be returned. If not specified or 0, iteration will start with the first change.
$batchSize = 56; // int | Number of package changes to fetch. The default value is 1000. The maximum value is 2000.

try {
    $result = $apiInstance->changeTrackingGetFeedChanges($organization, $project, $apiVersion, $includeDeleted, $continuationToken, $batchSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChangeTrackingApi->changeTrackingGetFeedChanges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **includeDeleted** | **bool**| If true, get changes for all feeds including deleted feeds. The default value is false. | [optional]
 **continuationToken** | **int**| A continuation token which acts as a bookmark to a previously retrieved change. This token allows the user to continue retrieving changes in batches, picking up where the previous batch left off. If specified, all the changes that occur strictly after the token will be returned. If not specified or 0, iteration will start with the first change. | [optional]
 **batchSize** | **int**| Number of package changes to fetch. The default value is 1000. The maximum value is 2000. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\FeedChangesResponse**](../Model/FeedChangesResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **changeTrackingGetPackageChanges**
> \FrankHouweling\AzureDevOpsClient\Artifacts\Model\PackageChangesResponse changeTrackingGetPackageChanges($organization, $feedId, $project, $apiVersion, $continuationToken, $batchSize)



Get a batch of package changes made to a feed.  The changes returned are 'most recent change' so if an Add is followed by an Update before you begin enumerating, you'll only see one change in the batch.  While consuming batches using the continuation token, you may see changes to the same package version multiple times if they are happening as you enumerate.  The project parameter must be supplied if the feed was created in a project. If the feed is not associated with any project, omit the project parameter from the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Artifacts\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Artifacts\Api\ChangeTrackingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$feedId = "feedId_example"; // string | Name or Id of the feed.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$continuationToken = 789; // int | A continuation token which acts as a bookmark to a previously retrieved change. This token allows the user to continue retrieving changes in batches, picking up where the previous batch left off. If specified, all the changes that occur strictly after the token will be returned. If not specified or 0, iteration will start with the first change.
$batchSize = 56; // int | Number of package changes to fetch. The default value is 1000. The maximum value is 2000.

try {
    $result = $apiInstance->changeTrackingGetPackageChanges($organization, $feedId, $project, $apiVersion, $continuationToken, $batchSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChangeTrackingApi->changeTrackingGetPackageChanges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **feedId** | **string**| Name or Id of the feed. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **continuationToken** | **int**| A continuation token which acts as a bookmark to a previously retrieved change. This token allows the user to continue retrieving changes in batches, picking up where the previous batch left off. If specified, all the changes that occur strictly after the token will be returned. If not specified or 0, iteration will start with the first change. | [optional]
 **batchSize** | **int**| Number of package changes to fetch. The default value is 1000. The maximum value is 2000. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\PackageChangesResponse**](../Model/PackageChangesResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

