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

class ExecCommandNormalizer implements SerializerAwareInterface, DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use SerializerAwareTrait;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\ExecCommand') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\ExecCommand) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Docker\API\Model\ExecCommand();
        if (property_exists($data, 'ID')) {
            $object->setID($data->{'ID'});
        }
        if (property_exists($data, 'Running')) {
            $object->setRunning($data->{'Running'});
        }
        if (property_exists($data, 'ExitCode')) {
            $object->setExitCode($data->{'ExitCode'});
        }
        if (property_exists($data, 'ProcessConfig')) {
            $object->setProcessConfig($this->serializer->denormalize($data->{'ProcessConfig'}, 'Docker\\API\\Model\\ProcessConfig', 'raw', $context));
        }
        if (property_exists($data, 'OpenStdin')) {
            $object->setOpenStdin($data->{'OpenStdin'});
        }
        if (property_exists($data, 'OpenStderr')) {
            $object->setOpenStderr($data->{'OpenStderr'});
        }
        if (property_exists($data, 'OpenStdout')) {
            $object->setOpenStdout($data->{'OpenStdout'});
        }
        if (property_exists($data, 'Container')) {
            $object->setContainer($this->serializer->denormalize($data->{'Container'}, 'Docker\\API\\Model\\Container', 'raw', $context));
        }
        if (property_exists($data, 'DetachKeys')) {
            $object->setDetachKeys($data->{'DetachKeys'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getID()) {
            $data->{'ID'} = $object->getID();
        }
        if (null !== $object->getRunning()) {
            $data->{'Running'} = $object->getRunning();
        }
        if (null !== $object->getExitCode()) {
            $data->{'ExitCode'} = $object->getExitCode();
        }
        if (null !== $object->getProcessConfig()) {
            $data->{'ProcessConfig'} = json_decode($this->serializer->normalize($object->getProcessConfig(), 'raw', $context));
        }
        if (null !== $object->getOpenStdin()) {
            $data->{'OpenStdin'} = $object->getOpenStdin();
        }
        if (null !== $object->getOpenStderr()) {
            $data->{'OpenStderr'} = $object->getOpenStderr();
        }
        if (null !== $object->getOpenStdout()) {
            $data->{'OpenStdout'} = $object->getOpenStdout();
        }
        if (null !== $object->getContainer()) {
            $data->{'Container'} = json_decode($this->serializer->normalize($object->getContainer(), 'raw', $context));
        }
        if (null !== $object->getDetachKeys()) {
            $data->{'DetachKeys'} = $object->getDetachKeys();
        }

        return json_encode($data);
    }
}
