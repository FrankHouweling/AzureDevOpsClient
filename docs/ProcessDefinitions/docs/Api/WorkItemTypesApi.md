# FrankHouweling\AzureDevOpsClient\ProcessDefinitions\WorkItemTypesApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**add**](WorkItemTypesApi.md#add) | **POST** /{organization}/_apis/work/processdefinitions/{processId}/workitemtypes/{witRefNameForBehaviors}/behaviors | 
[**create**](WorkItemTypesApi.md#create) | **POST** /{organization}/_apis/work/processdefinitions/{processId}/workitemtypes | 
[**delete**](WorkItemTypesApi.md#delete) | **DELETE** /{organization}/_apis/work/processdefinitions/{processId}/workitemtypes/{witRefName} | 
[**getBehaviorForWorkItemType**](WorkItemTypesApi.md#getBehaviorForWorkItemType) | **GET** /{organization}/_apis/work/processdefinitions/{processId}/workitemtypes/{witRefNameForBehaviors}/behaviors/{behaviorRefName} | 
[**getBehaviorsForWorkItemType**](WorkItemTypesApi.md#getBehaviorsForWorkItemType) | **GET** /{organization}/_apis/work/processdefinitions/{processId}/workitemtypes/{witRefNameForBehaviors}/behaviors | 
[**getWorkItemType**](WorkItemTypesApi.md#getWorkItemType) | **GET** /{organization}/_apis/work/processdefinitions/{processId}/workitemtypes/{witRefName} | 
[**getWorkItemTypes**](WorkItemTypesApi.md#getWorkItemTypes) | **GET** /{organization}/_apis/work/processdefinitions/{processId}/workitemtypes | 
[**removeBehaviorFromWorkItemType**](WorkItemTypesApi.md#removeBehaviorFromWorkItemType) | **DELETE** /{organization}/_apis/work/processdefinitions/{processId}/workitemtypes/{witRefNameForBehaviors}/behaviors/{behaviorRefName} | 
[**updateBehaviorToWorkItemType**](WorkItemTypesApi.md#updateBehaviorToWorkItemType) | **PATCH** /{organization}/_apis/work/processdefinitions/{processId}/workitemtypes/{witRefNameForBehaviors}/behaviors | 
[**updateWorkItemType**](WorkItemTypesApi.md#updateWorkItemType) | **PATCH** /{organization}/_apis/work/processdefinitions/{processId}/workitemtypes/{witRefName} | 


# **add**
> \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemTypeBehavior add($organization, $body, $processId, $witRefNameForBehaviors, $apiVersion)



Adds a behavior to the work item type of the process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Api\WorkItemTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemTypeBehavior(); // \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemTypeBehavior | 
$processId = "processId_example"; // string | The ID of the process
$witRefNameForBehaviors = "witRefNameForBehaviors_example"; // string | Work item type reference name for the behavior
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '4.1-preview.1' to use this version of the api.

try {
    $result = $apiInstance->add($organization, $body, $processId, $witRefNameForBehaviors, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkItemTypesApi->add: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemTypeBehavior**](../Model/WorkItemTypeBehavior.md)|  |
 **processId** | [**string**](../Model/.md)| The ID of the process |
 **witRefNameForBehaviors** | **string**| Work item type reference name for the behavior |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;4.1-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemTypeBehavior**](../Model/WorkItemTypeBehavior.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **create**
> \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemTypeModel create($organization, $body, $processId, $apiVersion)



Creates a work item type in the process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Api\WorkItemTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemTypeModel(); // \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemTypeModel | 
$processId = "processId_example"; // string | The ID of the process
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '4.1-preview.1' to use this version of the api.

try {
    $result = $apiInstance->create($organization, $body, $processId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkItemTypesApi->create: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemTypeModel**](../Model/WorkItemTypeModel.md)|  |
 **processId** | [**string**](../Model/.md)| The ID of the process |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;4.1-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemTypeModel**](../Model/WorkItemTypeModel.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delete**
> delete($organization, $processId, $witRefName, $apiVersion)



Removes a work itewm type in the process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Api\WorkItemTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$processId = "processId_example"; // string | The ID of the process
$witRefName = "witRefName_example"; // string | The reference name of the work item type
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '4.1-preview.1' to use this version of the api.

try {
    $apiInstance->delete($organization, $processId, $witRefName, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling WorkItemTypesApi->delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **processId** | [**string**](../Model/.md)| The ID of the process |
 **witRefName** | **string**| The reference name of the work item type |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;4.1-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBehaviorForWorkItemType**
> \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemTypeBehavior getBehaviorForWorkItemType($organization, $processId, $witRefNameForBehaviors, $behaviorRefName, $apiVersion)



Returns a behavior for the work item type of the process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Api\WorkItemTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$processId = "processId_example"; // string | The ID of the process
$witRefNameForBehaviors = "witRefNameForBehaviors_example"; // string | Work item type reference name for the behavior
$behaviorRefName = "behaviorRefName_example"; // string | The reference name of the behavior
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '4.1-preview.1' to use this version of the api.

try {
    $result = $apiInstance->getBehaviorForWorkItemType($organization, $processId, $witRefNameForBehaviors, $behaviorRefName, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkItemTypesApi->getBehaviorForWorkItemType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **processId** | [**string**](../Model/.md)| The ID of the process |
 **witRefNameForBehaviors** | **string**| Work item type reference name for the behavior |
 **behaviorRefName** | **string**| The reference name of the behavior |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;4.1-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemTypeBehavior**](../Model/WorkItemTypeBehavior.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBehaviorsForWorkItemType**
> \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemTypeBehavior[] getBehaviorsForWorkItemType($organization, $processId, $witRefNameForBehaviors, $apiVersion)



Returns a list of all behaviors for the work item type of the process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Api\WorkItemTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$processId = "processId_example"; // string | The ID of the process
$witRefNameForBehaviors = "witRefNameForBehaviors_example"; // string | Work item type reference name for the behavior
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '4.1-preview.1' to use this version of the api.

try {
    $result = $apiInstance->getBehaviorsForWorkItemType($organization, $processId, $witRefNameForBehaviors, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkItemTypesApi->getBehaviorsForWorkItemType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **processId** | [**string**](../Model/.md)| The ID of the process |
 **witRefNameForBehaviors** | **string**| Work item type reference name for the behavior |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;4.1-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemTypeBehavior[]**](../Model/WorkItemTypeBehavior.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWorkItemType**
> \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemTypeModel getWorkItemType($organization, $processId, $witRefName, $apiVersion, $expand)



Returns a work item type of the process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Api\WorkItemTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$processId = "processId_example"; // string | The ID of the process
$witRefName = "witRefName_example"; // string | The reference name of the work item type
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '4.1-preview.1' to use this version of the api.
$expand = "expand_example"; // string | 

try {
    $result = $apiInstance->getWorkItemType($organization, $processId, $witRefName, $apiVersion, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkItemTypesApi->getWorkItemType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **processId** | [**string**](../Model/.md)| The ID of the process |
 **witRefName** | **string**| The reference name of the work item type |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;4.1-preview.1&#39; to use this version of the api. |
 **expand** | **string**|  | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemTypeModel**](../Model/WorkItemTypeModel.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWorkItemTypes**
> \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemTypeModel[] getWorkItemTypes($organization, $processId, $apiVersion, $expand)



Returns a list of all work item types in the process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Api\WorkItemTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$processId = "processId_example"; // string | The ID of the process
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '4.1-preview.1' to use this version of the api.
$expand = "expand_example"; // string | 

try {
    $result = $apiInstance->getWorkItemTypes($organization, $processId, $apiVersion, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkItemTypesApi->getWorkItemTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **processId** | [**string**](../Model/.md)| The ID of the process |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;4.1-preview.1&#39; to use this version of the api. |
 **expand** | **string**|  | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemTypeModel[]**](../Model/WorkItemTypeModel.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeBehaviorFromWorkItemType**
> removeBehaviorFromWorkItemType($organization, $processId, $witRefNameForBehaviors, $behaviorRefName, $apiVersion)



Removes a behavior for the work item type of the process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Api\WorkItemTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$processId = "processId_example"; // string | The ID of the process
$witRefNameForBehaviors = "witRefNameForBehaviors_example"; // string | Work item type reference name for the behavior
$behaviorRefName = "behaviorRefName_example"; // string | The reference name of the behavior
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '4.1-preview.1' to use this version of the api.

try {
    $apiInstance->removeBehaviorFromWorkItemType($organization, $processId, $witRefNameForBehaviors, $behaviorRefName, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling WorkItemTypesApi->removeBehaviorFromWorkItemType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **processId** | [**string**](../Model/.md)| The ID of the process |
 **witRefNameForBehaviors** | **string**| Work item type reference name for the behavior |
 **behaviorRefName** | **string**| The reference name of the behavior |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;4.1-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBehaviorToWorkItemType**
> \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemTypeBehavior updateBehaviorToWorkItemType($organization, $body, $processId, $witRefNameForBehaviors, $apiVersion)



Updates a behavior for the work item type of the process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Api\WorkItemTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemTypeBehavior(); // \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemTypeBehavior | 
$processId = "processId_example"; // string | The ID of the process
$witRefNameForBehaviors = "witRefNameForBehaviors_example"; // string | Work item type reference name for the behavior
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '4.1-preview.1' to use this version of the api.

try {
    $result = $apiInstance->updateBehaviorToWorkItemType($organization, $body, $processId, $witRefNameForBehaviors, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkItemTypesApi->updateBehaviorToWorkItemType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemTypeBehavior**](../Model/WorkItemTypeBehavior.md)|  |
 **processId** | [**string**](../Model/.md)| The ID of the process |
 **witRefNameForBehaviors** | **string**| Work item type reference name for the behavior |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;4.1-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemTypeBehavior**](../Model/WorkItemTypeBehavior.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateWorkItemType**
> \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemTypeModel updateWorkItemType($organization, $body, $processId, $witRefName, $apiVersion)



Updates a work item type of the process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Api\WorkItemTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemTypeUpdateModel(); // \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemTypeUpdateModel | 
$processId = "processId_example"; // string | The ID of the process
$witRefName = "witRefName_example"; // string | The reference name of the work item type
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '4.1-preview.1' to use this version of the api.

try {
    $result = $apiInstance->updateWorkItemType($organization, $body, $processId, $witRefName, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkItemTypesApi->updateWorkItemType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemTypeUpdateModel**](../Model/WorkItemTypeUpdateModel.md)|  |
 **processId** | [**string**](../Model/.md)| The ID of the process |
 **witRefName** | **string**| The reference name of the work item type |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;4.1-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\WorkItemTypeModel**](../Model/WorkItemTypeModel.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

