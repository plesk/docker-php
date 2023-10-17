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

class ServiceSpecNormalizer implements SerializerAwareInterface, DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use SerializerAwareTrait;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\ServiceSpec') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\ServiceSpec) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Docker\API\Model\ServiceSpec();
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
        if (property_exists($data, 'TaskTemplate')) {
            $object->setTaskTemplate($this->serializer->denormalize($data->{'TaskTemplate'}, 'Docker\\API\\Model\\TaskSpec', 'raw', $context));
        }
        if (property_exists($data, 'Mode')) {
            $object->setMode($this->serializer->denormalize($data->{'Mode'}, 'Docker\\API\\Model\\ServiceSpecMode', 'raw', $context));
        }
        if (property_exists($data, 'UpdateConfig')) {
            $object->setUpdateConfig($this->serializer->denormalize($data->{'UpdateConfig'}, 'Docker\\API\\Model\\UpdateConfig', 'raw', $context));
        }
        if (property_exists($data, 'Networks')) {
            $value_2 = $data->{'Networks'};
            if (is_array($data->{'Networks'})) {
                $values_1 = [];
                foreach ($data->{'Networks'} as $value_3) {
                    $values_1[] = $this->serializer->denormalize($value_3, 'Docker\\API\\Model\\NetworkAttachmentConfig', 'raw', $context);
                }
                $value_2 = $values_1;
            }
            if (is_null($data->{'Networks'})) {
                $value_2 = $data->{'Networks'};
            }
            $object->setNetworks($value_2);
        }
        if (property_exists($data, 'EndpointSpec')) {
            $object->setEndpointSpec($data->{'EndpointSpec'});
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
        if (null !== $object->getTaskTemplate()) {
            $data->{'TaskTemplate'} = json_decode($this->serializer->normalize($object->getTaskTemplate(), 'raw', $context));
        }
        if (null !== $object->getMode()) {
            $data->{'Mode'} = json_decode($this->serializer->normalize($object->getMode(), 'raw', $context));
        }
        if (null !== $object->getUpdateConfig()) {
            $data->{'UpdateConfig'} = json_decode($this->serializer->normalize($object->getUpdateConfig(), 'raw', $context));
        }
        $value_2 = $object->getNetworks();
        if (is_array($object->getNetworks())) {
            $values_1 = [];
            foreach ($object->getNetworks() as $value_3) {
                $values_1[] = $value_3;
            }
            $value_2 = $values_1;
        }
        if (is_null($object->getNetworks())) {
            $value_2 = $object->getNetworks();
        }
        $data->{'Networks'} = $value_2;
        if (null !== $object->getEndpointSpec()) {
            $data->{'EndpointSpec'} = $object->getEndpointSpec();
        }

        return json_encode($data);
    }
}
