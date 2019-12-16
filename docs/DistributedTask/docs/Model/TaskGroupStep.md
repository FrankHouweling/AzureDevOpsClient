# TaskGroupStep

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**alwaysRun** | **bool** | Gets or sets as &#39;true&#39; to run the task always, &#39;false&#39; otherwise. | [optional] 
**condition** | **string** | Gets or sets condition for the task. | [optional] 
**continueOnError** | **bool** | Gets or sets as &#39;true&#39; to continue on error, &#39;false&#39; otherwise. | [optional] 
**displayName** | **string** | Gets or sets the display name. | [optional] 
**enabled** | **bool** | Gets or sets as task is enabled or not. | [optional] 
**environment** | **map[string,string]** | Gets dictionary of environment variables. | [optional] 
**inputs** | **map[string,string]** | Gets or sets dictionary of inputs. | [optional] 
**task** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskDefinitionReference**](TaskDefinitionReference.md) | Gets or sets the reference of the task. | [optional] 
**timeoutInMinutes** | **int** | Gets or sets the maximum time, in minutes, that a task is allowed to execute on agent before being cancelled by server. A zero value indicates an infinite timeout. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


