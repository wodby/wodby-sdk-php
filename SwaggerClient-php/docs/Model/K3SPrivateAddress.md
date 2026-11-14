# # K3SPrivateAddress

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address** | **string** |  |
**network_interface** | **string** | The network interface the address is on, such as enp0s31f6.4000 for a VLAN. |
**mtu** | **int** | The interface&#39;s MTU, or 0 when the server doesn&#39;t report it. |
**persistent** | **bool** | Whether the server&#39;s network configuration brings the address back after a reboot. K3s doesn&#39;t start when its address is gone, so switching to an address that isn&#39;t persistent needs force. |
**persistent_source** | **string** | What keeps the address after a reboot, such as systemd-networkd or NetworkManager. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
