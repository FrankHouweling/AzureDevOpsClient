# FrankHouweling\AzureDevOpsClient\Account\AccountsApi

All URIs are relative to *https://app.vssps.visualstudio.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountsList**](AccountsApi.md#accountsList) | **GET** /_apis/accounts | 


# **accountsList**
> \FrankHouweling\AzureDevOpsClient\Account\Model\Account[] accountsList($apiVersion, $ownerId, $memberId, $properties)



Get a list of accounts for a specific owner or a specific member.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Account\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$ownerId = "ownerId_example"; // string | ID for the owner of the accounts.
$memberId = "memberId_example"; // string | ID for a member of the accounts.
$properties = "properties_example"; // string | 

try {
    $result = $apiInstance->accountsList($apiVersion, $ownerId, $memberId, $properties);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **ownerId** | [**string**](../Model/.md)| ID for the owner of the accounts. | [optional]
 **memberId** | [**string**](../Model/.md)| ID for a member of the accounts. | [optional]
 **properties** | **string**|  | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Account\Model\Account[]**](../Model/Account.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

