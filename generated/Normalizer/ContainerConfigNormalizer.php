<?php

namespace Docker\API\Normalizer;

use Joli\Jane\Reference\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class ContainerConfigNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\ContainerConfig') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\ContainerConfig) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (empty($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['rootSchema'] ?: null);
        }
        $object = new \Docker\API\Model\ContainerConfig();
        if (!isset($context['rootSchema'])) {
            $context['rootSchema'] = $object;
        }
        if (property_exists($data, 'Id')) {
            $object->setId($data->{'Id'});
        }
        if (property_exists($data, 'Names')) {
            $value = $data->{'Names'};
            if (is_array($data->{'Names'})) {
                $values = [];
                foreach ($data->{'Names'} as $value_1) {
                    $values[] = $value_1;
                }
                $value = $values;
            }
            if (is_null($data->{'Names'})) {
                $value = $data->{'Names'};
            }
            $object->setNames($value);
        }
        if (property_exists($data, 'Image')) {
            $object->setImage($data->{'Image'});
        }
        if (property_exists($data, 'ImageID')) {
            $object->setImageID($data->{'ImageID'});
        }
        if (property_exists($data, 'Command')) {
            $object->setCommand($data->{'Command'});
        }
        if (property_exists($data, 'Created')) {
            $object->setCreated($data->{'Created'});
        }
        if (property_exists($data, 'Status')) {
            $object->setStatus($data->{'Status'});
        }
        if (property_exists($data, 'Ports')) {
            $value_2 = $data->{'Ports'};
            if (is_array($data->{'Ports'})) {
                $values_1 = [];
                foreach ($data->{'Ports'} as $value_3) {
                    $values_1[] = $this->serializer->deserialize($value_3, 'Docker\\API\\Model\\Port', 'raw', $context);
                }
                $value_2 = $values_1;
            }
            if (is_null($data->{'Ports'})) {
                $value_2 = $data->{'Ports'};
            }
            $object->setPorts($value_2);
        }
        if (property_exists($data, 'Labels')) {
            $value_4 = $data->{'Labels'};
            if (is_object($data->{'Labels'})) {
                $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data->{'Labels'} as $key => $value_5) {
                    $values_2[$key] = $value_5;
                }
                $value_4 = $values_2;
            }
            if (is_null($data->{'Labels'})) {
                $value_4 = $data->{'Labels'};
            }
            $object->setLabels($value_4);
        }
        if (property_exists($data, 'SizeRw')) {
            $object->setSizeRw($data->{'SizeRw'});
        }
        if (property_exists($data, 'SizeRootFs')) {
            $object->setSizeRootFs($data->{'SizeRootFs'});
        }
        if (property_exists($data, 'Hostname')) {
            $object->setHostname($data->{'Hostname'});
        }
        if (property_exists($data, 'Domainname')) {
            $object->setDomainname($data->{'Domainname'});
        }
        if (property_exists($data, 'User')) {
            $object->setUser($data->{'User'});
        }
        if (property_exists($data, 'AttachStdin')) {
            $object->setAttachStdin($data->{'AttachStdin'});
        }
        if (property_exists($data, 'AttachStdout')) {
            $object->setAttachStdout($data->{'AttachStdout'});
        }
        if (property_exists($data, 'AttachStderr')) {
            $object->setAttachStderr($data->{'AttachStderr'});
        }
        if (property_exists($data, 'Tty')) {
            $object->setTty($data->{'Tty'});
        }
        if (property_exists($data, 'OpenStdin')) {
            $object->setOpenStdin($data->{'OpenStdin'});
        }
        if (property_exists($data, 'StdinOnce')) {
            $object->setStdinOnce($data->{'StdinOnce'});
        }
        if (property_exists($data, 'Env')) {
            $value_6 = $data->{'Env'};
            if (is_array($data->{'Env'})) {
                $values_3 = [];
                foreach ($data->{'Env'} as $value_7) {
                    $values_3[] = $value_7;
                }
                $value_6 = $values_3;
            }
            if (is_null($data->{'Env'})) {
                $value_6 = $data->{'Env'};
            }
            $object->setEnv($value_6);
        }
        if (property_exists($data, 'Cmd')) {
            $value_8 = $data->{'Cmd'};
            if (is_array($data->{'Cmd'})) {
                $values_4 = [];
                foreach ($data->{'Cmd'} as $value_9) {
                    $values_4[] = $value_9;
                }
                $value_8 = $values_4;
            }
            if (is_string($data->{'Cmd'})) {
                $value_8 = $data->{'Cmd'};
            }
            $object->setCmd($value_8);
        }
        if (property_exists($data, 'Entrypoint')) {
            $value_10 = $data->{'Entrypoint'};
            if (is_array($data->{'Entrypoint'})) {
                $values_5 = [];
                foreach ($data->{'Entrypoint'} as $value_11) {
                    $values_5[] = $value_11;
                }
                $value_10 = $values_5;
            }
            if (is_string($data->{'Entrypoint'})) {
                $value_10 = $data->{'Entrypoint'};
            }
            $object->setEntrypoint($value_10);
        }
        if (property_exists($data, 'Mounts')) {
            $value_12 = $data->{'Mounts'};
            if (is_array($data->{'Mounts'})) {
                $values_6 = [];
                foreach ($data->{'Mounts'} as $value_13) {
                    $values_6[] = $this->serializer->deserialize($value_13, 'Docker\\API\\Model\\Mount', 'raw', $context);
                }
                $value_12 = $values_6;
            }
            if (is_null($data->{'Mounts'})) {
                $value_12 = $data->{'Mounts'};
            }
            $object->setMounts($value_12);
        }
        if (property_exists($data, 'WorkingDir')) {
            $object->setWorkingDir($data->{'WorkingDir'});
        }
        if (property_exists($data, 'NetworkDisabled')) {
            $object->setNetworkDisabled($data->{'NetworkDisabled'});
        }
        if (property_exists($data, 'MacAddress')) {
            $object->setMacAddress($data->{'MacAddress'});
        }
        if (property_exists($data, 'ExposedPorts')) {
            $value_14 = $data->{'ExposedPorts'};
            if (is_object($data->{'ExposedPorts'})) {
                $values_7 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data->{'ExposedPorts'} as $key_1 => $value_15) {
                    $values_7[$key_1] = $value_15;
                }
                $value_14 = $values_7;
            }
            if (is_null($data->{'ExposedPorts'})) {
                $value_14 = $data->{'ExposedPorts'};
            }
            $object->setExposedPorts($value_14);
        }
        if (property_exists($data, 'NetworkSettings')) {
            $object->setNetworkSettings($this->serializer->deserialize($data->{'NetworkSettings'}, 'Docker\\API\\Model\\NetworkConfig', 'raw', $context));
        }
        if (property_exists($data, 'HostConfig')) {
            $object->setHostConfig($this->serializer->deserialize($data->{'HostConfig'}, 'Docker\\API\\Model\\HostConfig', 'raw', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'Id'} = $object->getId();
        }
        $value = $object->getNames();
        if (is_array($object->getNames())) {
            $values = [];
            foreach ($object->getNames() as $value_1) {
                $values[] = $value_1;
            }
            $value = $values;
        }
        if (is_null($object->getNames())) {
            $value = $object->getNames();
        }
        $data->{'Names'} = $value;
        if (null !== $object->getImage()) {
            $data->{'Image'} = $object->getImage();
        }
        if (null !== $object->getImageID()) {
            $data->{'ImageID'} = $object->getImageID();
        }
        if (null !== $object->getCommand()) {
            $data->{'Command'} = $object->getCommand();
        }
        if (null !== $object->getCreated()) {
            $data->{'Created'} = $object->getCreated();
        }
        if (null !== $object->getStatus()) {
            $data->{'Status'} = $object->getStatus();
        }
        $value_2 = $object->getPorts();
        if (is_array($object->getPorts())) {
            $values_1 = [];
            foreach ($object->getPorts() as $value_3) {
                $values_1[] = $this->serializer->serialize($value_3, 'raw', $context);
            }
            $value_2 = $values_1;
        }
        if (is_null($object->getPorts())) {
            $value_2 = $object->getPorts();
        }
        $data->{'Ports'} = $value_2;
        $value_4         = $object->getLabels();
        if (is_object($object->getLabels())) {
            $values_2 = new \stdClass();
            foreach ($object->getLabels() as $key => $value_5) {
                $values_2->{$key} = $value_5;
            }
            $value_4 = $values_2;
        }
        if (is_null($object->getLabels())) {
            $value_4 = $object->getLabels();
        }
        $data->{'Labels'} = $value_4;
        if (null !== $object->getSizeRw()) {
            $data->{'SizeRw'} = $object->getSizeRw();
        }
        if (null !== $object->getSizeRootFs()) {
            $data->{'SizeRootFs'} = $object->getSizeRootFs();
        }
        if (null !== $object->getHostname()) {
            $data->{'Hostname'} = $object->getHostname();
        }
        if (null !== $object->getDomainname()) {
            $data->{'Domainname'} = $object->getDomainname();
        }
        if (null !== $object->getUser()) {
            $data->{'User'} = $object->getUser();
        }
        if (null !== $object->getAttachStdin()) {
            $data->{'AttachStdin'} = $object->getAttachStdin();
        }
        if (null !== $object->getAttachStdout()) {
            $data->{'AttachStdout'} = $object->getAttachStdout();
        }
        if (null !== $object->getAttachStderr()) {
            $data->{'AttachStderr'} = $object->getAttachStderr();
        }
        if (null !== $object->getTty()) {
            $data->{'Tty'} = $object->getTty();
        }
        if (null !== $object->getOpenStdin()) {
            $data->{'OpenStdin'} = $object->getOpenStdin();
        }
        if (null !== $object->getStdinOnce()) {
            $data->{'StdinOnce'} = $object->getStdinOnce();
        }
        $value_6 = $object->getEnv();
        if (is_array($object->getEnv())) {
            $values_3 = [];
            foreach ($object->getEnv() as $value_7) {
                $values_3[] = $value_7;
            }
            $value_6 = $values_3;
        }
        if (is_null($object->getEnv())) {
            $value_6 = $object->getEnv();
        }
        $data->{'Env'} = $value_6;
        if (null !== $object->getCmd()) {
            $value_8 = $object->getCmd();
            if (is_array($object->getCmd())) {
                $values_4 = [];
                foreach ($object->getCmd() as $value_9) {
                    $values_4[] = $value_9;
                }
                $value_8 = $values_4;
            }
            if (is_string($object->getCmd())) {
                $value_8 = $object->getCmd();
            }
            $data->{'Cmd'} = $value_8;
        }
        if (null !== $object->getEntrypoint()) {
            $value_10 = $object->getEntrypoint();
            if (is_array($object->getEntrypoint())) {
                $values_5 = [];
                foreach ($object->getEntrypoint() as $value_11) {
                    $values_5[] = $value_11;
                }
                $value_10 = $values_5;
            }
            if (is_string($object->getEntrypoint())) {
                $value_10 = $object->getEntrypoint();
            }
            $data->{'Entrypoint'} = $value_10;
        }
        $value_12 = $object->getMounts();
        if (is_array($object->getMounts())) {
            $values_6 = [];
            foreach ($object->getMounts() as $value_13) {
                $values_6[] = $this->serializer->serialize($value_13, 'raw', $context);
            }
            $value_12 = $values_6;
        }
        if (is_null($object->getMounts())) {
            $value_12 = $object->getMounts();
        }
        $data->{'Mounts'} = $value_12;
        if (null !== $object->getWorkingDir()) {
            $data->{'WorkingDir'} = $object->getWorkingDir();
        }
        if (null !== $object->getNetworkDisabled()) {
            $data->{'NetworkDisabled'} = $object->getNetworkDisabled();
        }
        if (null !== $object->getMacAddress()) {
            $data->{'MacAddress'} = $object->getMacAddress();
        }
        $value_14 = $object->getExposedPorts();
        if (is_object($object->getExposedPorts())) {
            $values_7 = new \stdClass();
            foreach ($object->getExposedPorts() as $key_1 => $value_15) {
                $values_7->{$key_1} = $value_15;
            }
            $value_14 = $values_7;
        }
        if (is_null($object->getExposedPorts())) {
            $value_14 = $object->getExposedPorts();
        }
        $data->{'ExposedPorts'} = $value_14;
        if (null !== $object->getNetworkSettings()) {
            $data->{'NetworkSettings'} = $this->serializer->serialize($object->getNetworkSettings(), 'raw', $context);
        }
        if (null !== $object->getHostConfig()) {
            $data->{'HostConfig'} = $this->serializer->serialize($object->getHostConfig(), 'raw', $context);
        }

        return $data;
    }
}
