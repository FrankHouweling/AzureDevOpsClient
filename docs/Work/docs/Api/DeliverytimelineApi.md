# FrankHouweling\AzureDevOpsClient\Work\DeliverytimelineApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deliverytimelineGet**](DeliverytimelineApi.md#deliverytimelineGet) | **GET** /{organization}/{project}/_apis/work/plans/{id}/deliverytimeline | 


# **deliverytimelineGet**
> \FrankHouweling\AzureDevOpsClient\Work\Model\DeliveryViewData deliverytimelineGet($organization, $project, $id, $apiVersion, $revision, $startDate, $endDate)



Get Delivery View Data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Work\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Work\Api\DeliverytimelineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$id = "id_example"; // string | Identifier for delivery view
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$revision = 56; // int | Revision of the plan for which you want data. If the current plan is a different revision you will get an ViewRevisionMismatchException exception. If you do not supply a revision you will get data for the latest revision.
$startDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date of timeline
$endDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date of timeline

try {
    $result = $apiInstance->deliverytimelineGet($organization, $project, $id, $apiVersion, $revision, $startDate, $endDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliverytimelineApi->deliverytimelineGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **id** | **string**| Identifier for delivery view |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **revision** | **int**| Revision of the plan for which you want data. If the current plan is a different revision you will get an ViewRevisionMismatchException exception. If you do not supply a revision you will get data for the latest revision. | [optional]
 **startDate** | **\DateTime**| The start date of timeline | [optional]
 **endDate** | **\DateTime**| The end date of timeline | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Work\Model\DeliveryViewData**](../Model/DeliveryViewData.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

