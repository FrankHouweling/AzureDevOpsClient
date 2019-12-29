# DataSourceBinding

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**callbackContextTemplate** | **string** | Pagination format supported by this data source(ContinuationToken/SkipTop). | [optional] 
**callBackRequiredTemplate** | **string** | Subsequent calls needed? | [optional] 
**dataSourceName** | **string** | Name of the datasource. | [optional] 
**endpointId** | **string** | Endpoint ID of the datasource. | [optional] 
**endpointUrl** | **string** | Endpoint URL of the datasource. | [optional] 
**initialContextTemplate** | **string** | Defines the initial value of the query params | [optional] 
**parameters** | **map[string,string]** | Parameters of the datasource. | [optional] 
**requestContent** | **string** | Gets or sets http request body | [optional] 
**requestVerb** | **string** | Gets or sets http request verb | [optional] 
**resultSelector** | **string** | Result selector applied on output of datasource result, for example jsonpath:$.value[?(@.properties.isEnabled &#x3D;&#x3D; true)]. | [optional] 
**resultTemplate** | **string** | Format of the return results, for example. { \&quot;Value\&quot; : \&quot;{{{id}}}\&quot;, \&quot;DisplayValue\&quot; : \&quot;{{{name}}}\&quot; }. | [optional] 
**target** | **string** | Target of the datasource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


