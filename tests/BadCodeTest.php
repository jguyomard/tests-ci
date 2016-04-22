<?php

class HelloWorldTest extends PHPUnit_Framework_TestCase
{
    protected $badCode;

    public function testPlop()
    {
        $ret = $this->badCode->badIndentation();
        $this->assertNull($ret);
    }

    // SetUp at the end
    public function setUp()
    {
        $this->badCode = new \Foo\Bar\BadCode;
    }
}
