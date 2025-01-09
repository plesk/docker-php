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
    class EndpointSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\EndpointSettings::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\EndpointSettings::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\EndpointSettings();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('IPAMConfig', $data) && $data['IPAMConfig'] !== null) {
                $object->setIPAMConfig($this->denormalizer->denormalize($data['IPAMConfig'], \Docker\API\Model\EndpointSettingsIPAMConfig::class, 'json', $context));
            }
            elseif (\array_key_exists('IPAMConfig', $data) && $data['IPAMConfig'] === null) {
                $object->setIPAMConfig(null);
            }
            if (\array_key_exists('Links', $data) && $data['Links'] !== null) {
                $values = [];
                foreach ($data['Links'] as $value) {
                    $values[] = $value;
                }
                $object->setLinks($values);
            }
            elseif (\array_key_exists('Links', $data) && $data['Links'] === null) {
                $object->setLinks(null);
            }
            if (\array_key_exists('Aliases', $data) && $data['Aliases'] !== null) {
                $values_1 = [];
                foreach ($data['Aliases'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setAliases($values_1);
            }
            elseif (\array_key_exists('Aliases', $data) && $data['Aliases'] === null) {
                $object->setAliases(null);
            }
            if (\array_key_exists('NetworkID', $data) && $data['NetworkID'] !== null) {
                $object->setNetworkID($data['NetworkID']);
            }
            elseif (\array_key_exists('NetworkID', $data) && $data['NetworkID'] === null) {
                $object->setNetworkID(null);
            }
            if (\array_key_exists('EndpointID', $data) && $data['EndpointID'] !== null) {
                $object->setEndpointID($data['EndpointID']);
            }
            elseif (\array_key_exists('EndpointID', $data) && $data['EndpointID'] === null) {
                $object->setEndpointID(null);
            }
            if (\array_key_exists('Gateway', $data) && $data['Gateway'] !== null) {
                $object->setGateway($data['Gateway']);
            }
            elseif (\array_key_exists('Gateway', $data) && $data['Gateway'] === null) {
                $object->setGateway(null);
            }
            if (\array_key_exists('IPAddress', $data) && $data['IPAddress'] !== null) {
                $object->setIPAddress($data['IPAddress']);
            }
            elseif (\array_key_exists('IPAddress', $data) && $data['IPAddress'] === null) {
                $object->setIPAddress(null);
            }
            if (\array_key_exists('IPPrefixLen', $data) && $data['IPPrefixLen'] !== null) {
                $object->setIPPrefixLen($data['IPPrefixLen']);
            }
            elseif (\array_key_exists('IPPrefixLen', $data) && $data['IPPrefixLen'] === null) {
                $object->setIPPrefixLen(null);
            }
            if (\array_key_exists('IPv6Gateway', $data) && $data['IPv6Gateway'] !== null) {
                $object->setIPv6Gateway($data['IPv6Gateway']);
            }
            elseif (\array_key_exists('IPv6Gateway', $data) && $data['IPv6Gateway'] === null) {
                $object->setIPv6Gateway(null);
            }
            if (\array_key_exists('GlobalIPv6Address', $data) && $data['GlobalIPv6Address'] !== null) {
                $object->setGlobalIPv6Address($data['GlobalIPv6Address']);
            }
            elseif (\array_key_exists('GlobalIPv6Address', $data) && $data['GlobalIPv6Address'] === null) {
                $object->setGlobalIPv6Address(null);
            }
            if (\array_key_exists('GlobalIPv6PrefixLen', $data) && $data['GlobalIPv6PrefixLen'] !== null) {
                $object->setGlobalIPv6PrefixLen($data['GlobalIPv6PrefixLen']);
            }
            elseif (\array_key_exists('GlobalIPv6PrefixLen', $data) && $data['GlobalIPv6PrefixLen'] === null) {
                $object->setGlobalIPv6PrefixLen(null);
            }
            if (\array_key_exists('MacAddress', $data) && $data['MacAddress'] !== null) {
                $object->setMacAddress($data['MacAddress']);
            }
            elseif (\array_key_exists('MacAddress', $data) && $data['MacAddress'] === null) {
                $object->setMacAddress(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('iPAMConfig') && null !== $object->getIPAMConfig()) {
                $data['IPAMConfig'] = $this->normalizer->normalize($object->getIPAMConfig(), 'json', $context);
            }
            if ($object->isInitialized('links') && null !== $object->getLinks()) {
                $values = [];
                foreach ($object->getLinks() as $value) {
                    $values[] = $value;
                }
                $data['Links'] = $values;
            }
            if ($object->isInitialized('aliases') && null !== $object->getAliases()) {
                $values_1 = [];
                foreach ($object->getAliases() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['Aliases'] = $values_1;
            }
            if ($object->isInitialized('networkID') && null !== $object->getNetworkID()) {
                $data['NetworkID'] = $object->getNetworkID();
            }
            if ($object->isInitialized('endpointID') && null !== $object->getEndpointID()) {
                $data['EndpointID'] = $object->getEndpointID();
            }
            if ($object->isInitialized('gateway') && null !== $object->getGateway()) {
                $data['Gateway'] = $object->getGateway();
            }
            if ($object->isInitialized('iPAddress') && null !== $object->getIPAddress()) {
                $data['IPAddress'] = $object->getIPAddress();
            }
            if ($object->isInitialized('iPPrefixLen') && null !== $object->getIPPrefixLen()) {
                $data['IPPrefixLen'] = $object->getIPPrefixLen();
            }
            if ($object->isInitialized('iPv6Gateway') && null !== $object->getIPv6Gateway()) {
                $data['IPv6Gateway'] = $object->getIPv6Gateway();
            }
            if ($object->isInitialized('globalIPv6Address') && null !== $object->getGlobalIPv6Address()) {
                $data['GlobalIPv6Address'] = $object->getGlobalIPv6Address();
            }
            if ($object->isInitialized('globalIPv6PrefixLen') && null !== $object->getGlobalIPv6PrefixLen()) {
                $data['GlobalIPv6PrefixLen'] = $object->getGlobalIPv6PrefixLen();
            }
            if ($object->isInitialized('macAddress') && null !== $object->getMacAddress()) {
                $data['MacAddress'] = $object->getMacAddress();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\EndpointSettings::class => false];
        }
    }
} else {
    class EndpointSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\EndpointSettings::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\EndpointSettings::class;
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
            $object = new \Docker\API\Model\EndpointSettings();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('IPAMConfig', $data) && $data['IPAMConfig'] !== null) {
                $object->setIPAMConfig($this->denormalizer->denormalize($data['IPAMConfig'], \Docker\API\Model\EndpointSettingsIPAMConfig::class, 'json', $context));
            }
            elseif (\array_key_exists('IPAMConfig', $data) && $data['IPAMConfig'] === null) {
                $object->setIPAMConfig(null);
            }
            if (\array_key_exists('Links', $data) && $data['Links'] !== null) {
                $values = [];
                foreach ($data['Links'] as $value) {
                    $values[] = $value;
                }
                $object->setLinks($values);
            }
            elseif (\array_key_exists('Links', $data) && $data['Links'] === null) {
                $object->setLinks(null);
            }
            if (\array_key_exists('Aliases', $data) && $data['Aliases'] !== null) {
                $values_1 = [];
                foreach ($data['Aliases'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setAliases($values_1);
            }
            elseif (\array_key_exists('Aliases', $data) && $data['Aliases'] === null) {
                $object->setAliases(null);
            }
            if (\array_key_exists('NetworkID', $data) && $data['NetworkID'] !== null) {
                $object->setNetworkID($data['NetworkID']);
            }
            elseif (\array_key_exists('NetworkID', $data) && $data['NetworkID'] === null) {
                $object->setNetworkID(null);
            }
            if (\array_key_exists('EndpointID', $data) && $data['EndpointID'] !== null) {
                $object->setEndpointID($data['EndpointID']);
            }
            elseif (\array_key_exists('EndpointID', $data) && $data['EndpointID'] === null) {
                $object->setEndpointID(null);
            }
            if (\array_key_exists('Gateway', $data) && $data['Gateway'] !== null) {
                $object->setGateway($data['Gateway']);
            }
            elseif (\array_key_exists('Gateway', $data) && $data['Gateway'] === null) {
                $object->setGateway(null);
            }
            if (\array_key_exists('IPAddress', $data) && $data['IPAddress'] !== null) {
                $object->setIPAddress($data['IPAddress']);
            }
            elseif (\array_key_exists('IPAddress', $data) && $data['IPAddress'] === null) {
                $object->setIPAddress(null);
            }
            if (\array_key_exists('IPPrefixLen', $data) && $data['IPPrefixLen'] !== null) {
                $object->setIPPrefixLen($data['IPPrefixLen']);
            }
            elseif (\array_key_exists('IPPrefixLen', $data) && $data['IPPrefixLen'] === null) {
                $object->setIPPrefixLen(null);
            }
            if (\array_key_exists('IPv6Gateway', $data) && $data['IPv6Gateway'] !== null) {
                $object->setIPv6Gateway($data['IPv6Gateway']);
            }
            elseif (\array_key_exists('IPv6Gateway', $data) && $data['IPv6Gateway'] === null) {
                $object->setIPv6Gateway(null);
            }
            if (\array_key_exists('GlobalIPv6Address', $data) && $data['GlobalIPv6Address'] !== null) {
                $object->setGlobalIPv6Address($data['GlobalIPv6Address']);
            }
            elseif (\array_key_exists('GlobalIPv6Address', $data) && $data['GlobalIPv6Address'] === null) {
                $object->setGlobalIPv6Address(null);
            }
            if (\array_key_exists('GlobalIPv6PrefixLen', $data) && $data['GlobalIPv6PrefixLen'] !== null) {
                $object->setGlobalIPv6PrefixLen($data['GlobalIPv6PrefixLen']);
            }
            elseif (\array_key_exists('GlobalIPv6PrefixLen', $data) && $data['GlobalIPv6PrefixLen'] === null) {
                $object->setGlobalIPv6PrefixLen(null);
            }
            if (\array_key_exists('MacAddress', $data) && $data['MacAddress'] !== null) {
                $object->setMacAddress($data['MacAddress']);
            }
            elseif (\array_key_exists('MacAddress', $data) && $data['MacAddress'] === null) {
                $object->setMacAddress(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('iPAMConfig') && null !== $object->getIPAMConfig()) {
                $data['IPAMConfig'] = $this->normalizer->normalize($object->getIPAMConfig(), 'json', $context);
            }
            if ($object->isInitialized('links') && null !== $object->getLinks()) {
                $values = [];
                foreach ($object->getLinks() as $value) {
                    $values[] = $value;
                }
                $data['Links'] = $values;
            }
            if ($object->isInitialized('aliases') && null !== $object->getAliases()) {
                $values_1 = [];
                foreach ($object->getAliases() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['Aliases'] = $values_1;
            }
            if ($object->isInitialized('networkID') && null !== $object->getNetworkID()) {
                $data['NetworkID'] = $object->getNetworkID();
            }
            if ($object->isInitialized('endpointID') && null !== $object->getEndpointID()) {
                $data['EndpointID'] = $object->getEndpointID();
            }
            if ($object->isInitialized('gateway') && null !== $object->getGateway()) {
                $data['Gateway'] = $object->getGateway();
            }
            if ($object->isInitialized('iPAddress') && null !== $object->getIPAddress()) {
                $data['IPAddress'] = $object->getIPAddress();
            }
            if ($object->isInitialized('iPPrefixLen') && null !== $object->getIPPrefixLen()) {
                $data['IPPrefixLen'] = $object->getIPPrefixLen();
            }
            if ($object->isInitialized('iPv6Gateway') && null !== $object->getIPv6Gateway()) {
                $data['IPv6Gateway'] = $object->getIPv6Gateway();
            }
            if ($object->isInitialized('globalIPv6Address') && null !== $object->getGlobalIPv6Address()) {
                $data['GlobalIPv6Address'] = $object->getGlobalIPv6Address();
            }
            if ($object->isInitialized('globalIPv6PrefixLen') && null !== $object->getGlobalIPv6PrefixLen()) {
                $data['GlobalIPv6PrefixLen'] = $object->getGlobalIPv6PrefixLen();
            }
            if ($object->isInitialized('macAddress') && null !== $object->getMacAddress()) {
                $data['MacAddress'] = $object->getMacAddress();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\EndpointSettings::class => false];
        }
    }
}