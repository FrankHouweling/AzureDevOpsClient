# FrankHouweling\AzureDevOpsClient\Policy\RevisionsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**revisionsGet**](RevisionsApi.md#revisionsGet) | **GET** /{organization}/{project}/_apis/policy/configurations/{configurationId}/revisions/{revisionId} | 
[**revisionsList**](RevisionsApi.md#revisionsList) | **GET** /{organization}/{project}/_apis/policy/configurations/{configurationId}/revisions | 


# **revisionsGet**
> \FrankHouweling\AzureDevOpsClient\Policy\Model\PolicyConfiguration revisionsGet($organization, $project, $configurationId, $revisionId, $apiVersion)



Retrieve a specific revision of a given policy by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Policy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Policy\Api\RevisionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$configurationId = 56; // int | The policy configuration ID.
$revisionId = 56; // int | The revision ID.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->revisionsGet($organization, $project, $configurationId, $revisionId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RevisionsApi->revisionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **configurationId** | **int**| The policy configuration ID. |
 **revisionId** | **int**| The revision ID. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Policy\Model\PolicyConfiguration**](../Model/PolicyConfiguration.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **revisionsList**
> \FrankHouweling\AzureDevOpsClient\Policy\Model\PolicyConfiguration[] revisionsList($organization, $project, $configurationId, $apiVersion, $top, $skip)



Retrieve all revisions for a given policy.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Policy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Policy\Api\RevisionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$configurationId = 56; // int | The policy configuration ID.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$top = 56; // int | The number of revisions to retrieve.
$skip = 56; // int | The number of revisions to ignore. For example, to retrieve results 101-150, set top to 50 and skip to 100.

try {
    $result = $apiInstance->revisionsList($organization, $project, $configurationId, $apiVersion, $top, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RevisionsApi->revisionsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **configurationId** | **int**| The policy configuration ID. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **top** | **int**| The number of revisions to retrieve. | [optional]
 **skip** | **int**| The number of revisions to ignore. For example, to retrieve results 101-150, set top to 50 and skip to 100. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Policy\Model\PolicyConfiguration[]**](../Model/PolicyConfiguration.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

