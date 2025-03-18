<?php

namespace Docker\API\Normalizer;

use Docker\API\Runtime\Normalizer\CheckArray;
use Docker\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        protected $normalizers = [
            
            \Docker\API\Model\Port::class => \Docker\API\Normalizer\PortNormalizer::class,
            
            \Docker\API\Model\MountPoint::class => \Docker\API\Normalizer\MountPointNormalizer::class,
            
            \Docker\API\Model\DeviceMapping::class => \Docker\API\Normalizer\DeviceMappingNormalizer::class,
            
            \Docker\API\Model\DeviceRequest::class => \Docker\API\Normalizer\DeviceRequestNormalizer::class,
            
            \Docker\API\Model\ThrottleDevice::class => \Docker\API\Normalizer\ThrottleDeviceNormalizer::class,
            
            \Docker\API\Model\Mount::class => \Docker\API\Normalizer\MountNormalizer::class,
            
            \Docker\API\Model\MountBindOptions::class => \Docker\API\Normalizer\MountBindOptionsNormalizer::class,
            
            \Docker\API\Model\MountVolumeOptions::class => \Docker\API\Normalizer\MountVolumeOptionsNormalizer::class,
            
            \Docker\API\Model\MountVolumeOptionsDriverConfig::class => \Docker\API\Normalizer\MountVolumeOptionsDriverConfigNormalizer::class,
            
            \Docker\API\Model\MountTmpfsOptions::class => \Docker\API\Normalizer\MountTmpfsOptionsNormalizer::class,
            
            \Docker\API\Model\RestartPolicy::class => \Docker\API\Normalizer\RestartPolicyNormalizer::class,
            
            \Docker\API\Model\Resources::class => \Docker\API\Normalizer\ResourcesNormalizer::class,
            
            \Docker\API\Model\ResourcesBlkioWeightDeviceItem::class => \Docker\API\Normalizer\ResourcesBlkioWeightDeviceItemNormalizer::class,
            
            \Docker\API\Model\ResourcesUlimitsItem::class => \Docker\API\Normalizer\ResourcesUlimitsItemNormalizer::class,
            
            \Docker\API\Model\Limit::class => \Docker\API\Normalizer\LimitNormalizer::class,
            
            \Docker\API\Model\ResourceObject::class => \Docker\API\Normalizer\ResourceObjectNormalizer::class,
            
            \Docker\API\Model\GenericResourcesItem::class => \Docker\API\Normalizer\GenericResourcesItemNormalizer::class,
            
            \Docker\API\Model\GenericResourcesItemNamedResourceSpec::class => \Docker\API\Normalizer\GenericResourcesItemNamedResourceSpecNormalizer::class,
            
            \Docker\API\Model\GenericResourcesItemDiscreteResourceSpec::class => \Docker\API\Normalizer\GenericResourcesItemDiscreteResourceSpecNormalizer::class,
            
            \Docker\API\Model\HealthConfig::class => \Docker\API\Normalizer\HealthConfigNormalizer::class,
            
            \Docker\API\Model\Health::class => \Docker\API\Normalizer\HealthNormalizer::class,
            
            \Docker\API\Model\HealthcheckResult::class => \Docker\API\Normalizer\HealthcheckResultNormalizer::class,
            
            \Docker\API\Model\HostConfig::class => \Docker\API\Normalizer\HostConfigNormalizer::class,
            
            \Docker\API\Model\HostConfigLogConfig::class => \Docker\API\Normalizer\HostConfigLogConfigNormalizer::class,
            
            \Docker\API\Model\ContainerConfig::class => \Docker\API\Normalizer\ContainerConfigNormalizer::class,
            
            \Docker\API\Model\ImageConfig::class => \Docker\API\Normalizer\ImageConfigNormalizer::class,
            
            \Docker\API\Model\NetworkingConfig::class => \Docker\API\Normalizer\NetworkingConfigNormalizer::class,
            
            \Docker\API\Model\NetworkSettings::class => \Docker\API\Normalizer\NetworkSettingsNormalizer::class,
            
            \Docker\API\Model\Address::class => \Docker\API\Normalizer\AddressNormalizer::class,
            
            \Docker\API\Model\PortBinding::class => \Docker\API\Normalizer\PortBindingNormalizer::class,
            
            \Docker\API\Model\DriverData::class => \Docker\API\Normalizer\DriverDataNormalizer::class,
            
            \Docker\API\Model\FilesystemChange::class => \Docker\API\Normalizer\FilesystemChangeNormalizer::class,
            
            \Docker\API\Model\ImageInspect::class => \Docker\API\Normalizer\ImageInspectNormalizer::class,
            
            \Docker\API\Model\ImageInspectRootFS::class => \Docker\API\Normalizer\ImageInspectRootFSNormalizer::class,
            
            \Docker\API\Model\ImageInspectMetadata::class => \Docker\API\Normalizer\ImageInspectMetadataNormalizer::class,
            
            \Docker\API\Model\ImageSummary::class => \Docker\API\Normalizer\ImageSummaryNormalizer::class,
            
            \Docker\API\Model\AuthConfig::class => \Docker\API\Normalizer\AuthConfigNormalizer::class,
            
            \Docker\API\Model\ProcessConfig::class => \Docker\API\Normalizer\ProcessConfigNormalizer::class,
            
            \Docker\API\Model\Volume::class => \Docker\API\Normalizer\VolumeNormalizer::class,
            
            \Docker\API\Model\VolumeUsageData::class => \Docker\API\Normalizer\VolumeUsageDataNormalizer::class,
            
            \Docker\API\Model\VolumeCreateOptions::class => \Docker\API\Normalizer\VolumeCreateOptionsNormalizer::class,
            
            \Docker\API\Model\VolumeListResponse::class => \Docker\API\Normalizer\VolumeListResponseNormalizer::class,
            
            \Docker\API\Model\Network::class => \Docker\API\Normalizer\NetworkNormalizer::class,
            
            \Docker\API\Model\ConfigReference::class => \Docker\API\Normalizer\ConfigReferenceNormalizer::class,
            
            \Docker\API\Model\IPAM::class => \Docker\API\Normalizer\IPAMNormalizer::class,
            
            \Docker\API\Model\IPAMConfig::class => \Docker\API\Normalizer\IPAMConfigNormalizer::class,
            
            \Docker\API\Model\NetworkContainer::class => \Docker\API\Normalizer\NetworkContainerNormalizer::class,
            
            \Docker\API\Model\PeerInfo::class => \Docker\API\Normalizer\PeerInfoNormalizer::class,
            
            \Docker\API\Model\NetworkCreateResponse::class => \Docker\API\Normalizer\NetworkCreateResponseNormalizer::class,
            
            \Docker\API\Model\BuildInfo::class => \Docker\API\Normalizer\BuildInfoNormalizer::class,
            
            \Docker\API\Model\BuildCache::class => \Docker\API\Normalizer\BuildCacheNormalizer::class,
            
            \Docker\API\Model\ImageID::class => \Docker\API\Normalizer\ImageIDNormalizer::class,
            
            \Docker\API\Model\CreateImageInfo::class => \Docker\API\Normalizer\CreateImageInfoNormalizer::class,
            
            \Docker\API\Model\PushImageInfo::class => \Docker\API\Normalizer\PushImageInfoNormalizer::class,
            
            \Docker\API\Model\ErrorDetail::class => \Docker\API\Normalizer\ErrorDetailNormalizer::class,
            
            \Docker\API\Model\ProgressDetail::class => \Docker\API\Normalizer\ProgressDetailNormalizer::class,
            
            \Docker\API\Model\ErrorResponse::class => \Docker\API\Normalizer\ErrorResponseNormalizer::class,
            
            \Docker\API\Model\IdResponse::class => \Docker\API\Normalizer\IdResponseNormalizer::class,
            
            \Docker\API\Model\EndpointSettings::class => \Docker\API\Normalizer\EndpointSettingsNormalizer::class,
            
            \Docker\API\Model\EndpointIPAMConfig::class => \Docker\API\Normalizer\EndpointIPAMConfigNormalizer::class,
            
            \Docker\API\Model\PluginMount::class => \Docker\API\Normalizer\PluginMountNormalizer::class,
            
            \Docker\API\Model\PluginDevice::class => \Docker\API\Normalizer\PluginDeviceNormalizer::class,
            
            \Docker\API\Model\PluginEnv::class => \Docker\API\Normalizer\PluginEnvNormalizer::class,
            
            \Docker\API\Model\PluginInterfaceType::class => \Docker\API\Normalizer\PluginInterfaceTypeNormalizer::class,
            
            \Docker\API\Model\PluginPrivilege::class => \Docker\API\Normalizer\PluginPrivilegeNormalizer::class,
            
            \Docker\API\Model\Plugin::class => \Docker\API\Normalizer\PluginNormalizer::class,
            
            \Docker\API\Model\PluginSettings::class => \Docker\API\Normalizer\PluginSettingsNormalizer::class,
            
            \Docker\API\Model\PluginConfig::class => \Docker\API\Normalizer\PluginConfigNormalizer::class,
            
            \Docker\API\Model\PluginConfigInterface::class => \Docker\API\Normalizer\PluginConfigInterfaceNormalizer::class,
            
            \Docker\API\Model\PluginConfigUser::class => \Docker\API\Normalizer\PluginConfigUserNormalizer::class,
            
            \Docker\API\Model\PluginConfigNetwork::class => \Docker\API\Normalizer\PluginConfigNetworkNormalizer::class,
            
            \Docker\API\Model\PluginConfigLinux::class => \Docker\API\Normalizer\PluginConfigLinuxNormalizer::class,
            
            \Docker\API\Model\PluginConfigArgs::class => \Docker\API\Normalizer\PluginConfigArgsNormalizer::class,
            
            \Docker\API\Model\PluginConfigRootfs::class => \Docker\API\Normalizer\PluginConfigRootfsNormalizer::class,
            
            \Docker\API\Model\ObjectVersion::class => \Docker\API\Normalizer\ObjectVersionNormalizer::class,
            
            \Docker\API\Model\NodeSpec::class => \Docker\API\Normalizer\NodeSpecNormalizer::class,
            
            \Docker\API\Model\Node::class => \Docker\API\Normalizer\NodeNormalizer::class,
            
            \Docker\API\Model\NodeDescription::class => \Docker\API\Normalizer\NodeDescriptionNormalizer::class,
            
            \Docker\API\Model\Platform::class => \Docker\API\Normalizer\PlatformNormalizer::class,
            
            \Docker\API\Model\EngineDescription::class => \Docker\API\Normalizer\EngineDescriptionNormalizer::class,
            
            \Docker\API\Model\EngineDescriptionPluginsItem::class => \Docker\API\Normalizer\EngineDescriptionPluginsItemNormalizer::class,
            
            \Docker\API\Model\TLSInfo::class => \Docker\API\Normalizer\TLSInfoNormalizer::class,
            
            \Docker\API\Model\NodeStatus::class => \Docker\API\Normalizer\NodeStatusNormalizer::class,
            
            \Docker\API\Model\ManagerStatus::class => \Docker\API\Normalizer\ManagerStatusNormalizer::class,
            
            \Docker\API\Model\SwarmSpec::class => \Docker\API\Normalizer\SwarmSpecNormalizer::class,
            
            \Docker\API\Model\SwarmSpecOrchestration::class => \Docker\API\Normalizer\SwarmSpecOrchestrationNormalizer::class,
            
            \Docker\API\Model\SwarmSpecRaft::class => \Docker\API\Normalizer\SwarmSpecRaftNormalizer::class,
            
            \Docker\API\Model\SwarmSpecDispatcher::class => \Docker\API\Normalizer\SwarmSpecDispatcherNormalizer::class,
            
            \Docker\API\Model\SwarmSpecCAConfig::class => \Docker\API\Normalizer\SwarmSpecCAConfigNormalizer::class,
            
            \Docker\API\Model\SwarmSpecCAConfigExternalCAsItem::class => \Docker\API\Normalizer\SwarmSpecCAConfigExternalCAsItemNormalizer::class,
            
            \Docker\API\Model\SwarmSpecEncryptionConfig::class => \Docker\API\Normalizer\SwarmSpecEncryptionConfigNormalizer::class,
            
            \Docker\API\Model\SwarmSpecTaskDefaults::class => \Docker\API\Normalizer\SwarmSpecTaskDefaultsNormalizer::class,
            
            \Docker\API\Model\SwarmSpecTaskDefaultsLogDriver::class => \Docker\API\Normalizer\SwarmSpecTaskDefaultsLogDriverNormalizer::class,
            
            \Docker\API\Model\ClusterInfo::class => \Docker\API\Normalizer\ClusterInfoNormalizer::class,
            
            \Docker\API\Model\JoinTokens::class => \Docker\API\Normalizer\JoinTokensNormalizer::class,
            
            \Docker\API\Model\Swarm::class => \Docker\API\Normalizer\SwarmNormalizer::class,
            
            \Docker\API\Model\TaskSpec::class => \Docker\API\Normalizer\TaskSpecNormalizer::class,
            
            \Docker\API\Model\TaskSpecPluginSpec::class => \Docker\API\Normalizer\TaskSpecPluginSpecNormalizer::class,
            
            \Docker\API\Model\TaskSpecContainerSpec::class => \Docker\API\Normalizer\TaskSpecContainerSpecNormalizer::class,
            
            \Docker\API\Model\TaskSpecContainerSpecPrivileges::class => \Docker\API\Normalizer\TaskSpecContainerSpecPrivilegesNormalizer::class,
            
            \Docker\API\Model\TaskSpecContainerSpecPrivilegesCredentialSpec::class => \Docker\API\Normalizer\TaskSpecContainerSpecPrivilegesCredentialSpecNormalizer::class,
            
            \Docker\API\Model\TaskSpecContainerSpecPrivilegesSELinuxContext::class => \Docker\API\Normalizer\TaskSpecContainerSpecPrivilegesSELinuxContextNormalizer::class,
            
            \Docker\API\Model\TaskSpecContainerSpecPrivilegesSeccomp::class => \Docker\API\Normalizer\TaskSpecContainerSpecPrivilegesSeccompNormalizer::class,
            
            \Docker\API\Model\TaskSpecContainerSpecPrivilegesAppArmor::class => \Docker\API\Normalizer\TaskSpecContainerSpecPrivilegesAppArmorNormalizer::class,
            
            \Docker\API\Model\TaskSpecContainerSpecDNSConfig::class => \Docker\API\Normalizer\TaskSpecContainerSpecDNSConfigNormalizer::class,
            
            \Docker\API\Model\TaskSpecContainerSpecSecretsItem::class => \Docker\API\Normalizer\TaskSpecContainerSpecSecretsItemNormalizer::class,
            
            \Docker\API\Model\TaskSpecContainerSpecSecretsItemFile::class => \Docker\API\Normalizer\TaskSpecContainerSpecSecretsItemFileNormalizer::class,
            
            \Docker\API\Model\TaskSpecContainerSpecConfigsItem::class => \Docker\API\Normalizer\TaskSpecContainerSpecConfigsItemNormalizer::class,
            
            \Docker\API\Model\TaskSpecContainerSpecConfigsItemFile::class => \Docker\API\Normalizer\TaskSpecContainerSpecConfigsItemFileNormalizer::class,
            
            \Docker\API\Model\TaskSpecContainerSpecUlimitsItem::class => \Docker\API\Normalizer\TaskSpecContainerSpecUlimitsItemNormalizer::class,
            
            \Docker\API\Model\TaskSpecNetworkAttachmentSpec::class => \Docker\API\Normalizer\TaskSpecNetworkAttachmentSpecNormalizer::class,
            
            \Docker\API\Model\TaskSpecResources::class => \Docker\API\Normalizer\TaskSpecResourcesNormalizer::class,
            
            \Docker\API\Model\TaskSpecRestartPolicy::class => \Docker\API\Normalizer\TaskSpecRestartPolicyNormalizer::class,
            
            \Docker\API\Model\TaskSpecPlacement::class => \Docker\API\Normalizer\TaskSpecPlacementNormalizer::class,
            
            \Docker\API\Model\TaskSpecPlacementPreferencesItem::class => \Docker\API\Normalizer\TaskSpecPlacementPreferencesItemNormalizer::class,
            
            \Docker\API\Model\TaskSpecPlacementPreferencesItemSpread::class => \Docker\API\Normalizer\TaskSpecPlacementPreferencesItemSpreadNormalizer::class,
            
            \Docker\API\Model\TaskSpecLogDriver::class => \Docker\API\Normalizer\TaskSpecLogDriverNormalizer::class,
            
            \Docker\API\Model\ContainerStatus::class => \Docker\API\Normalizer\ContainerStatusNormalizer::class,
            
            \Docker\API\Model\PortStatus::class => \Docker\API\Normalizer\PortStatusNormalizer::class,
            
            \Docker\API\Model\TaskStatus::class => \Docker\API\Normalizer\TaskStatusNormalizer::class,
            
            \Docker\API\Model\Task::class => \Docker\API\Normalizer\TaskNormalizer::class,
            
            \Docker\API\Model\ServiceSpec::class => \Docker\API\Normalizer\ServiceSpecNormalizer::class,
            
            \Docker\API\Model\ServiceSpecMode::class => \Docker\API\Normalizer\ServiceSpecModeNormalizer::class,
            
            \Docker\API\Model\ServiceSpecModeReplicated::class => \Docker\API\Normalizer\ServiceSpecModeReplicatedNormalizer::class,
            
            \Docker\API\Model\ServiceSpecModeReplicatedJob::class => \Docker\API\Normalizer\ServiceSpecModeReplicatedJobNormalizer::class,
            
            \Docker\API\Model\ServiceSpecUpdateConfig::class => \Docker\API\Normalizer\ServiceSpecUpdateConfigNormalizer::class,
            
            \Docker\API\Model\ServiceSpecRollbackConfig::class => \Docker\API\Normalizer\ServiceSpecRollbackConfigNormalizer::class,
            
            \Docker\API\Model\EndpointPortConfig::class => \Docker\API\Normalizer\EndpointPortConfigNormalizer::class,
            
            \Docker\API\Model\EndpointSpec::class => \Docker\API\Normalizer\EndpointSpecNormalizer::class,
            
            \Docker\API\Model\Service::class => \Docker\API\Normalizer\ServiceNormalizer::class,
            
            \Docker\API\Model\ServiceEndpoint::class => \Docker\API\Normalizer\ServiceEndpointNormalizer::class,
            
            \Docker\API\Model\ServiceEndpointVirtualIPsItem::class => \Docker\API\Normalizer\ServiceEndpointVirtualIPsItemNormalizer::class,
            
            \Docker\API\Model\ServiceUpdateStatus::class => \Docker\API\Normalizer\ServiceUpdateStatusNormalizer::class,
            
            \Docker\API\Model\ServiceServiceStatus::class => \Docker\API\Normalizer\ServiceServiceStatusNormalizer::class,
            
            \Docker\API\Model\ServiceJobStatus::class => \Docker\API\Normalizer\ServiceJobStatusNormalizer::class,
            
            \Docker\API\Model\ImageDeleteResponseItem::class => \Docker\API\Normalizer\ImageDeleteResponseItemNormalizer::class,
            
            \Docker\API\Model\ServiceCreateResponse::class => \Docker\API\Normalizer\ServiceCreateResponseNormalizer::class,
            
            \Docker\API\Model\ServiceUpdateResponse::class => \Docker\API\Normalizer\ServiceUpdateResponseNormalizer::class,
            
            \Docker\API\Model\ContainerSummary::class => \Docker\API\Normalizer\ContainerSummaryNormalizer::class,
            
            \Docker\API\Model\ContainerSummaryHostConfig::class => \Docker\API\Normalizer\ContainerSummaryHostConfigNormalizer::class,
            
            \Docker\API\Model\ContainerSummaryNetworkSettings::class => \Docker\API\Normalizer\ContainerSummaryNetworkSettingsNormalizer::class,
            
            \Docker\API\Model\Driver::class => \Docker\API\Normalizer\DriverNormalizer::class,
            
            \Docker\API\Model\SecretSpec::class => \Docker\API\Normalizer\SecretSpecNormalizer::class,
            
            \Docker\API\Model\Secret::class => \Docker\API\Normalizer\SecretNormalizer::class,
            
            \Docker\API\Model\ConfigSpec::class => \Docker\API\Normalizer\ConfigSpecNormalizer::class,
            
            \Docker\API\Model\Config::class => \Docker\API\Normalizer\ConfigNormalizer::class,
            
            \Docker\API\Model\ContainerState::class => \Docker\API\Normalizer\ContainerStateNormalizer::class,
            
            \Docker\API\Model\ContainerCreateResponse::class => \Docker\API\Normalizer\ContainerCreateResponseNormalizer::class,
            
            \Docker\API\Model\ContainerWaitResponse::class => \Docker\API\Normalizer\ContainerWaitResponseNormalizer::class,
            
            \Docker\API\Model\ContainerWaitExitError::class => \Docker\API\Normalizer\ContainerWaitExitErrorNormalizer::class,
            
            \Docker\API\Model\SystemVersion::class => \Docker\API\Normalizer\SystemVersionNormalizer::class,
            
            \Docker\API\Model\SystemVersionPlatform::class => \Docker\API\Normalizer\SystemVersionPlatformNormalizer::class,
            
            \Docker\API\Model\SystemVersionComponentsItem::class => \Docker\API\Normalizer\SystemVersionComponentsItemNormalizer::class,
            
            \Docker\API\Model\SystemInfo::class => \Docker\API\Normalizer\SystemInfoNormalizer::class,
            
            \Docker\API\Model\SystemInfoDefaultAddressPoolsItem::class => \Docker\API\Normalizer\SystemInfoDefaultAddressPoolsItemNormalizer::class,
            
            \Docker\API\Model\ContainerdInfo::class => \Docker\API\Normalizer\ContainerdInfoNormalizer::class,
            
            \Docker\API\Model\ContainerdInfoNamespaces::class => \Docker\API\Normalizer\ContainerdInfoNamespacesNormalizer::class,
            
            \Docker\API\Model\PluginsInfo::class => \Docker\API\Normalizer\PluginsInfoNormalizer::class,
            
            \Docker\API\Model\RegistryServiceConfig::class => \Docker\API\Normalizer\RegistryServiceConfigNormalizer::class,
            
            \Docker\API\Model\IndexInfo::class => \Docker\API\Normalizer\IndexInfoNormalizer::class,
            
            \Docker\API\Model\Runtime::class => \Docker\API\Normalizer\RuntimeNormalizer::class,
            
            \Docker\API\Model\Commit::class => \Docker\API\Normalizer\CommitNormalizer::class,
            
            \Docker\API\Model\SwarmInfo::class => \Docker\API\Normalizer\SwarmInfoNormalizer::class,
            
            \Docker\API\Model\PeerNode::class => \Docker\API\Normalizer\PeerNodeNormalizer::class,
            
            \Docker\API\Model\NetworkAttachmentConfig::class => \Docker\API\Normalizer\NetworkAttachmentConfigNormalizer::class,
            
            \Docker\API\Model\EventActor::class => \Docker\API\Normalizer\EventActorNormalizer::class,
            
            \Docker\API\Model\EventMessage::class => \Docker\API\Normalizer\EventMessageNormalizer::class,
            
            \Docker\API\Model\OCIDescriptor::class => \Docker\API\Normalizer\OCIDescriptorNormalizer::class,
            
            \Docker\API\Model\OCIPlatform::class => \Docker\API\Normalizer\OCIPlatformNormalizer::class,
            
            \Docker\API\Model\DistributionInspect::class => \Docker\API\Normalizer\DistributionInspectNormalizer::class,
            
            \Docker\API\Model\ClusterVolume::class => \Docker\API\Normalizer\ClusterVolumeNormalizer::class,
            
            \Docker\API\Model\ClusterVolumeInfo::class => \Docker\API\Normalizer\ClusterVolumeInfoNormalizer::class,
            
            \Docker\API\Model\ClusterVolumePublishStatusItem::class => \Docker\API\Normalizer\ClusterVolumePublishStatusItemNormalizer::class,
            
            \Docker\API\Model\ClusterVolumeSpec::class => \Docker\API\Normalizer\ClusterVolumeSpecNormalizer::class,
            
            \Docker\API\Model\ClusterVolumeSpecAccessMode::class => \Docker\API\Normalizer\ClusterVolumeSpecAccessModeNormalizer::class,
            
            \Docker\API\Model\ClusterVolumeSpecAccessModeSecretsItem::class => \Docker\API\Normalizer\ClusterVolumeSpecAccessModeSecretsItemNormalizer::class,
            
            \Docker\API\Model\ClusterVolumeSpecAccessModeAccessibilityRequirements::class => \Docker\API\Normalizer\ClusterVolumeSpecAccessModeAccessibilityRequirementsNormalizer::class,
            
            \Docker\API\Model\ClusterVolumeSpecAccessModeCapacityRange::class => \Docker\API\Normalizer\ClusterVolumeSpecAccessModeCapacityRangeNormalizer::class,
            
            \Docker\API\Model\ImageManifestSummary::class => \Docker\API\Normalizer\ImageManifestSummaryNormalizer::class,
            
            \Docker\API\Model\ImageManifestSummarySize::class => \Docker\API\Normalizer\ImageManifestSummarySizeNormalizer::class,
            
            \Docker\API\Model\ImageManifestSummaryImageData::class => \Docker\API\Normalizer\ImageManifestSummaryImageDataNormalizer::class,
            
            \Docker\API\Model\ImageManifestSummaryImageDataSize::class => \Docker\API\Normalizer\ImageManifestSummaryImageDataSizeNormalizer::class,
            
            \Docker\API\Model\ImageManifestSummaryAttestationData::class => \Docker\API\Normalizer\ImageManifestSummaryAttestationDataNormalizer::class,
            
            \Docker\API\Model\ContainersCreatePostBody::class => \Docker\API\Normalizer\ContainersCreatePostBodyNormalizer::class,
            
            \Docker\API\Model\ContainersIdJsonGetResponse200::class => \Docker\API\Normalizer\ContainersIdJsonGetResponse200Normalizer::class,
            
            \Docker\API\Model\ContainersIdTopGetResponse200::class => \Docker\API\Normalizer\ContainersIdTopGetResponse200Normalizer::class,
            
            \Docker\API\Model\ContainersIdUpdatePostBody::class => \Docker\API\Normalizer\ContainersIdUpdatePostBodyNormalizer::class,
            
            \Docker\API\Model\ContainersIdUpdatePostResponse200::class => \Docker\API\Normalizer\ContainersIdUpdatePostResponse200Normalizer::class,
            
            \Docker\API\Model\ContainersPrunePostResponse200::class => \Docker\API\Normalizer\ContainersPrunePostResponse200Normalizer::class,
            
            \Docker\API\Model\BuildPrunePostResponse200::class => \Docker\API\Normalizer\BuildPrunePostResponse200Normalizer::class,
            
            \Docker\API\Model\ImagesNameHistoryGetResponse200Item::class => \Docker\API\Normalizer\ImagesNameHistoryGetResponse200ItemNormalizer::class,
            
            \Docker\API\Model\ImagesSearchGetResponse200Item::class => \Docker\API\Normalizer\ImagesSearchGetResponse200ItemNormalizer::class,
            
            \Docker\API\Model\ImagesPrunePostResponse200::class => \Docker\API\Normalizer\ImagesPrunePostResponse200Normalizer::class,
            
            \Docker\API\Model\AuthPostResponse200::class => \Docker\API\Normalizer\AuthPostResponse200Normalizer::class,
            
            \Docker\API\Model\SystemDfGetResponse200::class => \Docker\API\Normalizer\SystemDfGetResponse200Normalizer::class,
            
            \Docker\API\Model\ContainersIdExecPostBody::class => \Docker\API\Normalizer\ContainersIdExecPostBodyNormalizer::class,
            
            \Docker\API\Model\ExecIdStartPostBody::class => \Docker\API\Normalizer\ExecIdStartPostBodyNormalizer::class,
            
            \Docker\API\Model\ExecIdJsonGetResponse200::class => \Docker\API\Normalizer\ExecIdJsonGetResponse200Normalizer::class,
            
            \Docker\API\Model\VolumesNamePutBody::class => \Docker\API\Normalizer\VolumesNamePutBodyNormalizer::class,
            
            \Docker\API\Model\VolumesPrunePostResponse200::class => \Docker\API\Normalizer\VolumesPrunePostResponse200Normalizer::class,
            
            \Docker\API\Model\NetworksCreatePostBody::class => \Docker\API\Normalizer\NetworksCreatePostBodyNormalizer::class,
            
            \Docker\API\Model\NetworksIdConnectPostBody::class => \Docker\API\Normalizer\NetworksIdConnectPostBodyNormalizer::class,
            
            \Docker\API\Model\NetworksIdDisconnectPostBody::class => \Docker\API\Normalizer\NetworksIdDisconnectPostBodyNormalizer::class,
            
            \Docker\API\Model\NetworksPrunePostResponse200::class => \Docker\API\Normalizer\NetworksPrunePostResponse200Normalizer::class,
            
            \Docker\API\Model\SwarmInitPostBody::class => \Docker\API\Normalizer\SwarmInitPostBodyNormalizer::class,
            
            \Docker\API\Model\SwarmJoinPostBody::class => \Docker\API\Normalizer\SwarmJoinPostBodyNormalizer::class,
            
            \Docker\API\Model\SwarmUnlockkeyGetResponse200::class => \Docker\API\Normalizer\SwarmUnlockkeyGetResponse200Normalizer::class,
            
            \Docker\API\Model\SwarmUnlockPostBody::class => \Docker\API\Normalizer\SwarmUnlockPostBodyNormalizer::class,
            
            \Docker\API\Model\ServicesCreatePostBody::class => \Docker\API\Normalizer\ServicesCreatePostBodyNormalizer::class,
            
            \Docker\API\Model\ServicesIdUpdatePostBody::class => \Docker\API\Normalizer\ServicesIdUpdatePostBodyNormalizer::class,
            
            \Docker\API\Model\SecretsCreatePostBody::class => \Docker\API\Normalizer\SecretsCreatePostBodyNormalizer::class,
            
            \Docker\API\Model\ConfigsCreatePostBody::class => \Docker\API\Normalizer\ConfigsCreatePostBodyNormalizer::class,
            
            \Jane\Component\JsonSchemaRuntime\Reference::class => \Docker\API\Runtime\Normalizer\ReferenceNormalizer::class,
        ], $normalizersCache = [];
        public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
        {
            return array_key_exists($type, $this->normalizers);
        }
        public function supportsNormalization($data, $format = null, array $context = []): bool
        {
            return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $normalizerClass = $this->normalizers[get_class($object)];
            $normalizer = $this->getNormalizer($normalizerClass);
            return $normalizer->normalize($object, $format, $context);
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            $denormalizerClass = $this->normalizers[$type];
            $denormalizer = $this->getNormalizer($denormalizerClass);
            return $denormalizer->denormalize($data, $type, $format, $context);
        }
        private function getNormalizer(string $normalizerClass)
        {
            return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
        }
        private function initNormalizer(string $normalizerClass)
        {
            $normalizer = new $normalizerClass();
            $normalizer->setNormalizer($this->normalizer);
            $normalizer->setDenormalizer($this->denormalizer);
            $this->normalizersCache[$normalizerClass] = $normalizer;
            return $normalizer;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [
                
                \Docker\API\Model\Port::class => false,
                \Docker\API\Model\MountPoint::class => false,
                \Docker\API\Model\DeviceMapping::class => false,
                \Docker\API\Model\DeviceRequest::class => false,
                \Docker\API\Model\ThrottleDevice::class => false,
                \Docker\API\Model\Mount::class => false,
                \Docker\API\Model\MountBindOptions::class => false,
                \Docker\API\Model\MountVolumeOptions::class => false,
                \Docker\API\Model\MountVolumeOptionsDriverConfig::class => false,
                \Docker\API\Model\MountTmpfsOptions::class => false,
                \Docker\API\Model\RestartPolicy::class => false,
                \Docker\API\Model\Resources::class => false,
                \Docker\API\Model\ResourcesBlkioWeightDeviceItem::class => false,
                \Docker\API\Model\ResourcesUlimitsItem::class => false,
                \Docker\API\Model\Limit::class => false,
                \Docker\API\Model\ResourceObject::class => false,
                \Docker\API\Model\GenericResourcesItem::class => false,
                \Docker\API\Model\GenericResourcesItemNamedResourceSpec::class => false,
                \Docker\API\Model\GenericResourcesItemDiscreteResourceSpec::class => false,
                \Docker\API\Model\HealthConfig::class => false,
                \Docker\API\Model\Health::class => false,
                \Docker\API\Model\HealthcheckResult::class => false,
                \Docker\API\Model\HostConfig::class => false,
                \Docker\API\Model\HostConfigLogConfig::class => false,
                \Docker\API\Model\ContainerConfig::class => false,
                \Docker\API\Model\ImageConfig::class => false,
                \Docker\API\Model\NetworkingConfig::class => false,
                \Docker\API\Model\NetworkSettings::class => false,
                \Docker\API\Model\Address::class => false,
                \Docker\API\Model\PortBinding::class => false,
                \Docker\API\Model\DriverData::class => false,
                \Docker\API\Model\FilesystemChange::class => false,
                \Docker\API\Model\ImageInspect::class => false,
                \Docker\API\Model\ImageInspectRootFS::class => false,
                \Docker\API\Model\ImageInspectMetadata::class => false,
                \Docker\API\Model\ImageSummary::class => false,
                \Docker\API\Model\AuthConfig::class => false,
                \Docker\API\Model\ProcessConfig::class => false,
                \Docker\API\Model\Volume::class => false,
                \Docker\API\Model\VolumeUsageData::class => false,
                \Docker\API\Model\VolumeCreateOptions::class => false,
                \Docker\API\Model\VolumeListResponse::class => false,
                \Docker\API\Model\Network::class => false,
                \Docker\API\Model\ConfigReference::class => false,
                \Docker\API\Model\IPAM::class => false,
                \Docker\API\Model\IPAMConfig::class => false,
                \Docker\API\Model\NetworkContainer::class => false,
                \Docker\API\Model\PeerInfo::class => false,
                \Docker\API\Model\NetworkCreateResponse::class => false,
                \Docker\API\Model\BuildInfo::class => false,
                \Docker\API\Model\BuildCache::class => false,
                \Docker\API\Model\ImageID::class => false,
                \Docker\API\Model\CreateImageInfo::class => false,
                \Docker\API\Model\PushImageInfo::class => false,
                \Docker\API\Model\ErrorDetail::class => false,
                \Docker\API\Model\ProgressDetail::class => false,
                \Docker\API\Model\ErrorResponse::class => false,
                \Docker\API\Model\IdResponse::class => false,
                \Docker\API\Model\EndpointSettings::class => false,
                \Docker\API\Model\EndpointIPAMConfig::class => false,
                \Docker\API\Model\PluginMount::class => false,
                \Docker\API\Model\PluginDevice::class => false,
                \Docker\API\Model\PluginEnv::class => false,
                \Docker\API\Model\PluginInterfaceType::class => false,
                \Docker\API\Model\PluginPrivilege::class => false,
                \Docker\API\Model\Plugin::class => false,
                \Docker\API\Model\PluginSettings::class => false,
                \Docker\API\Model\PluginConfig::class => false,
                \Docker\API\Model\PluginConfigInterface::class => false,
                \Docker\API\Model\PluginConfigUser::class => false,
                \Docker\API\Model\PluginConfigNetwork::class => false,
                \Docker\API\Model\PluginConfigLinux::class => false,
                \Docker\API\Model\PluginConfigArgs::class => false,
                \Docker\API\Model\PluginConfigRootfs::class => false,
                \Docker\API\Model\ObjectVersion::class => false,
                \Docker\API\Model\NodeSpec::class => false,
                \Docker\API\Model\Node::class => false,
                \Docker\API\Model\NodeDescription::class => false,
                \Docker\API\Model\Platform::class => false,
                \Docker\API\Model\EngineDescription::class => false,
                \Docker\API\Model\EngineDescriptionPluginsItem::class => false,
                \Docker\API\Model\TLSInfo::class => false,
                \Docker\API\Model\NodeStatus::class => false,
                \Docker\API\Model\ManagerStatus::class => false,
                \Docker\API\Model\SwarmSpec::class => false,
                \Docker\API\Model\SwarmSpecOrchestration::class => false,
                \Docker\API\Model\SwarmSpecRaft::class => false,
                \Docker\API\Model\SwarmSpecDispatcher::class => false,
                \Docker\API\Model\SwarmSpecCAConfig::class => false,
                \Docker\API\Model\SwarmSpecCAConfigExternalCAsItem::class => false,
                \Docker\API\Model\SwarmSpecEncryptionConfig::class => false,
                \Docker\API\Model\SwarmSpecTaskDefaults::class => false,
                \Docker\API\Model\SwarmSpecTaskDefaultsLogDriver::class => false,
                \Docker\API\Model\ClusterInfo::class => false,
                \Docker\API\Model\JoinTokens::class => false,
                \Docker\API\Model\Swarm::class => false,
                \Docker\API\Model\TaskSpec::class => false,
                \Docker\API\Model\TaskSpecPluginSpec::class => false,
                \Docker\API\Model\TaskSpecContainerSpec::class => false,
                \Docker\API\Model\TaskSpecContainerSpecPrivileges::class => false,
                \Docker\API\Model\TaskSpecContainerSpecPrivilegesCredentialSpec::class => false,
                \Docker\API\Model\TaskSpecContainerSpecPrivilegesSELinuxContext::class => false,
                \Docker\API\Model\TaskSpecContainerSpecPrivilegesSeccomp::class => false,
                \Docker\API\Model\TaskSpecContainerSpecPrivilegesAppArmor::class => false,
                \Docker\API\Model\TaskSpecContainerSpecDNSConfig::class => false,
                \Docker\API\Model\TaskSpecContainerSpecSecretsItem::class => false,
                \Docker\API\Model\TaskSpecContainerSpecSecretsItemFile::class => false,
                \Docker\API\Model\TaskSpecContainerSpecConfigsItem::class => false,
                \Docker\API\Model\TaskSpecContainerSpecConfigsItemFile::class => false,
                \Docker\API\Model\TaskSpecContainerSpecUlimitsItem::class => false,
                \Docker\API\Model\TaskSpecNetworkAttachmentSpec::class => false,
                \Docker\API\Model\TaskSpecResources::class => false,
                \Docker\API\Model\TaskSpecRestartPolicy::class => false,
                \Docker\API\Model\TaskSpecPlacement::class => false,
                \Docker\API\Model\TaskSpecPlacementPreferencesItem::class => false,
                \Docker\API\Model\TaskSpecPlacementPreferencesItemSpread::class => false,
                \Docker\API\Model\TaskSpecLogDriver::class => false,
                \Docker\API\Model\ContainerStatus::class => false,
                \Docker\API\Model\PortStatus::class => false,
                \Docker\API\Model\TaskStatus::class => false,
                \Docker\API\Model\Task::class => false,
                \Docker\API\Model\ServiceSpec::class => false,
                \Docker\API\Model\ServiceSpecMode::class => false,
                \Docker\API\Model\ServiceSpecModeReplicated::class => false,
                \Docker\API\Model\ServiceSpecModeReplicatedJob::class => false,
                \Docker\API\Model\ServiceSpecUpdateConfig::class => false,
                \Docker\API\Model\ServiceSpecRollbackConfig::class => false,
                \Docker\API\Model\EndpointPortConfig::class => false,
                \Docker\API\Model\EndpointSpec::class => false,
                \Docker\API\Model\Service::class => false,
                \Docker\API\Model\ServiceEndpoint::class => false,
                \Docker\API\Model\ServiceEndpointVirtualIPsItem::class => false,
                \Docker\API\Model\ServiceUpdateStatus::class => false,
                \Docker\API\Model\ServiceServiceStatus::class => false,
                \Docker\API\Model\ServiceJobStatus::class => false,
                \Docker\API\Model\ImageDeleteResponseItem::class => false,
                \Docker\API\Model\ServiceCreateResponse::class => false,
                \Docker\API\Model\ServiceUpdateResponse::class => false,
                \Docker\API\Model\ContainerSummary::class => false,
                \Docker\API\Model\ContainerSummaryHostConfig::class => false,
                \Docker\API\Model\ContainerSummaryNetworkSettings::class => false,
                \Docker\API\Model\Driver::class => false,
                \Docker\API\Model\SecretSpec::class => false,
                \Docker\API\Model\Secret::class => false,
                \Docker\API\Model\ConfigSpec::class => false,
                \Docker\API\Model\Config::class => false,
                \Docker\API\Model\ContainerState::class => false,
                \Docker\API\Model\ContainerCreateResponse::class => false,
                \Docker\API\Model\ContainerWaitResponse::class => false,
                \Docker\API\Model\ContainerWaitExitError::class => false,
                \Docker\API\Model\SystemVersion::class => false,
                \Docker\API\Model\SystemVersionPlatform::class => false,
                \Docker\API\Model\SystemVersionComponentsItem::class => false,
                \Docker\API\Model\SystemInfo::class => false,
                \Docker\API\Model\SystemInfoDefaultAddressPoolsItem::class => false,
                \Docker\API\Model\ContainerdInfo::class => false,
                \Docker\API\Model\ContainerdInfoNamespaces::class => false,
                \Docker\API\Model\PluginsInfo::class => false,
                \Docker\API\Model\RegistryServiceConfig::class => false,
                \Docker\API\Model\IndexInfo::class => false,
                \Docker\API\Model\Runtime::class => false,
                \Docker\API\Model\Commit::class => false,
                \Docker\API\Model\SwarmInfo::class => false,
                \Docker\API\Model\PeerNode::class => false,
                \Docker\API\Model\NetworkAttachmentConfig::class => false,
                \Docker\API\Model\EventActor::class => false,
                \Docker\API\Model\EventMessage::class => false,
                \Docker\API\Model\OCIDescriptor::class => false,
                \Docker\API\Model\OCIPlatform::class => false,
                \Docker\API\Model\DistributionInspect::class => false,
                \Docker\API\Model\ClusterVolume::class => false,
                \Docker\API\Model\ClusterVolumeInfo::class => false,
                \Docker\API\Model\ClusterVolumePublishStatusItem::class => false,
                \Docker\API\Model\ClusterVolumeSpec::class => false,
                \Docker\API\Model\ClusterVolumeSpecAccessMode::class => false,
                \Docker\API\Model\ClusterVolumeSpecAccessModeSecretsItem::class => false,
                \Docker\API\Model\ClusterVolumeSpecAccessModeAccessibilityRequirements::class => false,
                \Docker\API\Model\ClusterVolumeSpecAccessModeCapacityRange::class => false,
                \Docker\API\Model\ImageManifestSummary::class => false,
                \Docker\API\Model\ImageManifestSummarySize::class => false,
                \Docker\API\Model\ImageManifestSummaryImageData::class => false,
                \Docker\API\Model\ImageManifestSummaryImageDataSize::class => false,
                \Docker\API\Model\ImageManifestSummaryAttestationData::class => false,
                \Docker\API\Model\ContainersCreatePostBody::class => false,
                \Docker\API\Model\ContainersIdJsonGetResponse200::class => false,
                \Docker\API\Model\ContainersIdTopGetResponse200::class => false,
                \Docker\API\Model\ContainersIdUpdatePostBody::class => false,
                \Docker\API\Model\ContainersIdUpdatePostResponse200::class => false,
                \Docker\API\Model\ContainersPrunePostResponse200::class => false,
                \Docker\API\Model\BuildPrunePostResponse200::class => false,
                \Docker\API\Model\ImagesNameHistoryGetResponse200Item::class => false,
                \Docker\API\Model\ImagesSearchGetResponse200Item::class => false,
                \Docker\API\Model\ImagesPrunePostResponse200::class => false,
                \Docker\API\Model\AuthPostResponse200::class => false,
                \Docker\API\Model\SystemDfGetResponse200::class => false,
                \Docker\API\Model\ContainersIdExecPostBody::class => false,
                \Docker\API\Model\ExecIdStartPostBody::class => false,
                \Docker\API\Model\ExecIdJsonGetResponse200::class => false,
                \Docker\API\Model\VolumesNamePutBody::class => false,
                \Docker\API\Model\VolumesPrunePostResponse200::class => false,
                \Docker\API\Model\NetworksCreatePostBody::class => false,
                \Docker\API\Model\NetworksIdConnectPostBody::class => false,
                \Docker\API\Model\NetworksIdDisconnectPostBody::class => false,
                \Docker\API\Model\NetworksPrunePostResponse200::class => false,
                \Docker\API\Model\SwarmInitPostBody::class => false,
                \Docker\API\Model\SwarmJoinPostBody::class => false,
                \Docker\API\Model\SwarmUnlockkeyGetResponse200::class => false,
                \Docker\API\Model\SwarmUnlockPostBody::class => false,
                \Docker\API\Model\ServicesCreatePostBody::class => false,
                \Docker\API\Model\ServicesIdUpdatePostBody::class => false,
                \Docker\API\Model\SecretsCreatePostBody::class => false,
                \Docker\API\Model\ConfigsCreatePostBody::class => false,
                \Jane\Component\JsonSchemaRuntime\Reference::class => false,
            ];
        }
    }
} else {
    class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        protected $normalizers = [
            
            \Docker\API\Model\Port::class => \Docker\API\Normalizer\PortNormalizer::class,
            
            \Docker\API\Model\MountPoint::class => \Docker\API\Normalizer\MountPointNormalizer::class,
            
            \Docker\API\Model\DeviceMapping::class => \Docker\API\Normalizer\DeviceMappingNormalizer::class,
            
            \Docker\API\Model\DeviceRequest::class => \Docker\API\Normalizer\DeviceRequestNormalizer::class,
            
            \Docker\API\Model\ThrottleDevice::class => \Docker\API\Normalizer\ThrottleDeviceNormalizer::class,
            
            \Docker\API\Model\Mount::class => \Docker\API\Normalizer\MountNormalizer::class,
            
            \Docker\API\Model\MountBindOptions::class => \Docker\API\Normalizer\MountBindOptionsNormalizer::class,
            
            \Docker\API\Model\MountVolumeOptions::class => \Docker\API\Normalizer\MountVolumeOptionsNormalizer::class,
            
            \Docker\API\Model\MountVolumeOptionsDriverConfig::class => \Docker\API\Normalizer\MountVolumeOptionsDriverConfigNormalizer::class,
            
            \Docker\API\Model\MountTmpfsOptions::class => \Docker\API\Normalizer\MountTmpfsOptionsNormalizer::class,
            
            \Docker\API\Model\RestartPolicy::class => \Docker\API\Normalizer\RestartPolicyNormalizer::class,
            
            \Docker\API\Model\Resources::class => \Docker\API\Normalizer\ResourcesNormalizer::class,
            
            \Docker\API\Model\ResourcesBlkioWeightDeviceItem::class => \Docker\API\Normalizer\ResourcesBlkioWeightDeviceItemNormalizer::class,
            
            \Docker\API\Model\ResourcesUlimitsItem::class => \Docker\API\Normalizer\ResourcesUlimitsItemNormalizer::class,
            
            \Docker\API\Model\Limit::class => \Docker\API\Normalizer\LimitNormalizer::class,
            
            \Docker\API\Model\ResourceObject::class => \Docker\API\Normalizer\ResourceObjectNormalizer::class,
            
            \Docker\API\Model\GenericResourcesItem::class => \Docker\API\Normalizer\GenericResourcesItemNormalizer::class,
            
            \Docker\API\Model\GenericResourcesItemNamedResourceSpec::class => \Docker\API\Normalizer\GenericResourcesItemNamedResourceSpecNormalizer::class,
            
            \Docker\API\Model\GenericResourcesItemDiscreteResourceSpec::class => \Docker\API\Normalizer\GenericResourcesItemDiscreteResourceSpecNormalizer::class,
            
            \Docker\API\Model\HealthConfig::class => \Docker\API\Normalizer\HealthConfigNormalizer::class,
            
            \Docker\API\Model\Health::class => \Docker\API\Normalizer\HealthNormalizer::class,
            
            \Docker\API\Model\HealthcheckResult::class => \Docker\API\Normalizer\HealthcheckResultNormalizer::class,
            
            \Docker\API\Model\HostConfig::class => \Docker\API\Normalizer\HostConfigNormalizer::class,
            
            \Docker\API\Model\HostConfigLogConfig::class => \Docker\API\Normalizer\HostConfigLogConfigNormalizer::class,
            
            \Docker\API\Model\ContainerConfig::class => \Docker\API\Normalizer\ContainerConfigNormalizer::class,
            
            \Docker\API\Model\ImageConfig::class => \Docker\API\Normalizer\ImageConfigNormalizer::class,
            
            \Docker\API\Model\NetworkingConfig::class => \Docker\API\Normalizer\NetworkingConfigNormalizer::class,
            
            \Docker\API\Model\NetworkSettings::class => \Docker\API\Normalizer\NetworkSettingsNormalizer::class,
            
            \Docker\API\Model\Address::class => \Docker\API\Normalizer\AddressNormalizer::class,
            
            \Docker\API\Model\PortBinding::class => \Docker\API\Normalizer\PortBindingNormalizer::class,
            
            \Docker\API\Model\DriverData::class => \Docker\API\Normalizer\DriverDataNormalizer::class,
            
            \Docker\API\Model\FilesystemChange::class => \Docker\API\Normalizer\FilesystemChangeNormalizer::class,
            
            \Docker\API\Model\ImageInspect::class => \Docker\API\Normalizer\ImageInspectNormalizer::class,
            
            \Docker\API\Model\ImageInspectRootFS::class => \Docker\API\Normalizer\ImageInspectRootFSNormalizer::class,
            
            \Docker\API\Model\ImageInspectMetadata::class => \Docker\API\Normalizer\ImageInspectMetadataNormalizer::class,
            
            \Docker\API\Model\ImageSummary::class => \Docker\API\Normalizer\ImageSummaryNormalizer::class,
            
            \Docker\API\Model\AuthConfig::class => \Docker\API\Normalizer\AuthConfigNormalizer::class,
            
            \Docker\API\Model\ProcessConfig::class => \Docker\API\Normalizer\ProcessConfigNormalizer::class,
            
            \Docker\API\Model\Volume::class => \Docker\API\Normalizer\VolumeNormalizer::class,
            
            \Docker\API\Model\VolumeUsageData::class => \Docker\API\Normalizer\VolumeUsageDataNormalizer::class,
            
            \Docker\API\Model\VolumeCreateOptions::class => \Docker\API\Normalizer\VolumeCreateOptionsNormalizer::class,
            
            \Docker\API\Model\VolumeListResponse::class => \Docker\API\Normalizer\VolumeListResponseNormalizer::class,
            
            \Docker\API\Model\Network::class => \Docker\API\Normalizer\NetworkNormalizer::class,
            
            \Docker\API\Model\ConfigReference::class => \Docker\API\Normalizer\ConfigReferenceNormalizer::class,
            
            \Docker\API\Model\IPAM::class => \Docker\API\Normalizer\IPAMNormalizer::class,
            
            \Docker\API\Model\IPAMConfig::class => \Docker\API\Normalizer\IPAMConfigNormalizer::class,
            
            \Docker\API\Model\NetworkContainer::class => \Docker\API\Normalizer\NetworkContainerNormalizer::class,
            
            \Docker\API\Model\PeerInfo::class => \Docker\API\Normalizer\PeerInfoNormalizer::class,
            
            \Docker\API\Model\NetworkCreateResponse::class => \Docker\API\Normalizer\NetworkCreateResponseNormalizer::class,
            
            \Docker\API\Model\BuildInfo::class => \Docker\API\Normalizer\BuildInfoNormalizer::class,
            
            \Docker\API\Model\BuildCache::class => \Docker\API\Normalizer\BuildCacheNormalizer::class,
            
            \Docker\API\Model\ImageID::class => \Docker\API\Normalizer\ImageIDNormalizer::class,
            
            \Docker\API\Model\CreateImageInfo::class => \Docker\API\Normalizer\CreateImageInfoNormalizer::class,
            
            \Docker\API\Model\PushImageInfo::class => \Docker\API\Normalizer\PushImageInfoNormalizer::class,
            
            \Docker\API\Model\ErrorDetail::class => \Docker\API\Normalizer\ErrorDetailNormalizer::class,
            
            \Docker\API\Model\ProgressDetail::class => \Docker\API\Normalizer\ProgressDetailNormalizer::class,
            
            \Docker\API\Model\ErrorResponse::class => \Docker\API\Normalizer\ErrorResponseNormalizer::class,
            
            \Docker\API\Model\IdResponse::class => \Docker\API\Normalizer\IdResponseNormalizer::class,
            
            \Docker\API\Model\EndpointSettings::class => \Docker\API\Normalizer\EndpointSettingsNormalizer::class,
            
            \Docker\API\Model\EndpointIPAMConfig::class => \Docker\API\Normalizer\EndpointIPAMConfigNormalizer::class,
            
            \Docker\API\Model\PluginMount::class => \Docker\API\Normalizer\PluginMountNormalizer::class,
            
            \Docker\API\Model\PluginDevice::class => \Docker\API\Normalizer\PluginDeviceNormalizer::class,
            
            \Docker\API\Model\PluginEnv::class => \Docker\API\Normalizer\PluginEnvNormalizer::class,
            
            \Docker\API\Model\PluginInterfaceType::class => \Docker\API\Normalizer\PluginInterfaceTypeNormalizer::class,
            
            \Docker\API\Model\PluginPrivilege::class => \Docker\API\Normalizer\PluginPrivilegeNormalizer::class,
            
            \Docker\API\Model\Plugin::class => \Docker\API\Normalizer\PluginNormalizer::class,
            
            \Docker\API\Model\PluginSettings::class => \Docker\API\Normalizer\PluginSettingsNormalizer::class,
            
            \Docker\API\Model\PluginConfig::class => \Docker\API\Normalizer\PluginConfigNormalizer::class,
            
            \Docker\API\Model\PluginConfigInterface::class => \Docker\API\Normalizer\PluginConfigInterfaceNormalizer::class,
            
            \Docker\API\Model\PluginConfigUser::class => \Docker\API\Normalizer\PluginConfigUserNormalizer::class,
            
            \Docker\API\Model\PluginConfigNetwork::class => \Docker\API\Normalizer\PluginConfigNetworkNormalizer::class,
            
            \Docker\API\Model\PluginConfigLinux::class => \Docker\API\Normalizer\PluginConfigLinuxNormalizer::class,
            
            \Docker\API\Model\PluginConfigArgs::class => \Docker\API\Normalizer\PluginConfigArgsNormalizer::class,
            
            \Docker\API\Model\PluginConfigRootfs::class => \Docker\API\Normalizer\PluginConfigRootfsNormalizer::class,
            
            \Docker\API\Model\ObjectVersion::class => \Docker\API\Normalizer\ObjectVersionNormalizer::class,
            
            \Docker\API\Model\NodeSpec::class => \Docker\API\Normalizer\NodeSpecNormalizer::class,
            
            \Docker\API\Model\Node::class => \Docker\API\Normalizer\NodeNormalizer::class,
            
            \Docker\API\Model\NodeDescription::class => \Docker\API\Normalizer\NodeDescriptionNormalizer::class,
            
            \Docker\API\Model\Platform::class => \Docker\API\Normalizer\PlatformNormalizer::class,
            
            \Docker\API\Model\EngineDescription::class => \Docker\API\Normalizer\EngineDescriptionNormalizer::class,
            
            \Docker\API\Model\EngineDescriptionPluginsItem::class => \Docker\API\Normalizer\EngineDescriptionPluginsItemNormalizer::class,
            
            \Docker\API\Model\TLSInfo::class => \Docker\API\Normalizer\TLSInfoNormalizer::class,
            
            \Docker\API\Model\NodeStatus::class => \Docker\API\Normalizer\NodeStatusNormalizer::class,
            
            \Docker\API\Model\ManagerStatus::class => \Docker\API\Normalizer\ManagerStatusNormalizer::class,
            
            \Docker\API\Model\SwarmSpec::class => \Docker\API\Normalizer\SwarmSpecNormalizer::class,
            
            \Docker\API\Model\SwarmSpecOrchestration::class => \Docker\API\Normalizer\SwarmSpecOrchestrationNormalizer::class,
            
            \Docker\API\Model\SwarmSpecRaft::class => \Docker\API\Normalizer\SwarmSpecRaftNormalizer::class,
            
            \Docker\API\Model\SwarmSpecDispatcher::class => \Docker\API\Normalizer\SwarmSpecDispatcherNormalizer::class,
            
            \Docker\API\Model\SwarmSpecCAConfig::class => \Docker\API\Normalizer\SwarmSpecCAConfigNormalizer::class,
            
            \Docker\API\Model\SwarmSpecCAConfigExternalCAsItem::class => \Docker\API\Normalizer\SwarmSpecCAConfigExternalCAsItemNormalizer::class,
            
            \Docker\API\Model\SwarmSpecEncryptionConfig::class => \Docker\API\Normalizer\SwarmSpecEncryptionConfigNormalizer::class,
            
            \Docker\API\Model\SwarmSpecTaskDefaults::class => \Docker\API\Normalizer\SwarmSpecTaskDefaultsNormalizer::class,
            
            \Docker\API\Model\SwarmSpecTaskDefaultsLogDriver::class => \Docker\API\Normalizer\SwarmSpecTaskDefaultsLogDriverNormalizer::class,
            
            \Docker\API\Model\ClusterInfo::class => \Docker\API\Normalizer\ClusterInfoNormalizer::class,
            
            \Docker\API\Model\JoinTokens::class => \Docker\API\Normalizer\JoinTokensNormalizer::class,
            
            \Docker\API\Model\Swarm::class => \Docker\API\Normalizer\SwarmNormalizer::class,
            
            \Docker\API\Model\TaskSpec::class => \Docker\API\Normalizer\TaskSpecNormalizer::class,
            
            \Docker\API\Model\TaskSpecPluginSpec::class => \Docker\API\Normalizer\TaskSpecPluginSpecNormalizer::class,
            
            \Docker\API\Model\TaskSpecContainerSpec::class => \Docker\API\Normalizer\TaskSpecContainerSpecNormalizer::class,
            
            \Docker\API\Model\TaskSpecContainerSpecPrivileges::class => \Docker\API\Normalizer\TaskSpecContainerSpecPrivilegesNormalizer::class,
            
            \Docker\API\Model\TaskSpecContainerSpecPrivilegesCredentialSpec::class => \Docker\API\Normalizer\TaskSpecContainerSpecPrivilegesCredentialSpecNormalizer::class,
            
            \Docker\API\Model\TaskSpecContainerSpecPrivilegesSELinuxContext::class => \Docker\API\Normalizer\TaskSpecContainerSpecPrivilegesSELinuxContextNormalizer::class,
            
            \Docker\API\Model\TaskSpecContainerSpecPrivilegesSeccomp::class => \Docker\API\Normalizer\TaskSpecContainerSpecPrivilegesSeccompNormalizer::class,
            
            \Docker\API\Model\TaskSpecContainerSpecPrivilegesAppArmor::class => \Docker\API\Normalizer\TaskSpecContainerSpecPrivilegesAppArmorNormalizer::class,
            
            \Docker\API\Model\TaskSpecContainerSpecDNSConfig::class => \Docker\API\Normalizer\TaskSpecContainerSpecDNSConfigNormalizer::class,
            
            \Docker\API\Model\TaskSpecContainerSpecSecretsItem::class => \Docker\API\Normalizer\TaskSpecContainerSpecSecretsItemNormalizer::class,
            
            \Docker\API\Model\TaskSpecContainerSpecSecretsItemFile::class => \Docker\API\Normalizer\TaskSpecContainerSpecSecretsItemFileNormalizer::class,
            
            \Docker\API\Model\TaskSpecContainerSpecConfigsItem::class => \Docker\API\Normalizer\TaskSpecContainerSpecConfigsItemNormalizer::class,
            
            \Docker\API\Model\TaskSpecContainerSpecConfigsItemFile::class => \Docker\API\Normalizer\TaskSpecContainerSpecConfigsItemFileNormalizer::class,
            
            \Docker\API\Model\TaskSpecContainerSpecUlimitsItem::class => \Docker\API\Normalizer\TaskSpecContainerSpecUlimitsItemNormalizer::class,
            
            \Docker\API\Model\TaskSpecNetworkAttachmentSpec::class => \Docker\API\Normalizer\TaskSpecNetworkAttachmentSpecNormalizer::class,
            
            \Docker\API\Model\TaskSpecResources::class => \Docker\API\Normalizer\TaskSpecResourcesNormalizer::class,
            
            \Docker\API\Model\TaskSpecRestartPolicy::class => \Docker\API\Normalizer\TaskSpecRestartPolicyNormalizer::class,
            
            \Docker\API\Model\TaskSpecPlacement::class => \Docker\API\Normalizer\TaskSpecPlacementNormalizer::class,
            
            \Docker\API\Model\TaskSpecPlacementPreferencesItem::class => \Docker\API\Normalizer\TaskSpecPlacementPreferencesItemNormalizer::class,
            
            \Docker\API\Model\TaskSpecPlacementPreferencesItemSpread::class => \Docker\API\Normalizer\TaskSpecPlacementPreferencesItemSpreadNormalizer::class,
            
            \Docker\API\Model\TaskSpecLogDriver::class => \Docker\API\Normalizer\TaskSpecLogDriverNormalizer::class,
            
            \Docker\API\Model\ContainerStatus::class => \Docker\API\Normalizer\ContainerStatusNormalizer::class,
            
            \Docker\API\Model\PortStatus::class => \Docker\API\Normalizer\PortStatusNormalizer::class,
            
            \Docker\API\Model\TaskStatus::class => \Docker\API\Normalizer\TaskStatusNormalizer::class,
            
            \Docker\API\Model\Task::class => \Docker\API\Normalizer\TaskNormalizer::class,
            
            \Docker\API\Model\ServiceSpec::class => \Docker\API\Normalizer\ServiceSpecNormalizer::class,
            
            \Docker\API\Model\ServiceSpecMode::class => \Docker\API\Normalizer\ServiceSpecModeNormalizer::class,
            
            \Docker\API\Model\ServiceSpecModeReplicated::class => \Docker\API\Normalizer\ServiceSpecModeReplicatedNormalizer::class,
            
            \Docker\API\Model\ServiceSpecModeReplicatedJob::class => \Docker\API\Normalizer\ServiceSpecModeReplicatedJobNormalizer::class,
            
            \Docker\API\Model\ServiceSpecUpdateConfig::class => \Docker\API\Normalizer\ServiceSpecUpdateConfigNormalizer::class,
            
            \Docker\API\Model\ServiceSpecRollbackConfig::class => \Docker\API\Normalizer\ServiceSpecRollbackConfigNormalizer::class,
            
            \Docker\API\Model\EndpointPortConfig::class => \Docker\API\Normalizer\EndpointPortConfigNormalizer::class,
            
            \Docker\API\Model\EndpointSpec::class => \Docker\API\Normalizer\EndpointSpecNormalizer::class,
            
            \Docker\API\Model\Service::class => \Docker\API\Normalizer\ServiceNormalizer::class,
            
            \Docker\API\Model\ServiceEndpoint::class => \Docker\API\Normalizer\ServiceEndpointNormalizer::class,
            
            \Docker\API\Model\ServiceEndpointVirtualIPsItem::class => \Docker\API\Normalizer\ServiceEndpointVirtualIPsItemNormalizer::class,
            
            \Docker\API\Model\ServiceUpdateStatus::class => \Docker\API\Normalizer\ServiceUpdateStatusNormalizer::class,
            
            \Docker\API\Model\ServiceServiceStatus::class => \Docker\API\Normalizer\ServiceServiceStatusNormalizer::class,
            
            \Docker\API\Model\ServiceJobStatus::class => \Docker\API\Normalizer\ServiceJobStatusNormalizer::class,
            
            \Docker\API\Model\ImageDeleteResponseItem::class => \Docker\API\Normalizer\ImageDeleteResponseItemNormalizer::class,
            
            \Docker\API\Model\ServiceCreateResponse::class => \Docker\API\Normalizer\ServiceCreateResponseNormalizer::class,
            
            \Docker\API\Model\ServiceUpdateResponse::class => \Docker\API\Normalizer\ServiceUpdateResponseNormalizer::class,
            
            \Docker\API\Model\ContainerSummary::class => \Docker\API\Normalizer\ContainerSummaryNormalizer::class,
            
            \Docker\API\Model\ContainerSummaryHostConfig::class => \Docker\API\Normalizer\ContainerSummaryHostConfigNormalizer::class,
            
            \Docker\API\Model\ContainerSummaryNetworkSettings::class => \Docker\API\Normalizer\ContainerSummaryNetworkSettingsNormalizer::class,
            
            \Docker\API\Model\Driver::class => \Docker\API\Normalizer\DriverNormalizer::class,
            
            \Docker\API\Model\SecretSpec::class => \Docker\API\Normalizer\SecretSpecNormalizer::class,
            
            \Docker\API\Model\Secret::class => \Docker\API\Normalizer\SecretNormalizer::class,
            
            \Docker\API\Model\ConfigSpec::class => \Docker\API\Normalizer\ConfigSpecNormalizer::class,
            
            \Docker\API\Model\Config::class => \Docker\API\Normalizer\ConfigNormalizer::class,
            
            \Docker\API\Model\ContainerState::class => \Docker\API\Normalizer\ContainerStateNormalizer::class,
            
            \Docker\API\Model\ContainerCreateResponse::class => \Docker\API\Normalizer\ContainerCreateResponseNormalizer::class,
            
            \Docker\API\Model\ContainerWaitResponse::class => \Docker\API\Normalizer\ContainerWaitResponseNormalizer::class,
            
            \Docker\API\Model\ContainerWaitExitError::class => \Docker\API\Normalizer\ContainerWaitExitErrorNormalizer::class,
            
            \Docker\API\Model\SystemVersion::class => \Docker\API\Normalizer\SystemVersionNormalizer::class,
            
            \Docker\API\Model\SystemVersionPlatform::class => \Docker\API\Normalizer\SystemVersionPlatformNormalizer::class,
            
            \Docker\API\Model\SystemVersionComponentsItem::class => \Docker\API\Normalizer\SystemVersionComponentsItemNormalizer::class,
            
            \Docker\API\Model\SystemInfo::class => \Docker\API\Normalizer\SystemInfoNormalizer::class,
            
            \Docker\API\Model\SystemInfoDefaultAddressPoolsItem::class => \Docker\API\Normalizer\SystemInfoDefaultAddressPoolsItemNormalizer::class,
            
            \Docker\API\Model\ContainerdInfo::class => \Docker\API\Normalizer\ContainerdInfoNormalizer::class,
            
            \Docker\API\Model\ContainerdInfoNamespaces::class => \Docker\API\Normalizer\ContainerdInfoNamespacesNormalizer::class,
            
            \Docker\API\Model\PluginsInfo::class => \Docker\API\Normalizer\PluginsInfoNormalizer::class,
            
            \Docker\API\Model\RegistryServiceConfig::class => \Docker\API\Normalizer\RegistryServiceConfigNormalizer::class,
            
            \Docker\API\Model\IndexInfo::class => \Docker\API\Normalizer\IndexInfoNormalizer::class,
            
            \Docker\API\Model\Runtime::class => \Docker\API\Normalizer\RuntimeNormalizer::class,
            
            \Docker\API\Model\Commit::class => \Docker\API\Normalizer\CommitNormalizer::class,
            
            \Docker\API\Model\SwarmInfo::class => \Docker\API\Normalizer\SwarmInfoNormalizer::class,
            
            \Docker\API\Model\PeerNode::class => \Docker\API\Normalizer\PeerNodeNormalizer::class,
            
            \Docker\API\Model\NetworkAttachmentConfig::class => \Docker\API\Normalizer\NetworkAttachmentConfigNormalizer::class,
            
            \Docker\API\Model\EventActor::class => \Docker\API\Normalizer\EventActorNormalizer::class,
            
            \Docker\API\Model\EventMessage::class => \Docker\API\Normalizer\EventMessageNormalizer::class,
            
            \Docker\API\Model\OCIDescriptor::class => \Docker\API\Normalizer\OCIDescriptorNormalizer::class,
            
            \Docker\API\Model\OCIPlatform::class => \Docker\API\Normalizer\OCIPlatformNormalizer::class,
            
            \Docker\API\Model\DistributionInspect::class => \Docker\API\Normalizer\DistributionInspectNormalizer::class,
            
            \Docker\API\Model\ClusterVolume::class => \Docker\API\Normalizer\ClusterVolumeNormalizer::class,
            
            \Docker\API\Model\ClusterVolumeInfo::class => \Docker\API\Normalizer\ClusterVolumeInfoNormalizer::class,
            
            \Docker\API\Model\ClusterVolumePublishStatusItem::class => \Docker\API\Normalizer\ClusterVolumePublishStatusItemNormalizer::class,
            
            \Docker\API\Model\ClusterVolumeSpec::class => \Docker\API\Normalizer\ClusterVolumeSpecNormalizer::class,
            
            \Docker\API\Model\ClusterVolumeSpecAccessMode::class => \Docker\API\Normalizer\ClusterVolumeSpecAccessModeNormalizer::class,
            
            \Docker\API\Model\ClusterVolumeSpecAccessModeSecretsItem::class => \Docker\API\Normalizer\ClusterVolumeSpecAccessModeSecretsItemNormalizer::class,
            
            \Docker\API\Model\ClusterVolumeSpecAccessModeAccessibilityRequirements::class => \Docker\API\Normalizer\ClusterVolumeSpecAccessModeAccessibilityRequirementsNormalizer::class,
            
            \Docker\API\Model\ClusterVolumeSpecAccessModeCapacityRange::class => \Docker\API\Normalizer\ClusterVolumeSpecAccessModeCapacityRangeNormalizer::class,
            
            \Docker\API\Model\ImageManifestSummary::class => \Docker\API\Normalizer\ImageManifestSummaryNormalizer::class,
            
            \Docker\API\Model\ImageManifestSummarySize::class => \Docker\API\Normalizer\ImageManifestSummarySizeNormalizer::class,
            
            \Docker\API\Model\ImageManifestSummaryImageData::class => \Docker\API\Normalizer\ImageManifestSummaryImageDataNormalizer::class,
            
            \Docker\API\Model\ImageManifestSummaryImageDataSize::class => \Docker\API\Normalizer\ImageManifestSummaryImageDataSizeNormalizer::class,
            
            \Docker\API\Model\ImageManifestSummaryAttestationData::class => \Docker\API\Normalizer\ImageManifestSummaryAttestationDataNormalizer::class,
            
            \Docker\API\Model\ContainersCreatePostBody::class => \Docker\API\Normalizer\ContainersCreatePostBodyNormalizer::class,
            
            \Docker\API\Model\ContainersIdJsonGetResponse200::class => \Docker\API\Normalizer\ContainersIdJsonGetResponse200Normalizer::class,
            
            \Docker\API\Model\ContainersIdTopGetResponse200::class => \Docker\API\Normalizer\ContainersIdTopGetResponse200Normalizer::class,
            
            \Docker\API\Model\ContainersIdUpdatePostBody::class => \Docker\API\Normalizer\ContainersIdUpdatePostBodyNormalizer::class,
            
            \Docker\API\Model\ContainersIdUpdatePostResponse200::class => \Docker\API\Normalizer\ContainersIdUpdatePostResponse200Normalizer::class,
            
            \Docker\API\Model\ContainersPrunePostResponse200::class => \Docker\API\Normalizer\ContainersPrunePostResponse200Normalizer::class,
            
            \Docker\API\Model\BuildPrunePostResponse200::class => \Docker\API\Normalizer\BuildPrunePostResponse200Normalizer::class,
            
            \Docker\API\Model\ImagesNameHistoryGetResponse200Item::class => \Docker\API\Normalizer\ImagesNameHistoryGetResponse200ItemNormalizer::class,
            
            \Docker\API\Model\ImagesSearchGetResponse200Item::class => \Docker\API\Normalizer\ImagesSearchGetResponse200ItemNormalizer::class,
            
            \Docker\API\Model\ImagesPrunePostResponse200::class => \Docker\API\Normalizer\ImagesPrunePostResponse200Normalizer::class,
            
            \Docker\API\Model\AuthPostResponse200::class => \Docker\API\Normalizer\AuthPostResponse200Normalizer::class,
            
            \Docker\API\Model\SystemDfGetResponse200::class => \Docker\API\Normalizer\SystemDfGetResponse200Normalizer::class,
            
            \Docker\API\Model\ContainersIdExecPostBody::class => \Docker\API\Normalizer\ContainersIdExecPostBodyNormalizer::class,
            
            \Docker\API\Model\ExecIdStartPostBody::class => \Docker\API\Normalizer\ExecIdStartPostBodyNormalizer::class,
            
            \Docker\API\Model\ExecIdJsonGetResponse200::class => \Docker\API\Normalizer\ExecIdJsonGetResponse200Normalizer::class,
            
            \Docker\API\Model\VolumesNamePutBody::class => \Docker\API\Normalizer\VolumesNamePutBodyNormalizer::class,
            
            \Docker\API\Model\VolumesPrunePostResponse200::class => \Docker\API\Normalizer\VolumesPrunePostResponse200Normalizer::class,
            
            \Docker\API\Model\NetworksCreatePostBody::class => \Docker\API\Normalizer\NetworksCreatePostBodyNormalizer::class,
            
            \Docker\API\Model\NetworksIdConnectPostBody::class => \Docker\API\Normalizer\NetworksIdConnectPostBodyNormalizer::class,
            
            \Docker\API\Model\NetworksIdDisconnectPostBody::class => \Docker\API\Normalizer\NetworksIdDisconnectPostBodyNormalizer::class,
            
            \Docker\API\Model\NetworksPrunePostResponse200::class => \Docker\API\Normalizer\NetworksPrunePostResponse200Normalizer::class,
            
            \Docker\API\Model\SwarmInitPostBody::class => \Docker\API\Normalizer\SwarmInitPostBodyNormalizer::class,
            
            \Docker\API\Model\SwarmJoinPostBody::class => \Docker\API\Normalizer\SwarmJoinPostBodyNormalizer::class,
            
            \Docker\API\Model\SwarmUnlockkeyGetResponse200::class => \Docker\API\Normalizer\SwarmUnlockkeyGetResponse200Normalizer::class,
            
            \Docker\API\Model\SwarmUnlockPostBody::class => \Docker\API\Normalizer\SwarmUnlockPostBodyNormalizer::class,
            
            \Docker\API\Model\ServicesCreatePostBody::class => \Docker\API\Normalizer\ServicesCreatePostBodyNormalizer::class,
            
            \Docker\API\Model\ServicesIdUpdatePostBody::class => \Docker\API\Normalizer\ServicesIdUpdatePostBodyNormalizer::class,
            
            \Docker\API\Model\SecretsCreatePostBody::class => \Docker\API\Normalizer\SecretsCreatePostBodyNormalizer::class,
            
            \Docker\API\Model\ConfigsCreatePostBody::class => \Docker\API\Normalizer\ConfigsCreatePostBodyNormalizer::class,
            
            \Jane\Component\JsonSchemaRuntime\Reference::class => \Docker\API\Runtime\Normalizer\ReferenceNormalizer::class,
        ], $normalizersCache = [];
        public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
        {
            return array_key_exists($type, $this->normalizers);
        }
        public function supportsNormalization($data, $format = null, array $context = []): bool
        {
            return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $normalizerClass = $this->normalizers[get_class($object)];
            $normalizer = $this->getNormalizer($normalizerClass);
            return $normalizer->normalize($object, $format, $context);
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            $denormalizerClass = $this->normalizers[$type];
            $denormalizer = $this->getNormalizer($denormalizerClass);
            return $denormalizer->denormalize($data, $type, $format, $context);
        }
        private function getNormalizer(string $normalizerClass)
        {
            return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
        }
        private function initNormalizer(string $normalizerClass)
        {
            $normalizer = new $normalizerClass();
            $normalizer->setNormalizer($this->normalizer);
            $normalizer->setDenormalizer($this->denormalizer);
            $this->normalizersCache[$normalizerClass] = $normalizer;
            return $normalizer;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [
                
                \Docker\API\Model\Port::class => false,
                \Docker\API\Model\MountPoint::class => false,
                \Docker\API\Model\DeviceMapping::class => false,
                \Docker\API\Model\DeviceRequest::class => false,
                \Docker\API\Model\ThrottleDevice::class => false,
                \Docker\API\Model\Mount::class => false,
                \Docker\API\Model\MountBindOptions::class => false,
                \Docker\API\Model\MountVolumeOptions::class => false,
                \Docker\API\Model\MountVolumeOptionsDriverConfig::class => false,
                \Docker\API\Model\MountTmpfsOptions::class => false,
                \Docker\API\Model\RestartPolicy::class => false,
                \Docker\API\Model\Resources::class => false,
                \Docker\API\Model\ResourcesBlkioWeightDeviceItem::class => false,
                \Docker\API\Model\ResourcesUlimitsItem::class => false,
                \Docker\API\Model\Limit::class => false,
                \Docker\API\Model\ResourceObject::class => false,
                \Docker\API\Model\GenericResourcesItem::class => false,
                \Docker\API\Model\GenericResourcesItemNamedResourceSpec::class => false,
                \Docker\API\Model\GenericResourcesItemDiscreteResourceSpec::class => false,
                \Docker\API\Model\HealthConfig::class => false,
                \Docker\API\Model\Health::class => false,
                \Docker\API\Model\HealthcheckResult::class => false,
                \Docker\API\Model\HostConfig::class => false,
                \Docker\API\Model\HostConfigLogConfig::class => false,
                \Docker\API\Model\ContainerConfig::class => false,
                \Docker\API\Model\ImageConfig::class => false,
                \Docker\API\Model\NetworkingConfig::class => false,
                \Docker\API\Model\NetworkSettings::class => false,
                \Docker\API\Model\Address::class => false,
                \Docker\API\Model\PortBinding::class => false,
                \Docker\API\Model\DriverData::class => false,
                \Docker\API\Model\FilesystemChange::class => false,
                \Docker\API\Model\ImageInspect::class => false,
                \Docker\API\Model\ImageInspectRootFS::class => false,
                \Docker\API\Model\ImageInspectMetadata::class => false,
                \Docker\API\Model\ImageSummary::class => false,
                \Docker\API\Model\AuthConfig::class => false,
                \Docker\API\Model\ProcessConfig::class => false,
                \Docker\API\Model\Volume::class => false,
                \Docker\API\Model\VolumeUsageData::class => false,
                \Docker\API\Model\VolumeCreateOptions::class => false,
                \Docker\API\Model\VolumeListResponse::class => false,
                \Docker\API\Model\Network::class => false,
                \Docker\API\Model\ConfigReference::class => false,
                \Docker\API\Model\IPAM::class => false,
                \Docker\API\Model\IPAMConfig::class => false,
                \Docker\API\Model\NetworkContainer::class => false,
                \Docker\API\Model\PeerInfo::class => false,
                \Docker\API\Model\NetworkCreateResponse::class => false,
                \Docker\API\Model\BuildInfo::class => false,
                \Docker\API\Model\BuildCache::class => false,
                \Docker\API\Model\ImageID::class => false,
                \Docker\API\Model\CreateImageInfo::class => false,
                \Docker\API\Model\PushImageInfo::class => false,
                \Docker\API\Model\ErrorDetail::class => false,
                \Docker\API\Model\ProgressDetail::class => false,
                \Docker\API\Model\ErrorResponse::class => false,
                \Docker\API\Model\IdResponse::class => false,
                \Docker\API\Model\EndpointSettings::class => false,
                \Docker\API\Model\EndpointIPAMConfig::class => false,
                \Docker\API\Model\PluginMount::class => false,
                \Docker\API\Model\PluginDevice::class => false,
                \Docker\API\Model\PluginEnv::class => false,
                \Docker\API\Model\PluginInterfaceType::class => false,
                \Docker\API\Model\PluginPrivilege::class => false,
                \Docker\API\Model\Plugin::class => false,
                \Docker\API\Model\PluginSettings::class => false,
                \Docker\API\Model\PluginConfig::class => false,
                \Docker\API\Model\PluginConfigInterface::class => false,
                \Docker\API\Model\PluginConfigUser::class => false,
                \Docker\API\Model\PluginConfigNetwork::class => false,
                \Docker\API\Model\PluginConfigLinux::class => false,
                \Docker\API\Model\PluginConfigArgs::class => false,
                \Docker\API\Model\PluginConfigRootfs::class => false,
                \Docker\API\Model\ObjectVersion::class => false,
                \Docker\API\Model\NodeSpec::class => false,
                \Docker\API\Model\Node::class => false,
                \Docker\API\Model\NodeDescription::class => false,
                \Docker\API\Model\Platform::class => false,
                \Docker\API\Model\EngineDescription::class => false,
                \Docker\API\Model\EngineDescriptionPluginsItem::class => false,
                \Docker\API\Model\TLSInfo::class => false,
                \Docker\API\Model\NodeStatus::class => false,
                \Docker\API\Model\ManagerStatus::class => false,
                \Docker\API\Model\SwarmSpec::class => false,
                \Docker\API\Model\SwarmSpecOrchestration::class => false,
                \Docker\API\Model\SwarmSpecRaft::class => false,
                \Docker\API\Model\SwarmSpecDispatcher::class => false,
                \Docker\API\Model\SwarmSpecCAConfig::class => false,
                \Docker\API\Model\SwarmSpecCAConfigExternalCAsItem::class => false,
                \Docker\API\Model\SwarmSpecEncryptionConfig::class => false,
                \Docker\API\Model\SwarmSpecTaskDefaults::class => false,
                \Docker\API\Model\SwarmSpecTaskDefaultsLogDriver::class => false,
                \Docker\API\Model\ClusterInfo::class => false,
                \Docker\API\Model\JoinTokens::class => false,
                \Docker\API\Model\Swarm::class => false,
                \Docker\API\Model\TaskSpec::class => false,
                \Docker\API\Model\TaskSpecPluginSpec::class => false,
                \Docker\API\Model\TaskSpecContainerSpec::class => false,
                \Docker\API\Model\TaskSpecContainerSpecPrivileges::class => false,
                \Docker\API\Model\TaskSpecContainerSpecPrivilegesCredentialSpec::class => false,
                \Docker\API\Model\TaskSpecContainerSpecPrivilegesSELinuxContext::class => false,
                \Docker\API\Model\TaskSpecContainerSpecPrivilegesSeccomp::class => false,
                \Docker\API\Model\TaskSpecContainerSpecPrivilegesAppArmor::class => false,
                \Docker\API\Model\TaskSpecContainerSpecDNSConfig::class => false,
                \Docker\API\Model\TaskSpecContainerSpecSecretsItem::class => false,
                \Docker\API\Model\TaskSpecContainerSpecSecretsItemFile::class => false,
                \Docker\API\Model\TaskSpecContainerSpecConfigsItem::class => false,
                \Docker\API\Model\TaskSpecContainerSpecConfigsItemFile::class => false,
                \Docker\API\Model\TaskSpecContainerSpecUlimitsItem::class => false,
                \Docker\API\Model\TaskSpecNetworkAttachmentSpec::class => false,
                \Docker\API\Model\TaskSpecResources::class => false,
                \Docker\API\Model\TaskSpecRestartPolicy::class => false,
                \Docker\API\Model\TaskSpecPlacement::class => false,
                \Docker\API\Model\TaskSpecPlacementPreferencesItem::class => false,
                \Docker\API\Model\TaskSpecPlacementPreferencesItemSpread::class => false,
                \Docker\API\Model\TaskSpecLogDriver::class => false,
                \Docker\API\Model\ContainerStatus::class => false,
                \Docker\API\Model\PortStatus::class => false,
                \Docker\API\Model\TaskStatus::class => false,
                \Docker\API\Model\Task::class => false,
                \Docker\API\Model\ServiceSpec::class => false,
                \Docker\API\Model\ServiceSpecMode::class => false,
                \Docker\API\Model\ServiceSpecModeReplicated::class => false,
                \Docker\API\Model\ServiceSpecModeReplicatedJob::class => false,
                \Docker\API\Model\ServiceSpecUpdateConfig::class => false,
                \Docker\API\Model\ServiceSpecRollbackConfig::class => false,
                \Docker\API\Model\EndpointPortConfig::class => false,
                \Docker\API\Model\EndpointSpec::class => false,
                \Docker\API\Model\Service::class => false,
                \Docker\API\Model\ServiceEndpoint::class => false,
                \Docker\API\Model\ServiceEndpointVirtualIPsItem::class => false,
                \Docker\API\Model\ServiceUpdateStatus::class => false,
                \Docker\API\Model\ServiceServiceStatus::class => false,
                \Docker\API\Model\ServiceJobStatus::class => false,
                \Docker\API\Model\ImageDeleteResponseItem::class => false,
                \Docker\API\Model\ServiceCreateResponse::class => false,
                \Docker\API\Model\ServiceUpdateResponse::class => false,
                \Docker\API\Model\ContainerSummary::class => false,
                \Docker\API\Model\ContainerSummaryHostConfig::class => false,
                \Docker\API\Model\ContainerSummaryNetworkSettings::class => false,
                \Docker\API\Model\Driver::class => false,
                \Docker\API\Model\SecretSpec::class => false,
                \Docker\API\Model\Secret::class => false,
                \Docker\API\Model\ConfigSpec::class => false,
                \Docker\API\Model\Config::class => false,
                \Docker\API\Model\ContainerState::class => false,
                \Docker\API\Model\ContainerCreateResponse::class => false,
                \Docker\API\Model\ContainerWaitResponse::class => false,
                \Docker\API\Model\ContainerWaitExitError::class => false,
                \Docker\API\Model\SystemVersion::class => false,
                \Docker\API\Model\SystemVersionPlatform::class => false,
                \Docker\API\Model\SystemVersionComponentsItem::class => false,
                \Docker\API\Model\SystemInfo::class => false,
                \Docker\API\Model\SystemInfoDefaultAddressPoolsItem::class => false,
                \Docker\API\Model\ContainerdInfo::class => false,
                \Docker\API\Model\ContainerdInfoNamespaces::class => false,
                \Docker\API\Model\PluginsInfo::class => false,
                \Docker\API\Model\RegistryServiceConfig::class => false,
                \Docker\API\Model\IndexInfo::class => false,
                \Docker\API\Model\Runtime::class => false,
                \Docker\API\Model\Commit::class => false,
                \Docker\API\Model\SwarmInfo::class => false,
                \Docker\API\Model\PeerNode::class => false,
                \Docker\API\Model\NetworkAttachmentConfig::class => false,
                \Docker\API\Model\EventActor::class => false,
                \Docker\API\Model\EventMessage::class => false,
                \Docker\API\Model\OCIDescriptor::class => false,
                \Docker\API\Model\OCIPlatform::class => false,
                \Docker\API\Model\DistributionInspect::class => false,
                \Docker\API\Model\ClusterVolume::class => false,
                \Docker\API\Model\ClusterVolumeInfo::class => false,
                \Docker\API\Model\ClusterVolumePublishStatusItem::class => false,
                \Docker\API\Model\ClusterVolumeSpec::class => false,
                \Docker\API\Model\ClusterVolumeSpecAccessMode::class => false,
                \Docker\API\Model\ClusterVolumeSpecAccessModeSecretsItem::class => false,
                \Docker\API\Model\ClusterVolumeSpecAccessModeAccessibilityRequirements::class => false,
                \Docker\API\Model\ClusterVolumeSpecAccessModeCapacityRange::class => false,
                \Docker\API\Model\ImageManifestSummary::class => false,
                \Docker\API\Model\ImageManifestSummarySize::class => false,
                \Docker\API\Model\ImageManifestSummaryImageData::class => false,
                \Docker\API\Model\ImageManifestSummaryImageDataSize::class => false,
                \Docker\API\Model\ImageManifestSummaryAttestationData::class => false,
                \Docker\API\Model\ContainersCreatePostBody::class => false,
                \Docker\API\Model\ContainersIdJsonGetResponse200::class => false,
                \Docker\API\Model\ContainersIdTopGetResponse200::class => false,
                \Docker\API\Model\ContainersIdUpdatePostBody::class => false,
                \Docker\API\Model\ContainersIdUpdatePostResponse200::class => false,
                \Docker\API\Model\ContainersPrunePostResponse200::class => false,
                \Docker\API\Model\BuildPrunePostResponse200::class => false,
                \Docker\API\Model\ImagesNameHistoryGetResponse200Item::class => false,
                \Docker\API\Model\ImagesSearchGetResponse200Item::class => false,
                \Docker\API\Model\ImagesPrunePostResponse200::class => false,
                \Docker\API\Model\AuthPostResponse200::class => false,
                \Docker\API\Model\SystemDfGetResponse200::class => false,
                \Docker\API\Model\ContainersIdExecPostBody::class => false,
                \Docker\API\Model\ExecIdStartPostBody::class => false,
                \Docker\API\Model\ExecIdJsonGetResponse200::class => false,
                \Docker\API\Model\VolumesNamePutBody::class => false,
                \Docker\API\Model\VolumesPrunePostResponse200::class => false,
                \Docker\API\Model\NetworksCreatePostBody::class => false,
                \Docker\API\Model\NetworksIdConnectPostBody::class => false,
                \Docker\API\Model\NetworksIdDisconnectPostBody::class => false,
                \Docker\API\Model\NetworksPrunePostResponse200::class => false,
                \Docker\API\Model\SwarmInitPostBody::class => false,
                \Docker\API\Model\SwarmJoinPostBody::class => false,
                \Docker\API\Model\SwarmUnlockkeyGetResponse200::class => false,
                \Docker\API\Model\SwarmUnlockPostBody::class => false,
                \Docker\API\Model\ServicesCreatePostBody::class => false,
                \Docker\API\Model\ServicesIdUpdatePostBody::class => false,
                \Docker\API\Model\SecretsCreatePostBody::class => false,
                \Docker\API\Model\ConfigsCreatePostBody::class => false,
                \Jane\Component\JsonSchemaRuntime\Reference::class => false,
            ];
        }
    }
}