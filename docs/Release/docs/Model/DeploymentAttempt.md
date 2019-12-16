# DeploymentAttempt

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attempt** | **int** | Deployment attempt. | [optional] 
**deploymentId** | **int** | ID of the deployment. | [optional] 
**hasStarted** | **bool** | Specifies whether deployment has started or not. | [optional] 
**id** | **int** | ID of deployment. | [optional] 
**issues** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\Issue[]**](Issue.md) | All the issues related to the deployment. | [optional] 
**lastModifiedBy** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\IdentityRef**](IdentityRef.md) | Identity who last modified this deployment. | [optional] 
**lastModifiedOn** | [**\DateTime**](\DateTime.md) | Time when this deployment last modified. | [optional] 
**operationStatus** | **string** | Deployment operation status. | [optional] 
**postDeploymentGates** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseGates**](ReleaseGates.md) | Post deployment gates that executed in this deployment. | [optional] 
**preDeploymentGates** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseGates**](ReleaseGates.md) | Pre deployment gates that executed in this deployment. | [optional] 
**queuedOn** | [**\DateTime**](\DateTime.md) | When this deployment queued on. | [optional] 
**reason** | **string** | Reason for the deployment. | [optional] 
**releaseDeployPhases** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseDeployPhase[]**](ReleaseDeployPhase.md) | List of release deployphases executed in this deployment. | [optional] 
**requestedBy** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\IdentityRef**](IdentityRef.md) | Identity who requested this deployment. | [optional] 
**requestedFor** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\IdentityRef**](IdentityRef.md) | Identity for this deployment requested. | [optional] 
**status** | **string** | status of the deployment. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


