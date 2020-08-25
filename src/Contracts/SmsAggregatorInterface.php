<?php


namespace NoGePhone\Contracts;


interface SmsAggregatorInterface {
    function sendMessage(string $phoneNumber, string $message):SentMessageIdInterface;
}
