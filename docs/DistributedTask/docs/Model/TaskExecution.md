# TaskExecution

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**execTask** | [**\FrankHouweling\AzureDevOpsClient\DistributedTask\Model\TaskReference**](TaskReference.md) | The utility task to run.  Specifying this means that this task definition is simply a meta task to call another task. This is useful for tasks that call utility tasks like powershell and commandline | [optional] 
**platformInstructions** | [**map[string,map[string,string]]**](map.md) | If a task is going to run code, then this provides the type/script etc... information by platform. For example, it might look like. net45: { typeName: \&quot;Microsoft.TeamFoundation.Automation.Tasks.PowerShellTask\&quot;, assemblyName: \&quot;Microsoft.TeamFoundation.Automation.Tasks.PowerShell.dll\&quot; } net20: { typeName: \&quot;Microsoft.TeamFoundation.Automation.Tasks.PowerShellTask\&quot;, assemblyName: \&quot;Microsoft.TeamFoundation.Automation.Tasks.PowerShell.dll\&quot; } java: { jar: \&quot;powershelltask.tasks.automation.teamfoundation.microsoft.com\&quot;, } node: { script: \&quot;powershellhost.js\&quot;, } | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


