# FrankHouweling\AzureDevOpsClient\Policy\EvaluationsApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**evaluationsGet**](EvaluationsApi.md#evaluationsGet) | **GET** /{organization}/{project}/_apis/policy/evaluations/{evaluationId} | 
[**evaluationsList**](EvaluationsApi.md#evaluationsList) | **GET** /{organization}/{project}/_apis/policy/evaluations | 
[**evaluationsRequeuePolicyEvaluation**](EvaluationsApi.md#evaluationsRequeuePolicyEvaluation) | **PATCH** /{organization}/{project}/_apis/policy/evaluations/{evaluationId} | 


# **evaluationsGet**
> \FrankHouweling\AzureDevOpsClient\Policy\Model\PolicyEvaluationRecord evaluationsGet($organization, $project, $evaluationId, $apiVersion)



Gets the present evaluation state of a policy.  Each policy which applies to a pull request will have an evaluation state which is specific to that policy running in the context of that pull request. Each evaluation is uniquely identified via a Guid. You can find all the policy evaluations for a specific pull request using the List operation of this controller.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Policy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Policy\Api\EvaluationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$evaluationId = "evaluationId_example"; // string | ID of the policy evaluation to be retrieved.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->evaluationsGet($organization, $project, $evaluationId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationsApi->evaluationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **evaluationId** | [**string**](../Model/.md)| ID of the policy evaluation to be retrieved. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Policy\Model\PolicyEvaluationRecord**](../Model/PolicyEvaluationRecord.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **evaluationsList**
> \FrankHouweling\AzureDevOpsClient\Policy\Model\PolicyEvaluationRecord[] evaluationsList($organization, $project, $artifactId, $apiVersion, $includeNotApplicable, $top, $skip)



Retrieves a list of all the policy evaluation statuses for a specific pull request.  Evaluations are retrieved using an artifact ID which uniquely identifies the pull request. To generate an artifact ID for a pull request, use this template: ``` vstfs:///CodeReview/CodeReviewId/{projectId}/{pullRequestId} ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Policy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Policy\Api\EvaluationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$artifactId = "artifactId_example"; // string | A string which uniquely identifies the target of a policy evaluation.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$includeNotApplicable = true; // bool | Some policies might determine that they do not apply to a specific pull request. Setting this parameter to true will return evaluation records even for policies which don't apply to this pull request.
$top = 56; // int | The number of policy evaluation records to retrieve.
$skip = 56; // int | The number of policy evaluation records to ignore. For example, to retrieve results 101-150, set top to 50 and skip to 100.

try {
    $result = $apiInstance->evaluationsList($organization, $project, $artifactId, $apiVersion, $includeNotApplicable, $top, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationsApi->evaluationsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **artifactId** | **string**| A string which uniquely identifies the target of a policy evaluation. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **includeNotApplicable** | **bool**| Some policies might determine that they do not apply to a specific pull request. Setting this parameter to true will return evaluation records even for policies which don&#39;t apply to this pull request. | [optional]
 **top** | **int**| The number of policy evaluation records to retrieve. | [optional]
 **skip** | **int**| The number of policy evaluation records to ignore. For example, to retrieve results 101-150, set top to 50 and skip to 100. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Policy\Model\PolicyEvaluationRecord[]**](../Model/PolicyEvaluationRecord.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **evaluationsRequeuePolicyEvaluation**
> \FrankHouweling\AzureDevOpsClient\Policy\Model\PolicyEvaluationRecord evaluationsRequeuePolicyEvaluation($organization, $project, $evaluationId, $apiVersion)



Requeue the policy evaluation.  Some policies define a \"requeue\" action which performs some policy-specific operation. You can trigger this operation by updating an existing policy evaluation and setting the PolicyEvaluationRecord.Status field to Queued. Although any policy evaluation can be requeued, at present only build policies perform any action in response. Requeueing a build policy will queue a new build to run (cancelling any existing build which is running).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Policy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Policy\Api\EvaluationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$project = "project_example"; // string | Project ID or project name
$evaluationId = "evaluationId_example"; // string | ID of the policy evaluation to be retrieved.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->evaluationsRequeuePolicyEvaluation($organization, $project, $evaluationId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EvaluationsApi->evaluationsRequeuePolicyEvaluation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **project** | **string**| Project ID or project name |
 **evaluationId** | [**string**](../Model/.md)| ID of the policy evaluation to be retrieved. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\FrankHouweling\AzureDevOpsClient\Policy\Model\PolicyEvaluationRecord**](../Model/PolicyEvaluationRecord.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

