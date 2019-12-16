# FrankHouweling\AzureDevOpsClient\Artifacts\ArtifactDetailsApi

All URIs are relative to *https://feeds.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**artifactDetailsGetBadge**](ArtifactDetailsApi.md#artifactDetailsGetBadge) | **GET** /{organization}/{project}/_apis/public/packaging/Feeds/{feedId}/Packages/{packageId}/badge | 
[**artifactDetailsGetPackage**](ArtifactDetailsApi.md#artifactDetailsGetPackage) | **GET** /{organization}/{project}/_apis/packaging/Feeds/{feedId}/packages/{packageId} | 
[**artifactDetailsGetPackageVersion**](ArtifactDetailsApi.md#artifactDetailsGetPackageVersion) | **GET** /{organization}/{project}/_apis/packaging/Feeds/{feedId}/Packages/{packageId}/versions/{packageVersionId} | 
[**artifactDetailsGetPackageVersionProvenance**](ArtifactDetailsApi.md#artifactDetailsGetPackageVersionProvenance) | **GET** /{organization}/{project}/_apis/packaging/Feeds/{feedId}/Packages/{packageId}/Versions/{packageVersionId}/provenance | 
[**artifactDetailsGetPackageVersions**](ArtifactDetailsApi.md#artifactDetailsGetPackageVersions) | **GET** /{organization}/{project}/_apis/packaging/Feeds/{feedId}/Packages/{packageId}/versions | 
[**artifactDetailsGetPackages**](ArtifactDetailsApi.md#artifactDetailsGetPackages) | **GET** /{organization}/{project}/_apis/packaging/Feeds/{feedId}/packages | 
[**artifactDetailsQueryPackageMetrics**](ArtifactDetailsApi.md#artifactDetailsQueryPackageMetrics) | **POST** /{organization}/{project}/_apis/packaging/Feeds/{feedId}/packagemetricsbatch | 
[**artifactDetailsQueryPackageVersionMetrics**](ArtifactDetailsApi.md#artifactDetailsQueryPackageVersionMetrics) | **POST** /{organization}/{project}/_apis/packaging/Feeds/{feedId}/Packages/{packageId}/versionmetricsbatch | 


# **artifactDetailsGetBadge**
> string artifactDetailsGetBadge($organization, $feedId, $packageId, $project, $apiVersion)



Generate a SVG badge for the latest version of a package.  The generated SVG is typically used as the image in an HTML link which takes users to the feed containing the package to accelerate discovery and consumption.  The project parameter must be supplied if the feed was created in a project. If the feed is not associated with any project, omit the project parameter from the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Artifacts\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Artifacts\Api\ArtifactDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$feedId = "feedId_example"; // string | Name or Id of the feed.
$packageId = "packageId_example"; // string | Id of the package (GUID Id, not name).
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->artifactDetailsGetBadge($organization, $feedId, $packageId, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArtifactDetailsApi->artifactDetailsGetBadge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **feedId** | **string**| Name or Id of the feed. |
 **packageId** | [**string**](../Model/.md)| Id of the package (GUID Id, not name). |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

**string**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: image/svg+xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **artifactDetailsGetPackage**
> \FrankHouweling\AzureDevOpsClient\Artifacts\Model\Package artifactDetailsGetPackage($organization, $feedId, $packageId, $project, $apiVersion, $includeAllVersions, $includeUrls, $isListed, $isRelease, $includeDeleted, $includeDescription)



Get details about a specific package.  The project parameter must be supplied if the feed was created in a project. If the feed is not associated with any project, omit the project parameter from the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Artifacts\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Artifacts\Api\ArtifactDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$feedId = "feedId_example"; // string | Name or Id of the feed.
$packageId = "packageId_example"; // string | The package Id (GUID Id, not the package name).
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$includeAllVersions = true; // bool | True to return all versions of the package in the response. Default is false (latest version only).
$includeUrls = true; // bool | True to return REST Urls with the response. Default is True.
$isListed = true; // bool | Only applicable for NuGet packages, setting it for other package types will result in a 404. If false, delisted package versions will be returned. Use this to filter the response when includeAllVersions is set to true. Default is unset (do not return delisted packages).
$isRelease = true; // bool | Only applicable for Nuget packages. Use this to filter the response when includeAllVersions is set to true.  Default is True (only return packages without prerelease versioning).
$includeDeleted = true; // bool | Return deleted or unpublished versions of packages in the response. Default is False.
$includeDescription = true; // bool | Return the description for every version of each package in the response. Default is False.

try {
    $result = $apiInstance->artifactDetailsGetPackage($organization, $feedId, $packageId, $project, $apiVersion, $includeAllVersions, $includeUrls, $isListed, $isRelease, $includeDeleted, $includeDescription);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArtifactDetailsApi->artifactDetailsGetPackage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **feedId** | **string**| Name or Id of the feed. |
 **packageId** | **string**| The package Id (GUID Id, not the package name). |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **includeAllVersions** | **bool**| True to return all versions of the package in the response. Default is false (latest version only). | [optional]
 **includeUrls** | **bool**| True to return REST Urls with the response. Default is True. | [optional]
 **isListed** | **bool**| Only applicable for NuGet packages, setting it for other package types will result in a 404. If false, delisted package versions will be returned. Use this to filter the response when includeAllVersions is set to true. Default is unset (do not return delisted packages). | [optional]
 **isRelease** | **bool**| Only applicable for Nuget packages. Use this to filter the response when includeAllVersions is set to true.  Default is True (only return packages without prerelease versioning). | [optional]
 **includeDeleted** | **bool**| Return deleted or unpublished versions of packages in the response. Default is False. | [optional]
 **includeDescription** | **bool**| Return the description for every version of each package in the response. Default is False. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\Package**](../Model/Package.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **artifactDetailsGetPackageVersion**
> \FrankHouweling\AzureDevOpsClient\Artifacts\Model\PackageVersion artifactDetailsGetPackageVersion($organization, $feedId, $packageId, $packageVersionId, $project, $apiVersion, $includeUrls, $isListed, $isDeleted)



Get details about a specific package version.  The project parameter must be supplied if the feed was created in a project. If the feed is not associated with any project, omit the project parameter from the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Artifacts\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Artifacts\Api\ArtifactDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$feedId = "feedId_example"; // string | Name or Id of the feed.
$packageId = "packageId_example"; // string | Id of the package (GUID Id, not name).
$packageVersionId = "packageVersionId_example"; // string | Id of the package version (GUID Id, not name).
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$includeUrls = true; // bool | True to include urls for each version. Default is true.
$isListed = true; // bool | Only applicable for NuGet packages. If false, delisted package versions will be returned.
$isDeleted = true; // bool | This does not have any effect on the requested package version, for other versions returned specifies whether to return only deleted or non-deleted versions of packages in the response. Default is unset (return all versions).

try {
    $result = $apiInstance->artifactDetailsGetPackageVersion($organization, $feedId, $packageId, $packageVersionId, $project, $apiVersion, $includeUrls, $isListed, $isDeleted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArtifactDetailsApi->artifactDetailsGetPackageVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **feedId** | **string**| Name or Id of the feed. |
 **packageId** | **string**| Id of the package (GUID Id, not name). |
 **packageVersionId** | **string**| Id of the package version (GUID Id, not name). |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **includeUrls** | **bool**| True to include urls for each version. Default is true. | [optional]
 **isListed** | **bool**| Only applicable for NuGet packages. If false, delisted package versions will be returned. | [optional]
 **isDeleted** | **bool**| This does not have any effect on the requested package version, for other versions returned specifies whether to return only deleted or non-deleted versions of packages in the response. Default is unset (return all versions). | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\PackageVersion**](../Model/PackageVersion.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **artifactDetailsGetPackageVersionProvenance**
> \FrankHouweling\AzureDevOpsClient\Artifacts\Model\PackageVersionProvenance artifactDetailsGetPackageVersionProvenance($organization, $feedId, $packageId, $packageVersionId, $project, $apiVersion)



Gets provenance for a package version.  The project parameter must be supplied if the feed was created in a project. If the feed is not associated with any project, omit the project parameter from the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Artifacts\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Artifacts\Api\ArtifactDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$feedId = "feedId_example"; // string | Name or Id of the feed.
$packageId = "packageId_example"; // string | Id of the package (GUID Id, not name).
$packageVersionId = "packageVersionId_example"; // string | Id of the package version (GUID Id, not name).
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->artifactDetailsGetPackageVersionProvenance($organization, $feedId, $packageId, $packageVersionId, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArtifactDetailsApi->artifactDetailsGetPackageVersionProvenance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **feedId** | **string**| Name or Id of the feed. |
 **packageId** | [**string**](../Model/.md)| Id of the package (GUID Id, not name). |
 **packageVersionId** | [**string**](../Model/.md)| Id of the package version (GUID Id, not name). |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\PackageVersionProvenance**](../Model/PackageVersionProvenance.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **artifactDetailsGetPackageVersions**
> \FrankHouweling\AzureDevOpsClient\Artifacts\Model\PackageVersion[] artifactDetailsGetPackageVersions($organization, $feedId, $packageId, $project, $apiVersion, $includeUrls, $isListed, $isDeleted)



Get a list of package versions, optionally filtering by state.  The project parameter must be supplied if the feed was created in a project. If the feed is not associated with any project, omit the project parameter from the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Artifacts\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Artifacts\Api\ArtifactDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$feedId = "feedId_example"; // string | Name or Id of the feed.
$packageId = "packageId_example"; // string | Id of the package (GUID Id, not name).
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$includeUrls = true; // bool | True to include urls for each version. Default is true.
$isListed = true; // bool | Only applicable for NuGet packages. If false, delisted package versions will be returned.
$isDeleted = true; // bool | If set specifies whether to return only deleted or non-deleted versions of packages in the response. Default is unset (return all versions).

try {
    $result = $apiInstance->artifactDetailsGetPackageVersions($organization, $feedId, $packageId, $project, $apiVersion, $includeUrls, $isListed, $isDeleted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArtifactDetailsApi->artifactDetailsGetPackageVersions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **feedId** | **string**| Name or Id of the feed. |
 **packageId** | **string**| Id of the package (GUID Id, not name). |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **includeUrls** | **bool**| True to include urls for each version. Default is true. | [optional]
 **isListed** | **bool**| Only applicable for NuGet packages. If false, delisted package versions will be returned. | [optional]
 **isDeleted** | **bool**| If set specifies whether to return only deleted or non-deleted versions of packages in the response. Default is unset (return all versions). | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\PackageVersion[]**](../Model/PackageVersion.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **artifactDetailsGetPackages**
> \FrankHouweling\AzureDevOpsClient\Artifacts\Model\Package[] artifactDetailsGetPackages($organization, $feedId, $project, $apiVersion, $protocolType, $packageNameQuery, $normalizedPackageName, $includeUrls, $includeAllVersions, $isListed, $getTopPackageVersions, $isRelease, $includeDescription, $top, $skip, $includeDeleted, $isCached, $directUpstreamId)



Get details about all of the packages in the feed. Use the various filters to include or exclude information from the result set.  The project parameter must be supplied if the feed was created in a project. If the feed is not associated with any project, omit the project parameter from the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Artifacts\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Artifacts\Api\ArtifactDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$feedId = "feedId_example"; // string | Name or Id of the feed.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$protocolType = "protocolType_example"; // string | One of the supported artifact package types.
$packageNameQuery = "packageNameQuery_example"; // string | Filter to packages that contain the provided string. Characters in the string must conform to the package name constraints.
$normalizedPackageName = "normalizedPackageName_example"; // string | [Obsolete] Used for legacy scenarios and may be removed in future versions.
$includeUrls = true; // bool | True to return REST Urls with the response. Default is True.
$includeAllVersions = true; // bool | True to return all versions of the package in the response. Default is false (latest version only).
$isListed = true; // bool | Only applicable for NuGet packages, setting it for other package types will result in a 404. If false, delisted package versions will be returned. Use this to filter the response when includeAllVersions is set to true. Default is unset (do not return delisted packages).
$getTopPackageVersions = true; // bool | Changes the behavior of $top and $skip to return all versions of each package up to $top. Must be used in conjunction with includeAllVersions=true
$isRelease = true; // bool | Only applicable for Nuget packages. Use this to filter the response when includeAllVersions is set to true. Default is True (only return packages without prerelease versioning).
$includeDescription = true; // bool | Return the description for every version of each package in the response. Default is False.
$top = 56; // int | Get the top N packages (or package versions where getTopPackageVersions=true)
$skip = 56; // int | Skip the first N packages (or package versions where getTopPackageVersions=true)
$includeDeleted = true; // bool | Return deleted or unpublished versions of packages in the response. Default is False.
$isCached = true; // bool | [Obsolete] Used for legacy scenarios and may be removed in future versions.
$directUpstreamId = "directUpstreamId_example"; // string | Filter results to return packages from a specific upstream.

try {
    $result = $apiInstance->artifactDetailsGetPackages($organization, $feedId, $project, $apiVersion, $protocolType, $packageNameQuery, $normalizedPackageName, $includeUrls, $includeAllVersions, $isListed, $getTopPackageVersions, $isRelease, $includeDescription, $top, $skip, $includeDeleted, $isCached, $directUpstreamId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArtifactDetailsApi->artifactDetailsGetPackages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **feedId** | **string**| Name or Id of the feed. |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **protocolType** | **string**| One of the supported artifact package types. | [optional]
 **packageNameQuery** | **string**| Filter to packages that contain the provided string. Characters in the string must conform to the package name constraints. | [optional]
 **normalizedPackageName** | **string**| [Obsolete] Used for legacy scenarios and may be removed in future versions. | [optional]
 **includeUrls** | **bool**| True to return REST Urls with the response. Default is True. | [optional]
 **includeAllVersions** | **bool**| True to return all versions of the package in the response. Default is false (latest version only). | [optional]
 **isListed** | **bool**| Only applicable for NuGet packages, setting it for other package types will result in a 404. If false, delisted package versions will be returned. Use this to filter the response when includeAllVersions is set to true. Default is unset (do not return delisted packages). | [optional]
 **getTopPackageVersions** | **bool**| Changes the behavior of $top and $skip to return all versions of each package up to $top. Must be used in conjunction with includeAllVersions&#x3D;true | [optional]
 **isRelease** | **bool**| Only applicable for Nuget packages. Use this to filter the response when includeAllVersions is set to true. Default is True (only return packages without prerelease versioning). | [optional]
 **includeDescription** | **bool**| Return the description for every version of each package in the response. Default is False. | [optional]
 **top** | **int**| Get the top N packages (or package versions where getTopPackageVersions&#x3D;true) | [optional]
 **skip** | **int**| Skip the first N packages (or package versions where getTopPackageVersions&#x3D;true) | [optional]
 **includeDeleted** | **bool**| Return deleted or unpublished versions of packages in the response. Default is False. | [optional]
 **isCached** | **bool**| [Obsolete] Used for legacy scenarios and may be removed in future versions. | [optional]
 **directUpstreamId** | [**string**](../Model/.md)| Filter results to return packages from a specific upstream. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\Package[]**](../Model/Package.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **artifactDetailsQueryPackageMetrics**
> \FrankHouweling\AzureDevOpsClient\Artifacts\Model\PackageMetrics[] artifactDetailsQueryPackageMetrics($organization, $body, $feedId, $project, $apiVersion)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Artifacts\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Artifacts\Api\ArtifactDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Artifacts\Model\PackageMetricsQuery(); // \FrankHouweling\AzureDevOpsClient\Artifacts\Model\PackageMetricsQuery | 
$feedId = "feedId_example"; // string | 
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->artifactDetailsQueryPackageMetrics($organization, $body, $feedId, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArtifactDetailsApi->artifactDetailsQueryPackageMetrics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\PackageMetricsQuery**](../Model/PackageMetricsQuery.md)|  |
 **feedId** | **string**|  |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\PackageMetrics[]**](../Model/PackageMetrics.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **artifactDetailsQueryPackageVersionMetrics**
> \FrankHouweling\AzureDevOpsClient\Artifacts\Model\PackageVersionMetrics[] artifactDetailsQueryPackageVersionMetrics($organization, $body, $feedId, $packageId, $project, $apiVersion)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Artifacts\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Artifacts\Api\ArtifactDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Artifacts\Model\PackageVersionMetricsQuery(); // \FrankHouweling\AzureDevOpsClient\Artifacts\Model\PackageVersionMetricsQuery | 
$feedId = "feedId_example"; // string | 
$packageId = "packageId_example"; // string | 
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->artifactDetailsQueryPackageVersionMetrics($organization, $body, $feedId, $packageId, $project, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArtifactDetailsApi->artifactDetailsQueryPackageVersionMetrics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\PackageVersionMetricsQuery**](../Model/PackageVersionMetricsQuery.md)|  |
 **feedId** | **string**|  |
 **packageId** | [**string**](../Model/.md)|  |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\PackageVersionMetrics[]**](../Model/PackageVersionMetrics.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

