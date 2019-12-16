# FrankHouweling\AzureDevOpsClient\Wit\ArtifactUriQueryApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**artifactUriQueryQuery**](ArtifactUriQueryApi.md#artifactUriQueryQuery) | **POST** /{organization}/{project}/_apis/wit/artifacturiquery | 


# **artifactUriQueryQuery**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\ArtifactUriQueryResult artifactUriQueryQuery($organization, $body, $project, $apiVersion)



Queries work items linked to a given list of artifact URI.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\ArtifactUriQueryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Wit\Model\ArtifactUriQuery(); // \FrankHouweling\AzureDevOpsClient\Wit\Model\ArtifactUriQuery | Defines a list of artifact URI for querying work items.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->artifactUriQueryQuery($organization, $body, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArtifactUriQueryApi->artifactUriQueryQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Wit\Model\ArtifactUriQuery**](../Model/ArtifactUriQuery.md)| Defines a list of artifact URI for querying work items. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\ArtifactUriQueryResult**](../Model/ArtifactUriQueryResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

