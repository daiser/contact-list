<?php

namespace ContactList;

use ContactList\Contracts\SentMessageIdInterface;

class SentMessageId extends AbstractId implements SentMessageIdInterface {
    private const DESCRIPTION = 'Отправлена СМСка';


    protected function describe(): string {
        return self::DESCRIPTION;
    }
}
