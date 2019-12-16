# FrankHouweling\AzureDevOpsClient\Core\ProjectsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**projectsCreate**](ProjectsApi.md#projectsCreate) | **POST** /{organization}/_apis/projects | 
[**projectsDelete**](ProjectsApi.md#projectsDelete) | **DELETE** /{organization}/_apis/projects/{projectId} | 
[**projectsGet**](ProjectsApi.md#projectsGet) | **GET** /{organization}/_apis/projects/{projectId} | 
[**projectsGetProjectProperties**](ProjectsApi.md#projectsGetProjectProperties) | **GET** /{organization}/_apis/projects/{projectId}/properties | 
[**projectsList**](ProjectsApi.md#projectsList) | **GET** /{organization}/_apis/projects | 
[**projectsSetProjectProperties**](ProjectsApi.md#projectsSetProjectProperties) | **PATCH** /{organization}/_apis/projects/{projectId}/properties | 
[**projectsUpdate**](ProjectsApi.md#projectsUpdate) | **PATCH** /{organization}/_apis/projects/{projectId} | 


# **projectsCreate**
> \FrankHouweling\AzureDevOpsClient\Core\Model\OperationReference projectsCreate($organization, $body, $apiVersion)



Queues a project to be created. Use the [GetOperation](../../operations/operations/get) to periodically check for create project status.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Core\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Core\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Core\Model\TeamProject(); // \FrankHouweling\AzureDevOpsClient\Core\Model\TeamProject | The project to create.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.4' to use this version of the api.

try {
    $result = $apiInstance->projectsCreate($organization, $body, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Core\Model\TeamProject**](../Model/TeamProject.md)| The project to create. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.4&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Core\Model\OperationReference**](../Model/OperationReference.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsDelete**
> \FrankHouweling\AzureDevOpsClient\Core\Model\OperationReference projectsDelete($organization, $projectId, $apiVersion)



Queues a project to be deleted. Use the [GetOperation](../../operations/operations/get) to periodically check for delete project status.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Core\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Core\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$projectId = "projectId_example"; // string | The project id of the project to delete.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.4' to use this version of the api.

try {
    $result = $apiInstance->projectsDelete($organization, $projectId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **projectId** | [**string**](../Model/.md)| The project id of the project to delete. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.4&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Core\Model\OperationReference**](../Model/OperationReference.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsGet**
> \FrankHouweling\AzureDevOpsClient\Core\Model\TeamProject projectsGet($organization, $projectId, $apiVersion, $includeCapabilities, $includeHistory)



Get project with the specified id or name, optionally including capabilities.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Core\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Core\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$projectId = "projectId_example"; // string | 
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.4' to use this version of the api.
$includeCapabilities = true; // bool | Include capabilities (such as source control) in the team project result (default: false).
$includeHistory = true; // bool | Search within renamed projects (that had such name in the past).

try {
    $result = $apiInstance->projectsGet($organization, $projectId, $apiVersion, $includeCapabilities, $includeHistory);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **projectId** | **string**|  |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.4&#39; to use this version of the api. |
 **includeCapabilities** | **bool**| Include capabilities (such as source control) in the team project result (default: false). | [optional]
 **includeHistory** | **bool**| Search within renamed projects (that had such name in the past). | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Core\Model\TeamProject**](../Model/TeamProject.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsGetProjectProperties**
> \FrankHouweling\AzureDevOpsClient\Core\Model\ProjectProperty[] projectsGetProjectProperties($organization, $projectId, $apiVersion, $keys)



Get a collection of team project properties.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Core\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Core\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$projectId = "projectId_example"; // string | The team project ID.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$keys = "keys_example"; // string | A comma-delimited string of team project property names. Wildcard characters (\"?\" and \"*\") are supported. If no key is specified, all properties will be returned.

try {
    $result = $apiInstance->projectsGetProjectProperties($organization, $projectId, $apiVersion, $keys);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsGetProjectProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **projectId** | [**string**](../Model/.md)| The team project ID. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **keys** | **string**| A comma-delimited string of team project property names. Wildcard characters (\&quot;?\&quot; and \&quot;*\&quot;) are supported. If no key is specified, all properties will be returned. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Core\Model\ProjectProperty[]**](../Model/ProjectProperty.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsList**
> \FrankHouweling\AzureDevOpsClient\Core\Model\TeamProjectReference[] projectsList($organization, $apiVersion, $stateFilter, $top, $skip, $continuationToken, $getDefaultTeamImageUrl)



Get all projects in the organization that the authenticated user has access to.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Core\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Core\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.4' to use this version of the api.
$stateFilter = "stateFilter_example"; // string | Filter on team projects in a specific team project state (default: WellFormed).
$top = 56; // int | 
$skip = 56; // int | 
$continuationToken = "continuationToken_example"; // string | 
$getDefaultTeamImageUrl = true; // bool | 

try {
    $result = $apiInstance->projectsList($organization, $apiVersion, $stateFilter, $top, $skip, $continuationToken, $getDefaultTeamImageUrl);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.4&#39; to use this version of the api. |
 **stateFilter** | **string**| Filter on team projects in a specific team project state (default: WellFormed). | [optional]
 **top** | **int**|  | [optional]
 **skip** | **int**|  | [optional]
 **continuationToken** | **string**|  | [optional]
 **getDefaultTeamImageUrl** | **bool**|  | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Core\Model\TeamProjectReference[]**](../Model/TeamProjectReference.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsSetProjectProperties**
> projectsSetProjectProperties($organization, $projectId, $body, $apiVersion)



Create, update, and delete team project properties.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Core\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Core\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$projectId = "projectId_example"; // string | The team project ID.
$body = new \FrankHouweling\AzureDevOpsClient\Core\Model\JsonPatchDocument(); // \FrankHouweling\AzureDevOpsClient\Core\Model\JsonPatchDocument | A JSON Patch document that represents an array of property operations. See RFC 6902 for more details on JSON Patch. The accepted operation verbs are Add and Remove, where Add is used for both creating and updating properties. The path consists of a forward slash and a property name.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->projectsSetProjectProperties($organization, $projectId, $body, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsSetProjectProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **projectId** | [**string**](../Model/.md)| The team project ID. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Core\Model\JsonPatchDocument**](../Model/JsonPatchDocument.md)| A JSON Patch document that represents an array of property operations. See RFC 6902 for more details on JSON Patch. The accepted operation verbs are Add and Remove, where Add is used for both creating and updating properties. The path consists of a forward slash and a property name. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsUpdate**
> \FrankHouweling\AzureDevOpsClient\Core\Model\OperationReference projectsUpdate($organization, $body, $projectId, $apiVersion)



Update an existing project's name, abbreviation, description, or restore a project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Core\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Core\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Core\Model\TeamProject(); // \FrankHouweling\AzureDevOpsClient\Core\Model\TeamProject | The updates for the project. The state must be set to wellFormed to restore the project.
$projectId = "projectId_example"; // string | The project id of the project to update.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.4' to use this version of the api.

try {
    $result = $apiInstance->projectsUpdate($organization, $body, $projectId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Core\Model\TeamProject**](../Model/TeamProject.md)| The updates for the project. The state must be set to wellFormed to restore the project. |
 **projectId** | [**string**](../Model/.md)| The project id of the project to update. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.4&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Core\Model\OperationReference**](../Model/OperationReference.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

