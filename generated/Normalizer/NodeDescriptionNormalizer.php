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

class NodeDescriptionNormalizer implements SerializerAwareInterface, DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use SerializerAwareTrait;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\NodeDescription') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\NodeDescription) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Docker\API\Model\NodeDescription();
        if (property_exists($data, 'Hostname')) {
            $object->setHostname($data->{'Hostname'});
        }
        if (property_exists($data, 'Platform')) {
            $object->setPlatform($this->serializer->denormalize($data->{'Platform'}, 'Docker\\API\\Model\\NodePlatform', 'raw', $context));
        }
        if (property_exists($data, 'Resources')) {
            $object->setResources($this->serializer->denormalize($data->{'Resources'}, 'Docker\\API\\Model\\NodeResources', 'raw', $context));
        }
        if (property_exists($data, 'Engine')) {
            $object->setEngine($this->serializer->denormalize($data->{'Engine'}, 'Docker\\API\\Model\\NodeEngine', 'raw', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getHostname()) {
            $data->{'Hostname'} = $object->getHostname();
        }
        if (null !== $object->getPlatform()) {
            $data->{'Platform'} = json_decode($this->serializer->normalize($object->getPlatform(), 'raw', $context));
        }
        if (null !== $object->getResources()) {
            $data->{'Resources'} = json_decode($this->serializer->normalize($object->getResources(), 'raw', $context));
        }
        if (null !== $object->getEngine()) {
            $data->{'Engine'} = json_decode($this->serializer->normalize($object->getEngine(), 'raw', $context));
        }

        return json_encode($data);
    }
}
