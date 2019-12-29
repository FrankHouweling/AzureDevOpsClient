# FrankHouweling\AzureDevOpsClient\DistributedTask\AgentcloudtypesApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**agentcloudtypesList**](AgentcloudtypesApi.md#agentcloudtypesList) | **GET** /{organization}/_apis/distributedtask/agentcloudtypes | 


# **agentcloudtypesList**
> \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentCloudType[] agentcloudtypesList($organization, $apiVersion)



Get agent cloud types.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\DistributedTask\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\DistributedTask\Api\AgentcloudtypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->agentcloudtypesList($organization, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentcloudtypesApi->agentcloudtypesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentCloudType[]**](../Model/TaskAgentCloudType.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

