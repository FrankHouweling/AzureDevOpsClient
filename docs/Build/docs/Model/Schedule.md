# Schedule

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**branchFilters** | **string[]** |  | [optional] 
**daysToBuild** | **string** | Days for a build (flags enum for days of the week) | [optional] 
**scheduleJobId** | **string** | The Job Id of the Scheduled job that will queue the scheduled build. Since a single trigger can have multiple schedules and we want a single job to process a single schedule (since each schedule has a list of branches to build), the schedule itself needs to define the Job Id. This value will be filled in when a definition is added or updated.  The UI does not provide it or use it. | [optional] 
**scheduleOnlyWithChanges** | **bool** | Flag to determine if this schedule should only build if the associated source has been changed. | [optional] 
**startHours** | **int** | Local timezone hour to start | [optional] 
**startMinutes** | **int** | Local timezone minute to start | [optional] 
**timeZoneId** | **string** | Time zone of the build schedule (String representation of the time zone ID) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


