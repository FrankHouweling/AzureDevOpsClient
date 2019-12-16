# ReleaseStartMetadata

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**artifacts** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\ArtifactMetadata[]**](ArtifactMetadata.md) | Sets list of artifact to create a release. | [optional] 
**definitionId** | **int** | Sets definition Id to create a release. | [optional] 
**description** | **string** | Sets description to create a release. | [optional] 
**environmentsMetadata** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\ReleaseStartEnvironmentMetadata[]**](ReleaseStartEnvironmentMetadata.md) | Sets list of environments meta data. | [optional] 
**isDraft** | **bool** | Sets &#39;true&#39; to create release in draft mode, &#39;false&#39; otherwise. | [optional] 
**manualEnvironments** | **string[]** | Sets list of environments to manual as condition. | [optional] 
**properties** | [**\FrankHouweling\AzureDevOpsClient\Release\Model\PropertiesCollection**](PropertiesCollection.md) |  | [optional] 
**reason** | **string** | Sets reason to create a release. | [optional] 
**variables** | [**map[string,\FrankHouweling\AzureDevOpsClient\Release\Model\ConfigurationVariableValue]**](ConfigurationVariableValue.md) | Sets list of release variables to be overridden at deployment time. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


