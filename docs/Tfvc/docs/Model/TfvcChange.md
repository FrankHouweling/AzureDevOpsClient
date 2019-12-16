# TfvcChange

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**changeType** | **string** | The type of change that was made to the item. | [optional] 
**item** | **string** | Current version. | [optional] 
**newContent** | [**\AzureDevOpsClient\Tfvc\AzureDevOpsClient\Tfvc\Model\ItemContent**](ItemContent.md) | Content of the item after the change. | [optional] 
**sourceServerItem** | **string** | Path of the item on the server. | [optional] 
**url** | **string** | URL to retrieve the item. | [optional] 
**mergeSources** | [**\AzureDevOpsClient\Tfvc\AzureDevOpsClient\Tfvc\Model\TfvcMergeSource[]**](TfvcMergeSource.md) | List of merge sources in case of rename or branch creation. | [optional] 
**pendingVersion** | **int** | Version at which a (shelved) change was pended against | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


