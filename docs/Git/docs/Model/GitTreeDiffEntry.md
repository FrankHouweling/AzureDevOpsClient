# GitTreeDiffEntry

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**baseObjectId** | **string** | SHA1 hash of the object in the base tree, if it exists. Will be null in case of adds. | [optional] 
**changeType** | **string** | Type of change that affected this entry. | [optional] 
**objectType** | **string** | Object type of the tree entry. Blob, Tree or Commit(\&quot;submodule\&quot;) | [optional] 
**path** | **string** | Relative path in base and target trees. | [optional] 
**targetObjectId** | **string** | SHA1 hash of the object in the target tree, if it exists. Will be null in case of deletes. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


