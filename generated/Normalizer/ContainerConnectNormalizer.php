<?php

namespace Docker\API\Normalizer;

use Joli\Jane\Reference\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class ContainerConnectNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\ContainerConnect') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\ContainerConnect) {
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
        $object = new \Docker\API\Model\ContainerConnect();
        if (!isset($context['rootSchema'])) {
            $context['rootSchema'] = $object;
        }
        if (isset($data->{'Container'})) {
            $object->setContainer($data->{'Container'});
        }
        if (isset($data->{'EndpointConfig'})) {
            $values_263 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'EndpointConfig'} as $key_265 => $value_264) {
                $values_263[$key_265] = $this->serializer->deserialize($value_264, 'Docker\\API\\Model\\EndpointConfig', 'raw', $context);
            }
            $object->setEndpointConfig($values_263);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getContainer()) {
            $data->{'Container'} = $object->getContainer();
        }
        if (null !== $object->getEndpointConfig()) {
            $values_266 = new \stdClass();
            foreach ($object->getEndpointConfig() as $key_268 => $value_267) {
                $values_266->{$key_268} = $this->serializer->serialize($value_267, 'raw', $context);
            }
            $data->{'EndpointConfig'} = $values_266;
        }

        return $data;
    }
}
