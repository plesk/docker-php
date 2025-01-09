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
    class TaskSpecContainerSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\TaskSpecContainerSpec::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\TaskSpecContainerSpec::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\TaskSpecContainerSpec();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Image', $data) && $data['Image'] !== null) {
                $object->setImage($data['Image']);
            }
            elseif (\array_key_exists('Image', $data) && $data['Image'] === null) {
                $object->setImage(null);
            }
            if (\array_key_exists('Command', $data) && $data['Command'] !== null) {
                $values = [];
                foreach ($data['Command'] as $value) {
                    $values[] = $value;
                }
                $object->setCommand($values);
            }
            elseif (\array_key_exists('Command', $data) && $data['Command'] === null) {
                $object->setCommand(null);
            }
            if (\array_key_exists('Args', $data) && $data['Args'] !== null) {
                $values_1 = [];
                foreach ($data['Args'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setArgs($values_1);
            }
            elseif (\array_key_exists('Args', $data) && $data['Args'] === null) {
                $object->setArgs(null);
            }
            if (\array_key_exists('Env', $data) && $data['Env'] !== null) {
                $values_2 = [];
                foreach ($data['Env'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setEnv($values_2);
            }
            elseif (\array_key_exists('Env', $data) && $data['Env'] === null) {
                $object->setEnv(null);
            }
            if (\array_key_exists('Dir', $data) && $data['Dir'] !== null) {
                $object->setDir($data['Dir']);
            }
            elseif (\array_key_exists('Dir', $data) && $data['Dir'] === null) {
                $object->setDir(null);
            }
            if (\array_key_exists('User', $data) && $data['User'] !== null) {
                $object->setUser($data['User']);
            }
            elseif (\array_key_exists('User', $data) && $data['User'] === null) {
                $object->setUser(null);
            }
            if (\array_key_exists('Labels', $data) && $data['Labels'] !== null) {
                $values_3 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Labels'] as $key => $value_3) {
                    $values_3[$key] = $value_3;
                }
                $object->setLabels($values_3);
            }
            elseif (\array_key_exists('Labels', $data) && $data['Labels'] === null) {
                $object->setLabels(null);
            }
            if (\array_key_exists('TTY', $data) && $data['TTY'] !== null) {
                $object->setTTY($data['TTY']);
            }
            elseif (\array_key_exists('TTY', $data) && $data['TTY'] === null) {
                $object->setTTY(null);
            }
            if (\array_key_exists('Mounts', $data) && $data['Mounts'] !== null) {
                $values_4 = [];
                foreach ($data['Mounts'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, \Docker\API\Model\Mount::class, 'json', $context);
                }
                $object->setMounts($values_4);
            }
            elseif (\array_key_exists('Mounts', $data) && $data['Mounts'] === null) {
                $object->setMounts(null);
            }
            if (\array_key_exists('StopGracePeriod', $data) && $data['StopGracePeriod'] !== null) {
                $object->setStopGracePeriod($data['StopGracePeriod']);
            }
            elseif (\array_key_exists('StopGracePeriod', $data) && $data['StopGracePeriod'] === null) {
                $object->setStopGracePeriod(null);
            }
            if (\array_key_exists('DNSConfig', $data) && $data['DNSConfig'] !== null) {
                $object->setDNSConfig($this->denormalizer->denormalize($data['DNSConfig'], \Docker\API\Model\TaskSpecContainerSpecDNSConfig::class, 'json', $context));
            }
            elseif (\array_key_exists('DNSConfig', $data) && $data['DNSConfig'] === null) {
                $object->setDNSConfig(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('image') && null !== $object->getImage()) {
                $data['Image'] = $object->getImage();
            }
            if ($object->isInitialized('command') && null !== $object->getCommand()) {
                $values = [];
                foreach ($object->getCommand() as $value) {
                    $values[] = $value;
                }
                $data['Command'] = $values;
            }
            if ($object->isInitialized('args') && null !== $object->getArgs()) {
                $values_1 = [];
                foreach ($object->getArgs() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['Args'] = $values_1;
            }
            if ($object->isInitialized('env') && null !== $object->getEnv()) {
                $values_2 = [];
                foreach ($object->getEnv() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['Env'] = $values_2;
            }
            if ($object->isInitialized('dir') && null !== $object->getDir()) {
                $data['Dir'] = $object->getDir();
            }
            if ($object->isInitialized('user') && null !== $object->getUser()) {
                $data['User'] = $object->getUser();
            }
            if ($object->isInitialized('labels') && null !== $object->getLabels()) {
                $values_3 = [];
                foreach ($object->getLabels() as $key => $value_3) {
                    $values_3[$key] = $value_3;
                }
                $data['Labels'] = $values_3;
            }
            if ($object->isInitialized('tTY') && null !== $object->getTTY()) {
                $data['TTY'] = $object->getTTY();
            }
            if ($object->isInitialized('mounts') && null !== $object->getMounts()) {
                $values_4 = [];
                foreach ($object->getMounts() as $value_4) {
                    $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $data['Mounts'] = $values_4;
            }
            if ($object->isInitialized('stopGracePeriod') && null !== $object->getStopGracePeriod()) {
                $data['StopGracePeriod'] = $object->getStopGracePeriod();
            }
            if ($object->isInitialized('dNSConfig') && null !== $object->getDNSConfig()) {
                $data['DNSConfig'] = $this->normalizer->normalize($object->getDNSConfig(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\TaskSpecContainerSpec::class => false];
        }
    }
} else {
    class TaskSpecContainerSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\TaskSpecContainerSpec::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\TaskSpecContainerSpec::class;
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
            $object = new \Docker\API\Model\TaskSpecContainerSpec();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Image', $data) && $data['Image'] !== null) {
                $object->setImage($data['Image']);
            }
            elseif (\array_key_exists('Image', $data) && $data['Image'] === null) {
                $object->setImage(null);
            }
            if (\array_key_exists('Command', $data) && $data['Command'] !== null) {
                $values = [];
                foreach ($data['Command'] as $value) {
                    $values[] = $value;
                }
                $object->setCommand($values);
            }
            elseif (\array_key_exists('Command', $data) && $data['Command'] === null) {
                $object->setCommand(null);
            }
            if (\array_key_exists('Args', $data) && $data['Args'] !== null) {
                $values_1 = [];
                foreach ($data['Args'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setArgs($values_1);
            }
            elseif (\array_key_exists('Args', $data) && $data['Args'] === null) {
                $object->setArgs(null);
            }
            if (\array_key_exists('Env', $data) && $data['Env'] !== null) {
                $values_2 = [];
                foreach ($data['Env'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setEnv($values_2);
            }
            elseif (\array_key_exists('Env', $data) && $data['Env'] === null) {
                $object->setEnv(null);
            }
            if (\array_key_exists('Dir', $data) && $data['Dir'] !== null) {
                $object->setDir($data['Dir']);
            }
            elseif (\array_key_exists('Dir', $data) && $data['Dir'] === null) {
                $object->setDir(null);
            }
            if (\array_key_exists('User', $data) && $data['User'] !== null) {
                $object->setUser($data['User']);
            }
            elseif (\array_key_exists('User', $data) && $data['User'] === null) {
                $object->setUser(null);
            }
            if (\array_key_exists('Labels', $data) && $data['Labels'] !== null) {
                $values_3 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Labels'] as $key => $value_3) {
                    $values_3[$key] = $value_3;
                }
                $object->setLabels($values_3);
            }
            elseif (\array_key_exists('Labels', $data) && $data['Labels'] === null) {
                $object->setLabels(null);
            }
            if (\array_key_exists('TTY', $data) && $data['TTY'] !== null) {
                $object->setTTY($data['TTY']);
            }
            elseif (\array_key_exists('TTY', $data) && $data['TTY'] === null) {
                $object->setTTY(null);
            }
            if (\array_key_exists('Mounts', $data) && $data['Mounts'] !== null) {
                $values_4 = [];
                foreach ($data['Mounts'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, \Docker\API\Model\Mount::class, 'json', $context);
                }
                $object->setMounts($values_4);
            }
            elseif (\array_key_exists('Mounts', $data) && $data['Mounts'] === null) {
                $object->setMounts(null);
            }
            if (\array_key_exists('StopGracePeriod', $data) && $data['StopGracePeriod'] !== null) {
                $object->setStopGracePeriod($data['StopGracePeriod']);
            }
            elseif (\array_key_exists('StopGracePeriod', $data) && $data['StopGracePeriod'] === null) {
                $object->setStopGracePeriod(null);
            }
            if (\array_key_exists('DNSConfig', $data) && $data['DNSConfig'] !== null) {
                $object->setDNSConfig($this->denormalizer->denormalize($data['DNSConfig'], \Docker\API\Model\TaskSpecContainerSpecDNSConfig::class, 'json', $context));
            }
            elseif (\array_key_exists('DNSConfig', $data) && $data['DNSConfig'] === null) {
                $object->setDNSConfig(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('image') && null !== $object->getImage()) {
                $data['Image'] = $object->getImage();
            }
            if ($object->isInitialized('command') && null !== $object->getCommand()) {
                $values = [];
                foreach ($object->getCommand() as $value) {
                    $values[] = $value;
                }
                $data['Command'] = $values;
            }
            if ($object->isInitialized('args') && null !== $object->getArgs()) {
                $values_1 = [];
                foreach ($object->getArgs() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['Args'] = $values_1;
            }
            if ($object->isInitialized('env') && null !== $object->getEnv()) {
                $values_2 = [];
                foreach ($object->getEnv() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['Env'] = $values_2;
            }
            if ($object->isInitialized('dir') && null !== $object->getDir()) {
                $data['Dir'] = $object->getDir();
            }
            if ($object->isInitialized('user') && null !== $object->getUser()) {
                $data['User'] = $object->getUser();
            }
            if ($object->isInitialized('labels') && null !== $object->getLabels()) {
                $values_3 = [];
                foreach ($object->getLabels() as $key => $value_3) {
                    $values_3[$key] = $value_3;
                }
                $data['Labels'] = $values_3;
            }
            if ($object->isInitialized('tTY') && null !== $object->getTTY()) {
                $data['TTY'] = $object->getTTY();
            }
            if ($object->isInitialized('mounts') && null !== $object->getMounts()) {
                $values_4 = [];
                foreach ($object->getMounts() as $value_4) {
                    $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $data['Mounts'] = $values_4;
            }
            if ($object->isInitialized('stopGracePeriod') && null !== $object->getStopGracePeriod()) {
                $data['StopGracePeriod'] = $object->getStopGracePeriod();
            }
            if ($object->isInitialized('dNSConfig') && null !== $object->getDNSConfig()) {
                $data['DNSConfig'] = $this->normalizer->normalize($object->getDNSConfig(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\TaskSpecContainerSpec::class => false];
        }
    }
}