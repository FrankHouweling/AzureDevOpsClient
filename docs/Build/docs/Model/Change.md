# Change

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**author** | [**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\IdentityRef**](IdentityRef.md) | The author of the change. | [optional] 
**displayUri** | **string** | The location of a user-friendly representation of the resource. | [optional] 
**id** | **string** | The identifier for the change. For a commit, this would be the SHA1. For a TFVC changeset, this would be the changeset ID. | [optional] 
**location** | **string** | The location of the full representation of the resource. | [optional] 
**message** | **string** | The description of the change. This might be a commit message or changeset description. | [optional] 
**messageTruncated** | **bool** | Indicates whether the message was truncated. | [optional] 
**pusher** | **string** | The person or process that pushed the change. | [optional] 
**timestamp** | [**\DateTime**](\DateTime.md) | The timestamp for the change. | [optional] 
**type** | **string** | The type of change. \&quot;commit\&quot;, \&quot;changeset\&quot;, etc. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


