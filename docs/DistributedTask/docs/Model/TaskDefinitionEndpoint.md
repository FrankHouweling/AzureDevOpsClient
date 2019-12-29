# TaskDefinitionEndpoint

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**connectionId** | **string** | An ID that identifies a service connection to be used for authenticating endpoint requests. | [optional] 
**keySelector** | **string** | An Json based keyselector to filter response returned by fetching the endpoint &lt;c&gt;Url&lt;/c&gt;.A Json based keyselector must be prefixed with \&quot;jsonpath:\&quot;. KeySelector can be used to specify the filter to get the keys for the values specified with Selector. &lt;example&gt; The following keyselector defines an Json for extracting nodes named &#39;ServiceName&#39;. &lt;code&gt; endpoint.KeySelector &#x3D; \&quot;jsonpath://ServiceName\&quot;; &lt;/code&gt;&lt;/example&gt; | [optional] 
**scope** | **string** | The scope as understood by Connected Services. Essentially, a project-id for now. | [optional] 
**selector** | **string** | An XPath/Json based selector to filter response returned by fetching the endpoint &lt;c&gt;Url&lt;/c&gt;. An XPath based selector must be prefixed with the string \&quot;xpath:\&quot;. A Json based selector must be prefixed with \&quot;jsonpath:\&quot;. &lt;example&gt; The following selector defines an XPath for extracting nodes named &#39;ServiceName&#39;. &lt;code&gt; endpoint.Selector &#x3D; \&quot;xpath://ServiceName\&quot;; &lt;/code&gt;&lt;/example&gt; | [optional] 
**taskId** | **string** | TaskId that this endpoint belongs to. | [optional] 
**url** | **string** | URL to GET. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


