# AzureDevOpsClient\Audit\DownloadLogApi

All URIs are relative to *https://auditservice.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**downloadLogDownloadLog**](DownloadLogApi.md#downloadLogDownloadLog) | **GET** /{organization}/_apis/audit/downloadlog | 


# **downloadLogDownloadLog**
> string downloadLogDownloadLog($organization, $format, $apiVersion, $startTime, $endTime)



Downloads audit log entries.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = AzureDevOpsClient\Audit\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new AzureDevOpsClient\Audit\Api\DownloadLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$format = "format_example"; // string | File format for download. Can be \"json\" or \"csv\".
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$startTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start time of download window. Optional
$endTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End time of download window. Optional

try {
    $result = $apiInstance->downloadLogDownloadLog($organization, $format, $apiVersion, $startTime, $endTime);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadLogApi->downloadLogDownloadLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **format** | **string**| File format for download. Can be \&quot;json\&quot; or \&quot;csv\&quot;. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **startTime** | **\DateTime**| Start time of download window. Optional | [optional]
 **endTime** | **\DateTime**| End time of download window. Optional | [optional]

### Return type

**string**

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

