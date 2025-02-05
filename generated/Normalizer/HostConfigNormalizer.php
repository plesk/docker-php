<?php

namespace Docker\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Docker\API\Runtime\Normalizer\CheckArray;
use Docker\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class HostConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\HostConfig::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\HostConfig::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\HostConfig();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('CpuShares', $data) && $data['CpuShares'] !== null) {
                $object->setCpuShares($data['CpuShares']);
            }
            elseif (\array_key_exists('CpuShares', $data) && $data['CpuShares'] === null) {
                $object->setCpuShares(null);
            }
            if (\array_key_exists('Memory', $data) && $data['Memory'] !== null) {
                $object->setMemory($data['Memory']);
            }
            elseif (\array_key_exists('Memory', $data) && $data['Memory'] === null) {
                $object->setMemory(null);
            }
            if (\array_key_exists('CgroupParent', $data) && $data['CgroupParent'] !== null) {
                $object->setCgroupParent($data['CgroupParent']);
            }
            elseif (\array_key_exists('CgroupParent', $data) && $data['CgroupParent'] === null) {
                $object->setCgroupParent(null);
            }
            if (\array_key_exists('BlkioWeight', $data) && $data['BlkioWeight'] !== null) {
                $object->setBlkioWeight($data['BlkioWeight']);
            }
            elseif (\array_key_exists('BlkioWeight', $data) && $data['BlkioWeight'] === null) {
                $object->setBlkioWeight(null);
            }
            if (\array_key_exists('BlkioWeightDevice', $data) && $data['BlkioWeightDevice'] !== null) {
                $values = [];
                foreach ($data['BlkioWeightDevice'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Docker\API\Model\ResourcesBlkioWeightDeviceItem::class, 'json', $context);
                }
                $object->setBlkioWeightDevice($values);
            }
            elseif (\array_key_exists('BlkioWeightDevice', $data) && $data['BlkioWeightDevice'] === null) {
                $object->setBlkioWeightDevice(null);
            }
            if (\array_key_exists('BlkioDeviceReadBps', $data) && $data['BlkioDeviceReadBps'] !== null) {
                $values_1 = [];
                foreach ($data['BlkioDeviceReadBps'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \Docker\API\Model\ThrottleDevice::class, 'json', $context);
                }
                $object->setBlkioDeviceReadBps($values_1);
            }
            elseif (\array_key_exists('BlkioDeviceReadBps', $data) && $data['BlkioDeviceReadBps'] === null) {
                $object->setBlkioDeviceReadBps(null);
            }
            if (\array_key_exists('BlkioDeviceWriteBps', $data) && $data['BlkioDeviceWriteBps'] !== null) {
                $values_2 = [];
                foreach ($data['BlkioDeviceWriteBps'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \Docker\API\Model\ThrottleDevice::class, 'json', $context);
                }
                $object->setBlkioDeviceWriteBps($values_2);
            }
            elseif (\array_key_exists('BlkioDeviceWriteBps', $data) && $data['BlkioDeviceWriteBps'] === null) {
                $object->setBlkioDeviceWriteBps(null);
            }
            if (\array_key_exists('BlkioDeviceReadIOps', $data) && $data['BlkioDeviceReadIOps'] !== null) {
                $values_3 = [];
                foreach ($data['BlkioDeviceReadIOps'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, \Docker\API\Model\ThrottleDevice::class, 'json', $context);
                }
                $object->setBlkioDeviceReadIOps($values_3);
            }
            elseif (\array_key_exists('BlkioDeviceReadIOps', $data) && $data['BlkioDeviceReadIOps'] === null) {
                $object->setBlkioDeviceReadIOps(null);
            }
            if (\array_key_exists('BlkioDeviceWriteIOps', $data) && $data['BlkioDeviceWriteIOps'] !== null) {
                $values_4 = [];
                foreach ($data['BlkioDeviceWriteIOps'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, \Docker\API\Model\ThrottleDevice::class, 'json', $context);
                }
                $object->setBlkioDeviceWriteIOps($values_4);
            }
            elseif (\array_key_exists('BlkioDeviceWriteIOps', $data) && $data['BlkioDeviceWriteIOps'] === null) {
                $object->setBlkioDeviceWriteIOps(null);
            }
            if (\array_key_exists('CpuPeriod', $data) && $data['CpuPeriod'] !== null) {
                $object->setCpuPeriod($data['CpuPeriod']);
            }
            elseif (\array_key_exists('CpuPeriod', $data) && $data['CpuPeriod'] === null) {
                $object->setCpuPeriod(null);
            }
            if (\array_key_exists('CpuQuota', $data) && $data['CpuQuota'] !== null) {
                $object->setCpuQuota($data['CpuQuota']);
            }
            elseif (\array_key_exists('CpuQuota', $data) && $data['CpuQuota'] === null) {
                $object->setCpuQuota(null);
            }
            if (\array_key_exists('CpuRealtimePeriod', $data) && $data['CpuRealtimePeriod'] !== null) {
                $object->setCpuRealtimePeriod($data['CpuRealtimePeriod']);
            }
            elseif (\array_key_exists('CpuRealtimePeriod', $data) && $data['CpuRealtimePeriod'] === null) {
                $object->setCpuRealtimePeriod(null);
            }
            if (\array_key_exists('CpuRealtimeRuntime', $data) && $data['CpuRealtimeRuntime'] !== null) {
                $object->setCpuRealtimeRuntime($data['CpuRealtimeRuntime']);
            }
            elseif (\array_key_exists('CpuRealtimeRuntime', $data) && $data['CpuRealtimeRuntime'] === null) {
                $object->setCpuRealtimeRuntime(null);
            }
            if (\array_key_exists('CpusetCpus', $data) && $data['CpusetCpus'] !== null) {
                $object->setCpusetCpus($data['CpusetCpus']);
            }
            elseif (\array_key_exists('CpusetCpus', $data) && $data['CpusetCpus'] === null) {
                $object->setCpusetCpus(null);
            }
            if (\array_key_exists('CpusetMems', $data) && $data['CpusetMems'] !== null) {
                $object->setCpusetMems($data['CpusetMems']);
            }
            elseif (\array_key_exists('CpusetMems', $data) && $data['CpusetMems'] === null) {
                $object->setCpusetMems(null);
            }
            if (\array_key_exists('Devices', $data) && $data['Devices'] !== null) {
                $values_5 = [];
                foreach ($data['Devices'] as $value_5) {
                    $values_5[] = $this->denormalizer->denormalize($value_5, \Docker\API\Model\DeviceMapping::class, 'json', $context);
                }
                $object->setDevices($values_5);
            }
            elseif (\array_key_exists('Devices', $data) && $data['Devices'] === null) {
                $object->setDevices(null);
            }
            if (\array_key_exists('DeviceCgroupRules', $data) && $data['DeviceCgroupRules'] !== null) {
                $values_6 = [];
                foreach ($data['DeviceCgroupRules'] as $value_6) {
                    $values_6[] = $value_6;
                }
                $object->setDeviceCgroupRules($values_6);
            }
            elseif (\array_key_exists('DeviceCgroupRules', $data) && $data['DeviceCgroupRules'] === null) {
                $object->setDeviceCgroupRules(null);
            }
            if (\array_key_exists('DeviceRequests', $data) && $data['DeviceRequests'] !== null) {
                $values_7 = [];
                foreach ($data['DeviceRequests'] as $value_7) {
                    $values_7[] = $this->denormalizer->denormalize($value_7, \Docker\API\Model\DeviceRequest::class, 'json', $context);
                }
                $object->setDeviceRequests($values_7);
            }
            elseif (\array_key_exists('DeviceRequests', $data) && $data['DeviceRequests'] === null) {
                $object->setDeviceRequests(null);
            }
            if (\array_key_exists('KernelMemoryTCP', $data) && $data['KernelMemoryTCP'] !== null) {
                $object->setKernelMemoryTCP($data['KernelMemoryTCP']);
            }
            elseif (\array_key_exists('KernelMemoryTCP', $data) && $data['KernelMemoryTCP'] === null) {
                $object->setKernelMemoryTCP(null);
            }
            if (\array_key_exists('MemoryReservation', $data) && $data['MemoryReservation'] !== null) {
                $object->setMemoryReservation($data['MemoryReservation']);
            }
            elseif (\array_key_exists('MemoryReservation', $data) && $data['MemoryReservation'] === null) {
                $object->setMemoryReservation(null);
            }
            if (\array_key_exists('MemorySwap', $data) && $data['MemorySwap'] !== null) {
                $object->setMemorySwap($data['MemorySwap']);
            }
            elseif (\array_key_exists('MemorySwap', $data) && $data['MemorySwap'] === null) {
                $object->setMemorySwap(null);
            }
            if (\array_key_exists('MemorySwappiness', $data) && $data['MemorySwappiness'] !== null) {
                $object->setMemorySwappiness($data['MemorySwappiness']);
            }
            elseif (\array_key_exists('MemorySwappiness', $data) && $data['MemorySwappiness'] === null) {
                $object->setMemorySwappiness(null);
            }
            if (\array_key_exists('NanoCpus', $data) && $data['NanoCpus'] !== null) {
                $object->setNanoCpus($data['NanoCpus']);
            }
            elseif (\array_key_exists('NanoCpus', $data) && $data['NanoCpus'] === null) {
                $object->setNanoCpus(null);
            }
            if (\array_key_exists('OomKillDisable', $data) && $data['OomKillDisable'] !== null) {
                $object->setOomKillDisable($data['OomKillDisable']);
            }
            elseif (\array_key_exists('OomKillDisable', $data) && $data['OomKillDisable'] === null) {
                $object->setOomKillDisable(null);
            }
            if (\array_key_exists('Init', $data) && $data['Init'] !== null) {
                $object->setInit($data['Init']);
            }
            elseif (\array_key_exists('Init', $data) && $data['Init'] === null) {
                $object->setInit(null);
            }
            if (\array_key_exists('PidsLimit', $data) && $data['PidsLimit'] !== null) {
                $object->setPidsLimit($data['PidsLimit']);
            }
            elseif (\array_key_exists('PidsLimit', $data) && $data['PidsLimit'] === null) {
                $object->setPidsLimit(null);
            }
            if (\array_key_exists('Ulimits', $data) && $data['Ulimits'] !== null) {
                $values_8 = [];
                foreach ($data['Ulimits'] as $value_8) {
                    $values_8[] = $this->denormalizer->denormalize($value_8, \Docker\API\Model\ResourcesUlimitsItem::class, 'json', $context);
                }
                $object->setUlimits($values_8);
            }
            elseif (\array_key_exists('Ulimits', $data) && $data['Ulimits'] === null) {
                $object->setUlimits(null);
            }
            if (\array_key_exists('CpuCount', $data) && $data['CpuCount'] !== null) {
                $object->setCpuCount($data['CpuCount']);
            }
            elseif (\array_key_exists('CpuCount', $data) && $data['CpuCount'] === null) {
                $object->setCpuCount(null);
            }
            if (\array_key_exists('CpuPercent', $data) && $data['CpuPercent'] !== null) {
                $object->setCpuPercent($data['CpuPercent']);
            }
            elseif (\array_key_exists('CpuPercent', $data) && $data['CpuPercent'] === null) {
                $object->setCpuPercent(null);
            }
            if (\array_key_exists('IOMaximumIOps', $data) && $data['IOMaximumIOps'] !== null) {
                $object->setIOMaximumIOps($data['IOMaximumIOps']);
            }
            elseif (\array_key_exists('IOMaximumIOps', $data) && $data['IOMaximumIOps'] === null) {
                $object->setIOMaximumIOps(null);
            }
            if (\array_key_exists('IOMaximumBandwidth', $data) && $data['IOMaximumBandwidth'] !== null) {
                $object->setIOMaximumBandwidth($data['IOMaximumBandwidth']);
            }
            elseif (\array_key_exists('IOMaximumBandwidth', $data) && $data['IOMaximumBandwidth'] === null) {
                $object->setIOMaximumBandwidth(null);
            }
            if (\array_key_exists('Binds', $data) && $data['Binds'] !== null) {
                $values_9 = [];
                foreach ($data['Binds'] as $value_9) {
                    $values_9[] = $value_9;
                }
                $object->setBinds($values_9);
            }
            elseif (\array_key_exists('Binds', $data) && $data['Binds'] === null) {
                $object->setBinds(null);
            }
            if (\array_key_exists('ContainerIDFile', $data) && $data['ContainerIDFile'] !== null) {
                $object->setContainerIDFile($data['ContainerIDFile']);
            }
            elseif (\array_key_exists('ContainerIDFile', $data) && $data['ContainerIDFile'] === null) {
                $object->setContainerIDFile(null);
            }
            if (\array_key_exists('LogConfig', $data) && $data['LogConfig'] !== null) {
                $object->setLogConfig($this->denormalizer->denormalize($data['LogConfig'], \Docker\API\Model\HostConfigLogConfig::class, 'json', $context));
            }
            elseif (\array_key_exists('LogConfig', $data) && $data['LogConfig'] === null) {
                $object->setLogConfig(null);
            }
            if (\array_key_exists('NetworkMode', $data) && $data['NetworkMode'] !== null) {
                $object->setNetworkMode($data['NetworkMode']);
            }
            elseif (\array_key_exists('NetworkMode', $data) && $data['NetworkMode'] === null) {
                $object->setNetworkMode(null);
            }
            if (\array_key_exists('PortBindings', $data) && $data['PortBindings'] !== null) {
                $values_10 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['PortBindings'] as $key => $value_10) {
                    $values_11 = [];
                    foreach ($value_10 as $value_11) {
                        $values_11[] = $this->denormalizer->denormalize($value_11, \Docker\API\Model\PortBinding::class, 'json', $context);
                    }
                    $values_10[$key] = $values_11;
                }
                $object->setPortBindings($values_10);
            }
            elseif (\array_key_exists('PortBindings', $data) && $data['PortBindings'] === null) {
                $object->setPortBindings(null);
            }
            if (\array_key_exists('RestartPolicy', $data) && $data['RestartPolicy'] !== null) {
                $object->setRestartPolicy($this->denormalizer->denormalize($data['RestartPolicy'], \Docker\API\Model\RestartPolicy::class, 'json', $context));
            }
            elseif (\array_key_exists('RestartPolicy', $data) && $data['RestartPolicy'] === null) {
                $object->setRestartPolicy(null);
            }
            if (\array_key_exists('AutoRemove', $data) && $data['AutoRemove'] !== null) {
                $object->setAutoRemove($data['AutoRemove']);
            }
            elseif (\array_key_exists('AutoRemove', $data) && $data['AutoRemove'] === null) {
                $object->setAutoRemove(null);
            }
            if (\array_key_exists('VolumeDriver', $data) && $data['VolumeDriver'] !== null) {
                $object->setVolumeDriver($data['VolumeDriver']);
            }
            elseif (\array_key_exists('VolumeDriver', $data) && $data['VolumeDriver'] === null) {
                $object->setVolumeDriver(null);
            }
            if (\array_key_exists('VolumesFrom', $data) && $data['VolumesFrom'] !== null) {
                $values_12 = [];
                foreach ($data['VolumesFrom'] as $value_12) {
                    $values_12[] = $value_12;
                }
                $object->setVolumesFrom($values_12);
            }
            elseif (\array_key_exists('VolumesFrom', $data) && $data['VolumesFrom'] === null) {
                $object->setVolumesFrom(null);
            }
            if (\array_key_exists('Mounts', $data) && $data['Mounts'] !== null) {
                $values_13 = [];
                foreach ($data['Mounts'] as $value_13) {
                    $values_13[] = $this->denormalizer->denormalize($value_13, \Docker\API\Model\Mount::class, 'json', $context);
                }
                $object->setMounts($values_13);
            }
            elseif (\array_key_exists('Mounts', $data) && $data['Mounts'] === null) {
                $object->setMounts(null);
            }
            if (\array_key_exists('ConsoleSize', $data) && $data['ConsoleSize'] !== null) {
                $values_14 = [];
                foreach ($data['ConsoleSize'] as $value_14) {
                    $values_14[] = $value_14;
                }
                $object->setConsoleSize($values_14);
            }
            elseif (\array_key_exists('ConsoleSize', $data) && $data['ConsoleSize'] === null) {
                $object->setConsoleSize(null);
            }
            if (\array_key_exists('Annotations', $data) && $data['Annotations'] !== null) {
                $values_15 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Annotations'] as $key_1 => $value_15) {
                    $values_15[$key_1] = $value_15;
                }
                $object->setAnnotations($values_15);
            }
            elseif (\array_key_exists('Annotations', $data) && $data['Annotations'] === null) {
                $object->setAnnotations(null);
            }
            if (\array_key_exists('CapAdd', $data) && $data['CapAdd'] !== null) {
                $values_16 = [];
                foreach ($data['CapAdd'] as $value_16) {
                    $values_16[] = $value_16;
                }
                $object->setCapAdd($values_16);
            }
            elseif (\array_key_exists('CapAdd', $data) && $data['CapAdd'] === null) {
                $object->setCapAdd(null);
            }
            if (\array_key_exists('CapDrop', $data) && $data['CapDrop'] !== null) {
                $values_17 = [];
                foreach ($data['CapDrop'] as $value_17) {
                    $values_17[] = $value_17;
                }
                $object->setCapDrop($values_17);
            }
            elseif (\array_key_exists('CapDrop', $data) && $data['CapDrop'] === null) {
                $object->setCapDrop(null);
            }
            if (\array_key_exists('CgroupnsMode', $data) && $data['CgroupnsMode'] !== null) {
                $object->setCgroupnsMode($data['CgroupnsMode']);
            }
            elseif (\array_key_exists('CgroupnsMode', $data) && $data['CgroupnsMode'] === null) {
                $object->setCgroupnsMode(null);
            }
            if (\array_key_exists('Dns', $data) && $data['Dns'] !== null) {
                $values_18 = [];
                foreach ($data['Dns'] as $value_18) {
                    $values_18[] = $value_18;
                }
                $object->setDns($values_18);
            }
            elseif (\array_key_exists('Dns', $data) && $data['Dns'] === null) {
                $object->setDns(null);
            }
            if (\array_key_exists('DnsOptions', $data) && $data['DnsOptions'] !== null) {
                $values_19 = [];
                foreach ($data['DnsOptions'] as $value_19) {
                    $values_19[] = $value_19;
                }
                $object->setDnsOptions($values_19);
            }
            elseif (\array_key_exists('DnsOptions', $data) && $data['DnsOptions'] === null) {
                $object->setDnsOptions(null);
            }
            if (\array_key_exists('DnsSearch', $data) && $data['DnsSearch'] !== null) {
                $values_20 = [];
                foreach ($data['DnsSearch'] as $value_20) {
                    $values_20[] = $value_20;
                }
                $object->setDnsSearch($values_20);
            }
            elseif (\array_key_exists('DnsSearch', $data) && $data['DnsSearch'] === null) {
                $object->setDnsSearch(null);
            }
            if (\array_key_exists('ExtraHosts', $data) && $data['ExtraHosts'] !== null) {
                $values_21 = [];
                foreach ($data['ExtraHosts'] as $value_21) {
                    $values_21[] = $value_21;
                }
                $object->setExtraHosts($values_21);
            }
            elseif (\array_key_exists('ExtraHosts', $data) && $data['ExtraHosts'] === null) {
                $object->setExtraHosts(null);
            }
            if (\array_key_exists('GroupAdd', $data) && $data['GroupAdd'] !== null) {
                $values_22 = [];
                foreach ($data['GroupAdd'] as $value_22) {
                    $values_22[] = $value_22;
                }
                $object->setGroupAdd($values_22);
            }
            elseif (\array_key_exists('GroupAdd', $data) && $data['GroupAdd'] === null) {
                $object->setGroupAdd(null);
            }
            if (\array_key_exists('IpcMode', $data) && $data['IpcMode'] !== null) {
                $object->setIpcMode($data['IpcMode']);
            }
            elseif (\array_key_exists('IpcMode', $data) && $data['IpcMode'] === null) {
                $object->setIpcMode(null);
            }
            if (\array_key_exists('Cgroup', $data) && $data['Cgroup'] !== null) {
                $object->setCgroup($data['Cgroup']);
            }
            elseif (\array_key_exists('Cgroup', $data) && $data['Cgroup'] === null) {
                $object->setCgroup(null);
            }
            if (\array_key_exists('Links', $data) && $data['Links'] !== null) {
                $values_23 = [];
                foreach ($data['Links'] as $value_23) {
                    $values_23[] = $value_23;
                }
                $object->setLinks($values_23);
            }
            elseif (\array_key_exists('Links', $data) && $data['Links'] === null) {
                $object->setLinks(null);
            }
            if (\array_key_exists('OomScoreAdj', $data) && $data['OomScoreAdj'] !== null) {
                $object->setOomScoreAdj($data['OomScoreAdj']);
            }
            elseif (\array_key_exists('OomScoreAdj', $data) && $data['OomScoreAdj'] === null) {
                $object->setOomScoreAdj(null);
            }
            if (\array_key_exists('PidMode', $data) && $data['PidMode'] !== null) {
                $object->setPidMode($data['PidMode']);
            }
            elseif (\array_key_exists('PidMode', $data) && $data['PidMode'] === null) {
                $object->setPidMode(null);
            }
            if (\array_key_exists('Privileged', $data) && $data['Privileged'] !== null) {
                $object->setPrivileged($data['Privileged']);
            }
            elseif (\array_key_exists('Privileged', $data) && $data['Privileged'] === null) {
                $object->setPrivileged(null);
            }
            if (\array_key_exists('PublishAllPorts', $data) && $data['PublishAllPorts'] !== null) {
                $object->setPublishAllPorts($data['PublishAllPorts']);
            }
            elseif (\array_key_exists('PublishAllPorts', $data) && $data['PublishAllPorts'] === null) {
                $object->setPublishAllPorts(null);
            }
            if (\array_key_exists('ReadonlyRootfs', $data) && $data['ReadonlyRootfs'] !== null) {
                $object->setReadonlyRootfs($data['ReadonlyRootfs']);
            }
            elseif (\array_key_exists('ReadonlyRootfs', $data) && $data['ReadonlyRootfs'] === null) {
                $object->setReadonlyRootfs(null);
            }
            if (\array_key_exists('SecurityOpt', $data) && $data['SecurityOpt'] !== null) {
                $values_24 = [];
                foreach ($data['SecurityOpt'] as $value_24) {
                    $values_24[] = $value_24;
                }
                $object->setSecurityOpt($values_24);
            }
            elseif (\array_key_exists('SecurityOpt', $data) && $data['SecurityOpt'] === null) {
                $object->setSecurityOpt(null);
            }
            if (\array_key_exists('StorageOpt', $data) && $data['StorageOpt'] !== null) {
                $values_25 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['StorageOpt'] as $key_2 => $value_25) {
                    $values_25[$key_2] = $value_25;
                }
                $object->setStorageOpt($values_25);
            }
            elseif (\array_key_exists('StorageOpt', $data) && $data['StorageOpt'] === null) {
                $object->setStorageOpt(null);
            }
            if (\array_key_exists('Tmpfs', $data) && $data['Tmpfs'] !== null) {
                $values_26 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Tmpfs'] as $key_3 => $value_26) {
                    $values_26[$key_3] = $value_26;
                }
                $object->setTmpfs($values_26);
            }
            elseif (\array_key_exists('Tmpfs', $data) && $data['Tmpfs'] === null) {
                $object->setTmpfs(null);
            }
            if (\array_key_exists('UTSMode', $data) && $data['UTSMode'] !== null) {
                $object->setUTSMode($data['UTSMode']);
            }
            elseif (\array_key_exists('UTSMode', $data) && $data['UTSMode'] === null) {
                $object->setUTSMode(null);
            }
            if (\array_key_exists('UsernsMode', $data) && $data['UsernsMode'] !== null) {
                $object->setUsernsMode($data['UsernsMode']);
            }
            elseif (\array_key_exists('UsernsMode', $data) && $data['UsernsMode'] === null) {
                $object->setUsernsMode(null);
            }
            if (\array_key_exists('ShmSize', $data) && $data['ShmSize'] !== null) {
                $object->setShmSize($data['ShmSize']);
            }
            elseif (\array_key_exists('ShmSize', $data) && $data['ShmSize'] === null) {
                $object->setShmSize(null);
            }
            if (\array_key_exists('Sysctls', $data) && $data['Sysctls'] !== null) {
                $values_27 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Sysctls'] as $key_4 => $value_27) {
                    $values_27[$key_4] = $value_27;
                }
                $object->setSysctls($values_27);
            }
            elseif (\array_key_exists('Sysctls', $data) && $data['Sysctls'] === null) {
                $object->setSysctls(null);
            }
            if (\array_key_exists('Runtime', $data) && $data['Runtime'] !== null) {
                $object->setRuntime($data['Runtime']);
            }
            elseif (\array_key_exists('Runtime', $data) && $data['Runtime'] === null) {
                $object->setRuntime(null);
            }
            if (\array_key_exists('Isolation', $data) && $data['Isolation'] !== null) {
                $object->setIsolation($data['Isolation']);
            }
            elseif (\array_key_exists('Isolation', $data) && $data['Isolation'] === null) {
                $object->setIsolation(null);
            }
            if (\array_key_exists('MaskedPaths', $data) && $data['MaskedPaths'] !== null) {
                $values_28 = [];
                foreach ($data['MaskedPaths'] as $value_28) {
                    $values_28[] = $value_28;
                }
                $object->setMaskedPaths($values_28);
            }
            elseif (\array_key_exists('MaskedPaths', $data) && $data['MaskedPaths'] === null) {
                $object->setMaskedPaths(null);
            }
            if (\array_key_exists('ReadonlyPaths', $data) && $data['ReadonlyPaths'] !== null) {
                $values_29 = [];
                foreach ($data['ReadonlyPaths'] as $value_29) {
                    $values_29[] = $value_29;
                }
                $object->setReadonlyPaths($values_29);
            }
            elseif (\array_key_exists('ReadonlyPaths', $data) && $data['ReadonlyPaths'] === null) {
                $object->setReadonlyPaths(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('cpuShares') && null !== $object->getCpuShares()) {
                $data['CpuShares'] = $object->getCpuShares();
            }
            if ($object->isInitialized('memory') && null !== $object->getMemory()) {
                $data['Memory'] = $object->getMemory();
            }
            if ($object->isInitialized('cgroupParent') && null !== $object->getCgroupParent()) {
                $data['CgroupParent'] = $object->getCgroupParent();
            }
            if ($object->isInitialized('blkioWeight') && null !== $object->getBlkioWeight()) {
                $data['BlkioWeight'] = $object->getBlkioWeight();
            }
            if ($object->isInitialized('blkioWeightDevice') && null !== $object->getBlkioWeightDevice()) {
                $values = [];
                foreach ($object->getBlkioWeightDevice() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['BlkioWeightDevice'] = $values;
            }
            if ($object->isInitialized('blkioDeviceReadBps') && null !== $object->getBlkioDeviceReadBps()) {
                $values_1 = [];
                foreach ($object->getBlkioDeviceReadBps() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['BlkioDeviceReadBps'] = $values_1;
            }
            if ($object->isInitialized('blkioDeviceWriteBps') && null !== $object->getBlkioDeviceWriteBps()) {
                $values_2 = [];
                foreach ($object->getBlkioDeviceWriteBps() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['BlkioDeviceWriteBps'] = $values_2;
            }
            if ($object->isInitialized('blkioDeviceReadIOps') && null !== $object->getBlkioDeviceReadIOps()) {
                $values_3 = [];
                foreach ($object->getBlkioDeviceReadIOps() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['BlkioDeviceReadIOps'] = $values_3;
            }
            if ($object->isInitialized('blkioDeviceWriteIOps') && null !== $object->getBlkioDeviceWriteIOps()) {
                $values_4 = [];
                foreach ($object->getBlkioDeviceWriteIOps() as $value_4) {
                    $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $data['BlkioDeviceWriteIOps'] = $values_4;
            }
            if ($object->isInitialized('cpuPeriod') && null !== $object->getCpuPeriod()) {
                $data['CpuPeriod'] = $object->getCpuPeriod();
            }
            if ($object->isInitialized('cpuQuota') && null !== $object->getCpuQuota()) {
                $data['CpuQuota'] = $object->getCpuQuota();
            }
            if ($object->isInitialized('cpuRealtimePeriod') && null !== $object->getCpuRealtimePeriod()) {
                $data['CpuRealtimePeriod'] = $object->getCpuRealtimePeriod();
            }
            if ($object->isInitialized('cpuRealtimeRuntime') && null !== $object->getCpuRealtimeRuntime()) {
                $data['CpuRealtimeRuntime'] = $object->getCpuRealtimeRuntime();
            }
            if ($object->isInitialized('cpusetCpus') && null !== $object->getCpusetCpus()) {
                $data['CpusetCpus'] = $object->getCpusetCpus();
            }
            if ($object->isInitialized('cpusetMems') && null !== $object->getCpusetMems()) {
                $data['CpusetMems'] = $object->getCpusetMems();
            }
            if ($object->isInitialized('devices') && null !== $object->getDevices()) {
                $values_5 = [];
                foreach ($object->getDevices() as $value_5) {
                    $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
                }
                $data['Devices'] = $values_5;
            }
            if ($object->isInitialized('deviceCgroupRules') && null !== $object->getDeviceCgroupRules()) {
                $values_6 = [];
                foreach ($object->getDeviceCgroupRules() as $value_6) {
                    $values_6[] = $value_6;
                }
                $data['DeviceCgroupRules'] = $values_6;
            }
            if ($object->isInitialized('deviceRequests') && null !== $object->getDeviceRequests()) {
                $values_7 = [];
                foreach ($object->getDeviceRequests() as $value_7) {
                    $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
                }
                $data['DeviceRequests'] = $values_7;
            }
            if ($object->isInitialized('kernelMemoryTCP') && null !== $object->getKernelMemoryTCP()) {
                $data['KernelMemoryTCP'] = $object->getKernelMemoryTCP();
            }
            if ($object->isInitialized('memoryReservation') && null !== $object->getMemoryReservation()) {
                $data['MemoryReservation'] = $object->getMemoryReservation();
            }
            if ($object->isInitialized('memorySwap') && null !== $object->getMemorySwap()) {
                $data['MemorySwap'] = $object->getMemorySwap();
            }
            if ($object->isInitialized('memorySwappiness') && null !== $object->getMemorySwappiness()) {
                $data['MemorySwappiness'] = $object->getMemorySwappiness();
            }
            if ($object->isInitialized('nanoCpus') && null !== $object->getNanoCpus()) {
                $data['NanoCpus'] = $object->getNanoCpus();
            }
            if ($object->isInitialized('oomKillDisable') && null !== $object->getOomKillDisable()) {
                $data['OomKillDisable'] = $object->getOomKillDisable();
            }
            if ($object->isInitialized('init') && null !== $object->getInit()) {
                $data['Init'] = $object->getInit();
            }
            if ($object->isInitialized('pidsLimit') && null !== $object->getPidsLimit()) {
                $data['PidsLimit'] = $object->getPidsLimit();
            }
            if ($object->isInitialized('ulimits') && null !== $object->getUlimits()) {
                $values_8 = [];
                foreach ($object->getUlimits() as $value_8) {
                    $values_8[] = $this->normalizer->normalize($value_8, 'json', $context);
                }
                $data['Ulimits'] = $values_8;
            }
            if ($object->isInitialized('cpuCount') && null !== $object->getCpuCount()) {
                $data['CpuCount'] = $object->getCpuCount();
            }
            if ($object->isInitialized('cpuPercent') && null !== $object->getCpuPercent()) {
                $data['CpuPercent'] = $object->getCpuPercent();
            }
            if ($object->isInitialized('iOMaximumIOps') && null !== $object->getIOMaximumIOps()) {
                $data['IOMaximumIOps'] = $object->getIOMaximumIOps();
            }
            if ($object->isInitialized('iOMaximumBandwidth') && null !== $object->getIOMaximumBandwidth()) {
                $data['IOMaximumBandwidth'] = $object->getIOMaximumBandwidth();
            }
            if ($object->isInitialized('binds') && null !== $object->getBinds()) {
                $values_9 = [];
                foreach ($object->getBinds() as $value_9) {
                    $values_9[] = $value_9;
                }
                $data['Binds'] = $values_9;
            }
            if ($object->isInitialized('containerIDFile') && null !== $object->getContainerIDFile()) {
                $data['ContainerIDFile'] = $object->getContainerIDFile();
            }
            if ($object->isInitialized('logConfig') && null !== $object->getLogConfig()) {
                $data['LogConfig'] = $this->normalizer->normalize($object->getLogConfig(), 'json', $context);
            }
            if ($object->isInitialized('networkMode') && null !== $object->getNetworkMode()) {
                $data['NetworkMode'] = $object->getNetworkMode();
            }
            if ($object->isInitialized('portBindings') && null !== $object->getPortBindings()) {
                $values_10 = [];
                foreach ($object->getPortBindings() as $key => $value_10) {
                    $values_11 = [];
                    foreach ($value_10 as $value_11) {
                        $values_11[] = $this->normalizer->normalize($value_11, 'json', $context);
                    }
                    $values_10[$key] = $values_11;
                }
                $data['PortBindings'] = $values_10;
            }
            if ($object->isInitialized('restartPolicy') && null !== $object->getRestartPolicy()) {
                $data['RestartPolicy'] = $this->normalizer->normalize($object->getRestartPolicy(), 'json', $context);
            }
            if ($object->isInitialized('autoRemove') && null !== $object->getAutoRemove()) {
                $data['AutoRemove'] = $object->getAutoRemove();
            }
            if ($object->isInitialized('volumeDriver') && null !== $object->getVolumeDriver()) {
                $data['VolumeDriver'] = $object->getVolumeDriver();
            }
            if ($object->isInitialized('volumesFrom') && null !== $object->getVolumesFrom()) {
                $values_12 = [];
                foreach ($object->getVolumesFrom() as $value_12) {
                    $values_12[] = $value_12;
                }
                $data['VolumesFrom'] = $values_12;
            }
            if ($object->isInitialized('mounts') && null !== $object->getMounts()) {
                $values_13 = [];
                foreach ($object->getMounts() as $value_13) {
                    $values_13[] = $this->normalizer->normalize($value_13, 'json', $context);
                }
                $data['Mounts'] = $values_13;
            }
            if ($object->isInitialized('consoleSize') && null !== $object->getConsoleSize()) {
                $values_14 = [];
                foreach ($object->getConsoleSize() as $value_14) {
                    $values_14[] = $value_14;
                }
                $data['ConsoleSize'] = $values_14;
            }
            if ($object->isInitialized('annotations') && null !== $object->getAnnotations()) {
                $values_15 = [];
                foreach ($object->getAnnotations() as $key_1 => $value_15) {
                    $values_15[$key_1] = $value_15;
                }
                $data['Annotations'] = $values_15;
            }
            if ($object->isInitialized('capAdd') && null !== $object->getCapAdd()) {
                $values_16 = [];
                foreach ($object->getCapAdd() as $value_16) {
                    $values_16[] = $value_16;
                }
                $data['CapAdd'] = $values_16;
            }
            if ($object->isInitialized('capDrop') && null !== $object->getCapDrop()) {
                $values_17 = [];
                foreach ($object->getCapDrop() as $value_17) {
                    $values_17[] = $value_17;
                }
                $data['CapDrop'] = $values_17;
            }
            if ($object->isInitialized('cgroupnsMode') && null !== $object->getCgroupnsMode()) {
                $data['CgroupnsMode'] = $object->getCgroupnsMode();
            }
            if ($object->isInitialized('dns') && null !== $object->getDns()) {
                $values_18 = [];
                foreach ($object->getDns() as $value_18) {
                    $values_18[] = $value_18;
                }
                $data['Dns'] = $values_18;
            }
            if ($object->isInitialized('dnsOptions') && null !== $object->getDnsOptions()) {
                $values_19 = [];
                foreach ($object->getDnsOptions() as $value_19) {
                    $values_19[] = $value_19;
                }
                $data['DnsOptions'] = $values_19;
            }
            if ($object->isInitialized('dnsSearch') && null !== $object->getDnsSearch()) {
                $values_20 = [];
                foreach ($object->getDnsSearch() as $value_20) {
                    $values_20[] = $value_20;
                }
                $data['DnsSearch'] = $values_20;
            }
            if ($object->isInitialized('extraHosts') && null !== $object->getExtraHosts()) {
                $values_21 = [];
                foreach ($object->getExtraHosts() as $value_21) {
                    $values_21[] = $value_21;
                }
                $data['ExtraHosts'] = $values_21;
            }
            if ($object->isInitialized('groupAdd') && null !== $object->getGroupAdd()) {
                $values_22 = [];
                foreach ($object->getGroupAdd() as $value_22) {
                    $values_22[] = $value_22;
                }
                $data['GroupAdd'] = $values_22;
            }
            if ($object->isInitialized('ipcMode') && null !== $object->getIpcMode()) {
                $data['IpcMode'] = $object->getIpcMode();
            }
            if ($object->isInitialized('cgroup') && null !== $object->getCgroup()) {
                $data['Cgroup'] = $object->getCgroup();
            }
            if ($object->isInitialized('links') && null !== $object->getLinks()) {
                $values_23 = [];
                foreach ($object->getLinks() as $value_23) {
                    $values_23[] = $value_23;
                }
                $data['Links'] = $values_23;
            }
            if ($object->isInitialized('oomScoreAdj') && null !== $object->getOomScoreAdj()) {
                $data['OomScoreAdj'] = $object->getOomScoreAdj();
            }
            if ($object->isInitialized('pidMode') && null !== $object->getPidMode()) {
                $data['PidMode'] = $object->getPidMode();
            }
            if ($object->isInitialized('privileged') && null !== $object->getPrivileged()) {
                $data['Privileged'] = $object->getPrivileged();
            }
            if ($object->isInitialized('publishAllPorts') && null !== $object->getPublishAllPorts()) {
                $data['PublishAllPorts'] = $object->getPublishAllPorts();
            }
            if ($object->isInitialized('readonlyRootfs') && null !== $object->getReadonlyRootfs()) {
                $data['ReadonlyRootfs'] = $object->getReadonlyRootfs();
            }
            if ($object->isInitialized('securityOpt') && null !== $object->getSecurityOpt()) {
                $values_24 = [];
                foreach ($object->getSecurityOpt() as $value_24) {
                    $values_24[] = $value_24;
                }
                $data['SecurityOpt'] = $values_24;
            }
            if ($object->isInitialized('storageOpt') && null !== $object->getStorageOpt()) {
                $values_25 = [];
                foreach ($object->getStorageOpt() as $key_2 => $value_25) {
                    $values_25[$key_2] = $value_25;
                }
                $data['StorageOpt'] = $values_25;
            }
            if ($object->isInitialized('tmpfs') && null !== $object->getTmpfs()) {
                $values_26 = [];
                foreach ($object->getTmpfs() as $key_3 => $value_26) {
                    $values_26[$key_3] = $value_26;
                }
                $data['Tmpfs'] = $values_26;
            }
            if ($object->isInitialized('uTSMode') && null !== $object->getUTSMode()) {
                $data['UTSMode'] = $object->getUTSMode();
            }
            if ($object->isInitialized('usernsMode') && null !== $object->getUsernsMode()) {
                $data['UsernsMode'] = $object->getUsernsMode();
            }
            if ($object->isInitialized('shmSize') && null !== $object->getShmSize()) {
                $data['ShmSize'] = $object->getShmSize();
            }
            if ($object->isInitialized('sysctls') && null !== $object->getSysctls()) {
                $values_27 = [];
                foreach ($object->getSysctls() as $key_4 => $value_27) {
                    $values_27[$key_4] = $value_27;
                }
                $data['Sysctls'] = $values_27;
            }
            if ($object->isInitialized('runtime') && null !== $object->getRuntime()) {
                $data['Runtime'] = $object->getRuntime();
            }
            if ($object->isInitialized('isolation') && null !== $object->getIsolation()) {
                $data['Isolation'] = $object->getIsolation();
            }
            if ($object->isInitialized('maskedPaths') && null !== $object->getMaskedPaths()) {
                $values_28 = [];
                foreach ($object->getMaskedPaths() as $value_28) {
                    $values_28[] = $value_28;
                }
                $data['MaskedPaths'] = $values_28;
            }
            if ($object->isInitialized('readonlyPaths') && null !== $object->getReadonlyPaths()) {
                $values_29 = [];
                foreach ($object->getReadonlyPaths() as $value_29) {
                    $values_29[] = $value_29;
                }
                $data['ReadonlyPaths'] = $values_29;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\HostConfig::class => false];
        }
    }
} else {
    class HostConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\HostConfig::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\HostConfig::class;
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\HostConfig();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('CpuShares', $data) && $data['CpuShares'] !== null) {
                $object->setCpuShares($data['CpuShares']);
            }
            elseif (\array_key_exists('CpuShares', $data) && $data['CpuShares'] === null) {
                $object->setCpuShares(null);
            }
            if (\array_key_exists('Memory', $data) && $data['Memory'] !== null) {
                $object->setMemory($data['Memory']);
            }
            elseif (\array_key_exists('Memory', $data) && $data['Memory'] === null) {
                $object->setMemory(null);
            }
            if (\array_key_exists('CgroupParent', $data) && $data['CgroupParent'] !== null) {
                $object->setCgroupParent($data['CgroupParent']);
            }
            elseif (\array_key_exists('CgroupParent', $data) && $data['CgroupParent'] === null) {
                $object->setCgroupParent(null);
            }
            if (\array_key_exists('BlkioWeight', $data) && $data['BlkioWeight'] !== null) {
                $object->setBlkioWeight($data['BlkioWeight']);
            }
            elseif (\array_key_exists('BlkioWeight', $data) && $data['BlkioWeight'] === null) {
                $object->setBlkioWeight(null);
            }
            if (\array_key_exists('BlkioWeightDevice', $data) && $data['BlkioWeightDevice'] !== null) {
                $values = [];
                foreach ($data['BlkioWeightDevice'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Docker\API\Model\ResourcesBlkioWeightDeviceItem::class, 'json', $context);
                }
                $object->setBlkioWeightDevice($values);
            }
            elseif (\array_key_exists('BlkioWeightDevice', $data) && $data['BlkioWeightDevice'] === null) {
                $object->setBlkioWeightDevice(null);
            }
            if (\array_key_exists('BlkioDeviceReadBps', $data) && $data['BlkioDeviceReadBps'] !== null) {
                $values_1 = [];
                foreach ($data['BlkioDeviceReadBps'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \Docker\API\Model\ThrottleDevice::class, 'json', $context);
                }
                $object->setBlkioDeviceReadBps($values_1);
            }
            elseif (\array_key_exists('BlkioDeviceReadBps', $data) && $data['BlkioDeviceReadBps'] === null) {
                $object->setBlkioDeviceReadBps(null);
            }
            if (\array_key_exists('BlkioDeviceWriteBps', $data) && $data['BlkioDeviceWriteBps'] !== null) {
                $values_2 = [];
                foreach ($data['BlkioDeviceWriteBps'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \Docker\API\Model\ThrottleDevice::class, 'json', $context);
                }
                $object->setBlkioDeviceWriteBps($values_2);
            }
            elseif (\array_key_exists('BlkioDeviceWriteBps', $data) && $data['BlkioDeviceWriteBps'] === null) {
                $object->setBlkioDeviceWriteBps(null);
            }
            if (\array_key_exists('BlkioDeviceReadIOps', $data) && $data['BlkioDeviceReadIOps'] !== null) {
                $values_3 = [];
                foreach ($data['BlkioDeviceReadIOps'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, \Docker\API\Model\ThrottleDevice::class, 'json', $context);
                }
                $object->setBlkioDeviceReadIOps($values_3);
            }
            elseif (\array_key_exists('BlkioDeviceReadIOps', $data) && $data['BlkioDeviceReadIOps'] === null) {
                $object->setBlkioDeviceReadIOps(null);
            }
            if (\array_key_exists('BlkioDeviceWriteIOps', $data) && $data['BlkioDeviceWriteIOps'] !== null) {
                $values_4 = [];
                foreach ($data['BlkioDeviceWriteIOps'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, \Docker\API\Model\ThrottleDevice::class, 'json', $context);
                }
                $object->setBlkioDeviceWriteIOps($values_4);
            }
            elseif (\array_key_exists('BlkioDeviceWriteIOps', $data) && $data['BlkioDeviceWriteIOps'] === null) {
                $object->setBlkioDeviceWriteIOps(null);
            }
            if (\array_key_exists('CpuPeriod', $data) && $data['CpuPeriod'] !== null) {
                $object->setCpuPeriod($data['CpuPeriod']);
            }
            elseif (\array_key_exists('CpuPeriod', $data) && $data['CpuPeriod'] === null) {
                $object->setCpuPeriod(null);
            }
            if (\array_key_exists('CpuQuota', $data) && $data['CpuQuota'] !== null) {
                $object->setCpuQuota($data['CpuQuota']);
            }
            elseif (\array_key_exists('CpuQuota', $data) && $data['CpuQuota'] === null) {
                $object->setCpuQuota(null);
            }
            if (\array_key_exists('CpuRealtimePeriod', $data) && $data['CpuRealtimePeriod'] !== null) {
                $object->setCpuRealtimePeriod($data['CpuRealtimePeriod']);
            }
            elseif (\array_key_exists('CpuRealtimePeriod', $data) && $data['CpuRealtimePeriod'] === null) {
                $object->setCpuRealtimePeriod(null);
            }
            if (\array_key_exists('CpuRealtimeRuntime', $data) && $data['CpuRealtimeRuntime'] !== null) {
                $object->setCpuRealtimeRuntime($data['CpuRealtimeRuntime']);
            }
            elseif (\array_key_exists('CpuRealtimeRuntime', $data) && $data['CpuRealtimeRuntime'] === null) {
                $object->setCpuRealtimeRuntime(null);
            }
            if (\array_key_exists('CpusetCpus', $data) && $data['CpusetCpus'] !== null) {
                $object->setCpusetCpus($data['CpusetCpus']);
            }
            elseif (\array_key_exists('CpusetCpus', $data) && $data['CpusetCpus'] === null) {
                $object->setCpusetCpus(null);
            }
            if (\array_key_exists('CpusetMems', $data) && $data['CpusetMems'] !== null) {
                $object->setCpusetMems($data['CpusetMems']);
            }
            elseif (\array_key_exists('CpusetMems', $data) && $data['CpusetMems'] === null) {
                $object->setCpusetMems(null);
            }
            if (\array_key_exists('Devices', $data) && $data['Devices'] !== null) {
                $values_5 = [];
                foreach ($data['Devices'] as $value_5) {
                    $values_5[] = $this->denormalizer->denormalize($value_5, \Docker\API\Model\DeviceMapping::class, 'json', $context);
                }
                $object->setDevices($values_5);
            }
            elseif (\array_key_exists('Devices', $data) && $data['Devices'] === null) {
                $object->setDevices(null);
            }
            if (\array_key_exists('DeviceCgroupRules', $data) && $data['DeviceCgroupRules'] !== null) {
                $values_6 = [];
                foreach ($data['DeviceCgroupRules'] as $value_6) {
                    $values_6[] = $value_6;
                }
                $object->setDeviceCgroupRules($values_6);
            }
            elseif (\array_key_exists('DeviceCgroupRules', $data) && $data['DeviceCgroupRules'] === null) {
                $object->setDeviceCgroupRules(null);
            }
            if (\array_key_exists('DeviceRequests', $data) && $data['DeviceRequests'] !== null) {
                $values_7 = [];
                foreach ($data['DeviceRequests'] as $value_7) {
                    $values_7[] = $this->denormalizer->denormalize($value_7, \Docker\API\Model\DeviceRequest::class, 'json', $context);
                }
                $object->setDeviceRequests($values_7);
            }
            elseif (\array_key_exists('DeviceRequests', $data) && $data['DeviceRequests'] === null) {
                $object->setDeviceRequests(null);
            }
            if (\array_key_exists('KernelMemoryTCP', $data) && $data['KernelMemoryTCP'] !== null) {
                $object->setKernelMemoryTCP($data['KernelMemoryTCP']);
            }
            elseif (\array_key_exists('KernelMemoryTCP', $data) && $data['KernelMemoryTCP'] === null) {
                $object->setKernelMemoryTCP(null);
            }
            if (\array_key_exists('MemoryReservation', $data) && $data['MemoryReservation'] !== null) {
                $object->setMemoryReservation($data['MemoryReservation']);
            }
            elseif (\array_key_exists('MemoryReservation', $data) && $data['MemoryReservation'] === null) {
                $object->setMemoryReservation(null);
            }
            if (\array_key_exists('MemorySwap', $data) && $data['MemorySwap'] !== null) {
                $object->setMemorySwap($data['MemorySwap']);
            }
            elseif (\array_key_exists('MemorySwap', $data) && $data['MemorySwap'] === null) {
                $object->setMemorySwap(null);
            }
            if (\array_key_exists('MemorySwappiness', $data) && $data['MemorySwappiness'] !== null) {
                $object->setMemorySwappiness($data['MemorySwappiness']);
            }
            elseif (\array_key_exists('MemorySwappiness', $data) && $data['MemorySwappiness'] === null) {
                $object->setMemorySwappiness(null);
            }
            if (\array_key_exists('NanoCpus', $data) && $data['NanoCpus'] !== null) {
                $object->setNanoCpus($data['NanoCpus']);
            }
            elseif (\array_key_exists('NanoCpus', $data) && $data['NanoCpus'] === null) {
                $object->setNanoCpus(null);
            }
            if (\array_key_exists('OomKillDisable', $data) && $data['OomKillDisable'] !== null) {
                $object->setOomKillDisable($data['OomKillDisable']);
            }
            elseif (\array_key_exists('OomKillDisable', $data) && $data['OomKillDisable'] === null) {
                $object->setOomKillDisable(null);
            }
            if (\array_key_exists('Init', $data) && $data['Init'] !== null) {
                $object->setInit($data['Init']);
            }
            elseif (\array_key_exists('Init', $data) && $data['Init'] === null) {
                $object->setInit(null);
            }
            if (\array_key_exists('PidsLimit', $data) && $data['PidsLimit'] !== null) {
                $object->setPidsLimit($data['PidsLimit']);
            }
            elseif (\array_key_exists('PidsLimit', $data) && $data['PidsLimit'] === null) {
                $object->setPidsLimit(null);
            }
            if (\array_key_exists('Ulimits', $data) && $data['Ulimits'] !== null) {
                $values_8 = [];
                foreach ($data['Ulimits'] as $value_8) {
                    $values_8[] = $this->denormalizer->denormalize($value_8, \Docker\API\Model\ResourcesUlimitsItem::class, 'json', $context);
                }
                $object->setUlimits($values_8);
            }
            elseif (\array_key_exists('Ulimits', $data) && $data['Ulimits'] === null) {
                $object->setUlimits(null);
            }
            if (\array_key_exists('CpuCount', $data) && $data['CpuCount'] !== null) {
                $object->setCpuCount($data['CpuCount']);
            }
            elseif (\array_key_exists('CpuCount', $data) && $data['CpuCount'] === null) {
                $object->setCpuCount(null);
            }
            if (\array_key_exists('CpuPercent', $data) && $data['CpuPercent'] !== null) {
                $object->setCpuPercent($data['CpuPercent']);
            }
            elseif (\array_key_exists('CpuPercent', $data) && $data['CpuPercent'] === null) {
                $object->setCpuPercent(null);
            }
            if (\array_key_exists('IOMaximumIOps', $data) && $data['IOMaximumIOps'] !== null) {
                $object->setIOMaximumIOps($data['IOMaximumIOps']);
            }
            elseif (\array_key_exists('IOMaximumIOps', $data) && $data['IOMaximumIOps'] === null) {
                $object->setIOMaximumIOps(null);
            }
            if (\array_key_exists('IOMaximumBandwidth', $data) && $data['IOMaximumBandwidth'] !== null) {
                $object->setIOMaximumBandwidth($data['IOMaximumBandwidth']);
            }
            elseif (\array_key_exists('IOMaximumBandwidth', $data) && $data['IOMaximumBandwidth'] === null) {
                $object->setIOMaximumBandwidth(null);
            }
            if (\array_key_exists('Binds', $data) && $data['Binds'] !== null) {
                $values_9 = [];
                foreach ($data['Binds'] as $value_9) {
                    $values_9[] = $value_9;
                }
                $object->setBinds($values_9);
            }
            elseif (\array_key_exists('Binds', $data) && $data['Binds'] === null) {
                $object->setBinds(null);
            }
            if (\array_key_exists('ContainerIDFile', $data) && $data['ContainerIDFile'] !== null) {
                $object->setContainerIDFile($data['ContainerIDFile']);
            }
            elseif (\array_key_exists('ContainerIDFile', $data) && $data['ContainerIDFile'] === null) {
                $object->setContainerIDFile(null);
            }
            if (\array_key_exists('LogConfig', $data) && $data['LogConfig'] !== null) {
                $object->setLogConfig($this->denormalizer->denormalize($data['LogConfig'], \Docker\API\Model\HostConfigLogConfig::class, 'json', $context));
            }
            elseif (\array_key_exists('LogConfig', $data) && $data['LogConfig'] === null) {
                $object->setLogConfig(null);
            }
            if (\array_key_exists('NetworkMode', $data) && $data['NetworkMode'] !== null) {
                $object->setNetworkMode($data['NetworkMode']);
            }
            elseif (\array_key_exists('NetworkMode', $data) && $data['NetworkMode'] === null) {
                $object->setNetworkMode(null);
            }
            if (\array_key_exists('PortBindings', $data) && $data['PortBindings'] !== null) {
                $values_10 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['PortBindings'] as $key => $value_10) {
                    $values_11 = [];
                    foreach ($value_10 as $value_11) {
                        $values_11[] = $this->denormalizer->denormalize($value_11, \Docker\API\Model\PortBinding::class, 'json', $context);
                    }
                    $values_10[$key] = $values_11;
                }
                $object->setPortBindings($values_10);
            }
            elseif (\array_key_exists('PortBindings', $data) && $data['PortBindings'] === null) {
                $object->setPortBindings(null);
            }
            if (\array_key_exists('RestartPolicy', $data) && $data['RestartPolicy'] !== null) {
                $object->setRestartPolicy($this->denormalizer->denormalize($data['RestartPolicy'], \Docker\API\Model\RestartPolicy::class, 'json', $context));
            }
            elseif (\array_key_exists('RestartPolicy', $data) && $data['RestartPolicy'] === null) {
                $object->setRestartPolicy(null);
            }
            if (\array_key_exists('AutoRemove', $data) && $data['AutoRemove'] !== null) {
                $object->setAutoRemove($data['AutoRemove']);
            }
            elseif (\array_key_exists('AutoRemove', $data) && $data['AutoRemove'] === null) {
                $object->setAutoRemove(null);
            }
            if (\array_key_exists('VolumeDriver', $data) && $data['VolumeDriver'] !== null) {
                $object->setVolumeDriver($data['VolumeDriver']);
            }
            elseif (\array_key_exists('VolumeDriver', $data) && $data['VolumeDriver'] === null) {
                $object->setVolumeDriver(null);
            }
            if (\array_key_exists('VolumesFrom', $data) && $data['VolumesFrom'] !== null) {
                $values_12 = [];
                foreach ($data['VolumesFrom'] as $value_12) {
                    $values_12[] = $value_12;
                }
                $object->setVolumesFrom($values_12);
            }
            elseif (\array_key_exists('VolumesFrom', $data) && $data['VolumesFrom'] === null) {
                $object->setVolumesFrom(null);
            }
            if (\array_key_exists('Mounts', $data) && $data['Mounts'] !== null) {
                $values_13 = [];
                foreach ($data['Mounts'] as $value_13) {
                    $values_13[] = $this->denormalizer->denormalize($value_13, \Docker\API\Model\Mount::class, 'json', $context);
                }
                $object->setMounts($values_13);
            }
            elseif (\array_key_exists('Mounts', $data) && $data['Mounts'] === null) {
                $object->setMounts(null);
            }
            if (\array_key_exists('ConsoleSize', $data) && $data['ConsoleSize'] !== null) {
                $values_14 = [];
                foreach ($data['ConsoleSize'] as $value_14) {
                    $values_14[] = $value_14;
                }
                $object->setConsoleSize($values_14);
            }
            elseif (\array_key_exists('ConsoleSize', $data) && $data['ConsoleSize'] === null) {
                $object->setConsoleSize(null);
            }
            if (\array_key_exists('Annotations', $data) && $data['Annotations'] !== null) {
                $values_15 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Annotations'] as $key_1 => $value_15) {
                    $values_15[$key_1] = $value_15;
                }
                $object->setAnnotations($values_15);
            }
            elseif (\array_key_exists('Annotations', $data) && $data['Annotations'] === null) {
                $object->setAnnotations(null);
            }
            if (\array_key_exists('CapAdd', $data) && $data['CapAdd'] !== null) {
                $values_16 = [];
                foreach ($data['CapAdd'] as $value_16) {
                    $values_16[] = $value_16;
                }
                $object->setCapAdd($values_16);
            }
            elseif (\array_key_exists('CapAdd', $data) && $data['CapAdd'] === null) {
                $object->setCapAdd(null);
            }
            if (\array_key_exists('CapDrop', $data) && $data['CapDrop'] !== null) {
                $values_17 = [];
                foreach ($data['CapDrop'] as $value_17) {
                    $values_17[] = $value_17;
                }
                $object->setCapDrop($values_17);
            }
            elseif (\array_key_exists('CapDrop', $data) && $data['CapDrop'] === null) {
                $object->setCapDrop(null);
            }
            if (\array_key_exists('CgroupnsMode', $data) && $data['CgroupnsMode'] !== null) {
                $object->setCgroupnsMode($data['CgroupnsMode']);
            }
            elseif (\array_key_exists('CgroupnsMode', $data) && $data['CgroupnsMode'] === null) {
                $object->setCgroupnsMode(null);
            }
            if (\array_key_exists('Dns', $data) && $data['Dns'] !== null) {
                $values_18 = [];
                foreach ($data['Dns'] as $value_18) {
                    $values_18[] = $value_18;
                }
                $object->setDns($values_18);
            }
            elseif (\array_key_exists('Dns', $data) && $data['Dns'] === null) {
                $object->setDns(null);
            }
            if (\array_key_exists('DnsOptions', $data) && $data['DnsOptions'] !== null) {
                $values_19 = [];
                foreach ($data['DnsOptions'] as $value_19) {
                    $values_19[] = $value_19;
                }
                $object->setDnsOptions($values_19);
            }
            elseif (\array_key_exists('DnsOptions', $data) && $data['DnsOptions'] === null) {
                $object->setDnsOptions(null);
            }
            if (\array_key_exists('DnsSearch', $data) && $data['DnsSearch'] !== null) {
                $values_20 = [];
                foreach ($data['DnsSearch'] as $value_20) {
                    $values_20[] = $value_20;
                }
                $object->setDnsSearch($values_20);
            }
            elseif (\array_key_exists('DnsSearch', $data) && $data['DnsSearch'] === null) {
                $object->setDnsSearch(null);
            }
            if (\array_key_exists('ExtraHosts', $data) && $data['ExtraHosts'] !== null) {
                $values_21 = [];
                foreach ($data['ExtraHosts'] as $value_21) {
                    $values_21[] = $value_21;
                }
                $object->setExtraHosts($values_21);
            }
            elseif (\array_key_exists('ExtraHosts', $data) && $data['ExtraHosts'] === null) {
                $object->setExtraHosts(null);
            }
            if (\array_key_exists('GroupAdd', $data) && $data['GroupAdd'] !== null) {
                $values_22 = [];
                foreach ($data['GroupAdd'] as $value_22) {
                    $values_22[] = $value_22;
                }
                $object->setGroupAdd($values_22);
            }
            elseif (\array_key_exists('GroupAdd', $data) && $data['GroupAdd'] === null) {
                $object->setGroupAdd(null);
            }
            if (\array_key_exists('IpcMode', $data) && $data['IpcMode'] !== null) {
                $object->setIpcMode($data['IpcMode']);
            }
            elseif (\array_key_exists('IpcMode', $data) && $data['IpcMode'] === null) {
                $object->setIpcMode(null);
            }
            if (\array_key_exists('Cgroup', $data) && $data['Cgroup'] !== null) {
                $object->setCgroup($data['Cgroup']);
            }
            elseif (\array_key_exists('Cgroup', $data) && $data['Cgroup'] === null) {
                $object->setCgroup(null);
            }
            if (\array_key_exists('Links', $data) && $data['Links'] !== null) {
                $values_23 = [];
                foreach ($data['Links'] as $value_23) {
                    $values_23[] = $value_23;
                }
                $object->setLinks($values_23);
            }
            elseif (\array_key_exists('Links', $data) && $data['Links'] === null) {
                $object->setLinks(null);
            }
            if (\array_key_exists('OomScoreAdj', $data) && $data['OomScoreAdj'] !== null) {
                $object->setOomScoreAdj($data['OomScoreAdj']);
            }
            elseif (\array_key_exists('OomScoreAdj', $data) && $data['OomScoreAdj'] === null) {
                $object->setOomScoreAdj(null);
            }
            if (\array_key_exists('PidMode', $data) && $data['PidMode'] !== null) {
                $object->setPidMode($data['PidMode']);
            }
            elseif (\array_key_exists('PidMode', $data) && $data['PidMode'] === null) {
                $object->setPidMode(null);
            }
            if (\array_key_exists('Privileged', $data) && $data['Privileged'] !== null) {
                $object->setPrivileged($data['Privileged']);
            }
            elseif (\array_key_exists('Privileged', $data) && $data['Privileged'] === null) {
                $object->setPrivileged(null);
            }
            if (\array_key_exists('PublishAllPorts', $data) && $data['PublishAllPorts'] !== null) {
                $object->setPublishAllPorts($data['PublishAllPorts']);
            }
            elseif (\array_key_exists('PublishAllPorts', $data) && $data['PublishAllPorts'] === null) {
                $object->setPublishAllPorts(null);
            }
            if (\array_key_exists('ReadonlyRootfs', $data) && $data['ReadonlyRootfs'] !== null) {
                $object->setReadonlyRootfs($data['ReadonlyRootfs']);
            }
            elseif (\array_key_exists('ReadonlyRootfs', $data) && $data['ReadonlyRootfs'] === null) {
                $object->setReadonlyRootfs(null);
            }
            if (\array_key_exists('SecurityOpt', $data) && $data['SecurityOpt'] !== null) {
                $values_24 = [];
                foreach ($data['SecurityOpt'] as $value_24) {
                    $values_24[] = $value_24;
                }
                $object->setSecurityOpt($values_24);
            }
            elseif (\array_key_exists('SecurityOpt', $data) && $data['SecurityOpt'] === null) {
                $object->setSecurityOpt(null);
            }
            if (\array_key_exists('StorageOpt', $data) && $data['StorageOpt'] !== null) {
                $values_25 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['StorageOpt'] as $key_2 => $value_25) {
                    $values_25[$key_2] = $value_25;
                }
                $object->setStorageOpt($values_25);
            }
            elseif (\array_key_exists('StorageOpt', $data) && $data['StorageOpt'] === null) {
                $object->setStorageOpt(null);
            }
            if (\array_key_exists('Tmpfs', $data) && $data['Tmpfs'] !== null) {
                $values_26 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Tmpfs'] as $key_3 => $value_26) {
                    $values_26[$key_3] = $value_26;
                }
                $object->setTmpfs($values_26);
            }
            elseif (\array_key_exists('Tmpfs', $data) && $data['Tmpfs'] === null) {
                $object->setTmpfs(null);
            }
            if (\array_key_exists('UTSMode', $data) && $data['UTSMode'] !== null) {
                $object->setUTSMode($data['UTSMode']);
            }
            elseif (\array_key_exists('UTSMode', $data) && $data['UTSMode'] === null) {
                $object->setUTSMode(null);
            }
            if (\array_key_exists('UsernsMode', $data) && $data['UsernsMode'] !== null) {
                $object->setUsernsMode($data['UsernsMode']);
            }
            elseif (\array_key_exists('UsernsMode', $data) && $data['UsernsMode'] === null) {
                $object->setUsernsMode(null);
            }
            if (\array_key_exists('ShmSize', $data) && $data['ShmSize'] !== null) {
                $object->setShmSize($data['ShmSize']);
            }
            elseif (\array_key_exists('ShmSize', $data) && $data['ShmSize'] === null) {
                $object->setShmSize(null);
            }
            if (\array_key_exists('Sysctls', $data) && $data['Sysctls'] !== null) {
                $values_27 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Sysctls'] as $key_4 => $value_27) {
                    $values_27[$key_4] = $value_27;
                }
                $object->setSysctls($values_27);
            }
            elseif (\array_key_exists('Sysctls', $data) && $data['Sysctls'] === null) {
                $object->setSysctls(null);
            }
            if (\array_key_exists('Runtime', $data) && $data['Runtime'] !== null) {
                $object->setRuntime($data['Runtime']);
            }
            elseif (\array_key_exists('Runtime', $data) && $data['Runtime'] === null) {
                $object->setRuntime(null);
            }
            if (\array_key_exists('Isolation', $data) && $data['Isolation'] !== null) {
                $object->setIsolation($data['Isolation']);
            }
            elseif (\array_key_exists('Isolation', $data) && $data['Isolation'] === null) {
                $object->setIsolation(null);
            }
            if (\array_key_exists('MaskedPaths', $data) && $data['MaskedPaths'] !== null) {
                $values_28 = [];
                foreach ($data['MaskedPaths'] as $value_28) {
                    $values_28[] = $value_28;
                }
                $object->setMaskedPaths($values_28);
            }
            elseif (\array_key_exists('MaskedPaths', $data) && $data['MaskedPaths'] === null) {
                $object->setMaskedPaths(null);
            }
            if (\array_key_exists('ReadonlyPaths', $data) && $data['ReadonlyPaths'] !== null) {
                $values_29 = [];
                foreach ($data['ReadonlyPaths'] as $value_29) {
                    $values_29[] = $value_29;
                }
                $object->setReadonlyPaths($values_29);
            }
            elseif (\array_key_exists('ReadonlyPaths', $data) && $data['ReadonlyPaths'] === null) {
                $object->setReadonlyPaths(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('cpuShares') && null !== $object->getCpuShares()) {
                $data['CpuShares'] = $object->getCpuShares();
            }
            if ($object->isInitialized('memory') && null !== $object->getMemory()) {
                $data['Memory'] = $object->getMemory();
            }
            if ($object->isInitialized('cgroupParent') && null !== $object->getCgroupParent()) {
                $data['CgroupParent'] = $object->getCgroupParent();
            }
            if ($object->isInitialized('blkioWeight') && null !== $object->getBlkioWeight()) {
                $data['BlkioWeight'] = $object->getBlkioWeight();
            }
            if ($object->isInitialized('blkioWeightDevice') && null !== $object->getBlkioWeightDevice()) {
                $values = [];
                foreach ($object->getBlkioWeightDevice() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['BlkioWeightDevice'] = $values;
            }
            if ($object->isInitialized('blkioDeviceReadBps') && null !== $object->getBlkioDeviceReadBps()) {
                $values_1 = [];
                foreach ($object->getBlkioDeviceReadBps() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['BlkioDeviceReadBps'] = $values_1;
            }
            if ($object->isInitialized('blkioDeviceWriteBps') && null !== $object->getBlkioDeviceWriteBps()) {
                $values_2 = [];
                foreach ($object->getBlkioDeviceWriteBps() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['BlkioDeviceWriteBps'] = $values_2;
            }
            if ($object->isInitialized('blkioDeviceReadIOps') && null !== $object->getBlkioDeviceReadIOps()) {
                $values_3 = [];
                foreach ($object->getBlkioDeviceReadIOps() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['BlkioDeviceReadIOps'] = $values_3;
            }
            if ($object->isInitialized('blkioDeviceWriteIOps') && null !== $object->getBlkioDeviceWriteIOps()) {
                $values_4 = [];
                foreach ($object->getBlkioDeviceWriteIOps() as $value_4) {
                    $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $data['BlkioDeviceWriteIOps'] = $values_4;
            }
            if ($object->isInitialized('cpuPeriod') && null !== $object->getCpuPeriod()) {
                $data['CpuPeriod'] = $object->getCpuPeriod();
            }
            if ($object->isInitialized('cpuQuota') && null !== $object->getCpuQuota()) {
                $data['CpuQuota'] = $object->getCpuQuota();
            }
            if ($object->isInitialized('cpuRealtimePeriod') && null !== $object->getCpuRealtimePeriod()) {
                $data['CpuRealtimePeriod'] = $object->getCpuRealtimePeriod();
            }
            if ($object->isInitialized('cpuRealtimeRuntime') && null !== $object->getCpuRealtimeRuntime()) {
                $data['CpuRealtimeRuntime'] = $object->getCpuRealtimeRuntime();
            }
            if ($object->isInitialized('cpusetCpus') && null !== $object->getCpusetCpus()) {
                $data['CpusetCpus'] = $object->getCpusetCpus();
            }
            if ($object->isInitialized('cpusetMems') && null !== $object->getCpusetMems()) {
                $data['CpusetMems'] = $object->getCpusetMems();
            }
            if ($object->isInitialized('devices') && null !== $object->getDevices()) {
                $values_5 = [];
                foreach ($object->getDevices() as $value_5) {
                    $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
                }
                $data['Devices'] = $values_5;
            }
            if ($object->isInitialized('deviceCgroupRules') && null !== $object->getDeviceCgroupRules()) {
                $values_6 = [];
                foreach ($object->getDeviceCgroupRules() as $value_6) {
                    $values_6[] = $value_6;
                }
                $data['DeviceCgroupRules'] = $values_6;
            }
            if ($object->isInitialized('deviceRequests') && null !== $object->getDeviceRequests()) {
                $values_7 = [];
                foreach ($object->getDeviceRequests() as $value_7) {
                    $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
                }
                $data['DeviceRequests'] = $values_7;
            }
            if ($object->isInitialized('kernelMemoryTCP') && null !== $object->getKernelMemoryTCP()) {
                $data['KernelMemoryTCP'] = $object->getKernelMemoryTCP();
            }
            if ($object->isInitialized('memoryReservation') && null !== $object->getMemoryReservation()) {
                $data['MemoryReservation'] = $object->getMemoryReservation();
            }
            if ($object->isInitialized('memorySwap') && null !== $object->getMemorySwap()) {
                $data['MemorySwap'] = $object->getMemorySwap();
            }
            if ($object->isInitialized('memorySwappiness') && null !== $object->getMemorySwappiness()) {
                $data['MemorySwappiness'] = $object->getMemorySwappiness();
            }
            if ($object->isInitialized('nanoCpus') && null !== $object->getNanoCpus()) {
                $data['NanoCpus'] = $object->getNanoCpus();
            }
            if ($object->isInitialized('oomKillDisable') && null !== $object->getOomKillDisable()) {
                $data['OomKillDisable'] = $object->getOomKillDisable();
            }
            if ($object->isInitialized('init') && null !== $object->getInit()) {
                $data['Init'] = $object->getInit();
            }
            if ($object->isInitialized('pidsLimit') && null !== $object->getPidsLimit()) {
                $data['PidsLimit'] = $object->getPidsLimit();
            }
            if ($object->isInitialized('ulimits') && null !== $object->getUlimits()) {
                $values_8 = [];
                foreach ($object->getUlimits() as $value_8) {
                    $values_8[] = $this->normalizer->normalize($value_8, 'json', $context);
                }
                $data['Ulimits'] = $values_8;
            }
            if ($object->isInitialized('cpuCount') && null !== $object->getCpuCount()) {
                $data['CpuCount'] = $object->getCpuCount();
            }
            if ($object->isInitialized('cpuPercent') && null !== $object->getCpuPercent()) {
                $data['CpuPercent'] = $object->getCpuPercent();
            }
            if ($object->isInitialized('iOMaximumIOps') && null !== $object->getIOMaximumIOps()) {
                $data['IOMaximumIOps'] = $object->getIOMaximumIOps();
            }
            if ($object->isInitialized('iOMaximumBandwidth') && null !== $object->getIOMaximumBandwidth()) {
                $data['IOMaximumBandwidth'] = $object->getIOMaximumBandwidth();
            }
            if ($object->isInitialized('binds') && null !== $object->getBinds()) {
                $values_9 = [];
                foreach ($object->getBinds() as $value_9) {
                    $values_9[] = $value_9;
                }
                $data['Binds'] = $values_9;
            }
            if ($object->isInitialized('containerIDFile') && null !== $object->getContainerIDFile()) {
                $data['ContainerIDFile'] = $object->getContainerIDFile();
            }
            if ($object->isInitialized('logConfig') && null !== $object->getLogConfig()) {
                $data['LogConfig'] = $this->normalizer->normalize($object->getLogConfig(), 'json', $context);
            }
            if ($object->isInitialized('networkMode') && null !== $object->getNetworkMode()) {
                $data['NetworkMode'] = $object->getNetworkMode();
            }
            if ($object->isInitialized('portBindings') && null !== $object->getPortBindings()) {
                $values_10 = [];
                foreach ($object->getPortBindings() as $key => $value_10) {
                    $values_11 = [];
                    foreach ($value_10 as $value_11) {
                        $values_11[] = $this->normalizer->normalize($value_11, 'json', $context);
                    }
                    $values_10[$key] = $values_11;
                }
                $data['PortBindings'] = $values_10;
            }
            if ($object->isInitialized('restartPolicy') && null !== $object->getRestartPolicy()) {
                $data['RestartPolicy'] = $this->normalizer->normalize($object->getRestartPolicy(), 'json', $context);
            }
            if ($object->isInitialized('autoRemove') && null !== $object->getAutoRemove()) {
                $data['AutoRemove'] = $object->getAutoRemove();
            }
            if ($object->isInitialized('volumeDriver') && null !== $object->getVolumeDriver()) {
                $data['VolumeDriver'] = $object->getVolumeDriver();
            }
            if ($object->isInitialized('volumesFrom') && null !== $object->getVolumesFrom()) {
                $values_12 = [];
                foreach ($object->getVolumesFrom() as $value_12) {
                    $values_12[] = $value_12;
                }
                $data['VolumesFrom'] = $values_12;
            }
            if ($object->isInitialized('mounts') && null !== $object->getMounts()) {
                $values_13 = [];
                foreach ($object->getMounts() as $value_13) {
                    $values_13[] = $this->normalizer->normalize($value_13, 'json', $context);
                }
                $data['Mounts'] = $values_13;
            }
            if ($object->isInitialized('consoleSize') && null !== $object->getConsoleSize()) {
                $values_14 = [];
                foreach ($object->getConsoleSize() as $value_14) {
                    $values_14[] = $value_14;
                }
                $data['ConsoleSize'] = $values_14;
            }
            if ($object->isInitialized('annotations') && null !== $object->getAnnotations()) {
                $values_15 = [];
                foreach ($object->getAnnotations() as $key_1 => $value_15) {
                    $values_15[$key_1] = $value_15;
                }
                $data['Annotations'] = $values_15;
            }
            if ($object->isInitialized('capAdd') && null !== $object->getCapAdd()) {
                $values_16 = [];
                foreach ($object->getCapAdd() as $value_16) {
                    $values_16[] = $value_16;
                }
                $data['CapAdd'] = $values_16;
            }
            if ($object->isInitialized('capDrop') && null !== $object->getCapDrop()) {
                $values_17 = [];
                foreach ($object->getCapDrop() as $value_17) {
                    $values_17[] = $value_17;
                }
                $data['CapDrop'] = $values_17;
            }
            if ($object->isInitialized('cgroupnsMode') && null !== $object->getCgroupnsMode()) {
                $data['CgroupnsMode'] = $object->getCgroupnsMode();
            }
            if ($object->isInitialized('dns') && null !== $object->getDns()) {
                $values_18 = [];
                foreach ($object->getDns() as $value_18) {
                    $values_18[] = $value_18;
                }
                $data['Dns'] = $values_18;
            }
            if ($object->isInitialized('dnsOptions') && null !== $object->getDnsOptions()) {
                $values_19 = [];
                foreach ($object->getDnsOptions() as $value_19) {
                    $values_19[] = $value_19;
                }
                $data['DnsOptions'] = $values_19;
            }
            if ($object->isInitialized('dnsSearch') && null !== $object->getDnsSearch()) {
                $values_20 = [];
                foreach ($object->getDnsSearch() as $value_20) {
                    $values_20[] = $value_20;
                }
                $data['DnsSearch'] = $values_20;
            }
            if ($object->isInitialized('extraHosts') && null !== $object->getExtraHosts()) {
                $values_21 = [];
                foreach ($object->getExtraHosts() as $value_21) {
                    $values_21[] = $value_21;
                }
                $data['ExtraHosts'] = $values_21;
            }
            if ($object->isInitialized('groupAdd') && null !== $object->getGroupAdd()) {
                $values_22 = [];
                foreach ($object->getGroupAdd() as $value_22) {
                    $values_22[] = $value_22;
                }
                $data['GroupAdd'] = $values_22;
            }
            if ($object->isInitialized('ipcMode') && null !== $object->getIpcMode()) {
                $data['IpcMode'] = $object->getIpcMode();
            }
            if ($object->isInitialized('cgroup') && null !== $object->getCgroup()) {
                $data['Cgroup'] = $object->getCgroup();
            }
            if ($object->isInitialized('links') && null !== $object->getLinks()) {
                $values_23 = [];
                foreach ($object->getLinks() as $value_23) {
                    $values_23[] = $value_23;
                }
                $data['Links'] = $values_23;
            }
            if ($object->isInitialized('oomScoreAdj') && null !== $object->getOomScoreAdj()) {
                $data['OomScoreAdj'] = $object->getOomScoreAdj();
            }
            if ($object->isInitialized('pidMode') && null !== $object->getPidMode()) {
                $data['PidMode'] = $object->getPidMode();
            }
            if ($object->isInitialized('privileged') && null !== $object->getPrivileged()) {
                $data['Privileged'] = $object->getPrivileged();
            }
            if ($object->isInitialized('publishAllPorts') && null !== $object->getPublishAllPorts()) {
                $data['PublishAllPorts'] = $object->getPublishAllPorts();
            }
            if ($object->isInitialized('readonlyRootfs') && null !== $object->getReadonlyRootfs()) {
                $data['ReadonlyRootfs'] = $object->getReadonlyRootfs();
            }
            if ($object->isInitialized('securityOpt') && null !== $object->getSecurityOpt()) {
                $values_24 = [];
                foreach ($object->getSecurityOpt() as $value_24) {
                    $values_24[] = $value_24;
                }
                $data['SecurityOpt'] = $values_24;
            }
            if ($object->isInitialized('storageOpt') && null !== $object->getStorageOpt()) {
                $values_25 = [];
                foreach ($object->getStorageOpt() as $key_2 => $value_25) {
                    $values_25[$key_2] = $value_25;
                }
                $data['StorageOpt'] = $values_25;
            }
            if ($object->isInitialized('tmpfs') && null !== $object->getTmpfs()) {
                $values_26 = [];
                foreach ($object->getTmpfs() as $key_3 => $value_26) {
                    $values_26[$key_3] = $value_26;
                }
                $data['Tmpfs'] = $values_26;
            }
            if ($object->isInitialized('uTSMode') && null !== $object->getUTSMode()) {
                $data['UTSMode'] = $object->getUTSMode();
            }
            if ($object->isInitialized('usernsMode') && null !== $object->getUsernsMode()) {
                $data['UsernsMode'] = $object->getUsernsMode();
            }
            if ($object->isInitialized('shmSize') && null !== $object->getShmSize()) {
                $data['ShmSize'] = $object->getShmSize();
            }
            if ($object->isInitialized('sysctls') && null !== $object->getSysctls()) {
                $values_27 = [];
                foreach ($object->getSysctls() as $key_4 => $value_27) {
                    $values_27[$key_4] = $value_27;
                }
                $data['Sysctls'] = $values_27;
            }
            if ($object->isInitialized('runtime') && null !== $object->getRuntime()) {
                $data['Runtime'] = $object->getRuntime();
            }
            if ($object->isInitialized('isolation') && null !== $object->getIsolation()) {
                $data['Isolation'] = $object->getIsolation();
            }
            if ($object->isInitialized('maskedPaths') && null !== $object->getMaskedPaths()) {
                $values_28 = [];
                foreach ($object->getMaskedPaths() as $value_28) {
                    $values_28[] = $value_28;
                }
                $data['MaskedPaths'] = $values_28;
            }
            if ($object->isInitialized('readonlyPaths') && null !== $object->getReadonlyPaths()) {
                $values_29 = [];
                foreach ($object->getReadonlyPaths() as $value_29) {
                    $values_29[] = $value_29;
                }
                $data['ReadonlyPaths'] = $values_29;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\HostConfig::class => false];
        }
    }
}