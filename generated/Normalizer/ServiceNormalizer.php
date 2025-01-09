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
    class ServiceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\Service::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\Service::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\Service();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ID', $data) && $data['ID'] !== null) {
                $object->setID($data['ID']);
            }
            elseif (\array_key_exists('ID', $data) && $data['ID'] === null) {
                $object->setID(null);
            }
            if (\array_key_exists('Version', $data) && $data['Version'] !== null) {
                $object->setVersion($this->denormalizer->denormalize($data['Version'], \Docker\API\Model\ServiceVersion::class, 'json', $context));
            }
            elseif (\array_key_exists('Version', $data) && $data['Version'] === null) {
                $object->setVersion(null);
            }
            if (\array_key_exists('CreatedAt', $data) && $data['CreatedAt'] !== null) {
                $object->setCreatedAt($data['CreatedAt']);
            }
            elseif (\array_key_exists('CreatedAt', $data) && $data['CreatedAt'] === null) {
                $object->setCreatedAt(null);
            }
            if (\array_key_exists('UpdatedAt', $data) && $data['UpdatedAt'] !== null) {
                $object->setUpdatedAt($data['UpdatedAt']);
            }
            elseif (\array_key_exists('UpdatedAt', $data) && $data['UpdatedAt'] === null) {
                $object->setUpdatedAt(null);
            }
            if (\array_key_exists('Spec', $data) && $data['Spec'] !== null) {
                $object->setSpec($this->denormalizer->denormalize($data['Spec'], \Docker\API\Model\ServiceSpec::class, 'json', $context));
            }
            elseif (\array_key_exists('Spec', $data) && $data['Spec'] === null) {
                $object->setSpec(null);
            }
            if (\array_key_exists('Endpoint', $data) && $data['Endpoint'] !== null) {
                $object->setEndpoint($this->denormalizer->denormalize($data['Endpoint'], \Docker\API\Model\ServiceEndpoint::class, 'json', $context));
            }
            elseif (\array_key_exists('Endpoint', $data) && $data['Endpoint'] === null) {
                $object->setEndpoint(null);
            }
            if (\array_key_exists('UpdateStatus', $data) && $data['UpdateStatus'] !== null) {
                $object->setUpdateStatus($this->denormalizer->denormalize($data['UpdateStatus'], \Docker\API\Model\ServiceUpdateStatus::class, 'json', $context));
            }
            elseif (\array_key_exists('UpdateStatus', $data) && $data['UpdateStatus'] === null) {
                $object->setUpdateStatus(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('iD') && null !== $object->getID()) {
                $data['ID'] = $object->getID();
            }
            if ($object->isInitialized('version') && null !== $object->getVersion()) {
                $data['Version'] = $this->normalizer->normalize($object->getVersion(), 'json', $context);
            }
            if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
                $data['CreatedAt'] = $object->getCreatedAt();
            }
            if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
                $data['UpdatedAt'] = $object->getUpdatedAt();
            }
            if ($object->isInitialized('spec') && null !== $object->getSpec()) {
                $data['Spec'] = $this->normalizer->normalize($object->getSpec(), 'json', $context);
            }
            if ($object->isInitialized('endpoint') && null !== $object->getEndpoint()) {
                $data['Endpoint'] = $this->normalizer->normalize($object->getEndpoint(), 'json', $context);
            }
            if ($object->isInitialized('updateStatus') && null !== $object->getUpdateStatus()) {
                $data['UpdateStatus'] = $this->normalizer->normalize($object->getUpdateStatus(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\Service::class => false];
        }
    }
} else {
    class ServiceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\Service::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\Service::class;
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
            $object = new \Docker\API\Model\Service();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ID', $data) && $data['ID'] !== null) {
                $object->setID($data['ID']);
            }
            elseif (\array_key_exists('ID', $data) && $data['ID'] === null) {
                $object->setID(null);
            }
            if (\array_key_exists('Version', $data) && $data['Version'] !== null) {
                $object->setVersion($this->denormalizer->denormalize($data['Version'], \Docker\API\Model\ServiceVersion::class, 'json', $context));
            }
            elseif (\array_key_exists('Version', $data) && $data['Version'] === null) {
                $object->setVersion(null);
            }
            if (\array_key_exists('CreatedAt', $data) && $data['CreatedAt'] !== null) {
                $object->setCreatedAt($data['CreatedAt']);
            }
            elseif (\array_key_exists('CreatedAt', $data) && $data['CreatedAt'] === null) {
                $object->setCreatedAt(null);
            }
            if (\array_key_exists('UpdatedAt', $data) && $data['UpdatedAt'] !== null) {
                $object->setUpdatedAt($data['UpdatedAt']);
            }
            elseif (\array_key_exists('UpdatedAt', $data) && $data['UpdatedAt'] === null) {
                $object->setUpdatedAt(null);
            }
            if (\array_key_exists('Spec', $data) && $data['Spec'] !== null) {
                $object->setSpec($this->denormalizer->denormalize($data['Spec'], \Docker\API\Model\ServiceSpec::class, 'json', $context));
            }
            elseif (\array_key_exists('Spec', $data) && $data['Spec'] === null) {
                $object->setSpec(null);
            }
            if (\array_key_exists('Endpoint', $data) && $data['Endpoint'] !== null) {
                $object->setEndpoint($this->denormalizer->denormalize($data['Endpoint'], \Docker\API\Model\ServiceEndpoint::class, 'json', $context));
            }
            elseif (\array_key_exists('Endpoint', $data) && $data['Endpoint'] === null) {
                $object->setEndpoint(null);
            }
            if (\array_key_exists('UpdateStatus', $data) && $data['UpdateStatus'] !== null) {
                $object->setUpdateStatus($this->denormalizer->denormalize($data['UpdateStatus'], \Docker\API\Model\ServiceUpdateStatus::class, 'json', $context));
            }
            elseif (\array_key_exists('UpdateStatus', $data) && $data['UpdateStatus'] === null) {
                $object->setUpdateStatus(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('iD') && null !== $object->getID()) {
                $data['ID'] = $object->getID();
            }
            if ($object->isInitialized('version') && null !== $object->getVersion()) {
                $data['Version'] = $this->normalizer->normalize($object->getVersion(), 'json', $context);
            }
            if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
                $data['CreatedAt'] = $object->getCreatedAt();
            }
            if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
                $data['UpdatedAt'] = $object->getUpdatedAt();
            }
            if ($object->isInitialized('spec') && null !== $object->getSpec()) {
                $data['Spec'] = $this->normalizer->normalize($object->getSpec(), 'json', $context);
            }
            if ($object->isInitialized('endpoint') && null !== $object->getEndpoint()) {
                $data['Endpoint'] = $this->normalizer->normalize($object->getEndpoint(), 'json', $context);
            }
            if ($object->isInitialized('updateStatus') && null !== $object->getUpdateStatus()) {
                $data['UpdateStatus'] = $this->normalizer->normalize($object->getUpdateStatus(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\Service::class => false];
        }
    }
}