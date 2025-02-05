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
    class SwarmSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\SwarmSpec::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\SwarmSpec::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\SwarmSpec();
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
            if (\array_key_exists('Orchestration', $data) && $data['Orchestration'] !== null) {
                $object->setOrchestration($this->denormalizer->denormalize($data['Orchestration'], \Docker\API\Model\SwarmSpecOrchestration::class, 'json', $context));
            }
            elseif (\array_key_exists('Orchestration', $data) && $data['Orchestration'] === null) {
                $object->setOrchestration(null);
            }
            if (\array_key_exists('Raft', $data) && $data['Raft'] !== null) {
                $object->setRaft($this->denormalizer->denormalize($data['Raft'], \Docker\API\Model\SwarmSpecRaft::class, 'json', $context));
            }
            elseif (\array_key_exists('Raft', $data) && $data['Raft'] === null) {
                $object->setRaft(null);
            }
            if (\array_key_exists('Dispatcher', $data) && $data['Dispatcher'] !== null) {
                $object->setDispatcher($this->denormalizer->denormalize($data['Dispatcher'], \Docker\API\Model\SwarmSpecDispatcher::class, 'json', $context));
            }
            elseif (\array_key_exists('Dispatcher', $data) && $data['Dispatcher'] === null) {
                $object->setDispatcher(null);
            }
            if (\array_key_exists('CAConfig', $data) && $data['CAConfig'] !== null) {
                $object->setCAConfig($this->denormalizer->denormalize($data['CAConfig'], \Docker\API\Model\SwarmSpecCAConfig::class, 'json', $context));
            }
            elseif (\array_key_exists('CAConfig', $data) && $data['CAConfig'] === null) {
                $object->setCAConfig(null);
            }
            if (\array_key_exists('EncryptionConfig', $data) && $data['EncryptionConfig'] !== null) {
                $object->setEncryptionConfig($this->denormalizer->denormalize($data['EncryptionConfig'], \Docker\API\Model\SwarmSpecEncryptionConfig::class, 'json', $context));
            }
            elseif (\array_key_exists('EncryptionConfig', $data) && $data['EncryptionConfig'] === null) {
                $object->setEncryptionConfig(null);
            }
            if (\array_key_exists('TaskDefaults', $data) && $data['TaskDefaults'] !== null) {
                $object->setTaskDefaults($this->denormalizer->denormalize($data['TaskDefaults'], \Docker\API\Model\SwarmSpecTaskDefaults::class, 'json', $context));
            }
            elseif (\array_key_exists('TaskDefaults', $data) && $data['TaskDefaults'] === null) {
                $object->setTaskDefaults(null);
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
            if ($object->isInitialized('orchestration') && null !== $object->getOrchestration()) {
                $data['Orchestration'] = $this->normalizer->normalize($object->getOrchestration(), 'json', $context);
            }
            if ($object->isInitialized('raft') && null !== $object->getRaft()) {
                $data['Raft'] = $this->normalizer->normalize($object->getRaft(), 'json', $context);
            }
            if ($object->isInitialized('dispatcher') && null !== $object->getDispatcher()) {
                $data['Dispatcher'] = $this->normalizer->normalize($object->getDispatcher(), 'json', $context);
            }
            if ($object->isInitialized('cAConfig') && null !== $object->getCAConfig()) {
                $data['CAConfig'] = $this->normalizer->normalize($object->getCAConfig(), 'json', $context);
            }
            if ($object->isInitialized('encryptionConfig') && null !== $object->getEncryptionConfig()) {
                $data['EncryptionConfig'] = $this->normalizer->normalize($object->getEncryptionConfig(), 'json', $context);
            }
            if ($object->isInitialized('taskDefaults') && null !== $object->getTaskDefaults()) {
                $data['TaskDefaults'] = $this->normalizer->normalize($object->getTaskDefaults(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\SwarmSpec::class => false];
        }
    }
} else {
    class SwarmSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\SwarmSpec::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\SwarmSpec::class;
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
            $object = new \Docker\API\Model\SwarmSpec();
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
            if (\array_key_exists('Orchestration', $data) && $data['Orchestration'] !== null) {
                $object->setOrchestration($this->denormalizer->denormalize($data['Orchestration'], \Docker\API\Model\SwarmSpecOrchestration::class, 'json', $context));
            }
            elseif (\array_key_exists('Orchestration', $data) && $data['Orchestration'] === null) {
                $object->setOrchestration(null);
            }
            if (\array_key_exists('Raft', $data) && $data['Raft'] !== null) {
                $object->setRaft($this->denormalizer->denormalize($data['Raft'], \Docker\API\Model\SwarmSpecRaft::class, 'json', $context));
            }
            elseif (\array_key_exists('Raft', $data) && $data['Raft'] === null) {
                $object->setRaft(null);
            }
            if (\array_key_exists('Dispatcher', $data) && $data['Dispatcher'] !== null) {
                $object->setDispatcher($this->denormalizer->denormalize($data['Dispatcher'], \Docker\API\Model\SwarmSpecDispatcher::class, 'json', $context));
            }
            elseif (\array_key_exists('Dispatcher', $data) && $data['Dispatcher'] === null) {
                $object->setDispatcher(null);
            }
            if (\array_key_exists('CAConfig', $data) && $data['CAConfig'] !== null) {
                $object->setCAConfig($this->denormalizer->denormalize($data['CAConfig'], \Docker\API\Model\SwarmSpecCAConfig::class, 'json', $context));
            }
            elseif (\array_key_exists('CAConfig', $data) && $data['CAConfig'] === null) {
                $object->setCAConfig(null);
            }
            if (\array_key_exists('EncryptionConfig', $data) && $data['EncryptionConfig'] !== null) {
                $object->setEncryptionConfig($this->denormalizer->denormalize($data['EncryptionConfig'], \Docker\API\Model\SwarmSpecEncryptionConfig::class, 'json', $context));
            }
            elseif (\array_key_exists('EncryptionConfig', $data) && $data['EncryptionConfig'] === null) {
                $object->setEncryptionConfig(null);
            }
            if (\array_key_exists('TaskDefaults', $data) && $data['TaskDefaults'] !== null) {
                $object->setTaskDefaults($this->denormalizer->denormalize($data['TaskDefaults'], \Docker\API\Model\SwarmSpecTaskDefaults::class, 'json', $context));
            }
            elseif (\array_key_exists('TaskDefaults', $data) && $data['TaskDefaults'] === null) {
                $object->setTaskDefaults(null);
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
            if ($object->isInitialized('orchestration') && null !== $object->getOrchestration()) {
                $data['Orchestration'] = $this->normalizer->normalize($object->getOrchestration(), 'json', $context);
            }
            if ($object->isInitialized('raft') && null !== $object->getRaft()) {
                $data['Raft'] = $this->normalizer->normalize($object->getRaft(), 'json', $context);
            }
            if ($object->isInitialized('dispatcher') && null !== $object->getDispatcher()) {
                $data['Dispatcher'] = $this->normalizer->normalize($object->getDispatcher(), 'json', $context);
            }
            if ($object->isInitialized('cAConfig') && null !== $object->getCAConfig()) {
                $data['CAConfig'] = $this->normalizer->normalize($object->getCAConfig(), 'json', $context);
            }
            if ($object->isInitialized('encryptionConfig') && null !== $object->getEncryptionConfig()) {
                $data['EncryptionConfig'] = $this->normalizer->normalize($object->getEncryptionConfig(), 'json', $context);
            }
            if ($object->isInitialized('taskDefaults') && null !== $object->getTaskDefaults()) {
                $data['TaskDefaults'] = $this->normalizer->normalize($object->getTaskDefaults(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\SwarmSpec::class => false];
        }
    }
}