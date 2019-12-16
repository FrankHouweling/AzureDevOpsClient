# TimelineRecord

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\ReferenceLinks**](ReferenceLinks.md) |  | [optional] 
**attempt** | **int** | Attempt number of record. | [optional] 
**changeId** | **int** | The change ID. | [optional] 
**currentOperation** | **string** | A string that indicates the current operation. | [optional] 
**details** | [**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\TimelineReference**](TimelineReference.md) | A reference to a sub-timeline. | [optional] 
**errorCount** | **int** | The number of errors produced by this operation. | [optional] 
**finishTime** | [**\DateTime**](\DateTime.md) | The finish time. | [optional] 
**id** | **string** | The ID of the record. | [optional] 
**identifier** | **string** | String identifier that is consistent across attempts. | [optional] 
**issues** | [**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\Issue[]**](Issue.md) |  | [optional] 
**lastModified** | [**\DateTime**](\DateTime.md) | The time the record was last modified. | [optional] 
**log** | [**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\BuildLogReference**](BuildLogReference.md) | A reference to the log produced by this operation. | [optional] 
**name** | **string** | The name. | [optional] 
**order** | **int** | An ordinal value relative to other records. | [optional] 
**parentId** | **string** | The ID of the record&#39;s parent. | [optional] 
**percentComplete** | **int** | The current completion percentage. | [optional] 
**previousAttempts** | [**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\TimelineAttempt[]**](TimelineAttempt.md) |  | [optional] 
**result** | **string** | The result. | [optional] 
**resultCode** | **string** | The result code. | [optional] 
**startTime** | [**\DateTime**](\DateTime.md) | The start time. | [optional] 
**state** | **string** | The state of the record. | [optional] 
**task** | [**\AzureDevOpsClient\Build\AzureDevOpsClient\Build\Model\TaskReference**](TaskReference.md) | A reference to the task represented by this timeline record. | [optional] 
**type** | **string** | The type of the record. | [optional] 
**url** | **string** | The REST URL of the timeline record. | [optional] 
**warningCount** | **int** | The number of warnings produced by this operation. | [optional] 
**workerName** | **string** | The name of the agent running the operation. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


