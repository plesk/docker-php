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
    class ServicesCreatePostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\ServicesCreatePostBody::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\ServicesCreatePostBody::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\ServicesCreatePostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
                $object->setName($data['Name']);
            }
            elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('Labels', $data) && $data['Labels'] !== null) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Labels'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setLabels($values);
            }
            elseif (\array_key_exists('Labels', $data) && $data['Labels'] === null) {
                $object->setLabels(null);
            }
            if (\array_key_exists('TaskTemplate', $data) && $data['TaskTemplate'] !== null) {
                $object->setTaskTemplate($this->denormalizer->denormalize($data['TaskTemplate'], \Docker\API\Model\TaskSpec::class, 'json', $context));
            }
            elseif (\array_key_exists('TaskTemplate', $data) && $data['TaskTemplate'] === null) {
                $object->setTaskTemplate(null);
            }
            if (\array_key_exists('Mode', $data) && $data['Mode'] !== null) {
                $object->setMode($this->denormalizer->denormalize($data['Mode'], \Docker\API\Model\ServiceSpecMode::class, 'json', $context));
            }
            elseif (\array_key_exists('Mode', $data) && $data['Mode'] === null) {
                $object->setMode(null);
            }
            if (\array_key_exists('UpdateConfig', $data) && $data['UpdateConfig'] !== null) {
                $object->setUpdateConfig($this->denormalizer->denormalize($data['UpdateConfig'], \Docker\API\Model\ServiceSpecUpdateConfig::class, 'json', $context));
            }
            elseif (\array_key_exists('UpdateConfig', $data) && $data['UpdateConfig'] === null) {
                $object->setUpdateConfig(null);
            }
            if (\array_key_exists('Networks', $data) && $data['Networks'] !== null) {
                $values_1 = [];
                foreach ($data['Networks'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \Docker\API\Model\ServiceSpecNetworksItem::class, 'json', $context);
                }
                $object->setNetworks($values_1);
            }
            elseif (\array_key_exists('Networks', $data) && $data['Networks'] === null) {
                $object->setNetworks(null);
            }
            if (\array_key_exists('EndpointSpec', $data) && $data['EndpointSpec'] !== null) {
                $object->setEndpointSpec($this->denormalizer->denormalize($data['EndpointSpec'], \Docker\API\Model\EndpointSpec::class, 'json', $context));
            }
            elseif (\array_key_exists('EndpointSpec', $data) && $data['EndpointSpec'] === null) {
                $object->setEndpointSpec(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['Name'] = $object->getName();
            }
            if ($object->isInitialized('labels') && null !== $object->getLabels()) {
                $values = [];
                foreach ($object->getLabels() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['Labels'] = $values;
            }
            if ($object->isInitialized('taskTemplate') && null !== $object->getTaskTemplate()) {
                $data['TaskTemplate'] = $this->normalizer->normalize($object->getTaskTemplate(), 'json', $context);
            }
            if ($object->isInitialized('mode') && null !== $object->getMode()) {
                $data['Mode'] = $this->normalizer->normalize($object->getMode(), 'json', $context);
            }
            if ($object->isInitialized('updateConfig') && null !== $object->getUpdateConfig()) {
                $data['UpdateConfig'] = $this->normalizer->normalize($object->getUpdateConfig(), 'json', $context);
            }
            if ($object->isInitialized('networks') && null !== $object->getNetworks()) {
                $values_1 = [];
                foreach ($object->getNetworks() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['Networks'] = $values_1;
            }
            if ($object->isInitialized('endpointSpec') && null !== $object->getEndpointSpec()) {
                $data['EndpointSpec'] = $this->normalizer->normalize($object->getEndpointSpec(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\ServicesCreatePostBody::class => false];
        }
    }
} else {
    class ServicesCreatePostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\ServicesCreatePostBody::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\ServicesCreatePostBody::class;
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
            $object = new \Docker\API\Model\ServicesCreatePostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
                $object->setName($data['Name']);
            }
            elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('Labels', $data) && $data['Labels'] !== null) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Labels'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setLabels($values);
            }
            elseif (\array_key_exists('Labels', $data) && $data['Labels'] === null) {
                $object->setLabels(null);
            }
            if (\array_key_exists('TaskTemplate', $data) && $data['TaskTemplate'] !== null) {
                $object->setTaskTemplate($this->denormalizer->denormalize($data['TaskTemplate'], \Docker\API\Model\TaskSpec::class, 'json', $context));
            }
            elseif (\array_key_exists('TaskTemplate', $data) && $data['TaskTemplate'] === null) {
                $object->setTaskTemplate(null);
            }
            if (\array_key_exists('Mode', $data) && $data['Mode'] !== null) {
                $object->setMode($this->denormalizer->denormalize($data['Mode'], \Docker\API\Model\ServiceSpecMode::class, 'json', $context));
            }
            elseif (\array_key_exists('Mode', $data) && $data['Mode'] === null) {
                $object->setMode(null);
            }
            if (\array_key_exists('UpdateConfig', $data) && $data['UpdateConfig'] !== null) {
                $object->setUpdateConfig($this->denormalizer->denormalize($data['UpdateConfig'], \Docker\API\Model\ServiceSpecUpdateConfig::class, 'json', $context));
            }
            elseif (\array_key_exists('UpdateConfig', $data) && $data['UpdateConfig'] === null) {
                $object->setUpdateConfig(null);
            }
            if (\array_key_exists('Networks', $data) && $data['Networks'] !== null) {
                $values_1 = [];
                foreach ($data['Networks'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \Docker\API\Model\ServiceSpecNetworksItem::class, 'json', $context);
                }
                $object->setNetworks($values_1);
            }
            elseif (\array_key_exists('Networks', $data) && $data['Networks'] === null) {
                $object->setNetworks(null);
            }
            if (\array_key_exists('EndpointSpec', $data) && $data['EndpointSpec'] !== null) {
                $object->setEndpointSpec($this->denormalizer->denormalize($data['EndpointSpec'], \Docker\API\Model\EndpointSpec::class, 'json', $context));
            }
            elseif (\array_key_exists('EndpointSpec', $data) && $data['EndpointSpec'] === null) {
                $object->setEndpointSpec(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['Name'] = $object->getName();
            }
            if ($object->isInitialized('labels') && null !== $object->getLabels()) {
                $values = [];
                foreach ($object->getLabels() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['Labels'] = $values;
            }
            if ($object->isInitialized('taskTemplate') && null !== $object->getTaskTemplate()) {
                $data['TaskTemplate'] = $this->normalizer->normalize($object->getTaskTemplate(), 'json', $context);
            }
            if ($object->isInitialized('mode') && null !== $object->getMode()) {
                $data['Mode'] = $this->normalizer->normalize($object->getMode(), 'json', $context);
            }
            if ($object->isInitialized('updateConfig') && null !== $object->getUpdateConfig()) {
                $data['UpdateConfig'] = $this->normalizer->normalize($object->getUpdateConfig(), 'json', $context);
            }
            if ($object->isInitialized('networks') && null !== $object->getNetworks()) {
                $values_1 = [];
                foreach ($object->getNetworks() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['Networks'] = $values_1;
            }
            if ($object->isInitialized('endpointSpec') && null !== $object->getEndpointSpec()) {
                $data['EndpointSpec'] = $this->normalizer->normalize($object->getEndpointSpec(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\ServicesCreatePostBody::class => false];
        }
    }
}