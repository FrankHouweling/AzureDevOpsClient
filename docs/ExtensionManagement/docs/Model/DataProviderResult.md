# DataProviderResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**clientProviders** | [**map[string,\AzureDevOpsClient\ExtensionManagement\AzureDevOpsClient\ExtensionManagement\Model\ClientDataProviderQuery]**](ClientDataProviderQuery.md) | This is the set of data providers that were requested, but either they were defined as client providers, or as remote providers that failed and may be retried by the client. | [optional] 
**data** | **map[string,object]** | Property bag of data keyed off of the data provider contribution id | [optional] 
**exceptions** | [**map[string,\AzureDevOpsClient\ExtensionManagement\AzureDevOpsClient\ExtensionManagement\Model\DataProviderExceptionDetails]**](DataProviderExceptionDetails.md) | Set of exceptions that occurred resolving the data providers. | [optional] 
**resolvedProviders** | [**\AzureDevOpsClient\ExtensionManagement\AzureDevOpsClient\ExtensionManagement\Model\ResolvedDataProvider[]**](ResolvedDataProvider.md) | List of data providers resolved in the data-provider query | [optional] 
**scopeName** | **string** | Scope name applied to this data provider result. | [optional] 
**scopeValue** | **string** | Scope value applied to this data provider result. | [optional] 
**sharedData** | **map[string,object]** | Property bag of shared data that was contributed to by any of the individual data providers | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


