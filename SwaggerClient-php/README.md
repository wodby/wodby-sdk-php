# OpenAPIClient-php

Public REST API for customer SDKs and code integrations.
GraphQL remains internal for the dashboard. This contract is the versioned public surface.



## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: accessTokenHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-ACCESS-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ACCESS-TOKEN', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppBuildsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_instance_id = 56; // int
$page = 56; // int | Page number, defaults to 1
$page_size = 56; // int | Page size, defaults to 30

try {
    $result = $apiInstance->appBuildsGet($app_instance_id, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppBuildsApi->appBuildsGet: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to */v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AppBuildsApi* | [**appBuildsGet**](docs/Api/AppBuildsApi.md#appbuildsget) | **GET** /app-builds | List app builds
*AppBuildsApi* | [**appBuildsIdGet**](docs/Api/AppBuildsApi.md#appbuildsidget) | **GET** /app-builds/{id} | Get build
*AppBuildsApi* | [**appBuildsPost**](docs/Api/AppBuildsApi.md#appbuildspost) | **POST** /app-builds | Create build
*AppDeploymentsApi* | [**appDeploymentsGet**](docs/Api/AppDeploymentsApi.md#appdeploymentsget) | **GET** /app-deployments | List app deployments
*AppDeploymentsApi* | [**appDeploymentsIdGet**](docs/Api/AppDeploymentsApi.md#appdeploymentsidget) | **GET** /app-deployments/{id} | Get deployment
*AppDeploymentsApi* | [**appDeploymentsPost**](docs/Api/AppDeploymentsApi.md#appdeploymentspost) | **POST** /app-deployments | Create deployment
*AppInstancesApi* | [**appInstancesGet**](docs/Api/AppInstancesApi.md#appinstancesget) | **GET** /app-instances | List app instances
*AppInstancesApi* | [**appInstancesIdDelete**](docs/Api/AppInstancesApi.md#appinstancesiddelete) | **DELETE** /app-instances/{id} | Delete app instance
*AppInstancesApi* | [**appInstancesIdGet**](docs/Api/AppInstancesApi.md#appinstancesidget) | **GET** /app-instances/{id} | Get app instance
*AppInstancesApi* | [**appInstancesIdPut**](docs/Api/AppInstancesApi.md#appinstancesidput) | **PUT** /app-instances/{id} | Update app instance
*AppInstancesApi* | [**appInstancesPost**](docs/Api/AppInstancesApi.md#appinstancespost) | **POST** /app-instances | Create app instance
*AppRoutesApi* | [**appRoutesGet**](docs/Api/AppRoutesApi.md#approutesget) | **GET** /app-routes | List app routes
*AppRoutesApi* | [**appRoutesIdDelete**](docs/Api/AppRoutesApi.md#approutesiddelete) | **DELETE** /app-routes/{id} | Delete app route
*AppRoutesApi* | [**appRoutesIdGet**](docs/Api/AppRoutesApi.md#approutesidget) | **GET** /app-routes/{id} | Get app route
*AppRoutesApi* | [**appRoutesIdPut**](docs/Api/AppRoutesApi.md#approutesidput) | **PUT** /app-routes/{id} | Update app route
*AppRoutesApi* | [**appRoutesPost**](docs/Api/AppRoutesApi.md#approutespost) | **POST** /app-routes | Create app route
*AppsApi* | [**appsGet**](docs/Api/AppsApi.md#appsget) | **GET** /apps | List apps
*AppsApi* | [**appsIdDelete**](docs/Api/AppsApi.md#appsiddelete) | **DELETE** /apps/{id} | Delete app
*AppsApi* | [**appsIdGet**](docs/Api/AppsApi.md#appsidget) | **GET** /apps/{id} | Get app
*AppsApi* | [**appsIdPut**](docs/Api/AppsApi.md#appsidput) | **PUT** /apps/{id} | Update app
*AppsApi* | [**appsPost**](docs/Api/AppsApi.md#appspost) | **POST** /apps | Create app
*BackupsApi* | [**backupsGet**](docs/Api/BackupsApi.md#backupsget) | **GET** /backups | List backups
*BackupsApi* | [**backupsIdGet**](docs/Api/BackupsApi.md#backupsidget) | **GET** /backups/{id} | Get backup
*BackupsApi* | [**backupsPost**](docs/Api/BackupsApi.md#backupspost) | **POST** /backups | Create backup
*ClustersApi* | [**clustersGet**](docs/Api/ClustersApi.md#clustersget) | **GET** /clusters | List clusters
*ClustersApi* | [**clustersIdDelete**](docs/Api/ClustersApi.md#clustersiddelete) | **DELETE** /clusters/{id} | Delete cluster
*ClustersApi* | [**clustersIdGet**](docs/Api/ClustersApi.md#clustersidget) | **GET** /clusters/{id} | Get cluster
*ClustersApi* | [**clustersIdPut**](docs/Api/ClustersApi.md#clustersidput) | **PUT** /clusters/{id} | Update cluster
*ClustersApi* | [**clustersPost**](docs/Api/ClustersApi.md#clusterspost) | **POST** /clusters | Create cluster
*DatabasesApi* | [**databasesGet**](docs/Api/DatabasesApi.md#databasesget) | **GET** /databases | List databases
*DatabasesApi* | [**databasesIdDelete**](docs/Api/DatabasesApi.md#databasesiddelete) | **DELETE** /databases/{id} | Delete database
*DatabasesApi* | [**databasesIdGet**](docs/Api/DatabasesApi.md#databasesidget) | **GET** /databases/{id} | Get database
*DatabasesApi* | [**databasesIdPut**](docs/Api/DatabasesApi.md#databasesidput) | **PUT** /databases/{id} | Update database
*DatabasesApi* | [**databasesPost**](docs/Api/DatabasesApi.md#databasespost) | **POST** /databases | Create database
*DefaultApi* | [**openapiJsonGet**](docs/Api/DefaultApi.md#openapijsonget) | **GET** /openapi.json | Get OpenAPI JSON
*DefaultApi* | [**openapiYamlGet**](docs/Api/DefaultApi.md#openapiyamlget) | **GET** /openapi.yaml | Get OpenAPI YAML
*EnvsApi* | [**envsGet**](docs/Api/EnvsApi.md#envsget) | **GET** /envs | List envs
*EnvsApi* | [**envsIdDelete**](docs/Api/EnvsApi.md#envsiddelete) | **DELETE** /envs/{id} | Delete env
*EnvsApi* | [**envsIdGet**](docs/Api/EnvsApi.md#envsidget) | **GET** /envs/{id} | Get env
*EnvsApi* | [**envsIdPut**](docs/Api/EnvsApi.md#envsidput) | **PUT** /envs/{id} | Update env
*EnvsApi* | [**envsPost**](docs/Api/EnvsApi.md#envspost) | **POST** /envs | Create env
*IntegrationsApi* | [**integrationsByNameNameGet**](docs/Api/IntegrationsApi.md#integrationsbynamenameget) | **GET** /integrations/by-name/{name} | Get integration by name
*IntegrationsApi* | [**integrationsGet**](docs/Api/IntegrationsApi.md#integrationsget) | **GET** /integrations | List integrations
*IntegrationsApi* | [**integrationsIdDelete**](docs/Api/IntegrationsApi.md#integrationsiddelete) | **DELETE** /integrations/{id} | Delete integration
*IntegrationsApi* | [**integrationsIdPut**](docs/Api/IntegrationsApi.md#integrationsidput) | **PUT** /integrations/{id} | Update integration
*IntegrationsApi* | [**integrationsPost**](docs/Api/IntegrationsApi.md#integrationspost) | **POST** /integrations | Create integration
*OrgsApi* | [**orgsGet**](docs/Api/OrgsApi.md#orgsget) | **GET** /orgs | List orgs
*OrgsApi* | [**orgsIdDelete**](docs/Api/OrgsApi.md#orgsiddelete) | **DELETE** /orgs/{id} | Delete org
*OrgsApi* | [**orgsIdPut**](docs/Api/OrgsApi.md#orgsidput) | **PUT** /orgs/{id} | Update org
*OrgsApi* | [**orgsPost**](docs/Api/OrgsApi.md#orgspost) | **POST** /orgs | Create org
*ProjectsApi* | [**projectsByNameNameGet**](docs/Api/ProjectsApi.md#projectsbynamenameget) | **GET** /projects/by-name/{name} | Get project by name
*ProjectsApi* | [**projectsGet**](docs/Api/ProjectsApi.md#projectsget) | **GET** /projects | List projects
*ProjectsApi* | [**projectsIdDelete**](docs/Api/ProjectsApi.md#projectsiddelete) | **DELETE** /projects/{id} | Delete project
*ProjectsApi* | [**projectsIdPut**](docs/Api/ProjectsApi.md#projectsidput) | **PUT** /projects/{id} | Update project
*ProjectsApi* | [**projectsPost**](docs/Api/ProjectsApi.md#projectspost) | **POST** /projects | Create project
*TasksApi* | [**tasksIdGet**](docs/Api/TasksApi.md#tasksidget) | **GET** /tasks/{id} | Get task

## Models

- [App](docs/Model/App.md)
- [AppBuild](docs/Model/AppBuild.md)
- [AppBuildsResponse](docs/Model/AppBuildsResponse.md)
- [AppDeployment](docs/Model/AppDeployment.md)
- [AppDeploymentsResponse](docs/Model/AppDeploymentsResponse.md)
- [AppEndpointOptionInput](docs/Model/AppEndpointOptionInput.md)
- [AppInstance](docs/Model/AppInstance.md)
- [AppRoute](docs/Model/AppRoute.md)
- [AppServiceDatabaseInput](docs/Model/AppServiceDatabaseInput.md)
- [AppServiceDeploymentRequest](docs/Model/AppServiceDeploymentRequest.md)
- [AppServiceIntegrationInput](docs/Model/AppServiceIntegrationInput.md)
- [AppServiceSettingInput](docs/Model/AppServiceSettingInput.md)
- [Backup](docs/Model/Backup.md)
- [BuildSourceInput](docs/Model/BuildSourceInput.md)
- [Cluster](docs/Model/Cluster.md)
- [CreateBuildRequest](docs/Model/CreateBuildRequest.md)
- [CreateDeploymentRequest](docs/Model/CreateDeploymentRequest.md)
- [CreateEnvRequest](docs/Model/CreateEnvRequest.md)
- [CreateOrgRequest](docs/Model/CreateOrgRequest.md)
- [Database](docs/Model/Database.md)
- [Env](docs/Model/Env.md)
- [FieldInput](docs/Model/FieldInput.md)
- [ImportFromInput](docs/Model/ImportFromInput.md)
- [ImportInput](docs/Model/ImportInput.md)
- [Integration](docs/Model/Integration.md)
- [NewAppInput](docs/Model/NewAppInput.md)
- [NewAppInstanceInput](docs/Model/NewAppInstanceInput.md)
- [NewAppRouteInput](docs/Model/NewAppRouteInput.md)
- [NewAppServiceInput](docs/Model/NewAppServiceInput.md)
- [NewBackupInput](docs/Model/NewBackupInput.md)
- [NewClusterInput](docs/Model/NewClusterInput.md)
- [NewDatabaseInput](docs/Model/NewDatabaseInput.md)
- [NewIntegrationInput](docs/Model/NewIntegrationInput.md)
- [NewManagedClusterInput](docs/Model/NewManagedClusterInput.md)
- [NewProjectInput](docs/Model/NewProjectInput.md)
- [OperationResult](docs/Model/OperationResult.md)
- [Org](docs/Model/Org.md)
- [Project](docs/Model/Project.md)
- [ResourcesInput](docs/Model/ResourcesInput.md)
- [ScalabilityInput](docs/Model/ScalabilityInput.md)
- [Task](docs/Model/Task.md)
- [TaskJob](docs/Model/TaskJob.md)
- [TaskStep](docs/Model/TaskStep.md)
- [UpdateAppRouteInput](docs/Model/UpdateAppRouteInput.md)
- [UpdateEnvRequest](docs/Model/UpdateEnvRequest.md)
- [UpdateIntegrationInput](docs/Model/UpdateIntegrationInput.md)
- [UpdateOrgRequest](docs/Model/UpdateOrgRequest.md)
- [UpdateProjectInput](docs/Model/UpdateProjectInput.md)
- [UpdateTitleRequest](docs/Model/UpdateTitleRequest.md)
- [VolumeSizeInput](docs/Model/VolumeSizeInput.md)

## Authorization

Authentication schemes defined for the API:
### apiKeyHeader

- **Type**: API key
- **API key parameter name**: X-API-KEY
- **Location**: HTTP header


### accessTokenHeader

- **Type**: API key
- **API key parameter name**: X-ACCESS-TOKEN
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
    - Generator version: `7.10.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
