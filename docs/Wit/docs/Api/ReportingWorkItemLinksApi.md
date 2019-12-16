# FrankHouweling\AzureDevOpsClient\Wit\ReportingWorkItemLinksApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**reportingWorkItemLinksGet**](ReportingWorkItemLinksApi.md#reportingWorkItemLinksGet) | **GET** /{organization}/{project}/_apis/wit/reporting/workitemlinks | 


# **reportingWorkItemLinksGet**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\ReportingWorkItemLinksBatch reportingWorkItemLinksGet($organization, $project, $apiVersion, $linkTypes, $types, $continuationToken, $startDateTime)



Get a batch of work item links

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\ReportingWorkItemLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.
$linkTypes = "linkTypes_example"; // string | A list of types to filter the results to specific link types. Omit this parameter to get work item links of all link types.
$types = "types_example"; // string | A list of types to filter the results to specific work item types. Omit this parameter to get work item links of all work item types.
$continuationToken = "continuationToken_example"; // string | Specifies the continuationToken to start the batch from. Omit this parameter to get the first batch of links.
$startDateTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date/time to use as a starting point for link changes. Only link changes that occurred after that date/time will be returned. Cannot be used in conjunction with 'watermark' parameter.

try {
    $result = $apiInstance->reportingWorkItemLinksGet($organization, $project, $apiVersion, $linkTypes, $types, $continuationToken, $startDateTime);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingWorkItemLinksApi->reportingWorkItemLinksGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |
 **linkTypes** | **string**| A list of types to filter the results to specific link types. Omit this parameter to get work item links of all link types. | [optional]
 **types** | **string**| A list of types to filter the results to specific work item types. Omit this parameter to get work item links of all work item types. | [optional]
 **continuationToken** | **string**| Specifies the continuationToken to start the batch from. Omit this parameter to get the first batch of links. | [optional]
 **startDateTime** | **\DateTime**| Date/time to use as a starting point for link changes. Only link changes that occurred after that date/time will be returned. Cannot be used in conjunction with &#39;watermark&#39; parameter. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\ReportingWorkItemLinksBatch**](../Model/ReportingWorkItemLinksBatch.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

