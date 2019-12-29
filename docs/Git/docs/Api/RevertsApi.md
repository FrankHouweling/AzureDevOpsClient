# FrankHouweling\AzureDevOpsClient\Git\RevertsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**revertsCreate**](RevertsApi.md#revertsCreate) | **POST** /{organization}/{project}/_apis/git/repositories/{repositoryId}/reverts | 
[**revertsGetRevert**](RevertsApi.md#revertsGetRevert) | **GET** /{organization}/{project}/_apis/git/repositories/{repositoryId}/reverts/{revertId} | 
[**revertsGetRevertForRefName**](RevertsApi.md#revertsGetRevertForRefName) | **GET** /{organization}/{project}/_apis/git/repositories/{repositoryId}/reverts | 


# **revertsCreate**
> \FrankHouweling\AzureDevOpsClient\Git\Model\GitRevert revertsCreate($organization, $body, $project, $repositoryId, $apiVersion)



Starts the operation to create a new branch which reverts changes introduced by either a specific commit or commits that are associated to a pull request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\RevertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Git\Model\GitAsyncRefOperationParameters(); // \FrankHouweling\AzureDevOpsClient\Git\Model\GitAsyncRefOperationParameters | 
$project = "project_example"; // string | Project ID or project name
$repositoryId = "repositoryId_example"; // string | ID of the repository.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->revertsCreate($organization, $body, $project, $repositoryId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RevertsApi->revertsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\GitAsyncRefOperationParameters**](../Model/GitAsyncRefOperationParameters.md)|  |
 **project** | **string**| Project ID or project name |
 **repositoryId** | **string**| ID of the repository. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Git\Model\GitRevert**](../Model/GitRevert.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **revertsGetRevert**
> \FrankHouweling\AzureDevOpsClient\Git\Model\GitRevert revertsGetRevert($organization, $project, $revertId, $repositoryId, $apiVersion)



Retrieve information about a revert operation by revert Id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\RevertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$revertId = 56; // int | ID of the revert operation.
$repositoryId = "repositoryId_example"; // string | ID of the repository.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->revertsGetRevert($organization, $project, $revertId, $repositoryId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RevertsApi->revertsGetRevert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **revertId** | **int**| ID of the revert operation. |
 **repositoryId** | **string**| ID of the repository. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Git\Model\GitRevert**](../Model/GitRevert.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **revertsGetRevertForRefName**
> \FrankHouweling\AzureDevOpsClient\Git\Model\GitRevert revertsGetRevertForRefName($organization, $project, $repositoryId, $refName, $apiVersion)



Retrieve information about a revert operation for a specific branch.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Git\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Git\Api\RevertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$repositoryId = "repositoryId_example"; // string | ID of the repository.
$refName = "refName_example"; // string | The GitAsyncRefOperationParameters generatedRefName used for the revert operation.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->revertsGetRevertForRefName($organization, $project, $repositoryId, $refName, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RevertsApi->revertsGetRevertForRefName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **repositoryId** | **string**| ID of the repository. |
 **refName** | **string**| The GitAsyncRefOperationParameters generatedRefName used for the revert operation. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Git\Model\GitRevert**](../Model/GitRevert.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

