<?php declare(strict_types=1);

namespace PBA\Barcode\Generator;

use PHPUnit\Framework\TestCase;

class Code39GeneratorTest extends TestCase
{
    public function testCode39()
    {
        $generator = new Code39Generator(false, false);
        $this->assertIsArray($generator->generate('081231723897'));
    }

    public function testCode39Checksum()
    {
        $generator = new Code39Generator(false, true);
        $this->assertIsArray($generator->generate('081231723897'));
    }

    public function testCode39Extended()
    {
        $generator = new Code39Generator(true, false);
        $this->assertIsArray($generator->generate('081231723897'));
    }

    public function testCode39ExtendedChecksum()
    {
        $generator = new Code39Generator(true, true);
        $this->assertIsArray($generator->generate('081231723897'));
    }
}
