<?php

namespace ContactList;

use ContactList\Contracts\CallIdInterface;

class CallId extends AbstractIdent implements CallIdInterface {
    protected $description = 'Состоялся звонок';
}
