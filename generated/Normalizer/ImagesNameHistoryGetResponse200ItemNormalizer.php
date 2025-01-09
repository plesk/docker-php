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
    class ImagesNameHistoryGetResponse200ItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\ImagesNameHistoryGetResponse200Item::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\ImagesNameHistoryGetResponse200Item::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\ImagesNameHistoryGetResponse200Item();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Id', $data) && $data['Id'] !== null) {
                $object->setId($data['Id']);
            }
            elseif (\array_key_exists('Id', $data) && $data['Id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('Created', $data) && $data['Created'] !== null) {
                $object->setCreated($data['Created']);
            }
            elseif (\array_key_exists('Created', $data) && $data['Created'] === null) {
                $object->setCreated(null);
            }
            if (\array_key_exists('CreatedBy', $data) && $data['CreatedBy'] !== null) {
                $object->setCreatedBy($data['CreatedBy']);
            }
            elseif (\array_key_exists('CreatedBy', $data) && $data['CreatedBy'] === null) {
                $object->setCreatedBy(null);
            }
            if (\array_key_exists('Tags', $data) && $data['Tags'] !== null) {
                $values = [];
                foreach ($data['Tags'] as $value) {
                    $values[] = $value;
                }
                $object->setTags($values);
            }
            elseif (\array_key_exists('Tags', $data) && $data['Tags'] === null) {
                $object->setTags(null);
            }
            if (\array_key_exists('Size', $data) && $data['Size'] !== null) {
                $object->setSize($data['Size']);
            }
            elseif (\array_key_exists('Size', $data) && $data['Size'] === null) {
                $object->setSize(null);
            }
            if (\array_key_exists('Comment', $data) && $data['Comment'] !== null) {
                $object->setComment($data['Comment']);
            }
            elseif (\array_key_exists('Comment', $data) && $data['Comment'] === null) {
                $object->setComment(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['Id'] = $object->getId();
            }
            if ($object->isInitialized('created') && null !== $object->getCreated()) {
                $data['Created'] = $object->getCreated();
            }
            if ($object->isInitialized('createdBy') && null !== $object->getCreatedBy()) {
                $data['CreatedBy'] = $object->getCreatedBy();
            }
            if ($object->isInitialized('tags') && null !== $object->getTags()) {
                $values = [];
                foreach ($object->getTags() as $value) {
                    $values[] = $value;
                }
                $data['Tags'] = $values;
            }
            if ($object->isInitialized('size') && null !== $object->getSize()) {
                $data['Size'] = $object->getSize();
            }
            if ($object->isInitialized('comment') && null !== $object->getComment()) {
                $data['Comment'] = $object->getComment();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\ImagesNameHistoryGetResponse200Item::class => false];
        }
    }
} else {
    class ImagesNameHistoryGetResponse200ItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\ImagesNameHistoryGetResponse200Item::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\ImagesNameHistoryGetResponse200Item::class;
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
            $object = new \Docker\API\Model\ImagesNameHistoryGetResponse200Item();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Id', $data) && $data['Id'] !== null) {
                $object->setId($data['Id']);
            }
            elseif (\array_key_exists('Id', $data) && $data['Id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('Created', $data) && $data['Created'] !== null) {
                $object->setCreated($data['Created']);
            }
            elseif (\array_key_exists('Created', $data) && $data['Created'] === null) {
                $object->setCreated(null);
            }
            if (\array_key_exists('CreatedBy', $data) && $data['CreatedBy'] !== null) {
                $object->setCreatedBy($data['CreatedBy']);
            }
            elseif (\array_key_exists('CreatedBy', $data) && $data['CreatedBy'] === null) {
                $object->setCreatedBy(null);
            }
            if (\array_key_exists('Tags', $data) && $data['Tags'] !== null) {
                $values = [];
                foreach ($data['Tags'] as $value) {
                    $values[] = $value;
                }
                $object->setTags($values);
            }
            elseif (\array_key_exists('Tags', $data) && $data['Tags'] === null) {
                $object->setTags(null);
            }
            if (\array_key_exists('Size', $data) && $data['Size'] !== null) {
                $object->setSize($data['Size']);
            }
            elseif (\array_key_exists('Size', $data) && $data['Size'] === null) {
                $object->setSize(null);
            }
            if (\array_key_exists('Comment', $data) && $data['Comment'] !== null) {
                $object->setComment($data['Comment']);
            }
            elseif (\array_key_exists('Comment', $data) && $data['Comment'] === null) {
                $object->setComment(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['Id'] = $object->getId();
            }
            if ($object->isInitialized('created') && null !== $object->getCreated()) {
                $data['Created'] = $object->getCreated();
            }
            if ($object->isInitialized('createdBy') && null !== $object->getCreatedBy()) {
                $data['CreatedBy'] = $object->getCreatedBy();
            }
            if ($object->isInitialized('tags') && null !== $object->getTags()) {
                $values = [];
                foreach ($object->getTags() as $value) {
                    $values[] = $value;
                }
                $data['Tags'] = $values;
            }
            if ($object->isInitialized('size') && null !== $object->getSize()) {
                $data['Size'] = $object->getSize();
            }
            if ($object->isInitialized('comment') && null !== $object->getComment()) {
                $data['Comment'] = $object->getComment();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\ImagesNameHistoryGetResponse200Item::class => false];
        }
    }
}