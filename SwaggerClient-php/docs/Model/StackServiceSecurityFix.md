# # StackServiceSecurityFix

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**vulnerability_id** | **string** | The CVE ID when there is one, otherwise the advisory&#39;s own ID. |
**severity** | **string** |  |
**package_name** | **string** |  |
**package_version** | **string** | The vulnerable version in the image the stack service deploys now. |
**exploited** | **bool** | Whether the vulnerability is on CISA&#39;s catalog of known exploited vulnerabilities. |
**epss** | **float** | The EPSS probability that the vulnerability is exploited in the next 30 days, from 0 to 1. Absent when unknown. | [optional]
**tracked** | **bool** | Whether Wodby tracks the vulnerability itself because public databases don&#39;t list it yet. |
**url** | **string** | The vulnerability&#39;s public record. Absent when there is none. | [optional]
**option_versions** | **string[]** | The stack service&#39;s option versions whose images have the vulnerability, such as 8.3 and 8.4. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
