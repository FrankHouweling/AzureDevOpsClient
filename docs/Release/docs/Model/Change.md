# Change

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**author** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\IdentityRef**](IdentityRef.md) | The author of the change. | [optional] 
**changeType** | **string** | The type of source. \&quot;TfsVersionControl\&quot;, \&quot;TfsGit\&quot;, etc. | [optional] 
**displayUri** | **string** | The location of a user-friendly representation of the resource. | [optional] 
**id** | **string** | Something that identifies the change. For a commit, this would be the SHA1. For a TFVC changeset, this would be the changeset id. | [optional] 
**location** | **string** | The location of the full representation of the resource. | [optional] 
**message** | **string** | A description of the change. This might be a commit message or changeset description. | [optional] 
**pushedBy** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\IdentityRef**](IdentityRef.md) | The person or process that pushed the change. | [optional] 
**timestamp** | [**\DateTime**](\DateTime.md) | A timestamp for the change. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


