# AzureDevOpsClient\Audit\AuditLogApi

All URIs are relative to *https://auditservice.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**auditLogQuery**](AuditLogApi.md#auditLogQuery) | **GET** /{organization}/_apis/audit/auditlog | 


# **auditLogQuery**
> \AzureDevOpsClient\Audit\AzureDevOpsClient\Audit\Model\AuditLogQueryResult auditLogQuery($organization, $apiVersion, $startTime, $endTime, $batchSize, $continuationToken, $skipAggregation)



Queries audit log entries

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Audit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Audit\Api\AuditLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$startTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start time of download window. Optional
$endTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End time of download window. Optional
$batchSize = 56; // int | Max number of results to return. Optional
$continuationToken = "continuationToken_example"; // string | Token used for returning next set of results from previous query. Optional
$skipAggregation = true; // bool | Skips aggregating events and leaves them as individual entries instead. By default events are aggregated. Event types that are aggregated: AuditLog.AccessLog.

try {
    $result = $apiInstance->auditLogQuery($organization, $apiVersion, $startTime, $endTime, $batchSize, $continuationToken, $skipAggregation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditLogApi->auditLogQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **startTime** | **\DateTime**| Start time of download window. Optional | [optional]
 **endTime** | **\DateTime**| End time of download window. Optional | [optional]
 **batchSize** | **int**| Max number of results to return. Optional | [optional]
 **continuationToken** | **string**| Token used for returning next set of results from previous query. Optional | [optional]
 **skipAggregation** | **bool**| Skips aggregating events and leaves them as individual entries instead. By default events are aggregated. Event types that are aggregated: AuditLog.AccessLog. | [optional]

### Return type

[**\AzureDevOpsClient\Audit\AzureDevOpsClient\Audit\Model\AuditLogQueryResult**](../Model/AuditLogQueryResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

