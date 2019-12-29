# TaskAgentPoolStatus

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
**assignedRequestCount** | **int** | Number of requests queued and assigned to an agent. Not running yet. | [optional] 
**queuedRequestCount** | **int** | Number of queued requests which are not assigned to any agents | [optional] 
**runningRequestCount** | **int** | Number of currently running requests | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


