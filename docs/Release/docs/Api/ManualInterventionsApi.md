# FrankHouweling\AzureDevOpsClient\Release\ManualInterventionsApi

All URIs are relative to *https://vsrm.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**manualInterventionsGet**](ManualInterventionsApi.md#manualInterventionsGet) | **GET** /{organization}/{project}/_apis/Release/releases/{releaseId}/manualinterventions/{manualInterventionId} | 
[**manualInterventionsList**](ManualInterventionsApi.md#manualInterventionsList) | **GET** /{organization}/{project}/_apis/Release/releases/{releaseId}/manualinterventions | 
[**manualInterventionsUpdate**](ManualInterventionsApi.md#manualInterventionsUpdate) | **PATCH** /{organization}/{project}/_apis/Release/releases/{releaseId}/manualinterventions/{manualInterventionId} | 


# **manualInterventionsGet**
> \FrankHouweling\AzureDevOpsClient\Release\Model\ManualIntervention manualInterventionsGet($organization, $project, $releaseId, $manualInterventionId, $apiVersion)



Get manual intervention for a given release and manual intervention id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Release\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Release\Api\ManualInterventionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$releaseId = 56; // int | Id of the release.
$manualInterventionId = 56; // int | Id of the manual intervention.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->manualInterventionsGet($organization, $project, $releaseId, $manualInterventionId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManualInterventionsApi->manualInterventionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **releaseId** | **int**| Id of the release. |
 **manualInterventionId** | **int**| Id of the manual intervention. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Release\Model\ManualIntervention**](../Model/ManualIntervention.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **manualInterventionsList**
> \FrankHouweling\AzureDevOpsClient\Release\Model\ManualIntervention[] manualInterventionsList($organization, $project, $releaseId, $apiVersion)



List all manual interventions for a given release.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Release\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Release\Api\ManualInterventionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$releaseId = 56; // int | Id of the release.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->manualInterventionsList($organization, $project, $releaseId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManualInterventionsApi->manualInterventionsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **releaseId** | **int**| Id of the release. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Release\Model\ManualIntervention[]**](../Model/ManualIntervention.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **manualInterventionsUpdate**
> \FrankHouweling\AzureDevOpsClient\Release\Model\ManualIntervention manualInterventionsUpdate($organization, $body, $project, $releaseId, $manualInterventionId, $apiVersion)



Update manual intervention.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Release\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Release\Api\ManualInterventionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Release\Model\ManualInterventionUpdateMetadata(); // \FrankHouweling\AzureDevOpsClient\Release\Model\ManualInterventionUpdateMetadata | Meta data to update manual intervention.
$project = "project_example"; // string | Project ID or project name
$releaseId = 56; // int | Id of the release.
$manualInterventionId = 56; // int | Id of the manual intervention.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->manualInterventionsUpdate($organization, $body, $project, $releaseId, $manualInterventionId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManualInterventionsApi->manualInterventionsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\ManualInterventionUpdateMetadata**](../Model/ManualInterventionUpdateMetadata.md)| Meta data to update manual intervention. |
 **project** | **string**| Project ID or project name |
 **releaseId** | **int**| Id of the release. |
 **manualInterventionId** | **int**| Id of the manual intervention. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Release\Model\ManualIntervention**](../Model/ManualIntervention.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

