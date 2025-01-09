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
    class NetworkConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\NetworkConfig::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\NetworkConfig::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\NetworkConfig();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Bridge', $data) && $data['Bridge'] !== null) {
                $object->setBridge($data['Bridge']);
            }
            elseif (\array_key_exists('Bridge', $data) && $data['Bridge'] === null) {
                $object->setBridge(null);
            }
            if (\array_key_exists('Gateway', $data) && $data['Gateway'] !== null) {
                $object->setGateway($data['Gateway']);
            }
            elseif (\array_key_exists('Gateway', $data) && $data['Gateway'] === null) {
                $object->setGateway(null);
            }
            if (\array_key_exists('Address', $data) && $data['Address'] !== null) {
                $object->setAddress($data['Address']);
            }
            elseif (\array_key_exists('Address', $data) && $data['Address'] === null) {
                $object->setAddress(null);
            }
            if (\array_key_exists('IPPrefixLen', $data) && $data['IPPrefixLen'] !== null) {
                $object->setIPPrefixLen($data['IPPrefixLen']);
            }
            elseif (\array_key_exists('IPPrefixLen', $data) && $data['IPPrefixLen'] === null) {
                $object->setIPPrefixLen(null);
            }
            if (\array_key_exists('MacAddress', $data) && $data['MacAddress'] !== null) {
                $object->setMacAddress($data['MacAddress']);
            }
            elseif (\array_key_exists('MacAddress', $data) && $data['MacAddress'] === null) {
                $object->setMacAddress(null);
            }
            if (\array_key_exists('PortMapping', $data) && $data['PortMapping'] !== null) {
                $object->setPortMapping($data['PortMapping']);
            }
            elseif (\array_key_exists('PortMapping', $data) && $data['PortMapping'] === null) {
                $object->setPortMapping(null);
            }
            if (\array_key_exists('Ports', $data) && $data['Ports'] !== null) {
                $values = [];
                foreach ($data['Ports'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Docker\API\Model\Port::class, 'json', $context);
                }
                $object->setPorts($values);
            }
            elseif (\array_key_exists('Ports', $data) && $data['Ports'] === null) {
                $object->setPorts(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('bridge') && null !== $object->getBridge()) {
                $data['Bridge'] = $object->getBridge();
            }
            if ($object->isInitialized('gateway') && null !== $object->getGateway()) {
                $data['Gateway'] = $object->getGateway();
            }
            if ($object->isInitialized('address') && null !== $object->getAddress()) {
                $data['Address'] = $object->getAddress();
            }
            if ($object->isInitialized('iPPrefixLen') && null !== $object->getIPPrefixLen()) {
                $data['IPPrefixLen'] = $object->getIPPrefixLen();
            }
            if ($object->isInitialized('macAddress') && null !== $object->getMacAddress()) {
                $data['MacAddress'] = $object->getMacAddress();
            }
            if ($object->isInitialized('portMapping') && null !== $object->getPortMapping()) {
                $data['PortMapping'] = $object->getPortMapping();
            }
            if ($object->isInitialized('ports') && null !== $object->getPorts()) {
                $values = [];
                foreach ($object->getPorts() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Ports'] = $values;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\NetworkConfig::class => false];
        }
    }
} else {
    class NetworkConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\NetworkConfig::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\NetworkConfig::class;
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
            $object = new \Docker\API\Model\NetworkConfig();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Bridge', $data) && $data['Bridge'] !== null) {
                $object->setBridge($data['Bridge']);
            }
            elseif (\array_key_exists('Bridge', $data) && $data['Bridge'] === null) {
                $object->setBridge(null);
            }
            if (\array_key_exists('Gateway', $data) && $data['Gateway'] !== null) {
                $object->setGateway($data['Gateway']);
            }
            elseif (\array_key_exists('Gateway', $data) && $data['Gateway'] === null) {
                $object->setGateway(null);
            }
            if (\array_key_exists('Address', $data) && $data['Address'] !== null) {
                $object->setAddress($data['Address']);
            }
            elseif (\array_key_exists('Address', $data) && $data['Address'] === null) {
                $object->setAddress(null);
            }
            if (\array_key_exists('IPPrefixLen', $data) && $data['IPPrefixLen'] !== null) {
                $object->setIPPrefixLen($data['IPPrefixLen']);
            }
            elseif (\array_key_exists('IPPrefixLen', $data) && $data['IPPrefixLen'] === null) {
                $object->setIPPrefixLen(null);
            }
            if (\array_key_exists('MacAddress', $data) && $data['MacAddress'] !== null) {
                $object->setMacAddress($data['MacAddress']);
            }
            elseif (\array_key_exists('MacAddress', $data) && $data['MacAddress'] === null) {
                $object->setMacAddress(null);
            }
            if (\array_key_exists('PortMapping', $data) && $data['PortMapping'] !== null) {
                $object->setPortMapping($data['PortMapping']);
            }
            elseif (\array_key_exists('PortMapping', $data) && $data['PortMapping'] === null) {
                $object->setPortMapping(null);
            }
            if (\array_key_exists('Ports', $data) && $data['Ports'] !== null) {
                $values = [];
                foreach ($data['Ports'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Docker\API\Model\Port::class, 'json', $context);
                }
                $object->setPorts($values);
            }
            elseif (\array_key_exists('Ports', $data) && $data['Ports'] === null) {
                $object->setPorts(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('bridge') && null !== $object->getBridge()) {
                $data['Bridge'] = $object->getBridge();
            }
            if ($object->isInitialized('gateway') && null !== $object->getGateway()) {
                $data['Gateway'] = $object->getGateway();
            }
            if ($object->isInitialized('address') && null !== $object->getAddress()) {
                $data['Address'] = $object->getAddress();
            }
            if ($object->isInitialized('iPPrefixLen') && null !== $object->getIPPrefixLen()) {
                $data['IPPrefixLen'] = $object->getIPPrefixLen();
            }
            if ($object->isInitialized('macAddress') && null !== $object->getMacAddress()) {
                $data['MacAddress'] = $object->getMacAddress();
            }
            if ($object->isInitialized('portMapping') && null !== $object->getPortMapping()) {
                $data['PortMapping'] = $object->getPortMapping();
            }
            if ($object->isInitialized('ports') && null !== $object->getPorts()) {
                $values = [];
                foreach ($object->getPorts() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Ports'] = $values;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\NetworkConfig::class => false];
        }
    }
}