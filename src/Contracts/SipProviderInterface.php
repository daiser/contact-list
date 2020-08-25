<?php


namespace NoGePhone\Contracts;


interface SipProviderInterface {
    function makeCall(string $phoneNumber):CallIdInterface;
}
