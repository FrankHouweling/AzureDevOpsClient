# AzureDevOpsClient\Build\TimelineApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**timelineGet**](TimelineApi.md#timelineGet) | **GET** /{organization}/{project}/_apis/build/builds/{buildId}/timeline/{timelineId} | 


# **timelineGet**
> \AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\Timeline timelineGet($organization, $project, $buildId, $timelineId, $apiVersion, $changeId, $planId)



Gets details for a build

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Build\Api\TimelineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$buildId = 56; // int | 
$timelineId = "timelineId_example"; // string | 
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.
$changeId = 56; // int | 
$planId = "planId_example"; // string | 

try {
    $result = $apiInstance->timelineGet($organization, $project, $buildId, $timelineId, $apiVersion, $changeId, $planId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimelineApi->timelineGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **buildId** | **int**|  |
 **timelineId** | [**string**](../Model/.md)|  |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |
 **changeId** | **int**|  | [optional]
 **planId** | [**string**](../Model/.md)|  | [optional]

### Return type

[**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\Timeline**](../Model/Timeline.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

