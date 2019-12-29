# FrankHouweling\AzureDevOpsClient\Processes\RulesApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**rulesAdd**](RulesApi.md#rulesAdd) | **POST** /{organization}/_apis/work/processes/{processId}/workItemTypes/{witRefName}/rules | 
[**rulesDelete**](RulesApi.md#rulesDelete) | **DELETE** /{organization}/_apis/work/processes/{processId}/workItemTypes/{witRefName}/rules/{ruleId} | 
[**rulesGet**](RulesApi.md#rulesGet) | **GET** /{organization}/_apis/work/processes/{processId}/workItemTypes/{witRefName}/rules/{ruleId} | 
[**rulesList**](RulesApi.md#rulesList) | **GET** /{organization}/_apis/work/processes/{processId}/workItemTypes/{witRefName}/rules | 
[**rulesUpdate**](RulesApi.md#rulesUpdate) | **PUT** /{organization}/_apis/work/processes/{processId}/workItemTypes/{witRefName}/rules/{ruleId} | 


# **rulesAdd**
> \FrankHouweling\AzureDevOpsClient\Processes\Model\ProcessRule rulesAdd($organization, $body, $processId, $witRefName, $apiVersion)



Adds a rule to work item type in the process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Processes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Processes\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Processes\Model\CreateProcessRuleRequest(); // \FrankHouweling\AzureDevOpsClient\Processes\Model\CreateProcessRuleRequest | 
$processId = "processId_example"; // string | The ID of the process
$witRefName = "witRefName_example"; // string | The reference name of the work item type
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $result = $apiInstance->rulesAdd($organization, $body, $processId, $witRefName, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Processes\Model\CreateProcessRuleRequest**](../Model/CreateProcessRuleRequest.md)|  |
 **processId** | [**string**](../Model/.md)| The ID of the process |
 **witRefName** | **string**| The reference name of the work item type |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Processes\Model\ProcessRule**](../Model/ProcessRule.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rulesDelete**
> rulesDelete($organization, $processId, $witRefName, $ruleId, $apiVersion)



Removes a rule from the work item type in the process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Processes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Processes\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$processId = "processId_example"; // string | The ID of the process
$witRefName = "witRefName_example"; // string | The reference name of the work item type
$ruleId = "ruleId_example"; // string | The ID of the rule
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $apiInstance->rulesDelete($organization, $processId, $witRefName, $ruleId, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **processId** | [**string**](../Model/.md)| The ID of the process |
 **witRefName** | **string**| The reference name of the work item type |
 **ruleId** | [**string**](../Model/.md)| The ID of the rule |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rulesGet**
> \FrankHouweling\AzureDevOpsClient\Processes\Model\ProcessRule rulesGet($organization, $processId, $witRefName, $ruleId, $apiVersion)



Returns a single rule in the work item type of the process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Processes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Processes\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$processId = "processId_example"; // string | The ID of the process
$witRefName = "witRefName_example"; // string | The reference name of the work item type
$ruleId = "ruleId_example"; // string | The ID of the rule
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $result = $apiInstance->rulesGet($organization, $processId, $witRefName, $ruleId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **processId** | [**string**](../Model/.md)| The ID of the process |
 **witRefName** | **string**| The reference name of the work item type |
 **ruleId** | [**string**](../Model/.md)| The ID of the rule |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Processes\Model\ProcessRule**](../Model/ProcessRule.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rulesList**
> \FrankHouweling\AzureDevOpsClient\Processes\Model\ProcessRule[] rulesList($organization, $processId, $witRefName, $apiVersion)



Returns a list of all rules in the work item type of the process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Processes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Processes\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$processId = "processId_example"; // string | The ID of the process
$witRefName = "witRefName_example"; // string | The reference name of the work item type
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $result = $apiInstance->rulesList($organization, $processId, $witRefName, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **processId** | [**string**](../Model/.md)| The ID of the process |
 **witRefName** | **string**| The reference name of the work item type |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Processes\Model\ProcessRule[]**](../Model/ProcessRule.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rulesUpdate**
> \FrankHouweling\AzureDevOpsClient\Processes\Model\ProcessRule rulesUpdate($organization, $body, $processId, $witRefName, $ruleId, $apiVersion)



Updates a rule in the work item type of the process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Processes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Processes\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Processes\Model\UpdateProcessRuleRequest(); // \FrankHouweling\AzureDevOpsClient\Processes\Model\UpdateProcessRuleRequest | 
$processId = "processId_example"; // string | The ID of the process
$witRefName = "witRefName_example"; // string | The reference name of the work item type
$ruleId = "ruleId_example"; // string | The ID of the rule
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $result = $apiInstance->rulesUpdate($organization, $body, $processId, $witRefName, $ruleId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Processes\Model\UpdateProcessRuleRequest**](../Model/UpdateProcessRuleRequest.md)|  |
 **processId** | [**string**](../Model/.md)| The ID of the process |
 **witRefName** | **string**| The reference name of the work item type |
 **ruleId** | [**string**](../Model/.md)| The ID of the rule |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Processes\Model\ProcessRule**](../Model/ProcessRule.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

