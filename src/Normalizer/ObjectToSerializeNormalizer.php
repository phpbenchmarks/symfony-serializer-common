<?php

namespace PhpBenchmarks\SymfonySerializerCommon\Normalizer;

use PhpBenchmarks\BenchmarkJsonSerializationSmallOverload\ObjectToSerialize\ObjectToSerialize;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ObjectToSerializeNormalizer implements NormalizerInterface
{
    public function supportsNormalization($data, $format = null, array $context = [])
    {
        return $data instanceof ObjectToSerialize;
    }

    /** @param ObjectToSerialize $object */
    public function normalize($object, $format = null, array $context = [])
    {
        return [
            'property1' => $object->getProperty1(),
            'property2' => $object->getProperty2(),
            'property3' => $object->getProperty3(),
            'property4' => $object->getProperty4(),
            'property5' => $object->getProperty5(),
            'property6' => $object->getProperty6(),
            'property7' => $object->getProperty7(),
            'property8' => $object->getProperty8(),
            'property9' => $object->getProperty9(),
            'property10' => $object->getProperty10()
        ];
    }
}
