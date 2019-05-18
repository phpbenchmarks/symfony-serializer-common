<?php

use PhpBenchmarks\BenchmarkJsonSerializationSmallOverload\BenchmarkService;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;
use PhpBenchmarks\SymfonySerializerCommon\Normalizer\ObjectToSerializeNormalizer;

$normalizers = [];
for ($i = 1; $i <= 99; $i++) {
    $class = "PhpBenchmarks\\SymfonySerializerCommon\\Normalizer\\OverloadNormalizer$i";
    $normalizers[] = new $class();
}
$normalizers[] = new ObjectToSerializeNormalizer();

$serializer = new Serializer($normalizers, [new JsonEncoder()]);
$benchmarkService = new BenchmarkService();

if ($benchmarkService->isWriteToResponseBody()) {
    echo $serializer->serialize($benchmarkService->getDataToSerialize(), 'json');
} else {
    $serializer->serialize($benchmarkService->getDataToSerialize(), 'json');
}
