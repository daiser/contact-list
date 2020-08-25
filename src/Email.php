<?php


namespace ContactList;


use ContactList\Contracts\EmailInterface;
use ContactList\Contracts\SentEmailIdInterface;
use ContactList\Contracts\SmtpProviderInterface;

class Email implements EmailInterface {
    private $email;


    function __construct(string $email) {
        $this->email = $email;
    }


    function sendMail(SmtpProviderInterface $provider, string $subject, string $body): SentEmailIdInterface {
        return $provider->sendMail($this->email,$subject,$body);
    }
}
