# GitPullRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\ReferenceLinks**](ReferenceLinks.md) | Links to other related objects. | [optional] 
**artifactId** | **string** | A string which uniquely identifies this pull request. To generate an artifact ID for a pull request, use this template: &#x60;&#x60;&#x60;vstfs:///Git/PullRequestId/{projectId}/{repositoryId}/{pullRequestId}&#x60;&#x60;&#x60; | [optional] 
**autoCompleteSetBy** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\IdentityRef**](IdentityRef.md) | If set, auto-complete is enabled for this pull request and this is the identity that enabled it. | [optional] 
**closedBy** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\IdentityRef**](IdentityRef.md) | The user who closed the pull request. | [optional] 
**closedDate** | [**\DateTime**](\DateTime.md) | The date when the pull request was closed (completed, abandoned, or merged externally). | [optional] 
**codeReviewId** | **int** | The code review ID of the pull request. Used internally. | [optional] 
**commits** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\GitCommitRef[]**](GitCommitRef.md) | The commits contained in the pull request. | [optional] 
**completionOptions** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\GitPullRequestCompletionOptions**](GitPullRequestCompletionOptions.md) | Options which affect how the pull request will be merged when it is completed. | [optional] 
**completionQueueTime** | [**\DateTime**](\DateTime.md) | The most recent date at which the pull request entered the queue to be completed. Used internally. | [optional] 
**createdBy** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\IdentityRef**](IdentityRef.md) | The identity of the user who created the pull request. | [optional] 
**creationDate** | [**\DateTime**](\DateTime.md) | The date when the pull request was created. | [optional] 
**description** | **string** | The description of the pull request. | [optional] 
**forkSource** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\GitForkRef**](GitForkRef.md) | If this is a PR from a fork this will contain information about its source. | [optional] 
**isDraft** | **bool** | Draft / WIP pull request. | [optional] 
**labels** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\WebApiTagDefinition[]**](WebApiTagDefinition.md) | The labels associated with the pull request. | [optional] 
**lastMergeCommit** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\GitCommitRef**](GitCommitRef.md) | The commit of the most recent pull request merge. If empty, the most recent merge is in progress or was unsuccessful. | [optional] 
**lastMergeSourceCommit** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\GitCommitRef**](GitCommitRef.md) | The commit at the head of the source branch at the time of the last pull request merge. | [optional] 
**lastMergeTargetCommit** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\GitCommitRef**](GitCommitRef.md) | The commit at the head of the target branch at the time of the last pull request merge. | [optional] 
**mergeFailureMessage** | **string** | If set, pull request merge failed for this reason. | [optional] 
**mergeFailureType** | **string** | The type of failure (if any) of the pull request merge. | [optional] 
**mergeId** | **string** | The ID of the job used to run the pull request merge. Used internally. | [optional] 
**mergeOptions** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\GitPullRequestMergeOptions**](GitPullRequestMergeOptions.md) | Options used when the pull request merge runs. These are separate from completion options since completion happens only once and a new merge will run every time the source branch of the pull request changes. | [optional] 
**mergeStatus** | **string** | The current status of the pull request merge. | [optional] 
**pullRequestId** | **int** | The ID of the pull request. | [optional] 
**remoteUrl** | **string** | Used internally. | [optional] 
**repository** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\GitRepository**](GitRepository.md) | The repository containing the target branch of the pull request. | [optional] 
**reviewers** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\IdentityRefWithVote[]**](IdentityRefWithVote.md) | A list of reviewers on the pull request along with the state of their votes. | [optional] 
**sourceRefName** | **string** | The name of the source branch of the pull request. | [optional] 
**status** | **string** | The status of the pull request. | [optional] 
**supportsIterations** | **bool** | If true, this pull request supports multiple iterations. Iteration support means individual pushes to the source branch of the pull request can be reviewed and comments left in one iteration will be tracked across future iterations. | [optional] 
**targetRefName** | **string** | The name of the target branch of the pull request. | [optional] 
**title** | **string** | The title of the pull request. | [optional] 
**url** | **string** | Used internally. | [optional] 
**workItemRefs** | [**\FrankHouweling\AzureDevOpsClient\Git\Model\ResourceRef[]**](ResourceRef.md) | Any work item references associated with this pull request. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


