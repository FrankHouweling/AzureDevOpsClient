# ProjectRetentionSetting

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**purgeArtifacts** | [**\FrankHouweling\AzureDevOpsClient\Build\Model\RetentionSetting**](RetentionSetting.md) | The rules for artifact retention. Artifacts can not live longer than a run, so will be overridden by a shorter run purge setting. | [optional] 
**purgePullRequestRuns** | [**\FrankHouweling\AzureDevOpsClient\Build\Model\RetentionSetting**](RetentionSetting.md) | The rules for pull request pipeline run retention. | [optional] 
**purgeRuns** | [**\FrankHouweling\AzureDevOpsClient\Build\Model\RetentionSetting**](RetentionSetting.md) | The rules for pipeline run retention. | [optional] 
**retainRunsPerProtectedBranch** | [**\FrankHouweling\AzureDevOpsClient\Build\Model\RetentionSetting**](RetentionSetting.md) | The rules for retaining runs per protected branch. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


