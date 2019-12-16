# TaskAgent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\ReferenceLinks**](ReferenceLinks.md) |  | [optional] 
**accessPoint** | **string** | This agent&#39;s access point. | [optional] 
**enabled** | **bool** | Whether or not this agent should run jobs. | [optional] 
**id** | **int** | Identifier of the agent. | [optional] 
**name** | **string** | Name of the agent. | [optional] 
**osDescription** | **string** | Agent OS. | [optional] 
**provisioningState** | **string** | Provisioning state of this agent. | [optional] 
**status** | **string** | Whether or not the agent is online. | [optional] 
**version** | **string** | Agent version. | [optional] 
**assignedAgentCloudRequest** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentCloudRequest**](TaskAgentCloudRequest.md) | The agent cloud request that&#39;s currently associated with this agent. | [optional] 
**assignedRequest** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentJobRequest**](TaskAgentJobRequest.md) | The request which is currently assigned to this agent. | [optional] 
**authorization** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentAuthorization**](TaskAgentAuthorization.md) | Authorization information for this agent. | [optional] 
**createdOn** | [**\DateTime**](\DateTime.md) | Date on which this agent was created. | [optional] 
**lastCompletedRequest** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentJobRequest**](TaskAgentJobRequest.md) | The last request which was completed by this agent. | [optional] 
**maxParallelism** | **int** | Maximum job parallelism allowed for this agent. | [optional] 
**pendingUpdate** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentUpdate**](TaskAgentUpdate.md) | Pending update for this agent. | [optional] 
**properties** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\PropertiesCollection**](PropertiesCollection.md) |  | [optional] 
**statusChangedOn** | [**\DateTime**](\DateTime.md) | Date on which the last connectivity status change occurred. | [optional] 
**systemCapabilities** | **map[string,string]** |  | [optional] 
**userCapabilities** | **map[string,string]** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


