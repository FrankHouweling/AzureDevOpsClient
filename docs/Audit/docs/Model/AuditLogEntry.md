# AuditLogEntry

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**actionId** | **string** | The action if for the event, i.e Git.CreateRepo, Project.RenameProject | [optional] 
**activityId** | **string** | ActivityId | [optional] 
**actorCUID** | **string** | The Actor&#39;s CUID | [optional] 
**actorUserId** | **string** | The Actor&#39;s User Id | [optional] 
**authenticationMechanism** | **string** | Type of authentication used by the author | [optional] 
**correlationId** | **string** | This allows us to group things together, like one user action that caused a cascade of event entries (project creation). | [optional] 
**data** | **map[string,object]** | External data such as CUIDs, item names, etc. | [optional] 
**id** | **string** | EventId, should be unique | [optional] 
**ipAddress** | **string** | IP Address where the event was originated | [optional] 
**projectId** | **string** | When specified, the id of the project this event is associated to | [optional] 
**scopeId** | **string** | The organization Id (Organization is the only scope currently supported) | [optional] 
**scopeType** | **string** | The type of the scope (Organization is only scope currently supported) | [optional] 
**timestamp** | [**\DateTime**](\DateTime.md) | The time when the event occurred in UTC | [optional] 
**userAgent** | **string** | The user agent from the request | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


