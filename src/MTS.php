<?php


namespace ContactList;


use ContactList\Contracts\SentMessageIdInterface;
use ContactList\Contracts\SmsAggregatorInterface;

class MTS implements SmsAggregatorInterface {
    function sendMessage(string $phoneNumber, string $message): SentMessageIdInterface {
        echo "МТС: отправка смс '{$message}' на номер {$phoneNumber}." . PHP_EOL;

        return new SentMessageId('mts:' . get_rand_str(20));
    }
}
