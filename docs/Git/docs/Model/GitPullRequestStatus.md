# GitPullRequestStatus

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\ReferenceLinks**](ReferenceLinks.md) | Reference links. | [optional] 
**context** | [**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\GitStatusContext**](GitStatusContext.md) | Context of the status. | [optional] 
**createdBy** | [**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\IdentityRef**](IdentityRef.md) | Identity that created the status. | [optional] 
**creationDate** | [**\DateTime**](\DateTime.md) | Creation date and time of the status. | [optional] 
**description** | **string** | Status description. Typically describes current state of the status. | [optional] 
**id** | **int** | Status identifier. | [optional] 
**state** | **string** | State of the status. | [optional] 
**targetUrl** | **string** | URL with status details. | [optional] 
**updatedDate** | [**\DateTime**](\DateTime.md) | Last update date and time of the status. | [optional] 
**iterationId** | **int** | ID of the iteration to associate status with. Minimum value is 1. | [optional] 
**properties** | [**\AzureDevOpsClient\Git\AzureDevOpsClient\Git\Model\PropertiesCollection**](PropertiesCollection.md) | Custom properties of the status. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


