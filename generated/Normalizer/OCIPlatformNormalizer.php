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
    class OCIPlatformNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\OCIPlatform::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\OCIPlatform::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\OCIPlatform();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('architecture', $data) && $data['architecture'] !== null) {
                $object->setArchitecture($data['architecture']);
            }
            elseif (\array_key_exists('architecture', $data) && $data['architecture'] === null) {
                $object->setArchitecture(null);
            }
            if (\array_key_exists('os', $data) && $data['os'] !== null) {
                $object->setOs($data['os']);
            }
            elseif (\array_key_exists('os', $data) && $data['os'] === null) {
                $object->setOs(null);
            }
            if (\array_key_exists('os.version', $data) && $data['os.version'] !== null) {
                $object->setOsVersion($data['os.version']);
            }
            elseif (\array_key_exists('os.version', $data) && $data['os.version'] === null) {
                $object->setOsVersion(null);
            }
            if (\array_key_exists('os.features', $data) && $data['os.features'] !== null) {
                $values = [];
                foreach ($data['os.features'] as $value) {
                    $values[] = $value;
                }
                $object->setOsFeatures($values);
            }
            elseif (\array_key_exists('os.features', $data) && $data['os.features'] === null) {
                $object->setOsFeatures(null);
            }
            if (\array_key_exists('variant', $data) && $data['variant'] !== null) {
                $object->setVariant($data['variant']);
            }
            elseif (\array_key_exists('variant', $data) && $data['variant'] === null) {
                $object->setVariant(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('architecture') && null !== $object->getArchitecture()) {
                $data['architecture'] = $object->getArchitecture();
            }
            if ($object->isInitialized('os') && null !== $object->getOs()) {
                $data['os'] = $object->getOs();
            }
            if ($object->isInitialized('osVersion') && null !== $object->getOsVersion()) {
                $data['os.version'] = $object->getOsVersion();
            }
            if ($object->isInitialized('osFeatures') && null !== $object->getOsFeatures()) {
                $values = [];
                foreach ($object->getOsFeatures() as $value) {
                    $values[] = $value;
                }
                $data['os.features'] = $values;
            }
            if ($object->isInitialized('variant') && null !== $object->getVariant()) {
                $data['variant'] = $object->getVariant();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\OCIPlatform::class => false];
        }
    }
} else {
    class OCIPlatformNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\OCIPlatform::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\OCIPlatform::class;
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
            $object = new \Docker\API\Model\OCIPlatform();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('architecture', $data) && $data['architecture'] !== null) {
                $object->setArchitecture($data['architecture']);
            }
            elseif (\array_key_exists('architecture', $data) && $data['architecture'] === null) {
                $object->setArchitecture(null);
            }
            if (\array_key_exists('os', $data) && $data['os'] !== null) {
                $object->setOs($data['os']);
            }
            elseif (\array_key_exists('os', $data) && $data['os'] === null) {
                $object->setOs(null);
            }
            if (\array_key_exists('os.version', $data) && $data['os.version'] !== null) {
                $object->setOsVersion($data['os.version']);
            }
            elseif (\array_key_exists('os.version', $data) && $data['os.version'] === null) {
                $object->setOsVersion(null);
            }
            if (\array_key_exists('os.features', $data) && $data['os.features'] !== null) {
                $values = [];
                foreach ($data['os.features'] as $value) {
                    $values[] = $value;
                }
                $object->setOsFeatures($values);
            }
            elseif (\array_key_exists('os.features', $data) && $data['os.features'] === null) {
                $object->setOsFeatures(null);
            }
            if (\array_key_exists('variant', $data) && $data['variant'] !== null) {
                $object->setVariant($data['variant']);
            }
            elseif (\array_key_exists('variant', $data) && $data['variant'] === null) {
                $object->setVariant(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('architecture') && null !== $object->getArchitecture()) {
                $data['architecture'] = $object->getArchitecture();
            }
            if ($object->isInitialized('os') && null !== $object->getOs()) {
                $data['os'] = $object->getOs();
            }
            if ($object->isInitialized('osVersion') && null !== $object->getOsVersion()) {
                $data['os.version'] = $object->getOsVersion();
            }
            if ($object->isInitialized('osFeatures') && null !== $object->getOsFeatures()) {
                $values = [];
                foreach ($object->getOsFeatures() as $value) {
                    $values[] = $value;
                }
                $data['os.features'] = $values;
            }
            if ($object->isInitialized('variant') && null !== $object->getVariant()) {
                $data['variant'] = $object->getVariant();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\OCIPlatform::class => false];
        }
    }
}