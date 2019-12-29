# FrankHouweling\AzureDevOpsClient\Release\GatesApi

All URIs are relative to *https://vsrm.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**gatesUpdate**](GatesApi.md#gatesUpdate) | **PATCH** /{organization}/{project}/_apis/release/gates/{gateStepId} | 


# **gatesUpdate**
> \FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseGates gatesUpdate($organization, $body, $project, $gateStepId, $apiVersion)



Updates the gate for a deployment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Release\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Release\Api\GatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Release\Model\GateUpdateMetadata(); // \FrankHouweling\AzureDevOpsClient\Release\Model\GateUpdateMetadata | Metadata to patch the Release Gates.
$project = "project_example"; // string | Project ID or project name
$gateStepId = 56; // int | Gate step Id.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->gatesUpdate($organization, $body, $project, $gateStepId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GatesApi->gatesUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\GateUpdateMetadata**](../Model/GateUpdateMetadata.md)| Metadata to patch the Release Gates. |
 **project** | **string**| Project ID or project name |
 **gateStepId** | **int**| Gate step Id. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseGates**](../Model/ReleaseGates.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

