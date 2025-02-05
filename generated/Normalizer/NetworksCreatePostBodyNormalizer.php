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
    class NetworksCreatePostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\NetworksCreatePostBody::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\NetworksCreatePostBody::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\NetworksCreatePostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
                $object->setName($data['Name']);
            }
            elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('Driver', $data) && $data['Driver'] !== null) {
                $object->setDriver($data['Driver']);
            }
            elseif (\array_key_exists('Driver', $data) && $data['Driver'] === null) {
                $object->setDriver(null);
            }
            if (\array_key_exists('Scope', $data) && $data['Scope'] !== null) {
                $object->setScope($data['Scope']);
            }
            elseif (\array_key_exists('Scope', $data) && $data['Scope'] === null) {
                $object->setScope(null);
            }
            if (\array_key_exists('Internal', $data) && $data['Internal'] !== null) {
                $object->setInternal($data['Internal']);
            }
            elseif (\array_key_exists('Internal', $data) && $data['Internal'] === null) {
                $object->setInternal(null);
            }
            if (\array_key_exists('Attachable', $data) && $data['Attachable'] !== null) {
                $object->setAttachable($data['Attachable']);
            }
            elseif (\array_key_exists('Attachable', $data) && $data['Attachable'] === null) {
                $object->setAttachable(null);
            }
            if (\array_key_exists('Ingress', $data) && $data['Ingress'] !== null) {
                $object->setIngress($data['Ingress']);
            }
            elseif (\array_key_exists('Ingress', $data) && $data['Ingress'] === null) {
                $object->setIngress(null);
            }
            if (\array_key_exists('ConfigOnly', $data) && $data['ConfigOnly'] !== null) {
                $object->setConfigOnly($data['ConfigOnly']);
            }
            elseif (\array_key_exists('ConfigOnly', $data) && $data['ConfigOnly'] === null) {
                $object->setConfigOnly(null);
            }
            if (\array_key_exists('ConfigFrom', $data) && $data['ConfigFrom'] !== null) {
                $object->setConfigFrom($this->denormalizer->denormalize($data['ConfigFrom'], \Docker\API\Model\ConfigReference::class, 'json', $context));
            }
            elseif (\array_key_exists('ConfigFrom', $data) && $data['ConfigFrom'] === null) {
                $object->setConfigFrom(null);
            }
            if (\array_key_exists('IPAM', $data) && $data['IPAM'] !== null) {
                $object->setIPAM($this->denormalizer->denormalize($data['IPAM'], \Docker\API\Model\IPAM::class, 'json', $context));
            }
            elseif (\array_key_exists('IPAM', $data) && $data['IPAM'] === null) {
                $object->setIPAM(null);
            }
            if (\array_key_exists('EnableIPv4', $data) && $data['EnableIPv4'] !== null) {
                $object->setEnableIPv4($data['EnableIPv4']);
            }
            elseif (\array_key_exists('EnableIPv4', $data) && $data['EnableIPv4'] === null) {
                $object->setEnableIPv4(null);
            }
            if (\array_key_exists('EnableIPv6', $data) && $data['EnableIPv6'] !== null) {
                $object->setEnableIPv6($data['EnableIPv6']);
            }
            elseif (\array_key_exists('EnableIPv6', $data) && $data['EnableIPv6'] === null) {
                $object->setEnableIPv6(null);
            }
            if (\array_key_exists('Options', $data) && $data['Options'] !== null) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Options'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setOptions($values);
            }
            elseif (\array_key_exists('Options', $data) && $data['Options'] === null) {
                $object->setOptions(null);
            }
            if (\array_key_exists('Labels', $data) && $data['Labels'] !== null) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Labels'] as $key_1 => $value_1) {
                    $values_1[$key_1] = $value_1;
                }
                $object->setLabels($values_1);
            }
            elseif (\array_key_exists('Labels', $data) && $data['Labels'] === null) {
                $object->setLabels(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['Name'] = $object->getName();
            if ($object->isInitialized('driver') && null !== $object->getDriver()) {
                $data['Driver'] = $object->getDriver();
            }
            if ($object->isInitialized('scope') && null !== $object->getScope()) {
                $data['Scope'] = $object->getScope();
            }
            if ($object->isInitialized('internal') && null !== $object->getInternal()) {
                $data['Internal'] = $object->getInternal();
            }
            if ($object->isInitialized('attachable') && null !== $object->getAttachable()) {
                $data['Attachable'] = $object->getAttachable();
            }
            if ($object->isInitialized('ingress') && null !== $object->getIngress()) {
                $data['Ingress'] = $object->getIngress();
            }
            if ($object->isInitialized('configOnly') && null !== $object->getConfigOnly()) {
                $data['ConfigOnly'] = $object->getConfigOnly();
            }
            if ($object->isInitialized('configFrom') && null !== $object->getConfigFrom()) {
                $data['ConfigFrom'] = $this->normalizer->normalize($object->getConfigFrom(), 'json', $context);
            }
            if ($object->isInitialized('iPAM') && null !== $object->getIPAM()) {
                $data['IPAM'] = $this->normalizer->normalize($object->getIPAM(), 'json', $context);
            }
            if ($object->isInitialized('enableIPv4') && null !== $object->getEnableIPv4()) {
                $data['EnableIPv4'] = $object->getEnableIPv4();
            }
            if ($object->isInitialized('enableIPv6') && null !== $object->getEnableIPv6()) {
                $data['EnableIPv6'] = $object->getEnableIPv6();
            }
            if ($object->isInitialized('options') && null !== $object->getOptions()) {
                $values = [];
                foreach ($object->getOptions() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['Options'] = $values;
            }
            if ($object->isInitialized('labels') && null !== $object->getLabels()) {
                $values_1 = [];
                foreach ($object->getLabels() as $key_1 => $value_1) {
                    $values_1[$key_1] = $value_1;
                }
                $data['Labels'] = $values_1;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\NetworksCreatePostBody::class => false];
        }
    }
} else {
    class NetworksCreatePostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\NetworksCreatePostBody::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\NetworksCreatePostBody::class;
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
            $object = new \Docker\API\Model\NetworksCreatePostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
                $object->setName($data['Name']);
            }
            elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('Driver', $data) && $data['Driver'] !== null) {
                $object->setDriver($data['Driver']);
            }
            elseif (\array_key_exists('Driver', $data) && $data['Driver'] === null) {
                $object->setDriver(null);
            }
            if (\array_key_exists('Scope', $data) && $data['Scope'] !== null) {
                $object->setScope($data['Scope']);
            }
            elseif (\array_key_exists('Scope', $data) && $data['Scope'] === null) {
                $object->setScope(null);
            }
            if (\array_key_exists('Internal', $data) && $data['Internal'] !== null) {
                $object->setInternal($data['Internal']);
            }
            elseif (\array_key_exists('Internal', $data) && $data['Internal'] === null) {
                $object->setInternal(null);
            }
            if (\array_key_exists('Attachable', $data) && $data['Attachable'] !== null) {
                $object->setAttachable($data['Attachable']);
            }
            elseif (\array_key_exists('Attachable', $data) && $data['Attachable'] === null) {
                $object->setAttachable(null);
            }
            if (\array_key_exists('Ingress', $data) && $data['Ingress'] !== null) {
                $object->setIngress($data['Ingress']);
            }
            elseif (\array_key_exists('Ingress', $data) && $data['Ingress'] === null) {
                $object->setIngress(null);
            }
            if (\array_key_exists('ConfigOnly', $data) && $data['ConfigOnly'] !== null) {
                $object->setConfigOnly($data['ConfigOnly']);
            }
            elseif (\array_key_exists('ConfigOnly', $data) && $data['ConfigOnly'] === null) {
                $object->setConfigOnly(null);
            }
            if (\array_key_exists('ConfigFrom', $data) && $data['ConfigFrom'] !== null) {
                $object->setConfigFrom($this->denormalizer->denormalize($data['ConfigFrom'], \Docker\API\Model\ConfigReference::class, 'json', $context));
            }
            elseif (\array_key_exists('ConfigFrom', $data) && $data['ConfigFrom'] === null) {
                $object->setConfigFrom(null);
            }
            if (\array_key_exists('IPAM', $data) && $data['IPAM'] !== null) {
                $object->setIPAM($this->denormalizer->denormalize($data['IPAM'], \Docker\API\Model\IPAM::class, 'json', $context));
            }
            elseif (\array_key_exists('IPAM', $data) && $data['IPAM'] === null) {
                $object->setIPAM(null);
            }
            if (\array_key_exists('EnableIPv4', $data) && $data['EnableIPv4'] !== null) {
                $object->setEnableIPv4($data['EnableIPv4']);
            }
            elseif (\array_key_exists('EnableIPv4', $data) && $data['EnableIPv4'] === null) {
                $object->setEnableIPv4(null);
            }
            if (\array_key_exists('EnableIPv6', $data) && $data['EnableIPv6'] !== null) {
                $object->setEnableIPv6($data['EnableIPv6']);
            }
            elseif (\array_key_exists('EnableIPv6', $data) && $data['EnableIPv6'] === null) {
                $object->setEnableIPv6(null);
            }
            if (\array_key_exists('Options', $data) && $data['Options'] !== null) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Options'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setOptions($values);
            }
            elseif (\array_key_exists('Options', $data) && $data['Options'] === null) {
                $object->setOptions(null);
            }
            if (\array_key_exists('Labels', $data) && $data['Labels'] !== null) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Labels'] as $key_1 => $value_1) {
                    $values_1[$key_1] = $value_1;
                }
                $object->setLabels($values_1);
            }
            elseif (\array_key_exists('Labels', $data) && $data['Labels'] === null) {
                $object->setLabels(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['Name'] = $object->getName();
            if ($object->isInitialized('driver') && null !== $object->getDriver()) {
                $data['Driver'] = $object->getDriver();
            }
            if ($object->isInitialized('scope') && null !== $object->getScope()) {
                $data['Scope'] = $object->getScope();
            }
            if ($object->isInitialized('internal') && null !== $object->getInternal()) {
                $data['Internal'] = $object->getInternal();
            }
            if ($object->isInitialized('attachable') && null !== $object->getAttachable()) {
                $data['Attachable'] = $object->getAttachable();
            }
            if ($object->isInitialized('ingress') && null !== $object->getIngress()) {
                $data['Ingress'] = $object->getIngress();
            }
            if ($object->isInitialized('configOnly') && null !== $object->getConfigOnly()) {
                $data['ConfigOnly'] = $object->getConfigOnly();
            }
            if ($object->isInitialized('configFrom') && null !== $object->getConfigFrom()) {
                $data['ConfigFrom'] = $this->normalizer->normalize($object->getConfigFrom(), 'json', $context);
            }
            if ($object->isInitialized('iPAM') && null !== $object->getIPAM()) {
                $data['IPAM'] = $this->normalizer->normalize($object->getIPAM(), 'json', $context);
            }
            if ($object->isInitialized('enableIPv4') && null !== $object->getEnableIPv4()) {
                $data['EnableIPv4'] = $object->getEnableIPv4();
            }
            if ($object->isInitialized('enableIPv6') && null !== $object->getEnableIPv6()) {
                $data['EnableIPv6'] = $object->getEnableIPv6();
            }
            if ($object->isInitialized('options') && null !== $object->getOptions()) {
                $values = [];
                foreach ($object->getOptions() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['Options'] = $values;
            }
            if ($object->isInitialized('labels') && null !== $object->getLabels()) {
                $values_1 = [];
                foreach ($object->getLabels() as $key_1 => $value_1) {
                    $values_1[$key_1] = $value_1;
                }
                $data['Labels'] = $values_1;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\NetworksCreatePostBody::class => false];
        }
    }
}