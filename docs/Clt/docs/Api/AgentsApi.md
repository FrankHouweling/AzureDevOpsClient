# FrankHouweling\AzureDevOpsClient\Clt\AgentsApi

All URIs are relative to *https://vsclt.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**agentsDelete**](AgentsApi.md#agentsDelete) | **DELETE** /{organization}/_apis/clt/agentGroups/{agentGroupId}/agents | 
[**agentsGet**](AgentsApi.md#agentsGet) | **GET** /{organization}/_apis/clt/agentGroups/{agentGroupId}/agents | 


# **agentsDelete**
> string agentsDelete($organization, $agentGroupId, $agentName, $apiVersion)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Clt\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Clt\Api\AgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$agentGroupId = "agentGroupId_example"; // string | The agent group identifier
$agentName = "agentName_example"; // string | Name of the static agent
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->agentsDelete($organization, $agentGroupId, $agentName, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentsApi->agentsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **agentGroupId** | **string**| The agent group identifier |
 **agentName** | **string**| Name of the static agent |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

**string**

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **agentsGet**
> object agentsGet($organization, $agentGroupId, $apiVersion, $agentName)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Clt\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Clt\Api\AgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$agentGroupId = "agentGroupId_example"; // string | The agent group identifier
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$agentName = "agentName_example"; // string | Name of the static agent

try {
    $result = $apiInstance->agentsGet($organization, $agentGroupId, $apiVersion, $agentName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentsApi->agentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **agentGroupId** | **string**| The agent group identifier |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **agentName** | **string**| Name of the static agent | [optional]

### Return type

**object**

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

