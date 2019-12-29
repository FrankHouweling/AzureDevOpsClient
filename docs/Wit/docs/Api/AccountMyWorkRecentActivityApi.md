# FrankHouweling\AzureDevOpsClient\Wit\AccountMyWorkRecentActivityApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountMyWorkRecentActivityList**](AccountMyWorkRecentActivityApi.md#accountMyWorkRecentActivityList) | **GET** /{organization}/_apis/work/accountmyworkrecentactivity | 


# **accountMyWorkRecentActivityList**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\AccountRecentActivityWorkItemModel2[] accountMyWorkRecentActivityList($organization, $apiVersion)



Gets recent work item activities

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\AccountMyWorkRecentActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $result = $apiInstance->accountMyWorkRecentActivityList($organization, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountMyWorkRecentActivityApi->accountMyWorkRecentActivityList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\AccountRecentActivityWorkItemModel2[]**](../Model/AccountRecentActivityWorkItemModel2.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

