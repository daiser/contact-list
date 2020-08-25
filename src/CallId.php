<?php

namespace NoGePhone;

use NoGePhone\Contracts\CallIdInterface;

class CallId extends AbstractIdent implements CallIdInterface {
    protected $description = 'Состоялся звонок';
}
