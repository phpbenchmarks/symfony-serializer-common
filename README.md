<p align="center">
  <img src="http://www.phpbenchmarks.com/images/logo_github.png">
  <br>
  <a href="http://www.phpbenchmarks.com" target="_blank">www.phpbenchmarks.com</a>
</p>

## What is www.phpbenchmarks.com ?

You will find lot of benchmarks for PHP frameworks and template engines.

You can compare results between Apache Bench and Siege, and PHP 5.6 to 7.3.

## What is this repository ?

It's benchmark common code for Symfony serializer benchmarks.

Switch branch to select your Symfony serializer major version and benchmark you want to see.

See all Symfony serializer benchmarked versions on [phpbenchmarks/symfony-serializer](https://github.com/phpbenchmarks/symfony-serializer).

You can find how we benchmark on [phpbenchmarks.com](http://phpbenchmarks.loc:8081/fr/documentation/benchmarking-protocol).

## How versions works ?

We do not follow semantic version for this repository. Here is an explanation about our versioning system:

`X` related to Symfony serializer major version (`2` Symfony serializer ^2, `3` Symfony serializer ^3, `4` Symfony serializer ^4)

`Y` benchmark type (`6` Serialization of Hello World, `7` Serialization to a small JSON, `8` Serialization to a big JSON)

`Z` new version, not just bugfix and could contains BC

## Benchmarks

You can find all Symfony serializer benchmarks results on [phpbenchmarks.com](http://phpbenchmarks.com/en/benchmark/symfony-json-serializer/version).

Scores are too low ? Do not hesitate to create a pull request, and [ask a new benchmark](http://phpbenchmarks.com/en/contact)!
