# FrankHouweling\AzureDevOpsClient\Artifacts\RecycleBinApi

All URIs are relative to *https://feeds.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**recycleBinGetRecycleBinPackage**](RecycleBinApi.md#recycleBinGetRecycleBinPackage) | **GET** /{organization}/{project}/_apis/packaging/Feeds/{feedId}/RecycleBin/Packages/{packageId} | 
[**recycleBinGetRecycleBinPackageVersion**](RecycleBinApi.md#recycleBinGetRecycleBinPackageVersion) | **GET** /{organization}/{project}/_apis/packaging/Feeds/{feedId}/RecycleBin/Packages/{packageId}/Versions/{packageVersionId} | 
[**recycleBinGetRecycleBinPackageVersions**](RecycleBinApi.md#recycleBinGetRecycleBinPackageVersions) | **GET** /{organization}/{project}/_apis/packaging/Feeds/{feedId}/RecycleBin/Packages/{packageId}/Versions | 
[**recycleBinGetRecycleBinPackages**](RecycleBinApi.md#recycleBinGetRecycleBinPackages) | **GET** /{organization}/{project}/_apis/packaging/Feeds/{feedId}/RecycleBin/Packages | 


# **recycleBinGetRecycleBinPackage**
> \FrankHouweling\AzureDevOpsClient\Artifacts\Model\Package recycleBinGetRecycleBinPackage($organization, $feedId, $packageId, $project, $apiVersion, $includeUrls)



Get information about a package and all its versions within the recycle bin.  The project parameter must be supplied if the feed was created in a project. If the feed is not associated with any project, omit the project parameter from the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Artifacts\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Artifacts\Api\RecycleBinApi(
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
$includeUrls = true; // bool | True to return REST Urls with the response.  Default is True.

try {
    $result = $apiInstance->recycleBinGetRecycleBinPackage($organization, $feedId, $packageId, $project, $apiVersion, $includeUrls);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecycleBinApi->recycleBinGetRecycleBinPackage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **feedId** | **string**| Name or Id of the feed. |
 **packageId** | [**string**](../Model/.md)| The package Id (GUID Id, not the package name). |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **includeUrls** | **bool**| True to return REST Urls with the response.  Default is True. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\Package**](../Model/Package.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recycleBinGetRecycleBinPackageVersion**
> \FrankHouweling\AzureDevOpsClient\Artifacts\Model\RecycleBinPackageVersion recycleBinGetRecycleBinPackageVersion($organization, $feedId, $packageId, $packageVersionId, $project, $apiVersion, $includeUrls)



Get information about a package version within the recycle bin.  The project parameter must be supplied if the feed was created in a project. If the feed is not associated with any project, omit the project parameter from the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Artifacts\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Artifacts\Api\RecycleBinApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$feedId = "feedId_example"; // string | Name or Id of the feed.
$packageId = "packageId_example"; // string | The package Id (GUID Id, not the package name).
$packageVersionId = "packageVersionId_example"; // string | The package version Id 9guid Id, not the version string).
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$includeUrls = true; // bool | True to return REST Urls with the response.  Default is True.

try {
    $result = $apiInstance->recycleBinGetRecycleBinPackageVersion($organization, $feedId, $packageId, $packageVersionId, $project, $apiVersion, $includeUrls);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecycleBinApi->recycleBinGetRecycleBinPackageVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **feedId** | **string**| Name or Id of the feed. |
 **packageId** | [**string**](../Model/.md)| The package Id (GUID Id, not the package name). |
 **packageVersionId** | [**string**](../Model/.md)| The package version Id 9guid Id, not the version string). |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **includeUrls** | **bool**| True to return REST Urls with the response.  Default is True. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\RecycleBinPackageVersion**](../Model/RecycleBinPackageVersion.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recycleBinGetRecycleBinPackageVersions**
> \FrankHouweling\AzureDevOpsClient\Artifacts\Model\RecycleBinPackageVersion[] recycleBinGetRecycleBinPackageVersions($organization, $feedId, $packageId, $project, $apiVersion, $includeUrls)



Get a list of package versions within the recycle bin.  The project parameter must be supplied if the feed was created in a project. If the feed is not associated with any project, omit the project parameter from the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Artifacts\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Artifacts\Api\RecycleBinApi(
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
$includeUrls = true; // bool | True to return REST Urls with the response.  Default is True.

try {
    $result = $apiInstance->recycleBinGetRecycleBinPackageVersions($organization, $feedId, $packageId, $project, $apiVersion, $includeUrls);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecycleBinApi->recycleBinGetRecycleBinPackageVersions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **feedId** | **string**| Name or Id of the feed. |
 **packageId** | [**string**](../Model/.md)| The package Id (GUID Id, not the package name). |
 **project** | **string**| Project ID or project name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **includeUrls** | **bool**| True to return REST Urls with the response.  Default is True. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\RecycleBinPackageVersion[]**](../Model/RecycleBinPackageVersion.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recycleBinGetRecycleBinPackages**
> \FrankHouweling\AzureDevOpsClient\Artifacts\Model\Package[] recycleBinGetRecycleBinPackages($organization, $feedId, $project, $apiVersion, $protocolType, $packageNameQuery, $includeUrls, $top, $skip, $includeAllVersions)



Query for packages within the recycle bin.  The project parameter must be supplied if the feed was created in a project. If the feed is not associated with any project, omit the project parameter from the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Artifacts\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Artifacts\Api\RecycleBinApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$feedId = "feedId_example"; // string | Name or Id of the feed.
$project = "project_example"; // string | Project ID or project name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$protocolType = "protocolType_example"; // string | Type of package (e.g. NuGet, npm, ...).
$packageNameQuery = "packageNameQuery_example"; // string | Filter to packages matching this name.
$includeUrls = true; // bool | True to return REST Urls with the response.  Default is True.
$top = 56; // int | Get the top N packages.
$skip = 56; // int | Skip the first N packages.
$includeAllVersions = true; // bool | True to return all versions of the package in the response.  Default is false (latest version only).

try {
    $result = $apiInstance->recycleBinGetRecycleBinPackages($organization, $feedId, $project, $apiVersion, $protocolType, $packageNameQuery, $includeUrls, $top, $skip, $includeAllVersions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecycleBinApi->recycleBinGetRecycleBinPackages: ', $e->getMessage(), PHP_EOL;
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
 **protocolType** | **string**| Type of package (e.g. NuGet, npm, ...). | [optional]
 **packageNameQuery** | **string**| Filter to packages matching this name. | [optional]
 **includeUrls** | **bool**| True to return REST Urls with the response.  Default is True. | [optional]
 **top** | **int**| Get the top N packages. | [optional]
 **skip** | **int**| Skip the first N packages. | [optional]
 **includeAllVersions** | **bool**| True to return all versions of the package in the response.  Default is false (latest version only). | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\Package[]**](../Model/Package.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

