# # AppEnvironmentStackUpgradeInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**deployment** | **bool** | Build affected services when required and deploy the upgraded stack configuration. | [optional] [default to true]
**rebuild** | **bool** | Build services whose build inputs the upgrade changes before deploying them. When false, those services are deployed with their current build and stay marked as needing a rebuild until their next build; a service with no build to reuse is still built. Ignored when deployment is false. | [optional] [default to true]
**versions** | **bool** |  |
**replicas** | **bool** |  |
**resources** | **bool** |  |
**integrations** | **bool** |  |
**services** | **bool** |  |
**settings** | **bool** |  |
**links** | **bool** |  |
**tokens** | **bool** |  |
**configs** | **bool** |  |
**cron** | **bool** |  |
**volumes** | **bool** |  |
**main** | **bool** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
