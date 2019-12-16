# AzureDevOpsClient\Git\ImportRequestsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**importRequestsCreate**](ImportRequestsApi.md#importRequestsCreate) | **POST** /{organization}/{project}/_apis/git/repositories/{repositoryId}/importRequests | 
[**importRequestsGet**](ImportRequestsApi.md#importRequestsGet) | **GET** /{organization}/{project}/_apis/git/repositories/{repositoryId}/importRequests/{importRequestId} | 
[**importRequestsQuery**](ImportRequestsApi.md#importRequestsQuery) | **GET** /{organization}/{project}/_apis/git/repositories/{repositoryId}/importRequests | 
[**importRequestsUpdate**](ImportRequestsApi.md#importRequestsUpdate) | **PATCH** /{organization}/{project}/_apis/git/repositories/{repositoryId}/importRequests/{importRequestId} | 


# **importRequestsCreate**
> \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitImportRequest importRequestsCreate($organization, $body, $project, $repositoryId, $apiVersion)



Create an import request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Git\Api\ImportRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitImportRequest(); // \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitImportRequest | The import request to create.
$project = "project_example"; // string | Project ID or project name
$repositoryId = "repositoryId_example"; // string | The name or ID of the repository.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->importRequestsCreate($organization, $body, $project, $repositoryId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportRequestsApi->importRequestsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitImportRequest**](../Model/GitImportRequest.md)| The import request to create. |
 **project** | **string**| Project ID or project name |
 **repositoryId** | **string**| The name or ID of the repository. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitImportRequest**](../Model/GitImportRequest.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importRequestsGet**
> \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitImportRequest importRequestsGet($organization, $project, $repositoryId, $importRequestId, $apiVersion)



Retrieve a particular import request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Git\Api\ImportRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$repositoryId = "repositoryId_example"; // string | The name or ID of the repository.
$importRequestId = 56; // int | The unique identifier for the import request.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->importRequestsGet($organization, $project, $repositoryId, $importRequestId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportRequestsApi->importRequestsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **repositoryId** | **string**| The name or ID of the repository. |
 **importRequestId** | **int**| The unique identifier for the import request. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitImportRequest**](../Model/GitImportRequest.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importRequestsQuery**
> \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitImportRequest[] importRequestsQuery($organization, $project, $repositoryId, $apiVersion, $includeAbandoned)



Retrieve import requests for a repository.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Git\Api\ImportRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$repositoryId = "repositoryId_example"; // string | The name or ID of the repository.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$includeAbandoned = true; // bool | True to include abandoned import requests in the results.

try {
    $result = $apiInstance->importRequestsQuery($organization, $project, $repositoryId, $apiVersion, $includeAbandoned);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportRequestsApi->importRequestsQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **repositoryId** | **string**| The name or ID of the repository. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **includeAbandoned** | **bool**| True to include abandoned import requests in the results. | [optional]

### Return type

[**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitImportRequest[]**](../Model/GitImportRequest.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importRequestsUpdate**
> \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitImportRequest importRequestsUpdate($organization, $body, $project, $repositoryId, $importRequestId, $apiVersion)



Retry or abandon a failed import request.  There can only be one active import request associated with a repository. Marking a failed import request abandoned makes it inactive.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Git\Api\ImportRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitImportRequest(); // \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitImportRequest | The updated version of the import request. Currently, the only change allowed is setting the Status to Queued or Abandoned.
$project = "project_example"; // string | Project ID or project name
$repositoryId = "repositoryId_example"; // string | The name or ID of the repository.
$importRequestId = 56; // int | The unique identifier for the import request to update.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->importRequestsUpdate($organization, $body, $project, $repositoryId, $importRequestId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportRequestsApi->importRequestsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitImportRequest**](../Model/GitImportRequest.md)| The updated version of the import request. Currently, the only change allowed is setting the Status to Queued or Abandoned. |
 **project** | **string**| Project ID or project name |
 **repositoryId** | **string**| The name or ID of the repository. |
 **importRequestId** | **int**| The unique identifier for the import request to update. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitImportRequest**](../Model/GitImportRequest.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

