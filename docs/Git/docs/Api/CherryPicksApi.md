# AzureDevOpsClient\Git\CherryPicksApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cherryPicksCreate**](CherryPicksApi.md#cherryPicksCreate) | **POST** /{organization}/{project}/_apis/git/repositories/{repositoryId}/cherryPicks | 
[**cherryPicksGetCherryPick**](CherryPicksApi.md#cherryPicksGetCherryPick) | **GET** /{organization}/{project}/_apis/git/repositories/{repositoryId}/cherryPicks/{cherryPickId} | 
[**cherryPicksGetCherryPickForRefName**](CherryPicksApi.md#cherryPicksGetCherryPickForRefName) | **GET** /{organization}/{project}/_apis/git/repositories/{repositoryId}/cherryPicks | 


# **cherryPicksCreate**
> \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitCherryPick cherryPicksCreate($organization, $body, $project, $repositoryId, $apiVersion)



Cherry pick a specific commit or commits that are associated to a pull request into a new branch.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Git\Api\CherryPicksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitAsyncRefOperationParameters(); // \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitAsyncRefOperationParameters | 
$project = "project_example"; // string | Project ID or project name
$repositoryId = "repositoryId_example"; // string | ID of the repository.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->cherryPicksCreate($organization, $body, $project, $repositoryId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CherryPicksApi->cherryPicksCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitAsyncRefOperationParameters**](../Model/GitAsyncRefOperationParameters.md)|  |
 **project** | **string**| Project ID or project name |
 **repositoryId** | **string**| ID of the repository. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitCherryPick**](../Model/GitCherryPick.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cherryPicksGetCherryPick**
> \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitCherryPick cherryPicksGetCherryPick($organization, $project, $cherryPickId, $repositoryId, $apiVersion)



Retrieve information about a cherry pick by cherry pick Id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Git\Api\CherryPicksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$cherryPickId = 56; // int | ID of the cherry pick.
$repositoryId = "repositoryId_example"; // string | ID of the repository.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->cherryPicksGetCherryPick($organization, $project, $cherryPickId, $repositoryId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CherryPicksApi->cherryPicksGetCherryPick: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **cherryPickId** | **int**| ID of the cherry pick. |
 **repositoryId** | **string**| ID of the repository. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitCherryPick**](../Model/GitCherryPick.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cherryPicksGetCherryPickForRefName**
> \AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitCherryPick cherryPicksGetCherryPickForRefName($organization, $project, $repositoryId, $refName, $apiVersion)



Retrieve information about a cherry pick for a specific branch.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Git\Api\CherryPicksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$repositoryId = "repositoryId_example"; // string | ID of the repository.
$refName = "refName_example"; // string | The GitAsyncRefOperationParameters generatedRefName used for the cherry pick operation.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->cherryPicksGetCherryPickForRefName($organization, $project, $repositoryId, $refName, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CherryPicksApi->cherryPicksGetCherryPickForRefName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **repositoryId** | **string**| ID of the repository. |
 **refName** | **string**| The GitAsyncRefOperationParameters generatedRefName used for the cherry pick operation. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitCherryPick**](../Model/GitCherryPick.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

