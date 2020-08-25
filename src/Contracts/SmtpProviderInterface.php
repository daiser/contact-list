<?php


namespace ContactList\Contracts;


interface SmtpProviderInterface {
    function sendMail(string $address, string $subject, string $body):SentEmailIdInterface;
}
