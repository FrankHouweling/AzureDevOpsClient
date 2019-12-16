# TeamSetting

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\FrankHouweling\AzureDevOpsClient\Work\Model\ReferenceLinks**](ReferenceLinks.md) | Collection of links relevant to resource | [optional] 
**url** | **string** | Full http link to the resource | [optional] 
**backlogIteration** | [**\FrankHouweling\AzureDevOpsClient\Work\Model\TeamSettingsIteration**](TeamSettingsIteration.md) | Backlog Iteration | [optional] 
**backlogVisibilities** | **map[string,bool]** | Information about categories that are visible on the backlog. | [optional] 
**bugsBehavior** | **string** | BugsBehavior (Off, AsTasks, AsRequirements, ...) | [optional] 
**defaultIteration** | [**\FrankHouweling\AzureDevOpsClient\Work\Model\TeamSettingsIteration**](TeamSettingsIteration.md) | Default Iteration, the iteration used when creating a new work item on the queries page. | [optional] 
**defaultIterationMacro** | **string** | Default Iteration macro (if any) | [optional] 
**workingDays** | **object[]** | Days that the team is working | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


