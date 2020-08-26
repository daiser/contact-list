<?php


namespace ContactList\Contracts;


interface SmsAggregatorInterface {
    function sendMessage(string $phoneNumber, string $message): SentMessageIdInterface;
}
