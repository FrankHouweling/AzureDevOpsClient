# QueryHierarchyItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\FrankHouweling\AzureDevOpsClient\Wit\Model\ReferenceLinks**](ReferenceLinks.md) | Link references to related REST resources. | [optional] 
**url** | **string** |  | [optional] 
**children** | [**\FrankHouweling\AzureDevOpsClient\Wit\Model\QueryHierarchyItem[]**](QueryHierarchyItem.md) | The child query items inside a query folder. | [optional] 
**clauses** | [**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemQueryClause**](WorkItemQueryClause.md) | The clauses for a flat query. | [optional] 
**columns** | [**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemFieldReference[]**](WorkItemFieldReference.md) | The columns of the query. | [optional] 
**createdBy** | [**\FrankHouweling\AzureDevOpsClient\Wit\Model\IdentityReference**](IdentityReference.md) | The identity who created the query item. | [optional] 
**createdDate** | [**\DateTime**](\DateTime.md) | When the query item was created. | [optional] 
**filterOptions** | **string** | The link query mode. | [optional] 
**hasChildren** | **bool** | If this is a query folder, indicates if it contains any children. | [optional] 
**id** | **string** | The id of the query item. | [optional] 
**isDeleted** | **bool** | Indicates if this query item is deleted. Setting this to false on a deleted query item will undelete it. Undeleting a query or folder will not bring back the permission changes that were previously applied to it. | [optional] 
**isFolder** | **bool** | Indicates if this is a query folder or a query. | [optional] 
**isInvalidSyntax** | **bool** | Indicates if the WIQL of this query is invalid. This could be due to invalid syntax or a no longer valid area/iteration path. | [optional] 
**isPublic** | **bool** | Indicates if this query item is public or private. | [optional] 
**lastExecutedBy** | [**\FrankHouweling\AzureDevOpsClient\Wit\Model\IdentityReference**](IdentityReference.md) | The identity who last ran the query. | [optional] 
**lastExecutedDate** | [**\DateTime**](\DateTime.md) | When the query was last run. | [optional] 
**lastModifiedBy** | [**\FrankHouweling\AzureDevOpsClient\Wit\Model\IdentityReference**](IdentityReference.md) | The identity who last modified the query item. | [optional] 
**lastModifiedDate** | [**\DateTime**](\DateTime.md) | When the query item was last modified. | [optional] 
**linkClauses** | [**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemQueryClause**](WorkItemQueryClause.md) | The link query clause. | [optional] 
**name** | **string** | The name of the query item. | [optional] 
**path** | **string** | The path of the query item. | [optional] 
**queryRecursionOption** | **string** | The recursion option for use in a tree query. | [optional] 
**queryType** | **string** | The type of query. | [optional] 
**sortColumns** | [**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemQuerySortColumn[]**](WorkItemQuerySortColumn.md) | The sort columns of the query. | [optional] 
**sourceClauses** | [**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemQueryClause**](WorkItemQueryClause.md) | The source clauses in a tree or one-hop link query. | [optional] 
**targetClauses** | [**\FrankHouweling\AzureDevOpsClient\Wit\Model\WorkItemQueryClause**](WorkItemQueryClause.md) | The target clauses in a tree or one-hop link query. | [optional] 
**wiql** | **string** | The WIQL text of the query | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


