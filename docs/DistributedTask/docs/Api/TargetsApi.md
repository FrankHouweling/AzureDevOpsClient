# FrankHouweling\AzureDevOpsClient\DistributedTask\TargetsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**targetsDelete**](TargetsApi.md#targetsDelete) | **DELETE** /{organization}/{project}/_apis/distributedtask/deploymentgroups/{deploymentGroupId}/targets/{targetId} | 
[**targetsGet**](TargetsApi.md#targetsGet) | **GET** /{organization}/{project}/_apis/distributedtask/deploymentgroups/{deploymentGroupId}/targets/{targetId} | 
[**targetsList**](TargetsApi.md#targetsList) | **GET** /{organization}/{project}/_apis/distributedtask/deploymentgroups/{deploymentGroupId}/targets | 
[**targetsUpdate**](TargetsApi.md#targetsUpdate) | **PATCH** /{organization}/{project}/_apis/distributedtask/deploymentgroups/{deploymentGroupId}/targets | 


# **targetsDelete**
> targetsDelete($organization, $project, $deploymentGroupId, $targetId, $apiVersion)



Delete a deployment target in a deployment group. This deletes the agent from associated deployment pool too.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\DistributedTask\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\DistributedTask\Api\TargetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$deploymentGroupId = 56; // int | ID of the deployment group in which deployment target is deleted.
$targetId = 56; // int | ID of the deployment target to delete.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->targetsDelete($organization, $project, $deploymentGroupId, $targetId, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling TargetsApi->targetsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **deploymentGroupId** | **int**| ID of the deployment group in which deployment target is deleted. |
 **targetId** | **int**| ID of the deployment target to delete. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **targetsGet**
> \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\DeploymentMachine targetsGet($organization, $project, $deploymentGroupId, $targetId, $apiVersion, $expand)



Get a deployment target by its ID in a deployment group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\DistributedTask\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\DistributedTask\Api\TargetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$deploymentGroupId = 56; // int | ID of the deployment group to which deployment target belongs.
$targetId = 56; // int | ID of the deployment target to return.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$expand = "expand_example"; // string | Include these additional details in the returned objects.

try {
    $result = $apiInstance->targetsGet($organization, $project, $deploymentGroupId, $targetId, $apiVersion, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetsApi->targetsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **deploymentGroupId** | **int**| ID of the deployment group to which deployment target belongs. |
 **targetId** | **int**| ID of the deployment target to return. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **expand** | **string**| Include these additional details in the returned objects. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\DeploymentMachine**](../Model/DeploymentMachine.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **targetsList**
> \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\DeploymentMachine[] targetsList($organization, $project, $deploymentGroupId, $apiVersion, $tags, $name, $partialNameMatch, $expand, $agentStatus, $agentJobResult, $continuationToken, $top, $enabled, $propertyFilters)



Get a list of deployment targets in a deployment group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\DistributedTask\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\DistributedTask\Api\TargetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$deploymentGroupId = 56; // int | ID of the deployment group.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$tags = "tags_example"; // string | Get only the deployment targets that contain all these comma separted list of tags.
$name = "name_example"; // string | Name pattern of the deployment targets to return.
$partialNameMatch = true; // bool | When set to true, treats **name** as pattern. Else treats it as absolute match. Default is **false**.
$expand = "expand_example"; // string | Include these additional details in the returned objects.
$agentStatus = "agentStatus_example"; // string | Get only deployment targets that have this status.
$agentJobResult = "agentJobResult_example"; // string | Get only deployment targets that have this last job result.
$continuationToken = "continuationToken_example"; // string | Get deployment targets with names greater than this continuationToken lexicographically.
$top = 56; // int | Maximum number of deployment targets to return. Default is **1000**.
$enabled = true; // bool | Get only deployment targets that are enabled or disabled. Default is 'null' which returns all the targets.
$propertyFilters = "propertyFilters_example"; // string | 

try {
    $result = $apiInstance->targetsList($organization, $project, $deploymentGroupId, $apiVersion, $tags, $name, $partialNameMatch, $expand, $agentStatus, $agentJobResult, $continuationToken, $top, $enabled, $propertyFilters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetsApi->targetsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **deploymentGroupId** | **int**| ID of the deployment group. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **tags** | **string**| Get only the deployment targets that contain all these comma separted list of tags. | [optional]
 **name** | **string**| Name pattern of the deployment targets to return. | [optional]
 **partialNameMatch** | **bool**| When set to true, treats **name** as pattern. Else treats it as absolute match. Default is **false**. | [optional]
 **expand** | **string**| Include these additional details in the returned objects. | [optional]
 **agentStatus** | **string**| Get only deployment targets that have this status. | [optional]
 **agentJobResult** | **string**| Get only deployment targets that have this last job result. | [optional]
 **continuationToken** | **string**| Get deployment targets with names greater than this continuationToken lexicographically. | [optional]
 **top** | **int**| Maximum number of deployment targets to return. Default is **1000**. | [optional]
 **enabled** | **bool**| Get only deployment targets that are enabled or disabled. Default is &#39;null&#39; which returns all the targets. | [optional]
 **propertyFilters** | **string**|  | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\DeploymentMachine[]**](../Model/DeploymentMachine.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **targetsUpdate**
> \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\DeploymentMachine[] targetsUpdate($organization, $body, $project, $deploymentGroupId, $apiVersion)



Update tags of a list of deployment targets in a deployment group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\DistributedTask\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\DistributedTask\Api\TargetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = array(new \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\DeploymentTargetUpdateParameter()); // \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\DeploymentTargetUpdateParameter[] | Deployment targets with tags to udpdate.
$project = "project_example"; // string | Project ID or project name
$deploymentGroupId = 56; // int | ID of the deployment group in which deployment targets are updated.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->targetsUpdate($organization, $body, $project, $deploymentGroupId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetsApi->targetsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\DeploymentTargetUpdateParameter[]**](../Model/DeploymentTargetUpdateParameter.md)| Deployment targets with tags to udpdate. |
 **project** | **string**| Project ID or project name |
 **deploymentGroupId** | **int**| ID of the deployment group in which deployment targets are updated. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\DeploymentMachine[]**](../Model/DeploymentMachine.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

