# TfvcItemPreviousHash

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**changeDate** | [**\DateTime**](\DateTime.md) | Item changed datetime. | [optional] 
**deletionId** | **int** | Greater than 0 if item is deleted. | [optional] 
**encoding** | **int** | File encoding from database, -1 represents binary. | [optional] 
**hashValue** | **string** | MD5 hash as a base 64 string, applies to files only. | [optional] 
**isBranch** | **bool** | True if item is a branch. | [optional] 
**isPendingChange** | **bool** | True if there is a change pending. | [optional] 
**size** | **int** | The size of the file, if applicable. | [optional] 
**version** | **int** | Changeset version Id. | [optional] 
**links** | [**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\ReferenceLinks**](ReferenceLinks.md) |  | [optional] 
**content** | **string** |  | [optional] 
**contentMetadata** | [**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\FileContentMetadata**](FileContentMetadata.md) |  | [optional] 
**isFolder** | **bool** |  | [optional] 
**isSymLink** | **bool** |  | [optional] 
**path** | **string** |  | [optional] 
**url** | **string** |  | [optional] 
**previousHashValue** | **string** | MD5 hash as a base 64 string, applies to files only. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


