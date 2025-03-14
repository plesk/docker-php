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

class NodeNormalizer implements SerializerAwareInterface, DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use SerializerAwareTrait;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\Node') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\Node) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Docker\API\Model\Node();
        if (property_exists($data, 'ID')) {
            $object->setID($data->{'ID'});
        }
        if (property_exists($data, 'Version')) {
            $object->setVersion($this->serializer->denormalize($data->{'Version'}, 'Docker\\API\\Model\\NodeVersion', 'raw', $context));
        }
        if (property_exists($data, 'CreatedAt')) {
            $object->setCreatedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'CreatedAt'}));
        }
        if (property_exists($data, 'UpdatedAt')) {
            $object->setUpdatedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'UpdatedAt'}));
        }
        if (property_exists($data, 'Spec')) {
            $object->setSpec($this->serializer->denormalize($data->{'Spec'}, 'Docker\\API\\Model\\NodeSpec', 'raw', $context));
        }
        if (property_exists($data, 'Description')) {
            $object->setDescription($this->serializer->denormalize($data->{'Description'}, 'Docker\\API\\Model\\NodeDescription', 'raw', $context));
        }
        if (property_exists($data, 'Status')) {
            $object->setStatus($this->serializer->denormalize($data->{'Status'}, 'Docker\\API\\Model\\NodeStatus', 'raw', $context));
        }
        if (property_exists($data, 'ManagerStatus')) {
            $object->setManagerStatus($this->serializer->denormalize($data->{'ManagerStatus'}, 'Docker\\API\\Model\\NodeManagerStatus', 'raw', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getID()) {
            $data->{'ID'} = $object->getID();
        }
        if (null !== $object->getVersion()) {
            $data->{'Version'} = json_decode($this->serializer->normalize($object->getVersion(), 'raw', $context));
        }
        if (null !== $object->getCreatedAt()) {
            $data->{'CreatedAt'} = $object->getCreatedAt()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getUpdatedAt()) {
            $data->{'UpdatedAt'} = $object->getUpdatedAt()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getSpec()) {
            $data->{'Spec'} = json_decode($this->serializer->normalize($object->getSpec(), 'raw', $context));
        }
        if (null !== $object->getDescription()) {
            $data->{'Description'} = json_decode($this->serializer->normalize($object->getDescription(), 'raw', $context));
        }
        if (null !== $object->getStatus()) {
            $data->{'Status'} = json_decode($this->serializer->normalize($object->getStatus(), 'raw', $context));
        }
        if (null !== $object->getManagerStatus()) {
            $data->{'ManagerStatus'} = json_decode($this->serializer->normalize($object->getManagerStatus(), 'raw', $context));
        }

        return json_encode($data);
    }
}
