# CommentTrackingCriteria

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**firstComparingIteration** | **int** | The iteration of the file on the left side of the diff that the thread will be tracked to. Threads were tracked if this is greater than 0. | [optional] 
**origFilePath** | **string** | Original filepath the thread was created on before tracking. This will be different than the current thread filepath if the file in question was renamed in a later iteration. | [optional] 
**origLeftFileEnd** | [**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\CommentPosition**](CommentPosition.md) | Original position of last character of the thread&#39;s span in left file. | [optional] 
**origLeftFileStart** | [**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\CommentPosition**](CommentPosition.md) | Original position of first character of the thread&#39;s span in left file. | [optional] 
**origRightFileEnd** | [**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\CommentPosition**](CommentPosition.md) | Original position of last character of the thread&#39;s span in right file. | [optional] 
**origRightFileStart** | [**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\CommentPosition**](CommentPosition.md) | Original position of first character of the thread&#39;s span in right file. | [optional] 
**secondComparingIteration** | **int** | The iteration of the file on the right side of the diff that the thread will be tracked to. Threads were tracked if this is greater than 0. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


