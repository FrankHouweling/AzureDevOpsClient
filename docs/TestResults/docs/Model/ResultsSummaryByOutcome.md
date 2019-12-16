# ResultsSummaryByOutcome

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**aggregatedResultDetailsByOutcome** | [**map[string,\FrankHouweling\AzureDevOpsClient\TestResults\Model\AggregatedResultDetailsByOutcome]**](AggregatedResultDetailsByOutcome.md) | Aggregated result details for each test result outcome. | [optional] 
**duration** | **string** | Time taken by results. | [optional] 
**notReportedTestCount** | **int** | Total number of not reported test results. | [optional] 
**totalTestCount** | **int** | Total number of test results. (It includes NotImpacted test results as well which need to exclude while calculating pass/fail test result percentage). | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


