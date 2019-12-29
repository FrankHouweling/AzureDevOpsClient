# FrankHouweling\AzureDevOpsClient\TestPlan\VariablesApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**variablesCreate**](VariablesApi.md#variablesCreate) | **POST** /{organization}/{project}/_apis/testplan/variables | 
[**variablesDelete**](VariablesApi.md#variablesDelete) | **DELETE** /{organization}/{project}/_apis/testplan/variables/{testVariableId} | 
[**variablesGet**](VariablesApi.md#variablesGet) | **GET** /{organization}/{project}/_apis/testplan/variables/{testVariableId} | 
[**variablesList**](VariablesApi.md#variablesList) | **GET** /{organization}/{project}/_apis/testplan/variables | 
[**variablesUpdate**](VariablesApi.md#variablesUpdate) | **PATCH** /{organization}/{project}/_apis/testplan/variables/{testVariableId} | 


# **variablesCreate**
> \FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestVariable variablesCreate($organization, $body, $project, $apiVersion)



Create a test variable.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\TestPlan\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\TestPlan\Api\VariablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestVariableCreateUpdateParameters(); // \FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestVariableCreateUpdateParameters | TestVariableCreateUpdateParameters
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->variablesCreate($organization, $body, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariablesApi->variablesCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestVariableCreateUpdateParameters**](../Model/TestVariableCreateUpdateParameters.md)| TestVariableCreateUpdateParameters |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestVariable**](../Model/TestVariable.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **variablesDelete**
> variablesDelete($organization, $project, $testVariableId, $apiVersion)



Delete a test variable by its ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\TestPlan\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\TestPlan\Api\VariablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$testVariableId = 56; // int | ID of the test variable to delete.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->variablesDelete($organization, $project, $testVariableId, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling VariablesApi->variablesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **testVariableId** | **int**| ID of the test variable to delete. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **variablesGet**
> \FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestVariable variablesGet($organization, $project, $testVariableId, $apiVersion)



Get a test variable by its ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\TestPlan\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\TestPlan\Api\VariablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$testVariableId = 56; // int | ID of the test variable to get.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->variablesGet($organization, $project, $testVariableId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariablesApi->variablesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **testVariableId** | **int**| ID of the test variable to get. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestVariable**](../Model/TestVariable.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **variablesList**
> \FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestVariable[] variablesList($organization, $project, $apiVersion, $continuationToken)



Get a list of test variables.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\TestPlan\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\TestPlan\Api\VariablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$continuationToken = "continuationToken_example"; // string | If the list of variables returned is not complete, a continuation token to query next batch of variables is included in the response header as \"x-ms-continuationtoken\". Omit this parameter to get the first batch of test variables.

try {
    $result = $apiInstance->variablesList($organization, $project, $apiVersion, $continuationToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariablesApi->variablesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **continuationToken** | **string**| If the list of variables returned is not complete, a continuation token to query next batch of variables is included in the response header as \&quot;x-ms-continuationtoken\&quot;. Omit this parameter to get the first batch of test variables. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestVariable[]**](../Model/TestVariable.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **variablesUpdate**
> \FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestVariable variablesUpdate($organization, $body, $project, $testVariableId, $apiVersion)



Update a test variable by its ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\TestPlan\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\TestPlan\Api\VariablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestVariableCreateUpdateParameters(); // \FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestVariableCreateUpdateParameters | TestVariableCreateUpdateParameters
$project = "project_example"; // string | Project ID or project name
$testVariableId = 56; // int | ID of the test variable to update.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->variablesUpdate($organization, $body, $project, $testVariableId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariablesApi->variablesUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestVariableCreateUpdateParameters**](../Model/TestVariableCreateUpdateParameters.md)| TestVariableCreateUpdateParameters |
 **project** | **string**| Project ID or project name |
 **testVariableId** | **int**| ID of the test variable to update. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\TestPlan\Model\TestVariable**](../Model/TestVariable.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

