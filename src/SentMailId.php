<?php


namespace NoGePhone;


use NoGePhone\Contracts\SentEmailIdInterface;

class SentMailId extends AbstractIdent implements SentEmailIdInterface {
    protected $description = 'Отправлено электронное письмо';
}
