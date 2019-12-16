# TaskAgentPoolMaintenanceDefinition

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enabled** | **bool** | Enable maintenance | [optional] 
**id** | **int** | Id | [optional] 
**jobTimeoutInMinutes** | **int** | Maintenance job timeout per agent | [optional] 
**maxConcurrentAgentsPercentage** | **int** | Max percentage of agents within a pool running maintenance job at given time | [optional] 
**options** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentPoolMaintenanceOptions**](TaskAgentPoolMaintenanceOptions.md) |  | [optional] 
**pool** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentPoolReference**](TaskAgentPoolReference.md) | Pool reference for the maintenance definition | [optional] 
**retentionPolicy** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentPoolMaintenanceRetentionPolicy**](TaskAgentPoolMaintenanceRetentionPolicy.md) |  | [optional] 
**scheduleSetting** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentPoolMaintenanceSchedule**](TaskAgentPoolMaintenanceSchedule.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


