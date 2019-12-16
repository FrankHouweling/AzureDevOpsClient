# FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\NpmApi

All URIs are relative to *https://pkgs.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**npmDeletePackageVersionFromRecycleBin**](NpmApi.md#npmDeletePackageVersionFromRecycleBin) | **DELETE** /{organization}/{project}/_apis/packaging/feeds/{feedId}/npm/RecycleBin/packages/{packageName}/versions/{packageVersion} | 
[**npmDeleteScopedPackageVersionFromRecycleBin**](NpmApi.md#npmDeleteScopedPackageVersionFromRecycleBin) | **DELETE** /{organization}/{project}/_apis/packaging/feeds/{feedId}/npm/RecycleBin/packages/@{packageScope}/{unscopedPackageName}/versions/{packageVersion} | 
[**npmDownloadPackage**](NpmApi.md#npmDownloadPackage) | **GET** /{organization}/{project}/_apis/packaging/feeds/{feedId}/npm/packages/{packageName}/versions/{packageVersion}/content | 
[**npmDownloadScopedPackage**](NpmApi.md#npmDownloadScopedPackage) | **GET** /{organization}/{project}/_apis/packaging/feeds/{feedId}/npm/packages/@{packageScope}/{unscopedPackageName}/versions/{packageVersion}/content | 
[**npmGetPackageReadme**](NpmApi.md#npmGetPackageReadme) | **GET** /{organization}/{project}/_apis/packaging/feeds/{feedId}/npm/packages/{packageName}/versions/{packageVersion}/readme | 
[**npmGetPackageVersion**](NpmApi.md#npmGetPackageVersion) | **GET** /{organization}/{project}/_apis/packaging/feeds/{feedId}/npm/{packageName}/versions/{packageVersion} | 
[**npmGetPackageVersionFromRecycleBin**](NpmApi.md#npmGetPackageVersionFromRecycleBin) | **GET** /{organization}/{project}/_apis/packaging/feeds/{feedId}/npm/RecycleBin/packages/{packageName}/versions/{packageVersion} | 
[**npmGetScopedPackageReadme**](NpmApi.md#npmGetScopedPackageReadme) | **GET** /{organization}/{project}/_apis/packaging/feeds/{feedId}/npm/packages/@{packageScope}/{unscopedPackageName}/versions/{packageVersion}/readme | 
[**npmGetScopedPackageVersion**](NpmApi.md#npmGetScopedPackageVersion) | **GET** /{organization}/{project}/_apis/packaging/feeds/{feedId}/npm/@{packageScope}/{unscopedPackageName}/versions/{packageVersion} | 
[**npmGetScopedPackageVersionFromRecycleBin**](NpmApi.md#npmGetScopedPackageVersionFromRecycleBin) | **GET** /{organization}/{project}/_apis/packaging/feeds/{feedId}/npm/RecycleBin/packages/@{packageScope}/{unscopedPackageName}/versions/{packageVersion} | 
[**npmRestorePackageVersionFromRecycleBin**](NpmApi.md#npmRestorePackageVersionFromRecycleBin) | **PATCH** /{organization}/{project}/_apis/packaging/feeds/{feedId}/npm/RecycleBin/packages/{packageName}/versions/{packageVersion} | 
[**npmRestoreScopedPackageVersionFromRecycleBin**](NpmApi.md#npmRestoreScopedPackageVersionFromRecycleBin) | **PATCH** /{organization}/{project}/_apis/packaging/feeds/{feedId}/npm/RecycleBin/packages/@{packageScope}/{unscopedPackageName}/versions/{packageVersion} | 
[**npmUnpublishPackage**](NpmApi.md#npmUnpublishPackage) | **DELETE** /{organization}/{project}/_apis/packaging/feeds/{feedId}/npm/{packageName}/versions/{packageVersion} | 
[**npmUnpublishScopedPackage**](NpmApi.md#npmUnpublishScopedPackage) | **DELETE** /{organization}/{project}/_apis/packaging/feeds/{feedId}/npm/@{packageScope}/{unscopedPackageName}/versions/{packageVersion} | 
[**npmUpdatePackage**](NpmApi.md#npmUpdatePackage) | **PATCH** /{organization}/{project}/_apis/packaging/feeds/{feedId}/npm/{packageName}/versions/{packageVersion} | 
[**npmUpdatePackages**](NpmApi.md#npmUpdatePackages) | **POST** /{organization}/{project}/_apis/packaging/feeds/{feedId}/npm/packagesbatch | 
[**npmUpdateScopedPackage**](NpmApi.md#npmUpdateScopedPackage) | **PATCH** /{organization}/{project}/_apis/packaging/feeds/{feedId}/npm/@{packageScope}/{unscopedPackageName}/versions/{packageVersion} | 


# **npmDeletePackageVersionFromRecycleBin**
> npmDeletePackageVersionFromRecycleBin($organization, $feedId, $packageName, $packageVersion, $project, $apiVersion)



Delete a package version without an npm scope from the recycle bin.  The project parameter must be supplied if the feed was created in a project. If the feed is not associated with any project, omit the project parameter from the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Api\NpmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$feedId = "feedId_example"; // string | Name or ID of the feed.
$packageName = "packageName_example"; // string | Name of the package.
$packageVersion = "packageVersion_example"; // string | Version of the package.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->npmDeletePackageVersionFromRecycleBin($organization, $feedId, $packageName, $packageVersion, $project, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling NpmApi->npmDeletePackageVersionFromRecycleBin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **feedId** | **string**| Name or ID of the feed. |
 **packageName** | **string**| Name of the package. |
 **packageVersion** | **string**| Version of the package. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **npmDeleteScopedPackageVersionFromRecycleBin**
> npmDeleteScopedPackageVersionFromRecycleBin($organization, $feedId, $packageScope, $unscopedPackageName, $packageVersion, $project, $apiVersion)



Delete a package version with an npm scope from the recycle bin.  The project parameter must be supplied if the feed was created in a project. If the feed is not associated with any project, omit the project parameter from the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Api\NpmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$feedId = "feedId_example"; // string | Name or ID of the feed.
$packageScope = "packageScope_example"; // string | Scope of the package (the 'scope' part of @scope/name).
$unscopedPackageName = "unscopedPackageName_example"; // string | Name of the package (the 'name' part of @scope/name).
$packageVersion = "packageVersion_example"; // string | Version of the package.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->npmDeleteScopedPackageVersionFromRecycleBin($organization, $feedId, $packageScope, $unscopedPackageName, $packageVersion, $project, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling NpmApi->npmDeleteScopedPackageVersionFromRecycleBin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **feedId** | **string**| Name or ID of the feed. |
 **packageScope** | **string**| Scope of the package (the &#39;scope&#39; part of @scope/name). |
 **unscopedPackageName** | **string**| Name of the package (the &#39;name&#39; part of @scope/name). |
 **packageVersion** | **string**| Version of the package. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **npmDownloadPackage**
> string npmDownloadPackage($organization, $feedId, $packageName, $packageVersion, $project, $apiVersion)



Get an unscoped npm package.  The project parameter must be supplied if the feed was created in a project. If the feed is not associated with any project, omit the project parameter from the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Api\NpmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$feedId = "feedId_example"; // string | Name or ID of the feed.
$packageName = "packageName_example"; // string | Name of the package.
$packageVersion = "packageVersion_example"; // string | Version of the package.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->npmDownloadPackage($organization, $feedId, $packageName, $packageVersion, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NpmApi->npmDownloadPackage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **feedId** | **string**| Name or ID of the feed. |
 **packageName** | **string**| Name of the package. |
 **packageVersion** | **string**| Version of the package. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

**string**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **npmDownloadScopedPackage**
> string npmDownloadScopedPackage($organization, $feedId, $packageScope, $unscopedPackageName, $packageVersion, $project, $apiVersion)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Api\NpmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$feedId = "feedId_example"; // string | 
$packageScope = "packageScope_example"; // string | 
$unscopedPackageName = "unscopedPackageName_example"; // string | 
$packageVersion = "packageVersion_example"; // string | 
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->npmDownloadScopedPackage($organization, $feedId, $packageScope, $unscopedPackageName, $packageVersion, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NpmApi->npmDownloadScopedPackage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **feedId** | **string**|  |
 **packageScope** | **string**|  |
 **unscopedPackageName** | **string**|  |
 **packageVersion** | **string**|  |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

**string**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **npmGetPackageReadme**
> string npmGetPackageReadme($organization, $feedId, $packageName, $packageVersion, $project, $apiVersion)



Get the Readme for a package version that has no npm scope.  The project parameter must be supplied if the feed was created in a project. If the feed is not associated with any project, omit the project parameter from the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Api\NpmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$feedId = "feedId_example"; // string | Name or ID of the feed.
$packageName = "packageName_example"; // string | Name of the package.
$packageVersion = "packageVersion_example"; // string | Version of the package.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->npmGetPackageReadme($organization, $feedId, $packageName, $packageVersion, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NpmApi->npmGetPackageReadme: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **feedId** | **string**| Name or ID of the feed. |
 **packageName** | **string**| Name of the package. |
 **packageVersion** | **string**| Version of the package. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

**string**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **npmGetPackageVersion**
> \FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Model\Package npmGetPackageVersion($organization, $feedId, $packageName, $packageVersion, $project, $apiVersion)



Get information about an unscoped package version.  The project parameter must be supplied if the feed was created in a project. If the feed is not associated with any project, omit the project parameter from the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Api\NpmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$feedId = "feedId_example"; // string | Name or ID of the feed.
$packageName = "packageName_example"; // string | Name of the package.
$packageVersion = "packageVersion_example"; // string | Version of the package.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->npmGetPackageVersion($organization, $feedId, $packageName, $packageVersion, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NpmApi->npmGetPackageVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **feedId** | **string**| Name or ID of the feed. |
 **packageName** | **string**| Name of the package. |
 **packageVersion** | **string**| Version of the package. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Model\Package**](../Model/Package.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **npmGetPackageVersionFromRecycleBin**
> \FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Model\NpmPackageVersionDeletionState npmGetPackageVersionFromRecycleBin($organization, $feedId, $packageName, $packageVersion, $project, $apiVersion)



Get information about an unscoped package version in the recycle bin.  The project parameter must be supplied if the feed was created in a project. If the feed is not associated with any project, omit the project parameter from the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Api\NpmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$feedId = "feedId_example"; // string | Name or ID of the feed.
$packageName = "packageName_example"; // string | Name of the package.
$packageVersion = "packageVersion_example"; // string | Version of the package.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->npmGetPackageVersionFromRecycleBin($organization, $feedId, $packageName, $packageVersion, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NpmApi->npmGetPackageVersionFromRecycleBin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **feedId** | **string**| Name or ID of the feed. |
 **packageName** | **string**| Name of the package. |
 **packageVersion** | **string**| Version of the package. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Model\NpmPackageVersionDeletionState**](../Model/NpmPackageVersionDeletionState.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **npmGetScopedPackageReadme**
> string npmGetScopedPackageReadme($organization, $feedId, $packageScope, $unscopedPackageName, $packageVersion, $project, $apiVersion)



Get the Readme for a package version with an npm scope.  The project parameter must be supplied if the feed was created in a project. If the feed is not associated with any project, omit the project parameter from the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Api\NpmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$feedId = "feedId_example"; // string | Name or ID of the feed.
$packageScope = "packageScope_example"; // string | Scope of the package (the 'scope' part of @scope\\name)
$unscopedPackageName = "unscopedPackageName_example"; // string | Name of the package (the 'name' part of @scope\\name)
$packageVersion = "packageVersion_example"; // string | Version of the package.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->npmGetScopedPackageReadme($organization, $feedId, $packageScope, $unscopedPackageName, $packageVersion, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NpmApi->npmGetScopedPackageReadme: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **feedId** | **string**| Name or ID of the feed. |
 **packageScope** | **string**| Scope of the package (the &#39;scope&#39; part of @scope\\name) |
 **unscopedPackageName** | **string**| Name of the package (the &#39;name&#39; part of @scope\\name) |
 **packageVersion** | **string**| Version of the package. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

**string**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **npmGetScopedPackageVersion**
> \FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Model\Package npmGetScopedPackageVersion($organization, $feedId, $packageScope, $unscopedPackageName, $packageVersion, $project, $apiVersion)



Get information about a scoped package version (such as @scope/name).  The project parameter must be supplied if the feed was created in a project. If the feed is not associated with any project, omit the project parameter from the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Api\NpmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$feedId = "feedId_example"; // string | Name or ID of the feed.
$packageScope = "packageScope_example"; // string | Scope of the package (the 'scope' part of @scope/name).
$unscopedPackageName = "unscopedPackageName_example"; // string | Name of the package (the 'name' part of @scope/name).
$packageVersion = "packageVersion_example"; // string | Version of the package.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->npmGetScopedPackageVersion($organization, $feedId, $packageScope, $unscopedPackageName, $packageVersion, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NpmApi->npmGetScopedPackageVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **feedId** | **string**| Name or ID of the feed. |
 **packageScope** | **string**| Scope of the package (the &#39;scope&#39; part of @scope/name). |
 **unscopedPackageName** | **string**| Name of the package (the &#39;name&#39; part of @scope/name). |
 **packageVersion** | **string**| Version of the package. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Model\Package**](../Model/Package.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **npmGetScopedPackageVersionFromRecycleBin**
> \FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Model\NpmPackageVersionDeletionState npmGetScopedPackageVersionFromRecycleBin($organization, $feedId, $packageScope, $unscopedPackageName, $packageVersion, $project, $apiVersion)



Get information about a scoped package version in the recycle bin.  The project parameter must be supplied if the feed was created in a project. If the feed is not associated with any project, omit the project parameter from the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Api\NpmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$feedId = "feedId_example"; // string | Name or ID of the feed.
$packageScope = "packageScope_example"; // string | Scope of the package (the 'scope' part of @scope/name)
$unscopedPackageName = "unscopedPackageName_example"; // string | Name of the package (the 'name' part of @scope/name).
$packageVersion = "packageVersion_example"; // string | Version of the package.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->npmGetScopedPackageVersionFromRecycleBin($organization, $feedId, $packageScope, $unscopedPackageName, $packageVersion, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NpmApi->npmGetScopedPackageVersionFromRecycleBin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **feedId** | **string**| Name or ID of the feed. |
 **packageScope** | **string**| Scope of the package (the &#39;scope&#39; part of @scope/name) |
 **unscopedPackageName** | **string**| Name of the package (the &#39;name&#39; part of @scope/name). |
 **packageVersion** | **string**| Version of the package. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Model\NpmPackageVersionDeletionState**](../Model/NpmPackageVersionDeletionState.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **npmRestorePackageVersionFromRecycleBin**
> npmRestorePackageVersionFromRecycleBin($organization, $body, $feedId, $packageName, $packageVersion, $project, $apiVersion)



Restore a package version without an npm scope from the recycle bin to its feed.  The project parameter must be supplied if the feed was created in a project. If the feed is not associated with any project, omit the project parameter from the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Api\NpmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Model\NpmRecycleBinPackageVersionDetails(); // \FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Model\NpmRecycleBinPackageVersionDetails | 
$feedId = "feedId_example"; // string | Name or ID of the feed.
$packageName = "packageName_example"; // string | Name of the package.
$packageVersion = "packageVersion_example"; // string | Version of the package.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->npmRestorePackageVersionFromRecycleBin($organization, $body, $feedId, $packageName, $packageVersion, $project, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling NpmApi->npmRestorePackageVersionFromRecycleBin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Model\NpmRecycleBinPackageVersionDetails**](../Model/NpmRecycleBinPackageVersionDetails.md)|  |
 **feedId** | **string**| Name or ID of the feed. |
 **packageName** | **string**| Name of the package. |
 **packageVersion** | **string**| Version of the package. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **npmRestoreScopedPackageVersionFromRecycleBin**
> npmRestoreScopedPackageVersionFromRecycleBin($organization, $body, $feedId, $packageScope, $unscopedPackageName, $packageVersion, $project, $apiVersion)



Restore a package version with an npm scope from the recycle bin to its feed.  The project parameter must be supplied if the feed was created in a project. If the feed is not associated with any project, omit the project parameter from the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Api\NpmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Model\NpmRecycleBinPackageVersionDetails(); // \FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Model\NpmRecycleBinPackageVersionDetails | 
$feedId = "feedId_example"; // string | Name or ID of the feed.
$packageScope = "packageScope_example"; // string | Scope of the package (the 'scope' part of @scope/name).
$unscopedPackageName = "unscopedPackageName_example"; // string | Name of the package (the 'name' part of @scope/name).
$packageVersion = "packageVersion_example"; // string | Version of the package.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->npmRestoreScopedPackageVersionFromRecycleBin($organization, $body, $feedId, $packageScope, $unscopedPackageName, $packageVersion, $project, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling NpmApi->npmRestoreScopedPackageVersionFromRecycleBin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Model\NpmRecycleBinPackageVersionDetails**](../Model/NpmRecycleBinPackageVersionDetails.md)|  |
 **feedId** | **string**| Name or ID of the feed. |
 **packageScope** | **string**| Scope of the package (the &#39;scope&#39; part of @scope/name). |
 **unscopedPackageName** | **string**| Name of the package (the &#39;name&#39; part of @scope/name). |
 **packageVersion** | **string**| Version of the package. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **npmUnpublishPackage**
> \FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Model\Package npmUnpublishPackage($organization, $feedId, $packageName, $packageVersion, $project, $apiVersion)



Unpublish an unscoped package version.  The project parameter must be supplied if the feed was created in a project. If the feed is not associated with any project, omit the project parameter from the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Api\NpmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$feedId = "feedId_example"; // string | Name or ID of the feed.
$packageName = "packageName_example"; // string | Name of the package.
$packageVersion = "packageVersion_example"; // string | Version of the package.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->npmUnpublishPackage($organization, $feedId, $packageName, $packageVersion, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NpmApi->npmUnpublishPackage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **feedId** | **string**| Name or ID of the feed. |
 **packageName** | **string**| Name of the package. |
 **packageVersion** | **string**| Version of the package. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Model\Package**](../Model/Package.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **npmUnpublishScopedPackage**
> \FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Model\Package npmUnpublishScopedPackage($organization, $feedId, $packageScope, $unscopedPackageName, $packageVersion, $project, $apiVersion)



Unpublish a scoped package version (such as @scope/name).  The project parameter must be supplied if the feed was created in a project. If the feed is not associated with any project, omit the project parameter from the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Api\NpmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$feedId = "feedId_example"; // string | Name or ID of the feed.
$packageScope = "packageScope_example"; // string | Scope of the package (the 'scope' part of @scope/name).
$unscopedPackageName = "unscopedPackageName_example"; // string | Name of the package (the 'name' part of @scope/name).
$packageVersion = "packageVersion_example"; // string | Version of the package.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->npmUnpublishScopedPackage($organization, $feedId, $packageScope, $unscopedPackageName, $packageVersion, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NpmApi->npmUnpublishScopedPackage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **feedId** | **string**| Name or ID of the feed. |
 **packageScope** | **string**| Scope of the package (the &#39;scope&#39; part of @scope/name). |
 **unscopedPackageName** | **string**| Name of the package (the &#39;name&#39; part of @scope/name). |
 **packageVersion** | **string**| Version of the package. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Model\Package**](../Model/Package.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **npmUpdatePackage**
> \FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Model\Package npmUpdatePackage($organization, $body, $feedId, $packageName, $packageVersion, $project, $apiVersion)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Api\NpmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Model\PackageVersionDetails(); // \FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Model\PackageVersionDetails | 
$feedId = "feedId_example"; // string | 
$packageName = "packageName_example"; // string | 
$packageVersion = "packageVersion_example"; // string | 
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->npmUpdatePackage($organization, $body, $feedId, $packageName, $packageVersion, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NpmApi->npmUpdatePackage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Model\PackageVersionDetails**](../Model/PackageVersionDetails.md)|  |
 **feedId** | **string**|  |
 **packageName** | **string**|  |
 **packageVersion** | **string**|  |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Model\Package**](../Model/Package.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **npmUpdatePackages**
> npmUpdatePackages($organization, $body, $feedId, $project, $apiVersion)



Update several packages from a single feed in a single request. The updates to the packages do not happen atomically.  The project parameter must be supplied if the feed was created in a project. If the feed is not associated with any project, omit the project parameter from the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Api\NpmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Model\NpmPackagesBatchRequest(); // \FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Model\NpmPackagesBatchRequest | Information about the packages to update, the operation to perform, and its associated data.
$feedId = "feedId_example"; // string | Name or ID of the feed.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->npmUpdatePackages($organization, $body, $feedId, $project, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling NpmApi->npmUpdatePackages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Model\NpmPackagesBatchRequest**](../Model/NpmPackagesBatchRequest.md)| Information about the packages to update, the operation to perform, and its associated data. |
 **feedId** | **string**| Name or ID of the feed. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **npmUpdateScopedPackage**
> \FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Model\Package npmUpdateScopedPackage($organization, $body, $feedId, $packageScope, $unscopedPackageName, $packageVersion, $project, $apiVersion)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Api\NpmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Model\PackageVersionDetails(); // \FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Model\PackageVersionDetails | 
$feedId = "feedId_example"; // string | 
$packageScope = "packageScope_example"; // string | 
$unscopedPackageName = "unscopedPackageName_example"; // string | 
$packageVersion = "packageVersion_example"; // string | 
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->npmUpdateScopedPackage($organization, $body, $feedId, $packageScope, $unscopedPackageName, $packageVersion, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NpmApi->npmUpdateScopedPackage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Model\PackageVersionDetails**](../Model/PackageVersionDetails.md)|  |
 **feedId** | **string**|  |
 **packageScope** | **string**|  |
 **unscopedPackageName** | **string**|  |
 **packageVersion** | **string**|  |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Model\Package**](../Model/Package.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

