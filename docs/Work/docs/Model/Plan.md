# Plan

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**createdByIdentity** | [**\FrankHouweling\AzureDevOpsClient\Work\Model\IdentityRef**](IdentityRef.md) | Identity that created this plan. Defaults to null for records before upgrading to ScaledAgileViewComponent4. | [optional] 
**createdDate** | [**\DateTime**](\DateTime.md) | Date when the plan was created | [optional] 
**description** | **string** | Description of the plan | [optional] 
**id** | **string** | Id of the plan | [optional] 
**modifiedByIdentity** | [**\FrankHouweling\AzureDevOpsClient\Work\Model\IdentityRef**](IdentityRef.md) | Identity that last modified this plan. Defaults to null for records before upgrading to ScaledAgileViewComponent4. | [optional] 
**modifiedDate** | [**\DateTime**](\DateTime.md) | Date when the plan was last modified. Default to CreatedDate when the plan is first created. | [optional] 
**name** | **string** | Name of the plan | [optional] 
**properties** | **object** | The PlanPropertyCollection instance associated with the plan. These are dependent on the type of the plan. For example, DeliveryTimelineView, it would be of type DeliveryViewPropertyCollection. | [optional] 
**revision** | **int** | Revision of the plan. Used to safeguard users from overwriting each other&#39;s changes. | [optional] 
**type** | **string** | Type of the plan | [optional] 
**url** | **string** | The resource url to locate the plan via rest api | [optional] 
**userPermissions** | **string** | Bit flag indicating set of permissions a user has to the plan. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


