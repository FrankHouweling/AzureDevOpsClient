# FrankHouweling\AzureDevOpsClient\Build\BuildsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**buildsDelete**](BuildsApi.md#buildsDelete) | **DELETE** /{organization}/{project}/_apis/build/builds/{buildId} | 
[**buildsGet**](BuildsApi.md#buildsGet) | **GET** /{organization}/{project}/_apis/build/builds/{buildId} | 
[**buildsGetBuildChanges**](BuildsApi.md#buildsGetBuildChanges) | **GET** /{organization}/{project}/_apis/build/builds/{buildId}/changes | 
[**buildsGetBuildLog**](BuildsApi.md#buildsGetBuildLog) | **GET** /{organization}/{project}/_apis/build/builds/{buildId}/logs/{logId} | 
[**buildsGetBuildLogs**](BuildsApi.md#buildsGetBuildLogs) | **GET** /{organization}/{project}/_apis/build/builds/{buildId}/logs | 
[**buildsGetBuildWorkItemsRefs**](BuildsApi.md#buildsGetBuildWorkItemsRefs) | **GET** /{organization}/{project}/_apis/build/builds/{buildId}/workitems | 
[**buildsGetBuildWorkItemsRefsFromCommits**](BuildsApi.md#buildsGetBuildWorkItemsRefsFromCommits) | **POST** /{organization}/{project}/_apis/build/builds/{buildId}/workitems | 
[**buildsGetChangesBetweenBuilds**](BuildsApi.md#buildsGetChangesBetweenBuilds) | **GET** /{organization}/{project}/_apis/build/changes | 
[**buildsGetWorkItemsBetweenBuilds**](BuildsApi.md#buildsGetWorkItemsBetweenBuilds) | **GET** /{organization}/{project}/_apis/build/workitems | 
[**buildsList**](BuildsApi.md#buildsList) | **GET** /{organization}/{project}/_apis/build/builds | 
[**buildsQueue**](BuildsApi.md#buildsQueue) | **POST** /{organization}/{project}/_apis/build/builds | 
[**buildsUpdateBuild**](BuildsApi.md#buildsUpdateBuild) | **PATCH** /{organization}/{project}/_apis/build/builds/{buildId} | 
[**buildsUpdateBuilds**](BuildsApi.md#buildsUpdateBuilds) | **PATCH** /{organization}/{project}/_apis/build/builds | 


# **buildsDelete**
> buildsDelete($organization, $project, $buildId, $apiVersion)



Deletes a build.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Build\Api\BuildsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$buildId = 56; // int | The ID of the build.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.5' to use this version of the api.

try {
    $apiInstance->buildsDelete($organization, $project, $buildId, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling BuildsApi->buildsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **buildId** | **int**| The ID of the build. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.5&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **buildsGet**
> \FrankHouweling\AzureDevOpsClient\Build\Model\Build buildsGet($organization, $project, $buildId, $apiVersion, $propertyFilters)



Gets a build

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Build\Api\BuildsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$buildId = 56; // int | 
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.5' to use this version of the api.
$propertyFilters = "propertyFilters_example"; // string | 

try {
    $result = $apiInstance->buildsGet($organization, $project, $buildId, $apiVersion, $propertyFilters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildsApi->buildsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **buildId** | **int**|  |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.5&#39; to use this version of the api. |
 **propertyFilters** | **string**|  | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Build\Model\Build**](../Model/Build.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **buildsGetBuildChanges**
> \FrankHouweling\AzureDevOpsClient\Build\Model\Change[] buildsGetBuildChanges($organization, $project, $buildId, $apiVersion, $continuationToken, $top, $includeSourceChange)



Gets the changes associated with a build

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Build\Api\BuildsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$buildId = 56; // int | 
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.
$continuationToken = "continuationToken_example"; // string | 
$top = 56; // int | The maximum number of changes to return
$includeSourceChange = true; // bool | 

try {
    $result = $apiInstance->buildsGetBuildChanges($organization, $project, $buildId, $apiVersion, $continuationToken, $top, $includeSourceChange);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildsApi->buildsGetBuildChanges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **buildId** | **int**|  |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |
 **continuationToken** | **string**|  | [optional]
 **top** | **int**| The maximum number of changes to return | [optional]
 **includeSourceChange** | **bool**|  | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Build\Model\Change[]**](../Model/Change.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **buildsGetBuildLog**
> string buildsGetBuildLog($organization, $project, $buildId, $logId, $apiVersion, $startLine, $endLine)



Gets an individual log file for a build.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Build\Api\BuildsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$buildId = 56; // int | The ID of the build.
$logId = 56; // int | The ID of the log file.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.
$startLine = 789; // int | The start line.
$endLine = 789; // int | The end line.

try {
    $result = $apiInstance->buildsGetBuildLog($organization, $project, $buildId, $logId, $apiVersion, $startLine, $endLine);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildsApi->buildsGetBuildLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **buildId** | **int**| The ID of the build. |
 **logId** | **int**| The ID of the log file. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |
 **startLine** | **int**| The start line. | [optional]
 **endLine** | **int**| The end line. | [optional]

### Return type

**string**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/zip, application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **buildsGetBuildLogs**
> \FrankHouweling\AzureDevOpsClient\Build\Model\BuildLog[] buildsGetBuildLogs($organization, $project, $buildId, $apiVersion)



Gets the logs for a build.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Build\Api\BuildsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$buildId = 56; // int | The ID of the build.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $result = $apiInstance->buildsGetBuildLogs($organization, $project, $buildId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildsApi->buildsGetBuildLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **buildId** | **int**| The ID of the build. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Build\Model\BuildLog[]**](../Model/BuildLog.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/zip, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **buildsGetBuildWorkItemsRefs**
> \FrankHouweling\AzureDevOpsClient\Build\Model\ResourceRef[] buildsGetBuildWorkItemsRefs($organization, $project, $buildId, $apiVersion, $top)



Gets the work items associated with a build.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Build\Api\BuildsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$buildId = 56; // int | The ID of the build.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.
$top = 56; // int | The maximum number of work items to return.

try {
    $result = $apiInstance->buildsGetBuildWorkItemsRefs($organization, $project, $buildId, $apiVersion, $top);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildsApi->buildsGetBuildWorkItemsRefs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **buildId** | **int**| The ID of the build. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |
 **top** | **int**| The maximum number of work items to return. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Build\Model\ResourceRef[]**](../Model/ResourceRef.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **buildsGetBuildWorkItemsRefsFromCommits**
> \FrankHouweling\AzureDevOpsClient\Build\Model\ResourceRef[] buildsGetBuildWorkItemsRefsFromCommits($organization, $body, $project, $buildId, $apiVersion, $top)



Gets the work items associated with a build, filtered to specific commits.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Build\Api\BuildsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = array(new \FrankHouweling\AzureDevOpsClient\Build\Model\string[]()); // string[] | A comma-delimited list of commit IDs.
$project = "project_example"; // string | Project ID or project name
$buildId = 56; // int | The ID of the build.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.
$top = 56; // int | The maximum number of work items to return, or the number of commits to consider if no commit IDs are specified.

try {
    $result = $apiInstance->buildsGetBuildWorkItemsRefsFromCommits($organization, $body, $project, $buildId, $apiVersion, $top);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildsApi->buildsGetBuildWorkItemsRefsFromCommits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | **string[]**| A comma-delimited list of commit IDs. |
 **project** | **string**| Project ID or project name |
 **buildId** | **int**| The ID of the build. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |
 **top** | **int**| The maximum number of work items to return, or the number of commits to consider if no commit IDs are specified. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Build\Model\ResourceRef[]**](../Model/ResourceRef.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **buildsGetChangesBetweenBuilds**
> \FrankHouweling\AzureDevOpsClient\Build\Model\Change[] buildsGetChangesBetweenBuilds($organization, $project, $apiVersion, $fromBuildId, $toBuildId, $top)



Gets the changes made to the repository between two given builds.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Build\Api\BuildsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.
$fromBuildId = 56; // int | The ID of the first build.
$toBuildId = 56; // int | The ID of the last build.
$top = 56; // int | The maximum number of changes to return.

try {
    $result = $apiInstance->buildsGetChangesBetweenBuilds($organization, $project, $apiVersion, $fromBuildId, $toBuildId, $top);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildsApi->buildsGetChangesBetweenBuilds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |
 **fromBuildId** | **int**| The ID of the first build. | [optional]
 **toBuildId** | **int**| The ID of the last build. | [optional]
 **top** | **int**| The maximum number of changes to return. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Build\Model\Change[]**](../Model/Change.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **buildsGetWorkItemsBetweenBuilds**
> \FrankHouweling\AzureDevOpsClient\Build\Model\ResourceRef[] buildsGetWorkItemsBetweenBuilds($organization, $project, $fromBuildId, $toBuildId, $apiVersion, $top)



Gets all the work items between two builds.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Build\Api\BuildsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$fromBuildId = 56; // int | The ID of the first build.
$toBuildId = 56; // int | The ID of the last build.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.
$top = 56; // int | The maximum number of work items to return.

try {
    $result = $apiInstance->buildsGetWorkItemsBetweenBuilds($organization, $project, $fromBuildId, $toBuildId, $apiVersion, $top);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildsApi->buildsGetWorkItemsBetweenBuilds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **fromBuildId** | **int**| The ID of the first build. |
 **toBuildId** | **int**| The ID of the last build. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |
 **top** | **int**| The maximum number of work items to return. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Build\Model\ResourceRef[]**](../Model/ResourceRef.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **buildsList**
> \FrankHouweling\AzureDevOpsClient\Build\Model\Build[] buildsList($organization, $project, $apiVersion, $definitions, $queues, $buildNumber, $minTime, $maxTime, $requestedFor, $reasonFilter, $statusFilter, $resultFilter, $tagFilters, $properties, $top, $continuationToken, $maxBuildsPerDefinition, $deletedFilter, $queryOrder, $branchName, $buildIds, $repositoryId, $repositoryType)



Gets a list of builds.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Build\Api\BuildsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.5' to use this version of the api.
$definitions = "definitions_example"; // string | A comma-delimited list of definition IDs. If specified, filters to builds for these definitions.
$queues = "queues_example"; // string | A comma-delimited list of queue IDs. If specified, filters to builds that ran against these queues.
$buildNumber = "buildNumber_example"; // string | If specified, filters to builds that match this build number. Append * to do a prefix search.
$minTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If specified, filters to builds that finished/started/queued after this date based on the queryOrder specified.
$maxTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If specified, filters to builds that finished/started/queued before this date based on the queryOrder specified.
$requestedFor = "requestedFor_example"; // string | If specified, filters to builds requested for the specified user.
$reasonFilter = "reasonFilter_example"; // string | If specified, filters to builds that match this reason.
$statusFilter = "statusFilter_example"; // string | If specified, filters to builds that match this status.
$resultFilter = "resultFilter_example"; // string | If specified, filters to builds that match this result.
$tagFilters = "tagFilters_example"; // string | A comma-delimited list of tags. If specified, filters to builds that have the specified tags.
$properties = "properties_example"; // string | A comma-delimited list of properties to retrieve.
$top = 56; // int | The maximum number of builds to return.
$continuationToken = "continuationToken_example"; // string | A continuation token, returned by a previous call to this method, that can be used to return the next set of builds.
$maxBuildsPerDefinition = 56; // int | The maximum number of builds to return per definition.
$deletedFilter = "deletedFilter_example"; // string | Indicates whether to exclude, include, or only return deleted builds.
$queryOrder = "queryOrder_example"; // string | The order in which builds should be returned.
$branchName = "branchName_example"; // string | If specified, filters to builds that built branches that built this branch.
$buildIds = "buildIds_example"; // string | A comma-delimited list that specifies the IDs of builds to retrieve.
$repositoryId = "repositoryId_example"; // string | If specified, filters to builds that built from this repository.
$repositoryType = "repositoryType_example"; // string | If specified, filters to builds that built from repositories of this type.

try {
    $result = $apiInstance->buildsList($organization, $project, $apiVersion, $definitions, $queues, $buildNumber, $minTime, $maxTime, $requestedFor, $reasonFilter, $statusFilter, $resultFilter, $tagFilters, $properties, $top, $continuationToken, $maxBuildsPerDefinition, $deletedFilter, $queryOrder, $branchName, $buildIds, $repositoryId, $repositoryType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildsApi->buildsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.5&#39; to use this version of the api. |
 **definitions** | **string**| A comma-delimited list of definition IDs. If specified, filters to builds for these definitions. | [optional]
 **queues** | **string**| A comma-delimited list of queue IDs. If specified, filters to builds that ran against these queues. | [optional]
 **buildNumber** | **string**| If specified, filters to builds that match this build number. Append * to do a prefix search. | [optional]
 **minTime** | **\DateTime**| If specified, filters to builds that finished/started/queued after this date based on the queryOrder specified. | [optional]
 **maxTime** | **\DateTime**| If specified, filters to builds that finished/started/queued before this date based on the queryOrder specified. | [optional]
 **requestedFor** | **string**| If specified, filters to builds requested for the specified user. | [optional]
 **reasonFilter** | **string**| If specified, filters to builds that match this reason. | [optional]
 **statusFilter** | **string**| If specified, filters to builds that match this status. | [optional]
 **resultFilter** | **string**| If specified, filters to builds that match this result. | [optional]
 **tagFilters** | **string**| A comma-delimited list of tags. If specified, filters to builds that have the specified tags. | [optional]
 **properties** | **string**| A comma-delimited list of properties to retrieve. | [optional]
 **top** | **int**| The maximum number of builds to return. | [optional]
 **continuationToken** | **string**| A continuation token, returned by a previous call to this method, that can be used to return the next set of builds. | [optional]
 **maxBuildsPerDefinition** | **int**| The maximum number of builds to return per definition. | [optional]
 **deletedFilter** | **string**| Indicates whether to exclude, include, or only return deleted builds. | [optional]
 **queryOrder** | **string**| The order in which builds should be returned. | [optional]
 **branchName** | **string**| If specified, filters to builds that built branches that built this branch. | [optional]
 **buildIds** | **string**| A comma-delimited list that specifies the IDs of builds to retrieve. | [optional]
 **repositoryId** | **string**| If specified, filters to builds that built from this repository. | [optional]
 **repositoryType** | **string**| If specified, filters to builds that built from repositories of this type. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Build\Model\Build[]**](../Model/Build.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **buildsQueue**
> \FrankHouweling\AzureDevOpsClient\Build\Model\Build buildsQueue($organization, $body, $project, $apiVersion, $ignoreWarnings, $checkInTicket, $sourceBuildId)



Queues a build

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Build\Api\BuildsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Build\Model\Build(); // \FrankHouweling\AzureDevOpsClient\Build\Model\Build | 
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.5' to use this version of the api.
$ignoreWarnings = true; // bool | 
$checkInTicket = "checkInTicket_example"; // string | 
$sourceBuildId = 56; // int | 

try {
    $result = $apiInstance->buildsQueue($organization, $body, $project, $apiVersion, $ignoreWarnings, $checkInTicket, $sourceBuildId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildsApi->buildsQueue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Build\Model\Build**](../Model/Build.md)|  |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.5&#39; to use this version of the api. |
 **ignoreWarnings** | **bool**|  | [optional]
 **checkInTicket** | **string**|  | [optional]
 **sourceBuildId** | **int**|  | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Build\Model\Build**](../Model/Build.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **buildsUpdateBuild**
> \FrankHouweling\AzureDevOpsClient\Build\Model\Build buildsUpdateBuild($organization, $body, $project, $buildId, $apiVersion, $retry)



Updates a build.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Build\Api\BuildsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Build\Model\Build(); // \FrankHouweling\AzureDevOpsClient\Build\Model\Build | The build.
$project = "project_example"; // string | Project ID or project name
$buildId = 56; // int | The ID of the build.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.5' to use this version of the api.
$retry = true; // bool | 

try {
    $result = $apiInstance->buildsUpdateBuild($organization, $body, $project, $buildId, $apiVersion, $retry);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildsApi->buildsUpdateBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Build\Model\Build**](../Model/Build.md)| The build. |
 **project** | **string**| Project ID or project name |
 **buildId** | **int**| The ID of the build. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.5&#39; to use this version of the api. |
 **retry** | **bool**|  | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Build\Model\Build**](../Model/Build.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **buildsUpdateBuilds**
> \FrankHouweling\AzureDevOpsClient\Build\Model\Build[] buildsUpdateBuilds($organization, $body, $project, $apiVersion)



Updates multiple builds.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Build\Api\BuildsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = array(new \FrankHouweling\AzureDevOpsClient\Build\Model\Build()); // \FrankHouweling\AzureDevOpsClient\Build\Model\Build[] | The builds to update.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.5' to use this version of the api.

try {
    $result = $apiInstance->buildsUpdateBuilds($organization, $body, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildsApi->buildsUpdateBuilds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Build\Model\Build[]**](../Model/Build.md)| The builds to update. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.5&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Build\Model\Build[]**](../Model/Build.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

