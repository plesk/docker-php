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
    class TaskSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\TaskSpec::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\TaskSpec::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\TaskSpec();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ContainerSpec', $data) && $data['ContainerSpec'] !== null) {
                $object->setContainerSpec($this->denormalizer->denormalize($data['ContainerSpec'], \Docker\API\Model\TaskSpecContainerSpec::class, 'json', $context));
            }
            elseif (\array_key_exists('ContainerSpec', $data) && $data['ContainerSpec'] === null) {
                $object->setContainerSpec(null);
            }
            if (\array_key_exists('Resources', $data) && $data['Resources'] !== null) {
                $object->setResources($this->denormalizer->denormalize($data['Resources'], \Docker\API\Model\TaskSpecResources::class, 'json', $context));
            }
            elseif (\array_key_exists('Resources', $data) && $data['Resources'] === null) {
                $object->setResources(null);
            }
            if (\array_key_exists('RestartPolicy', $data) && $data['RestartPolicy'] !== null) {
                $object->setRestartPolicy($this->denormalizer->denormalize($data['RestartPolicy'], \Docker\API\Model\TaskSpecRestartPolicy::class, 'json', $context));
            }
            elseif (\array_key_exists('RestartPolicy', $data) && $data['RestartPolicy'] === null) {
                $object->setRestartPolicy(null);
            }
            if (\array_key_exists('Placement', $data) && $data['Placement'] !== null) {
                $object->setPlacement($this->denormalizer->denormalize($data['Placement'], \Docker\API\Model\TaskSpecPlacement::class, 'json', $context));
            }
            elseif (\array_key_exists('Placement', $data) && $data['Placement'] === null) {
                $object->setPlacement(null);
            }
            if (\array_key_exists('ForceUpdate', $data) && $data['ForceUpdate'] !== null) {
                $object->setForceUpdate($data['ForceUpdate']);
            }
            elseif (\array_key_exists('ForceUpdate', $data) && $data['ForceUpdate'] === null) {
                $object->setForceUpdate(null);
            }
            if (\array_key_exists('Networks', $data) && $data['Networks'] !== null) {
                $values = [];
                foreach ($data['Networks'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Docker\API\Model\TaskSpecNetworksItem::class, 'json', $context);
                }
                $object->setNetworks($values);
            }
            elseif (\array_key_exists('Networks', $data) && $data['Networks'] === null) {
                $object->setNetworks(null);
            }
            if (\array_key_exists('LogDriver', $data) && $data['LogDriver'] !== null) {
                $object->setLogDriver($this->denormalizer->denormalize($data['LogDriver'], \Docker\API\Model\TaskSpecLogDriver::class, 'json', $context));
            }
            elseif (\array_key_exists('LogDriver', $data) && $data['LogDriver'] === null) {
                $object->setLogDriver(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('containerSpec') && null !== $object->getContainerSpec()) {
                $data['ContainerSpec'] = $this->normalizer->normalize($object->getContainerSpec(), 'json', $context);
            }
            if ($object->isInitialized('resources') && null !== $object->getResources()) {
                $data['Resources'] = $this->normalizer->normalize($object->getResources(), 'json', $context);
            }
            if ($object->isInitialized('restartPolicy') && null !== $object->getRestartPolicy()) {
                $data['RestartPolicy'] = $this->normalizer->normalize($object->getRestartPolicy(), 'json', $context);
            }
            if ($object->isInitialized('placement') && null !== $object->getPlacement()) {
                $data['Placement'] = $this->normalizer->normalize($object->getPlacement(), 'json', $context);
            }
            if ($object->isInitialized('forceUpdate') && null !== $object->getForceUpdate()) {
                $data['ForceUpdate'] = $object->getForceUpdate();
            }
            if ($object->isInitialized('networks') && null !== $object->getNetworks()) {
                $values = [];
                foreach ($object->getNetworks() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Networks'] = $values;
            }
            if ($object->isInitialized('logDriver') && null !== $object->getLogDriver()) {
                $data['LogDriver'] = $this->normalizer->normalize($object->getLogDriver(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\TaskSpec::class => false];
        }
    }
} else {
    class TaskSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\TaskSpec::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\TaskSpec::class;
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
            $object = new \Docker\API\Model\TaskSpec();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ContainerSpec', $data) && $data['ContainerSpec'] !== null) {
                $object->setContainerSpec($this->denormalizer->denormalize($data['ContainerSpec'], \Docker\API\Model\TaskSpecContainerSpec::class, 'json', $context));
            }
            elseif (\array_key_exists('ContainerSpec', $data) && $data['ContainerSpec'] === null) {
                $object->setContainerSpec(null);
            }
            if (\array_key_exists('Resources', $data) && $data['Resources'] !== null) {
                $object->setResources($this->denormalizer->denormalize($data['Resources'], \Docker\API\Model\TaskSpecResources::class, 'json', $context));
            }
            elseif (\array_key_exists('Resources', $data) && $data['Resources'] === null) {
                $object->setResources(null);
            }
            if (\array_key_exists('RestartPolicy', $data) && $data['RestartPolicy'] !== null) {
                $object->setRestartPolicy($this->denormalizer->denormalize($data['RestartPolicy'], \Docker\API\Model\TaskSpecRestartPolicy::class, 'json', $context));
            }
            elseif (\array_key_exists('RestartPolicy', $data) && $data['RestartPolicy'] === null) {
                $object->setRestartPolicy(null);
            }
            if (\array_key_exists('Placement', $data) && $data['Placement'] !== null) {
                $object->setPlacement($this->denormalizer->denormalize($data['Placement'], \Docker\API\Model\TaskSpecPlacement::class, 'json', $context));
            }
            elseif (\array_key_exists('Placement', $data) && $data['Placement'] === null) {
                $object->setPlacement(null);
            }
            if (\array_key_exists('ForceUpdate', $data) && $data['ForceUpdate'] !== null) {
                $object->setForceUpdate($data['ForceUpdate']);
            }
            elseif (\array_key_exists('ForceUpdate', $data) && $data['ForceUpdate'] === null) {
                $object->setForceUpdate(null);
            }
            if (\array_key_exists('Networks', $data) && $data['Networks'] !== null) {
                $values = [];
                foreach ($data['Networks'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Docker\API\Model\TaskSpecNetworksItem::class, 'json', $context);
                }
                $object->setNetworks($values);
            }
            elseif (\array_key_exists('Networks', $data) && $data['Networks'] === null) {
                $object->setNetworks(null);
            }
            if (\array_key_exists('LogDriver', $data) && $data['LogDriver'] !== null) {
                $object->setLogDriver($this->denormalizer->denormalize($data['LogDriver'], \Docker\API\Model\TaskSpecLogDriver::class, 'json', $context));
            }
            elseif (\array_key_exists('LogDriver', $data) && $data['LogDriver'] === null) {
                $object->setLogDriver(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('containerSpec') && null !== $object->getContainerSpec()) {
                $data['ContainerSpec'] = $this->normalizer->normalize($object->getContainerSpec(), 'json', $context);
            }
            if ($object->isInitialized('resources') && null !== $object->getResources()) {
                $data['Resources'] = $this->normalizer->normalize($object->getResources(), 'json', $context);
            }
            if ($object->isInitialized('restartPolicy') && null !== $object->getRestartPolicy()) {
                $data['RestartPolicy'] = $this->normalizer->normalize($object->getRestartPolicy(), 'json', $context);
            }
            if ($object->isInitialized('placement') && null !== $object->getPlacement()) {
                $data['Placement'] = $this->normalizer->normalize($object->getPlacement(), 'json', $context);
            }
            if ($object->isInitialized('forceUpdate') && null !== $object->getForceUpdate()) {
                $data['ForceUpdate'] = $object->getForceUpdate();
            }
            if ($object->isInitialized('networks') && null !== $object->getNetworks()) {
                $values = [];
                foreach ($object->getNetworks() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['Networks'] = $values;
            }
            if ($object->isInitialized('logDriver') && null !== $object->getLogDriver()) {
                $data['LogDriver'] = $this->normalizer->normalize($object->getLogDriver(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\TaskSpec::class => false];
        }
    }
}