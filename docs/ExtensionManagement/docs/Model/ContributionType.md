# ContributionType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | Description of the contribution/type | [optional] 
**id** | **string** | Fully qualified identifier of the contribution/type | [optional] 
**visibleTo** | **string[]** | VisibleTo can be used to restrict whom can reference a given contribution/type. This value should be a list of publishers or extensions access is restricted too.  Examples: \&quot;ms\&quot; - Means only the \&quot;ms\&quot; publisher can reference this. \&quot;ms.vss-web\&quot; - Means only the \&quot;vss-web\&quot; extension from the \&quot;ms\&quot; publisher can reference this. | [optional] 
**indexed** | **bool** | Controls whether or not contributions of this type have the type indexed for queries. This allows clients to find all extensions that have a contribution of this type.  NOTE: Only TrustedPartners are allowed to specify indexed contribution types. | [optional] 
**name** | **string** | Friendly name of the contribution/type | [optional] 
**properties** | [**map[string,\FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\ContributionPropertyDescription]**](ContributionPropertyDescription.md) | Describes the allowed properties for this contribution type | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


