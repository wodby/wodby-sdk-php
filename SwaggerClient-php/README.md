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
$new_build_from_ci_input = new \Wodby\Api\Model\NewBuildFromCIInput(); // \Wodby\Api\Model\NewBuildFromCIInput

try {
    $result = $apiInstance->appBuildsFromCiPost($new_build_from_ci_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppBuildsApi->appBuildsFromCiPost: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to */v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AppBuildsApi* | [**appBuildsFromCiPost**](docs/Api/AppBuildsApi.md#appbuildsfromcipost) | **POST** /app-builds/from-ci | Create build from CI
*AppBuildsApi* | [**appBuildsGet**](docs/Api/AppBuildsApi.md#appbuildsget) | **GET** /app-builds | List app builds
*AppBuildsApi* | [**appBuildsIdDeployPost**](docs/Api/AppBuildsApi.md#appbuildsiddeploypost) | **POST** /app-builds/{id}/deploy | Deploy build
*AppBuildsApi* | [**appBuildsIdDockerRegistryCredentialsGet**](docs/Api/AppBuildsApi.md#appbuildsiddockerregistrycredentialsget) | **GET** /app-builds/{id}/docker-registry-credentials | Get Docker registry credentials for build
*AppBuildsApi* | [**appBuildsIdGet**](docs/Api/AppBuildsApi.md#appbuildsidget) | **GET** /app-builds/{id} | Get build
*AppBuildsApi* | [**appBuildsIdVoidPost**](docs/Api/AppBuildsApi.md#appbuildsidvoidpost) | **POST** /app-builds/{id}/void | Void build images
*AppBuildsApi* | [**appBuildsPost**](docs/Api/AppBuildsApi.md#appbuildspost) | **POST** /app-builds | Create build
*AppDeploymentsApi* | [**appDeploymentsFromCiPost**](docs/Api/AppDeploymentsApi.md#appdeploymentsfromcipost) | **POST** /app-deployments/from-ci | Create deployment from CI
*AppDeploymentsApi* | [**appDeploymentsGet**](docs/Api/AppDeploymentsApi.md#appdeploymentsget) | **GET** /app-deployments | List app deployments
*AppDeploymentsApi* | [**appDeploymentsIdGet**](docs/Api/AppDeploymentsApi.md#appdeploymentsidget) | **GET** /app-deployments/{id} | Get deployment
*AppDeploymentsApi* | [**appDeploymentsIdRedeployPost**](docs/Api/AppDeploymentsApi.md#appdeploymentsidredeploypost) | **POST** /app-deployments/{id}/redeploy | Redeploy deployment
*AppDeploymentsApi* | [**appDeploymentsPost**](docs/Api/AppDeploymentsApi.md#appdeploymentspost) | **POST** /app-deployments | Create deployment
*AppInstancesApi* | [**appInstancesByNameAppNameInstanceNameGet**](docs/Api/AppInstancesApi.md#appinstancesbynameappnameinstancenameget) | **GET** /app-instances/by-name/{appName}/{instanceName} | Get app instance by app and instance name
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
*AppServicesApi* | [**appServicesGet**](docs/Api/AppServicesApi.md#appservicesget) | **GET** /app-services | List app services
*AppServicesApi* | [**appServicesIdActionsNamePost**](docs/Api/AppServicesApi.md#appservicesidactionsnamepost) | **POST** /app-services/{id}/actions/{name} | Run app service action
*AppServicesApi* | [**appServicesIdGet**](docs/Api/AppServicesApi.md#appservicesidget) | **GET** /app-services/{id} | Get app service
*AppServicesApi* | [**appServicesIdPut**](docs/Api/AppServicesApi.md#appservicesidput) | **PUT** /app-services/{id} | Update app service
*AppsApi* | [**appsByNameNameGet**](docs/Api/AppsApi.md#appsbynamenameget) | **GET** /apps/by-name/{name} | Get app by name
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
*ImportsApi* | [**importsGet**](docs/Api/ImportsApi.md#importsget) | **GET** /imports | List imports
*ImportsApi* | [**importsIdGet**](docs/Api/ImportsApi.md#importsidget) | **GET** /imports/{id} | Get import
*ImportsApi* | [**importsPost**](docs/Api/ImportsApi.md#importspost) | **POST** /imports | Create import
*IntegrationKindsApi* | [**integrationKindsIdDatabaseMachineTypesGet**](docs/Api/IntegrationKindsApi.md#integrationkindsiddatabasemachinetypesget) | **GET** /integration-kinds/{id}/database-machine-types | List database machine types
*IntegrationKindsApi* | [**integrationKindsIdDatabaseRegionsGet**](docs/Api/IntegrationKindsApi.md#integrationkindsiddatabaseregionsget) | **GET** /integration-kinds/{id}/database-regions | List database regions
*IntegrationKindsApi* | [**integrationKindsIdDatabaseSettingsGet**](docs/Api/IntegrationKindsApi.md#integrationkindsiddatabasesettingsget) | **GET** /integration-kinds/{id}/database-settings | Get database settings
*IntegrationKindsApi* | [**integrationKindsIdDatabaseTypesGet**](docs/Api/IntegrationKindsApi.md#integrationkindsiddatabasetypesget) | **GET** /integration-kinds/{id}/database-types | List database types
*IntegrationKindsApi* | [**integrationKindsIdDatabaseVersionsGet**](docs/Api/IntegrationKindsApi.md#integrationkindsiddatabaseversionsget) | **GET** /integration-kinds/{id}/database-versions | List database versions
*IntegrationsApi* | [**integrationsByNameNameGet**](docs/Api/IntegrationsApi.md#integrationsbynamenameget) | **GET** /integrations/by-name/{name} | Get integration by name
*IntegrationsApi* | [**integrationsGet**](docs/Api/IntegrationsApi.md#integrationsget) | **GET** /integrations | List integrations
*IntegrationsApi* | [**integrationsIdDelete**](docs/Api/IntegrationsApi.md#integrationsiddelete) | **DELETE** /integrations/{id} | Delete integration
*IntegrationsApi* | [**integrationsIdKubeMachineTypesGet**](docs/Api/IntegrationsApi.md#integrationsidkubemachinetypesget) | **GET** /integrations/{id}/kube-machine-types | List Kubernetes machine types
*IntegrationsApi* | [**integrationsIdKubeRegionsGet**](docs/Api/IntegrationsApi.md#integrationsidkuberegionsget) | **GET** /integrations/{id}/kube-regions | List Kubernetes regions
*IntegrationsApi* | [**integrationsIdKubeSettingsGet**](docs/Api/IntegrationsApi.md#integrationsidkubesettingsget) | **GET** /integrations/{id}/kube-settings | Get Kubernetes settings
*IntegrationsApi* | [**integrationsIdKubeVersionsGet**](docs/Api/IntegrationsApi.md#integrationsidkubeversionsget) | **GET** /integrations/{id}/kube-versions | List Kubernetes versions
*IntegrationsApi* | [**integrationsIdKubeZonesGet**](docs/Api/IntegrationsApi.md#integrationsidkubezonesget) | **GET** /integrations/{id}/kube-zones | List Kubernetes zones
*IntegrationsApi* | [**integrationsIdPut**](docs/Api/IntegrationsApi.md#integrationsidput) | **PUT** /integrations/{id} | Update integration
*IntegrationsApi* | [**integrationsIdRemoteGitRepoBranchesGet**](docs/Api/IntegrationsApi.md#integrationsidremotegitrepobranchesget) | **GET** /integrations/{id}/remote-git-repo-branches | List remote Git repository branches
*IntegrationsApi* | [**integrationsIdRemoteGitRepoTagsGet**](docs/Api/IntegrationsApi.md#integrationsidremotegitrepotagsget) | **GET** /integrations/{id}/remote-git-repo-tags | List remote Git repository tags
*IntegrationsApi* | [**integrationsIdRemoteGitReposGet**](docs/Api/IntegrationsApi.md#integrationsidremotegitreposget) | **GET** /integrations/{id}/remote-git-repos | List remote Git repositories
*IntegrationsApi* | [**integrationsIdScopesGet**](docs/Api/IntegrationsApi.md#integrationsidscopesget) | **GET** /integrations/{id}/scopes | List integration scopes
*IntegrationsApi* | [**integrationsIdStorageBucketsGet**](docs/Api/IntegrationsApi.md#integrationsidstoragebucketsget) | **GET** /integrations/{id}/storage-buckets | List storage buckets
*IntegrationsApi* | [**integrationsIdStorageClassesGet**](docs/Api/IntegrationsApi.md#integrationsidstorageclassesget) | **GET** /integrations/{id}/storage-classes | List storage classes
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
*ProvidersApi* | [**providerRevisionsIdGet**](docs/Api/ProvidersApi.md#providerrevisionsidget) | **GET** /provider-revisions/{id} | Get provider revision
*ProvidersApi* | [**providersByNameNameGet**](docs/Api/ProvidersApi.md#providersbynamenameget) | **GET** /providers/by-name/{name} | Get provider by name
*ProvidersApi* | [**providersGet**](docs/Api/ProvidersApi.md#providersget) | **GET** /providers | List providers
*ServicesApi* | [**serviceRevisionsIdGet**](docs/Api/ServicesApi.md#servicerevisionsidget) | **GET** /service-revisions/{id} | Get service revision
*ServicesApi* | [**servicesByNameNameGet**](docs/Api/ServicesApi.md#servicesbynamenameget) | **GET** /services/by-name/{name} | Get service by name
*ServicesApi* | [**servicesGet**](docs/Api/ServicesApi.md#servicesget) | **GET** /services | List services
*ServicesApi* | [**servicesNameLinkCandidatesGet**](docs/Api/ServicesApi.md#servicesnamelinkcandidatesget) | **GET** /services/{name}/link-candidates | List service link candidates
*StacksApi* | [**stackRevisionsIdGet**](docs/Api/StacksApi.md#stackrevisionsidget) | **GET** /stack-revisions/{id} | Get stack revision
*StacksApi* | [**stackRevisionsIdServicesGet**](docs/Api/StacksApi.md#stackrevisionsidservicesget) | **GET** /stack-revisions/{id}/services | List stack services
*StacksApi* | [**stacksByNameNameGet**](docs/Api/StacksApi.md#stacksbynamenameget) | **GET** /stacks/by-name/{name} | Get stack by name
*StacksApi* | [**stacksGet**](docs/Api/StacksApi.md#stacksget) | **GET** /stacks | List stacks
*TaskStepsApi* | [**taskStepsIdLogUrlGet**](docs/Api/TaskStepsApi.md#taskstepsidlogurlget) | **GET** /task-steps/{id}/log-url | Get task step log URL
*TaskStepsApi* | [**taskStepsIdLogsGet**](docs/Api/TaskStepsApi.md#taskstepsidlogsget) | **GET** /task-steps/{id}/logs | Get task step logs
*TasksApi* | [**tasksGet**](docs/Api/TasksApi.md#tasksget) | **GET** /tasks | List tasks
*TasksApi* | [**tasksIdCancelPost**](docs/Api/TasksApi.md#tasksidcancelpost) | **POST** /tasks/{id}/cancel | Cancel task
*TasksApi* | [**tasksIdGet**](docs/Api/TasksApi.md#tasksidget) | **GET** /tasks/{id} | Get task
*TasksApi* | [**tasksIdRepeatPost**](docs/Api/TasksApi.md#tasksidrepeatpost) | **POST** /tasks/{id}/repeat | Repeat task

## Models

- [App](docs/Model/App.md)
- [AppBuild](docs/Model/AppBuild.md)
- [AppBuildsResponse](docs/Model/AppBuildsResponse.md)
- [AppDeployment](docs/Model/AppDeployment.md)
- [AppDeploymentsResponse](docs/Model/AppDeploymentsResponse.md)
- [AppEndpointOptionInput](docs/Model/AppEndpointOptionInput.md)
- [AppInstance](docs/Model/AppInstance.md)
- [AppRoute](docs/Model/AppRoute.md)
- [AppService](docs/Model/AppService.md)
- [AppServiceDatabaseInput](docs/Model/AppServiceDatabaseInput.md)
- [AppServiceDeploymentRequest](docs/Model/AppServiceDeploymentRequest.md)
- [AppServiceInput](docs/Model/AppServiceInput.md)
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
- [DatabaseType](docs/Model/DatabaseType.md)
- [DatabaseVersion](docs/Model/DatabaseVersion.md)
- [DeploymentFromCIInput](docs/Model/DeploymentFromCIInput.md)
- [DockerRegistryCredentials](docs/Model/DockerRegistryCredentials.md)
- [Env](docs/Model/Env.md)
- [FieldInput](docs/Model/FieldInput.md)
- [Import](docs/Model/Import.md)
- [ImportFromInput](docs/Model/ImportFromInput.md)
- [ImportInput](docs/Model/ImportInput.md)
- [Integration](docs/Model/Integration.md)
- [IntegrationScope](docs/Model/IntegrationScope.md)
- [KubeVersion](docs/Model/KubeVersion.md)
- [LogLine](docs/Model/LogLine.md)
- [NewAppInput](docs/Model/NewAppInput.md)
- [NewAppInstanceInput](docs/Model/NewAppInstanceInput.md)
- [NewAppRouteInput](docs/Model/NewAppRouteInput.md)
- [NewAppServiceInput](docs/Model/NewAppServiceInput.md)
- [NewBackupInput](docs/Model/NewBackupInput.md)
- [NewBuildFromCIInput](docs/Model/NewBuildFromCIInput.md)
- [NewClusterInput](docs/Model/NewClusterInput.md)
- [NewDatabaseInput](docs/Model/NewDatabaseInput.md)
- [NewImportInput](docs/Model/NewImportInput.md)
- [NewIntegrationInput](docs/Model/NewIntegrationInput.md)
- [NewManagedClusterInput](docs/Model/NewManagedClusterInput.md)
- [NewProjectInput](docs/Model/NewProjectInput.md)
- [OperationResult](docs/Model/OperationResult.md)
- [Org](docs/Model/Org.md)
- [Project](docs/Model/Project.md)
- [Provider](docs/Model/Provider.md)
- [ProviderRevision](docs/Model/ProviderRevision.md)
- [ProvidersResponse](docs/Model/ProvidersResponse.md)
- [RemoteGitRepo](docs/Model/RemoteGitRepo.md)
- [RepeatTaskRequest](docs/Model/RepeatTaskRequest.md)
- [ResourcesInput](docs/Model/ResourcesInput.md)
- [ScalabilityInput](docs/Model/ScalabilityInput.md)
- [Service](docs/Model/Service.md)
- [ServiceDeploymentInput](docs/Model/ServiceDeploymentInput.md)
- [ServiceRevision](docs/Model/ServiceRevision.md)
- [ServicesResponse](docs/Model/ServicesResponse.md)
- [Stack](docs/Model/Stack.md)
- [StackRevision](docs/Model/StackRevision.md)
- [StackService](docs/Model/StackService.md)
- [StacksResponse](docs/Model/StacksResponse.md)
- [Task](docs/Model/Task.md)
- [TaskJob](docs/Model/TaskJob.md)
- [TaskStep](docs/Model/TaskStep.md)
- [TaskStepLogs](docs/Model/TaskStepLogs.md)
- [TasksResponse](docs/Model/TasksResponse.md)
- [URLResponse](docs/Model/URLResponse.md)
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
