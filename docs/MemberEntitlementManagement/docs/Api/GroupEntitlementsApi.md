# AzureDevOpsClient\MemberEntitlementManagement\GroupEntitlementsApi

All URIs are relative to *https://vsaex.dev.azure.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**groupEntitlementsAdd**](GroupEntitlementsApi.md#groupEntitlementsAdd) | **POST** /{organization}/_apis/groupentitlements | 
[**groupEntitlementsDelete**](GroupEntitlementsApi.md#groupEntitlementsDelete) | **DELETE** /{organization}/_apis/groupentitlements/{groupId} | 
[**groupEntitlementsGet**](GroupEntitlementsApi.md#groupEntitlementsGet) | **GET** /{organization}/_apis/groupentitlements/{groupId} | 
[**groupEntitlementsList**](GroupEntitlementsApi.md#groupEntitlementsList) | **GET** /{organization}/_apis/groupentitlements | 
[**groupEntitlementsUpdate**](GroupEntitlementsApi.md#groupEntitlementsUpdate) | **PATCH** /{organization}/_apis/groupentitlements/{groupId} | 


# **groupEntitlementsAdd**
> \AzureDevOpsClient\MemberEntitlementManagement\AzureDevOpsClient\MemberEntitlementManagement\Model\GroupEntitlementOperationReference groupEntitlementsAdd($organization, $body, $apiVersion, $ruleOption)



Create a group entitlement with license rule, extension rule.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\MemberEntitlementManagement\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\MemberEntitlementManagement\Api\GroupEntitlementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\MemberEntitlementManagement\AzureDevOpsClient\MemberEntitlementManagement\Model\GroupEntitlement(); // \AzureDevOpsClient\MemberEntitlementManagement\AzureDevOpsClient\MemberEntitlementManagement\Model\GroupEntitlement | GroupEntitlement object specifying License Rule, Extensions Rule for the group. Based on the rules the members of the group will be given licenses and extensions. The Group Entitlement can be used to add the group to another project level groups
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$ruleOption = "ruleOption_example"; // string | RuleOption [ApplyGroupRule/TestApplyGroupRule] - specifies if the rules defined in group entitlement should be created and applied to it’s members (default option) or just be tested

try {
    $result = $apiInstance->groupEntitlementsAdd($organization, $body, $apiVersion, $ruleOption);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupEntitlementsApi->groupEntitlementsAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\MemberEntitlementManagement\AzureDevOpsClient\MemberEntitlementManagement\Model\GroupEntitlement**](../Model/GroupEntitlement.md)| GroupEntitlement object specifying License Rule, Extensions Rule for the group. Based on the rules the members of the group will be given licenses and extensions. The Group Entitlement can be used to add the group to another project level groups |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **ruleOption** | **string**| RuleOption [ApplyGroupRule/TestApplyGroupRule] - specifies if the rules defined in group entitlement should be created and applied to it’s members (default option) or just be tested | [optional]

### Return type

[**\AzureDevOpsClient\MemberEntitlementManagement\AzureDevOpsClient\MemberEntitlementManagement\Model\GroupEntitlementOperationReference**](../Model/GroupEntitlementOperationReference.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupEntitlementsDelete**
> \AzureDevOpsClient\MemberEntitlementManagement\AzureDevOpsClient\MemberEntitlementManagement\Model\GroupEntitlementOperationReference groupEntitlementsDelete($organization, $groupId, $apiVersion, $ruleOption, $removeGroupMembership)



Delete a group entitlement.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\MemberEntitlementManagement\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\MemberEntitlementManagement\Api\GroupEntitlementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$groupId = "groupId_example"; // string | ID of the group to delete.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$ruleOption = "ruleOption_example"; // string | RuleOption [ApplyGroupRule/TestApplyGroupRule] - specifies if the rules defined in group entitlement should be deleted and the changes are applied to it’s members (default option) or just be tested
$removeGroupMembership = true; // bool | Optional parameter that specifies whether the group with the given ID should be removed from all other groups

try {
    $result = $apiInstance->groupEntitlementsDelete($organization, $groupId, $apiVersion, $ruleOption, $removeGroupMembership);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupEntitlementsApi->groupEntitlementsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **groupId** | [**string**](../Model/.md)| ID of the group to delete. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **ruleOption** | **string**| RuleOption [ApplyGroupRule/TestApplyGroupRule] - specifies if the rules defined in group entitlement should be deleted and the changes are applied to it’s members (default option) or just be tested | [optional]
 **removeGroupMembership** | **bool**| Optional parameter that specifies whether the group with the given ID should be removed from all other groups | [optional]

### Return type

[**\AzureDevOpsClient\MemberEntitlementManagement\AzureDevOpsClient\MemberEntitlementManagement\Model\GroupEntitlementOperationReference**](../Model/GroupEntitlementOperationReference.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupEntitlementsGet**
> \AzureDevOpsClient\MemberEntitlementManagement\AzureDevOpsClient\MemberEntitlementManagement\Model\GroupEntitlement groupEntitlementsGet($organization, $groupId, $apiVersion)



Get a group entitlement.  If the group entitlement does not exist, returns null.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\MemberEntitlementManagement\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\MemberEntitlementManagement\Api\GroupEntitlementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$groupId = "groupId_example"; // string | ID of the group.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->groupEntitlementsGet($organization, $groupId, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupEntitlementsApi->groupEntitlementsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **groupId** | [**string**](../Model/.md)| ID of the group. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\MemberEntitlementManagement\AzureDevOpsClient\MemberEntitlementManagement\Model\GroupEntitlement**](../Model/GroupEntitlement.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupEntitlementsList**
> \AzureDevOpsClient\MemberEntitlementManagement\AzureDevOpsClient\MemberEntitlementManagement\Model\GroupEntitlement[] groupEntitlementsList($organization, $apiVersion)



Get the group entitlements for an account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\MemberEntitlementManagement\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\MemberEntitlementManagement\Api\GroupEntitlementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.

try {
    $result = $apiInstance->groupEntitlementsList($organization, $apiVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupEntitlementsApi->groupEntitlementsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |

### Return type

[**\AzureDevOpsClient\MemberEntitlementManagement\AzureDevOpsClient\MemberEntitlementManagement\Model\GroupEntitlement[]**](../Model/GroupEntitlement.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupEntitlementsUpdate**
> \AzureDevOpsClient\MemberEntitlementManagement\AzureDevOpsClient\MemberEntitlementManagement\Model\GroupEntitlementOperationReference groupEntitlementsUpdate($organization, $body, $groupId, $apiVersion, $ruleOption)



Update entitlements (License Rule, Extensions Rule, Project memberships etc.) for a group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = AzureDevOpsClient\MemberEntitlementManagement\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new AzureDevOpsClient\MemberEntitlementManagement\Api\GroupEntitlementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = "organization_example"; // string | The name of the Azure DevOps organization.
$body = new \AzureDevOpsClient\MemberEntitlementManagement\AzureDevOpsClient\MemberEntitlementManagement\Model\JsonPatchDocument(); // \AzureDevOpsClient\MemberEntitlementManagement\AzureDevOpsClient\MemberEntitlementManagement\Model\JsonPatchDocument | JsonPatchDocument containing the operations to perform on the group.
$groupId = "groupId_example"; // string | ID of the group.
$apiVersion = "apiVersion_example"; // string | Version of the API to use.  This should be set to '6.0-preview.1' to use this version of the api.
$ruleOption = "ruleOption_example"; // string | RuleOption [ApplyGroupRule/TestApplyGroupRule] - specifies if the rules defined in group entitlement should be updated and the changes are applied to it’s members (default option) or just be tested

try {
    $result = $apiInstance->groupEntitlementsUpdate($organization, $body, $groupId, $apiVersion, $ruleOption);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupEntitlementsApi->groupEntitlementsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | **string**| The name of the Azure DevOps organization. |
 **body** | [**\AzureDevOpsClient\MemberEntitlementManagement\AzureDevOpsClient\MemberEntitlementManagement\Model\JsonPatchDocument**](../Model/JsonPatchDocument.md)| JsonPatchDocument containing the operations to perform on the group. |
 **groupId** | [**string**](../Model/.md)| ID of the group. |
 **apiVersion** | **string**| Version of the API to use.  This should be set to &#39;6.0-preview.1&#39; to use this version of the api. |
 **ruleOption** | **string**| RuleOption [ApplyGroupRule/TestApplyGroupRule] - specifies if the rules defined in group entitlement should be updated and the changes are applied to it’s members (default option) or just be tested | [optional]

### Return type

[**\AzureDevOpsClient\MemberEntitlementManagement\AzureDevOpsClient\MemberEntitlementManagement\Model\GroupEntitlementOperationReference**](../Model/GroupEntitlementOperationReference.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

