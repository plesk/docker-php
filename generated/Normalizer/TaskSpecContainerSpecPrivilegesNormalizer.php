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
    class TaskSpecContainerSpecPrivilegesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\TaskSpecContainerSpecPrivileges::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\TaskSpecContainerSpecPrivileges::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\TaskSpecContainerSpecPrivileges();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('CredentialSpec', $data) && $data['CredentialSpec'] !== null) {
                $object->setCredentialSpec($this->denormalizer->denormalize($data['CredentialSpec'], \Docker\API\Model\TaskSpecContainerSpecPrivilegesCredentialSpec::class, 'json', $context));
            }
            elseif (\array_key_exists('CredentialSpec', $data) && $data['CredentialSpec'] === null) {
                $object->setCredentialSpec(null);
            }
            if (\array_key_exists('SELinuxContext', $data) && $data['SELinuxContext'] !== null) {
                $object->setSELinuxContext($this->denormalizer->denormalize($data['SELinuxContext'], \Docker\API\Model\TaskSpecContainerSpecPrivilegesSELinuxContext::class, 'json', $context));
            }
            elseif (\array_key_exists('SELinuxContext', $data) && $data['SELinuxContext'] === null) {
                $object->setSELinuxContext(null);
            }
            if (\array_key_exists('Seccomp', $data) && $data['Seccomp'] !== null) {
                $object->setSeccomp($this->denormalizer->denormalize($data['Seccomp'], \Docker\API\Model\TaskSpecContainerSpecPrivilegesSeccomp::class, 'json', $context));
            }
            elseif (\array_key_exists('Seccomp', $data) && $data['Seccomp'] === null) {
                $object->setSeccomp(null);
            }
            if (\array_key_exists('AppArmor', $data) && $data['AppArmor'] !== null) {
                $object->setAppArmor($this->denormalizer->denormalize($data['AppArmor'], \Docker\API\Model\TaskSpecContainerSpecPrivilegesAppArmor::class, 'json', $context));
            }
            elseif (\array_key_exists('AppArmor', $data) && $data['AppArmor'] === null) {
                $object->setAppArmor(null);
            }
            if (\array_key_exists('NoNewPrivileges', $data) && $data['NoNewPrivileges'] !== null) {
                $object->setNoNewPrivileges($data['NoNewPrivileges']);
            }
            elseif (\array_key_exists('NoNewPrivileges', $data) && $data['NoNewPrivileges'] === null) {
                $object->setNoNewPrivileges(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('credentialSpec') && null !== $object->getCredentialSpec()) {
                $data['CredentialSpec'] = $this->normalizer->normalize($object->getCredentialSpec(), 'json', $context);
            }
            if ($object->isInitialized('sELinuxContext') && null !== $object->getSELinuxContext()) {
                $data['SELinuxContext'] = $this->normalizer->normalize($object->getSELinuxContext(), 'json', $context);
            }
            if ($object->isInitialized('seccomp') && null !== $object->getSeccomp()) {
                $data['Seccomp'] = $this->normalizer->normalize($object->getSeccomp(), 'json', $context);
            }
            if ($object->isInitialized('appArmor') && null !== $object->getAppArmor()) {
                $data['AppArmor'] = $this->normalizer->normalize($object->getAppArmor(), 'json', $context);
            }
            if ($object->isInitialized('noNewPrivileges') && null !== $object->getNoNewPrivileges()) {
                $data['NoNewPrivileges'] = $object->getNoNewPrivileges();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\TaskSpecContainerSpecPrivileges::class => false];
        }
    }
} else {
    class TaskSpecContainerSpecPrivilegesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\TaskSpecContainerSpecPrivileges::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\TaskSpecContainerSpecPrivileges::class;
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
            $object = new \Docker\API\Model\TaskSpecContainerSpecPrivileges();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('CredentialSpec', $data) && $data['CredentialSpec'] !== null) {
                $object->setCredentialSpec($this->denormalizer->denormalize($data['CredentialSpec'], \Docker\API\Model\TaskSpecContainerSpecPrivilegesCredentialSpec::class, 'json', $context));
            }
            elseif (\array_key_exists('CredentialSpec', $data) && $data['CredentialSpec'] === null) {
                $object->setCredentialSpec(null);
            }
            if (\array_key_exists('SELinuxContext', $data) && $data['SELinuxContext'] !== null) {
                $object->setSELinuxContext($this->denormalizer->denormalize($data['SELinuxContext'], \Docker\API\Model\TaskSpecContainerSpecPrivilegesSELinuxContext::class, 'json', $context));
            }
            elseif (\array_key_exists('SELinuxContext', $data) && $data['SELinuxContext'] === null) {
                $object->setSELinuxContext(null);
            }
            if (\array_key_exists('Seccomp', $data) && $data['Seccomp'] !== null) {
                $object->setSeccomp($this->denormalizer->denormalize($data['Seccomp'], \Docker\API\Model\TaskSpecContainerSpecPrivilegesSeccomp::class, 'json', $context));
            }
            elseif (\array_key_exists('Seccomp', $data) && $data['Seccomp'] === null) {
                $object->setSeccomp(null);
            }
            if (\array_key_exists('AppArmor', $data) && $data['AppArmor'] !== null) {
                $object->setAppArmor($this->denormalizer->denormalize($data['AppArmor'], \Docker\API\Model\TaskSpecContainerSpecPrivilegesAppArmor::class, 'json', $context));
            }
            elseif (\array_key_exists('AppArmor', $data) && $data['AppArmor'] === null) {
                $object->setAppArmor(null);
            }
            if (\array_key_exists('NoNewPrivileges', $data) && $data['NoNewPrivileges'] !== null) {
                $object->setNoNewPrivileges($data['NoNewPrivileges']);
            }
            elseif (\array_key_exists('NoNewPrivileges', $data) && $data['NoNewPrivileges'] === null) {
                $object->setNoNewPrivileges(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('credentialSpec') && null !== $object->getCredentialSpec()) {
                $data['CredentialSpec'] = $this->normalizer->normalize($object->getCredentialSpec(), 'json', $context);
            }
            if ($object->isInitialized('sELinuxContext') && null !== $object->getSELinuxContext()) {
                $data['SELinuxContext'] = $this->normalizer->normalize($object->getSELinuxContext(), 'json', $context);
            }
            if ($object->isInitialized('seccomp') && null !== $object->getSeccomp()) {
                $data['Seccomp'] = $this->normalizer->normalize($object->getSeccomp(), 'json', $context);
            }
            if ($object->isInitialized('appArmor') && null !== $object->getAppArmor()) {
                $data['AppArmor'] = $this->normalizer->normalize($object->getAppArmor(), 'json', $context);
            }
            if ($object->isInitialized('noNewPrivileges') && null !== $object->getNoNewPrivileges()) {
                $data['NoNewPrivileges'] = $object->getNoNewPrivileges();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\TaskSpecContainerSpecPrivileges::class => false];
        }
    }
}