<?php


namespace ContactList;


use ContactList\Contracts\ContactInterface;
use ContactList\Contracts\ContactOutputInterface;
use ContactList\Contracts\EmailInterface;
use ContactList\Contracts\PhoneInterface;
use ContactList\Contracts\SipProviderInterface;
use ContactList\Contracts\SmsAggregatorInterface;
use ContactList\Contracts\SmtpProviderInterface;

class Contact implements ContactInterface {
    /** @var string */
    private $name;
    /** @var PhoneInterface[] */
    private $phones;
    /** @var EmailInterface[] */
    private $emails;


    function __construct(string $name, array $phones, array $emails) {
        $this->name = $name;
        $this->phones = $phones;
        $this->emails = $emails;
    }


    function show(ContactOutputInterface $output): void {
        $output->output($this->name);
    }


    function areYou(string $needle): bool {
        return $this->name === $needle;
    }


    function call(SipProviderInterface $provider): array {
        return array_map(function($phone) use ($provider) { return $phone->call($provider); }, $this->phones);
    }


    function sendMail(SmtpProviderInterface $provider, string $subject, string $body): array {
        return array_map(
            function($email) use (
                $provider,
                $subject,
                $body
            ) {
                return $email->sendMail($provider, $subject, $body);
            }, $this->emails
        );
    }


    function sendText(SmsAggregatorInterface $aggregator, string $message): array {
        return array_map(
            function($phone) use (
                $aggregator,
                $message
            ) {
                return $phone->sentText($aggregator, $message);
            }, $this->phones
        );
    }
}
