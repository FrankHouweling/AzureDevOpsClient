# AzureDevOpsClient\TokenAdmin\RevocationRulesApi

All URIs are relative to *https://vssps.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**revocationRulesCreate**](RevocationRulesApi.md#revocationRulesCreate) | **POST** /{organization}/_apis/tokenadmin/revocationrules | 


# **revocationRulesCreate**
> revocationRulesCreate($organization, $body, $apiVersion)



Creates a revocation rule to prevent the further usage of any OAuth authorizations that were created before the current point in time and which match the conditions in the rule.  Not all kinds of OAuth authorizations can be revoked directly. Some, such as self-describing session tokens, must instead by revoked by creating a rule which will be evaluated and used to reject matching OAuth credentials at authentication time. Revocation rules created through this endpoint will apply to all credentials that were issued before the datetime at which the rule was created and which match one or more additional conditions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\TokenAdmin\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\TokenAdmin\Api\RevocationRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\TokenAdmin\AzureDevOpsClient\TokenAdmin\Model\TokenAdminRevocationRule(); // \AzureDevOpsClient\TokenAdmin\AzureDevOpsClient\TokenAdmin\Model\TokenAdminRevocationRule | The revocation rule to create. The rule must specify a space-separated list of scopes, after which preexisting OAuth authorizations that match that any of the scopes will be rejected. For a list of all OAuth scopes supported by VSTS, see: https://docs.microsoft.com/en-us/vsts/integrate/get-started/authentication/oauth?view=vsts#scopes The rule may also specify the time before which to revoke tokens.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $apiInstance->revocationRulesCreate($organization, $body, $apiVersion);
} catch (Exception $e) {
    echo 'Exception when calling RevocationRulesApi->revocationRulesCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\TokenAdmin\AzureDevOpsClient\TokenAdmin\Model\TokenAdminRevocationRule**](../Model/TokenAdminRevocationRule.md)| The revocation rule to create. The rule must specify a space-separated list of scopes, after which preexisting OAuth authorizations that match that any of the scopes will be rejected. For a list of all OAuth scopes supported by VSTS, see: https://docs.microsoft.com/en-us/vsts/integrate/get-started/authentication/oauth?view&#x3D;vsts#scopes The rule may also specify the time before which to revoke tokens. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

