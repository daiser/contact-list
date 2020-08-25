<?php


namespace NoGePhone;


use NoGePhone\Contracts\CallIdInterface;
use NoGePhone\Contracts\PhoneInterface;
use NoGePhone\Contracts\SentMessageIdInterface;
use NoGePhone\Contracts\SipProviderInterface;
use NoGePhone\Contracts\SmsAggregatorInterface;

class Phone implements PhoneInterface {
    private $number;


    function __construct(string $number) {
        $this->number = $number;
    }


    function call(SipProviderInterface $provider): CallIdInterface {
        return $provider->makeCall($this->number);
    }


    function sentText(SmsAggregatorInterface $aggregator, string $text): SentMessageIdInterface {
        return $aggregator->sendMessage($this->number, $text);
    }
}
