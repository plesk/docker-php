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

class UpdateStatusNormalizer implements SerializerAwareInterface, DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use SerializerAwareTrait;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\UpdateStatus') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\UpdateStatus) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Docker\API\Model\UpdateStatus();
        if (property_exists($data, 'State')) {
            $object->setState($data->{'State'});
        }
        if (property_exists($data, 'StartedAt')) {
            $object->setStartedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'StartedAt'}));
        }
        if (property_exists($data, 'CompletedAt')) {
            $object->setCompletedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'CompletedAt'}));
        }
        if (property_exists($data, 'Message')) {
            $object->setMessage($data->{'Message'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getState()) {
            $data->{'State'} = $object->getState();
        }
        if (null !== $object->getStartedAt()) {
            $data->{'StartedAt'} = $object->getStartedAt()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getCompletedAt()) {
            $data->{'CompletedAt'} = $object->getCompletedAt()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getMessage()) {
            $data->{'Message'} = $object->getMessage();
        }

        return json_encode($data);
    }
}
