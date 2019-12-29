# ContinuousIntegrationTrigger

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**triggerType** | **string** | The type of the trigger. | [optional] 
**batchChanges** | **bool** | Indicates whether changes should be batched while another CI build is running. | [optional] 
**branchFilters** | **string[]** |  | [optional] 
**maxConcurrentBuildsPerBranch** | **int** | The maximum number of simultaneous CI builds that will run per branch. | [optional] 
**pathFilters** | **string[]** |  | [optional] 
**pollingInterval** | **int** | The polling interval, in seconds. | [optional] 
**pollingJobId** | **string** | The ID of the job used to poll an external repository. | [optional] 
**settingsSourceType** | **int** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


