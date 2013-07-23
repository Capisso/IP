<?php

class IPv4Test extends PHPUnit_Framework_TestCase {

    public function testNewAddress() {
        $address = new \Capisso\Ip\IPv4\Address('127.0.0.1');

        $this->assertEquals($address->address, '127.0.0.1');
    }

    public function testValidity() {
        $first = new \Capisso\Ip\IPv4\Address('127.0.0.1');
        $second = new \Capisso\Ip\IPv4\Address('string');

        $this->assertTrue($first->valid());
        $this->assertFalse($second->valid());
    }

    public function testException() {

        try {
            $address = new \Capisso\Ip\IPv4\Address(1234);
        } catch(\Capisso\Ip\AddressException $expected) {
            return;
        }

        $this->fail('An expected exception has not been raised.');
    }

}
