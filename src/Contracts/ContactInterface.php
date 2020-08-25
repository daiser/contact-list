<?php


namespace ContactList\Contracts;


interface ContactInterface extends PersonInterface {
    function call(SipProviderInterface $provider):array;
    function sendMail(SmtpProviderInterface $provider, string $subject, string $body):array;
    function sendText(SmsAggregatorInterface $aggregator, string $message):array;
    function show(ContactOutputInterface $output):void;
}
