# ReleaseDefinition

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\ReferenceLinks**](ReferenceLinks.md) | Gets the links to related resources, APIs, and views for the release definition. | [optional] 
**id** | **int** | Gets the unique identifier of release definition. | [optional] 
**name** | **string** | Gets or sets the name of the release definition. | [optional] 
**path** | **string** | Gets or sets the path of the release definition. | [optional] 
**projectReference** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\ProjectReference**](ProjectReference.md) | Gets or sets project reference. | [optional] 
**url** | **string** | Gets the REST API url to access the release definition. | [optional] 
**artifacts** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\Artifact[]**](Artifact.md) | Gets or sets the list of artifacts. | [optional] 
**comment** | **string** | Gets or sets comment. | [optional] 
**createdBy** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\IdentityRef**](IdentityRef.md) | Gets or sets the identity who created. | [optional] 
**createdOn** | [**\DateTime**](\DateTime.md) | Gets date on which it got created. | [optional] 
**description** | **string** | Gets or sets the description. | [optional] 
**environments** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseDefinitionEnvironment[]**](ReleaseDefinitionEnvironment.md) | Gets or sets the list of environments. | [optional] 
**isDeleted** | **bool** | Whether release definition is deleted. | [optional] 
**lastRelease** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseReference**](ReleaseReference.md) | Gets the reference of last release. | [optional] 
**modifiedBy** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\IdentityRef**](IdentityRef.md) | Gets or sets the identity who modified. | [optional] 
**modifiedOn** | [**\DateTime**](\DateTime.md) | Gets date on which it got modified. | [optional] 
**properties** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\PropertiesCollection**](PropertiesCollection.md) | Gets or sets properties. | [optional] 
**releaseNameFormat** | **string** | Gets or sets the release name format. | [optional] 
**revision** | **int** | Gets the revision number. | [optional] 
**source** | **string** | Gets or sets source of release definition. | [optional] 
**tags** | **string[]** | Gets or sets list of tags. | [optional] 
**triggers** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseTriggerBase[]**](ReleaseTriggerBase.md) | Gets or sets the list of triggers. | [optional] 
**variableGroups** | **int[]** | Gets or sets the list of variable groups. | [optional] 
**variables** | [**map[string,\FrankHouweling\AzureDevOpsClient\Release\Model\ConfigurationVariableValue]**](ConfigurationVariableValue.md) | Gets or sets the dictionary of variables. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


