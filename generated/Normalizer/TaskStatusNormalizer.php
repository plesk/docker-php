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
    class TaskStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\TaskStatus::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\TaskStatus::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\TaskStatus();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Timestamp', $data) && $data['Timestamp'] !== null) {
                $object->setTimestamp($data['Timestamp']);
            }
            elseif (\array_key_exists('Timestamp', $data) && $data['Timestamp'] === null) {
                $object->setTimestamp(null);
            }
            if (\array_key_exists('State', $data) && $data['State'] !== null) {
                $object->setState($data['State']);
            }
            elseif (\array_key_exists('State', $data) && $data['State'] === null) {
                $object->setState(null);
            }
            if (\array_key_exists('Message', $data) && $data['Message'] !== null) {
                $object->setMessage($data['Message']);
            }
            elseif (\array_key_exists('Message', $data) && $data['Message'] === null) {
                $object->setMessage(null);
            }
            if (\array_key_exists('Err', $data) && $data['Err'] !== null) {
                $object->setErr($data['Err']);
            }
            elseif (\array_key_exists('Err', $data) && $data['Err'] === null) {
                $object->setErr(null);
            }
            if (\array_key_exists('ContainerStatus', $data) && $data['ContainerStatus'] !== null) {
                $object->setContainerStatus($this->denormalizer->denormalize($data['ContainerStatus'], \Docker\API\Model\TaskStatusContainerStatus::class, 'json', $context));
            }
            elseif (\array_key_exists('ContainerStatus', $data) && $data['ContainerStatus'] === null) {
                $object->setContainerStatus(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('timestamp') && null !== $object->getTimestamp()) {
                $data['Timestamp'] = $object->getTimestamp();
            }
            if ($object->isInitialized('state') && null !== $object->getState()) {
                $data['State'] = $object->getState();
            }
            if ($object->isInitialized('message') && null !== $object->getMessage()) {
                $data['Message'] = $object->getMessage();
            }
            if ($object->isInitialized('err') && null !== $object->getErr()) {
                $data['Err'] = $object->getErr();
            }
            if ($object->isInitialized('containerStatus') && null !== $object->getContainerStatus()) {
                $data['ContainerStatus'] = $this->normalizer->normalize($object->getContainerStatus(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\TaskStatus::class => false];
        }
    }
} else {
    class TaskStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\TaskStatus::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\TaskStatus::class;
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
            $object = new \Docker\API\Model\TaskStatus();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Timestamp', $data) && $data['Timestamp'] !== null) {
                $object->setTimestamp($data['Timestamp']);
            }
            elseif (\array_key_exists('Timestamp', $data) && $data['Timestamp'] === null) {
                $object->setTimestamp(null);
            }
            if (\array_key_exists('State', $data) && $data['State'] !== null) {
                $object->setState($data['State']);
            }
            elseif (\array_key_exists('State', $data) && $data['State'] === null) {
                $object->setState(null);
            }
            if (\array_key_exists('Message', $data) && $data['Message'] !== null) {
                $object->setMessage($data['Message']);
            }
            elseif (\array_key_exists('Message', $data) && $data['Message'] === null) {
                $object->setMessage(null);
            }
            if (\array_key_exists('Err', $data) && $data['Err'] !== null) {
                $object->setErr($data['Err']);
            }
            elseif (\array_key_exists('Err', $data) && $data['Err'] === null) {
                $object->setErr(null);
            }
            if (\array_key_exists('ContainerStatus', $data) && $data['ContainerStatus'] !== null) {
                $object->setContainerStatus($this->denormalizer->denormalize($data['ContainerStatus'], \Docker\API\Model\TaskStatusContainerStatus::class, 'json', $context));
            }
            elseif (\array_key_exists('ContainerStatus', $data) && $data['ContainerStatus'] === null) {
                $object->setContainerStatus(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('timestamp') && null !== $object->getTimestamp()) {
                $data['Timestamp'] = $object->getTimestamp();
            }
            if ($object->isInitialized('state') && null !== $object->getState()) {
                $data['State'] = $object->getState();
            }
            if ($object->isInitialized('message') && null !== $object->getMessage()) {
                $data['Message'] = $object->getMessage();
            }
            if ($object->isInitialized('err') && null !== $object->getErr()) {
                $data['Err'] = $object->getErr();
            }
            if ($object->isInitialized('containerStatus') && null !== $object->getContainerStatus()) {
                $data['ContainerStatus'] = $this->normalizer->normalize($object->getContainerStatus(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\TaskStatus::class => false];
        }
    }
}