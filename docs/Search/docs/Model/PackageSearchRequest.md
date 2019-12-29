# PackageSearchRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**orderBy** | [**\FrankHouweling\AzureDevOpsClient\Search\Model\SortOption[]**](SortOption.md) | Options for sorting search results. If set to null, the results will be returned sorted by relevance. If more than one sort option is provided, the results are sorted in the order specified in the OrderBy. | [optional] 
**skip** | **int** | Number of results to be skipped. | [optional] 
**top** | **int** | Number of results to be returned. | [optional] 
**includeFacets** | **bool** | Flag to opt for faceting in the result. Default behavior is false. | [optional] 
**filters** | [**map[string,string[]]**](array.md) | Filters to be applied. Set it to null if there are no filters to be applied. | [optional] 
**searchText** | **string** | The search text. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


