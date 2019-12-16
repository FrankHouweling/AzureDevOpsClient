# AzureDevOpsClient\Tfvc\ShelvesetsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**shelvesetsGet**](ShelvesetsApi.md#shelvesetsGet) | **GET** /{organization}/_apis/tfvc/shelvesets | 
[**shelvesetsGetShelvesetChanges**](ShelvesetsApi.md#shelvesetsGetShelvesetChanges) | **GET** /{organization}/_apis/tfvc/shelvesets/changes | 
[**shelvesetsGetShelvesetWorkItems**](ShelvesetsApi.md#shelvesetsGetShelvesetWorkItems) | **GET** /{organization}/_apis/tfvc/shelvesets/workitems | 


# **shelvesetsGet**
> \AzureDevOpsClient\Tfvc\AzureDevOpsClient\Tfvc\Model\TfvcShelveset shelvesetsGet($organization, $shelvesetId, $apiVersion, $requestDataIncludeDetails, $requestDataIncludeLinks, $requestDataIncludeWorkItems, $requestDataMaxChangeCount, $requestDataMaxCommentLength, $requestDataName, $requestDataOwner)



Get a single deep shelveset.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Tfvc\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Tfvc\Api\ShelvesetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$shelvesetId = "shelvesetId_example"; // string | Shelveset's unique ID
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$requestDataIncludeDetails = true; // bool | Whether to include policyOverride and notes Only applies when requesting a single deep shelveset
$requestDataIncludeLinks = true; // bool | Whether to include the _links field on the shallow references. Does not apply when requesting a single deep shelveset object. Links will always be included in the deep shelveset.
$requestDataIncludeWorkItems = true; // bool | Whether to include workItems
$requestDataMaxChangeCount = 56; // int | Max number of changes to include
$requestDataMaxCommentLength = 56; // int | Max length of comment
$requestDataName = "requestDataName_example"; // string | Shelveset name
$requestDataOwner = "requestDataOwner_example"; // string | Owner's ID. Could be a name or a guid.

try {
    $result = $apiInstance->shelvesetsGet($organization, $shelvesetId, $apiVersion, $requestDataIncludeDetails, $requestDataIncludeLinks, $requestDataIncludeWorkItems, $requestDataMaxChangeCount, $requestDataMaxCommentLength, $requestDataName, $requestDataOwner);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShelvesetsApi->shelvesetsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **shelvesetId** | **string**| Shelveset&#39;s unique ID |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **requestDataIncludeDetails** | **bool**| Whether to include policyOverride and notes Only applies when requesting a single deep shelveset | [optional]
 **requestDataIncludeLinks** | **bool**| Whether to include the _links field on the shallow references. Does not apply when requesting a single deep shelveset object. Links will always be included in the deep shelveset. | [optional]
 **requestDataIncludeWorkItems** | **bool**| Whether to include workItems | [optional]
 **requestDataMaxChangeCount** | **int**| Max number of changes to include | [optional]
 **requestDataMaxCommentLength** | **int**| Max length of comment | [optional]
 **requestDataName** | **string**| Shelveset name | [optional]
 **requestDataOwner** | **string**| Owner&#39;s ID. Could be a name or a guid. | [optional]

### Return type

[**\AzureDevOpsClient\Tfvc\AzureDevOpsClient\Tfvc\Model\TfvcShelveset**](../Model/TfvcShelveset.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shelvesetsGetShelvesetChanges**
> \AzureDevOpsClient\Tfvc\AzureDevOpsClient\Tfvc\Model\TfvcChange[] shelvesetsGetShelvesetChanges($organization, $shelvesetId, $apiVersion, $top, $skip)



Get changes included in a shelveset.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Tfvc\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Tfvc\Api\ShelvesetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$shelvesetId = "shelvesetId_example"; // string | Shelveset's unique ID
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$top = 56; // int | Max number of changes to return
$skip = 56; // int | Number of changes to skip

try {
    $result = $apiInstance->shelvesetsGetShelvesetChanges($organization, $shelvesetId, $apiVersion, $top, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShelvesetsApi->shelvesetsGetShelvesetChanges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **shelvesetId** | **string**| Shelveset&#39;s unique ID |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **top** | **int**| Max number of changes to return | [optional]
 **skip** | **int**| Number of changes to skip | [optional]

### Return type

[**\AzureDevOpsClient\Tfvc\AzureDevOpsClient\Tfvc\Model\TfvcChange[]**](../Model/TfvcChange.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shelvesetsGetShelvesetWorkItems**
> \AzureDevOpsClient\Tfvc\AzureDevOpsClient\Tfvc\Model\AssociatedWorkItem[] shelvesetsGetShelvesetWorkItems($organization, $shelvesetId, $apiVersion)



Get work items associated with a shelveset.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Tfvc\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Tfvc\Api\ShelvesetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$shelvesetId = "shelvesetId_example"; // string | Shelveset's unique ID
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->shelvesetsGetShelvesetWorkItems($organization, $shelvesetId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShelvesetsApi->shelvesetsGetShelvesetWorkItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **shelvesetId** | **string**| Shelveset&#39;s unique ID |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Tfvc\AzureDevOpsClient\Tfvc\Model\AssociatedWorkItem[]**](../Model/AssociatedWorkItem.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

