# WorkItemUpdate

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\FrankHouweling\AzureDevOpsClient\Wit\Model\ReferenceLinks**](ReferenceLinks.md) | Link references to related REST resources. | [optional] 
**url** | **string** |  | [optional] 
**fields** | [**map[string,\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemFieldUpdate]**](WorkItemFieldUpdate.md) | List of updates to fields. | [optional] 
**id** | **int** | ID of update. | [optional] 
**relations** | [**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemRelationUpdates**](WorkItemRelationUpdates.md) | List of updates to relations. | [optional] 
**rev** | **int** | The revision number of work item update. | [optional] 
**revisedBy** | [**\FrankHouweling\AzureDevOpsClient\Wit\Model\IdentityReference**](IdentityReference.md) | Identity for the work item update. | [optional] 
**revisedDate** | [**\DateTime**](\DateTime.md) | The work item updates revision date. | [optional] 
**workItemId** | **int** | The work item ID. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


