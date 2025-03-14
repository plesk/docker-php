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

class SwarmNetworkSpecNormalizer implements SerializerAwareInterface, DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use SerializerAwareTrait;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\SwarmNetworkSpec') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\SwarmNetworkSpec) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Docker\API\Model\SwarmNetworkSpec();
        if (property_exists($data, 'Name')) {
            $object->setName($data->{'Name'});
        }
        if (property_exists($data, 'Labels')) {
            $value = $data->{'Labels'};
            if (is_object($data->{'Labels'})) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data->{'Labels'} as $key => $value_1) {
                    $values[$key] = $value_1;
                }
                $value = $values;
            }
            if (is_null($data->{'Labels'})) {
                $value = $data->{'Labels'};
            }
            $object->setLabels($value);
        }
        if (property_exists($data, 'DriverConfiguration')) {
            $object->setDriverConfiguration($this->serializer->denormalize($data->{'DriverConfiguration'}, 'Docker\\API\\Model\\Driver', 'raw', $context));
        }
        if (property_exists($data, 'IPv6Enabled')) {
            $object->setIPv6Enabled($data->{'IPv6Enabled'});
        }
        if (property_exists($data, 'Internal')) {
            $object->setInternal($data->{'Internal'});
        }
        if (property_exists($data, 'IPAM')) {
            $object->setIPAM($this->serializer->denormalize($data->{'IPAM'}, 'Docker\\API\\Model\\SwarmIPAMOptions', 'raw', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getName()) {
            $data->{'Name'} = $object->getName();
        }
        $value = $object->getLabels();
        if (is_object($object->getLabels())) {
            $values = new \stdClass();
            foreach ($object->getLabels() as $key => $value_1) {
                $values->{$key} = $value_1;
            }
            $value = $values;
        }
        if (is_null($object->getLabels())) {
            $value = $object->getLabels();
        }
        $data->{'Labels'} = $value;
        if (null !== $object->getDriverConfiguration()) {
            $data->{'DriverConfiguration'} = json_decode($this->serializer->normalize($object->getDriverConfiguration(), 'raw', $context));
        }
        if (null !== $object->getIPv6Enabled()) {
            $data->{'IPv6Enabled'} = $object->getIPv6Enabled();
        }
        if (null !== $object->getInternal()) {
            $data->{'Internal'} = $object->getInternal();
        }
        if (null !== $object->getIPAM()) {
            $data->{'IPAM'} = json_decode($this->serializer->normalize($object->getIPAM(), 'raw', $context));
        }

        return json_encode($data);
    }
}
