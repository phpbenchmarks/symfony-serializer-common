<?php

use PhpBenchmarks\BenchmarkJsonSerializationHelloWorld\BenchmarkService;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;

$serializer = new Serializer([], [new JsonEncoder()]);

if (BenchmarkService::isWriteToResponseBody()) {
    echo $serializer->serialize(BenchmarkService::getDataToSerialize(), 'json');
} else {
    $serializer->serialize(BenchmarkService::getDataToSerialize(), 'json');
}
