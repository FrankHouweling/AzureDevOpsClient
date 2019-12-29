# FrankHouweling\AzureDevOpsClient\Build\BadgeApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**badgeGet**](BadgeApi.md#badgeGet) | **GET** /{organization}/_apis/public/build/definitions/{project}/{definitionId}/badge | 
[**badgeGetBuildBadgeData**](BadgeApi.md#badgeGetBuildBadgeData) | **GET** /{organization}/{project}/_apis/build/repos/{repoType}/badge | 


# **badgeGet**
> string badgeGet($organization, $project, $definitionId, $apiVersion, $branchName)



This endpoint is deprecated. Please see the Build Status REST endpoint.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Build\Api\BadgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | The project ID or name.
$definitionId = 56; // int | The ID of the definition.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.
$branchName = "branchName_example"; // string | The name of the branch.

try {
    $result = $apiInstance->badgeGet($organization, $project, $definitionId, $apiVersion, $branchName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BadgeApi->badgeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | [**string**](../Model/.md)| The project ID or name. |
 **definitionId** | **int**| The ID of the definition. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |
 **branchName** | **string**| The name of the branch. | [optional]

### Return type

**string**

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **badgeGetBuildBadgeData**
> string badgeGetBuildBadgeData($organization, $project, $repoType, $apiVersion, $repoId, $branchName)



Gets a badge that indicates the status of the most recent build for the specified branch.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Build\Api\BadgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$repoType = "repoType_example"; // string | The repository type.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.
$repoId = "repoId_example"; // string | The repository ID.
$branchName = "branchName_example"; // string | The branch name.

try {
    $result = $apiInstance->badgeGetBuildBadgeData($organization, $project, $repoType, $apiVersion, $repoId, $branchName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BadgeApi->badgeGetBuildBadgeData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **repoType** | **string**| The repository type. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |
 **repoId** | **string**| The repository ID. | [optional]
 **branchName** | **string**| The branch name. | [optional]

### Return type

**string**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

