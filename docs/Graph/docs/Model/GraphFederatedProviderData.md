# GraphFederatedProviderData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accessToken** | **string** | The access token that can be used to communicated with the federated provider on behalf on the target identity, if we were able to successfully acquire one, otherwise &lt;code&gt;null&lt;/code&gt;, if we were not. | [optional] 
**providerName** | **string** | The name of the federated provider, e.g. \&quot;github.com\&quot;. | [optional] 
**subjectDescriptor** | **string** | The descriptor of the graph subject to which this federated provider data corresponds. | [optional] 
**version** | **int** | The version number of this federated provider data, which corresponds to when it was last updated. Can be used to prevent returning stale provider data from the cache when the caller is aware of a newer version, such as to prevent local cache poisoning from a remote cache or store. This is the app layer equivalent of the data layer sequence ID. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


