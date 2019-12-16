# AzureDevOpsClient\Search\RepositoriesApi

All URIs are relative to *https://almsearch.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**repositoriesGet**](RepositoriesApi.md#repositoriesGet) | **GET** /{organization}/{project}/_apis/search/status/repositories/{repository} | 


# **repositoriesGet**
> \AzureDevOpsClient\Search\AzureDevOpsClient\Search\Model\RepositoryStatusResponse repositoriesGet($organization, $project, $repository, $apiVersion)



Provides status of Repository.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Search\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Search\Api\RepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$repository = "repository_example"; // string | Repository ID or repository name.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->repositoriesGet($organization, $project, $repository, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoriesApi->repositoriesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **repository** | **string**| Repository ID or repository name. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Search\AzureDevOpsClient\Search\Model\RepositoryStatusResponse**](../Model/RepositoryStatusResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

