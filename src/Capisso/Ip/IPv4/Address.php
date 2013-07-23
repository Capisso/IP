<?php
namespace Capisso\Ip\IPv4;

use Capisso\Ip\AddressException;

class Address extends \Capisso\Ip\Address {

    public function __construct($address) {
        if(!is_string($address)) {
            throw new AddressException('Address must be string.');
        }
        $this->address = $address;
    }

    /**
     * Determine if address is valid IPv4
     *
     * @return boolean
     */
    public function valid() {
        return filter_var($this->address, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) !== false;
    }

}
