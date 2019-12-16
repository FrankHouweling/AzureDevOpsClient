# GitCommit

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\ReferenceLinks**](ReferenceLinks.md) | A collection of related REST reference links. | [optional] 
**author** | [**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitUserDate**](GitUserDate.md) | Author of the commit. | [optional] 
**changeCounts** | [**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\ChangeCountDictionary**](ChangeCountDictionary.md) | Counts of the types of changes (edits, deletes, etc.) included with the commit. | [optional] 
**changes** | [**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitChange[]**](GitChange.md) | An enumeration of the changes included with the commit. | [optional] 
**comment** | **string** | Comment or message of the commit. | [optional] 
**commentTruncated** | **bool** | Indicates if the comment is truncated from the full Git commit comment message. | [optional] 
**commitId** | **string** | ID (SHA-1) of the commit. | [optional] 
**committer** | [**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitUserDate**](GitUserDate.md) | Committer of the commit. | [optional] 
**parents** | **string[]** | An enumeration of the parent commit IDs for this commit. | [optional] 
**push** | [**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitPushRef**](GitPushRef.md) | The push associated with this commit. | [optional] 
**remoteUrl** | **string** | Remote URL path to the commit. | [optional] 
**statuses** | [**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitStatus[]**](GitStatus.md) | A list of status metadata from services and extensions that may associate additional information to the commit. | [optional] 
**url** | **string** | REST URL for this resource. | [optional] 
**workItems** | [**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\ResourceRef[]**](ResourceRef.md) | A list of workitems associated with this commit. | [optional] 
**treeId** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


