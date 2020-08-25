<?php


namespace ContactList\Contracts;


interface PhoneInterface {
    function call(SipProviderInterface $provider):CallIdInterface;
    function sentText(SmsAggregatorInterface $aggregator, string $text):SentMessageIdInterface;
}
