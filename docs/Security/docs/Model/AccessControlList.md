# AccessControlList

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**acesDictionary** | [**map[string,\AzureDevOpsClient\Security\AzureDevOpsClient\Security\Model\AccessControlEntry]**](AccessControlEntry.md) | Storage of permissions keyed on the identity the permission is for. | [optional] 
**includeExtendedInfo** | **bool** | True if this ACL holds ACEs that have extended information. | [optional] 
**inheritPermissions** | **bool** | True if the given token inherits permissions from parents. | [optional] 
**token** | **string** | The token that this AccessControlList is for. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


