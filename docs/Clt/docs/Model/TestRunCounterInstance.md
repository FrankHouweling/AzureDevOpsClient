# TestRunCounterInstance

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**categoryName** | **string** | CategoryName for this counter | [optional] 
**counterInstanceId** | **string** | Combination of source and SourceInstanceId | [optional] 
**counterName** | **string** | Name of the counter Eg: Errors/Sec | [optional] 
**counterUnits** | **string** | Units for this counter. Empty string for mere numbers | [optional] 
**instanceName** | **string** | Instance Name Eg: _Avg,_Total etc | [optional] 
**isPreselectedCounter** | **bool** | true if this counter instance is a default counter | [optional] 
**machineName** | **string** | Machine from where this counter was collected Used in case of machine specific counters like - Agent CPU and memory etc. | [optional] 
**partOfCounterGroups** | **string[]** | Counter Groups to which this counter instance is part of | [optional] 
**summaryData** | [**\FrankHouweling\AzureDevOpsClient\Clt\Model\WebInstanceSummaryData**](WebInstanceSummaryData.md) | Summary result for this counter instance | [optional] 
**uniqueName** | **string** | A unique name for this counter instance | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


