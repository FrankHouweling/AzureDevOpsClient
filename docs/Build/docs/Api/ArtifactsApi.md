# AzureDevOpsClient\Build\ArtifactsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**artifactsCreate**](ArtifactsApi.md#artifactsCreate) | **POST** /{organization}/{project}/_apis/build/builds/{buildId}/artifacts | 
[**artifactsList**](ArtifactsApi.md#artifactsList) | **GET** /{organization}/{project}/_apis/build/builds/{buildId}/artifacts | 


# **artifactsCreate**
> \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\BuildArtifact artifactsCreate($organization, $body, $project, $buildId, $apiVersion)



Associates an artifact with a build.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Build\Api\ArtifactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\BuildArtifact(); // \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\BuildArtifact | The artifact.
$project = "project_example"; // string | Project ID or project name
$buildId = 56; // int | The ID of the build.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.5' to use this version of the api.

try {
    $result = $apiInstance->artifactsCreate($organization, $body, $project, $buildId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArtifactsApi->artifactsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\BuildArtifact**](../Model/BuildArtifact.md)| The artifact. |
 **project** | **string**| Project ID or project name |
 **buildId** | **int**| The ID of the build. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.5&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\BuildArtifact**](../Model/BuildArtifact.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **artifactsList**
> \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\BuildArtifact[] artifactsList($organization, $project, $buildId, $apiVersion)



Gets all artifacts for a build.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Build\Api\ArtifactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$buildId = 56; // int | The ID of the build.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.5' to use this version of the api.

try {
    $result = $apiInstance->artifactsList($organization, $project, $buildId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArtifactsApi->artifactsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **buildId** | **int**| The ID of the build. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.5&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\BuildArtifact[]**](../Model/BuildArtifact.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

