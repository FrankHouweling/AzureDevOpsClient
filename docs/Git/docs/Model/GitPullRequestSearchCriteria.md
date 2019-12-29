# GitPullRequestSearchCriteria

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**creatorId** | **string** | If set, search for pull requests that were created by this identity. | [optional] 
**includeLinks** | **bool** | Whether to include the _links field on the shallow references | [optional] 
**repositoryId** | **string** | If set, search for pull requests whose target branch is in this repository. | [optional] 
**reviewerId** | **string** | If set, search for pull requests that have this identity as a reviewer. | [optional] 
**sourceRefName** | **string** | If set, search for pull requests from this branch. | [optional] 
**sourceRepositoryId** | **string** | If set, search for pull requests whose source branch is in this repository. | [optional] 
**status** | **string** | If set, search for pull requests that are in this state. Defaults to Active if unset. | [optional] 
**targetRefName** | **string** | If set, search for pull requests into this branch. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


