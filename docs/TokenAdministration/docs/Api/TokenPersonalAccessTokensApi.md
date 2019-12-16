# AzureDevOpsClient\TokenAdministration\TokenPersonalAccessTokensApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tokenPersonalAccessTokensList**](TokenPersonalAccessTokensApi.md#tokenPersonalAccessTokensList) | **POST** /_apis/tokenadministration/tokenpersonalaccesstokens/{subjectDescriptor} | 


# **tokenPersonalAccessTokensList**
> \AzureDevOpsClient\TokenAdministration\AzureDevOpsClient\TokenAdministration\Model\TokenAdminPagedSessionTokens tokenPersonalAccessTokensList($body, $subjectDescriptor, $apiVersion, $pageSize, $continuationToken, $isPublic)



Lists of all the session token details of the personal access tokens (PATs) for a particular user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\TokenAdministration\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\TokenAdministration\Api\TokenPersonalAccessTokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \AzureDevOpsClient\TokenAdministration\AzureDevOpsClient\TokenAdministration\Model\string[]()); // string[] | 
$subjectDescriptor = "subjectDescriptor_example"; // string | The descriptor of the target user.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$pageSize = 56; // int | The maximum number of results to return on each page.
$continuationToken = "continuationToken_example"; // string | An opaque data blob that allows the next page of data to resume immediately after where the previous page ended. The only reliable way to know if there is more data left is the presence of a continuation token.
$isPublic = true; // bool | Set to false for PAT tokens and true for SSH tokens.

try {
    $result = $apiInstance->tokenPersonalAccessTokensList($body, $subjectDescriptor, $apiVersion, $pageSize, $continuationToken, $isPublic);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenPersonalAccessTokensApi->tokenPersonalAccessTokensList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string[]**|  |
 **subjectDescriptor** | **string**| The descriptor of the target user. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **pageSize** | **int**| The maximum number of results to return on each page. | [optional]
 **continuationToken** | **string**| An opaque data blob that allows the next page of data to resume immediately after where the previous page ended. The only reliable way to know if there is more data left is the presence of a continuation token. | [optional]
 **isPublic** | **bool**| Set to false for PAT tokens and true for SSH tokens. | [optional]

### Return type

[**\AzureDevOpsClient\TokenAdministration\AzureDevOpsClient\TokenAdministration\Model\TokenAdminPagedSessionTokens**](../Model/TokenAdminPagedSessionTokens.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

