# BuildDefinition32

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\FrankHouweling\AzureDevOpsClient\Build\Model\ReferenceLinks**](ReferenceLinks.md) |  | [optional] 
**authoredBy** | [**\FrankHouweling\AzureDevOpsClient\Build\Model\IdentityRef**](IdentityRef.md) | The author of the definition. | [optional] 
**draftOf** | [**\FrankHouweling\AzureDevOpsClient\Build\Model\DefinitionReference**](DefinitionReference.md) | A reference to the definition that this definition is a draft of, if this is a draft definition. | [optional] 
**drafts** | [**\FrankHouweling\AzureDevOpsClient\Build\Model\DefinitionReference[]**](DefinitionReference.md) | The list of drafts associated with this definition, if this is not a draft definition. | [optional] 
**metrics** | [**\FrankHouweling\AzureDevOpsClient\Build\Model\BuildMetric[]**](BuildMetric.md) |  | [optional] 
**quality** | **string** | The quality of the definition document (draft, etc.) | [optional] 
**queue** | [**\FrankHouweling\AzureDevOpsClient\Build\Model\AgentPoolQueue**](AgentPoolQueue.md) | The default queue for builds run against this definition. | [optional] 
**createdDate** | [**\DateTime**](\DateTime.md) | The date this version of the definition was created. | [optional] 
**id** | **int** | The ID of the referenced definition. | [optional] 
**name** | **string** | The name of the referenced definition. | [optional] 
**path** | **string** | The folder path of the definition. | [optional] 
**project** | [**\FrankHouweling\AzureDevOpsClient\Build\Model\TeamProjectReference**](TeamProjectReference.md) | A reference to the project. | [optional] 
**queueStatus** | **string** | A value that indicates whether builds can be queued against this definition. | [optional] 
**revision** | **int** | The definition revision number. | [optional] 
**type** | **string** | The type of the definition. | [optional] 
**uri** | **string** | The definition&#39;s URI. | [optional] 
**url** | **string** | The REST URL of the definition. | [optional] 
**badgeEnabled** | **bool** | Indicates whether badges are enabled for this definition | [optional] 
**build** | [**\FrankHouweling\AzureDevOpsClient\Build\Model\BuildDefinitionStep[]**](BuildDefinitionStep.md) |  | [optional] 
**buildNumberFormat** | **string** | The build number format | [optional] 
**comment** | **string** | The comment entered when saving the definition | [optional] 
**demands** | [**\FrankHouweling\AzureDevOpsClient\Build\Model\Demand[]**](Demand.md) |  | [optional] 
**description** | **string** | The description | [optional] 
**dropLocation** | **string** | The drop location for the definition | [optional] 
**jobAuthorizationScope** | **string** | The job authorization scope for builds which are queued against this definition | [optional] 
**jobCancelTimeoutInMinutes** | **int** | The job cancel timeout in minutes for builds which are cancelled by user for this definition | [optional] 
**jobTimeoutInMinutes** | **int** | The job execution timeout in minutes for builds which are queued against this definition | [optional] 
**latestBuild** | [**\FrankHouweling\AzureDevOpsClient\Build\Model\Build**](Build.md) |  | [optional] 
**latestCompletedBuild** | [**\FrankHouweling\AzureDevOpsClient\Build\Model\Build**](Build.md) |  | [optional] 
**options** | [**\FrankHouweling\AzureDevOpsClient\Build\Model\BuildOption[]**](BuildOption.md) |  | [optional] 
**processParameters** | [**\FrankHouweling\AzureDevOpsClient\Build\Model\ProcessParameters**](ProcessParameters.md) | Process Parameters | [optional] 
**properties** | [**\FrankHouweling\AzureDevOpsClient\Build\Model\PropertiesCollection**](PropertiesCollection.md) |  | [optional] 
**repository** | [**\FrankHouweling\AzureDevOpsClient\Build\Model\BuildRepository**](BuildRepository.md) | The repository | [optional] 
**retentionRules** | [**\FrankHouweling\AzureDevOpsClient\Build\Model\RetentionPolicy[]**](RetentionPolicy.md) |  | [optional] 
**tags** | **string[]** |  | [optional] 
**triggers** | [**\FrankHouweling\AzureDevOpsClient\Build\Model\BuildTrigger[]**](BuildTrigger.md) |  | [optional] 
**variables** | [**map[string,\FrankHouweling\AzureDevOpsClient\Build\Model\BuildDefinitionVariable]**](BuildDefinitionVariable.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


