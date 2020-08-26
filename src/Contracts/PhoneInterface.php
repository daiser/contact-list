<?php


namespace ContactList\Contracts;


interface PhoneInterface {
    function call(SipProviderInterface $provider):CallIdInterface;
    function sendText(SmsAggregatorInterface $aggregator, string $text): SentMessageIdInterface;
}
