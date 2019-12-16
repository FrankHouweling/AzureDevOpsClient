# AzureDevOpsClient\Graph\AvatarsApi

All URIs are relative to *https://vssps.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**avatarsDelete**](AvatarsApi.md#avatarsDelete) | **DELETE** /{organization}/_apis/graph/Subjects/{subjectDescriptor}/avatars | 
[**avatarsGet**](AvatarsApi.md#avatarsGet) | **GET** /{organization}/_apis/graph/Subjects/{subjectDescriptor}/avatars | 
[**avatarsSetAvatar**](AvatarsApi.md#avatarsSetAvatar) | **PUT** /{organization}/_apis/graph/Subjects/{subjectDescriptor}/avatars | 


# **avatarsDelete**
> avatarsDelete($subjectDescriptor, $organization, $apiVersion)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = AzureDevOpsClient\Graph\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new AzureDevOpsClient\Graph\Api\AvatarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subjectDescriptor = "subjectDescriptor_example"; // string | 
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->avatarsDelete($subjectDescriptor, $organization, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling AvatarsApi->avatarsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subjectDescriptor** | **string**|  |
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **avatarsGet**
> \AzureDevOpsClient\Graph\AzureDevOpsClient\Graph\Model\Avatar avatarsGet($subjectDescriptor, $organization, $apiVersion, $size, $format)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Graph\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Graph\Api\AvatarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subjectDescriptor = "subjectDescriptor_example"; // string | 
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$size = "size_example"; // string | 
$format = "format_example"; // string | 

try {
    $result = $apiInstance->avatarsGet($subjectDescriptor, $organization, $apiVersion, $size, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvatarsApi->avatarsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subjectDescriptor** | **string**|  |
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **size** | **string**|  | [optional]
 **format** | **string**|  | [optional]

### Return type

[**\AzureDevOpsClient\Graph\AzureDevOpsClient\Graph\Model\Avatar**](../Model/Avatar.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **avatarsSetAvatar**
> avatarsSetAvatar($body, $subjectDescriptor, $organization, $apiVersion)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = AzureDevOpsClient\Graph\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new AzureDevOpsClient\Graph\Api\AvatarsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \AzureDevOpsClient\Graph\AzureDevOpsClient\Graph\Model\Avatar(); // \AzureDevOpsClient\Graph\AzureDevOpsClient\Graph\Model\Avatar | 
$subjectDescriptor = "subjectDescriptor_example"; // string | 
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->avatarsSetAvatar($body, $subjectDescriptor, $organization, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling AvatarsApi->avatarsSetAvatar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\AzureDevOpsClient\Graph\AzureDevOpsClient\Graph\Model\Avatar**](../Model/Avatar.md)|  |
 **subjectDescriptor** | **string**|  |
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

