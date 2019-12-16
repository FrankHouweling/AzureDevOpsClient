# FrankHouweling\AzureDevOpsClient\Security\SecurityNamespacesApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**securityNamespacesQuery**](SecurityNamespacesApi.md#securityNamespacesQuery) | **GET** /{organization}/_apis/securitynamespaces/{securityNamespaceId} | 


# **securityNamespacesQuery**
> \FrankHouweling\AzureDevOpsClient\Security\Model\SecurityNamespaceDescription[] securityNamespacesQuery($organization, $securityNamespaceId, $apiVersion, $localOnly)



List all security namespaces or just the specified namespace.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Security\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Security\Api\SecurityNamespacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$securityNamespaceId = "securityNamespaceId_example"; // string | Security namespace identifier.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$localOnly = true; // bool | If true, retrieve only local security namespaces.

try {
    $result = $apiInstance->securityNamespacesQuery($organization, $securityNamespaceId, $apiVersion, $localOnly);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityNamespacesApi->securityNamespacesQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **securityNamespaceId** | [**string**](../Model/.md)| Security namespace identifier. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **localOnly** | **bool**| If true, retrieve only local security namespaces. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Security\Model\SecurityNamespaceDescription[]**](../Model/SecurityNamespaceDescription.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

