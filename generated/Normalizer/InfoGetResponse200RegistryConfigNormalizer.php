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
    class InfoGetResponse200RegistryConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\InfoGetResponse200RegistryConfig::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\InfoGetResponse200RegistryConfig::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\InfoGetResponse200RegistryConfig();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('IndexConfigs', $data) && $data['IndexConfigs'] !== null) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['IndexConfigs'] as $key => $value) {
                    $values[$key] = $this->denormalizer->denormalize($value, \Docker\API\Model\InfoGetResponse200RegistryConfigIndexConfigsItem::class, 'json', $context);
                }
                $object->setIndexConfigs($values);
            }
            elseif (\array_key_exists('IndexConfigs', $data) && $data['IndexConfigs'] === null) {
                $object->setIndexConfigs(null);
            }
            if (\array_key_exists('InsecureRegistryCIDRs', $data) && $data['InsecureRegistryCIDRs'] !== null) {
                $values_1 = [];
                foreach ($data['InsecureRegistryCIDRs'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setInsecureRegistryCIDRs($values_1);
            }
            elseif (\array_key_exists('InsecureRegistryCIDRs', $data) && $data['InsecureRegistryCIDRs'] === null) {
                $object->setInsecureRegistryCIDRs(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('indexConfigs') && null !== $object->getIndexConfigs()) {
                $values = [];
                foreach ($object->getIndexConfigs() as $key => $value) {
                    $values[$key] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['IndexConfigs'] = $values;
            }
            if ($object->isInitialized('insecureRegistryCIDRs') && null !== $object->getInsecureRegistryCIDRs()) {
                $values_1 = [];
                foreach ($object->getInsecureRegistryCIDRs() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['InsecureRegistryCIDRs'] = $values_1;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\InfoGetResponse200RegistryConfig::class => false];
        }
    }
} else {
    class InfoGetResponse200RegistryConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\InfoGetResponse200RegistryConfig::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\InfoGetResponse200RegistryConfig::class;
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
            $object = new \Docker\API\Model\InfoGetResponse200RegistryConfig();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('IndexConfigs', $data) && $data['IndexConfigs'] !== null) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['IndexConfigs'] as $key => $value) {
                    $values[$key] = $this->denormalizer->denormalize($value, \Docker\API\Model\InfoGetResponse200RegistryConfigIndexConfigsItem::class, 'json', $context);
                }
                $object->setIndexConfigs($values);
            }
            elseif (\array_key_exists('IndexConfigs', $data) && $data['IndexConfigs'] === null) {
                $object->setIndexConfigs(null);
            }
            if (\array_key_exists('InsecureRegistryCIDRs', $data) && $data['InsecureRegistryCIDRs'] !== null) {
                $values_1 = [];
                foreach ($data['InsecureRegistryCIDRs'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setInsecureRegistryCIDRs($values_1);
            }
            elseif (\array_key_exists('InsecureRegistryCIDRs', $data) && $data['InsecureRegistryCIDRs'] === null) {
                $object->setInsecureRegistryCIDRs(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('indexConfigs') && null !== $object->getIndexConfigs()) {
                $values = [];
                foreach ($object->getIndexConfigs() as $key => $value) {
                    $values[$key] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['IndexConfigs'] = $values;
            }
            if ($object->isInitialized('insecureRegistryCIDRs') && null !== $object->getInsecureRegistryCIDRs()) {
                $values_1 = [];
                foreach ($object->getInsecureRegistryCIDRs() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['InsecureRegistryCIDRs'] = $values_1;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\InfoGetResponse200RegistryConfig::class => false];
        }
    }
}