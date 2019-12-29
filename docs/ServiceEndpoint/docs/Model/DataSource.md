# DataSource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**authenticationScheme** | [**\FrankHouweling\AzureDevOpsClient\ServiceEndpoint\Model\AuthenticationSchemeReference**](AuthenticationSchemeReference.md) | Gets or sets the authentication scheme for the endpoint request. | [optional] 
**callbackContextTemplate** | **string** | Gets or sets the pagination format supported by this data source(ContinuationToken/SkipTop). | [optional] 
**callbackRequiredTemplate** | **string** | Gets or sets the template to check if subsequent call is needed. | [optional] 
**endpointUrl** | **string** | Gets or sets the endpoint url of the data source. | [optional] 
**headers** | [**\FrankHouweling\AzureDevOpsClient\ServiceEndpoint\Model\AuthorizationHeader[]**](AuthorizationHeader.md) | Gets or sets the authorization headers of the request. | [optional] 
**initialContextTemplate** | **string** | Gets or sets the initial value of the query params. | [optional] 
**name** | **string** | Gets or sets the name of the data source. | [optional] 
**requestContent** | **string** | Gets or sets the request content of the endpoint request. | [optional] 
**requestVerb** | **string** | Gets or sets the request method of the endpoint request. | [optional] 
**resourceUrl** | **string** | Gets or sets the resource url of the endpoint request. | [optional] 
**resultSelector** | **string** | Gets or sets the result selector to filter the response of the endpoint request. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


