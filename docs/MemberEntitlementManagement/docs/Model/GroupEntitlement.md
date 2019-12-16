# GroupEntitlement

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**group** | [**\AzureDevOpsClient\MemberEntitlementManagement\AzureDevOpsClient\MemberEntitlementManagement\Model\GraphGroup**](GraphGroup.md) | Member reference. | [optional] 
**id** | **string** | The unique identifier which matches the Id of the GraphMember. | [optional] 
**lastExecuted** | [**\DateTime**](\DateTime.md) | [Readonly] The last time the group licensing rule was executed (regardless of whether any changes were made). | [optional] 
**licenseRule** | [**\AzureDevOpsClient\MemberEntitlementManagement\AzureDevOpsClient\MemberEntitlementManagement\Model\AccessLevel**](AccessLevel.md) | License Rule. | [optional] 
**members** | [**\AzureDevOpsClient\MemberEntitlementManagement\AzureDevOpsClient\MemberEntitlementManagement\Model\UserEntitlement[]**](UserEntitlement.md) | Group members. Only used when creating a new group. | [optional] 
**projectEntitlements** | [**\AzureDevOpsClient\MemberEntitlementManagement\AzureDevOpsClient\MemberEntitlementManagement\Model\ProjectEntitlement[]**](ProjectEntitlement.md) | Relation between a project and the member&#39;s effective permissions in that project. | [optional] 
**status** | **string** | The status of the group rule. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


