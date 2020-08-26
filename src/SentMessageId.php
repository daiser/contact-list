<?php

namespace ContactList;

use ContactList\Contracts\SentMessageIdInterface;

class SentMessageId extends AbstractId implements SentMessageIdInterface {
    protected $description = 'Отправлена СМСка';
}
