# GitPullRequestCommentThreadContext

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**changeTrackingId** | **int** | Used to track a comment across iterations. This value can be found by looking at the iteration&#39;s changes list. Must be set for pull requests with iteration support. Otherwise, it&#39;s not required for &#39;legacy&#39; pull requests. | [optional] 
**iterationContext** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\CommentIterationContext**](CommentIterationContext.md) | The iteration context being viewed when the thread was created. | [optional] 
**trackingCriteria** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\CommentTrackingCriteria**](CommentTrackingCriteria.md) | The criteria used to track this thread. If this property is filled out when the thread is returned, then the thread has been tracked from its original location using the given criteria. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


