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



// Configure API key authorization: apiKeyHeader
$config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wodby\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new Wodby\Api\Api\AppAuthsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_app_auth_input = new \Wodby\Api\Model\NewAppAuthInput(); // \Wodby\Api\Model\NewAppAuthInput

try {
    $result = $apiInstance->createAppAuth($new_app_auth_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppAuthsApi->createAppAuth: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to */v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AppAuthsApi* | [**createAppAuth**](docs/Api/AppAuthsApi.md#createappauth) | **POST** /app-auths | Create app auth
*AppAuthsApi* | [**deleteAppAuth**](docs/Api/AppAuthsApi.md#deleteappauth) | **DELETE** /app-auths/{id} | Delete app auth
*AppAuthsApi* | [**listAppAuths**](docs/Api/AppAuthsApi.md#listappauths) | **GET** /app-auths | List app auths
*AppAuthsApi* | [**updateAppAuth**](docs/Api/AppAuthsApi.md#updateappauth) | **PUT** /app-auths/{id} | Update app auth
*AppBuildsApi* | [**createAppBuild**](docs/Api/AppBuildsApi.md#createappbuild) | **POST** /app-builds | Create build
*AppBuildsApi* | [**createAppBuildFromCi**](docs/Api/AppBuildsApi.md#createappbuildfromci) | **POST** /app-builds/from-ci | Create build from CI
*AppBuildsApi* | [**deployAppBuild**](docs/Api/AppBuildsApi.md#deployappbuild) | **POST** /app-builds/{id}/deploy | Deploy build
*AppBuildsApi* | [**getAppBuild**](docs/Api/AppBuildsApi.md#getappbuild) | **GET** /app-builds/{id} | Get build
*AppBuildsApi* | [**getAppBuildConfig**](docs/Api/AppBuildsApi.md#getappbuildconfig) | **GET** /app-builds/{id}/config | Get build config
*AppBuildsApi* | [**getAppBuildDockerRegistryCredentials**](docs/Api/AppBuildsApi.md#getappbuilddockerregistrycredentials) | **GET** /app-builds/{id}/docker-registry-credentials | Get Docker registry credentials for build
*AppBuildsApi* | [**listAppBuilds**](docs/Api/AppBuildsApi.md#listappbuilds) | **GET** /app-builds | List app builds
*AppDeploymentsApi* | [**createAppDeployment**](docs/Api/AppDeploymentsApi.md#createappdeployment) | **POST** /app-deployments | Create deployment
*AppDeploymentsApi* | [**createAppDeploymentFromCi**](docs/Api/AppDeploymentsApi.md#createappdeploymentfromci) | **POST** /app-deployments/from-ci | Create deployment from CI
*AppDeploymentsApi* | [**getAppDeployment**](docs/Api/AppDeploymentsApi.md#getappdeployment) | **GET** /app-deployments/{id} | Get deployment
*AppDeploymentsApi* | [**listAppDeployments**](docs/Api/AppDeploymentsApi.md#listappdeployments) | **GET** /app-deployments | List app deployments
*AppDeploymentsApi* | [**redeployAppDeployment**](docs/Api/AppDeploymentsApi.md#redeployappdeployment) | **POST** /app-deployments/{id}/redeploy | Redeploy deployment
*AppInstancesApi* | [**createAppInstance**](docs/Api/AppInstancesApi.md#createappinstance) | **POST** /app-instances | Create app instance
*AppInstancesApi* | [**deleteAppInstance**](docs/Api/AppInstancesApi.md#deleteappinstance) | **DELETE** /app-instances/{id} | Delete app instance
*AppInstancesApi* | [**getAppInstance**](docs/Api/AppInstancesApi.md#getappinstance) | **GET** /app-instances/{id} | Get app instance
*AppInstancesApi* | [**getAppInstanceByName**](docs/Api/AppInstancesApi.md#getappinstancebyname) | **GET** /app-instances/by-name/{appName}/{instanceName} | Get app instance by app and instance name
*AppInstancesApi* | [**getAppInstanceCICDSettings**](docs/Api/AppInstancesApi.md#getappinstancecicdsettings) | **GET** /app-instances/cicd-settings/{id} | Get app instance CI/CD settings
*AppInstancesApi* | [**listAppInstances**](docs/Api/AppInstancesApi.md#listappinstances) | **GET** /app-instances | List app instances
*AppInstancesApi* | [**updateAppInstance**](docs/Api/AppInstancesApi.md#updateappinstance) | **PUT** /app-instances/{id} | Update app instance
*AppInstancesApi* | [**updateAppInstanceCICDSettings**](docs/Api/AppInstancesApi.md#updateappinstancecicdsettings) | **PUT** /app-instances/cicd-settings/{id} | Update app instance CI/CD settings
*AppInstancesApi* | [**updateAppInstanceSettings**](docs/Api/AppInstancesApi.md#updateappinstancesettings) | **PUT** /app-instances/settings/{id} | Update app instance settings
*AppInstancesApi* | [**upgradeAppInstanceStack**](docs/Api/AppInstancesApi.md#upgradeappinstancestack) | **POST** /app-instances/{id}/actions/upgrade-stack | Upgrade app instance stack
*AppPortsApi* | [**getAppPort**](docs/Api/AppPortsApi.md#getappport) | **GET** /app-ports/{id} | Get app port
*AppPortsApi* | [**listAppPorts**](docs/Api/AppPortsApi.md#listappports) | **GET** /app-ports | List app ports
*AppRoutesApi* | [**createAppRoute**](docs/Api/AppRoutesApi.md#createapproute) | **POST** /app-routes | Create app route
*AppRoutesApi* | [**deleteAppRoute**](docs/Api/AppRoutesApi.md#deleteapproute) | **DELETE** /app-routes/{id} | Delete app route
*AppRoutesApi* | [**deleteAppRouteSetting**](docs/Api/AppRoutesApi.md#deleteapproutesetting) | **DELETE** /app-routes/{id}/settings/{name} | Delete app route setting
*AppRoutesApi* | [**getAppRoute**](docs/Api/AppRoutesApi.md#getapproute) | **GET** /app-routes/{id} | Get app route
*AppRoutesApi* | [**listAppRouteSettings**](docs/Api/AppRoutesApi.md#listapproutesettings) | **GET** /app-routes/{id}/settings | List app route settings
*AppRoutesApi* | [**listAppRoutes**](docs/Api/AppRoutesApi.md#listapproutes) | **GET** /app-routes | List app routes
*AppRoutesApi* | [**setAppRouteSetting**](docs/Api/AppRoutesApi.md#setapproutesetting) | **PUT** /app-routes/{id}/settings/{name} | Set app route setting
*AppRoutesApi* | [**updateAppRoute**](docs/Api/AppRoutesApi.md#updateapproute) | **PUT** /app-routes/{id} | Update app route
*AppServicesApi* | [**createAppServiceAnnotation**](docs/Api/AppServicesApi.md#createappserviceannotation) | **POST** /app-services/{id}/annotations | Create app service annotation
*AppServicesApi* | [**createAppServiceCronSchedule**](docs/Api/AppServicesApi.md#createappservicecronschedule) | **POST** /app-services/{id}/cron-schedules | Create app service cron schedule
*AppServicesApi* | [**createAppServiceEnvVar**](docs/Api/AppServicesApi.md#createappserviceenvvar) | **POST** /app-services/{id}/env-vars | Create app service env var
*AppServicesApi* | [**createAppServiceHelmValue**](docs/Api/AppServicesApi.md#createappservicehelmvalue) | **POST** /app-services/{id}/helm-values | Create app service Helm value
*AppServicesApi* | [**createAppServiceIntegration**](docs/Api/AppServicesApi.md#createappserviceintegration) | **POST** /app-services/{id}/integrations | Create app service integration
*AppServicesApi* | [**createAppServiceLogStream**](docs/Api/AppServicesApi.md#createappservicelogstream) | **POST** /app-services/{id}/log-streams | Create app service log stream
*AppServicesApi* | [**createAppServiceToken**](docs/Api/AppServicesApi.md#createappservicetoken) | **POST** /app-services/{id}/tokens | Create app service token
*AppServicesApi* | [**deleteAppServiceAnnotation**](docs/Api/AppServicesApi.md#deleteappserviceannotation) | **DELETE** /app-service-annotations/{id} | Delete app service annotation
*AppServicesApi* | [**deleteAppServiceCronSchedule**](docs/Api/AppServicesApi.md#deleteappservicecronschedule) | **DELETE** /app-service-cron-schedules/{id} | Delete app service cron schedule
*AppServicesApi* | [**deleteAppServiceEnvVar**](docs/Api/AppServicesApi.md#deleteappserviceenvvar) | **DELETE** /app-service-env-vars/{id} | Delete app service env var
*AppServicesApi* | [**deleteAppServiceHelmValue**](docs/Api/AppServicesApi.md#deleteappservicehelmvalue) | **DELETE** /app-service-helm-values/{id} | Delete app service Helm value
*AppServicesApi* | [**deleteAppServiceIntegration**](docs/Api/AppServicesApi.md#deleteappserviceintegration) | **DELETE** /app-service-integrations/{id} | Delete app service integration
*AppServicesApi* | [**deleteAppServiceToken**](docs/Api/AppServicesApi.md#deleteappservicetoken) | **DELETE** /app-service-tokens/{id} | Delete app service token
*AppServicesApi* | [**getAppService**](docs/Api/AppServicesApi.md#getappservice) | **GET** /app-services/{id} | Get app service
*AppServicesApi* | [**getAppServiceCronJob**](docs/Api/AppServicesApi.md#getappservicecronjob) | **GET** /app-service-cron-jobs/{id} | Get app service cron job
*AppServicesApi* | [**keepLogStreamAlive**](docs/Api/AppServicesApi.md#keeplogstreamalive) | **POST** /log-streams/{id}/keep-alive | Keep log stream alive
*AppServicesApi* | [**listAppServiceAnnotations**](docs/Api/AppServicesApi.md#listappserviceannotations) | **GET** /app-services/{id}/annotations | List app service annotations
*AppServicesApi* | [**listAppServiceConfigs**](docs/Api/AppServicesApi.md#listappserviceconfigs) | **GET** /app-services/{id}/configs | List app service configs
*AppServicesApi* | [**listAppServiceContainers**](docs/Api/AppServicesApi.md#listappservicecontainers) | **GET** /app-services/{id}/containers | List app service containers
*AppServicesApi* | [**listAppServiceCronJobs**](docs/Api/AppServicesApi.md#listappservicecronjobs) | **GET** /app-service-cron-jobs | List app service cron jobs
*AppServicesApi* | [**listAppServiceCronSchedules**](docs/Api/AppServicesApi.md#listappservicecronschedules) | **GET** /app-services/{id}/cron-schedules | List app service cron schedules
*AppServicesApi* | [**listAppServiceEnvVars**](docs/Api/AppServicesApi.md#listappserviceenvvars) | **GET** /app-services/{id}/env-vars | List app service env vars
*AppServicesApi* | [**listAppServiceHelmValues**](docs/Api/AppServicesApi.md#listappservicehelmvalues) | **GET** /app-services/{id}/helm-values | List app service Helm values
*AppServicesApi* | [**listAppServiceIntegrations**](docs/Api/AppServicesApi.md#listappserviceintegrations) | **GET** /app-services/{id}/integrations | List app service integrations
*AppServicesApi* | [**listAppServiceLinks**](docs/Api/AppServicesApi.md#listappservicelinks) | **GET** /app-services/{id}/links | List app service links
*AppServicesApi* | [**listAppServiceSettings**](docs/Api/AppServicesApi.md#listappservicesettings) | **GET** /app-services/{id}/settings | List app service settings
*AppServicesApi* | [**listAppServiceTokens**](docs/Api/AppServicesApi.md#listappservicetokens) | **GET** /app-services/{id}/tokens | List app service tokens
*AppServicesApi* | [**listAppServiceVolumes**](docs/Api/AppServicesApi.md#listappservicevolumes) | **GET** /app-services/{id}/volumes | List app service volumes
*AppServicesApi* | [**listAppServices**](docs/Api/AppServicesApi.md#listappservices) | **GET** /app-services | List app services
*AppServicesApi* | [**runAppServiceAction**](docs/Api/AppServicesApi.md#runappserviceaction) | **POST** /app-services/{id}/actions/{name} | Run app service action
*AppServicesApi* | [**runAppServiceCronSchedule**](docs/Api/AppServicesApi.md#runappservicecronschedule) | **POST** /app-service-cron-schedules/{id}/run | Run app service cron schedule
*AppServicesApi* | [**setAppServiceConfig**](docs/Api/AppServicesApi.md#setappserviceconfig) | **PUT** /app-services/{id}/configs/{name} | Set app service config
*AppServicesApi* | [**setAppServiceLink**](docs/Api/AppServicesApi.md#setappservicelink) | **PUT** /app-services/{id}/links/{name} | Set app service link
*AppServicesApi* | [**setAppServiceResources**](docs/Api/AppServicesApi.md#setappserviceresources) | **PUT** /app-services/{id}/resources | Set app service resources
*AppServicesApi* | [**setAppServiceSetting**](docs/Api/AppServicesApi.md#setappservicesetting) | **PUT** /app-services/{id}/settings/{name} | Set app service setting
*AppServicesApi* | [**startLogStream**](docs/Api/AppServicesApi.md#startlogstream) | **POST** /log-streams/{id}/start | Start log stream
*AppServicesApi* | [**stopLogStream**](docs/Api/AppServicesApi.md#stoplogstream) | **POST** /log-streams/{id}/stop | Stop log stream
*AppServicesApi* | [**updateAppService**](docs/Api/AppServicesApi.md#updateappservice) | **PUT** /app-services/{id} | Update app service
*AppServicesApi* | [**updateAppServiceCronSchedule**](docs/Api/AppServicesApi.md#updateappservicecronschedule) | **PUT** /app-service-cron-schedules/{id} | Update app service cron schedule
*AppServicesApi* | [**updateAppServiceDatabase**](docs/Api/AppServicesApi.md#updateappservicedatabase) | **PUT** /app-services/{id}/database | Update app service database references
*AppServicesApi* | [**updateAppServiceEnvVar**](docs/Api/AppServicesApi.md#updateappserviceenvvar) | **PUT** /app-service-env-vars/{id} | Update app service env var
*AppServicesApi* | [**updateAppServiceHelmValue**](docs/Api/AppServicesApi.md#updateappservicehelmvalue) | **PUT** /app-service-helm-values/{id} | Update app service Helm value
*AppServicesApi* | [**updateAppServiceToken**](docs/Api/AppServicesApi.md#updateappservicetoken) | **PUT** /app-service-tokens/{id} | Update app service token
*AppsApi* | [**createApp**](docs/Api/AppsApi.md#createapp) | **POST** /apps | Create app
*AppsApi* | [**deleteApp**](docs/Api/AppsApi.md#deleteapp) | **DELETE** /apps/{id} | Delete app
*AppsApi* | [**getApp**](docs/Api/AppsApi.md#getapp) | **GET** /apps/{id} | Get app
*AppsApi* | [**getAppByName**](docs/Api/AppsApi.md#getappbyname) | **GET** /apps/by-name/{name} | Get app by name
*AppsApi* | [**listApps**](docs/Api/AppsApi.md#listapps) | **GET** /apps | List apps
*AppsApi* | [**updateApp**](docs/Api/AppsApi.md#updateapp) | **PUT** /apps/{id} | Update app
*BackupsApi* | [**createBackup**](docs/Api/BackupsApi.md#createbackup) | **POST** /backups | Create backup
*BackupsApi* | [**createBackupPreset**](docs/Api/BackupsApi.md#createbackuppreset) | **POST** /backup-presets | Create backup preset
*BackupsApi* | [**deleteBackupPreset**](docs/Api/BackupsApi.md#deletebackuppreset) | **DELETE** /backup-presets/{id} | Delete backup preset
*BackupsApi* | [**getBackup**](docs/Api/BackupsApi.md#getbackup) | **GET** /backups/{id} | Get backup
*BackupsApi* | [**getBackupPreset**](docs/Api/BackupsApi.md#getbackuppreset) | **GET** /backup-presets/{id} | Get backup preset
*BackupsApi* | [**listBackupPresets**](docs/Api/BackupsApi.md#listbackuppresets) | **GET** /backup-presets | List backup presets
*BackupsApi* | [**listBackups**](docs/Api/BackupsApi.md#listbackups) | **GET** /backups | List backups
*BackupsApi* | [**updateBackupPreset**](docs/Api/BackupsApi.md#updatebackuppreset) | **PUT** /backup-presets/{id} | Update backup preset
*CertsApi* | [**getCert**](docs/Api/CertsApi.md#getcert) | **GET** /certs/{id} | Get cert
*CertsApi* | [**listCerts**](docs/Api/CertsApi.md#listcerts) | **GET** /certs | List certs
*ClustersApi* | [**createCluster**](docs/Api/ClustersApi.md#createcluster) | **POST** /clusters | Create cluster
*ClustersApi* | [**deleteCluster**](docs/Api/ClustersApi.md#deletecluster) | **DELETE** /clusters/{id} | Delete cluster
*ClustersApi* | [**getCluster**](docs/Api/ClustersApi.md#getcluster) | **GET** /clusters/{id} | Get cluster
*ClustersApi* | [**getClusterByName**](docs/Api/ClustersApi.md#getclusterbyname) | **GET** /clusters/by-name/{name} | Get cluster by name
*ClustersApi* | [**listClusters**](docs/Api/ClustersApi.md#listclusters) | **GET** /clusters | List clusters
*ClustersApi* | [**updateCluster**](docs/Api/ClustersApi.md#updatecluster) | **PUT** /clusters/{id} | Update cluster
*ClustersApi* | [**updateClusterSettings**](docs/Api/ClustersApi.md#updateclustersettings) | **PUT** /clusters/settings/{id} | Update cluster settings
*ClustersApi* | [**upgradeClusterInfra**](docs/Api/ClustersApi.md#upgradeclusterinfra) | **POST** /clusters/{id}/actions/upgrade-infra | Upgrade cluster infrastructure
*ClustersApi* | [**upgradeClusterInfraApps**](docs/Api/ClustersApi.md#upgradeclusterinfraapps) | **POST** /clusters/{id}/actions/upgrade-infra-apps | Upgrade cluster infrastructure app stacks
*DatabasesApi* | [**createDatabase**](docs/Api/DatabasesApi.md#createdatabase) | **POST** /databases | Create database
*DatabasesApi* | [**createDatabaseDB**](docs/Api/DatabasesApi.md#createdatabasedb) | **POST** /database-dbs | Create database DB
*DatabasesApi* | [**createDatabaseUser**](docs/Api/DatabasesApi.md#createdatabaseuser) | **POST** /database-users | Create database user
*DatabasesApi* | [**deleteDatabase**](docs/Api/DatabasesApi.md#deletedatabase) | **DELETE** /databases/{id} | Delete database
*DatabasesApi* | [**deleteDatabaseDB**](docs/Api/DatabasesApi.md#deletedatabasedb) | **DELETE** /database-dbs/{id} | Delete database DB
*DatabasesApi* | [**deleteDatabaseUser**](docs/Api/DatabasesApi.md#deletedatabaseuser) | **DELETE** /database-users/{id} | Delete database user
*DatabasesApi* | [**getDatabase**](docs/Api/DatabasesApi.md#getdatabase) | **GET** /databases/{id} | Get database
*DatabasesApi* | [**getDatabaseByName**](docs/Api/DatabasesApi.md#getdatabasebyname) | **GET** /databases/by-name/{name} | Get database by name
*DatabasesApi* | [**getDatabaseDB**](docs/Api/DatabasesApi.md#getdatabasedb) | **GET** /database-dbs/{id} | Get database DB
*DatabasesApi* | [**listDatabaseCharsets**](docs/Api/DatabasesApi.md#listdatabasecharsets) | **GET** /databases/{id}/options/charsets | List database charsets
*DatabasesApi* | [**listDatabaseDBs**](docs/Api/DatabasesApi.md#listdatabasedbs) | **GET** /database-dbs | List database DBs
*DatabasesApi* | [**listDatabaseUsers**](docs/Api/DatabasesApi.md#listdatabaseusers) | **GET** /database-users | List database users
*DatabasesApi* | [**listDatabases**](docs/Api/DatabasesApi.md#listdatabases) | **GET** /databases | List databases
*DatabasesApi* | [**updateDatabase**](docs/Api/DatabasesApi.md#updatedatabase) | **PUT** /databases/{id} | Update database
*DatabasesApi* | [**updateDatabaseUserDBs**](docs/Api/DatabasesApi.md#updatedatabaseuserdbs) | **PUT** /database-users/{id}/dbs | Update database user DB grants
*DefaultApi* | [**getOpenApiJson**](docs/Api/DefaultApi.md#getopenapijson) | **GET** /openapi.json | Get OpenAPI JSON
*DefaultApi* | [**getOpenApiYaml**](docs/Api/DefaultApi.md#getopenapiyaml) | **GET** /openapi.yaml | Get OpenAPI YAML
*EnvsApi* | [**createEnv**](docs/Api/EnvsApi.md#createenv) | **POST** /envs | Create env
*EnvsApi* | [**deleteEnv**](docs/Api/EnvsApi.md#deleteenv) | **DELETE** /envs/{id} | Delete env
*EnvsApi* | [**getEnv**](docs/Api/EnvsApi.md#getenv) | **GET** /envs/{id} | Get env
*EnvsApi* | [**getEnvByName**](docs/Api/EnvsApi.md#getenvbyname) | **GET** /envs/by-name/{name} | Get env by name
*EnvsApi* | [**listEnvs**](docs/Api/EnvsApi.md#listenvs) | **GET** /envs | List envs
*EnvsApi* | [**updateEnv**](docs/Api/EnvsApi.md#updateenv) | **PUT** /envs/{id} | Update env
*HelmChartsApi* | [**inspectHelmChart**](docs/Api/HelmChartsApi.md#inspecthelmchart) | **POST** /helm-charts/actions/inspect | Inspect Helm chart
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
*OrgMembershipsApi* | [**getOrgMembership**](docs/Api/OrgMembershipsApi.md#getorgmembership) | **GET** /org-memberships/{id} | Get org membership
*OrgMembershipsApi* | [**listOrgMemberships**](docs/Api/OrgMembershipsApi.md#listorgmemberships) | **GET** /org-memberships | List org memberships
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
*ServicesApi* | [**createServiceFromManifest**](docs/Api/ServicesApi.md#createservicefrommanifest) | **POST** /services/actions/create-from-manifest | Create service from manifest
*ServicesApi* | [**getService**](docs/Api/ServicesApi.md#getservice) | **GET** /services/{id} | Get service
*ServicesApi* | [**getServiceByName**](docs/Api/ServicesApi.md#getservicebyname) | **GET** /services/by-name/{name} | Get service by name
*ServicesApi* | [**getServiceRevision**](docs/Api/ServicesApi.md#getservicerevision) | **GET** /service-revisions/{id} | Get service revision
*ServicesApi* | [**importServices**](docs/Api/ServicesApi.md#importservices) | **POST** /services/actions/import | Import services from Git
*ServicesApi* | [**listServiceLinkCandidates**](docs/Api/ServicesApi.md#listservicelinkcandidates) | **GET** /services/{name}/options/link-candidates | List service link candidates
*ServicesApi* | [**listServices**](docs/Api/ServicesApi.md#listservices) | **GET** /services | List services
*ServicesApi* | [**scaffoldServiceFromHelmChart**](docs/Api/ServicesApi.md#scaffoldservicefromhelmchart) | **POST** /services/actions/scaffold-from-helm-chart | Scaffold service from Helm chart
*ServicesApi* | [**updateServiceFromManifest**](docs/Api/ServicesApi.md#updateservicefrommanifest) | **POST** /services/{id}/actions/update-from-manifest | Update service from manifest
*ServicesApi* | [**updateServiceSettings**](docs/Api/ServicesApi.md#updateservicesettings) | **PUT** /services/settings/{id} | Update service settings
*ServicesApi* | [**validateServiceManifest**](docs/Api/ServicesApi.md#validateservicemanifest) | **POST** /services/actions/validate-manifest | Validate service manifest
*StackServicesApi* | [**createStackService**](docs/Api/StackServicesApi.md#createstackservice) | **POST** /stack-services | Create stack service
*StackServicesApi* | [**createStackServiceAnnotation**](docs/Api/StackServicesApi.md#createstackserviceannotation) | **POST** /stack-services/{id}/annotations | Create stack service annotation
*StackServicesApi* | [**createStackServiceCronSchedule**](docs/Api/StackServicesApi.md#createstackservicecronschedule) | **POST** /stack-services/{id}/cron-schedules | Create stack service cron schedule
*StackServicesApi* | [**createStackServiceEnvVar**](docs/Api/StackServicesApi.md#createstackserviceenvvar) | **POST** /stack-services/{id}/env-vars | Create stack service env var
*StackServicesApi* | [**createStackServiceHelmValue**](docs/Api/StackServicesApi.md#createstackservicehelmvalue) | **POST** /stack-services/{id}/helm-values | Create stack service Helm value
*StackServicesApi* | [**createStackServiceIntegration**](docs/Api/StackServicesApi.md#createstackserviceintegration) | **POST** /stack-services/{id}/integrations | Create stack service integration
*StackServicesApi* | [**createStackServiceToken**](docs/Api/StackServicesApi.md#createstackservicetoken) | **POST** /stack-services/{id}/tokens | Create stack service token
*StackServicesApi* | [**deleteStackService**](docs/Api/StackServicesApi.md#deletestackservice) | **DELETE** /stack-services/{id} | Delete stack service
*StackServicesApi* | [**deleteStackServiceAnnotation**](docs/Api/StackServicesApi.md#deletestackserviceannotation) | **DELETE** /stack-service-annotations/{id} | Delete stack service annotation
*StackServicesApi* | [**deleteStackServiceCronSchedule**](docs/Api/StackServicesApi.md#deletestackservicecronschedule) | **DELETE** /stack-service-cron-schedules/{id} | Delete stack service cron schedule
*StackServicesApi* | [**deleteStackServiceEnvVar**](docs/Api/StackServicesApi.md#deletestackserviceenvvar) | **DELETE** /stack-service-env-vars/{id} | Delete stack service env var
*StackServicesApi* | [**deleteStackServiceHelmValue**](docs/Api/StackServicesApi.md#deletestackservicehelmvalue) | **DELETE** /stack-service-helm-values/{id} | Delete stack service Helm value
*StackServicesApi* | [**deleteStackServiceIntegration**](docs/Api/StackServicesApi.md#deletestackserviceintegration) | **DELETE** /stack-service-integrations/{id} | Delete stack service integration
*StackServicesApi* | [**deleteStackServiceToken**](docs/Api/StackServicesApi.md#deletestackservicetoken) | **DELETE** /stack-service-tokens/{id} | Delete stack service token
*StackServicesApi* | [**listStackServiceAnnotations**](docs/Api/StackServicesApi.md#liststackserviceannotations) | **GET** /stack-services/{id}/annotations | List stack service annotations
*StackServicesApi* | [**listStackServiceConfigs**](docs/Api/StackServicesApi.md#liststackserviceconfigs) | **GET** /stack-services/{id}/configs | List stack service configs
*StackServicesApi* | [**listStackServiceCronSchedules**](docs/Api/StackServicesApi.md#liststackservicecronschedules) | **GET** /stack-services/{id}/cron-schedules | List stack service cron schedules
*StackServicesApi* | [**listStackServiceEnvVars**](docs/Api/StackServicesApi.md#liststackserviceenvvars) | **GET** /stack-services/{id}/env-vars | List stack service env vars
*StackServicesApi* | [**listStackServiceHelmValues**](docs/Api/StackServicesApi.md#liststackservicehelmvalues) | **GET** /stack-services/{id}/helm-values | List stack service Helm values
*StackServicesApi* | [**listStackServiceIntegrations**](docs/Api/StackServicesApi.md#liststackserviceintegrations) | **GET** /stack-services/{id}/integrations | List stack service integrations
*StackServicesApi* | [**listStackServiceLinks**](docs/Api/StackServicesApi.md#liststackservicelinks) | **GET** /stack-services/{id}/links | List stack service links
*StackServicesApi* | [**listStackServiceTokens**](docs/Api/StackServicesApi.md#liststackservicetokens) | **GET** /stack-services/{id}/tokens | List stack service tokens
*StackServicesApi* | [**listStackServiceVolumes**](docs/Api/StackServicesApi.md#liststackservicevolumes) | **GET** /stack-services/{id}/volumes | List stack service volumes
*StackServicesApi* | [**listStackServices**](docs/Api/StackServicesApi.md#liststackservices) | **GET** /stack-services | List stack services
*StackServicesApi* | [**setStackServiceConfig**](docs/Api/StackServicesApi.md#setstackserviceconfig) | **PUT** /stack-services/{id}/configs/{name} | Set stack service config
*StackServicesApi* | [**setStackServiceLink**](docs/Api/StackServicesApi.md#setstackservicelink) | **PUT** /stack-services/{id}/links/{name} | Set stack service link
*StackServicesApi* | [**setStackServiceOptions**](docs/Api/StackServicesApi.md#setstackserviceoptions) | **PUT** /stack-services/{id}/options | Update stack service options
*StackServicesApi* | [**setStackServiceResources**](docs/Api/StackServicesApi.md#setstackserviceresources) | **PUT** /stack-services/{id}/resources | Set stack service resources
*StackServicesApi* | [**setStackServiceSetting**](docs/Api/StackServicesApi.md#setstackservicesetting) | **PUT** /stack-services/{id}/settings/{name} | Set stack service setting
*StackServicesApi* | [**setStackServiceVolume**](docs/Api/StackServicesApi.md#setstackservicevolume) | **PUT** /stack-services/{id}/volumes/{name} | Set stack service volume
*StackServicesApi* | [**updateStackService**](docs/Api/StackServicesApi.md#updatestackservice) | **PUT** /stack-services/{id} | Update stack service
*StackServicesApi* | [**updateStackServiceCronSchedule**](docs/Api/StackServicesApi.md#updatestackservicecronschedule) | **PUT** /stack-service-cron-schedules/{id} | Update stack service cron schedule
*StackServicesApi* | [**updateStackServiceEnvVar**](docs/Api/StackServicesApi.md#updatestackserviceenvvar) | **PUT** /stack-service-env-vars/{id} | Update stack service env var
*StackServicesApi* | [**updateStackServiceHelmValue**](docs/Api/StackServicesApi.md#updatestackservicehelmvalue) | **PUT** /stack-service-helm-values/{id} | Update stack service Helm value
*StackServicesApi* | [**updateStackServiceToken**](docs/Api/StackServicesApi.md#updatestackservicetoken) | **PUT** /stack-service-tokens/{id} | Update stack service token
*StacksApi* | [**createStackFromManifest**](docs/Api/StacksApi.md#createstackfrommanifest) | **POST** /stacks/actions/create-from-manifest | Create stack from manifest
*StacksApi* | [**duplicateStack**](docs/Api/StacksApi.md#duplicatestack) | **POST** /stacks/{id}/actions/duplicate | Duplicate stack
*StacksApi* | [**getStack**](docs/Api/StacksApi.md#getstack) | **GET** /stacks/{id} | Get stack
*StacksApi* | [**getStackByName**](docs/Api/StacksApi.md#getstackbyname) | **GET** /stacks/by-name/{name} | Get stack by name
*StacksApi* | [**getStackRevision**](docs/Api/StacksApi.md#getstackrevision) | **GET** /stack-revisions/{id} | Get stack revision
*StacksApi* | [**importStacks**](docs/Api/StacksApi.md#importstacks) | **POST** /stacks/actions/import | Import stacks from Git
*StacksApi* | [**listStackRevisionServices**](docs/Api/StacksApi.md#liststackrevisionservices) | **GET** /stack-revisions/{id}/services | List stack services
*StacksApi* | [**listStacks**](docs/Api/StacksApi.md#liststacks) | **GET** /stacks | List stacks
*StacksApi* | [**publishStackDraft**](docs/Api/StacksApi.md#publishstackdraft) | **POST** /stacks/{id}/actions/publish-draft | Publish stack draft
*StacksApi* | [**scaffoldStackFromHelmChart**](docs/Api/StacksApi.md#scaffoldstackfromhelmchart) | **POST** /stacks/actions/scaffold-from-helm-chart | Scaffold stack from Helm chart
*StacksApi* | [**syncStackWithOrigin**](docs/Api/StacksApi.md#syncstackwithorigin) | **POST** /stacks/{id}/actions/sync-origin | Sync stack with origin
*StacksApi* | [**updateStackFromGit**](docs/Api/StacksApi.md#updatestackfromgit) | **POST** /stacks/{id}/actions/update-from-git | Update stack from git
*StacksApi* | [**updateStackSettings**](docs/Api/StacksApi.md#updatestacksettings) | **PUT** /stacks/settings/{id} | Update stack settings
*StacksApi* | [**validateStackManifest**](docs/Api/StacksApi.md#validatestackmanifest) | **POST** /stacks/actions/validate-manifest | Validate stack manifest
*TaskStepsApi* | [**getTaskStepLogUrl**](docs/Api/TaskStepsApi.md#gettasksteplogurl) | **GET** /task-steps/{id}/log-url | Get task step log URL
*TaskStepsApi* | [**getTaskStepLogs**](docs/Api/TaskStepsApi.md#gettasksteplogs) | **GET** /task-steps/{id}/logs | Get task step logs
*TasksApi* | [**cancelTask**](docs/Api/TasksApi.md#canceltask) | **POST** /tasks/{id}/cancel | Cancel task
*TasksApi* | [**getTask**](docs/Api/TasksApi.md#gettask) | **GET** /tasks/{id} | Get task
*TasksApi* | [**listTasks**](docs/Api/TasksApi.md#listtasks) | **GET** /tasks | List tasks
*TasksApi* | [**repeatTask**](docs/Api/TasksApi.md#repeattask) | **POST** /tasks/{id}/repeat | Repeat task
*UserApi* | [**getCurrentUser**](docs/Api/UserApi.md#getcurrentuser) | **GET** /user | Get current user
*UserApi* | [**updateCurrentUser**](docs/Api/UserApi.md#updatecurrentuser) | **PUT** /user | Update current user

## Models

- [App](docs/Model/App.md)
- [AppAuth](docs/Model/AppAuth.md)
- [AppBuild](docs/Model/AppBuild.md)
- [AppBuildConfig](docs/Model/AppBuildConfig.md)
- [AppBuildsCreateResponse](docs/Model/AppBuildsCreateResponse.md)
- [AppBuildsResponse](docs/Model/AppBuildsResponse.md)
- [AppDeployment](docs/Model/AppDeployment.md)
- [AppDeploymentsResponse](docs/Model/AppDeploymentsResponse.md)
- [AppInstance](docs/Model/AppInstance.md)
- [AppInstanceAutoStackUpgradeSettings](docs/Model/AppInstanceAutoStackUpgradeSettings.md)
- [AppInstanceAutoStackUpgradeSettingsInput](docs/Model/AppInstanceAutoStackUpgradeSettingsInput.md)
- [AppInstanceBackupHealth](docs/Model/AppInstanceBackupHealth.md)
- [AppInstanceCICDSettings](docs/Model/AppInstanceCICDSettings.md)
- [AppInstanceCICDSettingsInput](docs/Model/AppInstanceCICDSettingsInput.md)
- [AppInstanceCronHealth](docs/Model/AppInstanceCronHealth.md)
- [AppInstanceHealth](docs/Model/AppInstanceHealth.md)
- [AppInstanceSettings](docs/Model/AppInstanceSettings.md)
- [AppInstanceSettingsInput](docs/Model/AppInstanceSettingsInput.md)
- [AppInstanceStackUpgradeInput](docs/Model/AppInstanceStackUpgradeInput.md)
- [AppInstanceStackUpgradeSettings](docs/Model/AppInstanceStackUpgradeSettings.md)
- [AppInstanceStackUpgradeSettingsInput](docs/Model/AppInstanceStackUpgradeSettingsInput.md)
- [AppPort](docs/Model/AppPort.md)
- [AppRoute](docs/Model/AppRoute.md)
- [AppRouteSetting](docs/Model/AppRouteSetting.md)
- [AppRouteSettingName](docs/Model/AppRouteSettingName.md)
- [AppService](docs/Model/AppService.md)
- [AppServiceAnnotation](docs/Model/AppServiceAnnotation.md)
- [AppServiceAnnotationSource](docs/Model/AppServiceAnnotationSource.md)
- [AppServiceBuild](docs/Model/AppServiceBuild.md)
- [AppServiceBuildArg](docs/Model/AppServiceBuildArg.md)
- [AppServiceBuildConfig](docs/Model/AppServiceBuildConfig.md)
- [AppServiceConfig](docs/Model/AppServiceConfig.md)
- [AppServiceContainer](docs/Model/AppServiceContainer.md)
- [AppServiceCronJob](docs/Model/AppServiceCronJob.md)
- [AppServiceCronJobsResponse](docs/Model/AppServiceCronJobsResponse.md)
- [AppServiceCronSchedule](docs/Model/AppServiceCronSchedule.md)
- [AppServiceDatabaseInput](docs/Model/AppServiceDatabaseInput.md)
- [AppServiceDeployment](docs/Model/AppServiceDeployment.md)
- [AppServiceDeploymentRequest](docs/Model/AppServiceDeploymentRequest.md)
- [AppServiceEnvVar](docs/Model/AppServiceEnvVar.md)
- [AppServiceEnvVarSource](docs/Model/AppServiceEnvVarSource.md)
- [AppServiceHelmValue](docs/Model/AppServiceHelmValue.md)
- [AppServiceHelmValueSource](docs/Model/AppServiceHelmValueSource.md)
- [AppServiceInput](docs/Model/AppServiceInput.md)
- [AppServiceIntegration](docs/Model/AppServiceIntegration.md)
- [AppServiceIntegrationInput](docs/Model/AppServiceIntegrationInput.md)
- [AppServiceLink](docs/Model/AppServiceLink.md)
- [AppServiceLinkInput](docs/Model/AppServiceLinkInput.md)
- [AppServiceScalability](docs/Model/AppServiceScalability.md)
- [AppServiceScalabilityUpdateInput](docs/Model/AppServiceScalabilityUpdateInput.md)
- [AppServiceSetting](docs/Model/AppServiceSetting.md)
- [AppServiceSettingInput](docs/Model/AppServiceSettingInput.md)
- [AppServiceToken](docs/Model/AppServiceToken.md)
- [AppServiceVolume](docs/Model/AppServiceVolume.md)
- [AutomationTimeWindow](docs/Model/AutomationTimeWindow.md)
- [AutomationTimeWindowInput](docs/Model/AutomationTimeWindowInput.md)
- [Backup](docs/Model/Backup.md)
- [BackupPreset](docs/Model/BackupPreset.md)
- [BuildSourceInput](docs/Model/BuildSourceInput.md)
- [Cert](docs/Model/Cert.md)
- [Cluster](docs/Model/Cluster.md)
- [ClusterAutoInfrastructureComponentSettings](docs/Model/ClusterAutoInfrastructureComponentSettings.md)
- [ClusterAutoInfrastructureComponentSettingsInput](docs/Model/ClusterAutoInfrastructureComponentSettingsInput.md)
- [ClusterAutoInfrastructureUpgradeSettings](docs/Model/ClusterAutoInfrastructureUpgradeSettings.md)
- [ClusterAutoInfrastructureUpgradeSettingsInput](docs/Model/ClusterAutoInfrastructureUpgradeSettingsInput.md)
- [ClusterAutoUpgradeVersionPolicy](docs/Model/ClusterAutoUpgradeVersionPolicy.md)
- [ClusterAutoUpgradeVersionPolicyInput](docs/Model/ClusterAutoUpgradeVersionPolicyInput.md)
- [ClusterCapabilities](docs/Model/ClusterCapabilities.md)
- [ClusterSettings](docs/Model/ClusterSettings.md)
- [ClusterSettingsInput](docs/Model/ClusterSettingsInput.md)
- [ConfigOverrideInput](docs/Model/ConfigOverrideInput.md)
- [CopyStackSettingsInput](docs/Model/CopyStackSettingsInput.md)
- [CreateBuildRequest](docs/Model/CreateBuildRequest.md)
- [CreateDeploymentRequest](docs/Model/CreateDeploymentRequest.md)
- [CreateEnvRequest](docs/Model/CreateEnvRequest.md)
- [CurrentUser](docs/Model/CurrentUser.md)
- [Database](docs/Model/Database.md)
- [DatabaseCharset](docs/Model/DatabaseCharset.md)
- [DatabaseDB](docs/Model/DatabaseDB.md)
- [DatabaseType](docs/Model/DatabaseType.md)
- [DatabaseUser](docs/Model/DatabaseUser.md)
- [DatabaseVersion](docs/Model/DatabaseVersion.md)
- [DeploymentFromCIInput](docs/Model/DeploymentFromCIInput.md)
- [DockerRegistryCredentials](docs/Model/DockerRegistryCredentials.md)
- [DuplicateStackRequest](docs/Model/DuplicateStackRequest.md)
- [Env](docs/Model/Env.md)
- [FieldInput](docs/Model/FieldInput.md)
- [GitAutoUpdateSettings](docs/Model/GitAutoUpdateSettings.md)
- [GitAutoUpdateSettingsInput](docs/Model/GitAutoUpdateSettingsInput.md)
- [HelmChartAnalysis](docs/Model/HelmChartAnalysis.md)
- [HelmChartContainer](docs/Model/HelmChartContainer.md)
- [HelmChartContainerPort](docs/Model/HelmChartContainerPort.md)
- [HelmChartInput](docs/Model/HelmChartInput.md)
- [HelmChartMetadata](docs/Model/HelmChartMetadata.md)
- [HelmChartResource](docs/Model/HelmChartResource.md)
- [HelmChartService](docs/Model/HelmChartService.md)
- [HelmChartServicePort](docs/Model/HelmChartServicePort.md)
- [HelmChartServicePortTargetPort](docs/Model/HelmChartServicePortTargetPort.md)
- [HelmChartServiceScaffoldInput](docs/Model/HelmChartServiceScaffoldInput.md)
- [HelmChartServiceScaffoldResponse](docs/Model/HelmChartServiceScaffoldResponse.md)
- [HelmChartStackScaffoldInput](docs/Model/HelmChartStackScaffoldInput.md)
- [HelmChartStackScaffoldResponse](docs/Model/HelmChartStackScaffoldResponse.md)
- [HelmChartVolumeClaim](docs/Model/HelmChartVolumeClaim.md)
- [HelmChartWorkload](docs/Model/HelmChartWorkload.md)
- [Import](docs/Model/Import.md)
- [ImportCatalogFromGitInput](docs/Model/ImportCatalogFromGitInput.md)
- [ImportFromInput](docs/Model/ImportFromInput.md)
- [ImportInput](docs/Model/ImportInput.md)
- [Integration](docs/Model/Integration.md)
- [IntegrationLinkInput](docs/Model/IntegrationLinkInput.md)
- [IntegrationScope](docs/Model/IntegrationScope.md)
- [KubeVersion](docs/Model/KubeVersion.md)
- [LogLine](docs/Model/LogLine.md)
- [LogStream](docs/Model/LogStream.md)
- [ManifestFromYAMLInput](docs/Model/ManifestFromYAMLInput.md)
- [ManifestValidationResponse](docs/Model/ManifestValidationResponse.md)
- [NamedSecretValueInput](docs/Model/NamedSecretValueInput.md)
- [NewAnnotationInput](docs/Model/NewAnnotationInput.md)
- [NewAppAuthInput](docs/Model/NewAppAuthInput.md)
- [NewAppInput](docs/Model/NewAppInput.md)
- [NewAppInstanceInput](docs/Model/NewAppInstanceInput.md)
- [NewAppRouteInput](docs/Model/NewAppRouteInput.md)
- [NewAppServiceCronScheduleInput](docs/Model/NewAppServiceCronScheduleInput.md)
- [NewAppServiceEnvVarInput](docs/Model/NewAppServiceEnvVarInput.md)
- [NewAppServiceInput](docs/Model/NewAppServiceInput.md)
- [NewAppServiceLogStreamInput](docs/Model/NewAppServiceLogStreamInput.md)
- [NewBackupInput](docs/Model/NewBackupInput.md)
- [NewBackupPresetInput](docs/Model/NewBackupPresetInput.md)
- [NewBuildFromCIInput](docs/Model/NewBuildFromCIInput.md)
- [NewClusterInput](docs/Model/NewClusterInput.md)
- [NewDatabaseDBInput](docs/Model/NewDatabaseDBInput.md)
- [NewDatabaseInput](docs/Model/NewDatabaseInput.md)
- [NewDatabaseUserInput](docs/Model/NewDatabaseUserInput.md)
- [NewImportInput](docs/Model/NewImportInput.md)
- [NewIntegrationInput](docs/Model/NewIntegrationInput.md)
- [NewProjectInput](docs/Model/NewProjectInput.md)
- [NewStackServiceAnnotationInput](docs/Model/NewStackServiceAnnotationInput.md)
- [NewStackServiceCronScheduleInput](docs/Model/NewStackServiceCronScheduleInput.md)
- [NewStackServiceEnvVarInput](docs/Model/NewStackServiceEnvVarInput.md)
- [NewStackServiceInput](docs/Model/NewStackServiceInput.md)
- [NewStackServiceScopedValueInput](docs/Model/NewStackServiceScopedValueInput.md)
- [NewStackServiceTokenInput](docs/Model/NewStackServiceTokenInput.md)
- [OperationResult](docs/Model/OperationResult.md)
- [Org](docs/Model/Org.md)
- [OrgMembership](docs/Model/OrgMembership.md)
- [ProblemDetails](docs/Model/ProblemDetails.md)
- [ProblemFieldError](docs/Model/ProblemFieldError.md)
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
- [ServiceManifest](docs/Model/ServiceManifest.md)
- [ServiceManifestUpdateInput](docs/Model/ServiceManifestUpdateInput.md)
- [ServiceRevision](docs/Model/ServiceRevision.md)
- [ServiceSettings](docs/Model/ServiceSettings.md)
- [ServiceSettingsInput](docs/Model/ServiceSettingsInput.md)
- [ServicesResponse](docs/Model/ServicesResponse.md)
- [SetNullableStringValueInput](docs/Model/SetNullableStringValueInput.md)
- [SetStringValueInput](docs/Model/SetStringValueInput.md)
- [Stack](docs/Model/Stack.md)
- [StackAutoOriginUpdateSettings](docs/Model/StackAutoOriginUpdateSettings.md)
- [StackAutoOriginUpdateSettingsInput](docs/Model/StackAutoOriginUpdateSettingsInput.md)
- [StackAutoOriginUpdateVersionPolicy](docs/Model/StackAutoOriginUpdateVersionPolicy.md)
- [StackAutoOriginUpdateVersionPolicyInput](docs/Model/StackAutoOriginUpdateVersionPolicyInput.md)
- [StackAutoServiceRevisionUpdateSettings](docs/Model/StackAutoServiceRevisionUpdateSettings.md)
- [StackAutoServiceRevisionUpdateSettingsInput](docs/Model/StackAutoServiceRevisionUpdateSettingsInput.md)
- [StackAutoUpdatePolicy](docs/Model/StackAutoUpdatePolicy.md)
- [StackAutoUpdatePolicyInput](docs/Model/StackAutoUpdatePolicyInput.md)
- [StackAutoUpdateVersionPolicy](docs/Model/StackAutoUpdateVersionPolicy.md)
- [StackAutoUpdateVersionPolicyInput](docs/Model/StackAutoUpdateVersionPolicyInput.md)
- [StackRevision](docs/Model/StackRevision.md)
- [StackService](docs/Model/StackService.md)
- [StackServiceAnnotation](docs/Model/StackServiceAnnotation.md)
- [StackServiceConfig](docs/Model/StackServiceConfig.md)
- [StackServiceConfigInput](docs/Model/StackServiceConfigInput.md)
- [StackServiceCronSchedule](docs/Model/StackServiceCronSchedule.md)
- [StackServiceEnvVar](docs/Model/StackServiceEnvVar.md)
- [StackServiceHelmValue](docs/Model/StackServiceHelmValue.md)
- [StackServiceInput](docs/Model/StackServiceInput.md)
- [StackServiceIntegration](docs/Model/StackServiceIntegration.md)
- [StackServiceLink](docs/Model/StackServiceLink.md)
- [StackServiceLinkInput](docs/Model/StackServiceLinkInput.md)
- [StackServiceOptionInput](docs/Model/StackServiceOptionInput.md)
- [StackServiceOptionsInput](docs/Model/StackServiceOptionsInput.md)
- [StackServiceToken](docs/Model/StackServiceToken.md)
- [StackServiceVolume](docs/Model/StackServiceVolume.md)
- [StackServiceVolumeInput](docs/Model/StackServiceVolumeInput.md)
- [StackSettings](docs/Model/StackSettings.md)
- [StackSettingsInput](docs/Model/StackSettingsInput.md)
- [StackSyncOptions](docs/Model/StackSyncOptions.md)
- [StackSyncOptionsInput](docs/Model/StackSyncOptionsInput.md)
- [StacksResponse](docs/Model/StacksResponse.md)
- [StorageClass](docs/Model/StorageClass.md)
- [Task](docs/Model/Task.md)
- [TaskJob](docs/Model/TaskJob.md)
- [TaskStep](docs/Model/TaskStep.md)
- [TaskStepLogs](docs/Model/TaskStepLogs.md)
- [TaskTreeItem](docs/Model/TaskTreeItem.md)
- [TasksResponse](docs/Model/TasksResponse.md)
- [URLResponse](docs/Model/URLResponse.md)
- [UpdateAppAuthInput](docs/Model/UpdateAppAuthInput.md)
- [UpdateAppRouteInput](docs/Model/UpdateAppRouteInput.md)
- [UpdateAppServiceCronScheduleInput](docs/Model/UpdateAppServiceCronScheduleInput.md)
- [UpdateAppServiceDatabaseInput](docs/Model/UpdateAppServiceDatabaseInput.md)
- [UpdateAppServiceEnvVarInput](docs/Model/UpdateAppServiceEnvVarInput.md)
- [UpdateBackupPresetInput](docs/Model/UpdateBackupPresetInput.md)
- [UpdateCurrentUserRequest](docs/Model/UpdateCurrentUserRequest.md)
- [UpdateDatabaseUserDBsInput](docs/Model/UpdateDatabaseUserDBsInput.md)
- [UpdateEnvRequest](docs/Model/UpdateEnvRequest.md)
- [UpdateIntegrationInput](docs/Model/UpdateIntegrationInput.md)
- [UpdateOrgRequest](docs/Model/UpdateOrgRequest.md)
- [UpdateProjectInput](docs/Model/UpdateProjectInput.md)
- [UpdateSecretValueInput](docs/Model/UpdateSecretValueInput.md)
- [UpdateStackFromGitRequest](docs/Model/UpdateStackFromGitRequest.md)
- [UpdateStackServiceCronScheduleInput](docs/Model/UpdateStackServiceCronScheduleInput.md)
- [UpdateStackServiceEnvVarInput](docs/Model/UpdateStackServiceEnvVarInput.md)
- [UpdateStackServiceTokenInput](docs/Model/UpdateStackServiceTokenInput.md)
- [UpdateTitleRequest](docs/Model/UpdateTitleRequest.md)
- [User](docs/Model/User.md)
- [VolumeSizeInput](docs/Model/VolumeSizeInput.md)

## Authorization

Authentication schemes defined for the API:
### apiKeyHeader

- **Type**: API key
- **API key parameter name**: X-API-KEY
- **Location**: HTTP header


### ciAccessTokenHeader

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
