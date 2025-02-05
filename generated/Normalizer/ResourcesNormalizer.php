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
    class ResourcesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\Resources::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\Resources::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\Resources();
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
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\Resources::class => false];
        }
    }
} else {
    class ResourcesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\Resources::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\Resources::class;
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
            $object = new \Docker\API\Model\Resources();
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
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\Resources::class => false];
        }
    }
}