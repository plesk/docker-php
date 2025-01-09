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
    class ServiceUpdateStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\ServiceUpdateStatus::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\ServiceUpdateStatus::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\ServiceUpdateStatus();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('State', $data) && $data['State'] !== null) {
                $object->setState($data['State']);
            }
            elseif (\array_key_exists('State', $data) && $data['State'] === null) {
                $object->setState(null);
            }
            if (\array_key_exists('StartedAt', $data) && $data['StartedAt'] !== null) {
                $object->setStartedAt($data['StartedAt']);
            }
            elseif (\array_key_exists('StartedAt', $data) && $data['StartedAt'] === null) {
                $object->setStartedAt(null);
            }
            if (\array_key_exists('CompletedAt', $data) && $data['CompletedAt'] !== null) {
                $object->setCompletedAt($data['CompletedAt']);
            }
            elseif (\array_key_exists('CompletedAt', $data) && $data['CompletedAt'] === null) {
                $object->setCompletedAt(null);
            }
            if (\array_key_exists('Message', $data) && $data['Message'] !== null) {
                $object->setMessage($data['Message']);
            }
            elseif (\array_key_exists('Message', $data) && $data['Message'] === null) {
                $object->setMessage(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('state') && null !== $object->getState()) {
                $data['State'] = $object->getState();
            }
            if ($object->isInitialized('startedAt') && null !== $object->getStartedAt()) {
                $data['StartedAt'] = $object->getStartedAt();
            }
            if ($object->isInitialized('completedAt') && null !== $object->getCompletedAt()) {
                $data['CompletedAt'] = $object->getCompletedAt();
            }
            if ($object->isInitialized('message') && null !== $object->getMessage()) {
                $data['Message'] = $object->getMessage();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\ServiceUpdateStatus::class => false];
        }
    }
} else {
    class ServiceUpdateStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\ServiceUpdateStatus::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\ServiceUpdateStatus::class;
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
            $object = new \Docker\API\Model\ServiceUpdateStatus();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('State', $data) && $data['State'] !== null) {
                $object->setState($data['State']);
            }
            elseif (\array_key_exists('State', $data) && $data['State'] === null) {
                $object->setState(null);
            }
            if (\array_key_exists('StartedAt', $data) && $data['StartedAt'] !== null) {
                $object->setStartedAt($data['StartedAt']);
            }
            elseif (\array_key_exists('StartedAt', $data) && $data['StartedAt'] === null) {
                $object->setStartedAt(null);
            }
            if (\array_key_exists('CompletedAt', $data) && $data['CompletedAt'] !== null) {
                $object->setCompletedAt($data['CompletedAt']);
            }
            elseif (\array_key_exists('CompletedAt', $data) && $data['CompletedAt'] === null) {
                $object->setCompletedAt(null);
            }
            if (\array_key_exists('Message', $data) && $data['Message'] !== null) {
                $object->setMessage($data['Message']);
            }
            elseif (\array_key_exists('Message', $data) && $data['Message'] === null) {
                $object->setMessage(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('state') && null !== $object->getState()) {
                $data['State'] = $object->getState();
            }
            if ($object->isInitialized('startedAt') && null !== $object->getStartedAt()) {
                $data['StartedAt'] = $object->getStartedAt();
            }
            if ($object->isInitialized('completedAt') && null !== $object->getCompletedAt()) {
                $data['CompletedAt'] = $object->getCompletedAt();
            }
            if ($object->isInitialized('message') && null !== $object->getMessage()) {
                $data['Message'] = $object->getMessage();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\ServiceUpdateStatus::class => false];
        }
    }
}