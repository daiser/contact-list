<?php


namespace NoGePhone;


use NoGePhone\Contracts\SentMessageIdInterface;
use NoGePhone\Contracts\SmsAggregatorInterface;

class MTS implements SmsAggregatorInterface {
    function sendMessage(string $phoneNumber, string $message): SentMessageIdInterface {
        echo "МТС: отправка смс '{$message}' на номер {$phoneNumber}." . PHP_EOL;

        return new SentMessageId('mts:' . get_rand_str(20));
    }
}
