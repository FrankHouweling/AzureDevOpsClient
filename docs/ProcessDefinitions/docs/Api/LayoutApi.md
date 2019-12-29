# FrankHouweling\AzureDevOpsClient\ProcessDefinitions\LayoutApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**get**](LayoutApi.md#get) | **GET** /{organization}/_apis/work/processdefinitions/{processId}/workItemTypes/{witRefName}/layout | 


# **get**
> \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\FormLayout get($organization, $processId, $witRefName, $apiVersion)



Gets the form layout

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Api\LayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$processId = "processId_example"; // string | The ID of the process
$witRefName = "witRefName_example"; // string | The reference name of the work item type
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '4.1-preview.1' to use this version of the api.

try {
    $result = $apiInstance->get($organization, $processId, $witRefName, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LayoutApi->get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **processId** | [**string**](../Model/.md)| The ID of the process |
 **witRefName** | **string**| The reference name of the work item type |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;4.1-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\FormLayout**](../Model/FormLayout.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

