# PolicyEvaluationRecord

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\AzureDevOpsClient\Policy\AzureDevOpsClient\Policy\Model\ReferenceLinks**](ReferenceLinks.md) | Links to other related objects | [optional] 
**artifactId** | **string** | A string which uniquely identifies the target of a policy evaluation. | [optional] 
**completedDate** | [**\DateTime**](\DateTime.md) | Time when this policy finished evaluating on this pull request. | [optional] 
**configuration** | [**\AzureDevOpsClient\Policy\AzureDevOpsClient\Policy\Model\PolicyConfiguration**](PolicyConfiguration.md) | Contains all configuration data for the policy which is being evaluated. | [optional] 
**context** | [**\AzureDevOpsClient\Policy\AzureDevOpsClient\Policy\Model\JObject**](JObject.md) | Internal context data of this policy evaluation. | [optional] 
**evaluationId** | **string** | Guid which uniquely identifies this evaluation record (one policy running on one pull request). | [optional] 
**startedDate** | [**\DateTime**](\DateTime.md) | Time when this policy was first evaluated on this pull request. | [optional] 
**status** | **string** | Status of the policy (Running, Approved, Failed, etc.) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


