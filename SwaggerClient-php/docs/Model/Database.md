# # Database

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**name** | **string** |  |
**title** | **string** |  |
**type** | **string** |  |
**kind** | **string** |  |
**status** | **string** |  |
**version** | **string** |  |
**region** | **string** |  | [optional]
**zone** | **string** |  | [optional]
**replicas** | **int** |  | [optional]
**storage_size** | **int** | Storage size in GB. Null when the database does not set one. | [optional]
**storage_iops** | **int** | Provisioned storage IOPS. Null when the database does not set them. | [optional]
**machine_type** | **string** |  | [optional]
**high_availability** | **bool** |  | [optional]
**external** | **bool** | True for a database that runs outside Wodby, such as a provider-managed database server. | [optional]
**external_id** | **string** | The database&#39;s ID at its provider. | [optional]
**ssl** | **bool** | True when connections to the database use TLS. | [optional]
**public_host** | **string** | Host name for connections from outside the database&#39;s network. Null when the database has none. | [optional]
**public_port** | **int** |  | [optional]
**private_host** | **string** | Host name for connections from inside the database&#39;s network. | [optional]
**cluster_id** | **int** | The cluster that runs the database. | [optional]
**resided_cluster_id** | **int** | The cluster whose network a provider-managed database is placed in. | [optional]
**integration_id** | **int** |  | [optional]
**app_service_id** | **int** |  | [optional]
**ownership_scope** | **string** | org when the organization owns the resource, project when one project owns it. |
**owner_project_id** | **int** |  | [optional]
**env_id** | **int** | Legacy internal environment entity ID. Use envType. |
**env_type** | **string** |  |
**org_id** | **int** |  |
**created_at** | **\DateTime** |  |
**updated_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
