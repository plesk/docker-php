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
    class IndexInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\IndexInfo::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\IndexInfo::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\IndexInfo();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
                $object->setName($data['Name']);
            }
            elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('Mirrors', $data) && $data['Mirrors'] !== null) {
                $values = [];
                foreach ($data['Mirrors'] as $value) {
                    $values[] = $value;
                }
                $object->setMirrors($values);
            }
            elseif (\array_key_exists('Mirrors', $data) && $data['Mirrors'] === null) {
                $object->setMirrors(null);
            }
            if (\array_key_exists('Secure', $data) && $data['Secure'] !== null) {
                $object->setSecure($data['Secure']);
            }
            elseif (\array_key_exists('Secure', $data) && $data['Secure'] === null) {
                $object->setSecure(null);
            }
            if (\array_key_exists('Official', $data) && $data['Official'] !== null) {
                $object->setOfficial($data['Official']);
            }
            elseif (\array_key_exists('Official', $data) && $data['Official'] === null) {
                $object->setOfficial(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['Name'] = $object->getName();
            }
            if ($object->isInitialized('mirrors') && null !== $object->getMirrors()) {
                $values = [];
                foreach ($object->getMirrors() as $value) {
                    $values[] = $value;
                }
                $data['Mirrors'] = $values;
            }
            if ($object->isInitialized('secure') && null !== $object->getSecure()) {
                $data['Secure'] = $object->getSecure();
            }
            if ($object->isInitialized('official') && null !== $object->getOfficial()) {
                $data['Official'] = $object->getOfficial();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\IndexInfo::class => false];
        }
    }
} else {
    class IndexInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\IndexInfo::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\IndexInfo::class;
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
            $object = new \Docker\API\Model\IndexInfo();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
                $object->setName($data['Name']);
            }
            elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('Mirrors', $data) && $data['Mirrors'] !== null) {
                $values = [];
                foreach ($data['Mirrors'] as $value) {
                    $values[] = $value;
                }
                $object->setMirrors($values);
            }
            elseif (\array_key_exists('Mirrors', $data) && $data['Mirrors'] === null) {
                $object->setMirrors(null);
            }
            if (\array_key_exists('Secure', $data) && $data['Secure'] !== null) {
                $object->setSecure($data['Secure']);
            }
            elseif (\array_key_exists('Secure', $data) && $data['Secure'] === null) {
                $object->setSecure(null);
            }
            if (\array_key_exists('Official', $data) && $data['Official'] !== null) {
                $object->setOfficial($data['Official']);
            }
            elseif (\array_key_exists('Official', $data) && $data['Official'] === null) {
                $object->setOfficial(null);
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
            if ($object->isInitialized('mirrors') && null !== $object->getMirrors()) {
                $values = [];
                foreach ($object->getMirrors() as $value) {
                    $values[] = $value;
                }
                $data['Mirrors'] = $values;
            }
            if ($object->isInitialized('secure') && null !== $object->getSecure()) {
                $data['Secure'] = $object->getSecure();
            }
            if ($object->isInitialized('official') && null !== $object->getOfficial()) {
                $data['Official'] = $object->getOfficial();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\IndexInfo::class => false];
        }
    }
}