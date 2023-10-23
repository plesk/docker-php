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

class EndpointSpecNormalizer implements SerializerAwareInterface, DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use SerializerAwareTrait;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\EndpointSpec') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\EndpointSpec) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Docker\API\Model\EndpointSpec();
        if (property_exists($data, 'Mode')) {
            $object->setMode($data->{'Mode'});
        }
        if (property_exists($data, 'Ports')) {
            $value = $data->{'Ports'};
            if (is_array($data->{'Ports'})) {
                $values = [];
                foreach ($data->{'Ports'} as $value_1) {
                    $values[] = $this->serializer->denormalize($value_1, 'Docker\\API\\Model\\PortConfig', 'raw', $context);
                }
                $value = $values;
            }
            if (is_null($data->{'Ports'})) {
                $value = $data->{'Ports'};
            }
            $object->setPorts($value);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getMode()) {
            $data->{'Mode'} = $object->getMode();
        }
        $value = $object->getPorts();
        if (is_array($object->getPorts())) {
            $values = [];
            foreach ($object->getPorts() as $value_1) {
                $values[] = $value_1;
            }
            $value = $values;
        }
        if (is_null($object->getPorts())) {
            $value = $object->getPorts();
        }
        $data->{'Ports'} = $value;

        return json_encode($data);
    }
}
