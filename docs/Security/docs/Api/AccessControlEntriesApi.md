# AzureDevOpsClient\Security\AccessControlEntriesApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accessControlEntriesRemoveAccessControlEntries**](AccessControlEntriesApi.md#accessControlEntriesRemoveAccessControlEntries) | **DELETE** /{organization}/_apis/accesscontrolentries/{securityNamespaceId} | 
[**accessControlEntriesSetAccessControlEntries**](AccessControlEntriesApi.md#accessControlEntriesSetAccessControlEntries) | **POST** /{organization}/_apis/accesscontrolentries/{securityNamespaceId} | 


# **accessControlEntriesRemoveAccessControlEntries**
> bool accessControlEntriesRemoveAccessControlEntries($securityNamespaceId, $organization, $apiVersion, $token, $descriptors)



Remove the specified ACEs from the ACL belonging to the specified token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Security\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Security\Api\AccessControlEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$securityNamespaceId = "securityNamespaceId_example"; // string | Security namespace identifier.
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$token = "token_example"; // string | The token whose ACL should be modified.
$descriptors = "descriptors_example"; // string | String containing a list of identity descriptors separated by ',' whose entries should be removed.

try {
    $result = $apiInstance->accessControlEntriesRemoveAccessControlEntries($securityNamespaceId, $organization, $apiVersion, $token, $descriptors);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessControlEntriesApi->accessControlEntriesRemoveAccessControlEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **securityNamespaceId** | [**string**](../Model/.md)| Security namespace identifier. |
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **token** | **string**| The token whose ACL should be modified. | [optional]
 **descriptors** | **string**| String containing a list of identity descriptors separated by &#39;,&#39; whose entries should be removed. | [optional]

### Return type

**bool**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accessControlEntriesSetAccessControlEntries**
> \AzureDevOpsClient\Security\AzureDevOpsClient\Security\Model\AccessControlEntry[] accessControlEntriesSetAccessControlEntries($body, $securityNamespaceId, $organization, $apiVersion)



Add or update ACEs in the ACL for the provided token. The request body contains the target token, a list of [ACEs](https://docs.microsoft.com/en-us/rest/api/azure/devops/security/access%20control%20entries/set%20access%20control%20entries?#accesscontrolentry) and a optional merge parameter. In the case of a collision (by identity descriptor) with an existing ACE in the ACL, the \"merge\" parameter determines the behavior. If set, the existing ACE has its allow and deny merged with the incoming ACE's allow and deny. If unset, the existing ACE is displaced.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Security\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Security\Api\AccessControlEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \AzureDevOpsClient\Security\AzureDevOpsClient\Security\Model\JObject(); // \AzureDevOpsClient\Security\AzureDevOpsClient\Security\Model\JObject | 
$securityNamespaceId = "securityNamespaceId_example"; // string | Security namespace identifier.
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->accessControlEntriesSetAccessControlEntries($body, $securityNamespaceId, $organization, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessControlEntriesApi->accessControlEntriesSetAccessControlEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\AzureDevOpsClient\Security\AzureDevOpsClient\Security\Model\JObject**](../Model/JObject.md)|  |
 **securityNamespaceId** | [**string**](../Model/.md)| Security namespace identifier. |
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Security\AzureDevOpsClient\Security\Model\AccessControlEntry[]**](../Model/AccessControlEntry.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

