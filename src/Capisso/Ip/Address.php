<?php

namespace Capisso\Ip;

abstract class Address {

    public $address;

    public function __construct($address) {
        if(!is_string($address)) {
            throw new AddressException('Address must be string.');
        }
        $this->address = $address;
    }

    abstract protected function valid();

}
