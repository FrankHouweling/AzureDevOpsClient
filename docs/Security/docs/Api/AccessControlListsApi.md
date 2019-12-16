# FrankHouweling\AzureDevOpsClient\Security\AccessControlListsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accessControlListsQuery**](AccessControlListsApi.md#accessControlListsQuery) | **GET** /{organization}/_apis/accesscontrollists/{securityNamespaceId} | 
[**accessControlListsRemoveAccessControlLists**](AccessControlListsApi.md#accessControlListsRemoveAccessControlLists) | **DELETE** /{organization}/_apis/accesscontrollists/{securityNamespaceId} | 
[**accessControlListsSetAccessControlLists**](AccessControlListsApi.md#accessControlListsSetAccessControlLists) | **POST** /{organization}/_apis/accesscontrollists/{securityNamespaceId} | 


# **accessControlListsQuery**
> \FrankHouweling\AzureDevOpsClient\Security\Model\AccessControlList[] accessControlListsQuery($securityNamespaceId, $organization, $apiVersion, $token, $descriptors, $includeExtendedInfo, $recurse)



Return a list of access control lists for the specified security namespace and token. All ACLs in the security namespace will be retrieved if no optional parameters are provided.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Security\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Security\Api\AccessControlListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$securityNamespaceId = "securityNamespaceId_example"; // string | Security namespace identifier.
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$token = "token_example"; // string | Security token
$descriptors = "descriptors_example"; // string | An optional filter string containing a list of identity descriptors separated by ',' whose ACEs should be retrieved. If this is left null, entire ACLs will be returned.
$includeExtendedInfo = true; // bool | If true, populate the extended information properties for the access control entries contained in the returned lists.
$recurse = true; // bool | If true and this is a hierarchical namespace, return child ACLs of the specified token.

try {
    $result = $apiInstance->accessControlListsQuery($securityNamespaceId, $organization, $apiVersion, $token, $descriptors, $includeExtendedInfo, $recurse);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessControlListsApi->accessControlListsQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **securityNamespaceId** | [**string**](../Model/.md)| Security namespace identifier. |
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **token** | **string**| Security token | [optional]
 **descriptors** | **string**| An optional filter string containing a list of identity descriptors separated by &#39;,&#39; whose ACEs should be retrieved. If this is left null, entire ACLs will be returned. | [optional]
 **includeExtendedInfo** | **bool**| If true, populate the extended information properties for the access control entries contained in the returned lists. | [optional]
 **recurse** | **bool**| If true and this is a hierarchical namespace, return child ACLs of the specified token. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Security\Model\AccessControlList[]**](../Model/AccessControlList.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accessControlListsRemoveAccessControlLists**
> bool accessControlListsRemoveAccessControlLists($securityNamespaceId, $organization, $apiVersion, $tokens, $recurse)



Remove access control lists under the specfied security namespace.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Security\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Security\Api\AccessControlListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$securityNamespaceId = "securityNamespaceId_example"; // string | Security namespace identifier.
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$tokens = "tokens_example"; // string | One or more comma-separated security tokens
$recurse = true; // bool | If true and this is a hierarchical namespace, also remove child ACLs of the specified tokens.

try {
    $result = $apiInstance->accessControlListsRemoveAccessControlLists($securityNamespaceId, $organization, $apiVersion, $tokens, $recurse);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessControlListsApi->accessControlListsRemoveAccessControlLists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **securityNamespaceId** | [**string**](../Model/.md)| Security namespace identifier. |
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **tokens** | **string**| One or more comma-separated security tokens | [optional]
 **recurse** | **bool**| If true and this is a hierarchical namespace, also remove child ACLs of the specified tokens. | [optional]

### Return type

**bool**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accessControlListsSetAccessControlLists**
> accessControlListsSetAccessControlLists($body, $securityNamespaceId, $organization, $apiVersion)



Create or update one or more access control lists. All data that currently exists for the ACLs supplied will be overwritten.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Security\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Security\Api\AccessControlListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \FrankHouweling\AzureDevOpsClient\Security\Model\VssJsonCollectionWrapper(); // \FrankHouweling\AzureDevOpsClient\Security\Model\VssJsonCollectionWrapper | A list of ACLs to create or update.
$securityNamespaceId = "securityNamespaceId_example"; // string | Security namespace identifier.
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->accessControlListsSetAccessControlLists($body, $securityNamespaceId, $organization, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling AccessControlListsApi->accessControlListsSetAccessControlLists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\FrankHouweling\AzureDevOpsClient\Security\Model\VssJsonCollectionWrapper**](../Model/VssJsonCollectionWrapper.md)| A list of ACLs to create or update. |
 **securityNamespaceId** | [**string**](../Model/.md)| Security namespace identifier. |
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

