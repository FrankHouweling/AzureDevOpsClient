# TimelineTeamData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**backlog** | [**\FrankHouweling\AzureDevOpsClient\Work\Model\BacklogLevel**](BacklogLevel.md) | Backlog matching the mapped backlog associated with this team. | [optional] 
**fieldReferenceNames** | **string[]** | The field reference names of the work item data | [optional] 
**id** | **string** | The id of the team | [optional] 
**isExpanded** | **bool** | Was iteration and work item data retrieved for this team. &lt;remarks&gt; Teams with IsExpanded false have not had their iteration, work item, and field related data queried and will never contain this data. If true then these items are queried and, if there are items in the queried range, there will be data. &lt;/remarks&gt; | [optional] 
**iterations** | [**\FrankHouweling\AzureDevOpsClient\Work\Model\TimelineTeamIteration[]**](TimelineTeamIteration.md) | The iteration data, including the work items, in the queried date range. | [optional] 
**name** | **string** | The name of the team | [optional] 
**orderByField** | **string** | The order by field name of this team | [optional] 
**partiallyPagedFieldReferenceNames** | **string[]** | The field reference names of the partially paged work items, such as ID, WorkItemType | [optional] 
**projectId** | **string** | The project id the team belongs team | [optional] 
**status** | [**\FrankHouweling\AzureDevOpsClient\Work\Model\TimelineTeamStatus**](TimelineTeamStatus.md) | Status for this team. | [optional] 
**teamFieldDefaultValue** | **string** | The team field default value | [optional] 
**teamFieldName** | **string** | The team field name of this team | [optional] 
**teamFieldValues** | [**\FrankHouweling\AzureDevOpsClient\Work\Model\TeamFieldValue[]**](TeamFieldValue.md) | The team field values | [optional] 
**workItemTypeColors** | [**\FrankHouweling\AzureDevOpsClient\Work\Model\WorkItemColor[]**](WorkItemColor.md) | Colors for the work item types. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


