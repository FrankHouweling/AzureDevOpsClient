# FrankHouweling\AzureDevOpsClient\Artifacts\FeedManagementApi

All URIs are relative to *https://feeds.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**feedManagementCreateFeed**](FeedManagementApi.md#feedManagementCreateFeed) | **POST** /{organization}/{project}/_apis/packaging/feeds | 
[**feedManagementCreateFeedView**](FeedManagementApi.md#feedManagementCreateFeedView) | **POST** /{organization}/{project}/_apis/packaging/Feeds/{feedId}/views | 
[**feedManagementDeleteFeed**](FeedManagementApi.md#feedManagementDeleteFeed) | **DELETE** /{organization}/{project}/_apis/packaging/feeds/{feedId} | 
[**feedManagementDeleteFeedView**](FeedManagementApi.md#feedManagementDeleteFeedView) | **DELETE** /{organization}/{project}/_apis/packaging/Feeds/{feedId}/views/{viewId} | 
[**feedManagementGetFeed**](FeedManagementApi.md#feedManagementGetFeed) | **GET** /{organization}/{project}/_apis/packaging/feeds/{feedId} | 
[**feedManagementGetFeedPermissions**](FeedManagementApi.md#feedManagementGetFeedPermissions) | **GET** /{organization}/{project}/_apis/packaging/Feeds/{feedId}/permissions | 
[**feedManagementGetFeedView**](FeedManagementApi.md#feedManagementGetFeedView) | **GET** /{organization}/{project}/_apis/packaging/Feeds/{feedId}/views/{viewId} | 
[**feedManagementGetFeedViews**](FeedManagementApi.md#feedManagementGetFeedViews) | **GET** /{organization}/{project}/_apis/packaging/Feeds/{feedId}/views | 
[**feedManagementGetFeeds**](FeedManagementApi.md#feedManagementGetFeeds) | **GET** /{organization}/{project}/_apis/packaging/feeds | 
[**feedManagementSetFeedPermissions**](FeedManagementApi.md#feedManagementSetFeedPermissions) | **PATCH** /{organization}/{project}/_apis/packaging/Feeds/{feedId}/permissions | 
[**feedManagementUpdateFeed**](FeedManagementApi.md#feedManagementUpdateFeed) | **PATCH** /{organization}/{project}/_apis/packaging/feeds/{feedId} | 
[**feedManagementUpdateFeedView**](FeedManagementApi.md#feedManagementUpdateFeedView) | **PATCH** /{organization}/{project}/_apis/packaging/Feeds/{feedId}/views/{viewId} | 


# **feedManagementCreateFeed**
> \FrankHouweling\AzureDevOpsClient\Artifacts\Model\Feed feedManagementCreateFeed($organization, $body, $project, $apiVersion)



Create a feed, a container for various package types.  Feeds can be created in a project if the project parameter is included in the request url. If the project parameter is omitted, the feed will not be associated with a project and will be created at the organization level.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Artifacts\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Artifacts\Api\FeedManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Artifacts\Model\Feed(); // \FrankHouweling\AzureDevOpsClient\Artifacts\Model\Feed | A JSON object containing both required and optional attributes for the feed. Name is the only required value.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->feedManagementCreateFeed($organization, $body, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedManagementApi->feedManagementCreateFeed: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\Feed**](../Model/Feed.md)| A JSON object containing both required and optional attributes for the feed. Name is the only required value. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\Feed**](../Model/Feed.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **feedManagementCreateFeedView**
> \FrankHouweling\AzureDevOpsClient\Artifacts\Model\FeedView feedManagementCreateFeedView($organization, $body, $feedId, $project, $apiVersion)



Create a new view on the referenced feed.  The project parameter must be supplied if the feed was created in a project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Artifacts\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Artifacts\Api\FeedManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Artifacts\Model\FeedView(); // \FrankHouweling\AzureDevOpsClient\Artifacts\Model\FeedView | View to be created.
$feedId = "feedId_example"; // string | Name or Id of the feed.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->feedManagementCreateFeedView($organization, $body, $feedId, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedManagementApi->feedManagementCreateFeedView: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\FeedView**](../Model/FeedView.md)| View to be created. |
 **feedId** | **string**| Name or Id of the feed. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\FeedView**](../Model/FeedView.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **feedManagementDeleteFeed**
> feedManagementDeleteFeed($organization, $feedId, $project, $apiVersion)



Remove a feed and all its packages. The feed moves to the recycle bin and is reversible.  The project parameter must be supplied if the feed was created in a project. If the feed is not associated with any project, omit the project parameter from the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Artifacts\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Artifacts\Api\FeedManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$feedId = "feedId_example"; // string | Name or Id of the feed.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->feedManagementDeleteFeed($organization, $feedId, $project, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling FeedManagementApi->feedManagementDeleteFeed: ', $e->getMessage(), PHP_EOL;
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

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **feedManagementDeleteFeedView**
> feedManagementDeleteFeedView($organization, $feedId, $viewId, $project, $apiVersion)



Delete a feed view.  The project parameter must be supplied if the feed was created in a project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Artifacts\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Artifacts\Api\FeedManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$feedId = "feedId_example"; // string | Name or Id of the feed.
$viewId = "viewId_example"; // string | Name or Id of the view.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->feedManagementDeleteFeedView($organization, $feedId, $viewId, $project, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling FeedManagementApi->feedManagementDeleteFeedView: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **feedId** | **string**| Name or Id of the feed. |
 **viewId** | **string**| Name or Id of the view. |
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

# **feedManagementGetFeed**
> \FrankHouweling\AzureDevOpsClient\Artifacts\Model\Feed feedManagementGetFeed($organization, $feedId, $project, $apiVersion, $includeDeletedUpstreams)



Get the settings for a specific feed.  The project parameter must be supplied if the feed was created in a project. If the feed is not associated with any project, omit the project parameter from the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Artifacts\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Artifacts\Api\FeedManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$feedId = "feedId_example"; // string | Name or Id of the feed.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$includeDeletedUpstreams = true; // bool | Include upstreams that have been deleted in the response.

try {
    $result = $apiInstance->feedManagementGetFeed($organization, $feedId, $project, $apiVersion, $includeDeletedUpstreams);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedManagementApi->feedManagementGetFeed: ', $e->getMessage(), PHP_EOL;
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
 **includeDeletedUpstreams** | **bool**| Include upstreams that have been deleted in the response. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\Feed**](../Model/Feed.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **feedManagementGetFeedPermissions**
> \FrankHouweling\AzureDevOpsClient\Artifacts\Model\FeedPermission[] feedManagementGetFeedPermissions($organization, $feedId, $project, $apiVersion, $includeIds, $excludeInheritedPermissions, $identityDescriptor, $includeDeletedFeeds)



Get the permissions for a feed.  The project parameter must be supplied if the feed was created in a project. If the feed is not associated with any project, omit the project parameter from the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Artifacts\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Artifacts\Api\FeedManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$feedId = "feedId_example"; // string | Name or Id of the feed.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$includeIds = true; // bool | True to include user Ids in the response.  Default is false.
$excludeInheritedPermissions = true; // bool | True to only return explicitly set permissions on the feed.  Default is false.
$identityDescriptor = "identityDescriptor_example"; // string | Filter permissions to the provided identity.
$includeDeletedFeeds = true; // bool | If includeDeletedFeeds is true, then feedId must be specified by name and not by Guid.

try {
    $result = $apiInstance->feedManagementGetFeedPermissions($organization, $feedId, $project, $apiVersion, $includeIds, $excludeInheritedPermissions, $identityDescriptor, $includeDeletedFeeds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedManagementApi->feedManagementGetFeedPermissions: ', $e->getMessage(), PHP_EOL;
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
 **includeIds** | **bool**| True to include user Ids in the response.  Default is false. | [optional]
 **excludeInheritedPermissions** | **bool**| True to only return explicitly set permissions on the feed.  Default is false. | [optional]
 **identityDescriptor** | **string**| Filter permissions to the provided identity. | [optional]
 **includeDeletedFeeds** | **bool**| If includeDeletedFeeds is true, then feedId must be specified by name and not by Guid. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\FeedPermission[]**](../Model/FeedPermission.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **feedManagementGetFeedView**
> \FrankHouweling\AzureDevOpsClient\Artifacts\Model\FeedView feedManagementGetFeedView($organization, $feedId, $viewId, $project, $apiVersion)



Get a view by Id.  The project parameter must be supplied if the feed was created in a project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Artifacts\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Artifacts\Api\FeedManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$feedId = "feedId_example"; // string | Name or Id of the feed.
$viewId = "viewId_example"; // string | Name or Id of the view.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->feedManagementGetFeedView($organization, $feedId, $viewId, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedManagementApi->feedManagementGetFeedView: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **feedId** | **string**| Name or Id of the feed. |
 **viewId** | **string**| Name or Id of the view. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\FeedView**](../Model/FeedView.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **feedManagementGetFeedViews**
> \FrankHouweling\AzureDevOpsClient\Artifacts\Model\FeedView[] feedManagementGetFeedViews($organization, $feedId, $project, $apiVersion)



Get all views for a feed.  The project parameter must be supplied if the feed was created in a project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Artifacts\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Artifacts\Api\FeedManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$feedId = "feedId_example"; // string | Name or Id of the feed.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->feedManagementGetFeedViews($organization, $feedId, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedManagementApi->feedManagementGetFeedViews: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\FeedView[]**](../Model/FeedView.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **feedManagementGetFeeds**
> \FrankHouweling\AzureDevOpsClient\Artifacts\Model\Feed[] feedManagementGetFeeds($organization, $project, $apiVersion, $feedRole, $includeDeletedUpstreams)



Get all feeds in an account where you have the provided role access.  If the project parameter is present, gets all feeds in the given project. If omitted, gets all feeds in the organization.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Artifacts\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Artifacts\Api\FeedManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$feedRole = "feedRole_example"; // string | Filter by this role, either Administrator(4), Contributor(3), or Reader(2) level permissions.
$includeDeletedUpstreams = true; // bool | Include upstreams that have been deleted in the response.

try {
    $result = $apiInstance->feedManagementGetFeeds($organization, $project, $apiVersion, $feedRole, $includeDeletedUpstreams);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedManagementApi->feedManagementGetFeeds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **feedRole** | **string**| Filter by this role, either Administrator(4), Contributor(3), or Reader(2) level permissions. | [optional]
 **includeDeletedUpstreams** | **bool**| Include upstreams that have been deleted in the response. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\Feed[]**](../Model/Feed.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **feedManagementSetFeedPermissions**
> \FrankHouweling\AzureDevOpsClient\Artifacts\Model\FeedPermission[] feedManagementSetFeedPermissions($organization, $body, $feedId, $project, $apiVersion)



Update the permissions on a feed.  The project parameter must be supplied if the feed was created in a project. If the feed is not associated with any project, omit the project parameter from the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Artifacts\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Artifacts\Api\FeedManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = array(new \FrankHouweling\AzureDevOpsClient\Artifacts\Model\FeedPermission()); // \FrankHouweling\AzureDevOpsClient\Artifacts\Model\FeedPermission[] | Permissions to set.
$feedId = "feedId_example"; // string | Name or Id of the feed.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->feedManagementSetFeedPermissions($organization, $body, $feedId, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedManagementApi->feedManagementSetFeedPermissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\FeedPermission[]**](../Model/FeedPermission.md)| Permissions to set. |
 **feedId** | **string**| Name or Id of the feed. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\FeedPermission[]**](../Model/FeedPermission.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **feedManagementUpdateFeed**
> \FrankHouweling\AzureDevOpsClient\Artifacts\Model\Feed feedManagementUpdateFeed($organization, $body, $feedId, $project, $apiVersion)



Change the attributes of a feed.  The project parameter must be supplied if the feed was created in a project. If the feed is not associated with any project, omit the project parameter from the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Artifacts\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Artifacts\Api\FeedManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Artifacts\Model\FeedUpdate(); // \FrankHouweling\AzureDevOpsClient\Artifacts\Model\FeedUpdate | A JSON object containing the feed settings to be updated.
$feedId = "feedId_example"; // string | Name or Id of the feed.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->feedManagementUpdateFeed($organization, $body, $feedId, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedManagementApi->feedManagementUpdateFeed: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\FeedUpdate**](../Model/FeedUpdate.md)| A JSON object containing the feed settings to be updated. |
 **feedId** | **string**| Name or Id of the feed. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\Feed**](../Model/Feed.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **feedManagementUpdateFeedView**
> \FrankHouweling\AzureDevOpsClient\Artifacts\Model\FeedView feedManagementUpdateFeedView($organization, $body, $feedId, $viewId, $project, $apiVersion)



Update a view.  The project parameter must be supplied if the feed was created in a project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Artifacts\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Artifacts\Api\FeedManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Artifacts\Model\FeedView(); // \FrankHouweling\AzureDevOpsClient\Artifacts\Model\FeedView | New settings to apply to the specified view.
$feedId = "feedId_example"; // string | Name or Id of the feed.
$viewId = "viewId_example"; // string | Name or Id of the view.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->feedManagementUpdateFeedView($organization, $body, $feedId, $viewId, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedManagementApi->feedManagementUpdateFeedView: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\FeedView**](../Model/FeedView.md)| New settings to apply to the specified view. |
 **feedId** | **string**| Name or Id of the feed. |
 **viewId** | **string**| Name or Id of the view. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\FeedView**](../Model/FeedView.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

