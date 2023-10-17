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

class EndpointNormalizer implements SerializerAwareInterface, DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use SerializerAwareTrait;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\Endpoint') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\Endpoint) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Docker\API\Model\Endpoint();
        if (property_exists($data, 'Spec')) {
            $object->setSpec($this->serializer->denormalize($data->{'Spec'}, 'Docker\\API\\Model\\EndpointSpec', 'raw', $context));
        }
        if (property_exists($data, 'ExposedPorts')) {
            $value = $data->{'ExposedPorts'};
            if (is_array($data->{'ExposedPorts'})) {
                $values = [];
                foreach ($data->{'ExposedPorts'} as $value_1) {
                    $values[] = $this->serializer->denormalize($value_1, 'Docker\\API\\Model\\PortConfig', 'raw', $context);
                }
                $value = $values;
            }
            if (is_null($data->{'ExposedPorts'})) {
                $value = $data->{'ExposedPorts'};
            }
            $object->setExposedPorts($value);
        }
        if (property_exists($data, 'VirtualIPs')) {
            $value_2 = $data->{'VirtualIPs'};
            if (is_array($data->{'VirtualIPs'})) {
                $values_1 = [];
                foreach ($data->{'VirtualIPs'} as $value_3) {
                    $values_1[] = $this->serializer->denormalize($value_3, 'Docker\\API\\Model\\EndpointVirtualIP', 'raw', $context);
                }
                $value_2 = $values_1;
            }
            if (is_null($data->{'VirtualIPs'})) {
                $value_2 = $data->{'VirtualIPs'};
            }
            $object->setVirtualIPs($value_2);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getSpec()) {
            $data->{'Spec'} = json_decode($this->serializer->normalize($object->getSpec(), 'raw', $context));
        }
        $value = $object->getExposedPorts();
        if (is_array($object->getExposedPorts())) {
            $values = [];
            foreach ($object->getExposedPorts() as $value_1) {
                $values[] = $value_1;
            }
            $value = $values;
        }
        if (is_null($object->getExposedPorts())) {
            $value = $object->getExposedPorts();
        }
        $data->{'ExposedPorts'} = $value;
        $value_2                = $object->getVirtualIPs();
        if (is_array($object->getVirtualIPs())) {
            $values_1 = [];
            foreach ($object->getVirtualIPs() as $value_3) {
                $values_1[] = $value_3;
            }
            $value_2 = $values_1;
        }
        if (is_null($object->getVirtualIPs())) {
            $value_2 = $object->getVirtualIPs();
        }
        $data->{'VirtualIPs'} = $value_2;

        return json_encode($data);
    }
}
