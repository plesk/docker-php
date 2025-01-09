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
    class ExecIdJsonGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\ExecIdJsonGetResponse200::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\ExecIdJsonGetResponse200::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\ExecIdJsonGetResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('CanRemove', $data) && $data['CanRemove'] !== null) {
                $object->setCanRemove($data['CanRemove']);
            }
            elseif (\array_key_exists('CanRemove', $data) && $data['CanRemove'] === null) {
                $object->setCanRemove(null);
            }
            if (\array_key_exists('DetachKeys', $data) && $data['DetachKeys'] !== null) {
                $object->setDetachKeys($data['DetachKeys']);
            }
            elseif (\array_key_exists('DetachKeys', $data) && $data['DetachKeys'] === null) {
                $object->setDetachKeys(null);
            }
            if (\array_key_exists('ID', $data) && $data['ID'] !== null) {
                $object->setID($data['ID']);
            }
            elseif (\array_key_exists('ID', $data) && $data['ID'] === null) {
                $object->setID(null);
            }
            if (\array_key_exists('Running', $data) && $data['Running'] !== null) {
                $object->setRunning($data['Running']);
            }
            elseif (\array_key_exists('Running', $data) && $data['Running'] === null) {
                $object->setRunning(null);
            }
            if (\array_key_exists('ExitCode', $data) && $data['ExitCode'] !== null) {
                $object->setExitCode($data['ExitCode']);
            }
            elseif (\array_key_exists('ExitCode', $data) && $data['ExitCode'] === null) {
                $object->setExitCode(null);
            }
            if (\array_key_exists('ProcessConfig', $data) && $data['ProcessConfig'] !== null) {
                $object->setProcessConfig($this->denormalizer->denormalize($data['ProcessConfig'], \Docker\API\Model\ProcessConfig::class, 'json', $context));
            }
            elseif (\array_key_exists('ProcessConfig', $data) && $data['ProcessConfig'] === null) {
                $object->setProcessConfig(null);
            }
            if (\array_key_exists('OpenStdin', $data) && $data['OpenStdin'] !== null) {
                $object->setOpenStdin($data['OpenStdin']);
            }
            elseif (\array_key_exists('OpenStdin', $data) && $data['OpenStdin'] === null) {
                $object->setOpenStdin(null);
            }
            if (\array_key_exists('OpenStderr', $data) && $data['OpenStderr'] !== null) {
                $object->setOpenStderr($data['OpenStderr']);
            }
            elseif (\array_key_exists('OpenStderr', $data) && $data['OpenStderr'] === null) {
                $object->setOpenStderr(null);
            }
            if (\array_key_exists('OpenStdout', $data) && $data['OpenStdout'] !== null) {
                $object->setOpenStdout($data['OpenStdout']);
            }
            elseif (\array_key_exists('OpenStdout', $data) && $data['OpenStdout'] === null) {
                $object->setOpenStdout(null);
            }
            if (\array_key_exists('ContainerID', $data) && $data['ContainerID'] !== null) {
                $object->setContainerID($data['ContainerID']);
            }
            elseif (\array_key_exists('ContainerID', $data) && $data['ContainerID'] === null) {
                $object->setContainerID(null);
            }
            if (\array_key_exists('Pid', $data) && $data['Pid'] !== null) {
                $object->setPid($data['Pid']);
            }
            elseif (\array_key_exists('Pid', $data) && $data['Pid'] === null) {
                $object->setPid(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('canRemove') && null !== $object->getCanRemove()) {
                $data['CanRemove'] = $object->getCanRemove();
            }
            if ($object->isInitialized('detachKeys') && null !== $object->getDetachKeys()) {
                $data['DetachKeys'] = $object->getDetachKeys();
            }
            if ($object->isInitialized('iD') && null !== $object->getID()) {
                $data['ID'] = $object->getID();
            }
            if ($object->isInitialized('running') && null !== $object->getRunning()) {
                $data['Running'] = $object->getRunning();
            }
            if ($object->isInitialized('exitCode') && null !== $object->getExitCode()) {
                $data['ExitCode'] = $object->getExitCode();
            }
            if ($object->isInitialized('processConfig') && null !== $object->getProcessConfig()) {
                $data['ProcessConfig'] = $this->normalizer->normalize($object->getProcessConfig(), 'json', $context);
            }
            if ($object->isInitialized('openStdin') && null !== $object->getOpenStdin()) {
                $data['OpenStdin'] = $object->getOpenStdin();
            }
            if ($object->isInitialized('openStderr') && null !== $object->getOpenStderr()) {
                $data['OpenStderr'] = $object->getOpenStderr();
            }
            if ($object->isInitialized('openStdout') && null !== $object->getOpenStdout()) {
                $data['OpenStdout'] = $object->getOpenStdout();
            }
            if ($object->isInitialized('containerID') && null !== $object->getContainerID()) {
                $data['ContainerID'] = $object->getContainerID();
            }
            if ($object->isInitialized('pid') && null !== $object->getPid()) {
                $data['Pid'] = $object->getPid();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\ExecIdJsonGetResponse200::class => false];
        }
    }
} else {
    class ExecIdJsonGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\ExecIdJsonGetResponse200::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\ExecIdJsonGetResponse200::class;
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
            $object = new \Docker\API\Model\ExecIdJsonGetResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('CanRemove', $data) && $data['CanRemove'] !== null) {
                $object->setCanRemove($data['CanRemove']);
            }
            elseif (\array_key_exists('CanRemove', $data) && $data['CanRemove'] === null) {
                $object->setCanRemove(null);
            }
            if (\array_key_exists('DetachKeys', $data) && $data['DetachKeys'] !== null) {
                $object->setDetachKeys($data['DetachKeys']);
            }
            elseif (\array_key_exists('DetachKeys', $data) && $data['DetachKeys'] === null) {
                $object->setDetachKeys(null);
            }
            if (\array_key_exists('ID', $data) && $data['ID'] !== null) {
                $object->setID($data['ID']);
            }
            elseif (\array_key_exists('ID', $data) && $data['ID'] === null) {
                $object->setID(null);
            }
            if (\array_key_exists('Running', $data) && $data['Running'] !== null) {
                $object->setRunning($data['Running']);
            }
            elseif (\array_key_exists('Running', $data) && $data['Running'] === null) {
                $object->setRunning(null);
            }
            if (\array_key_exists('ExitCode', $data) && $data['ExitCode'] !== null) {
                $object->setExitCode($data['ExitCode']);
            }
            elseif (\array_key_exists('ExitCode', $data) && $data['ExitCode'] === null) {
                $object->setExitCode(null);
            }
            if (\array_key_exists('ProcessConfig', $data) && $data['ProcessConfig'] !== null) {
                $object->setProcessConfig($this->denormalizer->denormalize($data['ProcessConfig'], \Docker\API\Model\ProcessConfig::class, 'json', $context));
            }
            elseif (\array_key_exists('ProcessConfig', $data) && $data['ProcessConfig'] === null) {
                $object->setProcessConfig(null);
            }
            if (\array_key_exists('OpenStdin', $data) && $data['OpenStdin'] !== null) {
                $object->setOpenStdin($data['OpenStdin']);
            }
            elseif (\array_key_exists('OpenStdin', $data) && $data['OpenStdin'] === null) {
                $object->setOpenStdin(null);
            }
            if (\array_key_exists('OpenStderr', $data) && $data['OpenStderr'] !== null) {
                $object->setOpenStderr($data['OpenStderr']);
            }
            elseif (\array_key_exists('OpenStderr', $data) && $data['OpenStderr'] === null) {
                $object->setOpenStderr(null);
            }
            if (\array_key_exists('OpenStdout', $data) && $data['OpenStdout'] !== null) {
                $object->setOpenStdout($data['OpenStdout']);
            }
            elseif (\array_key_exists('OpenStdout', $data) && $data['OpenStdout'] === null) {
                $object->setOpenStdout(null);
            }
            if (\array_key_exists('ContainerID', $data) && $data['ContainerID'] !== null) {
                $object->setContainerID($data['ContainerID']);
            }
            elseif (\array_key_exists('ContainerID', $data) && $data['ContainerID'] === null) {
                $object->setContainerID(null);
            }
            if (\array_key_exists('Pid', $data) && $data['Pid'] !== null) {
                $object->setPid($data['Pid']);
            }
            elseif (\array_key_exists('Pid', $data) && $data['Pid'] === null) {
                $object->setPid(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('canRemove') && null !== $object->getCanRemove()) {
                $data['CanRemove'] = $object->getCanRemove();
            }
            if ($object->isInitialized('detachKeys') && null !== $object->getDetachKeys()) {
                $data['DetachKeys'] = $object->getDetachKeys();
            }
            if ($object->isInitialized('iD') && null !== $object->getID()) {
                $data['ID'] = $object->getID();
            }
            if ($object->isInitialized('running') && null !== $object->getRunning()) {
                $data['Running'] = $object->getRunning();
            }
            if ($object->isInitialized('exitCode') && null !== $object->getExitCode()) {
                $data['ExitCode'] = $object->getExitCode();
            }
            if ($object->isInitialized('processConfig') && null !== $object->getProcessConfig()) {
                $data['ProcessConfig'] = $this->normalizer->normalize($object->getProcessConfig(), 'json', $context);
            }
            if ($object->isInitialized('openStdin') && null !== $object->getOpenStdin()) {
                $data['OpenStdin'] = $object->getOpenStdin();
            }
            if ($object->isInitialized('openStderr') && null !== $object->getOpenStderr()) {
                $data['OpenStderr'] = $object->getOpenStderr();
            }
            if ($object->isInitialized('openStdout') && null !== $object->getOpenStdout()) {
                $data['OpenStdout'] = $object->getOpenStdout();
            }
            if ($object->isInitialized('containerID') && null !== $object->getContainerID()) {
                $data['ContainerID'] = $object->getContainerID();
            }
            if ($object->isInitialized('pid') && null !== $object->getPid()) {
                $data['Pid'] = $object->getPid();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\ExecIdJsonGetResponse200::class => false];
        }
    }
}