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

class SwarmUpdateConfigNormalizer implements SerializerAwareInterface, DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use SerializerAwareTrait;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\SwarmUpdateConfig') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\SwarmUpdateConfig) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Docker\API\Model\SwarmUpdateConfig();
        if (property_exists($data, 'Name')) {
            $object->setName($data->{'Name'});
        }
        if (property_exists($data, 'Orchestration')) {
            $object->setOrchestration($this->serializer->denormalize($data->{'Orchestration'}, 'Docker\\API\\Model\\SwarmConfigSpecOrchestration', 'raw', $context));
        }
        if (property_exists($data, 'Raft')) {
            $object->setRaft($this->serializer->denormalize($data->{'Raft'}, 'Docker\\API\\Model\\SwarmConfigSpecRaft', 'raw', $context));
        }
        if (property_exists($data, 'Dispatcher')) {
            $object->setDispatcher($this->serializer->denormalize($data->{'Dispatcher'}, 'Docker\\API\\Model\\SwarmConfigSpecDispatcher', 'raw', $context));
        }
        if (property_exists($data, 'CAConfig')) {
            $object->setCAConfig($this->serializer->denormalize($data->{'CAConfig'}, 'Docker\\API\\Model\\SwarmConfigSpecCAConfig', 'raw', $context));
        }
        if (property_exists($data, 'JoinTokens')) {
            $object->setJoinTokens($this->serializer->denormalize($data->{'JoinTokens'}, 'Docker\\API\\Model\\SwarmJoinTokens', 'raw', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getName()) {
            $data->{'Name'} = $object->getName();
        }
        if (null !== $object->getOrchestration()) {
            $data->{'Orchestration'} = json_decode($this->serializer->normalize($object->getOrchestration(), 'raw', $context));
        }
        if (null !== $object->getRaft()) {
            $data->{'Raft'} = json_decode($this->serializer->normalize($object->getRaft(), 'raw', $context));
        }
        if (null !== $object->getDispatcher()) {
            $data->{'Dispatcher'} = json_decode($this->serializer->normalize($object->getDispatcher(), 'raw', $context));
        }
        if (null !== $object->getCAConfig()) {
            $data->{'CAConfig'} = json_decode($this->serializer->normalize($object->getCAConfig(), 'raw', $context));
        }
        if (null !== $object->getJoinTokens()) {
            $data->{'JoinTokens'} = json_decode($this->serializer->normalize($object->getJoinTokens(), 'raw', $context));
        }

        return json_encode($data);
    }
}
