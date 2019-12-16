# AzureDevOpsClient\MemberEntitlementManagement\UserEntitlementSummaryApi

All URIs are relative to *https://vsaex.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**userEntitlementSummaryGet**](UserEntitlementSummaryApi.md#userEntitlementSummaryGet) | **GET** /{organization}/_apis/userentitlementsummary | 


# **userEntitlementSummaryGet**
> \AzureDevOpsClient\MemberEntitlementManagement\AzureDevOpsClient\MemberEntitlementManagement\Model\UsersSummary userEntitlementSummaryGet($organization, $apiVersion, $select)



Get summary of Licenses, Extension, Projects, Groups and their assignments in the collection.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\MemberEntitlementManagement\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\MemberEntitlementManagement\Api\UserEntitlementSummaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$select = "select_example"; // string | Comma (\",\") separated list of properties to select. Supported property names are {AccessLevels, Licenses, Projects, Groups}.

try {
    $result = $apiInstance->userEntitlementSummaryGet($organization, $apiVersion, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserEntitlementSummaryApi->userEntitlementSummaryGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **select** | **string**| Comma (\&quot;,\&quot;) separated list of properties to select. Supported property names are {AccessLevels, Licenses, Projects, Groups}. | [optional]

### Return type

[**\AzureDevOpsClient\MemberEntitlementManagement\AzureDevOpsClient\MemberEntitlementManagement\Model\UsersSummary**](../Model/UsersSummary.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

