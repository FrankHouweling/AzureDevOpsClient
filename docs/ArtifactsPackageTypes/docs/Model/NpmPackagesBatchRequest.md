# NpmPackagesBatchRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**data** | [**\FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Model\BatchOperationData**](BatchOperationData.md) | Data required to perform the operation. This is optional based on type of operation. Use BatchPromoteData if performing a promote operation. | [optional] 
**operation** | **string** | Type of operation that needs to be performed on packages. | [optional] 
**packages** | [**\FrankHouweling\AzureDevOpsClient\ArtifactsPackageTypes\Model\MinimalPackageDetails[]**](MinimalPackageDetails.md) | The packages onto which the operation will be performed. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


