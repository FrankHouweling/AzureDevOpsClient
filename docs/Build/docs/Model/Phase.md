# Phase

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**condition** | **string** | The condition that must be true for this phase to execute. | [optional] 
**dependencies** | [**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\Dependency[]**](Dependency.md) |  | [optional] 
**jobAuthorizationScope** | **string** | The job authorization scope for builds queued against this definition. | [optional] 
**jobCancelTimeoutInMinutes** | **int** | The cancellation timeout, in minutes, for builds queued against this definition. | [optional] 
**jobTimeoutInMinutes** | **int** | The job execution timeout, in minutes, for builds queued against this definition. | [optional] 
**name** | **string** | The name of the phase. | [optional] 
**refName** | **string** | The unique ref name of the phase. | [optional] 
**steps** | [**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\BuildDefinitionStep[]**](BuildDefinitionStep.md) |  | [optional] 
**target** | [**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\PhaseTarget**](PhaseTarget.md) | The target (agent, server, etc.) for this phase. | [optional] 
**variables** | [**map[string,\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\BuildDefinitionVariable]**](BuildDefinitionVariable.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


