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
    class PluginConfigLinuxNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\PluginConfigLinux::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\PluginConfigLinux::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\PluginConfigLinux();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Capabilities', $data) && $data['Capabilities'] !== null) {
                $values = [];
                foreach ($data['Capabilities'] as $value) {
                    $values[] = $value;
                }
                $object->setCapabilities($values);
            }
            elseif (\array_key_exists('Capabilities', $data) && $data['Capabilities'] === null) {
                $object->setCapabilities(null);
            }
            if (\array_key_exists('AllowAllDevices', $data) && $data['AllowAllDevices'] !== null) {
                $object->setAllowAllDevices($data['AllowAllDevices']);
            }
            elseif (\array_key_exists('AllowAllDevices', $data) && $data['AllowAllDevices'] === null) {
                $object->setAllowAllDevices(null);
            }
            if (\array_key_exists('Devices', $data) && $data['Devices'] !== null) {
                $values_1 = [];
                foreach ($data['Devices'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \Docker\API\Model\PluginDevice::class, 'json', $context);
                }
                $object->setDevices($values_1);
            }
            elseif (\array_key_exists('Devices', $data) && $data['Devices'] === null) {
                $object->setDevices(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $values = [];
            foreach ($object->getCapabilities() as $value) {
                $values[] = $value;
            }
            $data['Capabilities'] = $values;
            $data['AllowAllDevices'] = $object->getAllowAllDevices();
            $values_1 = [];
            foreach ($object->getDevices() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['Devices'] = $values_1;
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\PluginConfigLinux::class => false];
        }
    }
} else {
    class PluginConfigLinuxNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\PluginConfigLinux::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\PluginConfigLinux::class;
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
            $object = new \Docker\API\Model\PluginConfigLinux();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Capabilities', $data) && $data['Capabilities'] !== null) {
                $values = [];
                foreach ($data['Capabilities'] as $value) {
                    $values[] = $value;
                }
                $object->setCapabilities($values);
            }
            elseif (\array_key_exists('Capabilities', $data) && $data['Capabilities'] === null) {
                $object->setCapabilities(null);
            }
            if (\array_key_exists('AllowAllDevices', $data) && $data['AllowAllDevices'] !== null) {
                $object->setAllowAllDevices($data['AllowAllDevices']);
            }
            elseif (\array_key_exists('AllowAllDevices', $data) && $data['AllowAllDevices'] === null) {
                $object->setAllowAllDevices(null);
            }
            if (\array_key_exists('Devices', $data) && $data['Devices'] !== null) {
                $values_1 = [];
                foreach ($data['Devices'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \Docker\API\Model\PluginDevice::class, 'json', $context);
                }
                $object->setDevices($values_1);
            }
            elseif (\array_key_exists('Devices', $data) && $data['Devices'] === null) {
                $object->setDevices(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $values = [];
            foreach ($object->getCapabilities() as $value) {
                $values[] = $value;
            }
            $data['Capabilities'] = $values;
            $data['AllowAllDevices'] = $object->getAllowAllDevices();
            $values_1 = [];
            foreach ($object->getDevices() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['Devices'] = $values_1;
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\PluginConfigLinux::class => false];
        }
    }
}