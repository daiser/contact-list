<?php

namespace NoGePhone;

use NoGePhone\Contracts\SentEmailIdInterface;
use NoGePhone\Contracts\SmtpProviderInterface;

class Yandex implements SmtpProviderInterface {
    function sendMail(string $address, string $subject, string $body): SentEmailIdInterface {
        echo "Сообщение '{$subject}' отправлено на адрес '{$address}. Длина сообщения: " . mb_strlen($body) . PHP_EOL;

        return new SentMailId('yandex:' . get_rand_str(10));
    }
}
