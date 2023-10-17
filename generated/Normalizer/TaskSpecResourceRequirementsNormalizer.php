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

class TaskSpecResourceRequirementsNormalizer implements SerializerAwareInterface, DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use SerializerAwareTrait;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\TaskSpecResourceRequirements') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\TaskSpecResourceRequirements) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Docker\API\Model\TaskSpecResourceRequirements();
        if (property_exists($data, 'Limits')) {
            $object->setLimits($this->serializer->denormalize($data->{'Limits'}, 'Docker\\API\\Model\\NodeResources', 'raw', $context));
        }
        if (property_exists($data, 'Reservations')) {
            $object->setReservations($this->serializer->denormalize($data->{'Reservations'}, 'Docker\\API\\Model\\NodeResources', 'raw', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getLimits()) {
            $data->{'Limits'} = json_decode($this->serializer->normalize($object->getLimits(), 'raw', $context));
        }
        if (null !== $object->getReservations()) {
            $data->{'Reservations'} = json_decode($this->serializer->normalize($object->getReservations(), 'raw', $context));
        }

        return json_encode($data);
    }
}
