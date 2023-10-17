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

class TaskSpecNormalizer implements SerializerAwareInterface, DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use SerializerAwareTrait;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\TaskSpec') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\TaskSpec) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Docker\API\Model\TaskSpec();
        if (property_exists($data, 'ContainerSpec')) {
            $object->setContainerSpec($this->serializer->denormalize($data->{'ContainerSpec'}, 'Docker\\API\\Model\\ContainerSpec', 'raw', $context));
        }
        if (property_exists($data, 'Resources')) {
            $object->setResources($this->serializer->denormalize($data->{'Resources'}, 'Docker\\API\\Model\\TaskSpecResourceRequirements', 'raw', $context));
        }
        if (property_exists($data, 'RestartPolicy')) {
            $object->setRestartPolicy($this->serializer->denormalize($data->{'RestartPolicy'}, 'Docker\\API\\Model\\TaskSpecRestartPolicy', 'raw', $context));
        }
        if (property_exists($data, 'Placement')) {
            $object->setPlacement($this->serializer->denormalize($data->{'Placement'}, 'Docker\\API\\Model\\TaskSpecPlacement', 'raw', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getContainerSpec()) {
            $data->{'ContainerSpec'} = json_decode($this->serializer->normalize($object->getContainerSpec(), 'raw', $context));
        }
        if (null !== $object->getResources()) {
            $data->{'Resources'} = json_decode($this->serializer->normalize($object->getResources(), 'raw', $context));
        }
        if (null !== $object->getRestartPolicy()) {
            $data->{'RestartPolicy'} = json_decode($this->serializer->normalize($object->getRestartPolicy(), 'raw', $context));
        }
        if (null !== $object->getPlacement()) {
            $data->{'Placement'} = json_decode($this->serializer->normalize($object->getPlacement(), 'raw', $context));
        }

        return json_encode($data);
    }
}
