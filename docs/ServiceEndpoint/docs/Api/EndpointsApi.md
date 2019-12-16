# AzureDevOpsClient\ServiceEndpoint\EndpointsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**endpointsCreate**](EndpointsApi.md#endpointsCreate) | **POST** /{organization}/_apis/serviceendpoint/endpoints | 
[**endpointsDelete**](EndpointsApi.md#endpointsDelete) | **DELETE** /{organization}/_apis/serviceendpoint/endpoints/{endpointId} | 
[**endpointsGet**](EndpointsApi.md#endpointsGet) | **GET** /{organization}/{project}/_apis/serviceendpoint/endpoints/{endpointId} | 
[**endpointsGetServiceEndpointsByNames**](EndpointsApi.md#endpointsGetServiceEndpointsByNames) | **GET** /{organization}/{project}/_apis/serviceendpoint/endpoints | 
[**endpointsShareServiceEndpoint**](EndpointsApi.md#endpointsShareServiceEndpoint) | **PATCH** /{organization}/_apis/serviceendpoint/endpoints/{endpointId} | 
[**endpointsUpdate**](EndpointsApi.md#endpointsUpdate) | **PUT** /{organization}/_apis/serviceendpoint/endpoints/{endpointId} | 


# **endpointsCreate**
> \AzureDevOpsClient\ServiceEndpoint\AzureDevOpsClient\ServiceEndpoint\Model\ServiceEndpoint endpointsCreate($organization, $body, $apiVersion)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = AzureDevOpsClient\ServiceEndpoint\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new AzureDevOpsClient\ServiceEndpoint\Api\EndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\ServiceEndpoint\AzureDevOpsClient\ServiceEndpoint\Model\ServiceEndpoint(); // \AzureDevOpsClient\ServiceEndpoint\AzureDevOpsClient\ServiceEndpoint\Model\ServiceEndpoint | 
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.

try {
    $result = $apiInstance->endpointsCreate($organization, $body, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointsApi->endpointsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\ServiceEndpoint\AzureDevOpsClient\ServiceEndpoint\Model\ServiceEndpoint**](../Model/ServiceEndpoint.md)|  |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\ServiceEndpoint\AzureDevOpsClient\ServiceEndpoint\Model\ServiceEndpoint**](../Model/ServiceEndpoint.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **endpointsDelete**
> endpointsDelete($organization, $endpointId, $projectIds, $apiVersion)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = AzureDevOpsClient\ServiceEndpoint\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new AzureDevOpsClient\ServiceEndpoint\Api\EndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$endpointId = "endpointId_example"; // string | 
$projectIds = "projectIds_example"; // string | 
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.

try {
    $apiInstance->endpointsDelete($organization, $endpointId, $projectIds, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling EndpointsApi->endpointsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **endpointId** | [**string**](../Model/.md)|  |
 **projectIds** | **string**|  |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **endpointsGet**
> \AzureDevOpsClient\ServiceEndpoint\AzureDevOpsClient\ServiceEndpoint\Model\ServiceEndpoint endpointsGet($organization, $project, $endpointId, $apiVersion)



Get the service endpoint details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\ServiceEndpoint\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\ServiceEndpoint\Api\EndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$endpointId = "endpointId_example"; // string | Id of the service endpoint.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.

try {
    $result = $apiInstance->endpointsGet($organization, $project, $endpointId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointsApi->endpointsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **endpointId** | [**string**](../Model/.md)| Id of the service endpoint. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\ServiceEndpoint\AzureDevOpsClient\ServiceEndpoint\Model\ServiceEndpoint**](../Model/ServiceEndpoint.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **endpointsGetServiceEndpointsByNames**
> \AzureDevOpsClient\ServiceEndpoint\AzureDevOpsClient\ServiceEndpoint\Model\ServiceEndpoint[] endpointsGetServiceEndpointsByNames($organization, $project, $endpointNames, $apiVersion, $type, $authSchemes, $owner, $includeFailed, $includeDetails)



Get the service endpoints by name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\ServiceEndpoint\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\ServiceEndpoint\Api\EndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$endpointNames = "endpointNames_example"; // string | Names of the service endpoints.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.
$type = "type_example"; // string | Type of the service endpoints.
$authSchemes = "authSchemes_example"; // string | Authorization schemes used for service endpoints.
$owner = "owner_example"; // string | Owner for service endpoints.
$includeFailed = true; // bool | Failed flag for service endpoints.
$includeDetails = true; // bool | Flag to include more details for service endpoints. This is for internal use only and the flag will be treated as false for all other requests

try {
    $result = $apiInstance->endpointsGetServiceEndpointsByNames($organization, $project, $endpointNames, $apiVersion, $type, $authSchemes, $owner, $includeFailed, $includeDetails);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointsApi->endpointsGetServiceEndpointsByNames: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **endpointNames** | **string**| Names of the service endpoints. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |
 **type** | **string**| Type of the service endpoints. | [optional]
 **authSchemes** | **string**| Authorization schemes used for service endpoints. | [optional]
 **owner** | **string**| Owner for service endpoints. | [optional]
 **includeFailed** | **bool**| Failed flag for service endpoints. | [optional]
 **includeDetails** | **bool**| Flag to include more details for service endpoints. This is for internal use only and the flag will be treated as false for all other requests | [optional]

### Return type

[**\AzureDevOpsClient\ServiceEndpoint\AzureDevOpsClient\ServiceEndpoint\Model\ServiceEndpoint[]**](../Model/ServiceEndpoint.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **endpointsShareServiceEndpoint**
> endpointsShareServiceEndpoint($organization, $body, $endpointId, $apiVersion)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = AzureDevOpsClient\ServiceEndpoint\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new AzureDevOpsClient\ServiceEndpoint\Api\EndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = array(new \AzureDevOpsClient\ServiceEndpoint\AzureDevOpsClient\ServiceEndpoint\Model\ServiceEndpointProjectReference()); // \AzureDevOpsClient\ServiceEndpoint\AzureDevOpsClient\ServiceEndpoint\Model\ServiceEndpointProjectReference[] | 
$endpointId = "endpointId_example"; // string | 
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.

try {
    $apiInstance->endpointsShareServiceEndpoint($organization, $body, $endpointId, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling EndpointsApi->endpointsShareServiceEndpoint: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\ServiceEndpoint\AzureDevOpsClient\ServiceEndpoint\Model\ServiceEndpointProjectReference[]**](../Model/ServiceEndpointProjectReference.md)|  |
 **endpointId** | [**string**](../Model/.md)|  |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **endpointsUpdate**
> \AzureDevOpsClient\ServiceEndpoint\AzureDevOpsClient\ServiceEndpoint\Model\ServiceEndpoint endpointsUpdate($organization, $body, $endpointId, $operation, $apiVersion)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = AzureDevOpsClient\ServiceEndpoint\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new AzureDevOpsClient\ServiceEndpoint\Api\EndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\ServiceEndpoint\AzureDevOpsClient\ServiceEndpoint\Model\ServiceEndpoint(); // \AzureDevOpsClient\ServiceEndpoint\AzureDevOpsClient\ServiceEndpoint\Model\ServiceEndpoint | 
$endpointId = "endpointId_example"; // string | 
$operation = "operation_example"; // string | 
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.3' to use this version of the api.

try {
    $result = $apiInstance->endpointsUpdate($organization, $body, $endpointId, $operation, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointsApi->endpointsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\ServiceEndpoint\AzureDevOpsClient\ServiceEndpoint\Model\ServiceEndpoint**](../Model/ServiceEndpoint.md)|  |
 **endpointId** | [**string**](../Model/.md)|  |
 **operation** | **string**|  |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.3&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\ServiceEndpoint\AzureDevOpsClient\ServiceEndpoint\Model\ServiceEndpoint**](../Model/ServiceEndpoint.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

