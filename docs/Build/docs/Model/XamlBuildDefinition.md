# XamlBuildDefinition

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
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
**links** | [**\FrankHouweling\AzureDevOpsClient\Build\Model\ReferenceLinks**](ReferenceLinks.md) |  | [optional] 
**batchSize** | **int** | Batch size of the definition | [optional] 
**buildArgs** | **string** |  | [optional] 
**continuousIntegrationQuietPeriod** | **int** | The continuous integration quiet period | [optional] 
**controller** | [**\FrankHouweling\AzureDevOpsClient\Build\Model\BuildController**](BuildController.md) | The build controller | [optional] 
**createdOn** | [**\DateTime**](\DateTime.md) | The date this definition was created | [optional] 
**defaultDropLocation** | **string** | Default drop location for builds from this definition | [optional] 
**description** | **string** | Description of the definition | [optional] 
**lastBuild** | [**\FrankHouweling\AzureDevOpsClient\Build\Model\XamlBuildReference**](XamlBuildReference.md) | The last build on this definition | [optional] 
**repository** | [**\FrankHouweling\AzureDevOpsClient\Build\Model\BuildRepository**](BuildRepository.md) | The repository | [optional] 
**supportedReasons** | **string** | The reasons supported by the template | [optional] 
**triggerType** | **string** | How builds are triggered from this definition | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


