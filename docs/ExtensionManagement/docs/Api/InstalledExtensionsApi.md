# FrankHouweling\AzureDevOpsClient\ExtensionManagement\InstalledExtensionsApi

All URIs are relative to *https://extmgmt.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**installedExtensionsGet**](InstalledExtensionsApi.md#installedExtensionsGet) | **GET** /{organization}/_apis/extensionmanagement/installedextensionsbyname/{publisherName}/{extensionName} | 
[**installedExtensionsInstallExtensionByName**](InstalledExtensionsApi.md#installedExtensionsInstallExtensionByName) | **POST** /{organization}/_apis/extensionmanagement/installedextensionsbyname/{publisherName}/{extensionName}/{version} | 
[**installedExtensionsList**](InstalledExtensionsApi.md#installedExtensionsList) | **GET** /{organization}/_apis/extensionmanagement/installedextensions | 
[**installedExtensionsUninstallExtensionByName**](InstalledExtensionsApi.md#installedExtensionsUninstallExtensionByName) | **DELETE** /{organization}/_apis/extensionmanagement/installedextensionsbyname/{publisherName}/{extensionName} | 
[**installedExtensionsUpdate**](InstalledExtensionsApi.md#installedExtensionsUpdate) | **PATCH** /{organization}/_apis/extensionmanagement/installedextensions | 


# **installedExtensionsGet**
> \FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\InstalledExtension installedExtensionsGet($organization, $publisherName, $extensionName, $apiVersion, $assetTypes)



Get an installed extension by its publisher and extension name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\ExtensionManagement\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\ExtensionManagement\Api\InstalledExtensionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$publisherName = "publisherName_example"; // string | Name of the publisher. Example: \"fabrikam\".
$extensionName = "extensionName_example"; // string | Name of the extension. Example: \"ops-tools\".
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$assetTypes = "assetTypes_example"; // string | 

try {
    $result = $apiInstance->installedExtensionsGet($organization, $publisherName, $extensionName, $apiVersion, $assetTypes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstalledExtensionsApi->installedExtensionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **publisherName** | **string**| Name of the publisher. Example: \&quot;fabrikam\&quot;. |
 **extensionName** | **string**| Name of the extension. Example: \&quot;ops-tools\&quot;. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **assetTypes** | **string**|  | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\InstalledExtension**](../Model/InstalledExtension.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **installedExtensionsInstallExtensionByName**
> \FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\InstalledExtension installedExtensionsInstallExtensionByName($organization, $publisherName, $extensionName, $version, $apiVersion)



Install the specified extension into the account / project collection.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\ExtensionManagement\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\ExtensionManagement\Api\InstalledExtensionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$publisherName = "publisherName_example"; // string | Name of the publisher. Example: \"fabrikam\".
$extensionName = "extensionName_example"; // string | Name of the extension. Example: \"ops-tools\".
$version = "version_example"; // string | 
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->installedExtensionsInstallExtensionByName($organization, $publisherName, $extensionName, $version, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstalledExtensionsApi->installedExtensionsInstallExtensionByName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **publisherName** | **string**| Name of the publisher. Example: \&quot;fabrikam\&quot;. |
 **extensionName** | **string**| Name of the extension. Example: \&quot;ops-tools\&quot;. |
 **version** | **string**|  |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\InstalledExtension**](../Model/InstalledExtension.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **installedExtensionsList**
> \FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\InstalledExtension[] installedExtensionsList($organization, $apiVersion, $includeDisabledExtensions, $includeErrors, $assetTypes, $includeInstallationIssues)



List the installed extensions in the account / project collection.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\ExtensionManagement\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\ExtensionManagement\Api\InstalledExtensionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$includeDisabledExtensions = true; // bool | If true (the default), include disabled extensions in the results.
$includeErrors = true; // bool | If true, include installed extensions with errors.
$assetTypes = "assetTypes_example"; // string | 
$includeInstallationIssues = true; // bool | 

try {
    $result = $apiInstance->installedExtensionsList($organization, $apiVersion, $includeDisabledExtensions, $includeErrors, $assetTypes, $includeInstallationIssues);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstalledExtensionsApi->installedExtensionsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **includeDisabledExtensions** | **bool**| If true (the default), include disabled extensions in the results. | [optional]
 **includeErrors** | **bool**| If true, include installed extensions with errors. | [optional]
 **assetTypes** | **string**|  | [optional]
 **includeInstallationIssues** | **bool**|  | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\InstalledExtension[]**](../Model/InstalledExtension.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **installedExtensionsUninstallExtensionByName**
> installedExtensionsUninstallExtensionByName($organization, $publisherName, $extensionName, $apiVersion, $reason, $reasonCode)



Uninstall the specified extension from the account / project collection.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\ExtensionManagement\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\ExtensionManagement\Api\InstalledExtensionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$publisherName = "publisherName_example"; // string | Name of the publisher. Example: \"fabrikam\".
$extensionName = "extensionName_example"; // string | Name of the extension. Example: \"ops-tools\".
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$reason = "reason_example"; // string | 
$reasonCode = "reasonCode_example"; // string | 

try {
    $apiInstance->installedExtensionsUninstallExtensionByName($organization, $publisherName, $extensionName, $apiVersion, $reason, $reasonCode);
} catch (Exception $e) {
    echo 'Exception when calling InstalledExtensionsApi->installedExtensionsUninstallExtensionByName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **publisherName** | **string**| Name of the publisher. Example: \&quot;fabrikam\&quot;. |
 **extensionName** | **string**| Name of the extension. Example: \&quot;ops-tools\&quot;. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **reason** | **string**|  | [optional]
 **reasonCode** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **installedExtensionsUpdate**
> \FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\InstalledExtension installedExtensionsUpdate($organization, $body, $apiVersion)



Update an installed extension. Typically this API is used to enable or disable an extension.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\ExtensionManagement\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\ExtensionManagement\Api\InstalledExtensionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\InstalledExtension(); // \FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\InstalledExtension | 
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->installedExtensionsUpdate($organization, $body, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstalledExtensionsApi->installedExtensionsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\InstalledExtension**](../Model/InstalledExtension.md)|  |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\InstalledExtension**](../Model/InstalledExtension.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

