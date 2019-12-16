# BuildDefinition32

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\ReferenceLinks**](ReferenceLinks.md) |  | [optional] 
**authoredBy** | [**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\IdentityRef**](IdentityRef.md) | The author of the definition. | [optional] 
**draftOf** | [**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\DefinitionReference**](DefinitionReference.md) | A reference to the definition that this definition is a draft of, if this is a draft definition. | [optional] 
**drafts** | [**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\DefinitionReference[]**](DefinitionReference.md) | The list of drafts associated with this definition, if this is not a draft definition. | [optional] 
**metrics** | [**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\BuildMetric[]**](BuildMetric.md) |  | [optional] 
**quality** | **string** | The quality of the definition document (draft, etc.) | [optional] 
**queue** | [**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\AgentPoolQueue**](AgentPoolQueue.md) | The default queue for builds run against this definition. | [optional] 
**createdDate** | [**\DateTime**](\DateTime.md) | The date this version of the definition was created. | [optional] 
**id** | **int** | The ID of the referenced definition. | [optional] 
**name** | **string** | The name of the referenced definition. | [optional] 
**path** | **string** | The folder path of the definition. | [optional] 
**project** | [**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\TeamProjectReference**](TeamProjectReference.md) | A reference to the project. | [optional] 
**queueStatus** | **string** | A value that indicates whether builds can be queued against this definition. | [optional] 
**revision** | **int** | The definition revision number. | [optional] 
**type** | **string** | The type of the definition. | [optional] 
**uri** | **string** | The definition&#39;s URI. | [optional] 
**url** | **string** | The REST URL of the definition. | [optional] 
**badgeEnabled** | **bool** | Indicates whether badges are enabled for this definition | [optional] 
**build** | [**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\BuildDefinitionStep[]**](BuildDefinitionStep.md) |  | [optional] 
**buildNumberFormat** | **string** | The build number format | [optional] 
**comment** | **string** | The comment entered when saving the definition | [optional] 
**demands** | [**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\Demand[]**](Demand.md) |  | [optional] 
**description** | **string** | The description | [optional] 
**dropLocation** | **string** | The drop location for the definition | [optional] 
**jobAuthorizationScope** | **string** | The job authorization scope for builds which are queued against this definition | [optional] 
**jobCancelTimeoutInMinutes** | **int** | The job cancel timeout in minutes for builds which are cancelled by user for this definition | [optional] 
**jobTimeoutInMinutes** | **int** | The job execution timeout in minutes for builds which are queued against this definition | [optional] 
**latestBuild** | [**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\Build**](Build.md) |  | [optional] 
**latestCompletedBuild** | [**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\Build**](Build.md) |  | [optional] 
**options** | [**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\BuildOption[]**](BuildOption.md) |  | [optional] 
**processParameters** | [**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\ProcessParameters**](ProcessParameters.md) | Process Parameters | [optional] 
**properties** | [**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\PropertiesCollection**](PropertiesCollection.md) |  | [optional] 
**repository** | [**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\BuildRepository**](BuildRepository.md) | The repository | [optional] 
**retentionRules** | [**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\RetentionPolicy[]**](RetentionPolicy.md) |  | [optional] 
**tags** | **string[]** |  | [optional] 
**triggers** | [**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\BuildTrigger[]**](BuildTrigger.md) |  | [optional] 
**variables** | [**map[string,\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\BuildDefinitionVariable]**](BuildDefinitionVariable.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


