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
    class BuildInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\BuildInfo::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\BuildInfo::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\BuildInfo();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
            }
            elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('stream', $data) && $data['stream'] !== null) {
                $object->setStream($data['stream']);
            }
            elseif (\array_key_exists('stream', $data) && $data['stream'] === null) {
                $object->setStream(null);
            }
            if (\array_key_exists('error', $data) && $data['error'] !== null) {
                $object->setError($data['error']);
            }
            elseif (\array_key_exists('error', $data) && $data['error'] === null) {
                $object->setError(null);
            }
            if (\array_key_exists('errorDetail', $data) && $data['errorDetail'] !== null) {
                $object->setErrorDetail($this->denormalizer->denormalize($data['errorDetail'], \Docker\API\Model\ErrorDetail::class, 'json', $context));
            }
            elseif (\array_key_exists('errorDetail', $data) && $data['errorDetail'] === null) {
                $object->setErrorDetail(null);
            }
            if (\array_key_exists('status', $data) && $data['status'] !== null) {
                $object->setStatus($data['status']);
            }
            elseif (\array_key_exists('status', $data) && $data['status'] === null) {
                $object->setStatus(null);
            }
            if (\array_key_exists('progress', $data) && $data['progress'] !== null) {
                $object->setProgress($data['progress']);
            }
            elseif (\array_key_exists('progress', $data) && $data['progress'] === null) {
                $object->setProgress(null);
            }
            if (\array_key_exists('progressDetail', $data) && $data['progressDetail'] !== null) {
                $object->setProgressDetail($this->denormalizer->denormalize($data['progressDetail'], \Docker\API\Model\ProgressDetail::class, 'json', $context));
            }
            elseif (\array_key_exists('progressDetail', $data) && $data['progressDetail'] === null) {
                $object->setProgressDetail(null);
            }
            if (\array_key_exists('aux', $data) && $data['aux'] !== null) {
                $object->setAux($this->denormalizer->denormalize($data['aux'], \Docker\API\Model\ImageID::class, 'json', $context));
            }
            elseif (\array_key_exists('aux', $data) && $data['aux'] === null) {
                $object->setAux(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('stream') && null !== $object->getStream()) {
                $data['stream'] = $object->getStream();
            }
            if ($object->isInitialized('error') && null !== $object->getError()) {
                $data['error'] = $object->getError();
            }
            if ($object->isInitialized('errorDetail') && null !== $object->getErrorDetail()) {
                $data['errorDetail'] = $this->normalizer->normalize($object->getErrorDetail(), 'json', $context);
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            if ($object->isInitialized('progress') && null !== $object->getProgress()) {
                $data['progress'] = $object->getProgress();
            }
            if ($object->isInitialized('progressDetail') && null !== $object->getProgressDetail()) {
                $data['progressDetail'] = $this->normalizer->normalize($object->getProgressDetail(), 'json', $context);
            }
            if ($object->isInitialized('aux') && null !== $object->getAux()) {
                $data['aux'] = $this->normalizer->normalize($object->getAux(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\BuildInfo::class => false];
        }
    }
} else {
    class BuildInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\BuildInfo::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\BuildInfo::class;
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
            $object = new \Docker\API\Model\BuildInfo();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
            }
            elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('stream', $data) && $data['stream'] !== null) {
                $object->setStream($data['stream']);
            }
            elseif (\array_key_exists('stream', $data) && $data['stream'] === null) {
                $object->setStream(null);
            }
            if (\array_key_exists('error', $data) && $data['error'] !== null) {
                $object->setError($data['error']);
            }
            elseif (\array_key_exists('error', $data) && $data['error'] === null) {
                $object->setError(null);
            }
            if (\array_key_exists('errorDetail', $data) && $data['errorDetail'] !== null) {
                $object->setErrorDetail($this->denormalizer->denormalize($data['errorDetail'], \Docker\API\Model\ErrorDetail::class, 'json', $context));
            }
            elseif (\array_key_exists('errorDetail', $data) && $data['errorDetail'] === null) {
                $object->setErrorDetail(null);
            }
            if (\array_key_exists('status', $data) && $data['status'] !== null) {
                $object->setStatus($data['status']);
            }
            elseif (\array_key_exists('status', $data) && $data['status'] === null) {
                $object->setStatus(null);
            }
            if (\array_key_exists('progress', $data) && $data['progress'] !== null) {
                $object->setProgress($data['progress']);
            }
            elseif (\array_key_exists('progress', $data) && $data['progress'] === null) {
                $object->setProgress(null);
            }
            if (\array_key_exists('progressDetail', $data) && $data['progressDetail'] !== null) {
                $object->setProgressDetail($this->denormalizer->denormalize($data['progressDetail'], \Docker\API\Model\ProgressDetail::class, 'json', $context));
            }
            elseif (\array_key_exists('progressDetail', $data) && $data['progressDetail'] === null) {
                $object->setProgressDetail(null);
            }
            if (\array_key_exists('aux', $data) && $data['aux'] !== null) {
                $object->setAux($this->denormalizer->denormalize($data['aux'], \Docker\API\Model\ImageID::class, 'json', $context));
            }
            elseif (\array_key_exists('aux', $data) && $data['aux'] === null) {
                $object->setAux(null);
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
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('stream') && null !== $object->getStream()) {
                $data['stream'] = $object->getStream();
            }
            if ($object->isInitialized('error') && null !== $object->getError()) {
                $data['error'] = $object->getError();
            }
            if ($object->isInitialized('errorDetail') && null !== $object->getErrorDetail()) {
                $data['errorDetail'] = $this->normalizer->normalize($object->getErrorDetail(), 'json', $context);
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            if ($object->isInitialized('progress') && null !== $object->getProgress()) {
                $data['progress'] = $object->getProgress();
            }
            if ($object->isInitialized('progressDetail') && null !== $object->getProgressDetail()) {
                $data['progressDetail'] = $this->normalizer->normalize($object->getProgressDetail(), 'json', $context);
            }
            if ($object->isInitialized('aux') && null !== $object->getAux()) {
                $data['aux'] = $this->normalizer->normalize($object->getAux(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\BuildInfo::class => false];
        }
    }
}