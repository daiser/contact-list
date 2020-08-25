<?php

namespace ContactList;

use ContactList\Contracts\SentMessageIdInterface;

class SentMessageId extends AbstractIdent implements SentMessageIdInterface {
    protected $description = 'Отправлена СМСка';
}
