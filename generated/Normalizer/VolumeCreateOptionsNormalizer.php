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
    class VolumeCreateOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\VolumeCreateOptions::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\VolumeCreateOptions::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\VolumeCreateOptions();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
                $object->setName($data['Name']);
            }
            elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('Driver', $data) && $data['Driver'] !== null) {
                $object->setDriver($data['Driver']);
            }
            elseif (\array_key_exists('Driver', $data) && $data['Driver'] === null) {
                $object->setDriver(null);
            }
            if (\array_key_exists('DriverOpts', $data) && $data['DriverOpts'] !== null) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['DriverOpts'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setDriverOpts($values);
            }
            elseif (\array_key_exists('DriverOpts', $data) && $data['DriverOpts'] === null) {
                $object->setDriverOpts(null);
            }
            if (\array_key_exists('Labels', $data) && $data['Labels'] !== null) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Labels'] as $key_1 => $value_1) {
                    $values_1[$key_1] = $value_1;
                }
                $object->setLabels($values_1);
            }
            elseif (\array_key_exists('Labels', $data) && $data['Labels'] === null) {
                $object->setLabels(null);
            }
            if (\array_key_exists('ClusterVolumeSpec', $data) && $data['ClusterVolumeSpec'] !== null) {
                $object->setClusterVolumeSpec($this->denormalizer->denormalize($data['ClusterVolumeSpec'], \Docker\API\Model\ClusterVolumeSpec::class, 'json', $context));
            }
            elseif (\array_key_exists('ClusterVolumeSpec', $data) && $data['ClusterVolumeSpec'] === null) {
                $object->setClusterVolumeSpec(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['Name'] = $object->getName();
            }
            if ($object->isInitialized('driver') && null !== $object->getDriver()) {
                $data['Driver'] = $object->getDriver();
            }
            if ($object->isInitialized('driverOpts') && null !== $object->getDriverOpts()) {
                $values = [];
                foreach ($object->getDriverOpts() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['DriverOpts'] = $values;
            }
            if ($object->isInitialized('labels') && null !== $object->getLabels()) {
                $values_1 = [];
                foreach ($object->getLabels() as $key_1 => $value_1) {
                    $values_1[$key_1] = $value_1;
                }
                $data['Labels'] = $values_1;
            }
            if ($object->isInitialized('clusterVolumeSpec') && null !== $object->getClusterVolumeSpec()) {
                $data['ClusterVolumeSpec'] = $this->normalizer->normalize($object->getClusterVolumeSpec(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\VolumeCreateOptions::class => false];
        }
    }
} else {
    class VolumeCreateOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\VolumeCreateOptions::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\VolumeCreateOptions::class;
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
            $object = new \Docker\API\Model\VolumeCreateOptions();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
                $object->setName($data['Name']);
            }
            elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('Driver', $data) && $data['Driver'] !== null) {
                $object->setDriver($data['Driver']);
            }
            elseif (\array_key_exists('Driver', $data) && $data['Driver'] === null) {
                $object->setDriver(null);
            }
            if (\array_key_exists('DriverOpts', $data) && $data['DriverOpts'] !== null) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['DriverOpts'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setDriverOpts($values);
            }
            elseif (\array_key_exists('DriverOpts', $data) && $data['DriverOpts'] === null) {
                $object->setDriverOpts(null);
            }
            if (\array_key_exists('Labels', $data) && $data['Labels'] !== null) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Labels'] as $key_1 => $value_1) {
                    $values_1[$key_1] = $value_1;
                }
                $object->setLabels($values_1);
            }
            elseif (\array_key_exists('Labels', $data) && $data['Labels'] === null) {
                $object->setLabels(null);
            }
            if (\array_key_exists('ClusterVolumeSpec', $data) && $data['ClusterVolumeSpec'] !== null) {
                $object->setClusterVolumeSpec($this->denormalizer->denormalize($data['ClusterVolumeSpec'], \Docker\API\Model\ClusterVolumeSpec::class, 'json', $context));
            }
            elseif (\array_key_exists('ClusterVolumeSpec', $data) && $data['ClusterVolumeSpec'] === null) {
                $object->setClusterVolumeSpec(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['Name'] = $object->getName();
            }
            if ($object->isInitialized('driver') && null !== $object->getDriver()) {
                $data['Driver'] = $object->getDriver();
            }
            if ($object->isInitialized('driverOpts') && null !== $object->getDriverOpts()) {
                $values = [];
                foreach ($object->getDriverOpts() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['DriverOpts'] = $values;
            }
            if ($object->isInitialized('labels') && null !== $object->getLabels()) {
                $values_1 = [];
                foreach ($object->getLabels() as $key_1 => $value_1) {
                    $values_1[$key_1] = $value_1;
                }
                $data['Labels'] = $values_1;
            }
            if ($object->isInitialized('clusterVolumeSpec') && null !== $object->getClusterVolumeSpec()) {
                $data['ClusterVolumeSpec'] = $this->normalizer->normalize($object->getClusterVolumeSpec(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\VolumeCreateOptions::class => false];
        }
    }
}