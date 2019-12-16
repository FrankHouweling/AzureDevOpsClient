# FrankHouweling\AzureDevOpsClient\Notification\DiagnosticLogsApi

All URIs are relative to *https://{service}.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**diagnosticLogsList**](DiagnosticLogsApi.md#diagnosticLogsList) | **GET** /{organization}/_apis/notification/diagnosticlogs/{source}/entries/{entryId} | 


# **diagnosticLogsList**
> \FrankHouweling\AzureDevOpsClient\Notification\Model\INotificationDiagnosticLog[] diagnosticLogsList($source, $organization, $entryId, $apiVersion, $startTime, $endTime)



Get a list of diagnostic logs for this service.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Notification\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Notification\Api\DiagnosticLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$source = "source_example"; // string | ID specifying which type of logs to check diagnostics for.
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$entryId = "entryId_example"; // string | The ID of the specific log to query for.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$startTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start time for the time range to query in.
$endTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End time for the time range to query in.

try {
    $result = $apiInstance->diagnosticLogsList($source, $organization, $entryId, $apiVersion, $startTime, $endTime);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiagnosticLogsApi->diagnosticLogsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source** | [**string**](../Model/.md)| ID specifying which type of logs to check diagnostics for. |
 **organization** | **string**| The name of the Azure DevOps organization. |
 **entryId** | [**string**](../Model/.md)| The ID of the specific log to query for. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **startTime** | **\DateTime**| Start time for the time range to query in. | [optional]
 **endTime** | **\DateTime**| End time for the time range to query in. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Notification\Model\INotificationDiagnosticLog[]**](../Model/INotificationDiagnosticLog.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

