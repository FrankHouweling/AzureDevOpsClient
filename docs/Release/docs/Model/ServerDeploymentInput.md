# ServerDeploymentInput

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**condition** | **string** | Gets or sets the job condition. | [optional] 
**jobCancelTimeoutInMinutes** | **int** | Gets or sets the job cancel timeout in minutes for deployment which are cancelled by user for this release environment. | [optional] 
**overrideInputs** | **map[string,string]** | Gets or sets the override inputs. | [optional] 
**timeoutInMinutes** | **int** | Gets or sets the job execution timeout in minutes for deployment which are queued against this release environment. | [optional] 
**parallelExecution** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ExecutionInput**](ExecutionInput.md) | Gets or sets the parallel execution input. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


