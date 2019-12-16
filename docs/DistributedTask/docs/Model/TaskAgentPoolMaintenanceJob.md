# TaskAgentPoolMaintenanceJob

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**definitionId** | **int** | The maintenance definition for the maintenance job | [optional] 
**errorCount** | **int** | The total error counts during the maintenance job | [optional] 
**finishTime** | [**\DateTime**](\DateTime.md) | Time that the maintenance job was completed | [optional] 
**jobId** | **int** | Id of the maintenance job | [optional] 
**logsDownloadUrl** | **string** | The log download url for the maintenance job | [optional] 
**orchestrationId** | **string** | Orchestration/Plan Id for the maintenance job | [optional] 
**pool** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentPoolReference**](TaskAgentPoolReference.md) | Pool reference for the maintenance job | [optional] 
**queueTime** | [**\DateTime**](\DateTime.md) | Time that the maintenance job was queued | [optional] 
**requestedBy** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\IdentityRef**](IdentityRef.md) | The identity that queued the maintenance job | [optional] 
**result** | **string** | The maintenance job result | [optional] 
**startTime** | [**\DateTime**](\DateTime.md) | Time that the maintenance job was started | [optional] 
**status** | **string** | Status of the maintenance job | [optional] 
**targetAgents** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentPoolMaintenanceJobTargetAgent[]**](TaskAgentPoolMaintenanceJobTargetAgent.md) |  | [optional] 
**warningCount** | **int** | The total warning counts during the maintenance job | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


