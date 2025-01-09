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
    class NetworkAttachmentConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\NetworkAttachmentConfig::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\NetworkAttachmentConfig::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\NetworkAttachmentConfig();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Target', $data) && $data['Target'] !== null) {
                $object->setTarget($data['Target']);
            }
            elseif (\array_key_exists('Target', $data) && $data['Target'] === null) {
                $object->setTarget(null);
            }
            if (\array_key_exists('Aliases', $data) && $data['Aliases'] !== null) {
                $values = [];
                foreach ($data['Aliases'] as $value) {
                    $values[] = $value;
                }
                $object->setAliases($values);
            }
            elseif (\array_key_exists('Aliases', $data) && $data['Aliases'] === null) {
                $object->setAliases(null);
            }
            if (\array_key_exists('DriverOpts', $data) && $data['DriverOpts'] !== null) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['DriverOpts'] as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $object->setDriverOpts($values_1);
            }
            elseif (\array_key_exists('DriverOpts', $data) && $data['DriverOpts'] === null) {
                $object->setDriverOpts(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('target') && null !== $object->getTarget()) {
                $data['Target'] = $object->getTarget();
            }
            if ($object->isInitialized('aliases') && null !== $object->getAliases()) {
                $values = [];
                foreach ($object->getAliases() as $value) {
                    $values[] = $value;
                }
                $data['Aliases'] = $values;
            }
            if ($object->isInitialized('driverOpts') && null !== $object->getDriverOpts()) {
                $values_1 = [];
                foreach ($object->getDriverOpts() as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $data['DriverOpts'] = $values_1;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\NetworkAttachmentConfig::class => false];
        }
    }
} else {
    class NetworkAttachmentConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\NetworkAttachmentConfig::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\NetworkAttachmentConfig::class;
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
            $object = new \Docker\API\Model\NetworkAttachmentConfig();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Target', $data) && $data['Target'] !== null) {
                $object->setTarget($data['Target']);
            }
            elseif (\array_key_exists('Target', $data) && $data['Target'] === null) {
                $object->setTarget(null);
            }
            if (\array_key_exists('Aliases', $data) && $data['Aliases'] !== null) {
                $values = [];
                foreach ($data['Aliases'] as $value) {
                    $values[] = $value;
                }
                $object->setAliases($values);
            }
            elseif (\array_key_exists('Aliases', $data) && $data['Aliases'] === null) {
                $object->setAliases(null);
            }
            if (\array_key_exists('DriverOpts', $data) && $data['DriverOpts'] !== null) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['DriverOpts'] as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $object->setDriverOpts($values_1);
            }
            elseif (\array_key_exists('DriverOpts', $data) && $data['DriverOpts'] === null) {
                $object->setDriverOpts(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('target') && null !== $object->getTarget()) {
                $data['Target'] = $object->getTarget();
            }
            if ($object->isInitialized('aliases') && null !== $object->getAliases()) {
                $values = [];
                foreach ($object->getAliases() as $value) {
                    $values[] = $value;
                }
                $data['Aliases'] = $values;
            }
            if ($object->isInitialized('driverOpts') && null !== $object->getDriverOpts()) {
                $values_1 = [];
                foreach ($object->getDriverOpts() as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $data['DriverOpts'] = $values_1;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\NetworkAttachmentConfig::class => false];
        }
    }
}