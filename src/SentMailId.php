<?php


namespace ContactList;


use ContactList\Contracts\SentEmailIdInterface;

class SentMailId extends AbstractIdent implements SentEmailIdInterface {
    protected $description = 'Отправлено электронное письмо';
}
