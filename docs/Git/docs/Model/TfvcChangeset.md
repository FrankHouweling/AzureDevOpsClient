# TfvcChangeset

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\ReferenceLinks**](ReferenceLinks.md) | A collection of REST reference links. | [optional] 
**author** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\IdentityRef**](IdentityRef.md) | Alias or display name of user. | [optional] 
**changesetId** | **int** | Changeset Id. | [optional] 
**checkedInBy** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\IdentityRef**](IdentityRef.md) | Alias or display name of user. | [optional] 
**comment** | **string** | Comment for the changeset. | [optional] 
**commentTruncated** | **bool** | Was the Comment result truncated? | [optional] 
**createdDate** | [**\DateTime**](\DateTime.md) | Creation date of the changeset. | [optional] 
**url** | **string** | URL to retrieve the item. | [optional] 
**accountId** | **string** | Changeset Account Id also known as Organization Id. | [optional] 
**changes** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\TfvcChange[]**](TfvcChange.md) | List of associated changes. | [optional] 
**checkinNotes** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\CheckinNote[]**](CheckinNote.md) | List of Checkin Notes for the changeset. | [optional] 
**collectionId** | **string** | Changeset collection Id. | [optional] 
**hasMoreChanges** | **bool** | True if more changes are available. | [optional] 
**policyOverride** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\TfvcPolicyOverrideInfo**](TfvcPolicyOverrideInfo.md) | Policy Override for the changeset. | [optional] 
**teamProjectIds** | **string[]** | Team Project Ids for the changeset. | [optional] 
**workItems** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\AssociatedWorkItem[]**](AssociatedWorkItem.md) | List of work items associated with the changeset. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


