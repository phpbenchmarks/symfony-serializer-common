<?php

namespace PhpBenchmarks\SymfonySerializerCommon\Normalizer;

use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class OverloadNormalizer739 implements NormalizerInterface
{
    public function supportsNormalization($data, $format = null, array $context = [])
    {
        return $data instanceof UnknownObject;
    }
    
    public function normalize($object, $format = null, array $context = [])
    {
        throw new \Exception(__CLASS__ . '::' . __FUNCTION__ . ' should not be called.');
    }
}
