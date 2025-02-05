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
    class TaskSpecRestartPolicyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\TaskSpecRestartPolicy::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\TaskSpecRestartPolicy::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\TaskSpecRestartPolicy();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Condition', $data) && $data['Condition'] !== null) {
                $object->setCondition($data['Condition']);
            }
            elseif (\array_key_exists('Condition', $data) && $data['Condition'] === null) {
                $object->setCondition(null);
            }
            if (\array_key_exists('Delay', $data) && $data['Delay'] !== null) {
                $object->setDelay($data['Delay']);
            }
            elseif (\array_key_exists('Delay', $data) && $data['Delay'] === null) {
                $object->setDelay(null);
            }
            if (\array_key_exists('MaxAttempts', $data) && $data['MaxAttempts'] !== null) {
                $object->setMaxAttempts($data['MaxAttempts']);
            }
            elseif (\array_key_exists('MaxAttempts', $data) && $data['MaxAttempts'] === null) {
                $object->setMaxAttempts(null);
            }
            if (\array_key_exists('Window', $data) && $data['Window'] !== null) {
                $object->setWindow($data['Window']);
            }
            elseif (\array_key_exists('Window', $data) && $data['Window'] === null) {
                $object->setWindow(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('condition') && null !== $object->getCondition()) {
                $data['Condition'] = $object->getCondition();
            }
            if ($object->isInitialized('delay') && null !== $object->getDelay()) {
                $data['Delay'] = $object->getDelay();
            }
            if ($object->isInitialized('maxAttempts') && null !== $object->getMaxAttempts()) {
                $data['MaxAttempts'] = $object->getMaxAttempts();
            }
            if ($object->isInitialized('window') && null !== $object->getWindow()) {
                $data['Window'] = $object->getWindow();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\TaskSpecRestartPolicy::class => false];
        }
    }
} else {
    class TaskSpecRestartPolicyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\TaskSpecRestartPolicy::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\TaskSpecRestartPolicy::class;
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
            $object = new \Docker\API\Model\TaskSpecRestartPolicy();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Condition', $data) && $data['Condition'] !== null) {
                $object->setCondition($data['Condition']);
            }
            elseif (\array_key_exists('Condition', $data) && $data['Condition'] === null) {
                $object->setCondition(null);
            }
            if (\array_key_exists('Delay', $data) && $data['Delay'] !== null) {
                $object->setDelay($data['Delay']);
            }
            elseif (\array_key_exists('Delay', $data) && $data['Delay'] === null) {
                $object->setDelay(null);
            }
            if (\array_key_exists('MaxAttempts', $data) && $data['MaxAttempts'] !== null) {
                $object->setMaxAttempts($data['MaxAttempts']);
            }
            elseif (\array_key_exists('MaxAttempts', $data) && $data['MaxAttempts'] === null) {
                $object->setMaxAttempts(null);
            }
            if (\array_key_exists('Window', $data) && $data['Window'] !== null) {
                $object->setWindow($data['Window']);
            }
            elseif (\array_key_exists('Window', $data) && $data['Window'] === null) {
                $object->setWindow(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('condition') && null !== $object->getCondition()) {
                $data['Condition'] = $object->getCondition();
            }
            if ($object->isInitialized('delay') && null !== $object->getDelay()) {
                $data['Delay'] = $object->getDelay();
            }
            if ($object->isInitialized('maxAttempts') && null !== $object->getMaxAttempts()) {
                $data['MaxAttempts'] = $object->getMaxAttempts();
            }
            if ($object->isInitialized('window') && null !== $object->getWindow()) {
                $data['Window'] = $object->getWindow();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\TaskSpecRestartPolicy::class => false];
        }
    }
}