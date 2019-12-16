# FrankHouweling\AzureDevOpsClient\Wit\WiqlApi

All URIs are relative to *https://dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**wiqlGet**](WiqlApi.md#wiqlGet) | **HEAD** /{organization}/{project}/{team}/_apis/wit/wiql/{id} | 
[**wiqlQueryById**](WiqlApi.md#wiqlQueryById) | **GET** /{organization}/{project}/{team}/_apis/wit/wiql/{id} | 
[**wiqlQueryByWiql**](WiqlApi.md#wiqlQueryByWiql) | **POST** /{organization}/{project}/{team}/_apis/wit/wiql | 


# **wiqlGet**
> int wiqlGet($organization, $id, $project, $team, $apiVersion, $timePrecision, $top)



Gets the results of the query given the query ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: accessToken
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\WiqlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$id = "id_example"; // string | The query ID.
$project = "project_example"; // string | Project ID or project name
$team = "team_example"; // string | Team ID or team name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.
$timePrecision = true; // bool | Whether or not to use time precision.
$top = 56; // int | The max number of results to return.

try {
    $result = $apiInstance->wiqlGet($organization, $id, $project, $team, $apiVersion, $timePrecision, $top);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WiqlApi->wiqlGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **id** | [**string**](../Model/.md)| The query ID. |
 **project** | **string**| Project ID or project name |
 **team** | **string**| Team ID or team name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |
 **timePrecision** | **bool**| Whether or not to use time precision. | [optional]
 **top** | **int**| The max number of results to return. | [optional]

### Return type

**int**

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **wiqlQueryById**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemQueryResult wiqlQueryById($organization, $id, $project, $team, $apiVersion, $timePrecision, $top)



Gets the results of the query given the query ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\WiqlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$id = "id_example"; // string | The query ID.
$project = "project_example"; // string | Project ID or project name
$team = "team_example"; // string | Team ID or team name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.
$timePrecision = true; // bool | Whether or not to use time precision.
$top = 56; // int | The max number of results to return.

try {
    $result = $apiInstance->wiqlQueryById($organization, $id, $project, $team, $apiVersion, $timePrecision, $top);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WiqlApi->wiqlQueryById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **id** | [**string**](../Model/.md)| The query ID. |
 **project** | **string**| Project ID or project name |
 **team** | **string**| Team ID or team name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |
 **timePrecision** | **bool**| Whether or not to use time precision. | [optional]
 **top** | **int**| The max number of results to return. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemQueryResult**](../Model/WorkItemQueryResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **wiqlQueryByWiql**
> \FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemQueryResult wiqlQueryByWiql($organization, $body, $project, $team, $apiVersion, $timePrecision, $top)



Gets the results of the query given its WIQL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = FrankHouweling\AzureDevOpsClient\Wit\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new FrankHouweling\AzureDevOpsClient\Wit\Api\WiqlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \FrankHouweling\AzureDevOpsClient\Wit\Model\Wiql(); // \FrankHouweling\AzureDevOpsClient\Wit\Model\Wiql | The query containing the WIQL.
$project = "project_example"; // string | Project ID or project name
$team = "team_example"; // string | Team ID or team name
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.2' to use this version of the api.
$timePrecision = true; // bool | Whether or not to use time precision.
$top = 56; // int | The max number of results to return.

try {
    $result = $apiInstance->wiqlQueryByWiql($organization, $body, $project, $team, $apiVersion, $timePrecision, $top);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WiqlApi->wiqlQueryByWiql: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\FrankHouweling\AzureDevOpsClient\Wit\Model\Wiql**](../Model/Wiql.md)| The query containing the WIQL. |
 **project** | **string**| Project ID or project name |
 **team** | **string**| Team ID or team name |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.2&#39; to use this version of the api. |
 **timePrecision** | **bool**| Whether or not to use time precision. | [optional]
 **top** | **int**| The max number of results to return. | [optional]

### Return type

[**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemQueryResult**](../Model/WorkItemQueryResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

