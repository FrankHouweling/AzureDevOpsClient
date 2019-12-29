# WorkItemField

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\FrankHouweling\AzureDevOpsClient\Wit\Model\ReferenceLinks**](ReferenceLinks.md) | Link references to related REST resources. | [optional] 
**url** | **string** |  | [optional] 
**canSortBy** | **bool** | Indicates whether the field is sortable in server queries. | [optional] 
**description** | **string** | The description of the field. | [optional] 
**isDeleted** | **bool** | Indicates whether this field is deleted. | [optional] 
**isIdentity** | **bool** | Indicates whether this field is an identity field. | [optional] 
**isPicklist** | **bool** | Indicates whether this instance is picklist. | [optional] 
**isPicklistSuggested** | **bool** | Indicates whether this instance is a suggested picklist . | [optional] 
**isQueryable** | **bool** | Indicates whether the field can be queried in the server. | [optional] 
**name** | **string** | The name of the field. | [optional] 
**picklistId** | **string** | If this field is picklist, the identifier of the picklist associated, otherwise null | [optional] 
**readOnly** | **bool** | Indicates whether the field is [read only]. | [optional] 
**referenceName** | **string** | The reference name of the field. | [optional] 
**supportedOperations** | [**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemFieldOperation[]**](WorkItemFieldOperation.md) | The supported operations on this field. | [optional] 
**type** | **string** | The type of the field. | [optional] 
**usage** | **string** | The usage of the field. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


