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

class SwarmIPAMOptionsNormalizer implements SerializerAwareInterface, DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use SerializerAwareTrait;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\SwarmIPAMOptions') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\SwarmIPAMOptions) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Docker\API\Model\SwarmIPAMOptions();
        if (property_exists($data, 'Driver')) {
            $object->setDriver($this->serializer->denormalize($data->{'Driver'}, 'Docker\\API\\Model\\Driver', 'raw', $context));
        }
        if (property_exists($data, 'Configs')) {
            $value = $data->{'Configs'};
            if (is_array($data->{'Configs'})) {
                $values = [];
                foreach ($data->{'Configs'} as $value_1) {
                    $values[] = $this->serializer->denormalize($value_1, 'Docker\\API\\Model\\IPAMConfig', 'raw', $context);
                }
                $value = $values;
            }
            if (is_null($data->{'Configs'})) {
                $value = $data->{'Configs'};
            }
            $object->setConfigs($value);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getDriver()) {
            $data->{'Driver'} = json_decode($this->serializer->normalize($object->getDriver(), 'raw', $context));
        }
        $value = $object->getConfigs();
        if (is_array($object->getConfigs())) {
            $values = [];
            foreach ($object->getConfigs() as $value_1) {
                $values[] = $value_1;
            }
            $value = $values;
        }
        if (is_null($object->getConfigs())) {
            $value = $object->getConfigs();
        }
        $data->{'Configs'} = $value;

        return json_encode($data);
    }
}
