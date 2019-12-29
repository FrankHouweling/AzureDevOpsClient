# FrankHouweling\AzureDevOpsClient\ProcessDefinitions\ListsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**callList**](ListsApi.md#callList) | **GET** /{organization}/_apis/work/processdefinitions/lists | 
[**create**](ListsApi.md#create) | **POST** /{organization}/_apis/work/processdefinitions/lists | 
[**delete**](ListsApi.md#delete) | **DELETE** /{organization}/_apis/work/processdefinitions/lists/{listId} | 
[**get**](ListsApi.md#get) | **GET** /{organization}/_apis/work/processdefinitions/lists/{listId} | 
[**update**](ListsApi.md#update) | **PUT** /{organization}/_apis/work/processdefinitions/lists/{listId} | 


# **callList**
> \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\PickListMetadataModel[] callList($organization, $apiVersion)



Returns meta data of the picklist.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '4.1-preview.1' to use this version of the api.

try {
    $result = $apiInstance->callList($organization, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->callList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;4.1-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\PickListMetadataModel[]**](../Model/PickListMetadataModel.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **create**
> \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\PickListModel create($organization, $body, $apiVersion)



Creates a picklist.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\PickListModel(); // \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\PickListModel | 
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '4.1-preview.1' to use this version of the api.

try {
    $result = $apiInstance->create($organization, $body, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->create: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\PickListModel**](../Model/PickListModel.md)|  |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;4.1-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\PickListModel**](../Model/PickListModel.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delete**
> delete($organization, $listId, $apiVersion)



Removes a picklist.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$listId = "listId_example"; // string | The ID of the list
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '4.1-preview.1' to use this version of the api.

try {
    $apiInstance->delete($organization, $listId, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **listId** | [**string**](../Model/.md)| The ID of the list |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;4.1-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get**
> \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\PickListModel get($organization, $listId, $apiVersion)



Returns a picklist.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$listId = "listId_example"; // string | The ID of the list
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '4.1-preview.1' to use this version of the api.

try {
    $result = $apiInstance->get($organization, $listId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **listId** | [**string**](../Model/.md)| The ID of the list |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;4.1-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\PickListModel**](../Model/PickListModel.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **update**
> \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\PickListModel update($organization, $body, $listId, $apiVersion)



Updates a list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\PickListModel(); // \FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\PickListModel | 
$listId = "listId_example"; // string | The ID of the list
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '4.1-preview.1' to use this version of the api.

try {
    $result = $apiInstance->update($organization, $body, $listId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->update: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\PickListModel**](../Model/PickListModel.md)|  |
 **listId** | [**string**](../Model/.md)| The ID of the list |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;4.1-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\ProcessDefinitions\Model\PickListModel**](../Model/PickListModel.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

