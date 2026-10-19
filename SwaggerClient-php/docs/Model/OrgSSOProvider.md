# # OrgSSOProvider

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**org_id** | **int** |  |
**name** | **string** |  |
**kind** | **string** | Provider kind, such as oidc, github or saml. |
**issuer_url** | **string** |  |
**client_id** | **string** |  |
**github_org** | **string** |  | [optional]
**saml_idp_metadata_url** | **string** |  | [optional]
**saml_sp_entity_id** | **string** | Entity ID to configure in the SAML identity provider. | [optional]
**saml_sp_metadata_url** | **string** |  | [optional]
**saml_acs_url** | **string** | Assertion consumer service URL to configure in the SAML identity provider. | [optional]
**enabled** | **bool** |  |
**jit_enabled** | **bool** | Create a membership on first sign-in for people from a verified domain. |
**domains** | [**\Wodby\Api\Model\OrgSSODomain[]**](OrgSSODomain.md) |  |
**created_at** | **\DateTime** |  |
**updated_at** | **\DateTime** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
