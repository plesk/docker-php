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

class VersionNormalizer implements SerializerAwareInterface, DenormalizerAwareInterface, DenormalizerInterface, NormalizerAwareInterface, NormalizerInterface
{
    use SerializerAwareTrait;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\Version') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\Version) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $object = new \Docker\API\Model\Version();
        if (property_exists($data, 'Version')) {
            $object->setVersion($data->{'Version'});
        }
        if (property_exists($data, 'Os')) {
            $object->setOs($data->{'Os'});
        }
        if (property_exists($data, 'KernelVersion')) {
            $object->setKernelVersion($data->{'KernelVersion'});
        }
        if (property_exists($data, 'GoVersion')) {
            $object->setGoVersion($data->{'GoVersion'});
        }
        if (property_exists($data, 'GitCommit')) {
            $object->setGitCommit($data->{'GitCommit'});
        }
        if (property_exists($data, 'Arch')) {
            $object->setArch($data->{'Arch'});
        }
        if (property_exists($data, 'ApiVersion')) {
            $object->setApiVersion($data->{'ApiVersion'});
        }
        if (property_exists($data, 'Experimental')) {
            $object->setExperimental($data->{'Experimental'});
        }
        if (property_exists($data, 'BuildTime')) {
            $object->setBuildTime($data->{'BuildTime'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getVersion()) {
            $data->{'Version'} = $object->getVersion();
        }
        if (null !== $object->getOs()) {
            $data->{'Os'} = $object->getOs();
        }
        if (null !== $object->getKernelVersion()) {
            $data->{'KernelVersion'} = $object->getKernelVersion();
        }
        if (null !== $object->getGoVersion()) {
            $data->{'GoVersion'} = $object->getGoVersion();
        }
        if (null !== $object->getGitCommit()) {
            $data->{'GitCommit'} = $object->getGitCommit();
        }
        if (null !== $object->getArch()) {
            $data->{'Arch'} = $object->getArch();
        }
        if (null !== $object->getApiVersion()) {
            $data->{'ApiVersion'} = $object->getApiVersion();
        }
        if (null !== $object->getExperimental()) {
            $data->{'Experimental'} = $object->getExperimental();
        }
        if (null !== $object->getBuildTime()) {
            $data->{'BuildTime'} = $object->getBuildTime();
        }

        return json_encode($data);
    }
}
