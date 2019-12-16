# TaskAgentJobRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**agentDelays** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentDelaySource[]**](TaskAgentDelaySource.md) |  | [optional] 
**agentSpecification** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\JObject**](JObject.md) |  | [optional] 
**assignTime** | [**\DateTime**](\DateTime.md) | The date/time this request was assigned. | [optional] 
**data** | **map[string,string]** | Additional data about the request. | [optional] 
**definition** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskOrchestrationOwner**](TaskOrchestrationOwner.md) | The pipeline definition associated with this request | [optional] 
**demands** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\Demand[]**](Demand.md) | A list of demands required to fulfill this request. | [optional] 
**expectedDuration** | **string** |  | [optional] 
**finishTime** | [**\DateTime**](\DateTime.md) | The date/time this request was finished. | [optional] 
**hostId** | **string** | The host which triggered this request. | [optional] 
**jobId** | **string** | ID of the job resulting from this request. | [optional] 
**jobName** | **string** | Name of the job resulting from this request. | [optional] 
**lockedUntil** | [**\DateTime**](\DateTime.md) | The deadline for the agent to renew the lock. | [optional] 
**matchedAgents** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentReference[]**](TaskAgentReference.md) |  | [optional] 
**matchesAllAgentsInPool** | **bool** |  | [optional] 
**orchestrationId** | **string** |  | [optional] 
**owner** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskOrchestrationOwner**](TaskOrchestrationOwner.md) | The pipeline associated with this request | [optional] 
**planGroup** | **string** |  | [optional] 
**planId** | **string** | Internal ID for the orchestration plan connected with this request. | [optional] 
**planType** | **string** | Internal detail representing the type of orchestration plan. | [optional] 
**poolId** | **int** | The ID of the pool this request targets | [optional] 
**queueId** | **int** | The ID of the queue this request targets | [optional] 
**queueTime** | [**\DateTime**](\DateTime.md) | The date/time this request was queued. | [optional] 
**receiveTime** | [**\DateTime**](\DateTime.md) | The date/time this request was receieved by an agent. | [optional] 
**requestId** | **int** | ID of the request. | [optional] 
**reservedAgent** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentReference**](TaskAgentReference.md) | The agent allocated for this request. | [optional] 
**result** | **string** | The result of this request. | [optional] 
**scopeId** | **string** | Scope of the pipeline; matches the project ID. | [optional] 
**serviceOwner** | **string** | The service which owns this request. | [optional] 
**statusMessage** | **string** |  | [optional] 
**userDelayed** | **bool** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


