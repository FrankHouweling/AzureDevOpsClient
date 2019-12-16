# FrankHouweling\AzureDevOpsClient\Security\PermissionsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**permissionsHasPermissions**](PermissionsApi.md#permissionsHasPermissions) | **GET** /{organization}/_apis/permissions/{securityNamespaceId}/{permissions} | 
[**permissionsHasPermissionsBatch**](PermissionsApi.md#permissionsHasPermissionsBatch) | **POST** /{organization}/_apis/security/permissionevaluationbatch | 
[**permissionsRemovePermission**](PermissionsApi.md#permissionsRemovePermission) | **DELETE** /{organization}/_apis/permissions/{securityNamespaceId}/{permissions} | 


# **permissionsHasPermissions**
> bool[] permissionsHasPermissions($securityNamespaceId, $organization, $permissions, $apiVersion, $tokens, $alwaysAllowAdministrators, $delimiter)



Evaluates whether the caller has the specified permissions on the specified set of security tokens.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Security\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Security\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$securityNamespaceId = "securityNamespaceId_example"; // string | Security namespace identifier.
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$permissions = 56; // int | Permissions to evaluate.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.
$tokens = "tokens_example"; // string | One or more security tokens to evaluate.
$alwaysAllowAdministrators = true; // bool | If true and if the caller is an administrator, always return true.
$delimiter = "delimiter_example"; // string | Optional security token separator. Defaults to \",\".

try {
    $result = $apiInstance->permissionsHasPermissions($securityNamespaceId, $organization, $permissions, $apiVersion, $tokens, $alwaysAllowAdministrators, $delimiter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->permissionsHasPermissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **securityNamespaceId** | [**string**](../Model/.md)| Security namespace identifier. |
 **organization** | **string**| The name of the Azure DevOps organization. |
 **permissions** | **int**| Permissions to evaluate. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |
 **tokens** | **string**| One or more security tokens to evaluate. | [optional]
 **alwaysAllowAdministrators** | **bool**| If true and if the caller is an administrator, always return true. | [optional]
 **delimiter** | **string**| Optional security token separator. Defaults to \&quot;,\&quot;. | [optional]

### Return type

**bool[]**

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **permissionsHasPermissionsBatch**
> \FrankHouweling\AzureDevOpsClient\Security\Model\PermissionEvaluationBatch permissionsHasPermissionsBatch($body, $organization, $apiVersion)



Evaluates multiple permissions for the calling user.  Note: This method does not aggregate the results, nor does it short-circuit if one of the permissions evaluates to false.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Security\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Security\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \FrankHouweling\AzureDevOpsClient\Security\Model\PermissionEvaluationBatch(); // \FrankHouweling\AzureDevOpsClient\Security\Model\PermissionEvaluationBatch | The set of evaluation requests.
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->permissionsHasPermissionsBatch($body, $organization, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->permissionsHasPermissionsBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\FrankHouweling\AzureDevOpsClient\Security\Model\PermissionEvaluationBatch**](../Model/PermissionEvaluationBatch.md)| The set of evaluation requests. |
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Security\Model\PermissionEvaluationBatch**](../Model/PermissionEvaluationBatch.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **permissionsRemovePermission**
> \FrankHouweling\AzureDevOpsClient\Security\Model\AccessControlEntry permissionsRemovePermission($securityNamespaceId, $descriptor, $organization, $permissions, $apiVersion, $token)



Removes the specified permissions on a security token for a user or group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Security\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Security\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$securityNamespaceId = "securityNamespaceId_example"; // string | Security namespace identifier.
$descriptor = "descriptor_example"; // string | Identity descriptor of the user to remove permissions for.
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$permissions = 56; // int | Permissions to remove.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.
$token = "token_example"; // string | Security token to remove permissions for.

try {
    $result = $apiInstance->permissionsRemovePermission($securityNamespaceId, $descriptor, $organization, $permissions, $apiVersion, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->permissionsRemovePermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **securityNamespaceId** | [**string**](../Model/.md)| Security namespace identifier. |
 **descriptor** | **string**| Identity descriptor of the user to remove permissions for. |
 **organization** | **string**| The name of the Azure DevOps organization. |
 **permissions** | **int**| Permissions to remove. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |
 **token** | **string**| Security token to remove permissions for. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Security\Model\AccessControlEntry**](../Model/AccessControlEntry.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

