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
    class NodeDescriptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\NodeDescription::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\NodeDescription::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\NodeDescription();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Hostname', $data) && $data['Hostname'] !== null) {
                $object->setHostname($data['Hostname']);
            }
            elseif (\array_key_exists('Hostname', $data) && $data['Hostname'] === null) {
                $object->setHostname(null);
            }
            if (\array_key_exists('Platform', $data) && $data['Platform'] !== null) {
                $object->setPlatform($this->denormalizer->denormalize($data['Platform'], \Docker\API\Model\Platform::class, 'json', $context));
            }
            elseif (\array_key_exists('Platform', $data) && $data['Platform'] === null) {
                $object->setPlatform(null);
            }
            if (\array_key_exists('Resources', $data) && $data['Resources'] !== null) {
                $object->setResources($this->denormalizer->denormalize($data['Resources'], \Docker\API\Model\ResourceObject::class, 'json', $context));
            }
            elseif (\array_key_exists('Resources', $data) && $data['Resources'] === null) {
                $object->setResources(null);
            }
            if (\array_key_exists('Engine', $data) && $data['Engine'] !== null) {
                $object->setEngine($this->denormalizer->denormalize($data['Engine'], \Docker\API\Model\EngineDescription::class, 'json', $context));
            }
            elseif (\array_key_exists('Engine', $data) && $data['Engine'] === null) {
                $object->setEngine(null);
            }
            if (\array_key_exists('TLSInfo', $data) && $data['TLSInfo'] !== null) {
                $object->setTLSInfo($this->denormalizer->denormalize($data['TLSInfo'], \Docker\API\Model\TLSInfo::class, 'json', $context));
            }
            elseif (\array_key_exists('TLSInfo', $data) && $data['TLSInfo'] === null) {
                $object->setTLSInfo(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('hostname') && null !== $object->getHostname()) {
                $data['Hostname'] = $object->getHostname();
            }
            if ($object->isInitialized('platform') && null !== $object->getPlatform()) {
                $data['Platform'] = $this->normalizer->normalize($object->getPlatform(), 'json', $context);
            }
            if ($object->isInitialized('resources') && null !== $object->getResources()) {
                $data['Resources'] = $this->normalizer->normalize($object->getResources(), 'json', $context);
            }
            if ($object->isInitialized('engine') && null !== $object->getEngine()) {
                $data['Engine'] = $this->normalizer->normalize($object->getEngine(), 'json', $context);
            }
            if ($object->isInitialized('tLSInfo') && null !== $object->getTLSInfo()) {
                $data['TLSInfo'] = $this->normalizer->normalize($object->getTLSInfo(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\NodeDescription::class => false];
        }
    }
} else {
    class NodeDescriptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\NodeDescription::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\NodeDescription::class;
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
            $object = new \Docker\API\Model\NodeDescription();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Hostname', $data) && $data['Hostname'] !== null) {
                $object->setHostname($data['Hostname']);
            }
            elseif (\array_key_exists('Hostname', $data) && $data['Hostname'] === null) {
                $object->setHostname(null);
            }
            if (\array_key_exists('Platform', $data) && $data['Platform'] !== null) {
                $object->setPlatform($this->denormalizer->denormalize($data['Platform'], \Docker\API\Model\Platform::class, 'json', $context));
            }
            elseif (\array_key_exists('Platform', $data) && $data['Platform'] === null) {
                $object->setPlatform(null);
            }
            if (\array_key_exists('Resources', $data) && $data['Resources'] !== null) {
                $object->setResources($this->denormalizer->denormalize($data['Resources'], \Docker\API\Model\ResourceObject::class, 'json', $context));
            }
            elseif (\array_key_exists('Resources', $data) && $data['Resources'] === null) {
                $object->setResources(null);
            }
            if (\array_key_exists('Engine', $data) && $data['Engine'] !== null) {
                $object->setEngine($this->denormalizer->denormalize($data['Engine'], \Docker\API\Model\EngineDescription::class, 'json', $context));
            }
            elseif (\array_key_exists('Engine', $data) && $data['Engine'] === null) {
                $object->setEngine(null);
            }
            if (\array_key_exists('TLSInfo', $data) && $data['TLSInfo'] !== null) {
                $object->setTLSInfo($this->denormalizer->denormalize($data['TLSInfo'], \Docker\API\Model\TLSInfo::class, 'json', $context));
            }
            elseif (\array_key_exists('TLSInfo', $data) && $data['TLSInfo'] === null) {
                $object->setTLSInfo(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('hostname') && null !== $object->getHostname()) {
                $data['Hostname'] = $object->getHostname();
            }
            if ($object->isInitialized('platform') && null !== $object->getPlatform()) {
                $data['Platform'] = $this->normalizer->normalize($object->getPlatform(), 'json', $context);
            }
            if ($object->isInitialized('resources') && null !== $object->getResources()) {
                $data['Resources'] = $this->normalizer->normalize($object->getResources(), 'json', $context);
            }
            if ($object->isInitialized('engine') && null !== $object->getEngine()) {
                $data['Engine'] = $this->normalizer->normalize($object->getEngine(), 'json', $context);
            }
            if ($object->isInitialized('tLSInfo') && null !== $object->getTLSInfo()) {
                $data['TLSInfo'] = $this->normalizer->normalize($object->getTLSInfo(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\NodeDescription::class => false];
        }
    }
}