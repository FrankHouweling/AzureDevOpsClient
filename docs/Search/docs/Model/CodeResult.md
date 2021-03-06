# CodeResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**collection** | [**\FrankHouweling\AzureDevOpsClient\Search\Model\Collection**](Collection.md) | Collection of the result file. | [optional] 
**contentId** | **string** | ContentId of the result file. | [optional] 
**fileName** | **string** | Name of the result file. | [optional] 
**matches** | [**map[string,\FrankHouweling\AzureDevOpsClient\Search\Model\Hit[]]**](array.md) | Dictionary of field to hit offsets in the result file. Key identifies the area in which hits were found, for ex: file content/file name etc. | [optional] 
**path** | **string** | Path at which result file is present. | [optional] 
**project** | [**\FrankHouweling\AzureDevOpsClient\Search\Model\Project**](Project.md) | Project of the result file. | [optional] 
**repository** | [**\FrankHouweling\AzureDevOpsClient\Search\Model\Repository**](Repository.md) | Repository of the result file. | [optional] 
**versions** | [**\FrankHouweling\AzureDevOpsClient\Search\Model\Version[]**](Version.md) | Versions of the result file. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


