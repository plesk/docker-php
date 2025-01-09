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
    class ContainersCreatePostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\ContainersCreatePostBody::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\ContainersCreatePostBody::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\ContainersCreatePostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Hostname', $data) && $data['Hostname'] !== null) {
                $object->setHostname($data['Hostname']);
            }
            elseif (\array_key_exists('Hostname', $data) && $data['Hostname'] === null) {
                $object->setHostname(null);
            }
            if (\array_key_exists('Domainname', $data) && $data['Domainname'] !== null) {
                $object->setDomainname($data['Domainname']);
            }
            elseif (\array_key_exists('Domainname', $data) && $data['Domainname'] === null) {
                $object->setDomainname(null);
            }
            if (\array_key_exists('User', $data) && $data['User'] !== null) {
                $object->setUser($data['User']);
            }
            elseif (\array_key_exists('User', $data) && $data['User'] === null) {
                $object->setUser(null);
            }
            if (\array_key_exists('AttachStdin', $data) && $data['AttachStdin'] !== null) {
                $object->setAttachStdin($data['AttachStdin']);
            }
            elseif (\array_key_exists('AttachStdin', $data) && $data['AttachStdin'] === null) {
                $object->setAttachStdin(null);
            }
            if (\array_key_exists('AttachStdout', $data) && $data['AttachStdout'] !== null) {
                $object->setAttachStdout($data['AttachStdout']);
            }
            elseif (\array_key_exists('AttachStdout', $data) && $data['AttachStdout'] === null) {
                $object->setAttachStdout(null);
            }
            if (\array_key_exists('AttachStderr', $data) && $data['AttachStderr'] !== null) {
                $object->setAttachStderr($data['AttachStderr']);
            }
            elseif (\array_key_exists('AttachStderr', $data) && $data['AttachStderr'] === null) {
                $object->setAttachStderr(null);
            }
            if (\array_key_exists('ExposedPorts', $data) && $data['ExposedPorts'] !== null) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['ExposedPorts'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setExposedPorts($values);
            }
            elseif (\array_key_exists('ExposedPorts', $data) && $data['ExposedPorts'] === null) {
                $object->setExposedPorts(null);
            }
            if (\array_key_exists('Tty', $data) && $data['Tty'] !== null) {
                $object->setTty($data['Tty']);
            }
            elseif (\array_key_exists('Tty', $data) && $data['Tty'] === null) {
                $object->setTty(null);
            }
            if (\array_key_exists('OpenStdin', $data) && $data['OpenStdin'] !== null) {
                $object->setOpenStdin($data['OpenStdin']);
            }
            elseif (\array_key_exists('OpenStdin', $data) && $data['OpenStdin'] === null) {
                $object->setOpenStdin(null);
            }
            if (\array_key_exists('StdinOnce', $data) && $data['StdinOnce'] !== null) {
                $object->setStdinOnce($data['StdinOnce']);
            }
            elseif (\array_key_exists('StdinOnce', $data) && $data['StdinOnce'] === null) {
                $object->setStdinOnce(null);
            }
            if (\array_key_exists('Env', $data) && $data['Env'] !== null) {
                $values_1 = [];
                foreach ($data['Env'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setEnv($values_1);
            }
            elseif (\array_key_exists('Env', $data) && $data['Env'] === null) {
                $object->setEnv(null);
            }
            if (\array_key_exists('Cmd', $data) && $data['Cmd'] !== null) {
                $values_2 = [];
                foreach ($data['Cmd'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setCmd($values_2);
            }
            elseif (\array_key_exists('Cmd', $data) && $data['Cmd'] === null) {
                $object->setCmd(null);
            }
            if (\array_key_exists('Healthcheck', $data) && $data['Healthcheck'] !== null) {
                $object->setHealthcheck($this->denormalizer->denormalize($data['Healthcheck'], \Docker\API\Model\HealthConfig::class, 'json', $context));
            }
            elseif (\array_key_exists('Healthcheck', $data) && $data['Healthcheck'] === null) {
                $object->setHealthcheck(null);
            }
            if (\array_key_exists('ArgsEscaped', $data) && $data['ArgsEscaped'] !== null) {
                $object->setArgsEscaped($data['ArgsEscaped']);
            }
            elseif (\array_key_exists('ArgsEscaped', $data) && $data['ArgsEscaped'] === null) {
                $object->setArgsEscaped(null);
            }
            if (\array_key_exists('Image', $data) && $data['Image'] !== null) {
                $object->setImage($data['Image']);
            }
            elseif (\array_key_exists('Image', $data) && $data['Image'] === null) {
                $object->setImage(null);
            }
            if (\array_key_exists('Volumes', $data) && $data['Volumes'] !== null) {
                $values_3 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Volumes'] as $key_1 => $value_3) {
                    $values_3[$key_1] = $value_3;
                }
                $object->setVolumes($values_3);
            }
            elseif (\array_key_exists('Volumes', $data) && $data['Volumes'] === null) {
                $object->setVolumes(null);
            }
            if (\array_key_exists('WorkingDir', $data) && $data['WorkingDir'] !== null) {
                $object->setWorkingDir($data['WorkingDir']);
            }
            elseif (\array_key_exists('WorkingDir', $data) && $data['WorkingDir'] === null) {
                $object->setWorkingDir(null);
            }
            if (\array_key_exists('Entrypoint', $data) && $data['Entrypoint'] !== null) {
                $values_4 = [];
                foreach ($data['Entrypoint'] as $value_4) {
                    $values_4[] = $value_4;
                }
                $object->setEntrypoint($values_4);
            }
            elseif (\array_key_exists('Entrypoint', $data) && $data['Entrypoint'] === null) {
                $object->setEntrypoint(null);
            }
            if (\array_key_exists('NetworkDisabled', $data) && $data['NetworkDisabled'] !== null) {
                $object->setNetworkDisabled($data['NetworkDisabled']);
            }
            elseif (\array_key_exists('NetworkDisabled', $data) && $data['NetworkDisabled'] === null) {
                $object->setNetworkDisabled(null);
            }
            if (\array_key_exists('MacAddress', $data) && $data['MacAddress'] !== null) {
                $object->setMacAddress($data['MacAddress']);
            }
            elseif (\array_key_exists('MacAddress', $data) && $data['MacAddress'] === null) {
                $object->setMacAddress(null);
            }
            if (\array_key_exists('OnBuild', $data) && $data['OnBuild'] !== null) {
                $values_5 = [];
                foreach ($data['OnBuild'] as $value_5) {
                    $values_5[] = $value_5;
                }
                $object->setOnBuild($values_5);
            }
            elseif (\array_key_exists('OnBuild', $data) && $data['OnBuild'] === null) {
                $object->setOnBuild(null);
            }
            if (\array_key_exists('Labels', $data) && $data['Labels'] !== null) {
                $values_6 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Labels'] as $key_2 => $value_6) {
                    $values_6[$key_2] = $value_6;
                }
                $object->setLabels($values_6);
            }
            elseif (\array_key_exists('Labels', $data) && $data['Labels'] === null) {
                $object->setLabels(null);
            }
            if (\array_key_exists('StopSignal', $data) && $data['StopSignal'] !== null) {
                $object->setStopSignal($data['StopSignal']);
            }
            elseif (\array_key_exists('StopSignal', $data) && $data['StopSignal'] === null) {
                $object->setStopSignal(null);
            }
            if (\array_key_exists('StopTimeout', $data) && $data['StopTimeout'] !== null) {
                $object->setStopTimeout($data['StopTimeout']);
            }
            elseif (\array_key_exists('StopTimeout', $data) && $data['StopTimeout'] === null) {
                $object->setStopTimeout(null);
            }
            if (\array_key_exists('Shell', $data) && $data['Shell'] !== null) {
                $values_7 = [];
                foreach ($data['Shell'] as $value_7) {
                    $values_7[] = $value_7;
                }
                $object->setShell($values_7);
            }
            elseif (\array_key_exists('Shell', $data) && $data['Shell'] === null) {
                $object->setShell(null);
            }
            if (\array_key_exists('HostConfig', $data) && $data['HostConfig'] !== null) {
                $object->setHostConfig($this->denormalizer->denormalize($data['HostConfig'], \Docker\API\Model\HostConfig::class, 'json', $context));
            }
            elseif (\array_key_exists('HostConfig', $data) && $data['HostConfig'] === null) {
                $object->setHostConfig(null);
            }
            if (\array_key_exists('NetworkingConfig', $data) && $data['NetworkingConfig'] !== null) {
                $object->setNetworkingConfig($this->denormalizer->denormalize($data['NetworkingConfig'], \Docker\API\Model\NetworkingConfig::class, 'json', $context));
            }
            elseif (\array_key_exists('NetworkingConfig', $data) && $data['NetworkingConfig'] === null) {
                $object->setNetworkingConfig(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('hostname') && null !== $object->getHostname()) {
                $data['Hostname'] = $object->getHostname();
            }
            if ($object->isInitialized('domainname') && null !== $object->getDomainname()) {
                $data['Domainname'] = $object->getDomainname();
            }
            if ($object->isInitialized('user') && null !== $object->getUser()) {
                $data['User'] = $object->getUser();
            }
            if ($object->isInitialized('attachStdin') && null !== $object->getAttachStdin()) {
                $data['AttachStdin'] = $object->getAttachStdin();
            }
            if ($object->isInitialized('attachStdout') && null !== $object->getAttachStdout()) {
                $data['AttachStdout'] = $object->getAttachStdout();
            }
            if ($object->isInitialized('attachStderr') && null !== $object->getAttachStderr()) {
                $data['AttachStderr'] = $object->getAttachStderr();
            }
            if ($object->isInitialized('exposedPorts') && null !== $object->getExposedPorts()) {
                $values = [];
                foreach ($object->getExposedPorts() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['ExposedPorts'] = $values;
            }
            if ($object->isInitialized('tty') && null !== $object->getTty()) {
                $data['Tty'] = $object->getTty();
            }
            if ($object->isInitialized('openStdin') && null !== $object->getOpenStdin()) {
                $data['OpenStdin'] = $object->getOpenStdin();
            }
            if ($object->isInitialized('stdinOnce') && null !== $object->getStdinOnce()) {
                $data['StdinOnce'] = $object->getStdinOnce();
            }
            if ($object->isInitialized('env') && null !== $object->getEnv()) {
                $values_1 = [];
                foreach ($object->getEnv() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['Env'] = $values_1;
            }
            if ($object->isInitialized('cmd') && null !== $object->getCmd()) {
                $values_2 = [];
                foreach ($object->getCmd() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['Cmd'] = $values_2;
            }
            if ($object->isInitialized('healthcheck') && null !== $object->getHealthcheck()) {
                $data['Healthcheck'] = $this->normalizer->normalize($object->getHealthcheck(), 'json', $context);
            }
            if ($object->isInitialized('argsEscaped') && null !== $object->getArgsEscaped()) {
                $data['ArgsEscaped'] = $object->getArgsEscaped();
            }
            if ($object->isInitialized('image') && null !== $object->getImage()) {
                $data['Image'] = $object->getImage();
            }
            if ($object->isInitialized('volumes') && null !== $object->getVolumes()) {
                $values_3 = [];
                foreach ($object->getVolumes() as $key_1 => $value_3) {
                    $values_3[$key_1] = $value_3;
                }
                $data['Volumes'] = $values_3;
            }
            if ($object->isInitialized('workingDir') && null !== $object->getWorkingDir()) {
                $data['WorkingDir'] = $object->getWorkingDir();
            }
            if ($object->isInitialized('entrypoint') && null !== $object->getEntrypoint()) {
                $values_4 = [];
                foreach ($object->getEntrypoint() as $value_4) {
                    $values_4[] = $value_4;
                }
                $data['Entrypoint'] = $values_4;
            }
            if ($object->isInitialized('networkDisabled') && null !== $object->getNetworkDisabled()) {
                $data['NetworkDisabled'] = $object->getNetworkDisabled();
            }
            if ($object->isInitialized('macAddress') && null !== $object->getMacAddress()) {
                $data['MacAddress'] = $object->getMacAddress();
            }
            if ($object->isInitialized('onBuild') && null !== $object->getOnBuild()) {
                $values_5 = [];
                foreach ($object->getOnBuild() as $value_5) {
                    $values_5[] = $value_5;
                }
                $data['OnBuild'] = $values_5;
            }
            if ($object->isInitialized('labels') && null !== $object->getLabels()) {
                $values_6 = [];
                foreach ($object->getLabels() as $key_2 => $value_6) {
                    $values_6[$key_2] = $value_6;
                }
                $data['Labels'] = $values_6;
            }
            if ($object->isInitialized('stopSignal') && null !== $object->getStopSignal()) {
                $data['StopSignal'] = $object->getStopSignal();
            }
            if ($object->isInitialized('stopTimeout') && null !== $object->getStopTimeout()) {
                $data['StopTimeout'] = $object->getStopTimeout();
            }
            if ($object->isInitialized('shell') && null !== $object->getShell()) {
                $values_7 = [];
                foreach ($object->getShell() as $value_7) {
                    $values_7[] = $value_7;
                }
                $data['Shell'] = $values_7;
            }
            if ($object->isInitialized('hostConfig') && null !== $object->getHostConfig()) {
                $data['HostConfig'] = $this->normalizer->normalize($object->getHostConfig(), 'json', $context);
            }
            if ($object->isInitialized('networkingConfig') && null !== $object->getNetworkingConfig()) {
                $data['NetworkingConfig'] = $this->normalizer->normalize($object->getNetworkingConfig(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\ContainersCreatePostBody::class => false];
        }
    }
} else {
    class ContainersCreatePostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\ContainersCreatePostBody::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\ContainersCreatePostBody::class;
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
            $object = new \Docker\API\Model\ContainersCreatePostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Hostname', $data) && $data['Hostname'] !== null) {
                $object->setHostname($data['Hostname']);
            }
            elseif (\array_key_exists('Hostname', $data) && $data['Hostname'] === null) {
                $object->setHostname(null);
            }
            if (\array_key_exists('Domainname', $data) && $data['Domainname'] !== null) {
                $object->setDomainname($data['Domainname']);
            }
            elseif (\array_key_exists('Domainname', $data) && $data['Domainname'] === null) {
                $object->setDomainname(null);
            }
            if (\array_key_exists('User', $data) && $data['User'] !== null) {
                $object->setUser($data['User']);
            }
            elseif (\array_key_exists('User', $data) && $data['User'] === null) {
                $object->setUser(null);
            }
            if (\array_key_exists('AttachStdin', $data) && $data['AttachStdin'] !== null) {
                $object->setAttachStdin($data['AttachStdin']);
            }
            elseif (\array_key_exists('AttachStdin', $data) && $data['AttachStdin'] === null) {
                $object->setAttachStdin(null);
            }
            if (\array_key_exists('AttachStdout', $data) && $data['AttachStdout'] !== null) {
                $object->setAttachStdout($data['AttachStdout']);
            }
            elseif (\array_key_exists('AttachStdout', $data) && $data['AttachStdout'] === null) {
                $object->setAttachStdout(null);
            }
            if (\array_key_exists('AttachStderr', $data) && $data['AttachStderr'] !== null) {
                $object->setAttachStderr($data['AttachStderr']);
            }
            elseif (\array_key_exists('AttachStderr', $data) && $data['AttachStderr'] === null) {
                $object->setAttachStderr(null);
            }
            if (\array_key_exists('ExposedPorts', $data) && $data['ExposedPorts'] !== null) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['ExposedPorts'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setExposedPorts($values);
            }
            elseif (\array_key_exists('ExposedPorts', $data) && $data['ExposedPorts'] === null) {
                $object->setExposedPorts(null);
            }
            if (\array_key_exists('Tty', $data) && $data['Tty'] !== null) {
                $object->setTty($data['Tty']);
            }
            elseif (\array_key_exists('Tty', $data) && $data['Tty'] === null) {
                $object->setTty(null);
            }
            if (\array_key_exists('OpenStdin', $data) && $data['OpenStdin'] !== null) {
                $object->setOpenStdin($data['OpenStdin']);
            }
            elseif (\array_key_exists('OpenStdin', $data) && $data['OpenStdin'] === null) {
                $object->setOpenStdin(null);
            }
            if (\array_key_exists('StdinOnce', $data) && $data['StdinOnce'] !== null) {
                $object->setStdinOnce($data['StdinOnce']);
            }
            elseif (\array_key_exists('StdinOnce', $data) && $data['StdinOnce'] === null) {
                $object->setStdinOnce(null);
            }
            if (\array_key_exists('Env', $data) && $data['Env'] !== null) {
                $values_1 = [];
                foreach ($data['Env'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setEnv($values_1);
            }
            elseif (\array_key_exists('Env', $data) && $data['Env'] === null) {
                $object->setEnv(null);
            }
            if (\array_key_exists('Cmd', $data) && $data['Cmd'] !== null) {
                $values_2 = [];
                foreach ($data['Cmd'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setCmd($values_2);
            }
            elseif (\array_key_exists('Cmd', $data) && $data['Cmd'] === null) {
                $object->setCmd(null);
            }
            if (\array_key_exists('Healthcheck', $data) && $data['Healthcheck'] !== null) {
                $object->setHealthcheck($this->denormalizer->denormalize($data['Healthcheck'], \Docker\API\Model\HealthConfig::class, 'json', $context));
            }
            elseif (\array_key_exists('Healthcheck', $data) && $data['Healthcheck'] === null) {
                $object->setHealthcheck(null);
            }
            if (\array_key_exists('ArgsEscaped', $data) && $data['ArgsEscaped'] !== null) {
                $object->setArgsEscaped($data['ArgsEscaped']);
            }
            elseif (\array_key_exists('ArgsEscaped', $data) && $data['ArgsEscaped'] === null) {
                $object->setArgsEscaped(null);
            }
            if (\array_key_exists('Image', $data) && $data['Image'] !== null) {
                $object->setImage($data['Image']);
            }
            elseif (\array_key_exists('Image', $data) && $data['Image'] === null) {
                $object->setImage(null);
            }
            if (\array_key_exists('Volumes', $data) && $data['Volumes'] !== null) {
                $values_3 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Volumes'] as $key_1 => $value_3) {
                    $values_3[$key_1] = $value_3;
                }
                $object->setVolumes($values_3);
            }
            elseif (\array_key_exists('Volumes', $data) && $data['Volumes'] === null) {
                $object->setVolumes(null);
            }
            if (\array_key_exists('WorkingDir', $data) && $data['WorkingDir'] !== null) {
                $object->setWorkingDir($data['WorkingDir']);
            }
            elseif (\array_key_exists('WorkingDir', $data) && $data['WorkingDir'] === null) {
                $object->setWorkingDir(null);
            }
            if (\array_key_exists('Entrypoint', $data) && $data['Entrypoint'] !== null) {
                $values_4 = [];
                foreach ($data['Entrypoint'] as $value_4) {
                    $values_4[] = $value_4;
                }
                $object->setEntrypoint($values_4);
            }
            elseif (\array_key_exists('Entrypoint', $data) && $data['Entrypoint'] === null) {
                $object->setEntrypoint(null);
            }
            if (\array_key_exists('NetworkDisabled', $data) && $data['NetworkDisabled'] !== null) {
                $object->setNetworkDisabled($data['NetworkDisabled']);
            }
            elseif (\array_key_exists('NetworkDisabled', $data) && $data['NetworkDisabled'] === null) {
                $object->setNetworkDisabled(null);
            }
            if (\array_key_exists('MacAddress', $data) && $data['MacAddress'] !== null) {
                $object->setMacAddress($data['MacAddress']);
            }
            elseif (\array_key_exists('MacAddress', $data) && $data['MacAddress'] === null) {
                $object->setMacAddress(null);
            }
            if (\array_key_exists('OnBuild', $data) && $data['OnBuild'] !== null) {
                $values_5 = [];
                foreach ($data['OnBuild'] as $value_5) {
                    $values_5[] = $value_5;
                }
                $object->setOnBuild($values_5);
            }
            elseif (\array_key_exists('OnBuild', $data) && $data['OnBuild'] === null) {
                $object->setOnBuild(null);
            }
            if (\array_key_exists('Labels', $data) && $data['Labels'] !== null) {
                $values_6 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Labels'] as $key_2 => $value_6) {
                    $values_6[$key_2] = $value_6;
                }
                $object->setLabels($values_6);
            }
            elseif (\array_key_exists('Labels', $data) && $data['Labels'] === null) {
                $object->setLabels(null);
            }
            if (\array_key_exists('StopSignal', $data) && $data['StopSignal'] !== null) {
                $object->setStopSignal($data['StopSignal']);
            }
            elseif (\array_key_exists('StopSignal', $data) && $data['StopSignal'] === null) {
                $object->setStopSignal(null);
            }
            if (\array_key_exists('StopTimeout', $data) && $data['StopTimeout'] !== null) {
                $object->setStopTimeout($data['StopTimeout']);
            }
            elseif (\array_key_exists('StopTimeout', $data) && $data['StopTimeout'] === null) {
                $object->setStopTimeout(null);
            }
            if (\array_key_exists('Shell', $data) && $data['Shell'] !== null) {
                $values_7 = [];
                foreach ($data['Shell'] as $value_7) {
                    $values_7[] = $value_7;
                }
                $object->setShell($values_7);
            }
            elseif (\array_key_exists('Shell', $data) && $data['Shell'] === null) {
                $object->setShell(null);
            }
            if (\array_key_exists('HostConfig', $data) && $data['HostConfig'] !== null) {
                $object->setHostConfig($this->denormalizer->denormalize($data['HostConfig'], \Docker\API\Model\HostConfig::class, 'json', $context));
            }
            elseif (\array_key_exists('HostConfig', $data) && $data['HostConfig'] === null) {
                $object->setHostConfig(null);
            }
            if (\array_key_exists('NetworkingConfig', $data) && $data['NetworkingConfig'] !== null) {
                $object->setNetworkingConfig($this->denormalizer->denormalize($data['NetworkingConfig'], \Docker\API\Model\NetworkingConfig::class, 'json', $context));
            }
            elseif (\array_key_exists('NetworkingConfig', $data) && $data['NetworkingConfig'] === null) {
                $object->setNetworkingConfig(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('hostname') && null !== $object->getHostname()) {
                $data['Hostname'] = $object->getHostname();
            }
            if ($object->isInitialized('domainname') && null !== $object->getDomainname()) {
                $data['Domainname'] = $object->getDomainname();
            }
            if ($object->isInitialized('user') && null !== $object->getUser()) {
                $data['User'] = $object->getUser();
            }
            if ($object->isInitialized('attachStdin') && null !== $object->getAttachStdin()) {
                $data['AttachStdin'] = $object->getAttachStdin();
            }
            if ($object->isInitialized('attachStdout') && null !== $object->getAttachStdout()) {
                $data['AttachStdout'] = $object->getAttachStdout();
            }
            if ($object->isInitialized('attachStderr') && null !== $object->getAttachStderr()) {
                $data['AttachStderr'] = $object->getAttachStderr();
            }
            if ($object->isInitialized('exposedPorts') && null !== $object->getExposedPorts()) {
                $values = [];
                foreach ($object->getExposedPorts() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['ExposedPorts'] = $values;
            }
            if ($object->isInitialized('tty') && null !== $object->getTty()) {
                $data['Tty'] = $object->getTty();
            }
            if ($object->isInitialized('openStdin') && null !== $object->getOpenStdin()) {
                $data['OpenStdin'] = $object->getOpenStdin();
            }
            if ($object->isInitialized('stdinOnce') && null !== $object->getStdinOnce()) {
                $data['StdinOnce'] = $object->getStdinOnce();
            }
            if ($object->isInitialized('env') && null !== $object->getEnv()) {
                $values_1 = [];
                foreach ($object->getEnv() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['Env'] = $values_1;
            }
            if ($object->isInitialized('cmd') && null !== $object->getCmd()) {
                $values_2 = [];
                foreach ($object->getCmd() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['Cmd'] = $values_2;
            }
            if ($object->isInitialized('healthcheck') && null !== $object->getHealthcheck()) {
                $data['Healthcheck'] = $this->normalizer->normalize($object->getHealthcheck(), 'json', $context);
            }
            if ($object->isInitialized('argsEscaped') && null !== $object->getArgsEscaped()) {
                $data['ArgsEscaped'] = $object->getArgsEscaped();
            }
            if ($object->isInitialized('image') && null !== $object->getImage()) {
                $data['Image'] = $object->getImage();
            }
            if ($object->isInitialized('volumes') && null !== $object->getVolumes()) {
                $values_3 = [];
                foreach ($object->getVolumes() as $key_1 => $value_3) {
                    $values_3[$key_1] = $value_3;
                }
                $data['Volumes'] = $values_3;
            }
            if ($object->isInitialized('workingDir') && null !== $object->getWorkingDir()) {
                $data['WorkingDir'] = $object->getWorkingDir();
            }
            if ($object->isInitialized('entrypoint') && null !== $object->getEntrypoint()) {
                $values_4 = [];
                foreach ($object->getEntrypoint() as $value_4) {
                    $values_4[] = $value_4;
                }
                $data['Entrypoint'] = $values_4;
            }
            if ($object->isInitialized('networkDisabled') && null !== $object->getNetworkDisabled()) {
                $data['NetworkDisabled'] = $object->getNetworkDisabled();
            }
            if ($object->isInitialized('macAddress') && null !== $object->getMacAddress()) {
                $data['MacAddress'] = $object->getMacAddress();
            }
            if ($object->isInitialized('onBuild') && null !== $object->getOnBuild()) {
                $values_5 = [];
                foreach ($object->getOnBuild() as $value_5) {
                    $values_5[] = $value_5;
                }
                $data['OnBuild'] = $values_5;
            }
            if ($object->isInitialized('labels') && null !== $object->getLabels()) {
                $values_6 = [];
                foreach ($object->getLabels() as $key_2 => $value_6) {
                    $values_6[$key_2] = $value_6;
                }
                $data['Labels'] = $values_6;
            }
            if ($object->isInitialized('stopSignal') && null !== $object->getStopSignal()) {
                $data['StopSignal'] = $object->getStopSignal();
            }
            if ($object->isInitialized('stopTimeout') && null !== $object->getStopTimeout()) {
                $data['StopTimeout'] = $object->getStopTimeout();
            }
            if ($object->isInitialized('shell') && null !== $object->getShell()) {
                $values_7 = [];
                foreach ($object->getShell() as $value_7) {
                    $values_7[] = $value_7;
                }
                $data['Shell'] = $values_7;
            }
            if ($object->isInitialized('hostConfig') && null !== $object->getHostConfig()) {
                $data['HostConfig'] = $this->normalizer->normalize($object->getHostConfig(), 'json', $context);
            }
            if ($object->isInitialized('networkingConfig') && null !== $object->getNetworkingConfig()) {
                $data['NetworkingConfig'] = $this->normalizer->normalize($object->getNetworkingConfig(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\ContainersCreatePostBody::class => false];
        }
    }
}