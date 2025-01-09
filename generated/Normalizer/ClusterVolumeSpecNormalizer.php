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
    class ClusterVolumeSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\ClusterVolumeSpec::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\ClusterVolumeSpec::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\ClusterVolumeSpec();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Group', $data) && $data['Group'] !== null) {
                $object->setGroup($data['Group']);
            }
            elseif (\array_key_exists('Group', $data) && $data['Group'] === null) {
                $object->setGroup(null);
            }
            if (\array_key_exists('AccessMode', $data) && $data['AccessMode'] !== null) {
                $object->setAccessMode($this->denormalizer->denormalize($data['AccessMode'], \Docker\API\Model\ClusterVolumeSpecAccessMode::class, 'json', $context));
            }
            elseif (\array_key_exists('AccessMode', $data) && $data['AccessMode'] === null) {
                $object->setAccessMode(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('group') && null !== $object->getGroup()) {
                $data['Group'] = $object->getGroup();
            }
            if ($object->isInitialized('accessMode') && null !== $object->getAccessMode()) {
                $data['AccessMode'] = $this->normalizer->normalize($object->getAccessMode(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\ClusterVolumeSpec::class => false];
        }
    }
} else {
    class ClusterVolumeSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\ClusterVolumeSpec::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\ClusterVolumeSpec::class;
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
            $object = new \Docker\API\Model\ClusterVolumeSpec();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Group', $data) && $data['Group'] !== null) {
                $object->setGroup($data['Group']);
            }
            elseif (\array_key_exists('Group', $data) && $data['Group'] === null) {
                $object->setGroup(null);
            }
            if (\array_key_exists('AccessMode', $data) && $data['AccessMode'] !== null) {
                $object->setAccessMode($this->denormalizer->denormalize($data['AccessMode'], \Docker\API\Model\ClusterVolumeSpecAccessMode::class, 'json', $context));
            }
            elseif (\array_key_exists('AccessMode', $data) && $data['AccessMode'] === null) {
                $object->setAccessMode(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('group') && null !== $object->getGroup()) {
                $data['Group'] = $object->getGroup();
            }
            if ($object->isInitialized('accessMode') && null !== $object->getAccessMode()) {
                $data['AccessMode'] = $this->normalizer->normalize($object->getAccessMode(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\ClusterVolumeSpec::class => false];
        }
    }
}