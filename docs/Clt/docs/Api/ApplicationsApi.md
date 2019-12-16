# FrankHouweling\AzureDevOpsClient\Clt\ApplicationsApi

All URIs are relative to *https://vsclt.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**applicationsGet**](ApplicationsApi.md#applicationsGet) | **GET** /{organization}/_apis/clt/apm/applications/{applicationId} | 
[**applicationsList**](ApplicationsApi.md#applicationsList) | **GET** /{organization}/_apis/clt/apm/applications | 


# **applicationsGet**
> \FrankHouweling\AzureDevOpsClient\Clt\Model\Application applicationsGet($organization, $applicationId, $apiVersion)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Clt\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Clt\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$applicationId = "applicationId_example"; // string | Filter by APM application identifier.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->applicationsGet($organization, $applicationId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->applicationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **applicationId** | **string**| Filter by APM application identifier. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Clt\Model\Application**](../Model/Application.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **applicationsList**
> \FrankHouweling\AzureDevOpsClient\Clt\Model\Application[] applicationsList($organization, $apiVersion, $type)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Clt\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Clt\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$type = "type_example"; // string | Filters the results based on the plugin type.

try {
    $result = $apiInstance->applicationsList($organization, $apiVersion, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->applicationsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **type** | **string**| Filters the results based on the plugin type. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Clt\Model\Application[]**](../Model/Application.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

