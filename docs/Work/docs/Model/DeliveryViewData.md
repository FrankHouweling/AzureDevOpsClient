# DeliveryViewData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**revision** | **int** |  | [optional] 
**childIdToParentIdMap** | **map[string,int]** | Work item child id to parent id map | [optional] 
**criteriaStatus** | [**\FrankHouweling\AzureDevOpsClient\Work\Model\TimelineCriteriaStatus**](TimelineCriteriaStatus.md) | Filter criteria status of the timeline | [optional] 
**endDate** | [**\DateTime**](\DateTime.md) | The end date of the delivery view data | [optional] 
**maxExpandedTeams** | **int** | Max number of teams can be configured for a delivery plan. | [optional] 
**startDate** | [**\DateTime**](\DateTime.md) | The start date for the delivery view data | [optional] 
**teams** | [**\FrankHouweling\AzureDevOpsClient\Work\Model\TimelineTeamData[]**](TimelineTeamData.md) | All the team data | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


