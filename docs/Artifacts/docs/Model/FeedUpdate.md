# FeedUpdate

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allowUpstreamNameConflict** | **bool** | If set, the feed will allow upload of packages that exist on the upstream | [optional] 
**badgesEnabled** | **bool** | If set, this feed supports generation of package badges. | [optional] 
**defaultViewId** | **string** | The view that the feed administrator has indicated is the default experience for readers. | [optional] 
**description** | **string** | A description for the feed.  Descriptions must not exceed 255 characters. | [optional] 
**hideDeletedPackageVersions** | **bool** | If set, feed will hide all deleted/unpublished versions | [optional] 
**id** | **string** | A GUID that uniquely identifies this feed. | [optional] 
**name** | **string** | A name for the feed. feed names must follow these rules: &lt;list type&#x3D;\&quot;bullet\&quot;&gt;&lt;item&gt;&lt;description&gt; Must not exceed 64 characters &lt;/description&gt;&lt;/item&gt;&lt;item&gt;&lt;description&gt; Must not contain whitespaces &lt;/description&gt;&lt;/item&gt;&lt;item&gt;&lt;description&gt; Must not start with an underscore or a period &lt;/description&gt;&lt;/item&gt;&lt;item&gt;&lt;description&gt; Must not end with a period &lt;/description&gt;&lt;/item&gt;&lt;item&gt;&lt;description&gt; Must not contain any of the following illegal characters: &lt;![CDATA[ @, ~, ;, {, }, \\, +, &#x3D;, &lt;, &gt;, |, /, \\\\, ?, :, &amp;, $, *, \\\&quot;, #, [, ] ]]&gt;&lt;/description&gt;&lt;/item&gt;&lt;/list&gt; | [optional] 
**upstreamEnabled** | **bool** | OBSOLETE: If set, the feed can proxy packages from an upstream feed | [optional] 
**upstreamSources** | [**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\UpstreamSource[]**](UpstreamSource.md) | A list of sources that this feed will fetch packages from.  An empty list indicates that this feed will not search any additional sources for packages. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


