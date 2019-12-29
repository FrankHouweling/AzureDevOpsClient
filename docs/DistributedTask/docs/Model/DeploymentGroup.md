# DeploymentGroup

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Deployment group identifier. | [optional] 
**name** | **string** | Name of the deployment group. | [optional] 
**pool** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskAgentPoolReference**](TaskAgentPoolReference.md) | Deployment pool in which deployment agents are registered. | [optional] 
**project** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\ProjectReference**](ProjectReference.md) | Project to which the deployment group belongs. | [optional] 
**description** | **string** | Description of the deployment group. | [optional] 
**machineCount** | **int** | Number of deployment targets in the deployment group. | [optional] 
**machines** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\DeploymentMachine[]**](DeploymentMachine.md) | List of deployment targets in the deployment group. | [optional] 
**machineTags** | **string[]** | List of unique tags across all deployment targets in the deployment group. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


