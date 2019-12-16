# UpstreamSource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**deletedDate** | [**\DateTime**](\DateTime.md) | UTC date that this upstream was deleted. | [optional] 
**displayLocation** | **string** | Locator for connecting to the upstream source in a user friendly format, that may potentially change over time | [optional] 
**id** | **string** | Identity of the upstream source. | [optional] 
**internalUpstreamCollectionId** | **string** | For an internal upstream type, track the Azure DevOps organization that contains it. | [optional] 
**internalUpstreamFeedId** | **string** | For an internal upstream type, track the feed id being referenced. | [optional] 
**internalUpstreamProjectId** | **string** | For an internal upstream type, track the project of the feed being referenced. | [optional] 
**internalUpstreamViewId** | **string** | For an internal upstream type, track the view of the feed being referenced. | [optional] 
**location** | **string** | Consistent locator for connecting to the upstream source. | [optional] 
**name** | **string** | Display name. | [optional] 
**protocol** | **string** | Package type associated with the upstream source. | [optional] 
**status** | **string** | Specifies the status of the upstream. | [optional] 
**statusDetails** | [**\FrankHouweling\AzureDevOpsClient\Artifacts\Model\UpstreamStatusDetail[]**](UpstreamStatusDetail.md) | Provides a human-readable reason for the status of the upstream. | [optional] 
**upstreamSourceType** | **string** | Source type, such as Public or Internal. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


