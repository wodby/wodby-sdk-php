# # ClusterHostCheck

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Identifies the check, such as ipv4_options_filter or mptcp_disabled. More checks may be added. |
**title** | **string** |  |
**advisory** | **string** | The security advisory the check protects against, such as CVE-2026-98432. Group checks by this field. |
**advisory_title** | **string** | Describes the advisory, such as Linux kernel TCP bug. |
**node** | **string** | The node the check is for. Each node of the cluster is listed; empty when the nodes have not been observed yet. |
**state** | **string** | Whether the protection is in place. unknown means the server hasn&#39;t reported the check, or its last report is more than two days old. |
**message** | **string** | What the state means and what to do about it. |
**kernel** | **string** | The kernel release the server ran at the check; empty when it hasn&#39;t reported. |
**checked_at** | **\DateTime** | When the server ran the check. Absent when it hasn&#39;t reported. | [optional]
**observed_at** | **\DateTime** | When Wodby read the report. Absent when the server hasn&#39;t reported. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
