# GitPullRequestChange

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**changeId** | **int** | ID of the change within the group of changes. | [optional] 
**newContentTemplate** | [**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitTemplate**](GitTemplate.md) | New Content template to be used when pushing new changes. | [optional] 
**originalPath** | **string** | Original path of item if different from current path. | [optional] 
**changeType** | **string** | The type of change that was made to the item. | [optional] 
**item** | **string** | Current version. | [optional] 
**newContent** | [**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\ItemContent**](ItemContent.md) | Content of the item after the change. | [optional] 
**sourceServerItem** | **string** | Path of the item on the server. | [optional] 
**url** | **string** | URL to retrieve the item. | [optional] 
**changeTrackingId** | **int** | ID used to track files through multiple changes. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


