# GitQueryCommitsCriteria

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**skip** | **int** | Number of entries to skip | [optional] 
**top** | **int** | Maximum number of entries to retrieve | [optional] 
**author** | **string** | Alias or display name of the author | [optional] 
**compareVersion** | [**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitVersionDescriptor**](GitVersionDescriptor.md) | Only applicable when ItemVersion specified. If provided, start walking history starting at this commit. | [optional] 
**excludeDeletes** | **bool** | Only applies when an itemPath is specified. This determines whether to exclude delete entries of the specified path. | [optional] 
**fromCommitId** | **string** | If provided, a lower bound for filtering commits alphabetically | [optional] 
**fromDate** | **string** | If provided, only include history entries created after this date (string) | [optional] 
**historyMode** | **string** | What Git history mode should be used. This only applies to the search criteria when Ids &#x3D; null and an itemPath is specified. | [optional] 
**ids** | **string[]** | If provided, specifies the exact commit ids of the commits to fetch. May not be combined with other parameters. | [optional] 
**includeLinks** | **bool** | Whether to include the _links field on the shallow references | [optional] 
**includePushData** | **bool** | Whether to include the push information | [optional] 
**includeUserImageUrl** | **bool** | Whether to include the image Url for committers and authors | [optional] 
**includeWorkItems** | **bool** | Whether to include linked work items | [optional] 
**itemPath** | **string** | Path of item to search under | [optional] 
**itemVersion** | [**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitVersionDescriptor**](GitVersionDescriptor.md) | If provided, identifies the commit or branch to search | [optional] 
**showOldestCommitsFirst** | **bool** | If enabled, this option will ignore the itemVersion and compareVersion parameters | [optional] 
**toCommitId** | **string** | If provided, an upper bound for filtering commits alphabetically | [optional] 
**toDate** | **string** | If provided, only include history entries created before this date (string) | [optional] 
**user** | **string** | Alias or display name of the committer | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


