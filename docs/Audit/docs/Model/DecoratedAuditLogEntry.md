# DecoratedAuditLogEntry

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**actionId** | **string** | The action id for the event, i.e Git.CreateRepo, Project.RenameProject | [optional] 
**activityId** | **string** | ActivityId | [optional] 
**actorCUID** | **string** | The Actor&#39;s CUID | [optional] 
**actorDisplayName** | **string** | DisplayName of the user who initiated the action | [optional] 
**actorImageUrl** | **string** | URL of Actor&#39;s Profile image | [optional] 
**actorUserId** | **string** | The Actor&#39;s User Id | [optional] 
**area** | **string** | Area of Azure DevOps the action occurred | [optional] 
**authenticationMechanism** | **string** | Type of authentication used by the actor | [optional] 
**category** | **string** | Type of action executed | [optional] 
**categoryDisplayName** | **string** | DisplayName of the category | [optional] 
**correlationId** | **string** | This allows related audit entries to be grouped together. Generally this occurs when a single action causes a cascade of audit entries. For example, project creation. | [optional] 
**data** | **map[string,object]** | External data such as CUIDs, item names, etc. | [optional] 
**details** | **string** | Decorated details | [optional] 
**id** | **string** | EventId - Needs to be unique per service | [optional] 
**ipAddress** | **string** | IP Address where the event was originated | [optional] 
**projectId** | **string** | When specified, the id of the project this event is associated to | [optional] 
**projectName** | **string** | When specified, the name of the project this event is associated to | [optional] 
**scopeDisplayName** | **string** | DisplayName of the scope | [optional] 
**scopeId** | **string** | The organization Id (Organization is the only scope currently supported) | [optional] 
**scopeType** | **string** | The type of the scope (Organization is only scope currently supported) | [optional] 
**timestamp** | [**\DateTime**](\DateTime.md) | The time when the event occurred in UTC | [optional] 
**userAgent** | **string** | The user agent from the request | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


