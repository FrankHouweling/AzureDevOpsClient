# ReleaseApproval

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**approvalType** | **string** | Gets or sets the type of approval. | [optional] 
**approvedBy** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\IdentityRef**](IdentityRef.md) | Gets the identity who approved. | [optional] 
**approver** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\IdentityRef**](IdentityRef.md) | Gets or sets the identity who should approve. | [optional] 
**attempt** | **int** | Gets or sets attempt which specifies as which deployment attempt it belongs. | [optional] 
**comments** | **string** | Gets or sets comments for approval. | [optional] 
**createdOn** | [**\DateTime**](\DateTime.md) | Gets date on which it got created. | [optional] 
**history** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ReleaseApprovalHistory[]**](ReleaseApprovalHistory.md) | Gets history which specifies all approvals associated with this approval. | [optional] 
**id** | **int** | Gets the unique identifier of this field. | [optional] 
**isAutomated** | **bool** | Gets or sets as approval is automated or not. | [optional] 
**modifiedOn** | [**\DateTime**](\DateTime.md) | Gets date on which it got modified. | [optional] 
**rank** | **int** | Gets or sets rank which specifies the order of the approval. e.g. Same rank denotes parallel approval. | [optional] 
**release** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ReleaseShallowReference**](ReleaseShallowReference.md) | Gets releaseReference which specifies the reference of the release to which this approval is associated. | [optional] 
**releaseDefinition** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ReleaseDefinitionShallowReference**](ReleaseDefinitionShallowReference.md) | Gets releaseDefinitionReference which specifies the reference of the release definition to which this approval is associated. | [optional] 
**releaseEnvironment** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ReleaseEnvironmentShallowReference**](ReleaseEnvironmentShallowReference.md) | Gets releaseEnvironmentReference which specifies the reference of the release environment to which this approval is associated. | [optional] 
**revision** | **int** | Gets the revision number. | [optional] 
**status** | **string** | Gets or sets the status of the approval. | [optional] 
**url** | **string** | Gets url to access the approval. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


