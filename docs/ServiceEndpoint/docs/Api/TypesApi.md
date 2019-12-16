# AzureDevOpsClient\ServiceEndpoint\TypesApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**typesList**](TypesApi.md#typesList) | **GET** /{organization}/_apis/serviceendpoint/types | 


# **typesList**
> \AzureDevOpsClient\ServiceEndpoint\AzureDevOpsClient\ServiceEndpoint\Model\ServiceEndpointType[] typesList($organization, $apiVersion, $type, $scheme)



Get service endpoint types.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\ServiceEndpoint\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\ServiceEndpoint\Api\TypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$type = "type_example"; // string | Type of service endpoint.
$scheme = "scheme_example"; // string | Scheme of service endpoint.

try {
    $result = $apiInstance->typesList($organization, $apiVersion, $type, $scheme);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TypesApi->typesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **type** | **string**| Type of service endpoint. | [optional]
 **scheme** | **string**| Scheme of service endpoint. | [optional]

### Return type

[**\AzureDevOpsClient\ServiceEndpoint\AzureDevOpsClient\ServiceEndpoint\Model\ServiceEndpointType[]**](../Model/ServiceEndpointType.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

