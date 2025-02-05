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
    class MountPointNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\MountPoint::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\MountPoint::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\MountPoint();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Type', $data) && $data['Type'] !== null) {
                $object->setType($data['Type']);
            }
            elseif (\array_key_exists('Type', $data) && $data['Type'] === null) {
                $object->setType(null);
            }
            if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
                $object->setName($data['Name']);
            }
            elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('Source', $data) && $data['Source'] !== null) {
                $object->setSource($data['Source']);
            }
            elseif (\array_key_exists('Source', $data) && $data['Source'] === null) {
                $object->setSource(null);
            }
            if (\array_key_exists('Destination', $data) && $data['Destination'] !== null) {
                $object->setDestination($data['Destination']);
            }
            elseif (\array_key_exists('Destination', $data) && $data['Destination'] === null) {
                $object->setDestination(null);
            }
            if (\array_key_exists('Driver', $data) && $data['Driver'] !== null) {
                $object->setDriver($data['Driver']);
            }
            elseif (\array_key_exists('Driver', $data) && $data['Driver'] === null) {
                $object->setDriver(null);
            }
            if (\array_key_exists('Mode', $data) && $data['Mode'] !== null) {
                $object->setMode($data['Mode']);
            }
            elseif (\array_key_exists('Mode', $data) && $data['Mode'] === null) {
                $object->setMode(null);
            }
            if (\array_key_exists('RW', $data) && $data['RW'] !== null) {
                $object->setRW($data['RW']);
            }
            elseif (\array_key_exists('RW', $data) && $data['RW'] === null) {
                $object->setRW(null);
            }
            if (\array_key_exists('Propagation', $data) && $data['Propagation'] !== null) {
                $object->setPropagation($data['Propagation']);
            }
            elseif (\array_key_exists('Propagation', $data) && $data['Propagation'] === null) {
                $object->setPropagation(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['Type'] = $object->getType();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['Name'] = $object->getName();
            }
            if ($object->isInitialized('source') && null !== $object->getSource()) {
                $data['Source'] = $object->getSource();
            }
            if ($object->isInitialized('destination') && null !== $object->getDestination()) {
                $data['Destination'] = $object->getDestination();
            }
            if ($object->isInitialized('driver') && null !== $object->getDriver()) {
                $data['Driver'] = $object->getDriver();
            }
            if ($object->isInitialized('mode') && null !== $object->getMode()) {
                $data['Mode'] = $object->getMode();
            }
            if ($object->isInitialized('rW') && null !== $object->getRW()) {
                $data['RW'] = $object->getRW();
            }
            if ($object->isInitialized('propagation') && null !== $object->getPropagation()) {
                $data['Propagation'] = $object->getPropagation();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\MountPoint::class => false];
        }
    }
} else {
    class MountPointNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\MountPoint::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\MountPoint::class;
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
            $object = new \Docker\API\Model\MountPoint();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Type', $data) && $data['Type'] !== null) {
                $object->setType($data['Type']);
            }
            elseif (\array_key_exists('Type', $data) && $data['Type'] === null) {
                $object->setType(null);
            }
            if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
                $object->setName($data['Name']);
            }
            elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('Source', $data) && $data['Source'] !== null) {
                $object->setSource($data['Source']);
            }
            elseif (\array_key_exists('Source', $data) && $data['Source'] === null) {
                $object->setSource(null);
            }
            if (\array_key_exists('Destination', $data) && $data['Destination'] !== null) {
                $object->setDestination($data['Destination']);
            }
            elseif (\array_key_exists('Destination', $data) && $data['Destination'] === null) {
                $object->setDestination(null);
            }
            if (\array_key_exists('Driver', $data) && $data['Driver'] !== null) {
                $object->setDriver($data['Driver']);
            }
            elseif (\array_key_exists('Driver', $data) && $data['Driver'] === null) {
                $object->setDriver(null);
            }
            if (\array_key_exists('Mode', $data) && $data['Mode'] !== null) {
                $object->setMode($data['Mode']);
            }
            elseif (\array_key_exists('Mode', $data) && $data['Mode'] === null) {
                $object->setMode(null);
            }
            if (\array_key_exists('RW', $data) && $data['RW'] !== null) {
                $object->setRW($data['RW']);
            }
            elseif (\array_key_exists('RW', $data) && $data['RW'] === null) {
                $object->setRW(null);
            }
            if (\array_key_exists('Propagation', $data) && $data['Propagation'] !== null) {
                $object->setPropagation($data['Propagation']);
            }
            elseif (\array_key_exists('Propagation', $data) && $data['Propagation'] === null) {
                $object->setPropagation(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['Type'] = $object->getType();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['Name'] = $object->getName();
            }
            if ($object->isInitialized('source') && null !== $object->getSource()) {
                $data['Source'] = $object->getSource();
            }
            if ($object->isInitialized('destination') && null !== $object->getDestination()) {
                $data['Destination'] = $object->getDestination();
            }
            if ($object->isInitialized('driver') && null !== $object->getDriver()) {
                $data['Driver'] = $object->getDriver();
            }
            if ($object->isInitialized('mode') && null !== $object->getMode()) {
                $data['Mode'] = $object->getMode();
            }
            if ($object->isInitialized('rW') && null !== $object->getRW()) {
                $data['RW'] = $object->getRW();
            }
            if ($object->isInitialized('propagation') && null !== $object->getPropagation()) {
                $data['Propagation'] = $object->getPropagation();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\MountPoint::class => false];
        }
    }
}