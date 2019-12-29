# FrankHouweling\AzureDevOpsClient\Git\RepositoriesApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**repositoriesCreate**](RepositoriesApi.md#repositoriesCreate) | **POST** /{organization}/{project}/_apis/git/repositories | 
[**repositoriesDelete**](RepositoriesApi.md#repositoriesDelete) | **DELETE** /{organization}/{project}/_apis/git/repositories/{repositoryId} | 
[**repositoriesDeleteRepositoryFromRecycleBin**](RepositoriesApi.md#repositoriesDeleteRepositoryFromRecycleBin) | **DELETE** /{organization}/{project}/_apis/git/recycleBin/repositories/{repositoryId} | 
[**repositoriesGetDeletedRepositories**](RepositoriesApi.md#repositoriesGetDeletedRepositories) | **GET** /{organization}/{project}/_apis/git/deletedrepositories | 
[**repositoriesGetRecycleBinRepositories**](RepositoriesApi.md#repositoriesGetRecycleBinRepositories) | **GET** /{organization}/{project}/_apis/git/recycleBin/repositories | 
[**repositoriesGetRepository**](RepositoriesApi.md#repositoriesGetRepository) | **GET** /{organization}/{project}/_apis/git/repositories/{repositoryId} | 
[**repositoriesList**](RepositoriesApi.md#repositoriesList) | **GET** /{organization}/{project}/_apis/git/repositories | 
[**repositoriesRestoreRepositoryFromRecycleBin**](RepositoriesApi.md#repositoriesRestoreRepositoryFromRecycleBin) | **PATCH** /{organization}/{project}/_apis/git/recycleBin/repositories/{repositoryId} | 
[**repositoriesUpdate**](RepositoriesApi.md#repositoriesUpdate) | **PATCH** /{organization}/{project}/_apis/git/repositories/{repositoryId} | 


# **repositoriesCreate**
> \FrankHouweling\AzureDevOpsClient\Git\Model\GitRepository repositoriesCreate($organization, $body, $project, $apiVersion, $sourceRef)



Create a git repository in a team project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Git\Model\GitRepositoryCreateOptions(); // \FrankHouweling\AzureDevOpsClient\Git\Model\GitRepositoryCreateOptions | Specify the repo name, team project and/or parent repository. Team project information can be omitted from gitRepositoryToCreate if the request is project-scoped (i.e., includes project Id).
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$sourceRef = "sourceRef_example"; // string | [optional] Specify the source refs to use while creating a fork repo

try {
    $result = $apiInstance->repositoriesCreate($organization, $body, $project, $apiVersion, $sourceRef);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->repositoriesCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\GitRepositoryCreateOptions**](../Model/GitRepositoryCreateOptions.md)| Specify the repo name, team project and/or parent repository. Team project information can be omitted from gitRepositoryToCreate if the request is project-scoped (i.e., includes project Id). |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **sourceRef** | **string**| [optional] Specify the source refs to use while creating a fork repo | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Git\Model\GitRepository**](../Model/GitRepository.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **repositoriesDelete**
> repositoriesDelete($organization, $repositoryId, $project, $apiVersion)



Delete a git repository

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$repositoryId = "repositoryId_example"; // string | The ID of the repository.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->repositoriesDelete($organization, $repositoryId, $project, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->repositoriesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **repositoryId** | [**string**](../Model/.md)| The ID of the repository. |
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

# **repositoriesDeleteRepositoryFromRecycleBin**
> repositoriesDeleteRepositoryFromRecycleBin($organization, $project, $repositoryId, $apiVersion)



Destroy (hard delete) a soft-deleted Git repository.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$repositoryId = "repositoryId_example"; // string | The ID of the repository.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->repositoriesDeleteRepositoryFromRecycleBin($organization, $project, $repositoryId, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->repositoriesDeleteRepositoryFromRecycleBin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **repositoryId** | [**string**](../Model/.md)| The ID of the repository. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **repositoriesGetDeletedRepositories**
> \FrankHouweling\AzureDevOpsClient\Git\Model\GitDeletedRepository[] repositoriesGetDeletedRepositories($organization, $project, $apiVersion)



Retrieve deleted git repositories.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->repositoriesGetDeletedRepositories($organization, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->repositoriesGetDeletedRepositories: ', $e->getMessage(), PHP_EOL;
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

[**\FrankHouweling\AzureDevOpsClient\Git\Model\GitDeletedRepository[]**](../Model/GitDeletedRepository.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **repositoriesGetRecycleBinRepositories**
> \FrankHouweling\AzureDevOpsClient\Git\Model\GitDeletedRepository[] repositoriesGetRecycleBinRepositories($organization, $project, $apiVersion)



Retrieve soft-deleted git repositories from the recycle bin.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->repositoriesGetRecycleBinRepositories($organization, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->repositoriesGetRecycleBinRepositories: ', $e->getMessage(), PHP_EOL;
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

[**\FrankHouweling\AzureDevOpsClient\Git\Model\GitDeletedRepository[]**](../Model/GitDeletedRepository.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **repositoriesGetRepository**
> \FrankHouweling\AzureDevOpsClient\Git\Model\GitRepository repositoriesGetRepository($organization, $repositoryId, $project, $apiVersion)



Retrieve a git repository.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$repositoryId = "repositoryId_example"; // string | The name or ID of the repository.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->repositoriesGetRepository($organization, $repositoryId, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->repositoriesGetRepository: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **repositoryId** | **string**| The name or ID of the repository. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Git\Model\GitRepository**](../Model/GitRepository.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **repositoriesList**
> \FrankHouweling\AzureDevOpsClient\Git\Model\GitRepository[] repositoriesList($organization, $project, $apiVersion, $includeLinks, $includeAllUrls, $includeHidden)



Retrieve git repositories.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$includeLinks = true; // bool | [optional] True to include reference links. The default value is false.
$includeAllUrls = true; // bool | [optional] True to include all remote URLs. The default value is false.
$includeHidden = true; // bool | [optional] True to include hidden repositories. The default value is false.

try {
    $result = $apiInstance->repositoriesList($organization, $project, $apiVersion, $includeLinks, $includeAllUrls, $includeHidden);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->repositoriesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **includeLinks** | **bool**| [optional] True to include reference links. The default value is false. | [optional]
 **includeAllUrls** | **bool**| [optional] True to include all remote URLs. The default value is false. | [optional]
 **includeHidden** | **bool**| [optional] True to include hidden repositories. The default value is false. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Git\Model\GitRepository[]**](../Model/GitRepository.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **repositoriesRestoreRepositoryFromRecycleBin**
> \FrankHouweling\AzureDevOpsClient\Git\Model\GitRepository repositoriesRestoreRepositoryFromRecycleBin($organization, $body, $project, $repositoryId, $apiVersion)



Recover a soft-deleted Git repository. Recently deleted repositories go into a soft-delete state for a period of time before they are hard deleted and become unrecoverable.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Git\Model\GitRecycleBinRepositoryDetails(); // \FrankHouweling\AzureDevOpsClient\Git\Model\GitRecycleBinRepositoryDetails | 
$project = "project_example"; // string | Project ID or project name
$repositoryId = "repositoryId_example"; // string | The ID of the repository.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->repositoriesRestoreRepositoryFromRecycleBin($organization, $body, $project, $repositoryId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->repositoriesRestoreRepositoryFromRecycleBin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\GitRecycleBinRepositoryDetails**](../Model/GitRecycleBinRepositoryDetails.md)|  |
 **project** | **string**| Project ID or project name |
 **repositoryId** | [**string**](../Model/.md)| The ID of the repository. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Git\Model\GitRepository**](../Model/GitRepository.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **repositoriesUpdate**
> \FrankHouweling\AzureDevOpsClient\Git\Model\GitRepository repositoriesUpdate($organization, $body, $repositoryId, $project, $apiVersion)



Updates the Git repository with either a new repo name or a new default branch.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Git\Model\GitRepository(); // \FrankHouweling\AzureDevOpsClient\Git\Model\GitRepository | Specify a new repo name or a new default branch of the repository
$repositoryId = "repositoryId_example"; // string | The ID of the repository.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->repositoriesUpdate($organization, $body, $repositoryId, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->repositoriesUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\GitRepository**](../Model/GitRepository.md)| Specify a new repo name or a new default branch of the repository |
 **repositoryId** | [**string**](../Model/.md)| The ID of the repository. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Git\Model\GitRepository**](../Model/GitRepository.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

