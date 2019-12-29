# FrankHouweling\AzureDevOpsClient\Release\DefinitionsApi

All URIs are relative to *https://vsrm.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**definitionsCreate**](DefinitionsApi.md#definitionsCreate) | **POST** /{organization}/{project}/_apis/release/definitions | 
[**definitionsDelete**](DefinitionsApi.md#definitionsDelete) | **DELETE** /{organization}/{project}/_apis/release/definitions/{definitionId} | 
[**definitionsGet**](DefinitionsApi.md#definitionsGet) | **GET** /{organization}/{project}/_apis/release/definitions/{definitionId} | 
[**definitionsGetDefinitionRevision**](DefinitionsApi.md#definitionsGetDefinitionRevision) | **GET** /{organization}/{project}/_apis/Release/definitions/{definitionId}/revisions/{revision} | 
[**definitionsGetReleaseDefinitionHistory**](DefinitionsApi.md#definitionsGetReleaseDefinitionHistory) | **GET** /{organization}/{project}/_apis/Release/definitions/{definitionId}/revisions | 
[**definitionsList**](DefinitionsApi.md#definitionsList) | **GET** /{organization}/{project}/_apis/release/definitions | 
[**definitionsUpdate**](DefinitionsApi.md#definitionsUpdate) | **PUT** /{organization}/{project}/_apis/release/definitions | 


# **definitionsCreate**
> \FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseDefinition definitionsCreate($organization, $body, $project, $apiVersion)



Create a release definition

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Release\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Release\Api\DefinitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseDefinition(); // \FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseDefinition | release definition object to create.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.4' to use this version of the api.

try {
    $result = $apiInstance->definitionsCreate($organization, $body, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefinitionsApi->definitionsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseDefinition**](../Model/ReleaseDefinition.md)| release definition object to create. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.4&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseDefinition**](../Model/ReleaseDefinition.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **definitionsDelete**
> definitionsDelete($organization, $project, $definitionId, $apiVersion, $comment, $forceDelete)



Delete a release definition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Release\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Release\Api\DefinitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$definitionId = 56; // int | Id of the release definition.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.4' to use this version of the api.
$comment = "comment_example"; // string | Comment for deleting a release definition.
$forceDelete = true; // bool | 'true' to automatically cancel any in-progress release deployments and proceed with release definition deletion . Default is 'false'.

try {
    $apiInstance->definitionsDelete($organization, $project, $definitionId, $apiVersion, $comment, $forceDelete);
} catch (Exception $e) {
    echo 'Exception when calling DefinitionsApi->definitionsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **definitionId** | **int**| Id of the release definition. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.4&#39; to use this version of the api. |
 **comment** | **string**| Comment for deleting a release definition. | [optional]
 **forceDelete** | **bool**| &#39;true&#39; to automatically cancel any in-progress release deployments and proceed with release definition deletion . Default is &#39;false&#39;. | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **definitionsGet**
> \FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseDefinition definitionsGet($organization, $project, $definitionId, $apiVersion, $propertyFilters)



Get a release definition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Release\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Release\Api\DefinitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$definitionId = 56; // int | Id of the release definition.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.4' to use this version of the api.
$propertyFilters = "propertyFilters_example"; // string | A comma-delimited list of extended properties to be retrieved. If set, the returned Release Definition will contain values for the specified property Ids (if they exist). If not set, properties will not be included.

try {
    $result = $apiInstance->definitionsGet($organization, $project, $definitionId, $apiVersion, $propertyFilters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefinitionsApi->definitionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **definitionId** | **int**| Id of the release definition. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.4&#39; to use this version of the api. |
 **propertyFilters** | **string**| A comma-delimited list of extended properties to be retrieved. If set, the returned Release Definition will contain values for the specified property Ids (if they exist). If not set, properties will not be included. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseDefinition**](../Model/ReleaseDefinition.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **definitionsGetDefinitionRevision**
> string definitionsGetDefinitionRevision($organization, $project, $definitionId, $revision, $apiVersion)



Get release definition for a given definitionId and revision

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Release\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Release\Api\DefinitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$definitionId = 56; // int | Id of the definition.
$revision = 56; // int | Id of the revision.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->definitionsGetDefinitionRevision($organization, $project, $definitionId, $revision, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefinitionsApi->definitionsGetDefinitionRevision: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **definitionId** | **int**| Id of the definition. |
 **revision** | **int**| Id of the revision. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

**string**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **definitionsGetReleaseDefinitionHistory**
> \FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseDefinitionRevision[] definitionsGetReleaseDefinitionHistory($organization, $project, $definitionId, $apiVersion)



Get revision history for a release definition

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Release\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Release\Api\DefinitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$definitionId = 56; // int | Id of the definition.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->definitionsGetReleaseDefinitionHistory($organization, $project, $definitionId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefinitionsApi->definitionsGetReleaseDefinitionHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **definitionId** | **int**| Id of the definition. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseDefinitionRevision[]**](../Model/ReleaseDefinitionRevision.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **definitionsList**
> \FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseDefinition[] definitionsList($organization, $project, $apiVersion, $searchText, $expand, $artifactType, $artifactSourceId, $top, $continuationToken, $queryOrder, $path, $isExactNameMatch, $tagFilter, $propertyFilters, $definitionIdFilter, $isDeleted, $searchTextContainsFolderName)



Get a list of release definitions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Release\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Release\Api\DefinitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.4' to use this version of the api.
$searchText = "searchText_example"; // string | Get release definitions with names containing searchText.
$expand = "expand_example"; // string | The properties that should be expanded in the list of Release definitions.
$artifactType = "artifactType_example"; // string | Release definitions with given artifactType will be returned. Values can be Build, Jenkins, GitHub, Nuget, Team Build (external), ExternalTFSBuild, Git, TFVC, ExternalTfsXamlBuild.
$artifactSourceId = "artifactSourceId_example"; // string | Release definitions with given artifactSourceId will be returned. e.g. For build it would be {projectGuid}:{BuildDefinitionId}, for Jenkins it would be {JenkinsConnectionId}:{JenkinsDefinitionId}, for TfsOnPrem it would be {TfsOnPremConnectionId}:{ProjectName}:{TfsOnPremDefinitionId}. For third-party artifacts e.g. TeamCity, BitBucket you may refer 'uniqueSourceIdentifier' inside vss-extension.json at https://github.com/Microsoft/vsts-rm-extensions/blob/master/Extensions.
$top = 56; // int | Number of release definitions to get.
$continuationToken = "continuationToken_example"; // string | Gets the release definitions after the continuation token provided.
$queryOrder = "queryOrder_example"; // string | Gets the results in the defined order. Default is 'IdAscending'.
$path = "path_example"; // string | Gets the release definitions under the specified path.
$isExactNameMatch = true; // bool | 'true'to gets the release definitions with exact match as specified in searchText. Default is 'false'.
$tagFilter = "tagFilter_example"; // string | A comma-delimited list of tags. Only release definitions with these tags will be returned.
$propertyFilters = "propertyFilters_example"; // string | A comma-delimited list of extended properties to be retrieved. If set, the returned Release Definitions will contain values for the specified property Ids (if they exist). If not set, properties will not be included. Note that this will not filter out any Release Definition from results irrespective of whether it has property set or not.
$definitionIdFilter = "definitionIdFilter_example"; // string | A comma-delimited list of release definitions to retrieve.
$isDeleted = true; // bool | 'true' to get release definitions that has been deleted. Default is 'false'
$searchTextContainsFolderName = true; // bool | 'true' to get the release definitions under the folder with name as specified in searchText. Default is 'false'.

try {
    $result = $apiInstance->definitionsList($organization, $project, $apiVersion, $searchText, $expand, $artifactType, $artifactSourceId, $top, $continuationToken, $queryOrder, $path, $isExactNameMatch, $tagFilter, $propertyFilters, $definitionIdFilter, $isDeleted, $searchTextContainsFolderName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefinitionsApi->definitionsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.4&#39; to use this version of the api. |
 **searchText** | **string**| Get release definitions with names containing searchText. | [optional]
 **expand** | **string**| The properties that should be expanded in the list of Release definitions. | [optional]
 **artifactType** | **string**| Release definitions with given artifactType will be returned. Values can be Build, Jenkins, GitHub, Nuget, Team Build (external), ExternalTFSBuild, Git, TFVC, ExternalTfsXamlBuild. | [optional]
 **artifactSourceId** | **string**| Release definitions with given artifactSourceId will be returned. e.g. For build it would be {projectGuid}:{BuildDefinitionId}, for Jenkins it would be {JenkinsConnectionId}:{JenkinsDefinitionId}, for TfsOnPrem it would be {TfsOnPremConnectionId}:{ProjectName}:{TfsOnPremDefinitionId}. For third-party artifacts e.g. TeamCity, BitBucket you may refer &#39;uniqueSourceIdentifier&#39; inside vss-extension.json at https://github.com/Microsoft/vsts-rm-extensions/blob/master/Extensions. | [optional]
 **top** | **int**| Number of release definitions to get. | [optional]
 **continuationToken** | **string**| Gets the release definitions after the continuation token provided. | [optional]
 **queryOrder** | **string**| Gets the results in the defined order. Default is &#39;IdAscending&#39;. | [optional]
 **path** | **string**| Gets the release definitions under the specified path. | [optional]
 **isExactNameMatch** | **bool**| &#39;true&#39;to gets the release definitions with exact match as specified in searchText. Default is &#39;false&#39;. | [optional]
 **tagFilter** | **string**| A comma-delimited list of tags. Only release definitions with these tags will be returned. | [optional]
 **propertyFilters** | **string**| A comma-delimited list of extended properties to be retrieved. If set, the returned Release Definitions will contain values for the specified property Ids (if they exist). If not set, properties will not be included. Note that this will not filter out any Release Definition from results irrespective of whether it has property set or not. | [optional]
 **definitionIdFilter** | **string**| A comma-delimited list of release definitions to retrieve. | [optional]
 **isDeleted** | **bool**| &#39;true&#39; to get release definitions that has been deleted. Default is &#39;false&#39; | [optional]
 **searchTextContainsFolderName** | **bool**| &#39;true&#39; to get the release definitions under the folder with name as specified in searchText. Default is &#39;false&#39;. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseDefinition[]**](../Model/ReleaseDefinition.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **definitionsUpdate**
> \FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseDefinition definitionsUpdate($organization, $body, $project, $apiVersion)



Update a release definition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Release\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Release\Api\DefinitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseDefinition(); // \FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseDefinition | Release definition object to update.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.4' to use this version of the api.

try {
    $result = $apiInstance->definitionsUpdate($organization, $body, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefinitionsApi->definitionsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseDefinition**](../Model/ReleaseDefinition.md)| Release definition object to update. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.4&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseDefinition**](../Model/ReleaseDefinition.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

