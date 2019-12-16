# AzureDevOpsClient\TestPlan\ConfigurationsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**configurationsCreate**](ConfigurationsApi.md#configurationsCreate) | **POST** /{organization}/{project}/_apis/testplan/configurations | 
[**configurationsDelete**](ConfigurationsApi.md#configurationsDelete) | **DELETE** /{organization}/{project}/_apis/testplan/configurations | 
[**configurationsGet**](ConfigurationsApi.md#configurationsGet) | **GET** /{organization}/{project}/_apis/testplan/configurations/{testConfigurationId} | 
[**configurationsList**](ConfigurationsApi.md#configurationsList) | **GET** /{organization}/{project}/_apis/testplan/configurations | 
[**configurationsUpdate**](ConfigurationsApi.md#configurationsUpdate) | **PATCH** /{organization}/{project}/_apis/testplan/configurations | 


# **configurationsCreate**
> \AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TestConfiguration configurationsCreate($organization, $body, $project, $apiVersion)



Create a test configuration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\TestPlan\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\TestPlan\Api\ConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TestConfigurationCreateUpdateParameters(); // \AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TestConfigurationCreateUpdateParameters | TestConfigurationCreateUpdateParameters
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->configurationsCreate($organization, $body, $project, $apiVersion);
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
 **body** | [**\AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TestConfigurationCreateUpdateParameters**](../Model/TestConfigurationCreateUpdateParameters.md)| TestConfigurationCreateUpdateParameters |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TestConfiguration**](../Model/TestConfiguration.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationsDelete**
> configurationsDelete($organization, $project, $testConfiguartionId, $apiVersion)



Delete a test configuration by its ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\TestPlan\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\TestPlan\Api\ConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$testConfiguartionId = 56; // int | ID of the test configuration to delete.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->configurationsDelete($organization, $project, $testConfiguartionId, $apiVersion);
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
 **testConfiguartionId** | **int**| ID of the test configuration to delete. |
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
> \AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TestConfiguration configurationsGet($organization, $project, $testConfigurationId, $apiVersion)



Get a test configuration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\TestPlan\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\TestPlan\Api\ConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$testConfigurationId = 56; // int | ID of the test configuration to get.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->configurationsGet($organization, $project, $testConfigurationId, $apiVersion);
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
 **testConfigurationId** | **int**| ID of the test configuration to get. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TestConfiguration**](../Model/TestConfiguration.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationsList**
> \AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TestConfiguration[] configurationsList($organization, $project, $apiVersion, $continuationToken)



Get a list of test configurations.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\TestPlan\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\TestPlan\Api\ConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$continuationToken = "continuationToken_example"; // string | If the list of configurations returned is not complete, a continuation token to query next batch of configurations is included in the response header as \"x-ms-continuationtoken\". Omit this parameter to get the first batch of test configurations.

try {
    $result = $apiInstance->configurationsList($organization, $project, $apiVersion, $continuationToken);
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
 **continuationToken** | **string**| If the list of configurations returned is not complete, a continuation token to query next batch of configurations is included in the response header as \&quot;x-ms-continuationtoken\&quot;. Omit this parameter to get the first batch of test configurations. | [optional]

### Return type

[**\AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TestConfiguration[]**](../Model/TestConfiguration.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurationsUpdate**
> \AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TestConfiguration configurationsUpdate($organization, $body, $project, $testConfiguartionId, $apiVersion)



Update a test configuration by its ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\TestPlan\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\TestPlan\Api\ConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TestConfigurationCreateUpdateParameters(); // \AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TestConfigurationCreateUpdateParameters | TestConfigurationCreateUpdateParameters
$project = "project_example"; // string | Project ID or project name
$testConfiguartionId = 56; // int | ID of the test configuration to update.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->configurationsUpdate($organization, $body, $project, $testConfiguartionId, $apiVersion);
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
 **body** | [**\AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TestConfigurationCreateUpdateParameters**](../Model/TestConfigurationCreateUpdateParameters.md)| TestConfigurationCreateUpdateParameters |
 **project** | **string**| Project ID or project name |
 **testConfiguartionId** | **int**| ID of the test configuration to update. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\TestPlan\AzureDevOpsClient\TestPlan\Model\TestConfiguration**](../Model/TestConfiguration.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

