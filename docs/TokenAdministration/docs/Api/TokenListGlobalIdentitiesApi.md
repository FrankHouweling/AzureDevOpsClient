# AzureDevOpsClient\TokenAdministration\TokenListGlobalIdentitiesApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tokenListGlobalIdentitiesList**](TokenListGlobalIdentitiesApi.md#tokenListGlobalIdentitiesList) | **POST** /_apis/tokenadministration/tokenlistglobalidentities | 


# **tokenListGlobalIdentitiesList**
> tokenListGlobalIdentitiesList($body, $apiVersion, $isPublic)



Revokes the listed OAuth authorizations.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\TokenAdministration\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\TokenAdministration\Api\TokenListGlobalIdentitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \AzureDevOpsClient\TokenAdministration\AzureDevOpsClient\TokenAdministration\Model\TokenAdminRevocation()); // \AzureDevOpsClient\TokenAdministration\AzureDevOpsClient\TokenAdministration\Model\TokenAdminRevocation[] | The list of identities containing the authorization IDs of the OAuth authorizations, such as session tokens retrieved by listed a users PATs, that should be checked for global access tokens.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$isPublic = true; // bool | Set to false for PAT tokens and true for SSH tokens.

try {
    $apiInstance->tokenListGlobalIdentitiesList($body, $apiVersion, $isPublic);
} catch (Exception $e) {
    echo 'Exception when calling TokenListGlobalIdentitiesApi->tokenListGlobalIdentitiesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\AzureDevOpsClient\TokenAdministration\AzureDevOpsClient\TokenAdministration\Model\TokenAdminRevocation[]**](../Model/TokenAdminRevocation.md)| The list of identities containing the authorization IDs of the OAuth authorizations, such as session tokens retrieved by listed a users PATs, that should be checked for global access tokens. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **isPublic** | **bool**| Set to false for PAT tokens and true for SSH tokens. | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

