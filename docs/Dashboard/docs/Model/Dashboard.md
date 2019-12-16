# Dashboard

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\AzureDevOpsClient\Dashboard\AzureDevOpsClient\Dashboard\Model\ReferenceLinks**](ReferenceLinks.md) |  | [optional] 
**dashboardScope** | **string** | Entity to which the dashboard is scoped. | [optional] 
**description** | **string** | Description of the dashboard. | [optional] 
**eTag** | **string** | Server defined version tracking value, used for edit collision detection. | [optional] 
**groupId** | **string** | ID of the group for a dashboard. For team-scoped dashboards, this is the unique identifier for the team associated with the dashboard. For project-scoped dashboards this property is empty. | [optional] 
**id** | **string** | ID of the Dashboard. Provided by service at creation time. | [optional] 
**name** | **string** | Name of the Dashboard. | [optional] 
**ownerId** | **string** | ID of the owner for a dashboard. For team-scoped dashboards, this is the unique identifier for the team associated with the dashboard. For project-scoped dashboards, this is the unique identifier for the user identity associated with the dashboard. | [optional] 
**position** | **int** | Position of the dashboard, within a dashboard group. If unset at creation time, position is decided by the service. | [optional] 
**refreshInterval** | **int** | Interval for client to automatically refresh the dashboard. Expressed in minutes. | [optional] 
**url** | **string** |  | [optional] 
**widgets** | [**\AzureDevOpsClient\Dashboard\AzureDevOpsClient\Dashboard\Model\Widget[]**](Widget.md) | The set of Widgets on the dashboard. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


