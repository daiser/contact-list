<?php


namespace ContactList\Contracts;


interface SipProviderInterface {
    function makeCall(string $phoneNumber): CallIdInterface;
}
