# GitPullRequestIteration

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\ReferenceLinks**](ReferenceLinks.md) | A collection of related REST reference links. | [optional] 
**author** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\IdentityRef**](IdentityRef.md) | Author of the pull request iteration. | [optional] 
**changeList** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\GitPullRequestChange[]**](GitPullRequestChange.md) | Changes included with the pull request iteration. | [optional] 
**commits** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\GitCommitRef[]**](GitCommitRef.md) | The commits included with the pull request iteration. | [optional] 
**commonRefCommit** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\GitCommitRef**](GitCommitRef.md) | The first common Git commit of the source and target refs. | [optional] 
**createdDate** | [**\DateTime**](\DateTime.md) | The creation date of the pull request iteration. | [optional] 
**description** | **string** | Description of the pull request iteration. | [optional] 
**hasMoreCommits** | **bool** | Indicates if the Commits property contains a truncated list of commits in this pull request iteration. | [optional] 
**id** | **int** | ID of the pull request iteration. Iterations are created as a result of creating and pushing updates to a pull request. | [optional] 
**newTargetRefName** | **string** | If the iteration reason is Retarget, this is the refName of the new target | [optional] 
**oldTargetRefName** | **string** | If the iteration reason is Retarget, this is the original target refName | [optional] 
**push** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\GitPushRef**](GitPushRef.md) | The Git push information associated with this pull request iteration. | [optional] 
**reason** | **string** | The reason for which the pull request iteration was created. | [optional] 
**sourceRefCommit** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\GitCommitRef**](GitCommitRef.md) | The source Git commit of this iteration. | [optional] 
**targetRefCommit** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\GitCommitRef**](GitCommitRef.md) | The target Git commit of this iteration. | [optional] 
**updatedDate** | [**\DateTime**](\DateTime.md) | The updated date of the pull request iteration. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


