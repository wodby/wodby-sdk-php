# # ClusterComponent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**version** | **string** | The image tag or reported version as published; empty for an image referenced only by digest. |
**source** | **string** |  |
**manager** | **string** | Who can update the component. wodby is installed by Wodby outside an app, such as Cilium on K3S; infra_app runs in an infrastructure app; k3s comes with the K3S release; provider is run by the managed Kubernetes provider; host is the operating system of a server you run; and other was installed outside Wodby or is not recognized. |
**namespace** | **string** | Empty for node components, as are workloadKind, workload, container, image and imageDigest. |
**workload_kind** | **string** |  |
**workload** | **string** |  |
**container** | **string** | Container names, separated by commas when a workload runs several from one image. |
**image** | **string** |  |
**image_digest** | **string** |  |
**count** | **int** | Running pods, or nodes for a node component. |
**observed_at** | **\DateTime** |  |
**status** | **string** | Whether the component needs anything. update_available means Wodby can apply a newer version, and latestVersion and updatePath say which version and how. bundled follows the cluster&#39;s Kubernetes version, infra_app is reported by its infrastructure app, and unknown means the check could not run or Wodby has nothing to offer. |
**latest_version** | **string** | The version an available update would apply. | [optional]
**update_path** | **string** | The operation that updates the component. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
