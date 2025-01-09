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
    class NetworkContainerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\NetworkContainer::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\NetworkContainer::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\NetworkContainer();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('EndpointID', $data) && $data['EndpointID'] !== null) {
                $object->setEndpointID($data['EndpointID']);
            }
            elseif (\array_key_exists('EndpointID', $data) && $data['EndpointID'] === null) {
                $object->setEndpointID(null);
            }
            if (\array_key_exists('MacAddress', $data) && $data['MacAddress'] !== null) {
                $object->setMacAddress($data['MacAddress']);
            }
            elseif (\array_key_exists('MacAddress', $data) && $data['MacAddress'] === null) {
                $object->setMacAddress(null);
            }
            if (\array_key_exists('IPv4Address', $data) && $data['IPv4Address'] !== null) {
                $object->setIPv4Address($data['IPv4Address']);
            }
            elseif (\array_key_exists('IPv4Address', $data) && $data['IPv4Address'] === null) {
                $object->setIPv4Address(null);
            }
            if (\array_key_exists('IPv6Address', $data) && $data['IPv6Address'] !== null) {
                $object->setIPv6Address($data['IPv6Address']);
            }
            elseif (\array_key_exists('IPv6Address', $data) && $data['IPv6Address'] === null) {
                $object->setIPv6Address(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('endpointID') && null !== $object->getEndpointID()) {
                $data['EndpointID'] = $object->getEndpointID();
            }
            if ($object->isInitialized('macAddress') && null !== $object->getMacAddress()) {
                $data['MacAddress'] = $object->getMacAddress();
            }
            if ($object->isInitialized('iPv4Address') && null !== $object->getIPv4Address()) {
                $data['IPv4Address'] = $object->getIPv4Address();
            }
            if ($object->isInitialized('iPv6Address') && null !== $object->getIPv6Address()) {
                $data['IPv6Address'] = $object->getIPv6Address();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\NetworkContainer::class => false];
        }
    }
} else {
    class NetworkContainerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\NetworkContainer::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\NetworkContainer::class;
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
            $object = new \Docker\API\Model\NetworkContainer();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('EndpointID', $data) && $data['EndpointID'] !== null) {
                $object->setEndpointID($data['EndpointID']);
            }
            elseif (\array_key_exists('EndpointID', $data) && $data['EndpointID'] === null) {
                $object->setEndpointID(null);
            }
            if (\array_key_exists('MacAddress', $data) && $data['MacAddress'] !== null) {
                $object->setMacAddress($data['MacAddress']);
            }
            elseif (\array_key_exists('MacAddress', $data) && $data['MacAddress'] === null) {
                $object->setMacAddress(null);
            }
            if (\array_key_exists('IPv4Address', $data) && $data['IPv4Address'] !== null) {
                $object->setIPv4Address($data['IPv4Address']);
            }
            elseif (\array_key_exists('IPv4Address', $data) && $data['IPv4Address'] === null) {
                $object->setIPv4Address(null);
            }
            if (\array_key_exists('IPv6Address', $data) && $data['IPv6Address'] !== null) {
                $object->setIPv6Address($data['IPv6Address']);
            }
            elseif (\array_key_exists('IPv6Address', $data) && $data['IPv6Address'] === null) {
                $object->setIPv6Address(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('endpointID') && null !== $object->getEndpointID()) {
                $data['EndpointID'] = $object->getEndpointID();
            }
            if ($object->isInitialized('macAddress') && null !== $object->getMacAddress()) {
                $data['MacAddress'] = $object->getMacAddress();
            }
            if ($object->isInitialized('iPv4Address') && null !== $object->getIPv4Address()) {
                $data['IPv4Address'] = $object->getIPv4Address();
            }
            if ($object->isInitialized('iPv6Address') && null !== $object->getIPv6Address()) {
                $data['IPv6Address'] = $object->getIPv6Address();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\NetworkContainer::class => false];
        }
    }
}