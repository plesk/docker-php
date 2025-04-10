<?php

namespace Docker\API\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\SerializerAwareInterface;
use Symfony\Component\Serializer\SerializerAwareTrait;

class NetworkConfigNormalizer implements SerializerAwareInterface, DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use SerializerAwareTrait;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\NetworkConfig') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\NetworkConfig) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Docker\API\Model\NetworkConfig();
        if (property_exists($data, 'Bridge')) {
            $object->setBridge($data->{'Bridge'});
        }
        if (property_exists($data, 'Gateway')) {
            $object->setGateway($data->{'Gateway'});
        }
        if (property_exists($data, 'IPAddress')) {
            $object->setIPAddress($data->{'IPAddress'});
        }
        if (property_exists($data, 'IPPrefixLen')) {
            $object->setIPPrefixLen($data->{'IPPrefixLen'});
        }
        if (property_exists($data, 'MacAddress')) {
            $object->setMacAddress($data->{'MacAddress'});
        }
        if (property_exists($data, 'PortMapping')) {
            $object->setPortMapping($data->{'PortMapping'});
        }
        if (property_exists($data, 'Networks')) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'Networks'} as $key => $value) {
                $values[$key] = $this->serializer->denormalize($value, 'Docker\\API\\Model\\ContainerNetwork', 'raw', $context);
            }
            $object->setNetworks($values);
        }
        if (property_exists($data, 'Ports')) {
            $value_1 = $data->{'Ports'};
            if (is_object($data->{'Ports'})) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data->{'Ports'} as $key_1 => $value_2) {
                    $value_3 = $value_2;
                    if (is_array($value_2)) {
                        $values_2 = [];
                        foreach ($value_2 as $value_4) {
                            $values_2[] = $this->serializer->denormalize($value_4, 'Docker\\API\\Model\\PortBinding', 'raw', $context);
                        }
                        $value_3 = $values_2;
                    }
                    if (is_null($value_2)) {
                        $value_3 = $value_2;
                    }
                    $values_1[$key_1] = $value_3;
                }
                $value_1 = $values_1;
            }
            if (is_null($data->{'Ports'})) {
                $value_1 = $data->{'Ports'};
            }
            $object->setPorts($value_1);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getBridge()) {
            $data->{'Bridge'} = $object->getBridge();
        }
        if (null !== $object->getGateway()) {
            $data->{'Gateway'} = $object->getGateway();
        }
        if (null !== $object->getIPAddress()) {
            $data->{'IPAddress'} = $object->getIPAddress();
        }
        if (null !== $object->getIPPrefixLen()) {
            $data->{'IPPrefixLen'} = $object->getIPPrefixLen();
        }
        if (null !== $object->getMacAddress()) {
            $data->{'MacAddress'} = $object->getMacAddress();
        }
        if (null !== $object->getPortMapping()) {
            $data->{'PortMapping'} = $object->getPortMapping();
        }
        if (null !== $object->getNetworks()) {
            $values = new \stdClass();
            foreach ($object->getNetworks() as $key => $value) {
                $values->{$key} = $value;
            }
            $data->{'Networks'} = $values;
        }
        $value_1 = $object->getPorts();
        if (is_object($object->getPorts())) {
            $values_1 = new \stdClass();
            foreach ($object->getPorts() as $key_1 => $value_2) {
                $value_3 = $value_2;
                if (is_array($value_2)) {
                    $values_2 = [];
                    foreach ($value_2 as $value_4) {
                        $values_2[] = $value_4;
                    }
                    $value_3 = $values_2;
                }
                if (is_null($value_2)) {
                    $value_3 = $value_2;
                }
                $values_1->{$key_1} = $value_3;
            }
            $value_1 = $values_1;
        }
        if (is_null($object->getPorts())) {
            $value_1 = $object->getPorts();
        }
        $data->{'Ports'} = $value_1;

        return json_encode($data);
    }
}
