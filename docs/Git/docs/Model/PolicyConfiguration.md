# PolicyConfiguration

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**revision** | **int** | The policy configuration revision ID. | [optional] 
**id** | **int** | The policy configuration ID. | [optional] 
**type** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\PolicyTypeRef**](PolicyTypeRef.md) | The policy configuration type. | [optional] 
**url** | **string** | The URL where the policy configuration can be retrieved. | [optional] 
**links** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\ReferenceLinks**](ReferenceLinks.md) | The links to other objects related to this object. | [optional] 
**createdBy** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\IdentityRef**](IdentityRef.md) | A reference to the identity that created the policy. | [optional] 
**createdDate** | [**\DateTime**](\DateTime.md) | The date and time when the policy was created. | [optional] 
**isBlocking** | **bool** | Indicates whether the policy is blocking. | [optional] 
**isDeleted** | **bool** | Indicates whether the policy has been (soft) deleted. | [optional] 
**isEnabled** | **bool** | Indicates whether the policy is enabled. | [optional] 
**isEnterpriseManaged** | **bool** | If set, this policy requires \&quot;Manage Enterprise Policies\&quot; permission to create, edit, or delete. | [optional] 
**settings** | **string** | The policy configuration settings. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


