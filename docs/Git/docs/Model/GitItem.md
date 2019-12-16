# GitItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\ReferenceLinks**](ReferenceLinks.md) |  | [optional] 
**content** | **string** |  | [optional] 
**contentMetadata** | [**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\FileContentMetadata**](FileContentMetadata.md) |  | [optional] 
**isFolder** | **bool** |  | [optional] 
**isSymLink** | **bool** |  | [optional] 
**path** | **string** |  | [optional] 
**url** | **string** |  | [optional] 
**commitId** | **string** | SHA1 of commit item was fetched at | [optional] 
**gitObjectType** | **string** | Type of object (Commit, Tree, Blob, Tag, ...) | [optional] 
**latestProcessedChange** | [**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitCommitRef**](GitCommitRef.md) | Shallow ref to commit that last changed this item Only populated if latestProcessedChange is requested May not be accurate if latest change is not yet cached | [optional] 
**objectId** | **string** | Git object id | [optional] 
**originalObjectId** | **string** | Git object id | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


