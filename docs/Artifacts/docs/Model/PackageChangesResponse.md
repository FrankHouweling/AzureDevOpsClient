# PackageChangesResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\ReferenceLinks**](ReferenceLinks.md) | Related REST links. | [optional] 
**count** | **int** | Number of changes in this batch. | [optional] 
**nextPackageContinuationToken** | **int** | Token that should be used in future calls for this feed to retrieve new changes. | [optional] 
**packageChanges** | [**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\PackageChange[]**](PackageChange.md) | List of changes. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


