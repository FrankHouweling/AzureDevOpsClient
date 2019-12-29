# Release

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\ReferenceLinks**](ReferenceLinks.md) | Gets links to access the release. | [optional] 
**artifacts** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\Artifact[]**](Artifact.md) | Gets or sets the list of artifacts. | [optional] 
**comment** | **string** | Gets or sets comment. | [optional] 
**createdBy** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\IdentityRef**](IdentityRef.md) | Gets or sets the identity who created. | [optional] 
**createdFor** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\IdentityRef**](IdentityRef.md) | Gets or sets the identity for whom release was created. | [optional] 
**createdOn** | [**\DateTime**](\DateTime.md) | Gets date on which it got created. | [optional] 
**definitionSnapshotRevision** | **int** | Gets revision number of definition snapshot. | [optional] 
**description** | **string** | Gets or sets description of release. | [optional] 
**environments** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseEnvironment[]**](ReleaseEnvironment.md) | Gets list of environments. | [optional] 
**id** | **int** | Gets the unique identifier of this field. | [optional] 
**keepForever** | **bool** | Whether to exclude the release from retention policies. | [optional] 
**logsContainerUrl** | **string** | Gets logs container url. | [optional] 
**modifiedBy** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\IdentityRef**](IdentityRef.md) | Gets or sets the identity who modified. | [optional] 
**modifiedOn** | [**\DateTime**](\DateTime.md) | Gets date on which it got modified. | [optional] 
**name** | **string** | Gets name. | [optional] 
**poolName** | **string** | Gets pool name. | [optional] 
**projectReference** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\ProjectReference**](ProjectReference.md) | Gets or sets project reference. | [optional] 
**properties** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\PropertiesCollection**](PropertiesCollection.md) |  | [optional] 
**reason** | **string** | Gets reason of release. | [optional] 
**releaseDefinition** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseDefinitionShallowReference**](ReleaseDefinitionShallowReference.md) | Gets releaseDefinitionReference which specifies the reference of the release definition to which this release is associated. | [optional] 
**releaseDefinitionRevision** | **int** | Gets or sets the release definition revision. | [optional] 
**releaseNameFormat** | **string** | Gets release name format. | [optional] 
**status** | **string** | Gets status. | [optional] 
**tags** | **string[]** | Gets or sets list of tags. | [optional] 
**triggeringArtifactAlias** | **string** |  | [optional] 
**variableGroups** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\VariableGroup[]**](VariableGroup.md) | Gets the list of variable groups. | [optional] 
**variables** | [**map[string,\FrankHouweling\AzureDevOpsClient\Release\Model\ConfigurationVariableValue]**](ConfigurationVariableValue.md) | Gets or sets the dictionary of variables. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


