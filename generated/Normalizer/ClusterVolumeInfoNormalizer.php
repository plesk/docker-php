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
    class ClusterVolumeInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\ClusterVolumeInfo::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\ClusterVolumeInfo::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\ClusterVolumeInfo();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('CapacityBytes', $data) && $data['CapacityBytes'] !== null) {
                $object->setCapacityBytes($data['CapacityBytes']);
            }
            elseif (\array_key_exists('CapacityBytes', $data) && $data['CapacityBytes'] === null) {
                $object->setCapacityBytes(null);
            }
            if (\array_key_exists('VolumeContext', $data) && $data['VolumeContext'] !== null) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['VolumeContext'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setVolumeContext($values);
            }
            elseif (\array_key_exists('VolumeContext', $data) && $data['VolumeContext'] === null) {
                $object->setVolumeContext(null);
            }
            if (\array_key_exists('VolumeID', $data) && $data['VolumeID'] !== null) {
                $object->setVolumeID($data['VolumeID']);
            }
            elseif (\array_key_exists('VolumeID', $data) && $data['VolumeID'] === null) {
                $object->setVolumeID(null);
            }
            if (\array_key_exists('AccessibleTopology', $data) && $data['AccessibleTopology'] !== null) {
                $values_1 = [];
                foreach ($data['AccessibleTopology'] as $value_1) {
                    $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                    foreach ($value_1 as $key_1 => $value_2) {
                        $values_2[$key_1] = $value_2;
                    }
                    $values_1[] = $values_2;
                }
                $object->setAccessibleTopology($values_1);
            }
            elseif (\array_key_exists('AccessibleTopology', $data) && $data['AccessibleTopology'] === null) {
                $object->setAccessibleTopology(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('capacityBytes') && null !== $object->getCapacityBytes()) {
                $data['CapacityBytes'] = $object->getCapacityBytes();
            }
            if ($object->isInitialized('volumeContext') && null !== $object->getVolumeContext()) {
                $values = [];
                foreach ($object->getVolumeContext() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['VolumeContext'] = $values;
            }
            if ($object->isInitialized('volumeID') && null !== $object->getVolumeID()) {
                $data['VolumeID'] = $object->getVolumeID();
            }
            if ($object->isInitialized('accessibleTopology') && null !== $object->getAccessibleTopology()) {
                $values_1 = [];
                foreach ($object->getAccessibleTopology() as $value_1) {
                    $values_2 = [];
                    foreach ($value_1 as $key_1 => $value_2) {
                        $values_2[$key_1] = $value_2;
                    }
                    $values_1[] = $values_2;
                }
                $data['AccessibleTopology'] = $values_1;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\ClusterVolumeInfo::class => false];
        }
    }
} else {
    class ClusterVolumeInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\ClusterVolumeInfo::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\ClusterVolumeInfo::class;
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
            $object = new \Docker\API\Model\ClusterVolumeInfo();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('CapacityBytes', $data) && $data['CapacityBytes'] !== null) {
                $object->setCapacityBytes($data['CapacityBytes']);
            }
            elseif (\array_key_exists('CapacityBytes', $data) && $data['CapacityBytes'] === null) {
                $object->setCapacityBytes(null);
            }
            if (\array_key_exists('VolumeContext', $data) && $data['VolumeContext'] !== null) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['VolumeContext'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setVolumeContext($values);
            }
            elseif (\array_key_exists('VolumeContext', $data) && $data['VolumeContext'] === null) {
                $object->setVolumeContext(null);
            }
            if (\array_key_exists('VolumeID', $data) && $data['VolumeID'] !== null) {
                $object->setVolumeID($data['VolumeID']);
            }
            elseif (\array_key_exists('VolumeID', $data) && $data['VolumeID'] === null) {
                $object->setVolumeID(null);
            }
            if (\array_key_exists('AccessibleTopology', $data) && $data['AccessibleTopology'] !== null) {
                $values_1 = [];
                foreach ($data['AccessibleTopology'] as $value_1) {
                    $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                    foreach ($value_1 as $key_1 => $value_2) {
                        $values_2[$key_1] = $value_2;
                    }
                    $values_1[] = $values_2;
                }
                $object->setAccessibleTopology($values_1);
            }
            elseif (\array_key_exists('AccessibleTopology', $data) && $data['AccessibleTopology'] === null) {
                $object->setAccessibleTopology(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('capacityBytes') && null !== $object->getCapacityBytes()) {
                $data['CapacityBytes'] = $object->getCapacityBytes();
            }
            if ($object->isInitialized('volumeContext') && null !== $object->getVolumeContext()) {
                $values = [];
                foreach ($object->getVolumeContext() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['VolumeContext'] = $values;
            }
            if ($object->isInitialized('volumeID') && null !== $object->getVolumeID()) {
                $data['VolumeID'] = $object->getVolumeID();
            }
            if ($object->isInitialized('accessibleTopology') && null !== $object->getAccessibleTopology()) {
                $values_1 = [];
                foreach ($object->getAccessibleTopology() as $value_1) {
                    $values_2 = [];
                    foreach ($value_1 as $key_1 => $value_2) {
                        $values_2[$key_1] = $value_2;
                    }
                    $values_1[] = $values_2;
                }
                $data['AccessibleTopology'] = $values_1;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\ClusterVolumeInfo::class => false];
        }
    }
}