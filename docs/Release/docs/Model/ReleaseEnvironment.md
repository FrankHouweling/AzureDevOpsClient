# ReleaseEnvironment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**conditions** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ReleaseCondition[]**](ReleaseCondition.md) | Gets list of conditions. | [optional] 
**createdOn** | [**\DateTime**](\DateTime.md) | Gets date on which it got created. | [optional] 
**definitionEnvironmentId** | **int** | Gets definition environment id. | [optional] 
**deployPhasesSnapshot** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\DeployPhase[]**](DeployPhase.md) | Gets list of deploy phases snapshot. | [optional] 
**deploySteps** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\DeploymentAttempt[]**](DeploymentAttempt.md) | Gets deploy steps. | [optional] 
**environmentOptions** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\EnvironmentOptions**](EnvironmentOptions.md) | Gets environment options. | [optional] 
**id** | **int** | Gets the unique identifier of this field. | [optional] 
**modifiedOn** | [**\DateTime**](\DateTime.md) | Gets date on which it got modified. | [optional] 
**name** | **string** | Gets name. | [optional] 
**nextScheduledUtcTime** | [**\DateTime**](\DateTime.md) | Gets next scheduled UTC time. | [optional] 
**owner** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\IdentityRef**](IdentityRef.md) | Gets the identity who is owner for release environment. | [optional] 
**postApprovalsSnapshot** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ReleaseDefinitionApprovals**](ReleaseDefinitionApprovals.md) | Gets list of post deploy approvals snapshot. | [optional] 
**postDeployApprovals** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ReleaseApproval[]**](ReleaseApproval.md) | Gets list of post deploy approvals. | [optional] 
**postDeploymentGatesSnapshot** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ReleaseDefinitionGatesStep**](ReleaseDefinitionGatesStep.md) | Post deployment gates snapshot data. | [optional] 
**preApprovalsSnapshot** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ReleaseDefinitionApprovals**](ReleaseDefinitionApprovals.md) | Gets list of pre deploy approvals snapshot. | [optional] 
**preDeployApprovals** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ReleaseApproval[]**](ReleaseApproval.md) | Gets list of pre deploy approvals. | [optional] 
**preDeploymentGatesSnapshot** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ReleaseDefinitionGatesStep**](ReleaseDefinitionGatesStep.md) | Pre deployment gates snapshot data. | [optional] 
**processParameters** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ProcessParameters**](ProcessParameters.md) | Gets process parameters. | [optional] 
**rank** | **int** | Gets rank. | [optional] 
**release** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ReleaseShallowReference**](ReleaseShallowReference.md) | Gets release reference which specifies the reference of the release to which this release environment is associated. | [optional] 
**releaseCreatedBy** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\IdentityRef**](IdentityRef.md) | Gets the identity who created release. | [optional] 
**releaseDefinition** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ReleaseDefinitionShallowReference**](ReleaseDefinitionShallowReference.md) | Gets releaseDefinitionReference which specifies the reference of the release definition to which this release environment is associated. | [optional] 
**releaseId** | **int** | Gets release id. | [optional] 
**scheduledDeploymentTime** | [**\DateTime**](\DateTime.md) | Gets schedule deployment time of release environment. | [optional] 
**schedules** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ReleaseSchedule[]**](ReleaseSchedule.md) | Gets list of schedules. | [optional] 
**status** | **string** | Gets environment status. | [optional] 
**timeToDeploy** | **double** | Gets time to deploy. | [optional] 
**triggerReason** | **string** | Gets trigger reason. | [optional] 
**variableGroups** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\VariableGroup[]**](VariableGroup.md) | Gets the list of variable groups. | [optional] 
**variables** | [**map[string,\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ConfigurationVariableValue]**](ConfigurationVariableValue.md) | Gets the dictionary of variables. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


