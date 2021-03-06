<?php

namespace Docker\API\Normalizer;

use Joli\Jane\Reference\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class NetworkCreateConfigNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\NetworkCreateConfig') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\NetworkCreateConfig) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (empty($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['rootSchema'] ?: null);
        }
        $object = new \Docker\API\Model\NetworkCreateConfig();
        if (!isset($context['rootSchema'])) {
            $context['rootSchema'] = $object;
        }
        if (isset($data->{'Name'})) {
            $object->setName($data->{'Name'});
        }
        if (isset($data->{'Driver'})) {
            $object->setDriver($data->{'Driver'});
        }
        if (isset($data->{'IPAM'})) {
            $object->setIPAM($this->serializer->deserialize($data->{'IPAM'}, 'Docker\\API\\Model\\IPAM', 'raw', $context));
        }
        if (isset($data->{'Internal'})) {
            $object->setInternal($data->{'Internal'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getName()) {
            $data->{'Name'} = $object->getName();
        }
        if (null !== $object->getDriver()) {
            $data->{'Driver'} = $object->getDriver();
        }
        if (null !== $object->getIPAM()) {
            $data->{'IPAM'} = $this->serializer->serialize($object->getIPAM(), 'raw', $context);
        }
        if (null !== $object->getInternal()) {
            $data->{'Internal'} = $object->getInternal();
        }

        return $data;
    }
}
