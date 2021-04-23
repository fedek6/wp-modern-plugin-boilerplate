<?php

declare(strict_types=1);

namespace Fedek6\WpMPB\Tests;

use PHPUnit\Framework\TestCase;

final class HelloWorldTest extends TestCase 
{
    public function testHelloWorldString(): void
    {
        $string = "Hello world!";
        $this->assertEquals('Hello world!', $string);
    }
}
