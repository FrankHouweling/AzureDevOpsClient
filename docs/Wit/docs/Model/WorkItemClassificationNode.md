# WorkItemClassificationNode

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\FrankHouweling\AzureDevOpsClient\Wit\Model\ReferenceLinks**](ReferenceLinks.md) | Link references to related REST resources. | [optional] 
**url** | **string** |  | [optional] 
**attributes** | **map[string,object]** | Dictionary that has node attributes like start/finish date for iteration nodes. | [optional] 
**children** | [**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemClassificationNode[]**](WorkItemClassificationNode.md) | List of child nodes fetched. | [optional] 
**hasChildren** | **bool** | Flag that indicates if the classification node has any child nodes. | [optional] 
**id** | **int** | Integer ID of the classification node. | [optional] 
**identifier** | **string** | GUID ID of the classification node. | [optional] 
**name** | **string** | Name of the classification node. | [optional] 
**path** | **string** | Path of the classification node. | [optional] 
**structureType** | **string** | Node structure type. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


