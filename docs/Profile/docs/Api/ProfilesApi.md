# FrankHouweling\AzureDevOpsClient\Profile\ProfilesApi

All URIs are relative to *https://app.vssps.visualstudio.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**profilesGet**](ProfilesApi.md#profilesGet) | **GET** /_apis/profile/profiles/{id} | 


# **profilesGet**
> \FrankHouweling\AzureDevOpsClient\Profile\Model\Profile profilesGet($id, $apiVersion, $details, $withAttributes, $partition, $coreAttributes, $forceRefresh)



Gets a user profile.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Profile\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Profile\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The ID of the target user profile within the same organization, or 'me' to get the profile of the current authenticated user.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.
$details = true; // bool | Return public profile information such as display name, email address, country, etc. If false, the withAttributes parameter is ignored.
$withAttributes = true; // bool | If true, gets the attributes (named key-value pairs of arbitrary data) associated with the profile. The partition parameter must also have a value.
$partition = "partition_example"; // string | The partition (named group) of attributes to return.
$coreAttributes = "coreAttributes_example"; // string | A comma-delimited list of core profile attributes to return. Valid values are Email, Avatar, DisplayName, and ContactWithOffers.
$forceRefresh = true; // bool | Not used in this version of the API.

try {
    $result = $apiInstance->profilesGet($id, $apiVersion, $details, $withAttributes, $partition, $coreAttributes, $forceRefresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->profilesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the target user profile within the same organization, or &#39;me&#39; to get the profile of the current authenticated user. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |
 **details** | **bool**| Return public profile information such as display name, email address, country, etc. If false, the withAttributes parameter is ignored. | [optional]
 **withAttributes** | **bool**| If true, gets the attributes (named key-value pairs of arbitrary data) associated with the profile. The partition parameter must also have a value. | [optional]
 **partition** | **string**| The partition (named group) of attributes to return. | [optional]
 **coreAttributes** | **string**| A comma-delimited list of core profile attributes to return. Valid values are Email, Avatar, DisplayName, and ContactWithOffers. | [optional]
 **forceRefresh** | **bool**| Not used in this version of the API. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Profile\Model\Profile**](../Model/Profile.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

