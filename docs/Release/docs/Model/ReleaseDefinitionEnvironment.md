# ReleaseDefinitionEnvironment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**badgeUrl** | **string** | Gets or sets the BadgeUrl. BadgeUrl will be used when Badge will be enabled in Release Definition Environment. | [optional] 
**conditions** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\Condition[]**](Condition.md) | Gets or sets the environment conditions. | [optional] 
**currentRelease** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseShallowReference**](ReleaseShallowReference.md) | Gets or sets the current release reference. | [optional] 
**demands** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\Demand[]**](Demand.md) | Gets or sets the demands. | [optional] 
**deployPhases** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\DeployPhase[]**](DeployPhase.md) | Gets or sets the deploy phases of environment. | [optional] 
**deployStep** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseDefinitionDeployStep**](ReleaseDefinitionDeployStep.md) | Gets or sets the deploystep. | [optional] 
**environmentOptions** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\EnvironmentOptions**](EnvironmentOptions.md) | Gets or sets the environment options. | [optional] 
**environmentTriggers** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\EnvironmentTrigger[]**](EnvironmentTrigger.md) | Gets or sets the triggers on environment. | [optional] 
**executionPolicy** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\EnvironmentExecutionPolicy**](EnvironmentExecutionPolicy.md) | Gets or sets the environment execution policy. | [optional] 
**id** | **int** | Gets and sets the ID of the ReleaseDefinitionEnvironment. | [optional] 
**name** | **string** | Gets and sets the name of the ReleaseDefinitionEnvironment. | [optional] 
**owner** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\IdentityRef**](IdentityRef.md) | Gets and sets the Owner of the ReleaseDefinitionEnvironment. | [optional] 
**postDeployApprovals** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseDefinitionApprovals**](ReleaseDefinitionApprovals.md) | Gets or sets the post deployment approvals. | [optional] 
**postDeploymentGates** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseDefinitionGatesStep**](ReleaseDefinitionGatesStep.md) | Gets or sets the post deployment gates. | [optional] 
**preDeployApprovals** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseDefinitionApprovals**](ReleaseDefinitionApprovals.md) | Gets or sets the pre deployment approvals. | [optional] 
**preDeploymentGates** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseDefinitionGatesStep**](ReleaseDefinitionGatesStep.md) | Gets or sets the pre deployment gates. | [optional] 
**processParameters** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\ProcessParameters**](ProcessParameters.md) | Gets or sets the environment process parameters. | [optional] 
**properties** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\PropertiesCollection**](PropertiesCollection.md) | Gets or sets the properties on environment. | [optional] 
**queueId** | **int** | Gets or sets the queue ID. | [optional] 
**rank** | **int** | Gets and sets the rank of the ReleaseDefinitionEnvironment. | [optional] 
**retentionPolicy** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\EnvironmentRetentionPolicy**](EnvironmentRetentionPolicy.md) | Gets or sets the environment retention policy. | [optional] 
**schedules** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseSchedule[]**](ReleaseSchedule.md) | Gets or sets the schedules | [optional] 
**variableGroups** | **int[]** | Gets or sets the variable groups. | [optional] 
**variables** | [**map[string,\FrankHouweling\AzureDevOpsClient\Release\Model\ConfigurationVariableValue]**](ConfigurationVariableValue.md) | Gets and sets the variables. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


