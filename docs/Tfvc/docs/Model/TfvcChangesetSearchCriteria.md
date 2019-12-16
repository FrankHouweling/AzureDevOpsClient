# TfvcChangesetSearchCriteria

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**author** | **string** | Alias or display name of user who made the changes. | [optional] 
**followRenames** | **bool** | Whether or not to follow renames for the given item being queried. | [optional] 
**fromDate** | **string** | If provided, only include changesets created after this date (string). | [optional] 
**fromId** | **int** | If provided, only include changesets after this changesetID. | [optional] 
**includeLinks** | **bool** | Whether to include the _links field on the shallow references. | [optional] 
**itemPath** | **string** | Path of item to search under. | [optional] 
**mappings** | [**\FrankHouweling\AzureDevOpsClient\Tfvc\Model\TfvcMappingFilter[]**](TfvcMappingFilter.md) |  | [optional] 
**toDate** | **string** | If provided, only include changesets created before this date (string). | [optional] 
**toId** | **int** | If provided, a version descriptor for the latest change list to include. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


