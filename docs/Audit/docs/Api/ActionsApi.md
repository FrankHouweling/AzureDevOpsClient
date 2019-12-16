# AzureDevOpsClient\Audit\ActionsApi

All URIs are relative to *https://auditservice.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**actionsList**](ActionsApi.md#actionsList) | **GET** /{organization}/_apis/audit/actions | 


# **actionsList**
> \AzureDevOpsClient\Audit\AzureDevOpsClient\Audit\Model\AuditActionInfo[] actionsList($organization, $apiVersion, $areaName)



Get all auditable actions filterable by area.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = AzureDevOpsClient\Audit\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new AzureDevOpsClient\Audit\Api\ActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$areaName = "areaName_example"; // string | Optional. Get actions scoped to area

try {
    $result = $apiInstance->actionsList($organization, $apiVersion, $areaName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionsApi->actionsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **areaName** | **string**| Optional. Get actions scoped to area | [optional]

### Return type

[**\AzureDevOpsClient\Audit\AzureDevOpsClient\Audit\Model\AuditActionInfo[]**](../Model/AuditActionInfo.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

