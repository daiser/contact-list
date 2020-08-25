<?php

namespace NoGePhone;

use NoGePhone\Contracts\SentMessageIdInterface;
use NoGePhone\Contracts\SmsAggregatorInterface;

class Megafon implements SmsAggregatorInterface {
    function sendMessage(string $phoneNumber, string $message): SentMessageIdInterface {
        echo "Мегафон: отправка смс '{$message}' на номер {$phoneNumber}." . PHP_EOL;

        return new SentMessageId('megafon:' . get_rand_str(20));
    }
}
