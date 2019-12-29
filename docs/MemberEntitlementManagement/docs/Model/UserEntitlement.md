# UserEntitlement

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accessLevel** | [**\FrankHouweling\AzureDevOpsClient\MemberEntitlementManagement\Model\AccessLevel**](AccessLevel.md) | User&#39;s access level denoted by a license. | [optional] 
**dateCreated** | [**\DateTime**](\DateTime.md) | [Readonly] Date the user was added to the collection. | [optional] 
**groupAssignments** | [**\FrankHouweling\AzureDevOpsClient\MemberEntitlementManagement\Model\GroupEntitlement[]**](GroupEntitlement.md) | [Readonly] GroupEntitlements that this user belongs to. | [optional] 
**id** | **string** | The unique identifier which matches the Id of the Identity associated with the GraphMember. | [optional] 
**lastAccessedDate** | [**\DateTime**](\DateTime.md) | [Readonly] Date the user last accessed the collection. | [optional] 
**projectEntitlements** | [**\FrankHouweling\AzureDevOpsClient\MemberEntitlementManagement\Model\ProjectEntitlement[]**](ProjectEntitlement.md) | Relation between a project and the user&#39;s effective permissions in that project. | [optional] 
**user** | [**\FrankHouweling\AzureDevOpsClient\MemberEntitlementManagement\Model\GraphUser**](GraphUser.md) | User reference. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


