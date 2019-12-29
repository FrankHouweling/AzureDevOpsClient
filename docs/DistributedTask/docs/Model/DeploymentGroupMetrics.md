# DeploymentGroupMetrics

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**columnsHeader** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\MetricsColumnsHeader**](MetricsColumnsHeader.md) | List of deployment group properties. And types of metrics provided for those properties. | [optional] 
**deploymentGroup** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\DeploymentGroupReference**](DeploymentGroupReference.md) | Deployment group. | [optional] 
**rows** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\MetricsRow[]**](MetricsRow.md) | Values of properties and the metrics. E.g. 1: total count of deployment targets for which &#39;TargetState&#39; is &#39;offline&#39;. E.g. 2: Average time of deployment to the deployment targets for which &#39;LastJobStatus&#39; is &#39;passed&#39; and &#39;TargetState&#39; is &#39;online&#39;. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


