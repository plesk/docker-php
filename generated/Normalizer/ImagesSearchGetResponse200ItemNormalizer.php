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
    class ImagesSearchGetResponse200ItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\ImagesSearchGetResponse200Item::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\ImagesSearchGetResponse200Item::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\ImagesSearchGetResponse200Item();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('description', $data) && $data['description'] !== null) {
                $object->setDescription($data['description']);
            }
            elseif (\array_key_exists('description', $data) && $data['description'] === null) {
                $object->setDescription(null);
            }
            if (\array_key_exists('is_official', $data) && $data['is_official'] !== null) {
                $object->setIsOfficial($data['is_official']);
            }
            elseif (\array_key_exists('is_official', $data) && $data['is_official'] === null) {
                $object->setIsOfficial(null);
            }
            if (\array_key_exists('is_automated', $data) && $data['is_automated'] !== null) {
                $object->setIsAutomated($data['is_automated']);
            }
            elseif (\array_key_exists('is_automated', $data) && $data['is_automated'] === null) {
                $object->setIsAutomated(null);
            }
            if (\array_key_exists('name', $data) && $data['name'] !== null) {
                $object->setName($data['name']);
            }
            elseif (\array_key_exists('name', $data) && $data['name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('star_count', $data) && $data['star_count'] !== null) {
                $object->setStarCount($data['star_count']);
            }
            elseif (\array_key_exists('star_count', $data) && $data['star_count'] === null) {
                $object->setStarCount(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('isOfficial') && null !== $object->getIsOfficial()) {
                $data['is_official'] = $object->getIsOfficial();
            }
            if ($object->isInitialized('isAutomated') && null !== $object->getIsAutomated()) {
                $data['is_automated'] = $object->getIsAutomated();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('starCount') && null !== $object->getStarCount()) {
                $data['star_count'] = $object->getStarCount();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\ImagesSearchGetResponse200Item::class => false];
        }
    }
} else {
    class ImagesSearchGetResponse200ItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\ImagesSearchGetResponse200Item::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\ImagesSearchGetResponse200Item::class;
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
            $object = new \Docker\API\Model\ImagesSearchGetResponse200Item();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('description', $data) && $data['description'] !== null) {
                $object->setDescription($data['description']);
            }
            elseif (\array_key_exists('description', $data) && $data['description'] === null) {
                $object->setDescription(null);
            }
            if (\array_key_exists('is_official', $data) && $data['is_official'] !== null) {
                $object->setIsOfficial($data['is_official']);
            }
            elseif (\array_key_exists('is_official', $data) && $data['is_official'] === null) {
                $object->setIsOfficial(null);
            }
            if (\array_key_exists('is_automated', $data) && $data['is_automated'] !== null) {
                $object->setIsAutomated($data['is_automated']);
            }
            elseif (\array_key_exists('is_automated', $data) && $data['is_automated'] === null) {
                $object->setIsAutomated(null);
            }
            if (\array_key_exists('name', $data) && $data['name'] !== null) {
                $object->setName($data['name']);
            }
            elseif (\array_key_exists('name', $data) && $data['name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('star_count', $data) && $data['star_count'] !== null) {
                $object->setStarCount($data['star_count']);
            }
            elseif (\array_key_exists('star_count', $data) && $data['star_count'] === null) {
                $object->setStarCount(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('isOfficial') && null !== $object->getIsOfficial()) {
                $data['is_official'] = $object->getIsOfficial();
            }
            if ($object->isInitialized('isAutomated') && null !== $object->getIsAutomated()) {
                $data['is_automated'] = $object->getIsAutomated();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('starCount') && null !== $object->getStarCount()) {
                $data['star_count'] = $object->getStarCount();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\ImagesSearchGetResponse200Item::class => false];
        }
    }
}