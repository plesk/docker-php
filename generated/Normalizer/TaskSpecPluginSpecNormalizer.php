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
    class TaskSpecPluginSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\TaskSpecPluginSpec::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\TaskSpecPluginSpec::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\TaskSpecPluginSpec();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
                $object->setName($data['Name']);
            }
            elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('Remote', $data) && $data['Remote'] !== null) {
                $object->setRemote($data['Remote']);
            }
            elseif (\array_key_exists('Remote', $data) && $data['Remote'] === null) {
                $object->setRemote(null);
            }
            if (\array_key_exists('Disabled', $data) && $data['Disabled'] !== null) {
                $object->setDisabled($data['Disabled']);
            }
            elseif (\array_key_exists('Disabled', $data) && $data['Disabled'] === null) {
                $object->setDisabled(null);
            }
            if (\array_key_exists('PluginPrivilege', $data) && $data['PluginPrivilege'] !== null) {
                $values = [];
                foreach ($data['PluginPrivilege'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Docker\API\Model\PluginPrivilege::class, 'json', $context);
                }
                $object->setPluginPrivilege($values);
            }
            elseif (\array_key_exists('PluginPrivilege', $data) && $data['PluginPrivilege'] === null) {
                $object->setPluginPrivilege(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['Name'] = $object->getName();
            }
            if ($object->isInitialized('remote') && null !== $object->getRemote()) {
                $data['Remote'] = $object->getRemote();
            }
            if ($object->isInitialized('disabled') && null !== $object->getDisabled()) {
                $data['Disabled'] = $object->getDisabled();
            }
            if ($object->isInitialized('pluginPrivilege') && null !== $object->getPluginPrivilege()) {
                $values = [];
                foreach ($object->getPluginPrivilege() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['PluginPrivilege'] = $values;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\TaskSpecPluginSpec::class => false];
        }
    }
} else {
    class TaskSpecPluginSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\TaskSpecPluginSpec::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\TaskSpecPluginSpec::class;
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
            $object = new \Docker\API\Model\TaskSpecPluginSpec();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
                $object->setName($data['Name']);
            }
            elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('Remote', $data) && $data['Remote'] !== null) {
                $object->setRemote($data['Remote']);
            }
            elseif (\array_key_exists('Remote', $data) && $data['Remote'] === null) {
                $object->setRemote(null);
            }
            if (\array_key_exists('Disabled', $data) && $data['Disabled'] !== null) {
                $object->setDisabled($data['Disabled']);
            }
            elseif (\array_key_exists('Disabled', $data) && $data['Disabled'] === null) {
                $object->setDisabled(null);
            }
            if (\array_key_exists('PluginPrivilege', $data) && $data['PluginPrivilege'] !== null) {
                $values = [];
                foreach ($data['PluginPrivilege'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Docker\API\Model\PluginPrivilege::class, 'json', $context);
                }
                $object->setPluginPrivilege($values);
            }
            elseif (\array_key_exists('PluginPrivilege', $data) && $data['PluginPrivilege'] === null) {
                $object->setPluginPrivilege(null);
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
            if ($object->isInitialized('remote') && null !== $object->getRemote()) {
                $data['Remote'] = $object->getRemote();
            }
            if ($object->isInitialized('disabled') && null !== $object->getDisabled()) {
                $data['Disabled'] = $object->getDisabled();
            }
            if ($object->isInitialized('pluginPrivilege') && null !== $object->getPluginPrivilege()) {
                $values = [];
                foreach ($object->getPluginPrivilege() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['PluginPrivilege'] = $values;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\TaskSpecPluginSpec::class => false];
        }
    }
}