# FrankHouweling\AzureDevOpsClient\Build\LatestApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**latestGet**](LatestApi.md#latestGet) | **GET** /{organization}/{project}/_apis/build/latest/{definition} | 


# **latestGet**
> \FrankHouweling\AzureDevOpsClient\Build\Model\Build latestGet($organization, $project, $definition, $apiVersion, $branchName)



Gets the latest build for a definition, optionally scoped to a specific branch.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Build\Api\LatestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$definition = "definition_example"; // string | definition name with optional leading folder path, or the definition id
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$branchName = "branchName_example"; // string | optional parameter that indicates the specific branch to use

try {
    $result = $apiInstance->latestGet($organization, $project, $definition, $apiVersion, $branchName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LatestApi->latestGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **definition** | **string**| definition name with optional leading folder path, or the definition id |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **branchName** | **string**| optional parameter that indicates the specific branch to use | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Build\Model\Build**](../Model/Build.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

