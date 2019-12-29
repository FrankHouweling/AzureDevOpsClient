# FrankHouweling\AzureDevOpsClient\Processes\WorkItemTypesBehaviorsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**workItemTypesBehaviorsAdd**](WorkItemTypesBehaviorsApi.md#workItemTypesBehaviorsAdd) | **POST** /{organization}/_apis/work/processes/{processId}/workitemtypesbehaviors/{witRefNameForBehaviors}/behaviors | 
[**workItemTypesBehaviorsGet**](WorkItemTypesBehaviorsApi.md#workItemTypesBehaviorsGet) | **GET** /{organization}/_apis/work/processes/{processId}/workitemtypesbehaviors/{witRefNameForBehaviors}/behaviors/{behaviorRefName} | 
[**workItemTypesBehaviorsList**](WorkItemTypesBehaviorsApi.md#workItemTypesBehaviorsList) | **GET** /{organization}/_apis/work/processes/{processId}/workitemtypesbehaviors/{witRefNameForBehaviors}/behaviors | 
[**workItemTypesBehaviorsRemoveBehaviorFromWorkItemType**](WorkItemTypesBehaviorsApi.md#workItemTypesBehaviorsRemoveBehaviorFromWorkItemType) | **DELETE** /{organization}/_apis/work/processes/{processId}/workitemtypesbehaviors/{witRefNameForBehaviors}/behaviors/{behaviorRefName} | 
[**workItemTypesBehaviorsUpdate**](WorkItemTypesBehaviorsApi.md#workItemTypesBehaviorsUpdate) | **PATCH** /{organization}/_apis/work/processes/{processId}/workitemtypesbehaviors/{witRefNameForBehaviors}/behaviors | 


# **workItemTypesBehaviorsAdd**
> \FrankHouweling\AzureDevOpsClient\Processes\Model\WorkItemTypeBehavior workItemTypesBehaviorsAdd($organization, $body, $processId, $witRefNameForBehaviors, $apiVersion)



Adds a behavior to the work item type of the process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Processes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Processes\Api\WorkItemTypesBehaviorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Processes\Model\WorkItemTypeBehavior(); // \FrankHouweling\AzureDevOpsClient\Processes\Model\WorkItemTypeBehavior | 
$processId = "processId_example"; // string | The ID of the process
$witRefNameForBehaviors = "witRefNameForBehaviors_example"; // string | Work item type reference name for the behavior
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->workItemTypesBehaviorsAdd($organization, $body, $processId, $witRefNameForBehaviors, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkItemTypesBehaviorsApi->workItemTypesBehaviorsAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Processes\Model\WorkItemTypeBehavior**](../Model/WorkItemTypeBehavior.md)|  |
 **processId** | [**string**](../Model/.md)| The ID of the process |
 **witRefNameForBehaviors** | **string**| Work item type reference name for the behavior |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Processes\Model\WorkItemTypeBehavior**](../Model/WorkItemTypeBehavior.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **workItemTypesBehaviorsGet**
> \FrankHouweling\AzureDevOpsClient\Processes\Model\WorkItemTypeBehavior workItemTypesBehaviorsGet($organization, $processId, $witRefNameForBehaviors, $behaviorRefName, $apiVersion)



Returns a behavior for the work item type of the process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Processes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Processes\Api\WorkItemTypesBehaviorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$processId = "processId_example"; // string | The ID of the process
$witRefNameForBehaviors = "witRefNameForBehaviors_example"; // string | Work item type reference name for the behavior
$behaviorRefName = "behaviorRefName_example"; // string | The reference name of the behavior
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->workItemTypesBehaviorsGet($organization, $processId, $witRefNameForBehaviors, $behaviorRefName, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkItemTypesBehaviorsApi->workItemTypesBehaviorsGet: ', $e->getMessage(), PHP_EOL;
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
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Processes\Model\WorkItemTypeBehavior**](../Model/WorkItemTypeBehavior.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **workItemTypesBehaviorsList**
> \FrankHouweling\AzureDevOpsClient\Processes\Model\WorkItemTypeBehavior[] workItemTypesBehaviorsList($organization, $processId, $witRefNameForBehaviors, $apiVersion)



Returns a list of all behaviors for the work item type of the process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Processes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Processes\Api\WorkItemTypesBehaviorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$processId = "processId_example"; // string | The ID of the process
$witRefNameForBehaviors = "witRefNameForBehaviors_example"; // string | Work item type reference name for the behavior
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->workItemTypesBehaviorsList($organization, $processId, $witRefNameForBehaviors, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkItemTypesBehaviorsApi->workItemTypesBehaviorsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **processId** | [**string**](../Model/.md)| The ID of the process |
 **witRefNameForBehaviors** | **string**| Work item type reference name for the behavior |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Processes\Model\WorkItemTypeBehavior[]**](../Model/WorkItemTypeBehavior.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **workItemTypesBehaviorsRemoveBehaviorFromWorkItemType**
> workItemTypesBehaviorsRemoveBehaviorFromWorkItemType($organization, $processId, $witRefNameForBehaviors, $behaviorRefName, $apiVersion)



Removes a behavior for the work item type of the process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Processes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Processes\Api\WorkItemTypesBehaviorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$processId = "processId_example"; // string | The ID of the process
$witRefNameForBehaviors = "witRefNameForBehaviors_example"; // string | Work item type reference name for the behavior
$behaviorRefName = "behaviorRefName_example"; // string | The reference name of the behavior
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->workItemTypesBehaviorsRemoveBehaviorFromWorkItemType($organization, $processId, $witRefNameForBehaviors, $behaviorRefName, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling WorkItemTypesBehaviorsApi->workItemTypesBehaviorsRemoveBehaviorFromWorkItemType: ', $e->getMessage(), PHP_EOL;
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
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **workItemTypesBehaviorsUpdate**
> \FrankHouweling\AzureDevOpsClient\Processes\Model\WorkItemTypeBehavior workItemTypesBehaviorsUpdate($organization, $body, $processId, $witRefNameForBehaviors, $apiVersion)



Updates a behavior for the work item type of the process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Processes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Processes\Api\WorkItemTypesBehaviorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Processes\Model\WorkItemTypeBehavior(); // \FrankHouweling\AzureDevOpsClient\Processes\Model\WorkItemTypeBehavior | 
$processId = "processId_example"; // string | The ID of the process
$witRefNameForBehaviors = "witRefNameForBehaviors_example"; // string | Work item type reference name for the behavior
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->workItemTypesBehaviorsUpdate($organization, $body, $processId, $witRefNameForBehaviors, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkItemTypesBehaviorsApi->workItemTypesBehaviorsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Processes\Model\WorkItemTypeBehavior**](../Model/WorkItemTypeBehavior.md)|  |
 **processId** | [**string**](../Model/.md)| The ID of the process |
 **witRefNameForBehaviors** | **string**| Work item type reference name for the behavior |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Processes\Model\WorkItemTypeBehavior**](../Model/WorkItemTypeBehavior.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

