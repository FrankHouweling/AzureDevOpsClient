# FrankHouweling\AzureDevOpsClient\Core\AvatarApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**avatarRemoveProjectAvatar**](AvatarApi.md#avatarRemoveProjectAvatar) | **DELETE** /{organization}/_apis/projects/{projectId}/avatar | 
[**avatarSetProjectAvatar**](AvatarApi.md#avatarSetProjectAvatar) | **PUT** /{organization}/_apis/projects/{projectId}/avatar | 


# **avatarRemoveProjectAvatar**
> avatarRemoveProjectAvatar($organization, $projectId, $apiVersion)



Removes the avatar for the project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Core\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Core\Api\AvatarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$projectId = "projectId_example"; // string | The ID or name of the project.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->avatarRemoveProjectAvatar($organization, $projectId, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling AvatarApi->avatarRemoveProjectAvatar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **projectId** | **string**| The ID or name of the project. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **avatarSetProjectAvatar**
> avatarSetProjectAvatar($organization, $body, $projectId, $apiVersion)



Sets the avatar for the project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Core\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Core\Api\AvatarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Core\Model\ProjectAvatar(); // \FrankHouweling\AzureDevOpsClient\Core\Model\ProjectAvatar | The avatar blob data object to upload.
$projectId = "projectId_example"; // string | The ID or name of the project.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->avatarSetProjectAvatar($organization, $body, $projectId, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling AvatarApi->avatarSetProjectAvatar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Core\Model\ProjectAvatar**](../Model/ProjectAvatar.md)| The avatar blob data object to upload. |
 **projectId** | **string**| The ID or name of the project. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

