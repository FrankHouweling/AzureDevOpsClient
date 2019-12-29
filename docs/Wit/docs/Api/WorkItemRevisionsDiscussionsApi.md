# FrankHouweling\AzureDevOpsClient\Wit\WorkItemRevisionsDiscussionsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**workItemRevisionsDiscussionsReadReportingDiscussions**](WorkItemRevisionsDiscussionsApi.md#workItemRevisionsDiscussionsReadReportingDiscussions) | **GET** /{organization}/{project}/_apis/wit/reporting/workItemRevisions/discussions | 


# **workItemRevisionsDiscussionsReadReportingDiscussions**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\ReportingWorkItemRevisionsBatch workItemRevisionsDiscussionsReadReportingDiscussions($organization, $project, $apiVersion, $continuationToken, $maxPageSize)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\WorkItemRevisionsDiscussionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$continuationToken = "continuationToken_example"; // string | 
$maxPageSize = 56; // int | 

try {
    $result = $apiInstance->workItemRevisionsDiscussionsReadReportingDiscussions($organization, $project, $apiVersion, $continuationToken, $maxPageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkItemRevisionsDiscussionsApi->workItemRevisionsDiscussionsReadReportingDiscussions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **continuationToken** | **string**|  | [optional]
 **maxPageSize** | **int**|  | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\ReportingWorkItemRevisionsBatch**](../Model/ReportingWorkItemRevisionsBatch.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

