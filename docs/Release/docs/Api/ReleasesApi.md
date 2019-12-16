# AzureDevOpsClient\Release\ReleasesApi

All URIs are relative to *https://vsrm.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**releasesCreate**](ReleasesApi.md#releasesCreate) | **POST** /{organization}/{project}/_apis/release/releases | 
[**releasesGetLogs**](ReleasesApi.md#releasesGetLogs) | **GET** /{organization}/{project}/_apis/release/releases/{releaseId}/logs | 
[**releasesGetReleaseEnvironment**](ReleasesApi.md#releasesGetReleaseEnvironment) | **GET** /{organization}/{project}/_apis/Release/releases/{releaseId}/environments/{environmentId} | 
[**releasesGetReleaseRevision**](ReleasesApi.md#releasesGetReleaseRevision) | **GET** /{organization}/{project}/_apis/release/releases/{releaseId} | 
[**releasesGetTaskLog**](ReleasesApi.md#releasesGetTaskLog) | **GET** /{organization}/{project}/_apis/release/releases/{releaseId}/environments/{environmentId}/deployPhases/{releaseDeployPhaseId}/tasks/{taskId}/logs | 
[**releasesList**](ReleasesApi.md#releasesList) | **GET** /{organization}/{project}/_apis/release/releases | 
[**releasesUpdateRelease**](ReleasesApi.md#releasesUpdateRelease) | **PUT** /{organization}/{project}/_apis/release/releases/{releaseId} | 
[**releasesUpdateReleaseEnvironment**](ReleasesApi.md#releasesUpdateReleaseEnvironment) | **PATCH** /{organization}/{project}/_apis/Release/releases/{releaseId}/environments/{environmentId} | 
[**releasesUpdateReleaseResource**](ReleasesApi.md#releasesUpdateReleaseResource) | **PATCH** /{organization}/{project}/_apis/release/releases/{releaseId} | 


# **releasesCreate**
> \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\Release releasesCreate($organization, $body, $project, $apiVersion)



Create a release.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Release\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Release\Api\ReleasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ReleaseStartMetadata(); // \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ReleaseStartMetadata | Metadata to create a release.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.8' to use this version of the api.

try {
    $result = $apiInstance->releasesCreate($organization, $body, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReleasesApi->releasesCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ReleaseStartMetadata**](../Model/ReleaseStartMetadata.md)| Metadata to create a release. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.8&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\Release**](../Model/Release.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **releasesGetLogs**
> string releasesGetLogs($organization, $project, $releaseId, $apiVersion)



Get logs for a release Id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Release\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Release\Api\ReleasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$releaseId = 56; // int | Id of the release.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $result = $apiInstance->releasesGetLogs($organization, $project, $releaseId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReleasesApi->releasesGetLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **releaseId** | **int**| Id of the release. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

**string**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/zip

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **releasesGetReleaseEnvironment**
> \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ReleaseEnvironment releasesGetReleaseEnvironment($organization, $project, $releaseId, $environmentId, $apiVersion)



Get a release environment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Release\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Release\Api\ReleasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$releaseId = 56; // int | Id of the release.
$environmentId = 56; // int | Id of the release environment.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.6' to use this version of the api.

try {
    $result = $apiInstance->releasesGetReleaseEnvironment($organization, $project, $releaseId, $environmentId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReleasesApi->releasesGetReleaseEnvironment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **releaseId** | **int**| Id of the release. |
 **environmentId** | **int**| Id of the release environment. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.6&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ReleaseEnvironment**](../Model/ReleaseEnvironment.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **releasesGetReleaseRevision**
> string releasesGetReleaseRevision($organization, $project, $releaseId, $definitionSnapshotRevision, $apiVersion)



Get release for a given revision number.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Release\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Release\Api\ReleasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$releaseId = 56; // int | Id of the release.
$definitionSnapshotRevision = 56; // int | Definition snapshot revision number.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.8' to use this version of the api.

try {
    $result = $apiInstance->releasesGetReleaseRevision($organization, $project, $releaseId, $definitionSnapshotRevision, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReleasesApi->releasesGetReleaseRevision: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **releaseId** | **int**| Id of the release. |
 **definitionSnapshotRevision** | **int**| Definition snapshot revision number. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.8&#39; to use this version of the api. |

### Return type

**string**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **releasesGetTaskLog**
> string releasesGetTaskLog($organization, $project, $releaseId, $environmentId, $releaseDeployPhaseId, $taskId, $apiVersion, $startLine, $endLine)



Gets the task log of a release as a plain text file.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Release\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Release\Api\ReleasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$releaseId = 56; // int | Id of the release.
$environmentId = 56; // int | Id of release environment.
$releaseDeployPhaseId = 56; // int | Release deploy phase Id.
$taskId = 56; // int | ReleaseTask Id for the log.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.
$startLine = 789; // int | Starting line number for logs
$endLine = 789; // int | Ending line number for logs

try {
    $result = $apiInstance->releasesGetTaskLog($organization, $project, $releaseId, $environmentId, $releaseDeployPhaseId, $taskId, $apiVersion, $startLine, $endLine);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReleasesApi->releasesGetTaskLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **releaseId** | **int**| Id of the release. |
 **environmentId** | **int**| Id of release environment. |
 **releaseDeployPhaseId** | **int**| Release deploy phase Id. |
 **taskId** | **int**| ReleaseTask Id for the log. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |
 **startLine** | **int**| Starting line number for logs | [optional]
 **endLine** | **int**| Ending line number for logs | [optional]

### Return type

**string**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **releasesList**
> \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\Release[] releasesList($organization, $project, $apiVersion, $definitionId, $definitionEnvironmentId, $searchText, $createdBy, $statusFilter, $environmentStatusFilter, $minCreatedTime, $maxCreatedTime, $queryOrder, $top, $continuationToken, $expand, $artifactTypeId, $sourceId, $artifactVersionId, $sourceBranchFilter, $isDeleted, $tagFilter, $propertyFilters, $releaseIdFilter, $path)



Get a list of releases

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Release\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Release\Api\ReleasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.8' to use this version of the api.
$definitionId = 56; // int | Releases from this release definition Id.
$definitionEnvironmentId = 56; // int | 
$searchText = "searchText_example"; // string | Releases with names containing searchText.
$createdBy = "createdBy_example"; // string | Releases created by this user.
$statusFilter = "statusFilter_example"; // string | Releases that have this status.
$environmentStatusFilter = 56; // int | 
$minCreatedTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Releases that were created after this time.
$maxCreatedTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Releases that were created before this time.
$queryOrder = "queryOrder_example"; // string | Gets the results in the defined order of created date for releases. Default is descending.
$top = 56; // int | Number of releases to get. Default is 50.
$continuationToken = 56; // int | Gets the releases after the continuation token provided.
$expand = "expand_example"; // string | The property that should be expanded in the list of releases.
$artifactTypeId = "artifactTypeId_example"; // string | Releases with given artifactTypeId will be returned. Values can be Build, Jenkins, GitHub, Nuget, Team Build (external), ExternalTFSBuild, Git, TFVC, ExternalTfsXamlBuild.
$sourceId = "sourceId_example"; // string | Unique identifier of the artifact used. e.g. For build it would be {projectGuid}:{BuildDefinitionId}, for Jenkins it would be {JenkinsConnectionId}:{JenkinsDefinitionId}, for TfsOnPrem it would be {TfsOnPremConnectionId}:{ProjectName}:{TfsOnPremDefinitionId}. For third-party artifacts e.g. TeamCity, BitBucket you may refer 'uniqueSourceIdentifier' inside vss-extension.json https://github.com/Microsoft/vsts-rm-extensions/blob/master/Extensions.
$artifactVersionId = "artifactVersionId_example"; // string | Releases with given artifactVersionId will be returned. E.g. in case of Build artifactType, it is buildId.
$sourceBranchFilter = "sourceBranchFilter_example"; // string | Releases with given sourceBranchFilter will be returned.
$isDeleted = true; // bool | Gets the soft deleted releases, if true.
$tagFilter = "tagFilter_example"; // string | A comma-delimited list of tags. Only releases with these tags will be returned.
$propertyFilters = "propertyFilters_example"; // string | A comma-delimited list of extended properties to be retrieved. If set, the returned Releases will contain values for the specified property Ids (if they exist). If not set, properties will not be included. Note that this will not filter out any Release from results irrespective of whether it has property set or not.
$releaseIdFilter = "releaseIdFilter_example"; // string | A comma-delimited list of releases Ids. Only releases with these Ids will be returned.
$path = "path_example"; // string | Releases under this folder path will be returned

try {
    $result = $apiInstance->releasesList($organization, $project, $apiVersion, $definitionId, $definitionEnvironmentId, $searchText, $createdBy, $statusFilter, $environmentStatusFilter, $minCreatedTime, $maxCreatedTime, $queryOrder, $top, $continuationToken, $expand, $artifactTypeId, $sourceId, $artifactVersionId, $sourceBranchFilter, $isDeleted, $tagFilter, $propertyFilters, $releaseIdFilter, $path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReleasesApi->releasesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.8&#39; to use this version of the api. |
 **definitionId** | **int**| Releases from this release definition Id. | [optional]
 **definitionEnvironmentId** | **int**|  | [optional]
 **searchText** | **string**| Releases with names containing searchText. | [optional]
 **createdBy** | **string**| Releases created by this user. | [optional]
 **statusFilter** | **string**| Releases that have this status. | [optional]
 **environmentStatusFilter** | **int**|  | [optional]
 **minCreatedTime** | **\DateTime**| Releases that were created after this time. | [optional]
 **maxCreatedTime** | **\DateTime**| Releases that were created before this time. | [optional]
 **queryOrder** | **string**| Gets the results in the defined order of created date for releases. Default is descending. | [optional]
 **top** | **int**| Number of releases to get. Default is 50. | [optional]
 **continuationToken** | **int**| Gets the releases after the continuation token provided. | [optional]
 **expand** | **string**| The property that should be expanded in the list of releases. | [optional]
 **artifactTypeId** | **string**| Releases with given artifactTypeId will be returned. Values can be Build, Jenkins, GitHub, Nuget, Team Build (external), ExternalTFSBuild, Git, TFVC, ExternalTfsXamlBuild. | [optional]
 **sourceId** | **string**| Unique identifier of the artifact used. e.g. For build it would be {projectGuid}:{BuildDefinitionId}, for Jenkins it would be {JenkinsConnectionId}:{JenkinsDefinitionId}, for TfsOnPrem it would be {TfsOnPremConnectionId}:{ProjectName}:{TfsOnPremDefinitionId}. For third-party artifacts e.g. TeamCity, BitBucket you may refer &#39;uniqueSourceIdentifier&#39; inside vss-extension.json https://github.com/Microsoft/vsts-rm-extensions/blob/master/Extensions. | [optional]
 **artifactVersionId** | **string**| Releases with given artifactVersionId will be returned. E.g. in case of Build artifactType, it is buildId. | [optional]
 **sourceBranchFilter** | **string**| Releases with given sourceBranchFilter will be returned. | [optional]
 **isDeleted** | **bool**| Gets the soft deleted releases, if true. | [optional]
 **tagFilter** | **string**| A comma-delimited list of tags. Only releases with these tags will be returned. | [optional]
 **propertyFilters** | **string**| A comma-delimited list of extended properties to be retrieved. If set, the returned Releases will contain values for the specified property Ids (if they exist). If not set, properties will not be included. Note that this will not filter out any Release from results irrespective of whether it has property set or not. | [optional]
 **releaseIdFilter** | **string**| A comma-delimited list of releases Ids. Only releases with these Ids will be returned. | [optional]
 **path** | **string**| Releases under this folder path will be returned | [optional]

### Return type

[**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\Release[]**](../Model/Release.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **releasesUpdateRelease**
> \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\Release releasesUpdateRelease($organization, $body, $project, $releaseId, $apiVersion)



Update a complete release object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Release\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Release\Api\ReleasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\Release(); // \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\Release | Release object for update.
$project = "project_example"; // string | Project ID or project name
$releaseId = 56; // int | Id of the release to update.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.8' to use this version of the api.

try {
    $result = $apiInstance->releasesUpdateRelease($organization, $body, $project, $releaseId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReleasesApi->releasesUpdateRelease: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\Release**](../Model/Release.md)| Release object for update. |
 **project** | **string**| Project ID or project name |
 **releaseId** | **int**| Id of the release to update. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.8&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\Release**](../Model/Release.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **releasesUpdateReleaseEnvironment**
> \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ReleaseEnvironment releasesUpdateReleaseEnvironment($organization, $body, $project, $releaseId, $environmentId, $apiVersion)



Update the status of a release environment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Release\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Release\Api\ReleasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ReleaseEnvironmentUpdateMetadata(); // \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ReleaseEnvironmentUpdateMetadata | Environment update meta data.
$project = "project_example"; // string | Project ID or project name
$releaseId = 56; // int | Id of the release.
$environmentId = 56; // int | Id of release environment.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.6' to use this version of the api.

try {
    $result = $apiInstance->releasesUpdateReleaseEnvironment($organization, $body, $project, $releaseId, $environmentId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReleasesApi->releasesUpdateReleaseEnvironment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ReleaseEnvironmentUpdateMetadata**](../Model/ReleaseEnvironmentUpdateMetadata.md)| Environment update meta data. |
 **project** | **string**| Project ID or project name |
 **releaseId** | **int**| Id of the release. |
 **environmentId** | **int**| Id of release environment. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.6&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ReleaseEnvironment**](../Model/ReleaseEnvironment.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **releasesUpdateReleaseResource**
> \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\Release releasesUpdateReleaseResource($organization, $body, $project, $releaseId, $apiVersion)



Update few properties of a release.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Release\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Release\Api\ReleasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ReleaseUpdateMetadata(); // \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ReleaseUpdateMetadata | Properties of release to update.
$project = "project_example"; // string | Project ID or project name
$releaseId = 56; // int | Id of the release to update.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.8' to use this version of the api.

try {
    $result = $apiInstance->releasesUpdateReleaseResource($organization, $body, $project, $releaseId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReleasesApi->releasesUpdateReleaseResource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ReleaseUpdateMetadata**](../Model/ReleaseUpdateMetadata.md)| Properties of release to update. |
 **project** | **string**| Project ID or project name |
 **releaseId** | **int**| Id of the release to update. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.8&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\Release**](../Model/Release.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

