<?php

namespace ContactList;

use ContactList\Contracts\LogInterface;
use ContactList\Contracts\SentMessageIdInterface;

class SentMessageId extends AbstractId implements SentMessageIdInterface {
    private const DESCRIPTION = 'Отправлена СМСка';


    public function saveTo(LogInterface $log): void {
        $log->store($this->id, self::DESCRIPTION);
    }
}
