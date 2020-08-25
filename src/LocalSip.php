<?php


namespace ContactList;


use ContactList\Contracts\CallIdInterface;
use ContactList\Contracts\SipProviderInterface;

class LocalSip implements SipProviderInterface {

    function makeCall(string $phoneNumber): CallIdInterface {
        echo "Местный SIP: звонок на номер {$phoneNumber}." . PHP_EOL;

        return new CallId('local-sip:' . get_rand_str(8));
    }
}
