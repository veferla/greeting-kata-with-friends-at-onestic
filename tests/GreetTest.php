<?php

namespace Kata\Tests;

use Kata\Greeter;
use PHPUnit\Framework\TestCase;

class GreetTest extends TestCase
{
    public function test_1_greet_class()
    {
        $this->assertInstanceOf(Greeter::class, (new Greeter()));
    }

    public function test_2_greet()
    {
        $greeter = new Greeter();

        $this->assertEquals("Hello, Bob.", $greeter->greet("Bob"));
    }
}