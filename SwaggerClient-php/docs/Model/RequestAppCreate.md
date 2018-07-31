# RequestAppCreate

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**org_id** | [**\Wodby\Api\Model\Uuid**](Uuid.md) |  | 
**title** | **string** |  | [optional] 
**name** | **string** |  | 
**stack_id** | **string** |  | 
**docroot** | **string** |  | [optional] 
**sitename** | **string** |  | [optional] 
**server_id** | [**\Wodby\Api\Model\Uuid**](Uuid.md) |  | 
**instance_type** | [**\Wodby\Api\Model\InstanceType**](InstanceType.md) |  | [optional] 
**instance_name** | **string** |  | [optional] 
**instance_title** | **string** |  | [optional] 
**services** | [**\Wodby\Api\Model\RequestAppCreateServices[]**](RequestAppCreateServices.md) |  | [optional] 
**deployment_type** | **string** |  | [optional] [default to 'vanilla']
**post_deployment** | **bool** |  | [optional] 
**git** | [**\Wodby\Api\Model\RequestAppCreateGit**](RequestAppCreateGit.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


