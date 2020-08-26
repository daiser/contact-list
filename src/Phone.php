<?php


namespace ContactList;


use ContactList\Contracts\CallIdInterface;
use ContactList\Contracts\PhoneInterface;
use ContactList\Contracts\SentMessageIdInterface;
use ContactList\Contracts\SipProviderInterface;
use ContactList\Contracts\SmsAggregatorInterface;

class Phone implements PhoneInterface {
    private $number;


    function __construct(string $number) {
        $this->number = $number;
    }


    function call(SipProviderInterface $provider): CallIdInterface {
        return $provider->makeCall($this->number);
    }


    function sendText(SmsAggregatorInterface $aggregator, string $text): SentMessageIdInterface {
        return $aggregator->sendMessage($this->number, $text);
    }
}
