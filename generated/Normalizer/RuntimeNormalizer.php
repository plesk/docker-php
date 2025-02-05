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
    class RuntimeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\Runtime::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\Runtime::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\Runtime();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('path', $data) && $data['path'] !== null) {
                $object->setPath($data['path']);
            }
            elseif (\array_key_exists('path', $data) && $data['path'] === null) {
                $object->setPath(null);
            }
            if (\array_key_exists('runtimeArgs', $data) && $data['runtimeArgs'] !== null) {
                $values = [];
                foreach ($data['runtimeArgs'] as $value) {
                    $values[] = $value;
                }
                $object->setRuntimeArgs($values);
            }
            elseif (\array_key_exists('runtimeArgs', $data) && $data['runtimeArgs'] === null) {
                $object->setRuntimeArgs(null);
            }
            if (\array_key_exists('status', $data) && $data['status'] !== null) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['status'] as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $object->setStatus($values_1);
            }
            elseif (\array_key_exists('status', $data) && $data['status'] === null) {
                $object->setStatus(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('path') && null !== $object->getPath()) {
                $data['path'] = $object->getPath();
            }
            if ($object->isInitialized('runtimeArgs') && null !== $object->getRuntimeArgs()) {
                $values = [];
                foreach ($object->getRuntimeArgs() as $value) {
                    $values[] = $value;
                }
                $data['runtimeArgs'] = $values;
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $values_1 = [];
                foreach ($object->getStatus() as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $data['status'] = $values_1;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\Runtime::class => false];
        }
    }
} else {
    class RuntimeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\Runtime::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\Runtime::class;
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
            $object = new \Docker\API\Model\Runtime();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('path', $data) && $data['path'] !== null) {
                $object->setPath($data['path']);
            }
            elseif (\array_key_exists('path', $data) && $data['path'] === null) {
                $object->setPath(null);
            }
            if (\array_key_exists('runtimeArgs', $data) && $data['runtimeArgs'] !== null) {
                $values = [];
                foreach ($data['runtimeArgs'] as $value) {
                    $values[] = $value;
                }
                $object->setRuntimeArgs($values);
            }
            elseif (\array_key_exists('runtimeArgs', $data) && $data['runtimeArgs'] === null) {
                $object->setRuntimeArgs(null);
            }
            if (\array_key_exists('status', $data) && $data['status'] !== null) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['status'] as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $object->setStatus($values_1);
            }
            elseif (\array_key_exists('status', $data) && $data['status'] === null) {
                $object->setStatus(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('path') && null !== $object->getPath()) {
                $data['path'] = $object->getPath();
            }
            if ($object->isInitialized('runtimeArgs') && null !== $object->getRuntimeArgs()) {
                $values = [];
                foreach ($object->getRuntimeArgs() as $value) {
                    $values[] = $value;
                }
                $data['runtimeArgs'] = $values;
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $values_1 = [];
                foreach ($object->getStatus() as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $data['status'] = $values_1;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\Runtime::class => false];
        }
    }
}