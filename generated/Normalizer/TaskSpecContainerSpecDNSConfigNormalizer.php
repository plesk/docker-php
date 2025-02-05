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
    class TaskSpecContainerSpecDNSConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\TaskSpecContainerSpecDNSConfig::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\TaskSpecContainerSpecDNSConfig::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\TaskSpecContainerSpecDNSConfig();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Nameservers', $data) && $data['Nameservers'] !== null) {
                $values = [];
                foreach ($data['Nameservers'] as $value) {
                    $values[] = $value;
                }
                $object->setNameservers($values);
            }
            elseif (\array_key_exists('Nameservers', $data) && $data['Nameservers'] === null) {
                $object->setNameservers(null);
            }
            if (\array_key_exists('Search', $data) && $data['Search'] !== null) {
                $values_1 = [];
                foreach ($data['Search'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setSearch($values_1);
            }
            elseif (\array_key_exists('Search', $data) && $data['Search'] === null) {
                $object->setSearch(null);
            }
            if (\array_key_exists('Options', $data) && $data['Options'] !== null) {
                $values_2 = [];
                foreach ($data['Options'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setOptions($values_2);
            }
            elseif (\array_key_exists('Options', $data) && $data['Options'] === null) {
                $object->setOptions(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('nameservers') && null !== $object->getNameservers()) {
                $values = [];
                foreach ($object->getNameservers() as $value) {
                    $values[] = $value;
                }
                $data['Nameservers'] = $values;
            }
            if ($object->isInitialized('search') && null !== $object->getSearch()) {
                $values_1 = [];
                foreach ($object->getSearch() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['Search'] = $values_1;
            }
            if ($object->isInitialized('options') && null !== $object->getOptions()) {
                $values_2 = [];
                foreach ($object->getOptions() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['Options'] = $values_2;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\TaskSpecContainerSpecDNSConfig::class => false];
        }
    }
} else {
    class TaskSpecContainerSpecDNSConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\TaskSpecContainerSpecDNSConfig::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\TaskSpecContainerSpecDNSConfig::class;
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
            $object = new \Docker\API\Model\TaskSpecContainerSpecDNSConfig();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Nameservers', $data) && $data['Nameservers'] !== null) {
                $values = [];
                foreach ($data['Nameservers'] as $value) {
                    $values[] = $value;
                }
                $object->setNameservers($values);
            }
            elseif (\array_key_exists('Nameservers', $data) && $data['Nameservers'] === null) {
                $object->setNameservers(null);
            }
            if (\array_key_exists('Search', $data) && $data['Search'] !== null) {
                $values_1 = [];
                foreach ($data['Search'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setSearch($values_1);
            }
            elseif (\array_key_exists('Search', $data) && $data['Search'] === null) {
                $object->setSearch(null);
            }
            if (\array_key_exists('Options', $data) && $data['Options'] !== null) {
                $values_2 = [];
                foreach ($data['Options'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setOptions($values_2);
            }
            elseif (\array_key_exists('Options', $data) && $data['Options'] === null) {
                $object->setOptions(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('nameservers') && null !== $object->getNameservers()) {
                $values = [];
                foreach ($object->getNameservers() as $value) {
                    $values[] = $value;
                }
                $data['Nameservers'] = $values;
            }
            if ($object->isInitialized('search') && null !== $object->getSearch()) {
                $values_1 = [];
                foreach ($object->getSearch() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['Search'] = $values_1;
            }
            if ($object->isInitialized('options') && null !== $object->getOptions()) {
                $values_2 = [];
                foreach ($object->getOptions() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['Options'] = $values_2;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\TaskSpecContainerSpecDNSConfig::class => false];
        }
    }
}