<?php


namespace ContactList;


use ContactList\Contracts\SentEmailIdInterface;

class SentMailId extends AbstractId implements SentEmailIdInterface {
    protected $description = 'Отправлено электронное письмо';
}
