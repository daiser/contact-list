<?php


namespace ContactList;


use ContactList\Contracts\LogInterface;
use ContactList\Contracts\SentEmailIdInterface;

class SentMailId extends AbstractId implements SentEmailIdInterface {
    private const DESCRIPTION = 'Отправлено электронное письмо';


    public function saveTo(LogInterface $log): void {
        $log->store($this->id, self::DESCRIPTION);
    }
}
