# FrankHouweling\AzureDevOpsClient\Wit\WorkItemTransitionsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**workItemTransitionsList**](WorkItemTransitionsApi.md#workItemTransitionsList) | **GET** /{organization}/_apis/wit/workitemtransitions | 


# **workItemTransitionsList**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemNextStateOnTransition[] workItemTransitionsList($organization, $ids, $apiVersion, $action)



Returns the next state on the given work item IDs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\WorkItemTransitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$ids = "ids_example"; // string | list of work item ids
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$action = "action_example"; // string | possible actions. Currently only supports checkin

try {
    $result = $apiInstance->workItemTransitionsList($organization, $ids, $apiVersion, $action);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkItemTransitionsApi->workItemTransitionsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **ids** | **string**| list of work item ids |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **action** | **string**| possible actions. Currently only supports checkin | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemNextStateOnTransition[]**](../Model/WorkItemNextStateOnTransition.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

