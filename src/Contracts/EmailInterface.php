<?php

namespace NoGePhone\Contracts;

interface EmailInterface {
    function sendMail(SmtpProviderInterface $provider, string $subject, string $body): SentMessageIdInterface;
}
