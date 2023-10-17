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

class RegistryConfigNormalizer implements SerializerAwareInterface, DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use SerializerAwareTrait;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\RegistryConfig') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\RegistryConfig) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Docker\API\Model\RegistryConfig();
        if (property_exists($data, 'IndexConfigs')) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'IndexConfigs'} as $key => $value) {
                $values[$key] = $this->serializer->denormalize($value, 'Docker\\API\\Model\\Registry', 'raw', $context);
            }
            $object->setIndexConfigs($values);
        }
        if (property_exists($data, 'InsecureRegistryCIDRs')) {
            $value_1 = $data->{'InsecureRegistryCIDRs'};
            if (is_array($data->{'InsecureRegistryCIDRs'})) {
                $values_1 = [];
                foreach ($data->{'InsecureRegistryCIDRs'} as $value_2) {
                    $values_1[] = $value_2;
                }
                $value_1 = $values_1;
            }
            if (is_null($data->{'InsecureRegistryCIDRs'})) {
                $value_1 = $data->{'InsecureRegistryCIDRs'};
            }
            $object->setInsecureRegistryCIDRs($value_1);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getIndexConfigs()) {
            $values = new \stdClass();
            foreach ($object->getIndexConfigs() as $key => $value) {
                $values->{$key} = $value;
            }
            $data->{'IndexConfigs'} = $values;
        }
        $value_1 = $object->getInsecureRegistryCIDRs();
        if (is_array($object->getInsecureRegistryCIDRs())) {
            $values_1 = [];
            foreach ($object->getInsecureRegistryCIDRs() as $value_2) {
                $values_1[] = $value_2;
            }
            $value_1 = $values_1;
        }
        if (is_null($object->getInsecureRegistryCIDRs())) {
            $value_1 = $object->getInsecureRegistryCIDRs();
        }
        $data->{'InsecureRegistryCIDRs'} = $value_1;

        return json_encode($data);
    }
}
