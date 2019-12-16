# Deployment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attempt** | **int** | Gets attempt number. | [optional] 
**completedOn** | [**\DateTime**](\DateTime.md) | Gets the date on which deployment is complete. | [optional] 
**conditions** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\Condition[]**](Condition.md) | Gets the list of condition associated with deployment. | [optional] 
**definitionEnvironmentId** | **int** | Gets release definition environment id. | [optional] 
**deploymentStatus** | **string** | Gets status of the deployment. | [optional] 
**id** | **int** | Gets the unique identifier for deployment. | [optional] 
**lastModifiedBy** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\IdentityRef**](IdentityRef.md) | Gets the identity who last modified the deployment. | [optional] 
**lastModifiedOn** | [**\DateTime**](\DateTime.md) | Gets the date on which deployment is last modified. | [optional] 
**operationStatus** | **string** | Gets operation status of deployment. | [optional] 
**postDeployApprovals** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseApproval[]**](ReleaseApproval.md) | Gets list of PostDeployApprovals. | [optional] 
**preDeployApprovals** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseApproval[]**](ReleaseApproval.md) | Gets list of PreDeployApprovals. | [optional] 
**projectReference** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\ProjectReference**](ProjectReference.md) | Gets or sets project reference. | [optional] 
**queuedOn** | [**\DateTime**](\DateTime.md) | Gets the date on which deployment is queued. | [optional] 
**reason** | **string** | Gets reason of deployment. | [optional] 
**release** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseReference**](ReleaseReference.md) | Gets the reference of release. | [optional] 
**releaseDefinition** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseDefinitionShallowReference**](ReleaseDefinitionShallowReference.md) | Gets releaseDefinitionReference which specifies the reference of the release definition to which the deployment is associated. | [optional] 
**releaseEnvironment** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseEnvironmentShallowReference**](ReleaseEnvironmentShallowReference.md) | Gets releaseEnvironmentReference which specifies the reference of the release environment to which the deployment is associated. | [optional] 
**requestedBy** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\IdentityRef**](IdentityRef.md) | Gets the identity who requested. | [optional] 
**requestedFor** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\IdentityRef**](IdentityRef.md) | Gets the identity for whom deployment is requested. | [optional] 
**scheduledDeploymentTime** | [**\DateTime**](\DateTime.md) | Gets the date on which deployment is scheduled. | [optional] 
**startedOn** | [**\DateTime**](\DateTime.md) | Gets the date on which deployment is started. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


