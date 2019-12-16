# BuildDefinitionReference

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
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
**links** | [**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\ReferenceLinks**](ReferenceLinks.md) |  | [optional] 
**authoredBy** | [**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\IdentityRef**](IdentityRef.md) | The author of the definition. | [optional] 
**draftOf** | [**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\DefinitionReference**](DefinitionReference.md) | A reference to the definition that this definition is a draft of, if this is a draft definition. | [optional] 
**drafts** | [**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\DefinitionReference[]**](DefinitionReference.md) | The list of drafts associated with this definition, if this is not a draft definition. | [optional] 
**latestBuild** | [**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\Build**](Build.md) |  | [optional] 
**latestCompletedBuild** | [**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\Build**](Build.md) |  | [optional] 
**metrics** | [**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\BuildMetric[]**](BuildMetric.md) |  | [optional] 
**quality** | **string** | The quality of the definition document (draft, etc.) | [optional] 
**queue** | [**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\AgentPoolQueue**](AgentPoolQueue.md) | The default queue for builds run against this definition. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


