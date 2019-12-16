# AzureDevOpsClient\Test\ResultRetentionSettingsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**resultRetentionSettingsGet**](ResultRetentionSettingsApi.md#resultRetentionSettingsGet) | **GET** /{organization}/{project}/_apis/test/resultretentionsettings | 
[**resultRetentionSettingsUpdate**](ResultRetentionSettingsApi.md#resultRetentionSettingsUpdate) | **PATCH** /{organization}/{project}/_apis/test/resultretentionsettings | 


# **resultRetentionSettingsGet**
> \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ResultRetentionSettings resultRetentionSettingsGet($organization, $project, $apiVersion)



Get test result retention settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Test\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Test\Api\ResultRetentionSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->resultRetentionSettingsGet($organization, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResultRetentionSettingsApi->resultRetentionSettingsGet: ', $e->getMessage(), PHP_EOL;
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

[**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ResultRetentionSettings**](../Model/ResultRetentionSettings.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resultRetentionSettingsUpdate**
> \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ResultRetentionSettings resultRetentionSettingsUpdate($organization, $body, $project, $apiVersion)



Update test result retention settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Test\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Test\Api\ResultRetentionSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ResultRetentionSettings(); // \AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ResultRetentionSettings | Test result retention settings details to be updated
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->resultRetentionSettingsUpdate($organization, $body, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResultRetentionSettingsApi->resultRetentionSettingsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ResultRetentionSettings**](../Model/ResultRetentionSettings.md)| Test result retention settings details to be updated |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Test\AzureDevOpsClient\Test\Model\ResultRetentionSettings**](../Model/ResultRetentionSettings.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

