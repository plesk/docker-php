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
    class HealthConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\HealthConfig::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\HealthConfig::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\HealthConfig();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Test', $data) && $data['Test'] !== null) {
                $values = [];
                foreach ($data['Test'] as $value) {
                    $values[] = $value;
                }
                $object->setTest($values);
            }
            elseif (\array_key_exists('Test', $data) && $data['Test'] === null) {
                $object->setTest(null);
            }
            if (\array_key_exists('Interval', $data) && $data['Interval'] !== null) {
                $object->setInterval($data['Interval']);
            }
            elseif (\array_key_exists('Interval', $data) && $data['Interval'] === null) {
                $object->setInterval(null);
            }
            if (\array_key_exists('Timeout', $data) && $data['Timeout'] !== null) {
                $object->setTimeout($data['Timeout']);
            }
            elseif (\array_key_exists('Timeout', $data) && $data['Timeout'] === null) {
                $object->setTimeout(null);
            }
            if (\array_key_exists('Retries', $data) && $data['Retries'] !== null) {
                $object->setRetries($data['Retries']);
            }
            elseif (\array_key_exists('Retries', $data) && $data['Retries'] === null) {
                $object->setRetries(null);
            }
            if (\array_key_exists('StartPeriod', $data) && $data['StartPeriod'] !== null) {
                $object->setStartPeriod($data['StartPeriod']);
            }
            elseif (\array_key_exists('StartPeriod', $data) && $data['StartPeriod'] === null) {
                $object->setStartPeriod(null);
            }
            if (\array_key_exists('StartInterval', $data) && $data['StartInterval'] !== null) {
                $object->setStartInterval($data['StartInterval']);
            }
            elseif (\array_key_exists('StartInterval', $data) && $data['StartInterval'] === null) {
                $object->setStartInterval(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('test') && null !== $object->getTest()) {
                $values = [];
                foreach ($object->getTest() as $value) {
                    $values[] = $value;
                }
                $data['Test'] = $values;
            }
            if ($object->isInitialized('interval') && null !== $object->getInterval()) {
                $data['Interval'] = $object->getInterval();
            }
            if ($object->isInitialized('timeout') && null !== $object->getTimeout()) {
                $data['Timeout'] = $object->getTimeout();
            }
            if ($object->isInitialized('retries') && null !== $object->getRetries()) {
                $data['Retries'] = $object->getRetries();
            }
            if ($object->isInitialized('startPeriod') && null !== $object->getStartPeriod()) {
                $data['StartPeriod'] = $object->getStartPeriod();
            }
            if ($object->isInitialized('startInterval') && null !== $object->getStartInterval()) {
                $data['StartInterval'] = $object->getStartInterval();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\HealthConfig::class => false];
        }
    }
} else {
    class HealthConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\HealthConfig::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\HealthConfig::class;
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
            $object = new \Docker\API\Model\HealthConfig();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Test', $data) && $data['Test'] !== null) {
                $values = [];
                foreach ($data['Test'] as $value) {
                    $values[] = $value;
                }
                $object->setTest($values);
            }
            elseif (\array_key_exists('Test', $data) && $data['Test'] === null) {
                $object->setTest(null);
            }
            if (\array_key_exists('Interval', $data) && $data['Interval'] !== null) {
                $object->setInterval($data['Interval']);
            }
            elseif (\array_key_exists('Interval', $data) && $data['Interval'] === null) {
                $object->setInterval(null);
            }
            if (\array_key_exists('Timeout', $data) && $data['Timeout'] !== null) {
                $object->setTimeout($data['Timeout']);
            }
            elseif (\array_key_exists('Timeout', $data) && $data['Timeout'] === null) {
                $object->setTimeout(null);
            }
            if (\array_key_exists('Retries', $data) && $data['Retries'] !== null) {
                $object->setRetries($data['Retries']);
            }
            elseif (\array_key_exists('Retries', $data) && $data['Retries'] === null) {
                $object->setRetries(null);
            }
            if (\array_key_exists('StartPeriod', $data) && $data['StartPeriod'] !== null) {
                $object->setStartPeriod($data['StartPeriod']);
            }
            elseif (\array_key_exists('StartPeriod', $data) && $data['StartPeriod'] === null) {
                $object->setStartPeriod(null);
            }
            if (\array_key_exists('StartInterval', $data) && $data['StartInterval'] !== null) {
                $object->setStartInterval($data['StartInterval']);
            }
            elseif (\array_key_exists('StartInterval', $data) && $data['StartInterval'] === null) {
                $object->setStartInterval(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('test') && null !== $object->getTest()) {
                $values = [];
                foreach ($object->getTest() as $value) {
                    $values[] = $value;
                }
                $data['Test'] = $values;
            }
            if ($object->isInitialized('interval') && null !== $object->getInterval()) {
                $data['Interval'] = $object->getInterval();
            }
            if ($object->isInitialized('timeout') && null !== $object->getTimeout()) {
                $data['Timeout'] = $object->getTimeout();
            }
            if ($object->isInitialized('retries') && null !== $object->getRetries()) {
                $data['Retries'] = $object->getRetries();
            }
            if ($object->isInitialized('startPeriod') && null !== $object->getStartPeriod()) {
                $data['StartPeriod'] = $object->getStartPeriod();
            }
            if ($object->isInitialized('startInterval') && null !== $object->getStartInterval()) {
                $data['StartInterval'] = $object->getStartInterval();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\HealthConfig::class => false];
        }
    }
}