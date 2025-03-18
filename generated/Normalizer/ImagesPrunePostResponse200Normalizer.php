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
    class ImagesPrunePostResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\ImagesPrunePostResponse200::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\ImagesPrunePostResponse200::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\ImagesPrunePostResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ImagesDeleted', $data) && $data['ImagesDeleted'] !== null) {
                $values = [];
                foreach ($data['ImagesDeleted'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Docker\API\Model\ImageDeleteResponseItem::class, 'json', $context);
                }
                $object->setImagesDeleted($values);
            }
            elseif (\array_key_exists('ImagesDeleted', $data) && $data['ImagesDeleted'] === null) {
                $object->setImagesDeleted(null);
            }
            if (\array_key_exists('SpaceReclaimed', $data) && $data['SpaceReclaimed'] !== null) {
                $object->setSpaceReclaimed($data['SpaceReclaimed']);
            }
            elseif (\array_key_exists('SpaceReclaimed', $data) && $data['SpaceReclaimed'] === null) {
                $object->setSpaceReclaimed(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('imagesDeleted') && null !== $object->getImagesDeleted()) {
                $values = [];
                foreach ($object->getImagesDeleted() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['ImagesDeleted'] = $values;
            }
            if ($object->isInitialized('spaceReclaimed') && null !== $object->getSpaceReclaimed()) {
                $data['SpaceReclaimed'] = $object->getSpaceReclaimed();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\ImagesPrunePostResponse200::class => false];
        }
    }
} else {
    class ImagesPrunePostResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\ImagesPrunePostResponse200::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\ImagesPrunePostResponse200::class;
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
            $object = new \Docker\API\Model\ImagesPrunePostResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ImagesDeleted', $data) && $data['ImagesDeleted'] !== null) {
                $values = [];
                foreach ($data['ImagesDeleted'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Docker\API\Model\ImageDeleteResponseItem::class, 'json', $context);
                }
                $object->setImagesDeleted($values);
            }
            elseif (\array_key_exists('ImagesDeleted', $data) && $data['ImagesDeleted'] === null) {
                $object->setImagesDeleted(null);
            }
            if (\array_key_exists('SpaceReclaimed', $data) && $data['SpaceReclaimed'] !== null) {
                $object->setSpaceReclaimed($data['SpaceReclaimed']);
            }
            elseif (\array_key_exists('SpaceReclaimed', $data) && $data['SpaceReclaimed'] === null) {
                $object->setSpaceReclaimed(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('imagesDeleted') && null !== $object->getImagesDeleted()) {
                $values = [];
                foreach ($object->getImagesDeleted() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['ImagesDeleted'] = $values;
            }
            if ($object->isInitialized('spaceReclaimed') && null !== $object->getSpaceReclaimed()) {
                $data['SpaceReclaimed'] = $object->getSpaceReclaimed();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\ImagesPrunePostResponse200::class => false];
        }
    }
}