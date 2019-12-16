# AzureDevOpsClient\Build\DefinitionsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**definitionsCreate**](DefinitionsApi.md#definitionsCreate) | **POST** /{organization}/{project}/_apis/build/definitions | 
[**definitionsDelete**](DefinitionsApi.md#definitionsDelete) | **DELETE** /{organization}/{project}/_apis/build/definitions/{definitionId} | 
[**definitionsGet**](DefinitionsApi.md#definitionsGet) | **GET** /{organization}/{project}/_apis/build/definitions/{definitionId} | 
[**definitionsGetDefinitionRevisions**](DefinitionsApi.md#definitionsGetDefinitionRevisions) | **GET** /{organization}/{project}/_apis/build/definitions/{definitionId}/revisions | 
[**definitionsList**](DefinitionsApi.md#definitionsList) | **GET** /{organization}/{project}/_apis/build/definitions | 
[**definitionsRestoreDefinition**](DefinitionsApi.md#definitionsRestoreDefinition) | **PATCH** /{organization}/{project}/_apis/build/definitions/{definitionId} | 
[**definitionsUpdate**](DefinitionsApi.md#definitionsUpdate) | **PUT** /{organization}/{project}/_apis/build/definitions/{definitionId} | 


# **definitionsCreate**
> \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\BuildDefinition definitionsCreate($organization, $body, $project, $apiVersion, $definitionToCloneId, $definitionToCloneRevision)



Creates a new definition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Build\Api\DefinitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\BuildDefinition(); // \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\BuildDefinition | The definition.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.7' to use this version of the api.
$definitionToCloneId = 56; // int | 
$definitionToCloneRevision = 56; // int | 

try {
    $result = $apiInstance->definitionsCreate($organization, $body, $project, $apiVersion, $definitionToCloneId, $definitionToCloneRevision);
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
 **body** | [**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\BuildDefinition**](../Model/BuildDefinition.md)| The definition. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.7&#39; to use this version of the api. |
 **definitionToCloneId** | **int**|  | [optional]
 **definitionToCloneRevision** | **int**|  | [optional]

### Return type

[**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\BuildDefinition**](../Model/BuildDefinition.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **definitionsDelete**
> definitionsDelete($organization, $project, $definitionId, $apiVersion)



Deletes a definition and all associated builds.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Build\Api\DefinitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$definitionId = 56; // int | The ID of the definition.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.7' to use this version of the api.

try {
    $apiInstance->definitionsDelete($organization, $project, $definitionId, $apiVersion);
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
 **definitionId** | **int**| The ID of the definition. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.7&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **definitionsGet**
> \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\BuildDefinition definitionsGet($organization, $project, $definitionId, $apiVersion, $revision, $minMetricsTime, $propertyFilters, $includeLatestBuilds)



Gets a definition, optionally at a specific revision.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Build\Api\DefinitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$definitionId = 56; // int | The ID of the definition.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.7' to use this version of the api.
$revision = 56; // int | The revision number to retrieve. If this is not specified, the latest version will be returned.
$minMetricsTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If specified, indicates the date from which metrics should be included.
$propertyFilters = "propertyFilters_example"; // string | A comma-delimited list of properties to include in the results.
$includeLatestBuilds = true; // bool | 

try {
    $result = $apiInstance->definitionsGet($organization, $project, $definitionId, $apiVersion, $revision, $minMetricsTime, $propertyFilters, $includeLatestBuilds);
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
 **definitionId** | **int**| The ID of the definition. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.7&#39; to use this version of the api. |
 **revision** | **int**| The revision number to retrieve. If this is not specified, the latest version will be returned. | [optional]
 **minMetricsTime** | **\DateTime**| If specified, indicates the date from which metrics should be included. | [optional]
 **propertyFilters** | **string**| A comma-delimited list of properties to include in the results. | [optional]
 **includeLatestBuilds** | **bool**|  | [optional]

### Return type

[**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\BuildDefinition**](../Model/BuildDefinition.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **definitionsGetDefinitionRevisions**
> \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\BuildDefinitionRevision[] definitionsGetDefinitionRevisions($organization, $project, $definitionId, $apiVersion)



Gets all revisions of a definition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Build\Api\DefinitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$definitionId = 56; // int | The ID of the definition.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.

try {
    $result = $apiInstance->definitionsGetDefinitionRevisions($organization, $project, $definitionId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefinitionsApi->definitionsGetDefinitionRevisions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **definitionId** | **int**| The ID of the definition. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\BuildDefinitionRevision[]**](../Model/BuildDefinitionRevision.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **definitionsList**
> \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\BuildDefinitionReference[] definitionsList($organization, $project, $apiVersion, $name, $repositoryId, $repositoryType, $queryOrder, $top, $continuationToken, $minMetricsTime, $definitionIds, $path, $builtAfter, $notBuiltAfter, $includeAllProperties, $includeLatestBuilds, $taskIdFilter, $processType, $yamlFilename)



Gets a list of definitions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Build\Api\DefinitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.7' to use this version of the api.
$name = "name_example"; // string | If specified, filters to definitions whose names match this pattern.
$repositoryId = "repositoryId_example"; // string | A repository ID. If specified, filters to definitions that use this repository.
$repositoryType = "repositoryType_example"; // string | If specified, filters to definitions that have a repository of this type.
$queryOrder = "queryOrder_example"; // string | Indicates the order in which definitions should be returned.
$top = 56; // int | The maximum number of definitions to return.
$continuationToken = "continuationToken_example"; // string | A continuation token, returned by a previous call to this method, that can be used to return the next set of definitions.
$minMetricsTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If specified, indicates the date from which metrics should be included.
$definitionIds = "definitionIds_example"; // string | A comma-delimited list that specifies the IDs of definitions to retrieve.
$path = "path_example"; // string | If specified, filters to definitions under this folder.
$builtAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If specified, filters to definitions that have builds after this date.
$notBuiltAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If specified, filters to definitions that do not have builds after this date.
$includeAllProperties = true; // bool | Indicates whether the full definitions should be returned. By default, shallow representations of the definitions are returned.
$includeLatestBuilds = true; // bool | Indicates whether to return the latest and latest completed builds for this definition.
$taskIdFilter = "taskIdFilter_example"; // string | If specified, filters to definitions that use the specified task.
$processType = 56; // int | If specified, filters to definitions with the given process type.
$yamlFilename = "yamlFilename_example"; // string | If specified, filters to YAML definitions that match the given filename.

try {
    $result = $apiInstance->definitionsList($organization, $project, $apiVersion, $name, $repositoryId, $repositoryType, $queryOrder, $top, $continuationToken, $minMetricsTime, $definitionIds, $path, $builtAfter, $notBuiltAfter, $includeAllProperties, $includeLatestBuilds, $taskIdFilter, $processType, $yamlFilename);
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
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.7&#39; to use this version of the api. |
 **name** | **string**| If specified, filters to definitions whose names match this pattern. | [optional]
 **repositoryId** | **string**| A repository ID. If specified, filters to definitions that use this repository. | [optional]
 **repositoryType** | **string**| If specified, filters to definitions that have a repository of this type. | [optional]
 **queryOrder** | **string**| Indicates the order in which definitions should be returned. | [optional]
 **top** | **int**| The maximum number of definitions to return. | [optional]
 **continuationToken** | **string**| A continuation token, returned by a previous call to this method, that can be used to return the next set of definitions. | [optional]
 **minMetricsTime** | **\DateTime**| If specified, indicates the date from which metrics should be included. | [optional]
 **definitionIds** | **string**| A comma-delimited list that specifies the IDs of definitions to retrieve. | [optional]
 **path** | **string**| If specified, filters to definitions under this folder. | [optional]
 **builtAfter** | **\DateTime**| If specified, filters to definitions that have builds after this date. | [optional]
 **notBuiltAfter** | **\DateTime**| If specified, filters to definitions that do not have builds after this date. | [optional]
 **includeAllProperties** | **bool**| Indicates whether the full definitions should be returned. By default, shallow representations of the definitions are returned. | [optional]
 **includeLatestBuilds** | **bool**| Indicates whether to return the latest and latest completed builds for this definition. | [optional]
 **taskIdFilter** | [**string**](../Model/.md)| If specified, filters to definitions that use the specified task. | [optional]
 **processType** | **int**| If specified, filters to definitions with the given process type. | [optional]
 **yamlFilename** | **string**| If specified, filters to YAML definitions that match the given filename. | [optional]

### Return type

[**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\BuildDefinitionReference[]**](../Model/BuildDefinitionReference.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **definitionsRestoreDefinition**
> \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\BuildDefinition definitionsRestoreDefinition($organization, $project, $definitionId, $deleted, $apiVersion)



Restores a deleted definition

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Build\Api\DefinitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$definitionId = 56; // int | The identifier of the definition to restore.
$deleted = true; // bool | When false, restores a deleted definition.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.7' to use this version of the api.

try {
    $result = $apiInstance->definitionsRestoreDefinition($organization, $project, $definitionId, $deleted, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefinitionsApi->definitionsRestoreDefinition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **definitionId** | **int**| The identifier of the definition to restore. |
 **deleted** | **bool**| When false, restores a deleted definition. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.7&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\BuildDefinition**](../Model/BuildDefinition.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **definitionsUpdate**
> \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\BuildDefinition definitionsUpdate($organization, $body, $project, $definitionId, $apiVersion, $secretsSourceDefinitionId, $secretsSourceDefinitionRevision)



Updates an existing definition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Build\Api\DefinitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\BuildDefinition(); // \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\BuildDefinition | The new version of the definition.
$project = "project_example"; // string | Project ID or project name
$definitionId = 56; // int | The ID of the definition.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.7' to use this version of the api.
$secretsSourceDefinitionId = 56; // int | 
$secretsSourceDefinitionRevision = 56; // int | 

try {
    $result = $apiInstance->definitionsUpdate($organization, $body, $project, $definitionId, $apiVersion, $secretsSourceDefinitionId, $secretsSourceDefinitionRevision);
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
 **body** | [**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\BuildDefinition**](../Model/BuildDefinition.md)| The new version of the definition. |
 **project** | **string**| Project ID or project name |
 **definitionId** | **int**| The ID of the definition. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.7&#39; to use this version of the api. |
 **secretsSourceDefinitionId** | **int**|  | [optional]
 **secretsSourceDefinitionRevision** | **int**|  | [optional]

### Return type

[**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\BuildDefinition**](../Model/BuildDefinition.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

