# GitPullRequestQuery

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**queries** | [**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitPullRequestQueryInput[]**](GitPullRequestQueryInput.md) | The queries to perform. | [optional] 
**results** | [**map[string,\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitPullRequest[]][]**](map.md) | The results of the queries. This matches the QueryInputs list so Results[n] are the results of QueryInputs[n]. Each entry in the list is a dictionary of commit-&gt;pull requests. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


