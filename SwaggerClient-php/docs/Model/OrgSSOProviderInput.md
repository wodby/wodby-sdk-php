# # OrgSSOProviderInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**org_id** | **int** | Used when creating a provider. Optional for API-key requests; defaults to the API key&#39;s organization. | [optional]
**kind** | **string** | Provider kind when creating, such as oidc, github or saml. It cannot be changed. | [optional]
**name** | **string** |  |
**issuer_url** | **string** |  | [optional]
**client_id** | **string** |  | [optional]
**client_secret** | **string** | OIDC or GitHub client secret. Leave it out on update to keep the stored secret. | [optional]
**github_org** | **string** |  | [optional]
**saml_idp_metadata_url** | **string** |  | [optional]
**saml_idp_metadata_xml** | **string** |  | [optional]
**enabled** | **bool** |  |
**jit_enabled** | **bool** |  |
**domains** | **string[]** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
