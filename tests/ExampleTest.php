<?php

namespace PackageSkeleton\Tests;

use PHPUnit_Framework_TestCase;
use PackageSkeleton\Example;

class ExampleTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Example
     */
    protected $example;

    protected function setUp()
    {
        $this->example = new Example();
    }

    /**
     * @test
     */
    public function it_says_phrase()
    {
        $this->assertEquals('Hello', $this->example->say('Hello'));
    }
}
