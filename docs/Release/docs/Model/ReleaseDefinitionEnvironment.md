# ReleaseDefinitionEnvironment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**badgeUrl** | **string** | Gets or sets the BadgeUrl. BadgeUrl will be used when Badge will be enabled in Release Definition Environment. | [optional] 
**conditions** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\Condition[]**](Condition.md) | Gets or sets the environment conditions. | [optional] 
**currentRelease** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ReleaseShallowReference**](ReleaseShallowReference.md) | Gets or sets the current release reference. | [optional] 
**demands** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\Demand[]**](Demand.md) | Gets or sets the demands. | [optional] 
**deployPhases** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\DeployPhase[]**](DeployPhase.md) | Gets or sets the deploy phases of environment. | [optional] 
**deployStep** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ReleaseDefinitionDeployStep**](ReleaseDefinitionDeployStep.md) | Gets or sets the deploystep. | [optional] 
**environmentOptions** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\EnvironmentOptions**](EnvironmentOptions.md) | Gets or sets the environment options. | [optional] 
**environmentTriggers** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\EnvironmentTrigger[]**](EnvironmentTrigger.md) | Gets or sets the triggers on environment. | [optional] 
**executionPolicy** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\EnvironmentExecutionPolicy**](EnvironmentExecutionPolicy.md) | Gets or sets the environment execution policy. | [optional] 
**id** | **int** | Gets and sets the ID of the ReleaseDefinitionEnvironment. | [optional] 
**name** | **string** | Gets and sets the name of the ReleaseDefinitionEnvironment. | [optional] 
**owner** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\IdentityRef**](IdentityRef.md) | Gets and sets the Owner of the ReleaseDefinitionEnvironment. | [optional] 
**postDeployApprovals** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ReleaseDefinitionApprovals**](ReleaseDefinitionApprovals.md) | Gets or sets the post deployment approvals. | [optional] 
**postDeploymentGates** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ReleaseDefinitionGatesStep**](ReleaseDefinitionGatesStep.md) | Gets or sets the post deployment gates. | [optional] 
**preDeployApprovals** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ReleaseDefinitionApprovals**](ReleaseDefinitionApprovals.md) | Gets or sets the pre deployment approvals. | [optional] 
**preDeploymentGates** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ReleaseDefinitionGatesStep**](ReleaseDefinitionGatesStep.md) | Gets or sets the pre deployment gates. | [optional] 
**processParameters** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ProcessParameters**](ProcessParameters.md) | Gets or sets the environment process parameters. | [optional] 
**properties** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\PropertiesCollection**](PropertiesCollection.md) | Gets or sets the properties on environment. | [optional] 
**queueId** | **int** | Gets or sets the queue ID. | [optional] 
**rank** | **int** | Gets and sets the rank of the ReleaseDefinitionEnvironment. | [optional] 
**retentionPolicy** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\EnvironmentRetentionPolicy**](EnvironmentRetentionPolicy.md) | Gets or sets the environment retention policy. | [optional] 
**schedules** | [**\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ReleaseSchedule[]**](ReleaseSchedule.md) | Gets or sets the schedules | [optional] 
**variableGroups** | **int[]** | Gets or sets the variable groups. | [optional] 
**variables** | [**map[string,\AzureDevOpsClient\Release\AzureDevOpsClient\Release\Model\ConfigurationVariableValue]**](ConfigurationVariableValue.md) | Gets and sets the variables. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


