<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class CalculoTest extends TestCase
{
    public function test_suma_correcta(): void
    {
       $this->assertEquals(5, 2 + 2);;
    }
}