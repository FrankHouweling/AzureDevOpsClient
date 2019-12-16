# BuildDefinitionStep

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**alwaysRun** | **bool** | Indicates whether this step should run even if a previous step fails. | [optional] 
**condition** | **string** | A condition that determines whether this step should run. | [optional] 
**continueOnError** | **bool** | Indicates whether the phase should continue even if this step fails. | [optional] 
**displayName** | **string** | The display name for this step. | [optional] 
**enabled** | **bool** | Indicates whether the step is enabled. | [optional] 
**environment** | **map[string,string]** |  | [optional] 
**inputs** | **map[string,string]** |  | [optional] 
**refName** | **string** | The reference name for this step. | [optional] 
**task** | [**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\TaskDefinitionReference**](TaskDefinitionReference.md) | The task associated with this step. | [optional] 
**timeoutInMinutes** | **int** | The time, in minutes, that this step is allowed to run. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


