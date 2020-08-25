<?php


namespace NoGePhone;


use NoGePhone\Contracts\ContactInterface;
use NoGePhone\Contracts\ContactOutputInterface;
use NoGePhone\Contracts\EmailInterface;
use NoGePhone\Contracts\PhoneInterface;
use NoGePhone\Contracts\SipProviderInterface;
use NoGePhone\Contracts\SmsAggregatorInterface;
use NoGePhone\Contracts\SmtpProviderInterface;

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
