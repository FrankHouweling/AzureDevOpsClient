# AzureDevOpsClient\ServiceEndpoint\ExecutionhistoryApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**executionhistoryList**](ExecutionhistoryApi.md#executionhistoryList) | **GET** /{organization}/{project}/_apis/serviceendpoint/{endpointId}/executionhistory | 


# **executionhistoryList**
> \AzureDevOpsClient\ServiceEndpoint\AzureDevOpsClient\ServiceEndpoint\Model\ServiceEndpointExecutionRecord[] executionhistoryList($organization, $project, $endpointId, $apiVersion, $top, $continuationToken)



Get service endpoint execution records.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = AzureDevOpsClient\ServiceEndpoint\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new AzureDevOpsClient\ServiceEndpoint\Api\ExecutionhistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$endpointId = "endpointId_example"; // string | Id of the service endpoint.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$top = 56; // int | Number of service endpoint execution records to get.
$continuationToken = 789; // int | A continuation token, returned by a previous call to this method, that can be used to return the next set of records

try {
    $result = $apiInstance->executionhistoryList($organization, $project, $endpointId, $apiVersion, $top, $continuationToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExecutionhistoryApi->executionhistoryList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **endpointId** | [**string**](../Model/.md)| Id of the service endpoint. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **top** | **int**| Number of service endpoint execution records to get. | [optional]
 **continuationToken** | **int**| A continuation token, returned by a previous call to this method, that can be used to return the next set of records | [optional]

### Return type

[**\AzureDevOpsClient\ServiceEndpoint\AzureDevOpsClient\ServiceEndpoint\Model\ServiceEndpointExecutionRecord[]**](../Model/ServiceEndpointExecutionRecord.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

