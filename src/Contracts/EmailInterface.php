<?php

namespace ContactList\Contracts;

interface EmailInterface {
    function sendMail(SmtpProviderInterface $provider, string $subject, string $body): SentEmailIdInterface;
}
