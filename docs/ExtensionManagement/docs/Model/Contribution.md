# Contribution

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | Description of the contribution/type | [optional] 
**id** | **string** | Fully qualified identifier of the contribution/type | [optional] 
**visibleTo** | **string[]** | VisibleTo can be used to restrict whom can reference a given contribution/type. This value should be a list of publishers or extensions access is restricted too.  Examples: \&quot;ms\&quot; - Means only the \&quot;ms\&quot; publisher can reference this. \&quot;ms.vss-web\&quot; - Means only the \&quot;vss-web\&quot; extension from the \&quot;ms\&quot; publisher can reference this. | [optional] 
**constraints** | [**\FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\ContributionConstraint[]**](ContributionConstraint.md) | List of constraints (filters) that should be applied to the availability of this contribution | [optional] 
**includes** | **string[]** | Includes is a set of contributions that should have this contribution included in their targets list. | [optional] 
**properties** | [**\FrankHouweling\AzureDevOpsClient\ExtensionManagement\Model\JObject**](JObject.md) | Properties/attributes of this contribution | [optional] 
**restrictedTo** | **string[]** | List of demanded claims in order for the user to see this contribution (like anonymous, public, member...). | [optional] 
**targets** | **string[]** | The ids of the contribution(s) that this contribution targets. (parent contributions) | [optional] 
**type** | **string** | Id of the Contribution Type | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


