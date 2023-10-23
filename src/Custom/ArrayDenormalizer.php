<?php
namespace Docker\Custom;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\SerializerAwareInterface;
use Symfony\Component\Serializer\SerializerAwareTrait;

class ArrayDenormalizer implements SerializerAwareInterface, DenormalizerAwareInterface, DenormalizerInterface
{
    use SerializerAwareTrait;
    use DenormalizerAwareTrait;

    public function denormalize($data, $type, $format = null, array $context = array())
    {
        $serializer = $this->serializer;
        $type = substr($type, 0, -2);

        return array_map(
            function ($data) use ($serializer, $type, $format, $context) {
                return $serializer->denormalize($data, $type, $format, $context);
            },
            $data
        );
    }

    /**
     * {@inheritdoc}
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        if (!($this->serializer instanceof DenormalizerInterface)) {
            return false;
        }

        if (!is_array($data)) {
            return false;
        }

        return substr($type, -2) === '[]' && $this->serializer->supportsDenormalization($data, substr($type, 0, -2), $format);
    }
}