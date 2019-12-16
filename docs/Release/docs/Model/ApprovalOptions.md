# ApprovalOptions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**autoTriggeredAndPreviousEnvironmentApprovedCanBeSkipped** | **bool** | Specify whether the approval can be skipped if the same approver approved the previous stage. | [optional] 
**enforceIdentityRevalidation** | **bool** | Specify whether revalidate identity of approver before completing the approval. | [optional] 
**executionOrder** | **string** | Approvals execution order. | [optional] 
**releaseCreatorCanBeApprover** | **bool** | Specify whether the user requesting a release or deployment should allow to approver. | [optional] 
**requiredApproverCount** | **int** | The number of approvals required to move release forward. &#39;0&#39; means all approvals required. | [optional] 
**timeoutInMinutes** | **int** | Approval timeout. Approval default timeout is 30 days. Maximum allowed timeout is 365 days. &#39;0&#39; means default timeout i.e 30 days. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


