<?php

namespace PBA\Barcode\Generator;

/**
 * Interface for all code generators
 *
 * @package Generator
 */
interface GeneratorInterface
{
    public function generate(string $code): array;
}
