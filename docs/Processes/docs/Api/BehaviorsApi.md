# FrankHouweling\AzureDevOpsClient\Processes\BehaviorsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**behaviorsCreate**](BehaviorsApi.md#behaviorsCreate) | **POST** /{organization}/_apis/work/processes/{processId}/behaviors | 
[**behaviorsDelete**](BehaviorsApi.md#behaviorsDelete) | **DELETE** /{organization}/_apis/work/processes/{processId}/behaviors/{behaviorRefName} | 
[**behaviorsGet**](BehaviorsApi.md#behaviorsGet) | **GET** /{organization}/_apis/work/processes/{processId}/behaviors/{behaviorRefName} | 
[**behaviorsList**](BehaviorsApi.md#behaviorsList) | **GET** /{organization}/_apis/work/processes/{processId}/behaviors | 
[**behaviorsUpdate**](BehaviorsApi.md#behaviorsUpdate) | **PUT** /{organization}/_apis/work/processes/{processId}/behaviors/{behaviorRefName} | 


# **behaviorsCreate**
> \FrankHouweling\AzureDevOpsClient\Processes\Model\ProcessBehavior behaviorsCreate($organization, $body, $processId, $apiVersion)



Creates a single behavior in the given process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Processes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Processes\Api\BehaviorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Processes\Model\ProcessBehaviorCreateRequest(); // \FrankHouweling\AzureDevOpsClient\Processes\Model\ProcessBehaviorCreateRequest | 
$processId = "processId_example"; // string | The ID of the process
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $result = $apiInstance->behaviorsCreate($organization, $body, $processId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BehaviorsApi->behaviorsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Processes\Model\ProcessBehaviorCreateRequest**](../Model/ProcessBehaviorCreateRequest.md)|  |
 **processId** | [**string**](../Model/.md)| The ID of the process |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Processes\Model\ProcessBehavior**](../Model/ProcessBehavior.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **behaviorsDelete**
> behaviorsDelete($organization, $processId, $behaviorRefName, $apiVersion)



Removes a behavior in the process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Processes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Processes\Api\BehaviorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$processId = "processId_example"; // string | The ID of the process
$behaviorRefName = "behaviorRefName_example"; // string | The reference name of the behavior
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $apiInstance->behaviorsDelete($organization, $processId, $behaviorRefName, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling BehaviorsApi->behaviorsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **processId** | [**string**](../Model/.md)| The ID of the process |
 **behaviorRefName** | **string**| The reference name of the behavior |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **behaviorsGet**
> \FrankHouweling\AzureDevOpsClient\Processes\Model\ProcessBehavior behaviorsGet($organization, $processId, $behaviorRefName, $apiVersion, $expand)



Returns a behavior of the process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Processes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Processes\Api\BehaviorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$processId = "processId_example"; // string | The ID of the process
$behaviorRefName = "behaviorRefName_example"; // string | The reference name of the behavior
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.
$expand = "expand_example"; // string | 

try {
    $result = $apiInstance->behaviorsGet($organization, $processId, $behaviorRefName, $apiVersion, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BehaviorsApi->behaviorsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **processId** | [**string**](../Model/.md)| The ID of the process |
 **behaviorRefName** | **string**| The reference name of the behavior |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |
 **expand** | **string**|  | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Processes\Model\ProcessBehavior**](../Model/ProcessBehavior.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **behaviorsList**
> \FrankHouweling\AzureDevOpsClient\Processes\Model\ProcessBehavior[] behaviorsList($organization, $processId, $apiVersion, $expand)



Returns a list of all behaviors in the process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Processes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Processes\Api\BehaviorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$processId = "processId_example"; // string | The ID of the process
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.
$expand = "expand_example"; // string | 

try {
    $result = $apiInstance->behaviorsList($organization, $processId, $apiVersion, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BehaviorsApi->behaviorsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **processId** | [**string**](../Model/.md)| The ID of the process |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |
 **expand** | **string**|  | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Processes\Model\ProcessBehavior[]**](../Model/ProcessBehavior.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **behaviorsUpdate**
> \FrankHouweling\AzureDevOpsClient\Processes\Model\ProcessBehavior behaviorsUpdate($organization, $body, $processId, $behaviorRefName, $apiVersion)



Replaces a behavior in the process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Processes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Processes\Api\BehaviorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Processes\Model\ProcessBehaviorUpdateRequest(); // \FrankHouweling\AzureDevOpsClient\Processes\Model\ProcessBehaviorUpdateRequest | 
$processId = "processId_example"; // string | The ID of the process
$behaviorRefName = "behaviorRefName_example"; // string | The reference name of the behavior
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $result = $apiInstance->behaviorsUpdate($organization, $body, $processId, $behaviorRefName, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BehaviorsApi->behaviorsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Processes\Model\ProcessBehaviorUpdateRequest**](../Model/ProcessBehaviorUpdateRequest.md)|  |
 **processId** | [**string**](../Model/.md)| The ID of the process |
 **behaviorRefName** | **string**| The reference name of the behavior |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Processes\Model\ProcessBehavior**](../Model/ProcessBehavior.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

