# FrankHouweling\AzureDevOpsClient\Clt\AgentGroupsApi

All URIs are relative to *https://vsclt.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**agentGroupsCreate**](AgentGroupsApi.md#agentGroupsCreate) | **POST** /{organization}/_apis/clt/agentgroups | 
[**agentGroupsGet**](AgentGroupsApi.md#agentGroupsGet) | **GET** /{organization}/_apis/clt/agentgroups/{agentGroupId} | 


# **agentGroupsCreate**
> \FrankHouweling\AzureDevOpsClient\Clt\Model\AgentGroup agentGroupsCreate($organization, $body, $apiVersion)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Clt\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Clt\Api\AgentGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Clt\Model\AgentGroup(); // \FrankHouweling\AzureDevOpsClient\Clt\Model\AgentGroup | Agent group to be created
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->agentGroupsCreate($organization, $body, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentGroupsApi->agentGroupsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Clt\Model\AgentGroup**](../Model/AgentGroup.md)| Agent group to be created |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Clt\Model\AgentGroup**](../Model/AgentGroup.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **agentGroupsGet**
> object agentGroupsGet($organization, $agentGroupId, $apiVersion, $machineSetupInput, $machineAccessData, $outgoingRequestUrls, $agentGroupName)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Clt\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Clt\Api\AgentGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$agentGroupId = "agentGroupId_example"; // string | The agent group identifier
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$machineSetupInput = true; // bool | 
$machineAccessData = true; // bool | 
$outgoingRequestUrls = true; // bool | 
$agentGroupName = "agentGroupName_example"; // string | Name of the agent group

try {
    $result = $apiInstance->agentGroupsGet($organization, $agentGroupId, $apiVersion, $machineSetupInput, $machineAccessData, $outgoingRequestUrls, $agentGroupName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentGroupsApi->agentGroupsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **agentGroupId** | **string**| The agent group identifier |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **machineSetupInput** | **bool**|  | [optional]
 **machineAccessData** | **bool**|  | [optional]
 **outgoingRequestUrls** | **bool**|  | [optional]
 **agentGroupName** | **string**| Name of the agent group | [optional]

### Return type

**object**

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

