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
    class InfoGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\InfoGetResponse200::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\InfoGetResponse200::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\InfoGetResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Architecture', $data) && $data['Architecture'] !== null) {
                $object->setArchitecture($data['Architecture']);
            }
            elseif (\array_key_exists('Architecture', $data) && $data['Architecture'] === null) {
                $object->setArchitecture(null);
            }
            if (\array_key_exists('Containers', $data) && $data['Containers'] !== null) {
                $object->setContainers($data['Containers']);
            }
            elseif (\array_key_exists('Containers', $data) && $data['Containers'] === null) {
                $object->setContainers(null);
            }
            if (\array_key_exists('ContainersRunning', $data) && $data['ContainersRunning'] !== null) {
                $object->setContainersRunning($data['ContainersRunning']);
            }
            elseif (\array_key_exists('ContainersRunning', $data) && $data['ContainersRunning'] === null) {
                $object->setContainersRunning(null);
            }
            if (\array_key_exists('ContainersStopped', $data) && $data['ContainersStopped'] !== null) {
                $object->setContainersStopped($data['ContainersStopped']);
            }
            elseif (\array_key_exists('ContainersStopped', $data) && $data['ContainersStopped'] === null) {
                $object->setContainersStopped(null);
            }
            if (\array_key_exists('ContainersPaused', $data) && $data['ContainersPaused'] !== null) {
                $object->setContainersPaused($data['ContainersPaused']);
            }
            elseif (\array_key_exists('ContainersPaused', $data) && $data['ContainersPaused'] === null) {
                $object->setContainersPaused(null);
            }
            if (\array_key_exists('CpuCfsPeriod', $data) && $data['CpuCfsPeriod'] !== null) {
                $object->setCpuCfsPeriod($data['CpuCfsPeriod']);
            }
            elseif (\array_key_exists('CpuCfsPeriod', $data) && $data['CpuCfsPeriod'] === null) {
                $object->setCpuCfsPeriod(null);
            }
            if (\array_key_exists('CpuCfsQuota', $data) && $data['CpuCfsQuota'] !== null) {
                $object->setCpuCfsQuota($data['CpuCfsQuota']);
            }
            elseif (\array_key_exists('CpuCfsQuota', $data) && $data['CpuCfsQuota'] === null) {
                $object->setCpuCfsQuota(null);
            }
            if (\array_key_exists('Debug', $data) && $data['Debug'] !== null) {
                $object->setDebug($data['Debug']);
            }
            elseif (\array_key_exists('Debug', $data) && $data['Debug'] === null) {
                $object->setDebug(null);
            }
            if (\array_key_exists('DiscoveryBackend', $data) && $data['DiscoveryBackend'] !== null) {
                $object->setDiscoveryBackend($data['DiscoveryBackend']);
            }
            elseif (\array_key_exists('DiscoveryBackend', $data) && $data['DiscoveryBackend'] === null) {
                $object->setDiscoveryBackend(null);
            }
            if (\array_key_exists('DockerRootDir', $data) && $data['DockerRootDir'] !== null) {
                $object->setDockerRootDir($data['DockerRootDir']);
            }
            elseif (\array_key_exists('DockerRootDir', $data) && $data['DockerRootDir'] === null) {
                $object->setDockerRootDir(null);
            }
            if (\array_key_exists('Driver', $data) && $data['Driver'] !== null) {
                $object->setDriver($data['Driver']);
            }
            elseif (\array_key_exists('Driver', $data) && $data['Driver'] === null) {
                $object->setDriver(null);
            }
            if (\array_key_exists('DriverStatus', $data) && $data['DriverStatus'] !== null) {
                $values = [];
                foreach ($data['DriverStatus'] as $value) {
                    $values_1 = [];
                    foreach ($value as $value_1) {
                        $values_1[] = $value_1;
                    }
                    $values[] = $values_1;
                }
                $object->setDriverStatus($values);
            }
            elseif (\array_key_exists('DriverStatus', $data) && $data['DriverStatus'] === null) {
                $object->setDriverStatus(null);
            }
            if (\array_key_exists('SystemStatus', $data) && $data['SystemStatus'] !== null) {
                $values_2 = [];
                foreach ($data['SystemStatus'] as $value_2) {
                    $values_3 = [];
                    foreach ($value_2 as $value_3) {
                        $values_3[] = $value_3;
                    }
                    $values_2[] = $values_3;
                }
                $object->setSystemStatus($values_2);
            }
            elseif (\array_key_exists('SystemStatus', $data) && $data['SystemStatus'] === null) {
                $object->setSystemStatus(null);
            }
            if (\array_key_exists('Plugins', $data) && $data['Plugins'] !== null) {
                $object->setPlugins($this->denormalizer->denormalize($data['Plugins'], \Docker\API\Model\InfoGetResponse200Plugins::class, 'json', $context));
            }
            elseif (\array_key_exists('Plugins', $data) && $data['Plugins'] === null) {
                $object->setPlugins(null);
            }
            if (\array_key_exists('ExperimentalBuild', $data) && $data['ExperimentalBuild'] !== null) {
                $object->setExperimentalBuild($data['ExperimentalBuild']);
            }
            elseif (\array_key_exists('ExperimentalBuild', $data) && $data['ExperimentalBuild'] === null) {
                $object->setExperimentalBuild(null);
            }
            if (\array_key_exists('HttpProxy', $data) && $data['HttpProxy'] !== null) {
                $object->setHttpProxy($data['HttpProxy']);
            }
            elseif (\array_key_exists('HttpProxy', $data) && $data['HttpProxy'] === null) {
                $object->setHttpProxy(null);
            }
            if (\array_key_exists('HttpsProxy', $data) && $data['HttpsProxy'] !== null) {
                $object->setHttpsProxy($data['HttpsProxy']);
            }
            elseif (\array_key_exists('HttpsProxy', $data) && $data['HttpsProxy'] === null) {
                $object->setHttpsProxy(null);
            }
            if (\array_key_exists('ID', $data) && $data['ID'] !== null) {
                $object->setID($data['ID']);
            }
            elseif (\array_key_exists('ID', $data) && $data['ID'] === null) {
                $object->setID(null);
            }
            if (\array_key_exists('IPv4Forwarding', $data) && $data['IPv4Forwarding'] !== null) {
                $object->setIPv4Forwarding($data['IPv4Forwarding']);
            }
            elseif (\array_key_exists('IPv4Forwarding', $data) && $data['IPv4Forwarding'] === null) {
                $object->setIPv4Forwarding(null);
            }
            if (\array_key_exists('Images', $data) && $data['Images'] !== null) {
                $object->setImages($data['Images']);
            }
            elseif (\array_key_exists('Images', $data) && $data['Images'] === null) {
                $object->setImages(null);
            }
            if (\array_key_exists('IndexServerAddress', $data) && $data['IndexServerAddress'] !== null) {
                $object->setIndexServerAddress($data['IndexServerAddress']);
            }
            elseif (\array_key_exists('IndexServerAddress', $data) && $data['IndexServerAddress'] === null) {
                $object->setIndexServerAddress(null);
            }
            if (\array_key_exists('InitPath', $data) && $data['InitPath'] !== null) {
                $object->setInitPath($data['InitPath']);
            }
            elseif (\array_key_exists('InitPath', $data) && $data['InitPath'] === null) {
                $object->setInitPath(null);
            }
            if (\array_key_exists('InitSha1', $data) && $data['InitSha1'] !== null) {
                $object->setInitSha1($data['InitSha1']);
            }
            elseif (\array_key_exists('InitSha1', $data) && $data['InitSha1'] === null) {
                $object->setInitSha1(null);
            }
            if (\array_key_exists('KernelVersion', $data) && $data['KernelVersion'] !== null) {
                $object->setKernelVersion($data['KernelVersion']);
            }
            elseif (\array_key_exists('KernelVersion', $data) && $data['KernelVersion'] === null) {
                $object->setKernelVersion(null);
            }
            if (\array_key_exists('Labels', $data) && $data['Labels'] !== null) {
                $values_4 = [];
                foreach ($data['Labels'] as $value_4) {
                    $values_4[] = $value_4;
                }
                $object->setLabels($values_4);
            }
            elseif (\array_key_exists('Labels', $data) && $data['Labels'] === null) {
                $object->setLabels(null);
            }
            if (\array_key_exists('MemTotal', $data) && $data['MemTotal'] !== null) {
                $object->setMemTotal($data['MemTotal']);
            }
            elseif (\array_key_exists('MemTotal', $data) && $data['MemTotal'] === null) {
                $object->setMemTotal(null);
            }
            if (\array_key_exists('MemoryLimit', $data) && $data['MemoryLimit'] !== null) {
                $object->setMemoryLimit($data['MemoryLimit']);
            }
            elseif (\array_key_exists('MemoryLimit', $data) && $data['MemoryLimit'] === null) {
                $object->setMemoryLimit(null);
            }
            if (\array_key_exists('NCPU', $data) && $data['NCPU'] !== null) {
                $object->setNCPU($data['NCPU']);
            }
            elseif (\array_key_exists('NCPU', $data) && $data['NCPU'] === null) {
                $object->setNCPU(null);
            }
            if (\array_key_exists('NEventsListener', $data) && $data['NEventsListener'] !== null) {
                $object->setNEventsListener($data['NEventsListener']);
            }
            elseif (\array_key_exists('NEventsListener', $data) && $data['NEventsListener'] === null) {
                $object->setNEventsListener(null);
            }
            if (\array_key_exists('NFd', $data) && $data['NFd'] !== null) {
                $object->setNFd($data['NFd']);
            }
            elseif (\array_key_exists('NFd', $data) && $data['NFd'] === null) {
                $object->setNFd(null);
            }
            if (\array_key_exists('NGoroutines', $data) && $data['NGoroutines'] !== null) {
                $object->setNGoroutines($data['NGoroutines']);
            }
            elseif (\array_key_exists('NGoroutines', $data) && $data['NGoroutines'] === null) {
                $object->setNGoroutines(null);
            }
            if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
                $object->setName($data['Name']);
            }
            elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('NoProxy', $data) && $data['NoProxy'] !== null) {
                $object->setNoProxy($data['NoProxy']);
            }
            elseif (\array_key_exists('NoProxy', $data) && $data['NoProxy'] === null) {
                $object->setNoProxy(null);
            }
            if (\array_key_exists('OomKillDisable', $data) && $data['OomKillDisable'] !== null) {
                $object->setOomKillDisable($data['OomKillDisable']);
            }
            elseif (\array_key_exists('OomKillDisable', $data) && $data['OomKillDisable'] === null) {
                $object->setOomKillDisable(null);
            }
            if (\array_key_exists('OSType', $data) && $data['OSType'] !== null) {
                $object->setOSType($data['OSType']);
            }
            elseif (\array_key_exists('OSType', $data) && $data['OSType'] === null) {
                $object->setOSType(null);
            }
            if (\array_key_exists('OomScoreAdj', $data) && $data['OomScoreAdj'] !== null) {
                $object->setOomScoreAdj($data['OomScoreAdj']);
            }
            elseif (\array_key_exists('OomScoreAdj', $data) && $data['OomScoreAdj'] === null) {
                $object->setOomScoreAdj(null);
            }
            if (\array_key_exists('OperatingSystem', $data) && $data['OperatingSystem'] !== null) {
                $object->setOperatingSystem($data['OperatingSystem']);
            }
            elseif (\array_key_exists('OperatingSystem', $data) && $data['OperatingSystem'] === null) {
                $object->setOperatingSystem(null);
            }
            if (\array_key_exists('RegistryConfig', $data) && $data['RegistryConfig'] !== null) {
                $object->setRegistryConfig($this->denormalizer->denormalize($data['RegistryConfig'], \Docker\API\Model\InfoGetResponse200RegistryConfig::class, 'json', $context));
            }
            elseif (\array_key_exists('RegistryConfig', $data) && $data['RegistryConfig'] === null) {
                $object->setRegistryConfig(null);
            }
            if (\array_key_exists('SwapLimit', $data) && $data['SwapLimit'] !== null) {
                $object->setSwapLimit($data['SwapLimit']);
            }
            elseif (\array_key_exists('SwapLimit', $data) && $data['SwapLimit'] === null) {
                $object->setSwapLimit(null);
            }
            if (\array_key_exists('SystemTime', $data) && $data['SystemTime'] !== null) {
                $object->setSystemTime($data['SystemTime']);
            }
            elseif (\array_key_exists('SystemTime', $data) && $data['SystemTime'] === null) {
                $object->setSystemTime(null);
            }
            if (\array_key_exists('ServerVersion', $data) && $data['ServerVersion'] !== null) {
                $object->setServerVersion($data['ServerVersion']);
            }
            elseif (\array_key_exists('ServerVersion', $data) && $data['ServerVersion'] === null) {
                $object->setServerVersion(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('architecture') && null !== $object->getArchitecture()) {
                $data['Architecture'] = $object->getArchitecture();
            }
            if ($object->isInitialized('containers') && null !== $object->getContainers()) {
                $data['Containers'] = $object->getContainers();
            }
            if ($object->isInitialized('containersRunning') && null !== $object->getContainersRunning()) {
                $data['ContainersRunning'] = $object->getContainersRunning();
            }
            if ($object->isInitialized('containersStopped') && null !== $object->getContainersStopped()) {
                $data['ContainersStopped'] = $object->getContainersStopped();
            }
            if ($object->isInitialized('containersPaused') && null !== $object->getContainersPaused()) {
                $data['ContainersPaused'] = $object->getContainersPaused();
            }
            if ($object->isInitialized('cpuCfsPeriod') && null !== $object->getCpuCfsPeriod()) {
                $data['CpuCfsPeriod'] = $object->getCpuCfsPeriod();
            }
            if ($object->isInitialized('cpuCfsQuota') && null !== $object->getCpuCfsQuota()) {
                $data['CpuCfsQuota'] = $object->getCpuCfsQuota();
            }
            if ($object->isInitialized('debug') && null !== $object->getDebug()) {
                $data['Debug'] = $object->getDebug();
            }
            if ($object->isInitialized('discoveryBackend') && null !== $object->getDiscoveryBackend()) {
                $data['DiscoveryBackend'] = $object->getDiscoveryBackend();
            }
            if ($object->isInitialized('dockerRootDir') && null !== $object->getDockerRootDir()) {
                $data['DockerRootDir'] = $object->getDockerRootDir();
            }
            if ($object->isInitialized('driver') && null !== $object->getDriver()) {
                $data['Driver'] = $object->getDriver();
            }
            if ($object->isInitialized('driverStatus') && null !== $object->getDriverStatus()) {
                $values = [];
                foreach ($object->getDriverStatus() as $value) {
                    $values_1 = [];
                    foreach ($value as $value_1) {
                        $values_1[] = $value_1;
                    }
                    $values[] = $values_1;
                }
                $data['DriverStatus'] = $values;
            }
            if ($object->isInitialized('systemStatus') && null !== $object->getSystemStatus()) {
                $values_2 = [];
                foreach ($object->getSystemStatus() as $value_2) {
                    $values_3 = [];
                    foreach ($value_2 as $value_3) {
                        $values_3[] = $value_3;
                    }
                    $values_2[] = $values_3;
                }
                $data['SystemStatus'] = $values_2;
            }
            if ($object->isInitialized('plugins') && null !== $object->getPlugins()) {
                $data['Plugins'] = $this->normalizer->normalize($object->getPlugins(), 'json', $context);
            }
            if ($object->isInitialized('experimentalBuild') && null !== $object->getExperimentalBuild()) {
                $data['ExperimentalBuild'] = $object->getExperimentalBuild();
            }
            if ($object->isInitialized('httpProxy') && null !== $object->getHttpProxy()) {
                $data['HttpProxy'] = $object->getHttpProxy();
            }
            if ($object->isInitialized('httpsProxy') && null !== $object->getHttpsProxy()) {
                $data['HttpsProxy'] = $object->getHttpsProxy();
            }
            if ($object->isInitialized('iD') && null !== $object->getID()) {
                $data['ID'] = $object->getID();
            }
            if ($object->isInitialized('iPv4Forwarding') && null !== $object->getIPv4Forwarding()) {
                $data['IPv4Forwarding'] = $object->getIPv4Forwarding();
            }
            if ($object->isInitialized('images') && null !== $object->getImages()) {
                $data['Images'] = $object->getImages();
            }
            if ($object->isInitialized('indexServerAddress') && null !== $object->getIndexServerAddress()) {
                $data['IndexServerAddress'] = $object->getIndexServerAddress();
            }
            if ($object->isInitialized('initPath') && null !== $object->getInitPath()) {
                $data['InitPath'] = $object->getInitPath();
            }
            if ($object->isInitialized('initSha1') && null !== $object->getInitSha1()) {
                $data['InitSha1'] = $object->getInitSha1();
            }
            if ($object->isInitialized('kernelVersion') && null !== $object->getKernelVersion()) {
                $data['KernelVersion'] = $object->getKernelVersion();
            }
            if ($object->isInitialized('labels') && null !== $object->getLabels()) {
                $values_4 = [];
                foreach ($object->getLabels() as $value_4) {
                    $values_4[] = $value_4;
                }
                $data['Labels'] = $values_4;
            }
            if ($object->isInitialized('memTotal') && null !== $object->getMemTotal()) {
                $data['MemTotal'] = $object->getMemTotal();
            }
            if ($object->isInitialized('memoryLimit') && null !== $object->getMemoryLimit()) {
                $data['MemoryLimit'] = $object->getMemoryLimit();
            }
            if ($object->isInitialized('nCPU') && null !== $object->getNCPU()) {
                $data['NCPU'] = $object->getNCPU();
            }
            if ($object->isInitialized('nEventsListener') && null !== $object->getNEventsListener()) {
                $data['NEventsListener'] = $object->getNEventsListener();
            }
            if ($object->isInitialized('nFd') && null !== $object->getNFd()) {
                $data['NFd'] = $object->getNFd();
            }
            if ($object->isInitialized('nGoroutines') && null !== $object->getNGoroutines()) {
                $data['NGoroutines'] = $object->getNGoroutines();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['Name'] = $object->getName();
            }
            if ($object->isInitialized('noProxy') && null !== $object->getNoProxy()) {
                $data['NoProxy'] = $object->getNoProxy();
            }
            if ($object->isInitialized('oomKillDisable') && null !== $object->getOomKillDisable()) {
                $data['OomKillDisable'] = $object->getOomKillDisable();
            }
            if ($object->isInitialized('oSType') && null !== $object->getOSType()) {
                $data['OSType'] = $object->getOSType();
            }
            if ($object->isInitialized('oomScoreAdj') && null !== $object->getOomScoreAdj()) {
                $data['OomScoreAdj'] = $object->getOomScoreAdj();
            }
            if ($object->isInitialized('operatingSystem') && null !== $object->getOperatingSystem()) {
                $data['OperatingSystem'] = $object->getOperatingSystem();
            }
            if ($object->isInitialized('registryConfig') && null !== $object->getRegistryConfig()) {
                $data['RegistryConfig'] = $this->normalizer->normalize($object->getRegistryConfig(), 'json', $context);
            }
            if ($object->isInitialized('swapLimit') && null !== $object->getSwapLimit()) {
                $data['SwapLimit'] = $object->getSwapLimit();
            }
            if ($object->isInitialized('systemTime') && null !== $object->getSystemTime()) {
                $data['SystemTime'] = $object->getSystemTime();
            }
            if ($object->isInitialized('serverVersion') && null !== $object->getServerVersion()) {
                $data['ServerVersion'] = $object->getServerVersion();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\InfoGetResponse200::class => false];
        }
    }
} else {
    class InfoGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\InfoGetResponse200::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\InfoGetResponse200::class;
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
            $object = new \Docker\API\Model\InfoGetResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Architecture', $data) && $data['Architecture'] !== null) {
                $object->setArchitecture($data['Architecture']);
            }
            elseif (\array_key_exists('Architecture', $data) && $data['Architecture'] === null) {
                $object->setArchitecture(null);
            }
            if (\array_key_exists('Containers', $data) && $data['Containers'] !== null) {
                $object->setContainers($data['Containers']);
            }
            elseif (\array_key_exists('Containers', $data) && $data['Containers'] === null) {
                $object->setContainers(null);
            }
            if (\array_key_exists('ContainersRunning', $data) && $data['ContainersRunning'] !== null) {
                $object->setContainersRunning($data['ContainersRunning']);
            }
            elseif (\array_key_exists('ContainersRunning', $data) && $data['ContainersRunning'] === null) {
                $object->setContainersRunning(null);
            }
            if (\array_key_exists('ContainersStopped', $data) && $data['ContainersStopped'] !== null) {
                $object->setContainersStopped($data['ContainersStopped']);
            }
            elseif (\array_key_exists('ContainersStopped', $data) && $data['ContainersStopped'] === null) {
                $object->setContainersStopped(null);
            }
            if (\array_key_exists('ContainersPaused', $data) && $data['ContainersPaused'] !== null) {
                $object->setContainersPaused($data['ContainersPaused']);
            }
            elseif (\array_key_exists('ContainersPaused', $data) && $data['ContainersPaused'] === null) {
                $object->setContainersPaused(null);
            }
            if (\array_key_exists('CpuCfsPeriod', $data) && $data['CpuCfsPeriod'] !== null) {
                $object->setCpuCfsPeriod($data['CpuCfsPeriod']);
            }
            elseif (\array_key_exists('CpuCfsPeriod', $data) && $data['CpuCfsPeriod'] === null) {
                $object->setCpuCfsPeriod(null);
            }
            if (\array_key_exists('CpuCfsQuota', $data) && $data['CpuCfsQuota'] !== null) {
                $object->setCpuCfsQuota($data['CpuCfsQuota']);
            }
            elseif (\array_key_exists('CpuCfsQuota', $data) && $data['CpuCfsQuota'] === null) {
                $object->setCpuCfsQuota(null);
            }
            if (\array_key_exists('Debug', $data) && $data['Debug'] !== null) {
                $object->setDebug($data['Debug']);
            }
            elseif (\array_key_exists('Debug', $data) && $data['Debug'] === null) {
                $object->setDebug(null);
            }
            if (\array_key_exists('DiscoveryBackend', $data) && $data['DiscoveryBackend'] !== null) {
                $object->setDiscoveryBackend($data['DiscoveryBackend']);
            }
            elseif (\array_key_exists('DiscoveryBackend', $data) && $data['DiscoveryBackend'] === null) {
                $object->setDiscoveryBackend(null);
            }
            if (\array_key_exists('DockerRootDir', $data) && $data['DockerRootDir'] !== null) {
                $object->setDockerRootDir($data['DockerRootDir']);
            }
            elseif (\array_key_exists('DockerRootDir', $data) && $data['DockerRootDir'] === null) {
                $object->setDockerRootDir(null);
            }
            if (\array_key_exists('Driver', $data) && $data['Driver'] !== null) {
                $object->setDriver($data['Driver']);
            }
            elseif (\array_key_exists('Driver', $data) && $data['Driver'] === null) {
                $object->setDriver(null);
            }
            if (\array_key_exists('DriverStatus', $data) && $data['DriverStatus'] !== null) {
                $values = [];
                foreach ($data['DriverStatus'] as $value) {
                    $values_1 = [];
                    foreach ($value as $value_1) {
                        $values_1[] = $value_1;
                    }
                    $values[] = $values_1;
                }
                $object->setDriverStatus($values);
            }
            elseif (\array_key_exists('DriverStatus', $data) && $data['DriverStatus'] === null) {
                $object->setDriverStatus(null);
            }
            if (\array_key_exists('SystemStatus', $data) && $data['SystemStatus'] !== null) {
                $values_2 = [];
                foreach ($data['SystemStatus'] as $value_2) {
                    $values_3 = [];
                    foreach ($value_2 as $value_3) {
                        $values_3[] = $value_3;
                    }
                    $values_2[] = $values_3;
                }
                $object->setSystemStatus($values_2);
            }
            elseif (\array_key_exists('SystemStatus', $data) && $data['SystemStatus'] === null) {
                $object->setSystemStatus(null);
            }
            if (\array_key_exists('Plugins', $data) && $data['Plugins'] !== null) {
                $object->setPlugins($this->denormalizer->denormalize($data['Plugins'], \Docker\API\Model\InfoGetResponse200Plugins::class, 'json', $context));
            }
            elseif (\array_key_exists('Plugins', $data) && $data['Plugins'] === null) {
                $object->setPlugins(null);
            }
            if (\array_key_exists('ExperimentalBuild', $data) && $data['ExperimentalBuild'] !== null) {
                $object->setExperimentalBuild($data['ExperimentalBuild']);
            }
            elseif (\array_key_exists('ExperimentalBuild', $data) && $data['ExperimentalBuild'] === null) {
                $object->setExperimentalBuild(null);
            }
            if (\array_key_exists('HttpProxy', $data) && $data['HttpProxy'] !== null) {
                $object->setHttpProxy($data['HttpProxy']);
            }
            elseif (\array_key_exists('HttpProxy', $data) && $data['HttpProxy'] === null) {
                $object->setHttpProxy(null);
            }
            if (\array_key_exists('HttpsProxy', $data) && $data['HttpsProxy'] !== null) {
                $object->setHttpsProxy($data['HttpsProxy']);
            }
            elseif (\array_key_exists('HttpsProxy', $data) && $data['HttpsProxy'] === null) {
                $object->setHttpsProxy(null);
            }
            if (\array_key_exists('ID', $data) && $data['ID'] !== null) {
                $object->setID($data['ID']);
            }
            elseif (\array_key_exists('ID', $data) && $data['ID'] === null) {
                $object->setID(null);
            }
            if (\array_key_exists('IPv4Forwarding', $data) && $data['IPv4Forwarding'] !== null) {
                $object->setIPv4Forwarding($data['IPv4Forwarding']);
            }
            elseif (\array_key_exists('IPv4Forwarding', $data) && $data['IPv4Forwarding'] === null) {
                $object->setIPv4Forwarding(null);
            }
            if (\array_key_exists('Images', $data) && $data['Images'] !== null) {
                $object->setImages($data['Images']);
            }
            elseif (\array_key_exists('Images', $data) && $data['Images'] === null) {
                $object->setImages(null);
            }
            if (\array_key_exists('IndexServerAddress', $data) && $data['IndexServerAddress'] !== null) {
                $object->setIndexServerAddress($data['IndexServerAddress']);
            }
            elseif (\array_key_exists('IndexServerAddress', $data) && $data['IndexServerAddress'] === null) {
                $object->setIndexServerAddress(null);
            }
            if (\array_key_exists('InitPath', $data) && $data['InitPath'] !== null) {
                $object->setInitPath($data['InitPath']);
            }
            elseif (\array_key_exists('InitPath', $data) && $data['InitPath'] === null) {
                $object->setInitPath(null);
            }
            if (\array_key_exists('InitSha1', $data) && $data['InitSha1'] !== null) {
                $object->setInitSha1($data['InitSha1']);
            }
            elseif (\array_key_exists('InitSha1', $data) && $data['InitSha1'] === null) {
                $object->setInitSha1(null);
            }
            if (\array_key_exists('KernelVersion', $data) && $data['KernelVersion'] !== null) {
                $object->setKernelVersion($data['KernelVersion']);
            }
            elseif (\array_key_exists('KernelVersion', $data) && $data['KernelVersion'] === null) {
                $object->setKernelVersion(null);
            }
            if (\array_key_exists('Labels', $data) && $data['Labels'] !== null) {
                $values_4 = [];
                foreach ($data['Labels'] as $value_4) {
                    $values_4[] = $value_4;
                }
                $object->setLabels($values_4);
            }
            elseif (\array_key_exists('Labels', $data) && $data['Labels'] === null) {
                $object->setLabels(null);
            }
            if (\array_key_exists('MemTotal', $data) && $data['MemTotal'] !== null) {
                $object->setMemTotal($data['MemTotal']);
            }
            elseif (\array_key_exists('MemTotal', $data) && $data['MemTotal'] === null) {
                $object->setMemTotal(null);
            }
            if (\array_key_exists('MemoryLimit', $data) && $data['MemoryLimit'] !== null) {
                $object->setMemoryLimit($data['MemoryLimit']);
            }
            elseif (\array_key_exists('MemoryLimit', $data) && $data['MemoryLimit'] === null) {
                $object->setMemoryLimit(null);
            }
            if (\array_key_exists('NCPU', $data) && $data['NCPU'] !== null) {
                $object->setNCPU($data['NCPU']);
            }
            elseif (\array_key_exists('NCPU', $data) && $data['NCPU'] === null) {
                $object->setNCPU(null);
            }
            if (\array_key_exists('NEventsListener', $data) && $data['NEventsListener'] !== null) {
                $object->setNEventsListener($data['NEventsListener']);
            }
            elseif (\array_key_exists('NEventsListener', $data) && $data['NEventsListener'] === null) {
                $object->setNEventsListener(null);
            }
            if (\array_key_exists('NFd', $data) && $data['NFd'] !== null) {
                $object->setNFd($data['NFd']);
            }
            elseif (\array_key_exists('NFd', $data) && $data['NFd'] === null) {
                $object->setNFd(null);
            }
            if (\array_key_exists('NGoroutines', $data) && $data['NGoroutines'] !== null) {
                $object->setNGoroutines($data['NGoroutines']);
            }
            elseif (\array_key_exists('NGoroutines', $data) && $data['NGoroutines'] === null) {
                $object->setNGoroutines(null);
            }
            if (\array_key_exists('Name', $data) && $data['Name'] !== null) {
                $object->setName($data['Name']);
            }
            elseif (\array_key_exists('Name', $data) && $data['Name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('NoProxy', $data) && $data['NoProxy'] !== null) {
                $object->setNoProxy($data['NoProxy']);
            }
            elseif (\array_key_exists('NoProxy', $data) && $data['NoProxy'] === null) {
                $object->setNoProxy(null);
            }
            if (\array_key_exists('OomKillDisable', $data) && $data['OomKillDisable'] !== null) {
                $object->setOomKillDisable($data['OomKillDisable']);
            }
            elseif (\array_key_exists('OomKillDisable', $data) && $data['OomKillDisable'] === null) {
                $object->setOomKillDisable(null);
            }
            if (\array_key_exists('OSType', $data) && $data['OSType'] !== null) {
                $object->setOSType($data['OSType']);
            }
            elseif (\array_key_exists('OSType', $data) && $data['OSType'] === null) {
                $object->setOSType(null);
            }
            if (\array_key_exists('OomScoreAdj', $data) && $data['OomScoreAdj'] !== null) {
                $object->setOomScoreAdj($data['OomScoreAdj']);
            }
            elseif (\array_key_exists('OomScoreAdj', $data) && $data['OomScoreAdj'] === null) {
                $object->setOomScoreAdj(null);
            }
            if (\array_key_exists('OperatingSystem', $data) && $data['OperatingSystem'] !== null) {
                $object->setOperatingSystem($data['OperatingSystem']);
            }
            elseif (\array_key_exists('OperatingSystem', $data) && $data['OperatingSystem'] === null) {
                $object->setOperatingSystem(null);
            }
            if (\array_key_exists('RegistryConfig', $data) && $data['RegistryConfig'] !== null) {
                $object->setRegistryConfig($this->denormalizer->denormalize($data['RegistryConfig'], \Docker\API\Model\InfoGetResponse200RegistryConfig::class, 'json', $context));
            }
            elseif (\array_key_exists('RegistryConfig', $data) && $data['RegistryConfig'] === null) {
                $object->setRegistryConfig(null);
            }
            if (\array_key_exists('SwapLimit', $data) && $data['SwapLimit'] !== null) {
                $object->setSwapLimit($data['SwapLimit']);
            }
            elseif (\array_key_exists('SwapLimit', $data) && $data['SwapLimit'] === null) {
                $object->setSwapLimit(null);
            }
            if (\array_key_exists('SystemTime', $data) && $data['SystemTime'] !== null) {
                $object->setSystemTime($data['SystemTime']);
            }
            elseif (\array_key_exists('SystemTime', $data) && $data['SystemTime'] === null) {
                $object->setSystemTime(null);
            }
            if (\array_key_exists('ServerVersion', $data) && $data['ServerVersion'] !== null) {
                $object->setServerVersion($data['ServerVersion']);
            }
            elseif (\array_key_exists('ServerVersion', $data) && $data['ServerVersion'] === null) {
                $object->setServerVersion(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('architecture') && null !== $object->getArchitecture()) {
                $data['Architecture'] = $object->getArchitecture();
            }
            if ($object->isInitialized('containers') && null !== $object->getContainers()) {
                $data['Containers'] = $object->getContainers();
            }
            if ($object->isInitialized('containersRunning') && null !== $object->getContainersRunning()) {
                $data['ContainersRunning'] = $object->getContainersRunning();
            }
            if ($object->isInitialized('containersStopped') && null !== $object->getContainersStopped()) {
                $data['ContainersStopped'] = $object->getContainersStopped();
            }
            if ($object->isInitialized('containersPaused') && null !== $object->getContainersPaused()) {
                $data['ContainersPaused'] = $object->getContainersPaused();
            }
            if ($object->isInitialized('cpuCfsPeriod') && null !== $object->getCpuCfsPeriod()) {
                $data['CpuCfsPeriod'] = $object->getCpuCfsPeriod();
            }
            if ($object->isInitialized('cpuCfsQuota') && null !== $object->getCpuCfsQuota()) {
                $data['CpuCfsQuota'] = $object->getCpuCfsQuota();
            }
            if ($object->isInitialized('debug') && null !== $object->getDebug()) {
                $data['Debug'] = $object->getDebug();
            }
            if ($object->isInitialized('discoveryBackend') && null !== $object->getDiscoveryBackend()) {
                $data['DiscoveryBackend'] = $object->getDiscoveryBackend();
            }
            if ($object->isInitialized('dockerRootDir') && null !== $object->getDockerRootDir()) {
                $data['DockerRootDir'] = $object->getDockerRootDir();
            }
            if ($object->isInitialized('driver') && null !== $object->getDriver()) {
                $data['Driver'] = $object->getDriver();
            }
            if ($object->isInitialized('driverStatus') && null !== $object->getDriverStatus()) {
                $values = [];
                foreach ($object->getDriverStatus() as $value) {
                    $values_1 = [];
                    foreach ($value as $value_1) {
                        $values_1[] = $value_1;
                    }
                    $values[] = $values_1;
                }
                $data['DriverStatus'] = $values;
            }
            if ($object->isInitialized('systemStatus') && null !== $object->getSystemStatus()) {
                $values_2 = [];
                foreach ($object->getSystemStatus() as $value_2) {
                    $values_3 = [];
                    foreach ($value_2 as $value_3) {
                        $values_3[] = $value_3;
                    }
                    $values_2[] = $values_3;
                }
                $data['SystemStatus'] = $values_2;
            }
            if ($object->isInitialized('plugins') && null !== $object->getPlugins()) {
                $data['Plugins'] = $this->normalizer->normalize($object->getPlugins(), 'json', $context);
            }
            if ($object->isInitialized('experimentalBuild') && null !== $object->getExperimentalBuild()) {
                $data['ExperimentalBuild'] = $object->getExperimentalBuild();
            }
            if ($object->isInitialized('httpProxy') && null !== $object->getHttpProxy()) {
                $data['HttpProxy'] = $object->getHttpProxy();
            }
            if ($object->isInitialized('httpsProxy') && null !== $object->getHttpsProxy()) {
                $data['HttpsProxy'] = $object->getHttpsProxy();
            }
            if ($object->isInitialized('iD') && null !== $object->getID()) {
                $data['ID'] = $object->getID();
            }
            if ($object->isInitialized('iPv4Forwarding') && null !== $object->getIPv4Forwarding()) {
                $data['IPv4Forwarding'] = $object->getIPv4Forwarding();
            }
            if ($object->isInitialized('images') && null !== $object->getImages()) {
                $data['Images'] = $object->getImages();
            }
            if ($object->isInitialized('indexServerAddress') && null !== $object->getIndexServerAddress()) {
                $data['IndexServerAddress'] = $object->getIndexServerAddress();
            }
            if ($object->isInitialized('initPath') && null !== $object->getInitPath()) {
                $data['InitPath'] = $object->getInitPath();
            }
            if ($object->isInitialized('initSha1') && null !== $object->getInitSha1()) {
                $data['InitSha1'] = $object->getInitSha1();
            }
            if ($object->isInitialized('kernelVersion') && null !== $object->getKernelVersion()) {
                $data['KernelVersion'] = $object->getKernelVersion();
            }
            if ($object->isInitialized('labels') && null !== $object->getLabels()) {
                $values_4 = [];
                foreach ($object->getLabels() as $value_4) {
                    $values_4[] = $value_4;
                }
                $data['Labels'] = $values_4;
            }
            if ($object->isInitialized('memTotal') && null !== $object->getMemTotal()) {
                $data['MemTotal'] = $object->getMemTotal();
            }
            if ($object->isInitialized('memoryLimit') && null !== $object->getMemoryLimit()) {
                $data['MemoryLimit'] = $object->getMemoryLimit();
            }
            if ($object->isInitialized('nCPU') && null !== $object->getNCPU()) {
                $data['NCPU'] = $object->getNCPU();
            }
            if ($object->isInitialized('nEventsListener') && null !== $object->getNEventsListener()) {
                $data['NEventsListener'] = $object->getNEventsListener();
            }
            if ($object->isInitialized('nFd') && null !== $object->getNFd()) {
                $data['NFd'] = $object->getNFd();
            }
            if ($object->isInitialized('nGoroutines') && null !== $object->getNGoroutines()) {
                $data['NGoroutines'] = $object->getNGoroutines();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['Name'] = $object->getName();
            }
            if ($object->isInitialized('noProxy') && null !== $object->getNoProxy()) {
                $data['NoProxy'] = $object->getNoProxy();
            }
            if ($object->isInitialized('oomKillDisable') && null !== $object->getOomKillDisable()) {
                $data['OomKillDisable'] = $object->getOomKillDisable();
            }
            if ($object->isInitialized('oSType') && null !== $object->getOSType()) {
                $data['OSType'] = $object->getOSType();
            }
            if ($object->isInitialized('oomScoreAdj') && null !== $object->getOomScoreAdj()) {
                $data['OomScoreAdj'] = $object->getOomScoreAdj();
            }
            if ($object->isInitialized('operatingSystem') && null !== $object->getOperatingSystem()) {
                $data['OperatingSystem'] = $object->getOperatingSystem();
            }
            if ($object->isInitialized('registryConfig') && null !== $object->getRegistryConfig()) {
                $data['RegistryConfig'] = $this->normalizer->normalize($object->getRegistryConfig(), 'json', $context);
            }
            if ($object->isInitialized('swapLimit') && null !== $object->getSwapLimit()) {
                $data['SwapLimit'] = $object->getSwapLimit();
            }
            if ($object->isInitialized('systemTime') && null !== $object->getSystemTime()) {
                $data['SystemTime'] = $object->getSystemTime();
            }
            if ($object->isInitialized('serverVersion') && null !== $object->getServerVersion()) {
                $data['ServerVersion'] = $object->getServerVersion();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\InfoGetResponse200::class => false];
        }
    }
}