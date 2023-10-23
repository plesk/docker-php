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

class VolumeListNormalizer implements SerializerAwareInterface, DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use SerializerAwareTrait;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\VolumeList') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\VolumeList) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Docker\API\Model\VolumeList();
        if (property_exists($data, 'Volumes')) {
            $value = $data->{'Volumes'};
            if (is_array($data->{'Volumes'})) {
                $values = [];
                foreach ($data->{'Volumes'} as $value_1) {
                    $values[] = $this->serializer->denormalize($value_1, 'Docker\\API\\Model\\Volume', 'raw', $context);
                }
                $value = $values;
            }
            if (is_null($data->{'Volumes'})) {
                $value = $data->{'Volumes'};
            }
            $object->setVolumes($value);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data  = new \stdClass();
        $value = $object->getVolumes();
        if (is_array($object->getVolumes())) {
            $values = [];
            foreach ($object->getVolumes() as $value_1) {
                $values[] = $value_1;
            }
            $value = $values;
        }
        if (is_null($object->getVolumes())) {
            $value = $object->getVolumes();
        }
        $data->{'Volumes'} = $value;

        return json_encode($data);
    }
}
