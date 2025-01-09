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
    class ContainersIdTopGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\ContainersIdTopGetResponse200::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\ContainersIdTopGetResponse200::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\ContainersIdTopGetResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Titles', $data) && $data['Titles'] !== null) {
                $values = [];
                foreach ($data['Titles'] as $value) {
                    $values[] = $value;
                }
                $object->setTitles($values);
            }
            elseif (\array_key_exists('Titles', $data) && $data['Titles'] === null) {
                $object->setTitles(null);
            }
            if (\array_key_exists('Processes', $data) && $data['Processes'] !== null) {
                $values_1 = [];
                foreach ($data['Processes'] as $value_1) {
                    $values_2 = [];
                    foreach ($value_1 as $value_2) {
                        $values_2[] = $value_2;
                    }
                    $values_1[] = $values_2;
                }
                $object->setProcesses($values_1);
            }
            elseif (\array_key_exists('Processes', $data) && $data['Processes'] === null) {
                $object->setProcesses(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('titles') && null !== $object->getTitles()) {
                $values = [];
                foreach ($object->getTitles() as $value) {
                    $values[] = $value;
                }
                $data['Titles'] = $values;
            }
            if ($object->isInitialized('processes') && null !== $object->getProcesses()) {
                $values_1 = [];
                foreach ($object->getProcesses() as $value_1) {
                    $values_2 = [];
                    foreach ($value_1 as $value_2) {
                        $values_2[] = $value_2;
                    }
                    $values_1[] = $values_2;
                }
                $data['Processes'] = $values_1;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\ContainersIdTopGetResponse200::class => false];
        }
    }
} else {
    class ContainersIdTopGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\ContainersIdTopGetResponse200::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\ContainersIdTopGetResponse200::class;
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
            $object = new \Docker\API\Model\ContainersIdTopGetResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Titles', $data) && $data['Titles'] !== null) {
                $values = [];
                foreach ($data['Titles'] as $value) {
                    $values[] = $value;
                }
                $object->setTitles($values);
            }
            elseif (\array_key_exists('Titles', $data) && $data['Titles'] === null) {
                $object->setTitles(null);
            }
            if (\array_key_exists('Processes', $data) && $data['Processes'] !== null) {
                $values_1 = [];
                foreach ($data['Processes'] as $value_1) {
                    $values_2 = [];
                    foreach ($value_1 as $value_2) {
                        $values_2[] = $value_2;
                    }
                    $values_1[] = $values_2;
                }
                $object->setProcesses($values_1);
            }
            elseif (\array_key_exists('Processes', $data) && $data['Processes'] === null) {
                $object->setProcesses(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('titles') && null !== $object->getTitles()) {
                $values = [];
                foreach ($object->getTitles() as $value) {
                    $values[] = $value;
                }
                $data['Titles'] = $values;
            }
            if ($object->isInitialized('processes') && null !== $object->getProcesses()) {
                $values_1 = [];
                foreach ($object->getProcesses() as $value_1) {
                    $values_2 = [];
                    foreach ($value_1 as $value_2) {
                        $values_2[] = $value_2;
                    }
                    $values_1[] = $values_2;
                }
                $data['Processes'] = $values_1;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\ContainersIdTopGetResponse200::class => false];
        }
    }
}