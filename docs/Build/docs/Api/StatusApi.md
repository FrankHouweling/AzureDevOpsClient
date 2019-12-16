# AzureDevOpsClient\Build\StatusApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**statusGet**](StatusApi.md#statusGet) | **GET** /{organization}/{project}/_apis/build/status/{definition} | 


# **statusGet**
> string statusGet($organization, $project, $definition, $apiVersion, $branchName, $stageName, $jobName, $configuration, $label)



<p>Gets the build status for a definition, optionally scoped to a specific branch, stage, job, and configuration.</p> <p>If there are more than one, then it is required to pass in a stageName value when specifying a jobName, and the same rule then applies for both if passing a configuration parameter.</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = AzureDevOpsClient\Build\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new AzureDevOpsClient\Build\Api\StatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$definition = "definition_example"; // string | Either the definition name with optional leading folder path, or the definition id.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$branchName = "branchName_example"; // string | Only consider the most recent build for this branch.
$stageName = "stageName_example"; // string | Use this stage within the pipeline to render the status.
$jobName = "jobName_example"; // string | Use this job within a stage of the pipeline to render the status.
$configuration = "configuration_example"; // string | Use this job configuration to render the status
$label = "label_example"; // string | Replaces the default text on the left side of the badge.

try {
    $result = $apiInstance->statusGet($organization, $project, $definition, $apiVersion, $branchName, $stageName, $jobName, $configuration, $label);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusApi->statusGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **definition** | **string**| Either the definition name with optional leading folder path, or the definition id. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **branchName** | **string**| Only consider the most recent build for this branch. | [optional]
 **stageName** | **string**| Use this stage within the pipeline to render the status. | [optional]
 **jobName** | **string**| Use this job within a stage of the pipeline to render the status. | [optional]
 **configuration** | **string**| Use this job configuration to render the status | [optional]
 **label** | **string**| Replaces the default text on the left side of the badge. | [optional]

### Return type

**string**

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

