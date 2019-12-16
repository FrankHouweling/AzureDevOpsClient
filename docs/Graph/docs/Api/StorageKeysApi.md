# AzureDevOpsClient\Graph\StorageKeysApi

All URIs are relative to *https://vssps.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**storageKeysGet**](StorageKeysApi.md#storageKeysGet) | **GET** /{organization}/_apis/graph/storagekeys/{subjectDescriptor} | 


# **storageKeysGet**
> \AzureDevOpsClient\Graph\AzureDevOpsClient\Graph\Model\GraphStorageKeyResult storageKeysGet($subjectDescriptor, $organization, $apiVersion)



Resolve a descriptor to a storage key.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Graph\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Graph\Api\StorageKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subjectDescriptor = "subjectDescriptor_example"; // string | 
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->storageKeysGet($subjectDescriptor, $organization, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorageKeysApi->storageKeysGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subjectDescriptor** | **string**|  |
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Graph\AzureDevOpsClient\Graph\Model\GraphStorageKeyResult**](../Model/GraphStorageKeyResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

