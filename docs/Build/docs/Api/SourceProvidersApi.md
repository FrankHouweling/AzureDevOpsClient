# AzureDevOpsClient\Build\SourceProvidersApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sourceProvidersGetFileContents**](SourceProvidersApi.md#sourceProvidersGetFileContents) | **GET** /{organization}/{project}/_apis/sourceProviders/{providerName}/filecontents | 
[**sourceProvidersGetPathContents**](SourceProvidersApi.md#sourceProvidersGetPathContents) | **GET** /{organization}/{project}/_apis/sourceProviders/{providerName}/pathcontents | 
[**sourceProvidersGetPullRequest**](SourceProvidersApi.md#sourceProvidersGetPullRequest) | **GET** /{organization}/{project}/_apis/sourceProviders/{providerName}/pullrequests/{pullRequestId} | 
[**sourceProvidersList**](SourceProvidersApi.md#sourceProvidersList) | **GET** /{organization}/{project}/_apis/sourceproviders | 
[**sourceProvidersListBranches**](SourceProvidersApi.md#sourceProvidersListBranches) | **GET** /{organization}/{project}/_apis/sourceProviders/{providerName}/branches | 
[**sourceProvidersListRepositories**](SourceProvidersApi.md#sourceProvidersListRepositories) | **GET** /{organization}/{project}/_apis/sourceProviders/{providerName}/repositories | 
[**sourceProvidersListWebhooks**](SourceProvidersApi.md#sourceProvidersListWebhooks) | **GET** /{organization}/{project}/_apis/sourceProviders/{providerName}/webhooks | 
[**sourceProvidersRestoreWebhooks**](SourceProvidersApi.md#sourceProvidersRestoreWebhooks) | **POST** /{organization}/{project}/_apis/sourceProviders/{providerName}/webhooks | 


# **sourceProvidersGetFileContents**
> string sourceProvidersGetFileContents($organization, $project, $providerName, $apiVersion, $serviceEndpointId, $repository, $commitOrBranch, $path)



Gets the contents of a file in the given source code repository.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new AzureDevOpsClient\Build\Api\SourceProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$providerName = "providerName_example"; // string | The name of the source provider.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$serviceEndpointId = "serviceEndpointId_example"; // string | If specified, the ID of the service endpoint to query. Can only be omitted for providers that do not use service endpoints, e.g. TFVC or TFGit.
$repository = "repository_example"; // string | If specified, the vendor-specific identifier or the name of the repository to get branches. Can only be omitted for providers that do not support multiple repositories.
$commitOrBranch = "commitOrBranch_example"; // string | The identifier of the commit or branch from which a file's contents are retrieved.
$path = "path_example"; // string | The path to the file to retrieve, relative to the root of the repository.

try {
    $result = $apiInstance->sourceProvidersGetFileContents($organization, $project, $providerName, $apiVersion, $serviceEndpointId, $repository, $commitOrBranch, $path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SourceProvidersApi->sourceProvidersGetFileContents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **providerName** | **string**| The name of the source provider. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **serviceEndpointId** | [**string**](../Model/.md)| If specified, the ID of the service endpoint to query. Can only be omitted for providers that do not use service endpoints, e.g. TFVC or TFGit. | [optional]
 **repository** | **string**| If specified, the vendor-specific identifier or the name of the repository to get branches. Can only be omitted for providers that do not support multiple repositories. | [optional]
 **commitOrBranch** | **string**| The identifier of the commit or branch from which a file&#39;s contents are retrieved. | [optional]
 **path** | **string**| The path to the file to retrieve, relative to the root of the repository. | [optional]

### Return type

**string**

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sourceProvidersGetPathContents**
> \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\SourceRepositoryItem[] sourceProvidersGetPathContents($organization, $project, $providerName, $apiVersion, $serviceEndpointId, $repository, $commitOrBranch, $path)



Gets the contents of a directory in the given source code repository.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new AzureDevOpsClient\Build\Api\SourceProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$providerName = "providerName_example"; // string | The name of the source provider.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$serviceEndpointId = "serviceEndpointId_example"; // string | If specified, the ID of the service endpoint to query. Can only be omitted for providers that do not use service endpoints, e.g. TFVC or TFGit.
$repository = "repository_example"; // string | If specified, the vendor-specific identifier or the name of the repository to get branches. Can only be omitted for providers that do not support multiple repositories.
$commitOrBranch = "commitOrBranch_example"; // string | The identifier of the commit or branch from which a file's contents are retrieved.
$path = "path_example"; // string | The path contents to list, relative to the root of the repository.

try {
    $result = $apiInstance->sourceProvidersGetPathContents($organization, $project, $providerName, $apiVersion, $serviceEndpointId, $repository, $commitOrBranch, $path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SourceProvidersApi->sourceProvidersGetPathContents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **providerName** | **string**| The name of the source provider. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **serviceEndpointId** | [**string**](../Model/.md)| If specified, the ID of the service endpoint to query. Can only be omitted for providers that do not use service endpoints, e.g. TFVC or TFGit. | [optional]
 **repository** | **string**| If specified, the vendor-specific identifier or the name of the repository to get branches. Can only be omitted for providers that do not support multiple repositories. | [optional]
 **commitOrBranch** | **string**| The identifier of the commit or branch from which a file&#39;s contents are retrieved. | [optional]
 **path** | **string**| The path contents to list, relative to the root of the repository. | [optional]

### Return type

[**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\SourceRepositoryItem[]**](../Model/SourceRepositoryItem.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sourceProvidersGetPullRequest**
> \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\PullRequest sourceProvidersGetPullRequest($organization, $project, $providerName, $pullRequestId, $apiVersion, $repositoryId, $serviceEndpointId)



Gets a pull request object from source provider.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new AzureDevOpsClient\Build\Api\SourceProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$providerName = "providerName_example"; // string | The name of the source provider.
$pullRequestId = "pullRequestId_example"; // string | Vendor-specific id of the pull request.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$repositoryId = "repositoryId_example"; // string | Vendor-specific identifier or the name of the repository that contains the pull request.
$serviceEndpointId = "serviceEndpointId_example"; // string | If specified, the ID of the service endpoint to query. Can only be omitted for providers that do not use service endpoints, e.g. TFVC or TFGit.

try {
    $result = $apiInstance->sourceProvidersGetPullRequest($organization, $project, $providerName, $pullRequestId, $apiVersion, $repositoryId, $serviceEndpointId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SourceProvidersApi->sourceProvidersGetPullRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **providerName** | **string**| The name of the source provider. |
 **pullRequestId** | **string**| Vendor-specific id of the pull request. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **repositoryId** | **string**| Vendor-specific identifier or the name of the repository that contains the pull request. | [optional]
 **serviceEndpointId** | [**string**](../Model/.md)| If specified, the ID of the service endpoint to query. Can only be omitted for providers that do not use service endpoints, e.g. TFVC or TFGit. | [optional]

### Return type

[**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\PullRequest**](../Model/PullRequest.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sourceProvidersList**
> \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\SourceProviderAttributes[] sourceProvidersList($organization, $project, $apiVersion)



Get a list of source providers and their capabilities.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new AzureDevOpsClient\Build\Api\SourceProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->sourceProvidersList($organization, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SourceProvidersApi->sourceProvidersList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\SourceProviderAttributes[]**](../Model/SourceProviderAttributes.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sourceProvidersListBranches**
> string[] sourceProvidersListBranches($organization, $project, $providerName, $apiVersion, $serviceEndpointId, $repository, $branchName)



Gets a list of branches for the given source code repository.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new AzureDevOpsClient\Build\Api\SourceProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$providerName = "providerName_example"; // string | The name of the source provider.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$serviceEndpointId = "serviceEndpointId_example"; // string | If specified, the ID of the service endpoint to query. Can only be omitted for providers that do not use service endpoints, e.g. TFVC or TFGit.
$repository = "repository_example"; // string | The vendor-specific identifier or the name of the repository to get branches. Can only be omitted for providers that do not support multiple repositories.
$branchName = "branchName_example"; // string | If supplied, the name of the branch to check for specifically.

try {
    $result = $apiInstance->sourceProvidersListBranches($organization, $project, $providerName, $apiVersion, $serviceEndpointId, $repository, $branchName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SourceProvidersApi->sourceProvidersListBranches: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **providerName** | **string**| The name of the source provider. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **serviceEndpointId** | [**string**](../Model/.md)| If specified, the ID of the service endpoint to query. Can only be omitted for providers that do not use service endpoints, e.g. TFVC or TFGit. | [optional]
 **repository** | **string**| The vendor-specific identifier or the name of the repository to get branches. Can only be omitted for providers that do not support multiple repositories. | [optional]
 **branchName** | **string**| If supplied, the name of the branch to check for specifically. | [optional]

### Return type

**string[]**

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sourceProvidersListRepositories**
> \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\SourceRepositories sourceProvidersListRepositories($organization, $project, $providerName, $apiVersion, $serviceEndpointId, $repository, $resultSet, $pageResults, $continuationToken)



Gets a list of source code repositories.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new AzureDevOpsClient\Build\Api\SourceProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$providerName = "providerName_example"; // string | The name of the source provider.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$serviceEndpointId = "serviceEndpointId_example"; // string | If specified, the ID of the service endpoint to query. Can only be omitted for providers that do not use service endpoints, e.g. TFVC or TFGit.
$repository = "repository_example"; // string | If specified, the vendor-specific identifier or the name of a single repository to get.
$resultSet = "resultSet_example"; // string | 'top' for the repositories most relevant for the endpoint. If not set, all repositories are returned. Ignored if 'repository' is set.
$pageResults = true; // bool | If set to true, this will limit the set of results and will return a continuation token to continue the query.
$continuationToken = "continuationToken_example"; // string | When paging results, this is a continuation token, returned by a previous call to this method, that can be used to return the next set of repositories.

try {
    $result = $apiInstance->sourceProvidersListRepositories($organization, $project, $providerName, $apiVersion, $serviceEndpointId, $repository, $resultSet, $pageResults, $continuationToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SourceProvidersApi->sourceProvidersListRepositories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **providerName** | **string**| The name of the source provider. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **serviceEndpointId** | [**string**](../Model/.md)| If specified, the ID of the service endpoint to query. Can only be omitted for providers that do not use service endpoints, e.g. TFVC or TFGit. | [optional]
 **repository** | **string**| If specified, the vendor-specific identifier or the name of a single repository to get. | [optional]
 **resultSet** | **string**| &#39;top&#39; for the repositories most relevant for the endpoint. If not set, all repositories are returned. Ignored if &#39;repository&#39; is set. | [optional]
 **pageResults** | **bool**| If set to true, this will limit the set of results and will return a continuation token to continue the query. | [optional]
 **continuationToken** | **string**| When paging results, this is a continuation token, returned by a previous call to this method, that can be used to return the next set of repositories. | [optional]

### Return type

[**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\SourceRepositories**](../Model/SourceRepositories.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sourceProvidersListWebhooks**
> \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\RepositoryWebhook[] sourceProvidersListWebhooks($organization, $project, $providerName, $apiVersion, $serviceEndpointId, $repository)



Gets a list of webhooks installed in the given source code repository.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new AzureDevOpsClient\Build\Api\SourceProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$providerName = "providerName_example"; // string | The name of the source provider.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$serviceEndpointId = "serviceEndpointId_example"; // string | If specified, the ID of the service endpoint to query. Can only be omitted for providers that do not use service endpoints, e.g. TFVC or TFGit.
$repository = "repository_example"; // string | If specified, the vendor-specific identifier or the name of the repository to get webhooks. Can only be omitted for providers that do not support multiple repositories.

try {
    $result = $apiInstance->sourceProvidersListWebhooks($organization, $project, $providerName, $apiVersion, $serviceEndpointId, $repository);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SourceProvidersApi->sourceProvidersListWebhooks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **providerName** | **string**| The name of the source provider. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **serviceEndpointId** | [**string**](../Model/.md)| If specified, the ID of the service endpoint to query. Can only be omitted for providers that do not use service endpoints, e.g. TFVC or TFGit. | [optional]
 **repository** | **string**| If specified, the vendor-specific identifier or the name of the repository to get webhooks. Can only be omitted for providers that do not support multiple repositories. | [optional]

### Return type

[**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\RepositoryWebhook[]**](../Model/RepositoryWebhook.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sourceProvidersRestoreWebhooks**
> sourceProvidersRestoreWebhooks($organization, $body, $project, $providerName, $apiVersion, $serviceEndpointId, $repository)



Recreates the webhooks for the specified triggers in the given source code repository.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new AzureDevOpsClient\Build\Api\SourceProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = array(new \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\string[]()); // string[] | The types of triggers to restore webhooks for.
$project = "project_example"; // string | Project ID or project name
$providerName = "providerName_example"; // string | The name of the source provider.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$serviceEndpointId = "serviceEndpointId_example"; // string | If specified, the ID of the service endpoint to query. Can only be omitted for providers that do not use service endpoints, e.g. TFVC or TFGit.
$repository = "repository_example"; // string | If specified, the vendor-specific identifier or the name of the repository to get webhooks. Can only be omitted for providers that do not support multiple repositories.

try {
    $apiInstance->sourceProvidersRestoreWebhooks($organization, $body, $project, $providerName, $apiVersion, $serviceEndpointId, $repository);
} catch (Exception $e) {
    echo 'Exception when calling SourceProvidersApi->sourceProvidersRestoreWebhooks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | **string[]**| The types of triggers to restore webhooks for. |
 **project** | **string**| Project ID or project name |
 **providerName** | **string**| The name of the source provider. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **serviceEndpointId** | [**string**](../Model/.md)| If specified, the ID of the service endpoint to query. Can only be omitted for providers that do not use service endpoints, e.g. TFVC or TFGit. | [optional]
 **repository** | **string**| If specified, the vendor-specific identifier or the name of the repository to get webhooks. Can only be omitted for providers that do not support multiple repositories. | [optional]

### Return type

void (empty response body)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

