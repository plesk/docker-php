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
    class PluginNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\Plugin::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\Plugin::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\Plugin();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Id', $data) && $data['Id'] !== null) {
                $object->setId($data['Id']);
            }
            elseif (\array_key_exists('Id', $data) && $data['Id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
                $object->setName($data['Name']);
            }
            elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('Enabled', $data) && $data['Enabled'] !== null) {
                $object->setEnabled($data['Enabled']);
            }
            elseif (\array_key_exists('Enabled', $data) && $data['Enabled'] === null) {
                $object->setEnabled(null);
            }
            if (\array_key_exists('Settings', $data) && $data['Settings'] !== null) {
                $object->setSettings($this->denormalizer->denormalize($data['Settings'], \Docker\API\Model\PluginSettings::class, 'json', $context));
            }
            elseif (\array_key_exists('Settings', $data) && $data['Settings'] === null) {
                $object->setSettings(null);
            }
            if (\array_key_exists('PluginReference', $data) && $data['PluginReference'] !== null) {
                $object->setPluginReference($data['PluginReference']);
            }
            elseif (\array_key_exists('PluginReference', $data) && $data['PluginReference'] === null) {
                $object->setPluginReference(null);
            }
            if (\array_key_exists('Config', $data) && $data['Config'] !== null) {
                $object->setConfig($this->denormalizer->denormalize($data['Config'], \Docker\API\Model\PluginConfig::class, 'json', $context));
            }
            elseif (\array_key_exists('Config', $data) && $data['Config'] === null) {
                $object->setConfig(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['Id'] = $object->getId();
            }
            $data['Name'] = $object->getName();
            $data['Enabled'] = $object->getEnabled();
            $data['Settings'] = $this->normalizer->normalize($object->getSettings(), 'json', $context);
            if ($object->isInitialized('pluginReference') && null !== $object->getPluginReference()) {
                $data['PluginReference'] = $object->getPluginReference();
            }
            $data['Config'] = $this->normalizer->normalize($object->getConfig(), 'json', $context);
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\Plugin::class => false];
        }
    }
} else {
    class PluginNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\Plugin::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\Plugin::class;
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
            $object = new \Docker\API\Model\Plugin();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Id', $data) && $data['Id'] !== null) {
                $object->setId($data['Id']);
            }
            elseif (\array_key_exists('Id', $data) && $data['Id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
                $object->setName($data['Name']);
            }
            elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('Enabled', $data) && $data['Enabled'] !== null) {
                $object->setEnabled($data['Enabled']);
            }
            elseif (\array_key_exists('Enabled', $data) && $data['Enabled'] === null) {
                $object->setEnabled(null);
            }
            if (\array_key_exists('Settings', $data) && $data['Settings'] !== null) {
                $object->setSettings($this->denormalizer->denormalize($data['Settings'], \Docker\API\Model\PluginSettings::class, 'json', $context));
            }
            elseif (\array_key_exists('Settings', $data) && $data['Settings'] === null) {
                $object->setSettings(null);
            }
            if (\array_key_exists('PluginReference', $data) && $data['PluginReference'] !== null) {
                $object->setPluginReference($data['PluginReference']);
            }
            elseif (\array_key_exists('PluginReference', $data) && $data['PluginReference'] === null) {
                $object->setPluginReference(null);
            }
            if (\array_key_exists('Config', $data) && $data['Config'] !== null) {
                $object->setConfig($this->denormalizer->denormalize($data['Config'], \Docker\API\Model\PluginConfig::class, 'json', $context));
            }
            elseif (\array_key_exists('Config', $data) && $data['Config'] === null) {
                $object->setConfig(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['Id'] = $object->getId();
            }
            $data['Name'] = $object->getName();
            $data['Enabled'] = $object->getEnabled();
            $data['Settings'] = $this->normalizer->normalize($object->getSettings(), 'json', $context);
            if ($object->isInitialized('pluginReference') && null !== $object->getPluginReference()) {
                $data['PluginReference'] = $object->getPluginReference();
            }
            $data['Config'] = $this->normalizer->normalize($object->getConfig(), 'json', $context);
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\Plugin::class => false];
        }
    }
}