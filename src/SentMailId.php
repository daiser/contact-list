<?php


namespace ContactList;


use ContactList\Contracts\SentEmailIdInterface;

class SentMailId extends AbstractId implements SentEmailIdInterface {
    private const DESCRIPTION = 'Отправлено электронное письмо';


    protected function describe(): string {
        return self::DESCRIPTION;
    }
}
