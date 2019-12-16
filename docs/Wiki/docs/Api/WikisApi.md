# AzureDevOpsClient\Wiki\WikisApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**wikisCreate**](WikisApi.md#wikisCreate) | **POST** /{organization}/{project}/_apis/wiki/wikis | 
[**wikisDelete**](WikisApi.md#wikisDelete) | **DELETE** /{organization}/{project}/_apis/wiki/wikis/{wikiIdentifier} | 
[**wikisGet**](WikisApi.md#wikisGet) | **GET** /{organization}/{project}/_apis/wiki/wikis/{wikiIdentifier} | 
[**wikisList**](WikisApi.md#wikisList) | **GET** /{organization}/{project}/_apis/wiki/wikis | 
[**wikisUpdate**](WikisApi.md#wikisUpdate) | **PATCH** /{organization}/{project}/_apis/wiki/wikis/{wikiIdentifier} | 


# **wikisCreate**
> \AzureDevOpsClient\Wiki\AzureDevOpsClient\Wiki\Model\WikiV2 wikisCreate($organization, $body, $project, $apiVersion)



Creates the wiki resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Wiki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Wiki\Api\WikisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Wiki\AzureDevOpsClient\Wiki\Model\WikiCreateParametersV2(); // \AzureDevOpsClient\Wiki\AzureDevOpsClient\Wiki\Model\WikiCreateParametersV2 | Parameters for the wiki creation.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $result = $apiInstance->wikisCreate($organization, $body, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WikisApi->wikisCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Wiki\AzureDevOpsClient\Wiki\Model\WikiCreateParametersV2**](../Model/WikiCreateParametersV2.md)| Parameters for the wiki creation. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Wiki\AzureDevOpsClient\Wiki\Model\WikiV2**](../Model/WikiV2.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **wikisDelete**
> \AzureDevOpsClient\Wiki\AzureDevOpsClient\Wiki\Model\WikiV2 wikisDelete($organization, $wikiIdentifier, $project, $apiVersion)



Deletes the wiki corresponding to the wiki ID or wiki name provided.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Wiki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Wiki\Api\WikisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$wikiIdentifier = "wikiIdentifier_example"; // string | Wiki ID or wiki name.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $result = $apiInstance->wikisDelete($organization, $wikiIdentifier, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WikisApi->wikisDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **wikiIdentifier** | **string**| Wiki ID or wiki name. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Wiki\AzureDevOpsClient\Wiki\Model\WikiV2**](../Model/WikiV2.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **wikisGet**
> \AzureDevOpsClient\Wiki\AzureDevOpsClient\Wiki\Model\WikiV2 wikisGet($organization, $wikiIdentifier, $project, $apiVersion)



Gets the wiki corresponding to the wiki ID or wiki name provided.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Wiki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Wiki\Api\WikisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$wikiIdentifier = "wikiIdentifier_example"; // string | Wiki ID or wiki name.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $result = $apiInstance->wikisGet($organization, $wikiIdentifier, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WikisApi->wikisGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **wikiIdentifier** | **string**| Wiki ID or wiki name. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Wiki\AzureDevOpsClient\Wiki\Model\WikiV2**](../Model/WikiV2.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **wikisList**
> \AzureDevOpsClient\Wiki\AzureDevOpsClient\Wiki\Model\WikiV2[] wikisList($organization, $project, $apiVersion)



Gets all wikis in a project or collection.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Wiki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Wiki\Api\WikisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $result = $apiInstance->wikisList($organization, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WikisApi->wikisList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Wiki\AzureDevOpsClient\Wiki\Model\WikiV2[]**](../Model/WikiV2.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **wikisUpdate**
> \AzureDevOpsClient\Wiki\AzureDevOpsClient\Wiki\Model\WikiV2 wikisUpdate($organization, $body, $wikiIdentifier, $project, $apiVersion)



Updates the wiki corresponding to the wiki ID or wiki name provided using the update parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\Wiki\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\Wiki\Api\WikisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\Wiki\AzureDevOpsClient\Wiki\Model\WikiUpdateParameters(); // \AzureDevOpsClient\Wiki\AzureDevOpsClient\Wiki\Model\WikiUpdateParameters | Update parameters.
$wikiIdentifier = "wikiIdentifier_example"; // string | Wiki ID or wiki name.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.

try {
    $result = $apiInstance->wikisUpdate($organization, $body, $wikiIdentifier, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WikisApi->wikisUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\Wiki\AzureDevOpsClient\Wiki\Model\WikiUpdateParameters**](../Model/WikiUpdateParameters.md)| Update parameters. |
 **wikiIdentifier** | **string**| Wiki ID or wiki name. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\Wiki\AzureDevOpsClient\Wiki\Model\WikiV2**](../Model/WikiV2.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

