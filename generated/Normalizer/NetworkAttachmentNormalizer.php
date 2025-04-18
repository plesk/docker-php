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

class NetworkAttachmentNormalizer implements SerializerAwareInterface, DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use SerializerAwareTrait;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\NetworkAttachment') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\NetworkAttachment) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Docker\API\Model\NetworkAttachment();
        if (property_exists($data, 'Network')) {
            $object->setNetwork($this->serializer->denormalize($data->{'Network'}, 'Docker\\API\\Model\\SwarmNetwork', 'raw', $context));
        }
        if (property_exists($data, 'Addresses')) {
            $value = $data->{'Addresses'};
            if (is_array($data->{'Addresses'})) {
                $values = [];
                foreach ($data->{'Addresses'} as $value_1) {
                    $values[] = $value_1;
                }
                $value = $values;
            }
            if (is_null($data->{'Addresses'})) {
                $value = $data->{'Addresses'};
            }
            $object->setAddresses($value);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getNetwork()) {
            $data->{'Network'} = json_decode($this->serializer->normalize($object->getNetwork()));
        }
        $value = $object->getAddresses();
        if (is_array($object->getAddresses())) {
            $values = [];
            foreach ($object->getAddresses() as $value_1) {
                $values[] = $value_1;
            }
            $value = $values;
        }
        if (is_null($object->getAddresses())) {
            $value = $object->getAddresses();
        }
        $data->{'Addresses'} = $value;

        return json_encode($data);
    }
}
