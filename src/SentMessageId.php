<?php

namespace NoGePhone;

use NoGePhone\Contracts\SentMessageIdInterface;

class SentMessageId extends AbstractIdent implements SentMessageIdInterface {
    protected $description = 'Отправлена СМСка';
}
