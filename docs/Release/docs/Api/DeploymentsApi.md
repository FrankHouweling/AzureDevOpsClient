# AzureDevOpsClient\Release\DeploymentsApi

All URIs are relative to *https://vsrm.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deploymentsList**](DeploymentsApi.md#deploymentsList) | **GET** /{organization}/{project}/_apis/release/deployments | 


# **deploymentsList**
> \AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\Deployment[] deploymentsList($organization, $project, $apiVersion, $definitionId, $definitionEnvironmentId, $createdBy, $minModifiedTime, $maxModifiedTime, $deploymentStatus, $operationStatus, $latestAttemptsOnly, $queryOrder, $top, $continuationToken, $createdFor, $minStartedTime, $maxStartedTime, $sourceBranch)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Release\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Release\Api\DeploymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.
$definitionId = 56; // int | 
$definitionEnvironmentId = 56; // int | 
$createdBy = "createdBy_example"; // string | 
$minModifiedTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$maxModifiedTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$deploymentStatus = "deploymentStatus_example"; // string | 
$operationStatus = "operationStatus_example"; // string | 
$latestAttemptsOnly = true; // bool | 
$queryOrder = "queryOrder_example"; // string | 
$top = 56; // int | 
$continuationToken = 56; // int | 
$createdFor = "createdFor_example"; // string | 
$minStartedTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$maxStartedTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$sourceBranch = "sourceBranch_example"; // string | 

try {
    $result = $apiInstance->deploymentsList($organization, $project, $apiVersion, $definitionId, $definitionEnvironmentId, $createdBy, $minModifiedTime, $maxModifiedTime, $deploymentStatus, $operationStatus, $latestAttemptsOnly, $queryOrder, $top, $continuationToken, $createdFor, $minStartedTime, $maxStartedTime, $sourceBranch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentsApi->deploymentsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |
 **definitionId** | **int**|  | [optional]
 **definitionEnvironmentId** | **int**|  | [optional]
 **createdBy** | **string**|  | [optional]
 **minModifiedTime** | **\DateTime**|  | [optional]
 **maxModifiedTime** | **\DateTime**|  | [optional]
 **deploymentStatus** | **string**|  | [optional]
 **operationStatus** | **string**|  | [optional]
 **latestAttemptsOnly** | **bool**|  | [optional]
 **queryOrder** | **string**|  | [optional]
 **top** | **int**|  | [optional]
 **continuationToken** | **int**|  | [optional]
 **createdFor** | **string**|  | [optional]
 **minStartedTime** | **\DateTime**|  | [optional]
 **maxStartedTime** | **\DateTime**|  | [optional]
 **sourceBranch** | **string**|  | [optional]

### Return type

[**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\Deployment[]**](../Model/Deployment.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

