<?php

namespace phptest\example;
use PHPUnit\Framework\TestCase;

class DependencyFailureTest extends TestCase
{
    // Example 2.3 利用测试之间的依赖关系
    public function testOne()
    {
        $this->assertTrue(false);
    }

    /**
     * @depends testOne
     */
    public function testTwo()
    {
    }
}