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

class ServiceSpecModeNormalizer implements SerializerAwareInterface, DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use SerializerAwareTrait;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\ServiceSpecMode') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\ServiceSpecMode) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Docker\API\Model\ServiceSpecMode();
        if (property_exists($data, 'Replicated')) {
            $object->setReplicated($this->serializer->denormalize($data->{'Replicated'}, 'Docker\\API\\Model\\ReplicatedService', 'raw', $context));
        }
        if (property_exists($data, 'Global')) {
            $object->setGlobal($this->serializer->denormalize($data->{'Global'}, 'Docker\\API\\Model\\GlobalService', 'raw', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getReplicated()) {
            $data->{'Replicated'} = json_decode($this->serializer->normalize($object->getReplicated(), 'raw', $context));
        }
        if (null !== $object->getGlobal()) {
            $data->{'Global'} = json_decode($this->serializer->normalize($object->getGlobal(), 'raw', $context));
        }

        return json_encode($data);
    }
}
