<?php
require_once 'Client.php';
class MyGreeter_Client_Test extends \PHPUnit_Framework_TestCase
{
    private $greeter;

    public function setUp()
    {
        parent::setUp();
        $this->greeter = new Client("");
    }

    public function test_Instance()
    {
        $this->assertEquals(
            get_class($this->greeter),
            'Client'
        );
    }

    public function test_getGreeting()
    {
        $this->assertTrue(
            strlen($this->greeter->getGreeting()) > 0
        );
    }
}