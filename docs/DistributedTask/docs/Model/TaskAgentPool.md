# TaskAgentPool

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**isHosted** | **bool** | Gets or sets a value indicating whether or not this pool is managed by the service. | [optional] 
**isLegacy** | **bool** | Determines whether the pool is legacy. | [optional] 
**name** | **string** |  | [optional] 
**poolType** | **string** | Gets or sets the type of the pool | [optional] 
**scope** | **string** |  | [optional] 
**size** | **int** | Gets the current size of the pool. | [optional] 
**agentCloudId** | **int** | The ID of the associated agent cloud. | [optional] 
**autoProvision** | **bool** | Whether or not a queue should be automatically provisioned for each project collection. | [optional] 
**autoSize** | **bool** | Whether or not the pool should autosize itself based on the Agent Cloud Provider settings. | [optional] 
**createdBy** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\IdentityRef**](IdentityRef.md) | Creator of the pool. The creator of the pool is automatically added into the administrators group for the pool on creation. | [optional] 
**createdOn** | [**\DateTime**](\DateTime.md) | The date/time of the pool creation. | [optional] 
**owner** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\IdentityRef**](IdentityRef.md) | Owner or administrator of the pool. | [optional] 
**properties** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\PropertiesCollection**](PropertiesCollection.md) |  | [optional] 
**targetSize** | **int** | Target parallelism. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


