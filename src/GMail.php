<?php


namespace ContactList;


use ContactList\Contracts\SentEmailIdInterface;
use ContactList\Contracts\SmtpProviderInterface;

class GMail implements SmtpProviderInterface {
    function sendMail(string $address, string $subject, string $body): SentEmailIdInterface {
        echo "Message '{$subject}' sent to '{$address}. Length: " . mb_strlen($body) . PHP_EOL;

        return new SentMailId('gmail:' . get_rand_str(10));
    }
}
