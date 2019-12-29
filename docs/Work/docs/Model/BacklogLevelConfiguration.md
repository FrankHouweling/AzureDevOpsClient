# BacklogLevelConfiguration

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**addPanelFields** | [**\FrankHouweling\AzureDevOpsClient\Work\Model\WorkItemFieldReference[]**](WorkItemFieldReference.md) | List of fields to include in Add Panel | [optional] 
**color** | **string** | Color for the backlog level | [optional] 
**columnFields** | [**\FrankHouweling\AzureDevOpsClient\Work\Model\BacklogColumn[]**](BacklogColumn.md) | Default list of columns for the backlog | [optional] 
**defaultWorkItemType** | [**\FrankHouweling\AzureDevOpsClient\Work\Model\WorkItemTypeReference**](WorkItemTypeReference.md) | Default Work Item Type for the backlog | [optional] 
**id** | **string** | Backlog Id (for Legacy Backlog Level from process config it can be categoryref name) | [optional] 
**isHidden** | **bool** | Indicates whether the backlog level is hidden | [optional] 
**name** | **string** | Backlog Name | [optional] 
**rank** | **int** | Backlog Rank (Taskbacklog is 0) | [optional] 
**type** | **string** | The type of this backlog level | [optional] 
**workItemCountLimit** | **int** | Max number of work items to show in the given backlog | [optional] 
**workItemTypes** | [**\FrankHouweling\AzureDevOpsClient\Work\Model\WorkItemTypeReference[]**](WorkItemTypeReference.md) | Work Item types participating in this backlog as known by the project/Process, can be overridden by team settings for bugs | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


