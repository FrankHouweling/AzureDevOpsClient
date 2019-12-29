# FrankHouweling\AzureDevOpsClient\Symbol\ClientApi

All URIs are relative to *https://artifacts.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**clientGet**](ClientApi.md#clientGet) | **GET** /{organization}/_apis/symbol/client/{clientType} | 
[**clientHeadClient**](ClientApi.md#clientHeadClient) | **HEAD** /{organization}/_apis/symbol/client | 


# **clientGet**
> string clientGet($organization, $clientType, $apiVersion)



Get the client package.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Symbol\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Symbol\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$clientType = "clientType_example"; // string | Either \"EXE\" for a zip file containing a Windows symbol client (a.k.a. symbol.exe) along with dependencies, or \"TASK\" for a VSTS task that can be run on a VSTS build agent. All the other values are invalid. The parameter is case-insensitive.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->clientGet($organization, $clientType, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **clientType** | **string**| Either \&quot;EXE\&quot; for a zip file containing a Windows symbol client (a.k.a. symbol.exe) along with dependencies, or \&quot;TASK\&quot; for a VSTS task that can be run on a VSTS build agent. All the other values are invalid. The parameter is case-insensitive. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

**string**

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientHeadClient**
> clientHeadClient($organization, $apiVersion)



Get client version information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Symbol\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Symbol\Api\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->clientHeadClient($organization, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->clientHeadClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

