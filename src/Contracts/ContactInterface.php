<?php


namespace ContactList\Contracts;


interface ContactInterface extends PersonInterface {
    /**
     * @param SipProviderInterface $provider
     *
     * @return CallIdInterface[]
     */
    function call(SipProviderInterface $provider): array;


    /**
     * @param SmtpProviderInterface $provider
     * @param string                $subject
     * @param string                $body
     *
     * @return SentEmailIdInterface[]
     */
    function sendMail(SmtpProviderInterface $provider, string $subject, string $body): array;


    /**
     * @param SmsAggregatorInterface $aggregator
     * @param string                 $message
     *
     * @return SentMessageIdInterface[]
     */
    function sendText(SmsAggregatorInterface $aggregator, string $message): array;


    /**
     * @param ContactOutputInterface $output
     */
    function show(ContactOutputInterface $output): void;


    /**
     * @param int                    $index
     * @param ContactOutputInterface $output
     */
    function showNext(int $index, ContactOutputInterface $output): void;
}
