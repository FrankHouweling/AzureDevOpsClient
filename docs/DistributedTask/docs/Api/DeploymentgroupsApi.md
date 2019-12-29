# FrankHouweling\AzureDevOpsClient\DistributedTask\DeploymentgroupsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deploymentgroupsAdd**](DeploymentgroupsApi.md#deploymentgroupsAdd) | **POST** /{organization}/{project}/_apis/distributedtask/deploymentgroups | 
[**deploymentgroupsDelete**](DeploymentgroupsApi.md#deploymentgroupsDelete) | **DELETE** /{organization}/{project}/_apis/distributedtask/deploymentgroups/{deploymentGroupId} | 
[**deploymentgroupsGet**](DeploymentgroupsApi.md#deploymentgroupsGet) | **GET** /{organization}/{project}/_apis/distributedtask/deploymentgroups/{deploymentGroupId} | 
[**deploymentgroupsList**](DeploymentgroupsApi.md#deploymentgroupsList) | **GET** /{organization}/{project}/_apis/distributedtask/deploymentgroups | 
[**deploymentgroupsUpdate**](DeploymentgroupsApi.md#deploymentgroupsUpdate) | **PATCH** /{organization}/{project}/_apis/distributedtask/deploymentgroups/{deploymentGroupId} | 


# **deploymentgroupsAdd**
> \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\DeploymentGroup deploymentgroupsAdd($organization, $body, $project, $apiVersion)



Create a deployment group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\DistributedTask\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\DistributedTask\Api\DeploymentgroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\DeploymentGroupCreateParameter(); // \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\DeploymentGroupCreateParameter | Deployment group to create.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->deploymentgroupsAdd($organization, $body, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentgroupsApi->deploymentgroupsAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\DeploymentGroupCreateParameter**](../Model/DeploymentGroupCreateParameter.md)| Deployment group to create. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\DeploymentGroup**](../Model/DeploymentGroup.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deploymentgroupsDelete**
> deploymentgroupsDelete($organization, $project, $deploymentGroupId, $apiVersion)



Delete a deployment group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\DistributedTask\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\DistributedTask\Api\DeploymentgroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$deploymentGroupId = 56; // int | ID of the deployment group to be deleted.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->deploymentgroupsDelete($organization, $project, $deploymentGroupId, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentgroupsApi->deploymentgroupsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **deploymentGroupId** | **int**| ID of the deployment group to be deleted. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deploymentgroupsGet**
> \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\DeploymentGroup deploymentgroupsGet($organization, $project, $deploymentGroupId, $apiVersion, $actionFilter, $expand)



Get a deployment group by its ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\DistributedTask\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\DistributedTask\Api\DeploymentgroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$deploymentGroupId = 56; // int | ID of the deployment group.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$actionFilter = "actionFilter_example"; // string | Get the deployment group only if this action can be performed on it.
$expand = "expand_example"; // string | Include these additional details in the returned object.

try {
    $result = $apiInstance->deploymentgroupsGet($organization, $project, $deploymentGroupId, $apiVersion, $actionFilter, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentgroupsApi->deploymentgroupsGet: ', $e->getMessage(), PHP_EOL;
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
 **actionFilter** | **string**| Get the deployment group only if this action can be performed on it. | [optional]
 **expand** | **string**| Include these additional details in the returned object. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\DeploymentGroup**](../Model/DeploymentGroup.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deploymentgroupsList**
> \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\DeploymentGroup[] deploymentgroupsList($organization, $project, $apiVersion, $name, $actionFilter, $expand, $continuationToken, $top, $ids)



Get a list of deployment groups by name or IDs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\DistributedTask\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\DistributedTask\Api\DeploymentgroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$name = "name_example"; // string | Name of the deployment group.
$actionFilter = "actionFilter_example"; // string | Get only deployment groups on which this action can be performed.
$expand = "expand_example"; // string | Include these additional details in the returned objects.
$continuationToken = "continuationToken_example"; // string | Get deployment groups with names greater than this continuationToken lexicographically.
$top = 56; // int | Maximum number of deployment groups to return. Default is **1000**.
$ids = "ids_example"; // string | Comma separated list of IDs of the deployment groups.

try {
    $result = $apiInstance->deploymentgroupsList($organization, $project, $apiVersion, $name, $actionFilter, $expand, $continuationToken, $top, $ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentgroupsApi->deploymentgroupsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **name** | **string**| Name of the deployment group. | [optional]
 **actionFilter** | **string**| Get only deployment groups on which this action can be performed. | [optional]
 **expand** | **string**| Include these additional details in the returned objects. | [optional]
 **continuationToken** | **string**| Get deployment groups with names greater than this continuationToken lexicographically. | [optional]
 **top** | **int**| Maximum number of deployment groups to return. Default is **1000**. | [optional]
 **ids** | **string**| Comma separated list of IDs of the deployment groups. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\DeploymentGroup[]**](../Model/DeploymentGroup.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deploymentgroupsUpdate**
> \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\DeploymentGroup deploymentgroupsUpdate($organization, $body, $project, $deploymentGroupId, $apiVersion)



Update a deployment group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\DistributedTask\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\DistributedTask\Api\DeploymentgroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\DeploymentGroupUpdateParameter(); // \FrankHouweling\AzureDevOpsClient\DistributedTask\Model\DeploymentGroupUpdateParameter | Deployment group to update.
$project = "project_example"; // string | Project ID or project name
$deploymentGroupId = 56; // int | ID of the deployment group.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->deploymentgroupsUpdate($organization, $body, $project, $deploymentGroupId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentgroupsApi->deploymentgroupsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\DeploymentGroupUpdateParameter**](../Model/DeploymentGroupUpdateParameter.md)| Deployment group to update. |
 **project** | **string**| Project ID or project name |
 **deploymentGroupId** | **int**| ID of the deployment group. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\DeploymentGroup**](../Model/DeploymentGroup.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

