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
$create_build_request = new \Wodby\Api\Model\CreateBuildRequest(); // \Wodby\Api\Model\CreateBuildRequest

try {
    $result = $apiInstance->createAppBuild($create_build_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppBuildsApi->createAppBuild: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to */v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AppBuildsApi* | [**createAppBuild**](docs/Api/AppBuildsApi.md#createappbuild) | **POST** /app-builds | Create build
*AppBuildsApi* | [**createAppBuildFromCi**](docs/Api/AppBuildsApi.md#createappbuildfromci) | **POST** /app-builds/from-ci | Create build from CI
*AppBuildsApi* | [**deployAppBuild**](docs/Api/AppBuildsApi.md#deployappbuild) | **POST** /app-builds/{id}/deploy | Deploy build
*AppBuildsApi* | [**getAppBuild**](docs/Api/AppBuildsApi.md#getappbuild) | **GET** /app-builds/{id} | Get build
*AppBuildsApi* | [**getAppBuildDockerRegistryCredentials**](docs/Api/AppBuildsApi.md#getappbuilddockerregistrycredentials) | **GET** /app-builds/{id}/docker-registry-credentials | Get Docker registry credentials for build
*AppBuildsApi* | [**listAppBuilds**](docs/Api/AppBuildsApi.md#listappbuilds) | **GET** /app-builds | List app builds
*AppBuildsApi* | [**voidAppBuild**](docs/Api/AppBuildsApi.md#voidappbuild) | **POST** /app-builds/{id}/void | Void build images
*AppDeploymentsApi* | [**createAppDeployment**](docs/Api/AppDeploymentsApi.md#createappdeployment) | **POST** /app-deployments | Create deployment
*AppDeploymentsApi* | [**createAppDeploymentFromCi**](docs/Api/AppDeploymentsApi.md#createappdeploymentfromci) | **POST** /app-deployments/from-ci | Create deployment from CI
*AppDeploymentsApi* | [**getAppDeployment**](docs/Api/AppDeploymentsApi.md#getappdeployment) | **GET** /app-deployments/{id} | Get deployment
*AppDeploymentsApi* | [**listAppDeployments**](docs/Api/AppDeploymentsApi.md#listappdeployments) | **GET** /app-deployments | List app deployments
*AppDeploymentsApi* | [**redeployAppDeployment**](docs/Api/AppDeploymentsApi.md#redeployappdeployment) | **POST** /app-deployments/{id}/redeploy | Redeploy deployment
*AppInstancesApi* | [**createAppInstance**](docs/Api/AppInstancesApi.md#createappinstance) | **POST** /app-instances | Create app instance
*AppInstancesApi* | [**deleteAppInstance**](docs/Api/AppInstancesApi.md#deleteappinstance) | **DELETE** /app-instances/{id} | Delete app instance
*AppInstancesApi* | [**getAppInstance**](docs/Api/AppInstancesApi.md#getappinstance) | **GET** /app-instances/{id} | Get app instance
*AppInstancesApi* | [**getAppInstanceByName**](docs/Api/AppInstancesApi.md#getappinstancebyname) | **GET** /app-instances/by-name/{appName}/{instanceName} | Get app instance by app and instance name
*AppInstancesApi* | [**listAppInstances**](docs/Api/AppInstancesApi.md#listappinstances) | **GET** /app-instances | List app instances
*AppInstancesApi* | [**updateAppInstance**](docs/Api/AppInstancesApi.md#updateappinstance) | **PUT** /app-instances/{id} | Update app instance
*AppRoutesApi* | [**createAppRoute**](docs/Api/AppRoutesApi.md#createapproute) | **POST** /app-routes | Create app route
*AppRoutesApi* | [**deleteAppRoute**](docs/Api/AppRoutesApi.md#deleteapproute) | **DELETE** /app-routes/{id} | Delete app route
*AppRoutesApi* | [**getAppRoute**](docs/Api/AppRoutesApi.md#getapproute) | **GET** /app-routes/{id} | Get app route
*AppRoutesApi* | [**listAppRoutes**](docs/Api/AppRoutesApi.md#listapproutes) | **GET** /app-routes | List app routes
*AppRoutesApi* | [**updateAppRoute**](docs/Api/AppRoutesApi.md#updateapproute) | **PUT** /app-routes/{id} | Update app route
*AppServicesApi* | [**getAppService**](docs/Api/AppServicesApi.md#getappservice) | **GET** /app-services/{id} | Get app service
*AppServicesApi* | [**listAppServices**](docs/Api/AppServicesApi.md#listappservices) | **GET** /app-services | List app services
*AppServicesApi* | [**runAppServiceAction**](docs/Api/AppServicesApi.md#runappserviceaction) | **POST** /app-services/{id}/actions/{name} | Run app service action
*AppServicesApi* | [**updateAppService**](docs/Api/AppServicesApi.md#updateappservice) | **PUT** /app-services/{id} | Update app service
*AppsApi* | [**createApp**](docs/Api/AppsApi.md#createapp) | **POST** /apps | Create app
*AppsApi* | [**deleteApp**](docs/Api/AppsApi.md#deleteapp) | **DELETE** /apps/{id} | Delete app
*AppsApi* | [**getApp**](docs/Api/AppsApi.md#getapp) | **GET** /apps/{id} | Get app
*AppsApi* | [**getAppByName**](docs/Api/AppsApi.md#getappbyname) | **GET** /apps/by-name/{name} | Get app by name
*AppsApi* | [**listApps**](docs/Api/AppsApi.md#listapps) | **GET** /apps | List apps
*AppsApi* | [**updateApp**](docs/Api/AppsApi.md#updateapp) | **PUT** /apps/{id} | Update app
*BackupsApi* | [**createBackup**](docs/Api/BackupsApi.md#createbackup) | **POST** /backups | Create backup
*BackupsApi* | [**getBackup**](docs/Api/BackupsApi.md#getbackup) | **GET** /backups/{id} | Get backup
*BackupsApi* | [**listBackups**](docs/Api/BackupsApi.md#listbackups) | **GET** /backups | List backups
*ClustersApi* | [**createCluster**](docs/Api/ClustersApi.md#createcluster) | **POST** /clusters | Create cluster
*ClustersApi* | [**deleteCluster**](docs/Api/ClustersApi.md#deletecluster) | **DELETE** /clusters/{id} | Delete cluster
*ClustersApi* | [**getCluster**](docs/Api/ClustersApi.md#getcluster) | **GET** /clusters/{id} | Get cluster
*ClustersApi* | [**getClusterByName**](docs/Api/ClustersApi.md#getclusterbyname) | **GET** /clusters/by-name/{name} | Get cluster by name
*ClustersApi* | [**listClusters**](docs/Api/ClustersApi.md#listclusters) | **GET** /clusters | List clusters
*ClustersApi* | [**updateCluster**](docs/Api/ClustersApi.md#updatecluster) | **PUT** /clusters/{id} | Update cluster
*DatabasesApi* | [**createDatabase**](docs/Api/DatabasesApi.md#createdatabase) | **POST** /databases | Create database
*DatabasesApi* | [**deleteDatabase**](docs/Api/DatabasesApi.md#deletedatabase) | **DELETE** /databases/{id} | Delete database
*DatabasesApi* | [**getDatabase**](docs/Api/DatabasesApi.md#getdatabase) | **GET** /databases/{id} | Get database
*DatabasesApi* | [**getDatabaseByName**](docs/Api/DatabasesApi.md#getdatabasebyname) | **GET** /databases/by-name/{name} | Get database by name
*DatabasesApi* | [**listDatabases**](docs/Api/DatabasesApi.md#listdatabases) | **GET** /databases | List databases
*DatabasesApi* | [**updateDatabase**](docs/Api/DatabasesApi.md#updatedatabase) | **PUT** /databases/{id} | Update database
*DefaultApi* | [**getOpenApiJson**](docs/Api/DefaultApi.md#getopenapijson) | **GET** /openapi.json | Get OpenAPI JSON
*DefaultApi* | [**getOpenApiYaml**](docs/Api/DefaultApi.md#getopenapiyaml) | **GET** /openapi.yaml | Get OpenAPI YAML
*EnvsApi* | [**createEnv**](docs/Api/EnvsApi.md#createenv) | **POST** /envs | Create env
*EnvsApi* | [**deleteEnv**](docs/Api/EnvsApi.md#deleteenv) | **DELETE** /envs/{id} | Delete env
*EnvsApi* | [**getEnv**](docs/Api/EnvsApi.md#getenv) | **GET** /envs/{id} | Get env
*EnvsApi* | [**getEnvByName**](docs/Api/EnvsApi.md#getenvbyname) | **GET** /envs/by-name/{name} | Get env by name
*EnvsApi* | [**listEnvs**](docs/Api/EnvsApi.md#listenvs) | **GET** /envs | List envs
*EnvsApi* | [**updateEnv**](docs/Api/EnvsApi.md#updateenv) | **PUT** /envs/{id} | Update env
*ImportsApi* | [**createImport**](docs/Api/ImportsApi.md#createimport) | **POST** /imports | Create import
*ImportsApi* | [**getImport**](docs/Api/ImportsApi.md#getimport) | **GET** /imports/{id} | Get import
*ImportsApi* | [**listImports**](docs/Api/ImportsApi.md#listimports) | **GET** /imports | List imports
*IntegrationKindsApi* | [**getIntegrationKindDatabaseSettings**](docs/Api/IntegrationKindsApi.md#getintegrationkinddatabasesettings) | **GET** /integration-kinds/{id}/database-settings | Get database settings
*IntegrationKindsApi* | [**listIntegrationKindDatabaseMachineTypes**](docs/Api/IntegrationKindsApi.md#listintegrationkinddatabasemachinetypes) | **GET** /integration-kinds/{id}/database-machine-types | List database machine types
*IntegrationKindsApi* | [**listIntegrationKindDatabaseRegions**](docs/Api/IntegrationKindsApi.md#listintegrationkinddatabaseregions) | **GET** /integration-kinds/{id}/database-regions | List database regions
*IntegrationKindsApi* | [**listIntegrationKindDatabaseTypes**](docs/Api/IntegrationKindsApi.md#listintegrationkinddatabasetypes) | **GET** /integration-kinds/{id}/database-types | List database types
*IntegrationKindsApi* | [**listIntegrationKindDatabaseVersions**](docs/Api/IntegrationKindsApi.md#listintegrationkinddatabaseversions) | **GET** /integration-kinds/{id}/database-versions | List database versions
*IntegrationsApi* | [**createIntegration**](docs/Api/IntegrationsApi.md#createintegration) | **POST** /integrations | Create integration
*IntegrationsApi* | [**deleteIntegration**](docs/Api/IntegrationsApi.md#deleteintegration) | **DELETE** /integrations/{id} | Delete integration
*IntegrationsApi* | [**getIntegration**](docs/Api/IntegrationsApi.md#getintegration) | **GET** /integrations/{id} | Get integration
*IntegrationsApi* | [**getIntegrationByName**](docs/Api/IntegrationsApi.md#getintegrationbyname) | **GET** /integrations/by-name/{name} | Get integration by name
*IntegrationsApi* | [**getIntegrationKubeSettings**](docs/Api/IntegrationsApi.md#getintegrationkubesettings) | **GET** /integrations/{id}/options/kube-settings | Get Kubernetes settings
*IntegrationsApi* | [**listIntegrationKubeMachineTypes**](docs/Api/IntegrationsApi.md#listintegrationkubemachinetypes) | **GET** /integrations/{id}/options/kube-machine-types | List Kubernetes machine types
*IntegrationsApi* | [**listIntegrationKubeRegions**](docs/Api/IntegrationsApi.md#listintegrationkuberegions) | **GET** /integrations/{id}/options/kube-regions | List Kubernetes regions
*IntegrationsApi* | [**listIntegrationKubeVersions**](docs/Api/IntegrationsApi.md#listintegrationkubeversions) | **GET** /integrations/{id}/options/kube-versions | List Kubernetes versions
*IntegrationsApi* | [**listIntegrationKubeZones**](docs/Api/IntegrationsApi.md#listintegrationkubezones) | **GET** /integrations/{id}/options/kube-zones | List Kubernetes zones
*IntegrationsApi* | [**listIntegrationRemoteGitRepoBranches**](docs/Api/IntegrationsApi.md#listintegrationremotegitrepobranches) | **GET** /integrations/{id}/options/remote-git-repo-branches | List remote Git repository branches
*IntegrationsApi* | [**listIntegrationRemoteGitRepoTags**](docs/Api/IntegrationsApi.md#listintegrationremotegitrepotags) | **GET** /integrations/{id}/options/remote-git-repo-tags | List remote Git repository tags
*IntegrationsApi* | [**listIntegrationRemoteGitRepos**](docs/Api/IntegrationsApi.md#listintegrationremotegitrepos) | **GET** /integrations/{id}/options/remote-git-repos | List remote Git repositories
*IntegrationsApi* | [**listIntegrationScopes**](docs/Api/IntegrationsApi.md#listintegrationscopes) | **GET** /integrations/{id}/options/scopes | List integration scopes
*IntegrationsApi* | [**listIntegrationStorageBuckets**](docs/Api/IntegrationsApi.md#listintegrationstoragebuckets) | **GET** /integrations/{id}/options/storage-buckets | List storage buckets
*IntegrationsApi* | [**listIntegrationStorageClasses**](docs/Api/IntegrationsApi.md#listintegrationstorageclasses) | **GET** /integrations/{id}/options/storage-classes | List storage classes
*IntegrationsApi* | [**listIntegrations**](docs/Api/IntegrationsApi.md#listintegrations) | **GET** /integrations | List integrations
*IntegrationsApi* | [**updateIntegration**](docs/Api/IntegrationsApi.md#updateintegration) | **PUT** /integrations/{id} | Update integration
*OrgsApi* | [**createOrg**](docs/Api/OrgsApi.md#createorg) | **POST** /orgs | Create org
*OrgsApi* | [**deleteOrg**](docs/Api/OrgsApi.md#deleteorg) | **DELETE** /orgs/{id} | Delete org
*OrgsApi* | [**getOrg**](docs/Api/OrgsApi.md#getorg) | **GET** /orgs/{id} | Get org
*OrgsApi* | [**listOrgs**](docs/Api/OrgsApi.md#listorgs) | **GET** /orgs | List orgs
*OrgsApi* | [**updateOrg**](docs/Api/OrgsApi.md#updateorg) | **PUT** /orgs/{id} | Update org
*ProjectsApi* | [**createProject**](docs/Api/ProjectsApi.md#createproject) | **POST** /projects | Create project
*ProjectsApi* | [**deleteProject**](docs/Api/ProjectsApi.md#deleteproject) | **DELETE** /projects/{id} | Delete project
*ProjectsApi* | [**getProject**](docs/Api/ProjectsApi.md#getproject) | **GET** /projects/{id} | Get project
*ProjectsApi* | [**getProjectByName**](docs/Api/ProjectsApi.md#getprojectbyname) | **GET** /projects/by-name/{name} | Get project by name
*ProjectsApi* | [**listProjects**](docs/Api/ProjectsApi.md#listprojects) | **GET** /projects | List projects
*ProjectsApi* | [**updateProject**](docs/Api/ProjectsApi.md#updateproject) | **PUT** /projects/{id} | Update project
*ProvidersApi* | [**getProvider**](docs/Api/ProvidersApi.md#getprovider) | **GET** /providers/{id} | Get provider
*ProvidersApi* | [**getProviderByName**](docs/Api/ProvidersApi.md#getproviderbyname) | **GET** /providers/by-name/{name} | Get provider by name
*ProvidersApi* | [**getProviderRevision**](docs/Api/ProvidersApi.md#getproviderrevision) | **GET** /provider-revisions/{id} | Get provider revision
*ProvidersApi* | [**listProviders**](docs/Api/ProvidersApi.md#listproviders) | **GET** /providers | List providers
*ServicesApi* | [**getService**](docs/Api/ServicesApi.md#getservice) | **GET** /services/{id} | Get service
*ServicesApi* | [**getServiceByName**](docs/Api/ServicesApi.md#getservicebyname) | **GET** /services/by-name/{name} | Get service by name
*ServicesApi* | [**getServiceRevision**](docs/Api/ServicesApi.md#getservicerevision) | **GET** /service-revisions/{id} | Get service revision
*ServicesApi* | [**listServiceLinkCandidates**](docs/Api/ServicesApi.md#listservicelinkcandidates) | **GET** /services/{name}/options/link-candidates | List service link candidates
*ServicesApi* | [**listServices**](docs/Api/ServicesApi.md#listservices) | **GET** /services | List services
*StacksApi* | [**getStack**](docs/Api/StacksApi.md#getstack) | **GET** /stacks/{id} | Get stack
*StacksApi* | [**getStackByName**](docs/Api/StacksApi.md#getstackbyname) | **GET** /stacks/by-name/{name} | Get stack by name
*StacksApi* | [**getStackRevision**](docs/Api/StacksApi.md#getstackrevision) | **GET** /stack-revisions/{id} | Get stack revision
*StacksApi* | [**listStackRevisionServices**](docs/Api/StacksApi.md#liststackrevisionservices) | **GET** /stack-revisions/{id}/services | List stack services
*StacksApi* | [**listStacks**](docs/Api/StacksApi.md#liststacks) | **GET** /stacks | List stacks
*TaskStepsApi* | [**getTaskStepLogUrl**](docs/Api/TaskStepsApi.md#gettasksteplogurl) | **GET** /task-steps/{id}/log-url | Get task step log URL
*TaskStepsApi* | [**getTaskStepLogs**](docs/Api/TaskStepsApi.md#gettasksteplogs) | **GET** /task-steps/{id}/logs | Get task step logs
*TasksApi* | [**cancelTask**](docs/Api/TasksApi.md#canceltask) | **POST** /tasks/{id}/cancel | Cancel task
*TasksApi* | [**getTask**](docs/Api/TasksApi.md#gettask) | **GET** /tasks/{id} | Get task
*TasksApi* | [**listTasks**](docs/Api/TasksApi.md#listtasks) | **GET** /tasks | List tasks
*TasksApi* | [**repeatTask**](docs/Api/TasksApi.md#repeattask) | **POST** /tasks/{id}/repeat | Repeat task

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
- [ErrorResponse](docs/Model/ErrorResponse.md)
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
