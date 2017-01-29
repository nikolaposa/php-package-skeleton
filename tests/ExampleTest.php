<?php
/**
 * This file is part of the :package_name package.
 *
 * Copyright (c) :vendor
 *
 * For full copyright and license information, please refer to the LICENSE file,
 * located at the package root folder.
 */

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
