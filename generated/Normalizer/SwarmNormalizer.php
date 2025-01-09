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
    class SwarmNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\Swarm::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\Swarm::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\API\Model\Swarm();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ID', $data) && $data['ID'] !== null) {
                $object->setID($data['ID']);
            }
            elseif (\array_key_exists('ID', $data) && $data['ID'] === null) {
                $object->setID(null);
            }
            if (\array_key_exists('Version', $data) && $data['Version'] !== null) {
                $object->setVersion($this->denormalizer->denormalize($data['Version'], \Docker\API\Model\ObjectVersion::class, 'json', $context));
            }
            elseif (\array_key_exists('Version', $data) && $data['Version'] === null) {
                $object->setVersion(null);
            }
            if (\array_key_exists('CreatedAt', $data) && $data['CreatedAt'] !== null) {
                $object->setCreatedAt($data['CreatedAt']);
            }
            elseif (\array_key_exists('CreatedAt', $data) && $data['CreatedAt'] === null) {
                $object->setCreatedAt(null);
            }
            if (\array_key_exists('UpdatedAt', $data) && $data['UpdatedAt'] !== null) {
                $object->setUpdatedAt($data['UpdatedAt']);
            }
            elseif (\array_key_exists('UpdatedAt', $data) && $data['UpdatedAt'] === null) {
                $object->setUpdatedAt(null);
            }
            if (\array_key_exists('Spec', $data) && $data['Spec'] !== null) {
                $object->setSpec($this->denormalizer->denormalize($data['Spec'], \Docker\API\Model\SwarmSpec::class, 'json', $context));
            }
            elseif (\array_key_exists('Spec', $data) && $data['Spec'] === null) {
                $object->setSpec(null);
            }
            if (\array_key_exists('TLSInfo', $data) && $data['TLSInfo'] !== null) {
                $object->setTLSInfo($this->denormalizer->denormalize($data['TLSInfo'], \Docker\API\Model\TLSInfo::class, 'json', $context));
            }
            elseif (\array_key_exists('TLSInfo', $data) && $data['TLSInfo'] === null) {
                $object->setTLSInfo(null);
            }
            if (\array_key_exists('RootRotationInProgress', $data) && $data['RootRotationInProgress'] !== null) {
                $object->setRootRotationInProgress($data['RootRotationInProgress']);
            }
            elseif (\array_key_exists('RootRotationInProgress', $data) && $data['RootRotationInProgress'] === null) {
                $object->setRootRotationInProgress(null);
            }
            if (\array_key_exists('DataPathPort', $data) && $data['DataPathPort'] !== null) {
                $object->setDataPathPort($data['DataPathPort']);
            }
            elseif (\array_key_exists('DataPathPort', $data) && $data['DataPathPort'] === null) {
                $object->setDataPathPort(null);
            }
            if (\array_key_exists('DefaultAddrPool', $data) && $data['DefaultAddrPool'] !== null) {
                $values = [];
                foreach ($data['DefaultAddrPool'] as $value) {
                    $values[] = $value;
                }
                $object->setDefaultAddrPool($values);
            }
            elseif (\array_key_exists('DefaultAddrPool', $data) && $data['DefaultAddrPool'] === null) {
                $object->setDefaultAddrPool(null);
            }
            if (\array_key_exists('SubnetSize', $data) && $data['SubnetSize'] !== null) {
                $object->setSubnetSize($data['SubnetSize']);
            }
            elseif (\array_key_exists('SubnetSize', $data) && $data['SubnetSize'] === null) {
                $object->setSubnetSize(null);
            }
            if (\array_key_exists('JoinTokens', $data) && $data['JoinTokens'] !== null) {
                $object->setJoinTokens($this->denormalizer->denormalize($data['JoinTokens'], \Docker\API\Model\JoinTokens::class, 'json', $context));
            }
            elseif (\array_key_exists('JoinTokens', $data) && $data['JoinTokens'] === null) {
                $object->setJoinTokens(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('iD') && null !== $object->getID()) {
                $data['ID'] = $object->getID();
            }
            if ($object->isInitialized('version') && null !== $object->getVersion()) {
                $data['Version'] = $this->normalizer->normalize($object->getVersion(), 'json', $context);
            }
            if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
                $data['CreatedAt'] = $object->getCreatedAt();
            }
            if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
                $data['UpdatedAt'] = $object->getUpdatedAt();
            }
            if ($object->isInitialized('spec') && null !== $object->getSpec()) {
                $data['Spec'] = $this->normalizer->normalize($object->getSpec(), 'json', $context);
            }
            if ($object->isInitialized('tLSInfo') && null !== $object->getTLSInfo()) {
                $data['TLSInfo'] = $this->normalizer->normalize($object->getTLSInfo(), 'json', $context);
            }
            if ($object->isInitialized('rootRotationInProgress') && null !== $object->getRootRotationInProgress()) {
                $data['RootRotationInProgress'] = $object->getRootRotationInProgress();
            }
            if ($object->isInitialized('dataPathPort') && null !== $object->getDataPathPort()) {
                $data['DataPathPort'] = $object->getDataPathPort();
            }
            if ($object->isInitialized('defaultAddrPool') && null !== $object->getDefaultAddrPool()) {
                $values = [];
                foreach ($object->getDefaultAddrPool() as $value) {
                    $values[] = $value;
                }
                $data['DefaultAddrPool'] = $values;
            }
            if ($object->isInitialized('subnetSize') && null !== $object->getSubnetSize()) {
                $data['SubnetSize'] = $object->getSubnetSize();
            }
            if ($object->isInitialized('joinTokens') && null !== $object->getJoinTokens()) {
                $data['JoinTokens'] = $this->normalizer->normalize($object->getJoinTokens(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\Swarm::class => false];
        }
    }
} else {
    class SwarmNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\API\Model\Swarm::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Docker\API\Model\Swarm::class;
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
            $object = new \Docker\API\Model\Swarm();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ID', $data) && $data['ID'] !== null) {
                $object->setID($data['ID']);
            }
            elseif (\array_key_exists('ID', $data) && $data['ID'] === null) {
                $object->setID(null);
            }
            if (\array_key_exists('Version', $data) && $data['Version'] !== null) {
                $object->setVersion($this->denormalizer->denormalize($data['Version'], \Docker\API\Model\ObjectVersion::class, 'json', $context));
            }
            elseif (\array_key_exists('Version', $data) && $data['Version'] === null) {
                $object->setVersion(null);
            }
            if (\array_key_exists('CreatedAt', $data) && $data['CreatedAt'] !== null) {
                $object->setCreatedAt($data['CreatedAt']);
            }
            elseif (\array_key_exists('CreatedAt', $data) && $data['CreatedAt'] === null) {
                $object->setCreatedAt(null);
            }
            if (\array_key_exists('UpdatedAt', $data) && $data['UpdatedAt'] !== null) {
                $object->setUpdatedAt($data['UpdatedAt']);
            }
            elseif (\array_key_exists('UpdatedAt', $data) && $data['UpdatedAt'] === null) {
                $object->setUpdatedAt(null);
            }
            if (\array_key_exists('Spec', $data) && $data['Spec'] !== null) {
                $object->setSpec($this->denormalizer->denormalize($data['Spec'], \Docker\API\Model\SwarmSpec::class, 'json', $context));
            }
            elseif (\array_key_exists('Spec', $data) && $data['Spec'] === null) {
                $object->setSpec(null);
            }
            if (\array_key_exists('TLSInfo', $data) && $data['TLSInfo'] !== null) {
                $object->setTLSInfo($this->denormalizer->denormalize($data['TLSInfo'], \Docker\API\Model\TLSInfo::class, 'json', $context));
            }
            elseif (\array_key_exists('TLSInfo', $data) && $data['TLSInfo'] === null) {
                $object->setTLSInfo(null);
            }
            if (\array_key_exists('RootRotationInProgress', $data) && $data['RootRotationInProgress'] !== null) {
                $object->setRootRotationInProgress($data['RootRotationInProgress']);
            }
            elseif (\array_key_exists('RootRotationInProgress', $data) && $data['RootRotationInProgress'] === null) {
                $object->setRootRotationInProgress(null);
            }
            if (\array_key_exists('DataPathPort', $data) && $data['DataPathPort'] !== null) {
                $object->setDataPathPort($data['DataPathPort']);
            }
            elseif (\array_key_exists('DataPathPort', $data) && $data['DataPathPort'] === null) {
                $object->setDataPathPort(null);
            }
            if (\array_key_exists('DefaultAddrPool', $data) && $data['DefaultAddrPool'] !== null) {
                $values = [];
                foreach ($data['DefaultAddrPool'] as $value) {
                    $values[] = $value;
                }
                $object->setDefaultAddrPool($values);
            }
            elseif (\array_key_exists('DefaultAddrPool', $data) && $data['DefaultAddrPool'] === null) {
                $object->setDefaultAddrPool(null);
            }
            if (\array_key_exists('SubnetSize', $data) && $data['SubnetSize'] !== null) {
                $object->setSubnetSize($data['SubnetSize']);
            }
            elseif (\array_key_exists('SubnetSize', $data) && $data['SubnetSize'] === null) {
                $object->setSubnetSize(null);
            }
            if (\array_key_exists('JoinTokens', $data) && $data['JoinTokens'] !== null) {
                $object->setJoinTokens($this->denormalizer->denormalize($data['JoinTokens'], \Docker\API\Model\JoinTokens::class, 'json', $context));
            }
            elseif (\array_key_exists('JoinTokens', $data) && $data['JoinTokens'] === null) {
                $object->setJoinTokens(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('iD') && null !== $object->getID()) {
                $data['ID'] = $object->getID();
            }
            if ($object->isInitialized('version') && null !== $object->getVersion()) {
                $data['Version'] = $this->normalizer->normalize($object->getVersion(), 'json', $context);
            }
            if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
                $data['CreatedAt'] = $object->getCreatedAt();
            }
            if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
                $data['UpdatedAt'] = $object->getUpdatedAt();
            }
            if ($object->isInitialized('spec') && null !== $object->getSpec()) {
                $data['Spec'] = $this->normalizer->normalize($object->getSpec(), 'json', $context);
            }
            if ($object->isInitialized('tLSInfo') && null !== $object->getTLSInfo()) {
                $data['TLSInfo'] = $this->normalizer->normalize($object->getTLSInfo(), 'json', $context);
            }
            if ($object->isInitialized('rootRotationInProgress') && null !== $object->getRootRotationInProgress()) {
                $data['RootRotationInProgress'] = $object->getRootRotationInProgress();
            }
            if ($object->isInitialized('dataPathPort') && null !== $object->getDataPathPort()) {
                $data['DataPathPort'] = $object->getDataPathPort();
            }
            if ($object->isInitialized('defaultAddrPool') && null !== $object->getDefaultAddrPool()) {
                $values = [];
                foreach ($object->getDefaultAddrPool() as $value) {
                    $values[] = $value;
                }
                $data['DefaultAddrPool'] = $values;
            }
            if ($object->isInitialized('subnetSize') && null !== $object->getSubnetSize()) {
                $data['SubnetSize'] = $object->getSubnetSize();
            }
            if ($object->isInitialized('joinTokens') && null !== $object->getJoinTokens()) {
                $data['JoinTokens'] = $this->normalizer->normalize($object->getJoinTokens(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\API\Model\Swarm::class => false];
        }
    }
}