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
    class RegistryServiceConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\RegistryServiceConfig::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\RegistryServiceConfig::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\RegistryServiceConfig();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('AllowNondistributableArtifactsCIDRs', $data) && $data['AllowNondistributableArtifactsCIDRs'] !== null) {
                $values = [];
                foreach ($data['AllowNondistributableArtifactsCIDRs'] as $value) {
                    $values[] = $value;
                }
                $object->setAllowNondistributableArtifactsCIDRs($values);
            }
            elseif (\array_key_exists('AllowNondistributableArtifactsCIDRs', $data) && $data['AllowNondistributableArtifactsCIDRs'] === null) {
                $object->setAllowNondistributableArtifactsCIDRs(null);
            }
            if (\array_key_exists('AllowNondistributableArtifactsHostnames', $data) && $data['AllowNondistributableArtifactsHostnames'] !== null) {
                $values_1 = [];
                foreach ($data['AllowNondistributableArtifactsHostnames'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setAllowNondistributableArtifactsHostnames($values_1);
            }
            elseif (\array_key_exists('AllowNondistributableArtifactsHostnames', $data) && $data['AllowNondistributableArtifactsHostnames'] === null) {
                $object->setAllowNondistributableArtifactsHostnames(null);
            }
            if (\array_key_exists('InsecureRegistryCIDRs', $data) && $data['InsecureRegistryCIDRs'] !== null) {
                $values_2 = [];
                foreach ($data['InsecureRegistryCIDRs'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setInsecureRegistryCIDRs($values_2);
            }
            elseif (\array_key_exists('InsecureRegistryCIDRs', $data) && $data['InsecureRegistryCIDRs'] === null) {
                $object->setInsecureRegistryCIDRs(null);
            }
            if (\array_key_exists('IndexConfigs', $data) && $data['IndexConfigs'] !== null) {
                $values_3 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['IndexConfigs'] as $key => $value_3) {
                    $values_3[$key] = $this->denormalizer->denormalize($value_3, \Docker\API\Model\IndexInfo::class, 'json', $context);
                }
                $object->setIndexConfigs($values_3);
            }
            elseif (\array_key_exists('IndexConfigs', $data) && $data['IndexConfigs'] === null) {
                $object->setIndexConfigs(null);
            }
            if (\array_key_exists('Mirrors', $data) && $data['Mirrors'] !== null) {
                $values_4 = [];
                foreach ($data['Mirrors'] as $value_4) {
                    $values_4[] = $value_4;
                }
                $object->setMirrors($values_4);
            }
            elseif (\array_key_exists('Mirrors', $data) && $data['Mirrors'] === null) {
                $object->setMirrors(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('allowNondistributableArtifactsCIDRs') && null !== $object->getAllowNondistributableArtifactsCIDRs()) {
                $values = [];
                foreach ($object->getAllowNondistributableArtifactsCIDRs() as $value) {
                    $values[] = $value;
                }
                $data['AllowNondistributableArtifactsCIDRs'] = $values;
            }
            if ($object->isInitialized('allowNondistributableArtifactsHostnames') && null !== $object->getAllowNondistributableArtifactsHostnames()) {
                $values_1 = [];
                foreach ($object->getAllowNondistributableArtifactsHostnames() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['AllowNondistributableArtifactsHostnames'] = $values_1;
            }
            if ($object->isInitialized('insecureRegistryCIDRs') && null !== $object->getInsecureRegistryCIDRs()) {
                $values_2 = [];
                foreach ($object->getInsecureRegistryCIDRs() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['InsecureRegistryCIDRs'] = $values_2;
            }
            if ($object->isInitialized('indexConfigs') && null !== $object->getIndexConfigs()) {
                $values_3 = [];
                foreach ($object->getIndexConfigs() as $key => $value_3) {
                    $values_3[$key] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['IndexConfigs'] = $values_3;
            }
            if ($object->isInitialized('mirrors') && null !== $object->getMirrors()) {
                $values_4 = [];
                foreach ($object->getMirrors() as $value_4) {
                    $values_4[] = $value_4;
                }
                $data['Mirrors'] = $values_4;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\RegistryServiceConfig::class => false];
        }
    }
} else {
    class RegistryServiceConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\RegistryServiceConfig::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\RegistryServiceConfig::class;
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
            $object = new \Docker\API\Model\RegistryServiceConfig();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('AllowNondistributableArtifactsCIDRs', $data) && $data['AllowNondistributableArtifactsCIDRs'] !== null) {
                $values = [];
                foreach ($data['AllowNondistributableArtifactsCIDRs'] as $value) {
                    $values[] = $value;
                }
                $object->setAllowNondistributableArtifactsCIDRs($values);
            }
            elseif (\array_key_exists('AllowNondistributableArtifactsCIDRs', $data) && $data['AllowNondistributableArtifactsCIDRs'] === null) {
                $object->setAllowNondistributableArtifactsCIDRs(null);
            }
            if (\array_key_exists('AllowNondistributableArtifactsHostnames', $data) && $data['AllowNondistributableArtifactsHostnames'] !== null) {
                $values_1 = [];
                foreach ($data['AllowNondistributableArtifactsHostnames'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setAllowNondistributableArtifactsHostnames($values_1);
            }
            elseif (\array_key_exists('AllowNondistributableArtifactsHostnames', $data) && $data['AllowNondistributableArtifactsHostnames'] === null) {
                $object->setAllowNondistributableArtifactsHostnames(null);
            }
            if (\array_key_exists('InsecureRegistryCIDRs', $data) && $data['InsecureRegistryCIDRs'] !== null) {
                $values_2 = [];
                foreach ($data['InsecureRegistryCIDRs'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setInsecureRegistryCIDRs($values_2);
            }
            elseif (\array_key_exists('InsecureRegistryCIDRs', $data) && $data['InsecureRegistryCIDRs'] === null) {
                $object->setInsecureRegistryCIDRs(null);
            }
            if (\array_key_exists('IndexConfigs', $data) && $data['IndexConfigs'] !== null) {
                $values_3 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['IndexConfigs'] as $key => $value_3) {
                    $values_3[$key] = $this->denormalizer->denormalize($value_3, \Docker\API\Model\IndexInfo::class, 'json', $context);
                }
                $object->setIndexConfigs($values_3);
            }
            elseif (\array_key_exists('IndexConfigs', $data) && $data['IndexConfigs'] === null) {
                $object->setIndexConfigs(null);
            }
            if (\array_key_exists('Mirrors', $data) && $data['Mirrors'] !== null) {
                $values_4 = [];
                foreach ($data['Mirrors'] as $value_4) {
                    $values_4[] = $value_4;
                }
                $object->setMirrors($values_4);
            }
            elseif (\array_key_exists('Mirrors', $data) && $data['Mirrors'] === null) {
                $object->setMirrors(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('allowNondistributableArtifactsCIDRs') && null !== $object->getAllowNondistributableArtifactsCIDRs()) {
                $values = [];
                foreach ($object->getAllowNondistributableArtifactsCIDRs() as $value) {
                    $values[] = $value;
                }
                $data['AllowNondistributableArtifactsCIDRs'] = $values;
            }
            if ($object->isInitialized('allowNondistributableArtifactsHostnames') && null !== $object->getAllowNondistributableArtifactsHostnames()) {
                $values_1 = [];
                foreach ($object->getAllowNondistributableArtifactsHostnames() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['AllowNondistributableArtifactsHostnames'] = $values_1;
            }
            if ($object->isInitialized('insecureRegistryCIDRs') && null !== $object->getInsecureRegistryCIDRs()) {
                $values_2 = [];
                foreach ($object->getInsecureRegistryCIDRs() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['InsecureRegistryCIDRs'] = $values_2;
            }
            if ($object->isInitialized('indexConfigs') && null !== $object->getIndexConfigs()) {
                $values_3 = [];
                foreach ($object->getIndexConfigs() as $key => $value_3) {
                    $values_3[$key] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['IndexConfigs'] = $values_3;
            }
            if ($object->isInitialized('mirrors') && null !== $object->getMirrors()) {
                $values_4 = [];
                foreach ($object->getMirrors() as $value_4) {
                    $values_4[] = $value_4;
                }
                $data['Mirrors'] = $values_4;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\RegistryServiceConfig::class => false];
        }
    }
}