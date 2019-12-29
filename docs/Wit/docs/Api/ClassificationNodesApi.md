# FrankHouweling\AzureDevOpsClient\Wit\ClassificationNodesApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**classificationNodesCreateOrUpdate**](ClassificationNodesApi.md#classificationNodesCreateOrUpdate) | **POST** /{organization}/{project}/_apis/wit/classificationnodes/{structureGroup}/{path} | 
[**classificationNodesDelete**](ClassificationNodesApi.md#classificationNodesDelete) | **DELETE** /{organization}/{project}/_apis/wit/classificationnodes/{structureGroup}/{path} | 
[**classificationNodesGet**](ClassificationNodesApi.md#classificationNodesGet) | **GET** /{organization}/{project}/_apis/wit/classificationnodes/{structureGroup}/{path} | 
[**classificationNodesGetRootNodes**](ClassificationNodesApi.md#classificationNodesGetRootNodes) | **GET** /{organization}/{project}/_apis/wit/classificationnodes | 
[**classificationNodesUpdate**](ClassificationNodesApi.md#classificationNodesUpdate) | **PATCH** /{organization}/{project}/_apis/wit/classificationnodes/{structureGroup}/{path} | 


# **classificationNodesCreateOrUpdate**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemClassificationNode classificationNodesCreateOrUpdate($organization, $body, $project, $structureGroup, $path, $apiVersion)



Create new or update an existing classification node.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\ClassificationNodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemClassificationNode(); // \FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemClassificationNode | Node to create or update.
$project = "project_example"; // string | Project ID or project name
$structureGroup = "structureGroup_example"; // string | Structure group of the classification node, area or iteration.
$path = "path_example"; // string | Path of the classification node.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $result = $apiInstance->classificationNodesCreateOrUpdate($organization, $body, $project, $structureGroup, $path, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassificationNodesApi->classificationNodesCreateOrUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemClassificationNode**](../Model/WorkItemClassificationNode.md)| Node to create or update. |
 **project** | **string**| Project ID or project name |
 **structureGroup** | **string**| Structure group of the classification node, area or iteration. |
 **path** | **string**| Path of the classification node. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemClassificationNode**](../Model/WorkItemClassificationNode.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **classificationNodesDelete**
> classificationNodesDelete($organization, $project, $structureGroup, $path, $apiVersion, $reclassifyId)



Delete an existing classification node.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\ClassificationNodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$structureGroup = "structureGroup_example"; // string | Structure group of the classification node, area or iteration.
$path = "path_example"; // string | Path of the classification node.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.
$reclassifyId = 56; // int | Id of the target classification node for reclassification.

try {
    $apiInstance->classificationNodesDelete($organization, $project, $structureGroup, $path, $apiVersion, $reclassifyId);
} catch (Exception $e) {
    echo 'Exception when calling ClassificationNodesApi->classificationNodesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **structureGroup** | **string**| Structure group of the classification node, area or iteration. |
 **path** | **string**| Path of the classification node. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |
 **reclassifyId** | **int**| Id of the target classification node for reclassification. | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **classificationNodesGet**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemClassificationNode classificationNodesGet($organization, $project, $structureGroup, $path, $apiVersion, $depth)



Gets the classification node for a given node path.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\ClassificationNodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$structureGroup = "structureGroup_example"; // string | Structure group of the classification node, area or iteration.
$path = "path_example"; // string | Path of the classification node.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.
$depth = 56; // int | Depth of children to fetch.

try {
    $result = $apiInstance->classificationNodesGet($organization, $project, $structureGroup, $path, $apiVersion, $depth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassificationNodesApi->classificationNodesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **structureGroup** | **string**| Structure group of the classification node, area or iteration. |
 **path** | **string**| Path of the classification node. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |
 **depth** | **int**| Depth of children to fetch. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemClassificationNode**](../Model/WorkItemClassificationNode.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **classificationNodesGetRootNodes**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemClassificationNode[] classificationNodesGetRootNodes($organization, $project, $apiVersion, $depth)



Gets root classification nodes under the project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\ClassificationNodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.
$depth = 56; // int | Depth of children to fetch.

try {
    $result = $apiInstance->classificationNodesGetRootNodes($organization, $project, $apiVersion, $depth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassificationNodesApi->classificationNodesGetRootNodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |
 **depth** | **int**| Depth of children to fetch. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemClassificationNode[]**](../Model/WorkItemClassificationNode.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **classificationNodesUpdate**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemClassificationNode classificationNodesUpdate($organization, $body, $project, $structureGroup, $path, $apiVersion)



Update an existing classification node.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\ClassificationNodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemClassificationNode(); // \FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemClassificationNode | Node to create or update.
$project = "project_example"; // string | Project ID or project name
$structureGroup = "structureGroup_example"; // string | Structure group of the classification node, area or iteration.
$path = "path_example"; // string | Path of the classification node.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $result = $apiInstance->classificationNodesUpdate($organization, $body, $project, $structureGroup, $path, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassificationNodesApi->classificationNodesUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemClassificationNode**](../Model/WorkItemClassificationNode.md)| Node to create or update. |
 **project** | **string**| Project ID or project name |
 **structureGroup** | **string**| Structure group of the classification node, area or iteration. |
 **path** | **string**| Path of the classification node. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemClassificationNode**](../Model/WorkItemClassificationNode.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

