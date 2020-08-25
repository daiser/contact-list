<?php


namespace NoGePhone\Contracts;


interface SmtpProviderInterface {
    function sendMail(string $address, string $subject, string $body):SentEmailIdInterface;
}
