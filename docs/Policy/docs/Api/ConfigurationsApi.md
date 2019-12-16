# AzureDevOpsClient\Policy\ConfigurationsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**configurationsCreate**](ConfigurationsApi.md#configurationsCreate) | **POST** /{organization}/{project}/_apis/policy/configurations/{configurationId} | 
[**configurationsDelete**](ConfigurationsApi.md#configurationsDelete) | **DELETE** /{organization}/{project}/_apis/policy/configurations/{configurationId} | 
[**configurationsGet**](ConfigurationsApi.md#configurationsGet) | **GET** /{organization}/{project}/_apis/policy/configurations/{configurationId} | 
[**configurationsList**](ConfigurationsApi.md#configurationsList) | **GET** /{organization}/{project}/_apis/policy/configurations | 
[**configurationsUpdate**](ConfigurationsApi.md#configurationsUpdate) | **PUT** /{organization}/{project}/_apis/policy/configurations/{configurationId} | 


# **configurationsCreate**
> \AzureDevOpsClient\Policy\AzureDevOpsClient\Policy\Model\PolicyConfiguration configurationsCreate($organization, $body, $project, $configurationId, $apiVersion)



Create a policy configuration of a given policy type.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Policy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Policy\Api\ConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Policy\AzureDevOpsClient\Policy\Model\PolicyConfiguration(); // \AzureDevOpsClient\Policy\AzureDevOpsClient\Policy\Model\PolicyConfiguration | The policy configuration to create.
$project = "project_example"; // string | Project ID or project name
$configurationId = 56; // int | 
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->configurationsCreate($organization, $body, $project, $configurationId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationsApi->configurationsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Policy\AzureDevOpsClient\Policy\Model\PolicyConfiguration**](../Model/PolicyConfiguration.md)| The policy configuration to create. |
 **project** | **string**| Project ID or project name |
 **configurationId** | **int**|  |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Policy\AzureDevOpsClient\Policy\Model\PolicyConfiguration**](../Model/PolicyConfiguration.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationsDelete**
> configurationsDelete($organization, $project, $configurationId, $apiVersion)



Delete a policy configuration by its ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Policy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Policy\Api\ConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$configurationId = 56; // int | ID of the policy configuration to delete.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->configurationsDelete($organization, $project, $configurationId, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationsApi->configurationsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **configurationId** | **int**| ID of the policy configuration to delete. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationsGet**
> \AzureDevOpsClient\Policy\AzureDevOpsClient\Policy\Model\PolicyConfiguration configurationsGet($organization, $project, $configurationId, $apiVersion)



Get a policy configuration by its ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Policy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Policy\Api\ConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$configurationId = 56; // int | ID of the policy configuration
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->configurationsGet($organization, $project, $configurationId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationsApi->configurationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **configurationId** | **int**| ID of the policy configuration |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Policy\AzureDevOpsClient\Policy\Model\PolicyConfiguration**](../Model/PolicyConfiguration.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationsList**
> \AzureDevOpsClient\Policy\AzureDevOpsClient\Policy\Model\PolicyConfiguration[] configurationsList($organization, $project, $apiVersion, $scope, $top, $continuationToken, $policyType)



Get a list of policy configurations in a project.  The 'scope' parameter for this API should not be used, except for legacy compatability reasons. It returns specifically scoped policies and does not support heirarchical nesting. Instead, use the /_apis/git/policy/configurations API, which provides first class scope filtering support.  The optional `policyType` parameter can be used to filter the set of policies returned from this method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Policy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Policy\Api\ConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$scope = "scope_example"; // string | [Provided for legacy reasons] The scope on which a subset of policies is defined.
$top = 56; // int | Maximum number of policies to return.
$continuationToken = "continuationToken_example"; // string | The continuation token used for pagination.
$policyType = "policyType_example"; // string | Filter returned policies to only this type

try {
    $result = $apiInstance->configurationsList($organization, $project, $apiVersion, $scope, $top, $continuationToken, $policyType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationsApi->configurationsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **scope** | **string**| [Provided for legacy reasons] The scope on which a subset of policies is defined. | [optional]
 **top** | **int**| Maximum number of policies to return. | [optional]
 **continuationToken** | **string**| The continuation token used for pagination. | [optional]
 **policyType** | [**string**](../Model/.md)| Filter returned policies to only this type | [optional]

### Return type

[**\AzureDevOpsClient\Policy\AzureDevOpsClient\Policy\Model\PolicyConfiguration[]**](../Model/PolicyConfiguration.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationsUpdate**
> \AzureDevOpsClient\Policy\AzureDevOpsClient\Policy\Model\PolicyConfiguration configurationsUpdate($organization, $body, $project, $configurationId, $apiVersion)



Update a policy configuration by its ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Policy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Policy\Api\ConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Policy\AzureDevOpsClient\Policy\Model\PolicyConfiguration(); // \AzureDevOpsClient\Policy\AzureDevOpsClient\Policy\Model\PolicyConfiguration | The policy configuration to update.
$project = "project_example"; // string | Project ID or project name
$configurationId = 56; // int | ID of the existing policy configuration to be updated.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->configurationsUpdate($organization, $body, $project, $configurationId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationsApi->configurationsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Policy\AzureDevOpsClient\Policy\Model\PolicyConfiguration**](../Model/PolicyConfiguration.md)| The policy configuration to update. |
 **project** | **string**| Project ID or project name |
 **configurationId** | **int**| ID of the existing policy configuration to be updated. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Policy\AzureDevOpsClient\Policy\Model\PolicyConfiguration**](../Model/PolicyConfiguration.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

