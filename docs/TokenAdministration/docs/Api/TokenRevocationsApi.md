# FrankHouweling\AzureDevOpsClient\TokenAdministration\TokenRevocationsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tokenRevocationsRevokeAuthorizations**](TokenRevocationsApi.md#tokenRevocationsRevokeAuthorizations) | **POST** /_apis/tokenadministration/tokenrevocations | 


# **tokenRevocationsRevokeAuthorizations**
> tokenRevocationsRevokeAuthorizations($body, $hostId, $apiVersion, $isPublic)



Revokes the listed OAuth authorizations.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\TokenAdministration\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\TokenAdministration\Api\TokenRevocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \FrankHouweling\AzureDevOpsClient\TokenAdministration\Model\TokenAdministrationRevocation(); // \FrankHouweling\AzureDevOpsClient\TokenAdministration\Model\TokenAdministrationRevocation | The list of objects containing the authorization IDs of the OAuth authorizations, such as session tokens retrieved by listed a users PATs, that should be revoked.
$hostId = "hostId_example"; // string | Host Id to display on the notification page to manage tokens.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$isPublic = true; // bool | Set to false for PAT tokens and true for SSH tokens.

try {
    $apiInstance->tokenRevocationsRevokeAuthorizations($body, $hostId, $apiVersion, $isPublic);
} catch (Exception $e) {
    echo 'Exception when calling TokenRevocationsApi->tokenRevocationsRevokeAuthorizations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\FrankHouweling\AzureDevOpsClient\TokenAdministration\Model\TokenAdministrationRevocation**](../Model/TokenAdministrationRevocation.md)| The list of objects containing the authorization IDs of the OAuth authorizations, such as session tokens retrieved by listed a users PATs, that should be revoked. |
 **hostId** | [**string**](../Model/.md)| Host Id to display on the notification page to manage tokens. |
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

