# DashboardGroup

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\AzureDevOpsClient\Dashboard\AzureDevOpsClient\Dashboard\Model\ReferenceLinks**](ReferenceLinks.md) |  | [optional] 
**dashboardEntries** | [**\AzureDevOpsClient\Dashboard\AzureDevOpsClient\Dashboard\Model\DashboardGroupEntry[]**](DashboardGroupEntry.md) | A list of Dashboards held by the Dashboard Group | [optional] 
**permission** | **string** | Deprecated: The old permission model describing the level of permissions for the current team. Pre-M125. | [optional] 
**teamDashboardPermission** | **string** | A permissions bit mask describing the security permissions of the current team for dashboards. When this permission is the value None, use GroupMemberPermission. Permissions are evaluated based on the presence of a value other than None, else the GroupMemberPermission will be saved. | [optional] 
**url** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


