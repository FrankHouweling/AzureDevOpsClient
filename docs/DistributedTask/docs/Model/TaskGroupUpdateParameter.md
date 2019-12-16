# TaskGroupUpdateParameter

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**author** | **string** | Sets author name of the task group. | [optional] 
**category** | **string** | Sets category of the task group. | [optional] 
**comment** | **string** | Sets comment of the task group. | [optional] 
**description** | **string** | Sets description of the task group. | [optional] 
**friendlyName** | **string** | Sets friendly name of the task group. | [optional] 
**iconUrl** | **string** | Sets url icon of the task group. | [optional] 
**id** | **string** | Sets the unique identifier of this field. | [optional] 
**inputs** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskInputDefinition[]**](TaskInputDefinition.md) | Sets input for the task group. | [optional] 
**instanceNameFormat** | **string** | Sets display name of the task group. | [optional] 
**name** | **string** | Sets name of the task group. | [optional] 
**parentDefinitionId** | **string** | Gets or sets parent task group Id. This is used while creating a draft task group. | [optional] 
**revision** | **int** | Sets revision of the task group. | [optional] 
**runsOn** | **string[]** | Sets RunsOn of the task group. Value can be &#39;Agent&#39;, &#39;Server&#39; or &#39;DeploymentGroup&#39;. | [optional] 
**tasks** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskGroupStep[]**](TaskGroupStep.md) | Sets tasks for the task group. | [optional] 
**version** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskVersion**](TaskVersion.md) | Sets version of the task group. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


