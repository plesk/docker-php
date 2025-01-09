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
    class TaskSpecPlacementNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\TaskSpecPlacement::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\TaskSpecPlacement::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\TaskSpecPlacement();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Constraints', $data) && $data['Constraints'] !== null) {
                $values = [];
                foreach ($data['Constraints'] as $value) {
                    $values[] = $value;
                }
                $object->setConstraints($values);
            }
            elseif (\array_key_exists('Constraints', $data) && $data['Constraints'] === null) {
                $object->setConstraints(null);
            }
            if (\array_key_exists('Preferences', $data) && $data['Preferences'] !== null) {
                $values_1 = [];
                foreach ($data['Preferences'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \Docker\API\Model\TaskSpecPlacementPreferencesItem::class, 'json', $context);
                }
                $object->setPreferences($values_1);
            }
            elseif (\array_key_exists('Preferences', $data) && $data['Preferences'] === null) {
                $object->setPreferences(null);
            }
            if (\array_key_exists('MaxReplicas', $data) && $data['MaxReplicas'] !== null) {
                $object->setMaxReplicas($data['MaxReplicas']);
            }
            elseif (\array_key_exists('MaxReplicas', $data) && $data['MaxReplicas'] === null) {
                $object->setMaxReplicas(null);
            }
            if (\array_key_exists('Platforms', $data) && $data['Platforms'] !== null) {
                $values_2 = [];
                foreach ($data['Platforms'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \Docker\API\Model\Platform::class, 'json', $context);
                }
                $object->setPlatforms($values_2);
            }
            elseif (\array_key_exists('Platforms', $data) && $data['Platforms'] === null) {
                $object->setPlatforms(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('constraints') && null !== $object->getConstraints()) {
                $values = [];
                foreach ($object->getConstraints() as $value) {
                    $values[] = $value;
                }
                $data['Constraints'] = $values;
            }
            if ($object->isInitialized('preferences') && null !== $object->getPreferences()) {
                $values_1 = [];
                foreach ($object->getPreferences() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['Preferences'] = $values_1;
            }
            if ($object->isInitialized('maxReplicas') && null !== $object->getMaxReplicas()) {
                $data['MaxReplicas'] = $object->getMaxReplicas();
            }
            if ($object->isInitialized('platforms') && null !== $object->getPlatforms()) {
                $values_2 = [];
                foreach ($object->getPlatforms() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['Platforms'] = $values_2;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\TaskSpecPlacement::class => false];
        }
    }
} else {
    class TaskSpecPlacementNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\TaskSpecPlacement::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\TaskSpecPlacement::class;
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
            $object = new \Docker\API\Model\TaskSpecPlacement();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Constraints', $data) && $data['Constraints'] !== null) {
                $values = [];
                foreach ($data['Constraints'] as $value) {
                    $values[] = $value;
                }
                $object->setConstraints($values);
            }
            elseif (\array_key_exists('Constraints', $data) && $data['Constraints'] === null) {
                $object->setConstraints(null);
            }
            if (\array_key_exists('Preferences', $data) && $data['Preferences'] !== null) {
                $values_1 = [];
                foreach ($data['Preferences'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \Docker\API\Model\TaskSpecPlacementPreferencesItem::class, 'json', $context);
                }
                $object->setPreferences($values_1);
            }
            elseif (\array_key_exists('Preferences', $data) && $data['Preferences'] === null) {
                $object->setPreferences(null);
            }
            if (\array_key_exists('MaxReplicas', $data) && $data['MaxReplicas'] !== null) {
                $object->setMaxReplicas($data['MaxReplicas']);
            }
            elseif (\array_key_exists('MaxReplicas', $data) && $data['MaxReplicas'] === null) {
                $object->setMaxReplicas(null);
            }
            if (\array_key_exists('Platforms', $data) && $data['Platforms'] !== null) {
                $values_2 = [];
                foreach ($data['Platforms'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \Docker\API\Model\Platform::class, 'json', $context);
                }
                $object->setPlatforms($values_2);
            }
            elseif (\array_key_exists('Platforms', $data) && $data['Platforms'] === null) {
                $object->setPlatforms(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('constraints') && null !== $object->getConstraints()) {
                $values = [];
                foreach ($object->getConstraints() as $value) {
                    $values[] = $value;
                }
                $data['Constraints'] = $values;
            }
            if ($object->isInitialized('preferences') && null !== $object->getPreferences()) {
                $values_1 = [];
                foreach ($object->getPreferences() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['Preferences'] = $values_1;
            }
            if ($object->isInitialized('maxReplicas') && null !== $object->getMaxReplicas()) {
                $data['MaxReplicas'] = $object->getMaxReplicas();
            }
            if ($object->isInitialized('platforms') && null !== $object->getPlatforms()) {
                $values_2 = [];
                foreach ($object->getPlatforms() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['Platforms'] = $values_2;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\TaskSpecPlacement::class => false];
        }
    }
}