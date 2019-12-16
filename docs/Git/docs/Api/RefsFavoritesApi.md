# AzureDevOpsClient\Git\RefsFavoritesApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**refsFavoritesCreate**](RefsFavoritesApi.md#refsFavoritesCreate) | **POST** /{organization}/{project}/_apis/git/favorites/refs | 
[**refsFavoritesDelete**](RefsFavoritesApi.md#refsFavoritesDelete) | **DELETE** /{organization}/{project}/_apis/git/favorites/refs/{favoriteId} | 
[**refsFavoritesGet**](RefsFavoritesApi.md#refsFavoritesGet) | **GET** /{organization}/{project}/_apis/git/favorites/refs/{favoriteId} | 
[**refsFavoritesList**](RefsFavoritesApi.md#refsFavoritesList) | **GET** /{organization}/{project}/_apis/git/favorites/refs | 


# **refsFavoritesCreate**
> \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitRefFavorite refsFavoritesCreate($organization, $body, $project, $apiVersion)



Creates a ref favorite

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Git\Api\RefsFavoritesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitRefFavorite(); // \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitRefFavorite | The ref favorite to create.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->refsFavoritesCreate($organization, $body, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefsFavoritesApi->refsFavoritesCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitRefFavorite**](../Model/GitRefFavorite.md)| The ref favorite to create. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitRefFavorite**](../Model/GitRefFavorite.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refsFavoritesDelete**
> refsFavoritesDelete($organization, $project, $favoriteId, $apiVersion)



Deletes the refs favorite specified

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Git\Api\RefsFavoritesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$favoriteId = 56; // int | The Id of the ref favorite to delete.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->refsFavoritesDelete($organization, $project, $favoriteId, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling RefsFavoritesApi->refsFavoritesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **favoriteId** | **int**| The Id of the ref favorite to delete. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refsFavoritesGet**
> \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitRefFavorite refsFavoritesGet($organization, $project, $favoriteId, $apiVersion)



Gets the refs favorite for a favorite Id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Git\Api\RefsFavoritesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$favoriteId = 56; // int | The Id of the requested ref favorite.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->refsFavoritesGet($organization, $project, $favoriteId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefsFavoritesApi->refsFavoritesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **favoriteId** | **int**| The Id of the requested ref favorite. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitRefFavorite**](../Model/GitRefFavorite.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refsFavoritesList**
> \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitRefFavorite[] refsFavoritesList($organization, $project, $apiVersion, $repositoryId, $identityId)



Gets the refs favorites for a repo and an identity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Git\Api\RefsFavoritesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$repositoryId = "repositoryId_example"; // string | The id of the repository.
$identityId = "identityId_example"; // string | The id of the identity whose favorites are to be retrieved. If null, the requesting identity is used.

try {
    $result = $apiInstance->refsFavoritesList($organization, $project, $apiVersion, $repositoryId, $identityId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefsFavoritesApi->refsFavoritesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **repositoryId** | **string**| The id of the repository. | [optional]
 **identityId** | **string**| The id of the identity whose favorites are to be retrieved. If null, the requesting identity is used. | [optional]

### Return type

[**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitRefFavorite[]**](../Model/GitRefFavorite.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

