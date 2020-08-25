<?php


namespace NoGePhone\Contracts;


interface PhoneInterface {
    function call(SipProviderInterface $provider):CallIdInterface;
    function sentText(SmsAggregatorInterface $aggregator, string $text):CallIdInterface;
}
