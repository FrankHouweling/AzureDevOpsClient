# FrankHouweling\AzureDevOpsClient\Wit\WorkItemTypeCategoriesApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**workItemTypeCategoriesGet**](WorkItemTypeCategoriesApi.md#workItemTypeCategoriesGet) | **GET** /{organization}/{project}/_apis/wit/workitemtypecategories/{category} | 
[**workItemTypeCategoriesList**](WorkItemTypeCategoriesApi.md#workItemTypeCategoriesList) | **GET** /{organization}/{project}/_apis/wit/workitemtypecategories | 


# **workItemTypeCategoriesGet**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemTypeCategory workItemTypeCategoriesGet($organization, $project, $category, $apiVersion)



Get specific work item type category by name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\WorkItemTypeCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$category = "category_example"; // string | The category name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $result = $apiInstance->workItemTypeCategoriesGet($organization, $project, $category, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkItemTypeCategoriesApi->workItemTypeCategoriesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **category** | **string**| The category name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemTypeCategory**](../Model/WorkItemTypeCategory.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **workItemTypeCategoriesList**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemTypeCategory[] workItemTypeCategoriesList($organization, $project, $apiVersion)



Get all work item type categories.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\WorkItemTypeCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $result = $apiInstance->workItemTypeCategoriesList($organization, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkItemTypeCategoriesApi->workItemTypeCategoriesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemTypeCategory[]**](../Model/WorkItemTypeCategory.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

