# WorkItemSearchResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**facets** | [**map[string,\FrankHouweling\AzureDevOpsClient\Search\Model\Filter[]]**](array.md) | A dictionary storing an array of &lt;code&gt;Filter&lt;/code&gt; object against each facet. | [optional] 
**infoCode** | **int** | Numeric code indicating any additional information: 0 - Ok, 1 - Account is being reindexed, 2 - Account indexing has not started, 3 - Invalid Request, 4 - Prefix wildcard query not supported, 5 - MultiWords with code facet not supported, 6 - Account is being onboarded, 7 - Account is being onboarded or reindexed, 8 - Top value trimmed to maxresult allowed 9 - Branches are being indexed, 10 - Faceting not enabled, 11 - Work items not accessible, 19 - Phrase queries with code type filters not supported, 20 - Wildcard queries with code type filters not supported. Any other info code is used for internal purpose. | [optional] 
**count** | **int** | Total number of matched work items. | [optional] 
**results** | [**\FrankHouweling\AzureDevOpsClient\Search\Model\WorkItemResult[]**](WorkItemResult.md) | List of top matched work items. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


