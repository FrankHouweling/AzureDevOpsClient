# FeedCore

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**capabilities** | **string** | Supported capabilities of a feed. | [optional] 
**fullyQualifiedId** | **string** | This will either be the feed GUID or the feed GUID and view GUID depending on how the feed was accessed. | [optional] 
**fullyQualifiedName** | **string** | Full name of the view, in feed@view format. | [optional] 
**id** | **string** | A GUID that uniquely identifies this feed. | [optional] 
**isReadOnly** | **bool** | If set, all packages in the feed are immutable.  It is important to note that feed views are immutable; therefore, this flag will always be set for views. | [optional] 
**name** | **string** | A name for the feed. feed names must follow these rules: &lt;list type&#x3D;\&quot;bullet\&quot;&gt;&lt;item&gt;&lt;description&gt; Must not exceed 64 characters &lt;/description&gt;&lt;/item&gt;&lt;item&gt;&lt;description&gt; Must not contain whitespaces &lt;/description&gt;&lt;/item&gt;&lt;item&gt;&lt;description&gt; Must not start with an underscore or a period &lt;/description&gt;&lt;/item&gt;&lt;item&gt;&lt;description&gt; Must not end with a period &lt;/description&gt;&lt;/item&gt;&lt;item&gt;&lt;description&gt; Must not contain any of the following illegal characters: &lt;![CDATA[ @, ~, ;, {, }, \\, +, &#x3D;, &lt;, &gt;, |, /, \\\\, ?, :, &amp;, $, *, \\\&quot;, #, [, ] ]]&gt;&lt;/description&gt;&lt;/item&gt;&lt;/list&gt; | [optional] 
**project** | [**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\ProjectReference**](ProjectReference.md) | The project that this feed is associated with. | [optional] 
**upstreamEnabled** | **bool** | OBSOLETE: This should always be true.  Setting to false will override all sources in UpstreamSources. | [optional] 
**upstreamSources** | [**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\UpstreamSource[]**](UpstreamSource.md) | A list of sources that this feed will fetch packages from.  An empty list indicates that this feed will not search any additional sources for packages. | [optional] 
**view** | [**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\FeedView**](FeedView.md) | Definition of the view. | [optional] 
**viewId** | **string** | View Id. | [optional] 
**viewName** | **string** | View name. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


