# FrankHouweling\AzureDevOpsClient\Wit\ReportingWorkItemRevisionsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**reportingWorkItemRevisionsReadReportingRevisionsGet**](ReportingWorkItemRevisionsApi.md#reportingWorkItemRevisionsReadReportingRevisionsGet) | **GET** /{organization}/{project}/_apis/wit/reporting/workitemrevisions | 
[**reportingWorkItemRevisionsReadReportingRevisionsPost**](ReportingWorkItemRevisionsApi.md#reportingWorkItemRevisionsReadReportingRevisionsPost) | **POST** /{organization}/{project}/_apis/wit/reporting/workitemrevisions | 


# **reportingWorkItemRevisionsReadReportingRevisionsGet**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\ReportingWorkItemRevisionsBatch reportingWorkItemRevisionsReadReportingRevisionsGet($organization, $project, $apiVersion, $fields, $types, $continuationToken, $startDateTime, $includeIdentityRef, $includeDeleted, $includeTagRef, $includeLatestOnly, $expand, $includeDiscussionChangesOnly, $maxPageSize)



Get a batch of work item revisions with the option of including deleted items

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\ReportingWorkItemRevisionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.
$fields = "fields_example"; // string | A list of fields to return in work item revisions. Omit this parameter to get all reportable fields.
$types = "types_example"; // string | A list of types to filter the results to specific work item types. Omit this parameter to get work item revisions of all work item types.
$continuationToken = "continuationToken_example"; // string | Specifies the watermark to start the batch from. Omit this parameter to get the first batch of revisions.
$startDateTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date/time to use as a starting point for revisions, all revisions will occur after this date/time. Cannot be used in conjunction with 'watermark' parameter.
$includeIdentityRef = true; // bool | Return an identity reference instead of a string value for identity fields.
$includeDeleted = true; // bool | Specify if the deleted item should be returned.
$includeTagRef = true; // bool | Specify if the tag objects should be returned for System.Tags field.
$includeLatestOnly = true; // bool | Return only the latest revisions of work items, skipping all historical revisions
$expand = "expand_example"; // string | Return all the fields in work item revisions, including long text fields which are not returned by default
$includeDiscussionChangesOnly = true; // bool | Return only the those revisions of work items, where only history field was changed
$maxPageSize = 56; // int | The maximum number of results to return in this batch

try {
    $result = $apiInstance->reportingWorkItemRevisionsReadReportingRevisionsGet($organization, $project, $apiVersion, $fields, $types, $continuationToken, $startDateTime, $includeIdentityRef, $includeDeleted, $includeTagRef, $includeLatestOnly, $expand, $includeDiscussionChangesOnly, $maxPageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingWorkItemRevisionsApi->reportingWorkItemRevisionsReadReportingRevisionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |
 **fields** | **string**| A list of fields to return in work item revisions. Omit this parameter to get all reportable fields. | [optional]
 **types** | **string**| A list of types to filter the results to specific work item types. Omit this parameter to get work item revisions of all work item types. | [optional]
 **continuationToken** | **string**| Specifies the watermark to start the batch from. Omit this parameter to get the first batch of revisions. | [optional]
 **startDateTime** | **\DateTime**| Date/time to use as a starting point for revisions, all revisions will occur after this date/time. Cannot be used in conjunction with &#39;watermark&#39; parameter. | [optional]
 **includeIdentityRef** | **bool**| Return an identity reference instead of a string value for identity fields. | [optional]
 **includeDeleted** | **bool**| Specify if the deleted item should be returned. | [optional]
 **includeTagRef** | **bool**| Specify if the tag objects should be returned for System.Tags field. | [optional]
 **includeLatestOnly** | **bool**| Return only the latest revisions of work items, skipping all historical revisions | [optional]
 **expand** | **string**| Return all the fields in work item revisions, including long text fields which are not returned by default | [optional]
 **includeDiscussionChangesOnly** | **bool**| Return only the those revisions of work items, where only history field was changed | [optional]
 **maxPageSize** | **int**| The maximum number of results to return in this batch | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\ReportingWorkItemRevisionsBatch**](../Model/ReportingWorkItemRevisionsBatch.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportingWorkItemRevisionsReadReportingRevisionsPost**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\ReportingWorkItemRevisionsBatch reportingWorkItemRevisionsReadReportingRevisionsPost($organization, $body, $project, $apiVersion, $continuationToken, $startDateTime, $expand)



Get a batch of work item revisions. This request may be used if your list of fields is large enough that it may run the URL over the length limit.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\ReportingWorkItemRevisionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Wit\Model\ReportingWorkItemRevisionsFilter(); // \FrankHouweling\AzureDevOpsClient\Wit\Model\ReportingWorkItemRevisionsFilter | An object that contains request settings: field filter, type filter, identity format
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.
$continuationToken = "continuationToken_example"; // string | Specifies the watermark to start the batch from. Omit this parameter to get the first batch of revisions.
$startDateTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date/time to use as a starting point for revisions, all revisions will occur after this date/time. Cannot be used in conjunction with 'watermark' parameter.
$expand = "expand_example"; // string | 

try {
    $result = $apiInstance->reportingWorkItemRevisionsReadReportingRevisionsPost($organization, $body, $project, $apiVersion, $continuationToken, $startDateTime, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingWorkItemRevisionsApi->reportingWorkItemRevisionsReadReportingRevisionsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Wit\Model\ReportingWorkItemRevisionsFilter**](../Model/ReportingWorkItemRevisionsFilter.md)| An object that contains request settings: field filter, type filter, identity format |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |
 **continuationToken** | **string**| Specifies the watermark to start the batch from. Omit this parameter to get the first batch of revisions. | [optional]
 **startDateTime** | **\DateTime**| Date/time to use as a starting point for revisions, all revisions will occur after this date/time. Cannot be used in conjunction with &#39;watermark&#39; parameter. | [optional]
 **expand** | **string**|  | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\ReportingWorkItemRevisionsBatch**](../Model/ReportingWorkItemRevisionsBatch.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

