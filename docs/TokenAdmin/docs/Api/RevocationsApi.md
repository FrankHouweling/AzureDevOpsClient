# AzureDevOpsClient\TokenAdmin\RevocationsApi

All URIs are relative to *https://vssps.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**revocationsRevokeAuthorizations**](RevocationsApi.md#revocationsRevokeAuthorizations) | **POST** /{organization}/_apis/tokenadmin/revocations | 


# **revocationsRevokeAuthorizations**
> revocationsRevokeAuthorizations($organization, $body, $apiVersion, $isPublic)



Revokes the listed OAuth authorizations.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\TokenAdmin\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\TokenAdmin\Api\RevocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = array(new \AzureDevOpsClient\TokenAdmin\AzureDevOpsClient\TokenAdmin\Model\TokenAdminRevocation()); // \AzureDevOpsClient\TokenAdmin\AzureDevOpsClient\TokenAdmin\Model\TokenAdminRevocation[] | The list of objects containing the authorization IDs of the OAuth authorizations, such as session tokens retrieved by listed a users PATs, that should be revoked.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$isPublic = true; // bool | Set to false for PAT tokens and true for SSH tokens.

try {
    $apiInstance->revocationsRevokeAuthorizations($organization, $body, $apiVersion, $isPublic);
} catch (Exception $e) {
    echo 'Exception when calling RevocationsApi->revocationsRevokeAuthorizations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\TokenAdmin\AzureDevOpsClient\TokenAdmin\Model\TokenAdminRevocation[]**](../Model/TokenAdminRevocation.md)| The list of objects containing the authorization IDs of the OAuth authorizations, such as session tokens retrieved by listed a users PATs, that should be revoked. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **isPublic** | **bool**| Set to false for PAT tokens and true for SSH tokens. | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

