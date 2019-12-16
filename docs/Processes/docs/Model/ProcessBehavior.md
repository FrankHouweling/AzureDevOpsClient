# ProcessBehavior

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**color** | **string** | Color. | [optional] 
**customization** | **string** | Indicates the type of customization on this work item. System behaviors are inherited from parent process but not modified. Inherited behaviors are modified modified behaviors that were inherited from parent process. Custom behaviors are behaviors created by user in current process. | [optional] 
**description** | **string** | . Description | [optional] 
**fields** | [**\FrankHouweling\AzureDevOpsClient\Processes\Model\ProcessBehaviorField[]**](ProcessBehaviorField.md) | Process Behavior Fields. | [optional] 
**inherits** | [**\FrankHouweling\AzureDevOpsClient\Processes\Model\ProcessBehaviorReference**](ProcessBehaviorReference.md) | Parent behavior reference. | [optional] 
**name** | **string** | Behavior Name. | [optional] 
**rank** | **int** | Rank of the behavior | [optional] 
**referenceName** | **string** | Behavior Id | [optional] 
**url** | **string** | Url of the behavior. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


