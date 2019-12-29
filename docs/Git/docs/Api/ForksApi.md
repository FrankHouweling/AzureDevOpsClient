# FrankHouweling\AzureDevOpsClient\Git\ForksApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**forksCreateForkSyncRequest**](ForksApi.md#forksCreateForkSyncRequest) | **POST** /{organization}/{project}/_apis/git/repositories/{repositoryNameOrId}/forkSyncRequests | 
[**forksGetForkSyncRequest**](ForksApi.md#forksGetForkSyncRequest) | **GET** /{organization}/{project}/_apis/git/repositories/{repositoryNameOrId}/forkSyncRequests/{forkSyncOperationId} | 
[**forksGetForkSyncRequests**](ForksApi.md#forksGetForkSyncRequests) | **GET** /{organization}/{project}/_apis/git/repositories/{repositoryNameOrId}/forkSyncRequests | 
[**forksList**](ForksApi.md#forksList) | **GET** /{organization}/{project}/_apis/git/repositories/{repositoryNameOrId}/forks/{collectionId} | 


# **forksCreateForkSyncRequest**
> \FrankHouweling\AzureDevOpsClient\Git\Model\GitForkSyncRequest forksCreateForkSyncRequest($organization, $body, $repositoryNameOrId, $project, $apiVersion, $includeLinks)



Request that another repository's refs be fetched into this one. It syncs two existing forks. To create a fork, please see the <a href=\"https://docs.microsoft.com/en-us/rest/api/vsts/git/repositories/create?view=azure-devops-rest-5.1\"> repositories endpoint</a>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\ForksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Git\Model\GitForkSyncRequestParameters(); // \FrankHouweling\AzureDevOpsClient\Git\Model\GitForkSyncRequestParameters | Source repository and ref mapping.
$repositoryNameOrId = "repositoryNameOrId_example"; // string | The name or ID of the repository.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$includeLinks = true; // bool | True to include links

try {
    $result = $apiInstance->forksCreateForkSyncRequest($organization, $body, $repositoryNameOrId, $project, $apiVersion, $includeLinks);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForksApi->forksCreateForkSyncRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\GitForkSyncRequestParameters**](../Model/GitForkSyncRequestParameters.md)| Source repository and ref mapping. |
 **repositoryNameOrId** | **string**| The name or ID of the repository. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **includeLinks** | **bool**| True to include links | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Git\Model\GitForkSyncRequest**](../Model/GitForkSyncRequest.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **forksGetForkSyncRequest**
> \FrankHouweling\AzureDevOpsClient\Git\Model\GitForkSyncRequest forksGetForkSyncRequest($organization, $repositoryNameOrId, $forkSyncOperationId, $project, $apiVersion, $includeLinks)



Get a specific fork sync operation's details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\ForksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$repositoryNameOrId = "repositoryNameOrId_example"; // string | The name or ID of the repository.
$forkSyncOperationId = 56; // int | OperationId of the sync request.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$includeLinks = true; // bool | True to include links.

try {
    $result = $apiInstance->forksGetForkSyncRequest($organization, $repositoryNameOrId, $forkSyncOperationId, $project, $apiVersion, $includeLinks);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForksApi->forksGetForkSyncRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **repositoryNameOrId** | **string**| The name or ID of the repository. |
 **forkSyncOperationId** | **int**| OperationId of the sync request. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **includeLinks** | **bool**| True to include links. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Git\Model\GitForkSyncRequest**](../Model/GitForkSyncRequest.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **forksGetForkSyncRequests**
> \FrankHouweling\AzureDevOpsClient\Git\Model\GitForkSyncRequest[] forksGetForkSyncRequests($organization, $repositoryNameOrId, $project, $apiVersion, $includeAbandoned, $includeLinks)



Retrieve all requested fork sync operations on this repository.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\ForksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$repositoryNameOrId = "repositoryNameOrId_example"; // string | The name or ID of the repository.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$includeAbandoned = true; // bool | True to include abandoned requests.
$includeLinks = true; // bool | True to include links.

try {
    $result = $apiInstance->forksGetForkSyncRequests($organization, $repositoryNameOrId, $project, $apiVersion, $includeAbandoned, $includeLinks);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForksApi->forksGetForkSyncRequests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **repositoryNameOrId** | **string**| The name or ID of the repository. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **includeAbandoned** | **bool**| True to include abandoned requests. | [optional]
 **includeLinks** | **bool**| True to include links. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Git\Model\GitForkSyncRequest[]**](../Model/GitForkSyncRequest.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **forksList**
> \FrankHouweling\AzureDevOpsClient\Git\Model\GitRepositoryRef[] forksList($organization, $repositoryNameOrId, $collectionId, $project, $apiVersion, $includeLinks)



Retrieve all forks of a repository in the collection.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\ForksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$repositoryNameOrId = "repositoryNameOrId_example"; // string | The name or ID of the repository.
$collectionId = "collectionId_example"; // string | Team project collection ID.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$includeLinks = true; // bool | True to include links.

try {
    $result = $apiInstance->forksList($organization, $repositoryNameOrId, $collectionId, $project, $apiVersion, $includeLinks);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForksApi->forksList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **repositoryNameOrId** | **string**| The name or ID of the repository. |
 **collectionId** | [**string**](../Model/.md)| Team project collection ID. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **includeLinks** | **bool**| True to include links. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Git\Model\GitRepositoryRef[]**](../Model/GitRepositoryRef.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

