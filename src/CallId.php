<?php

namespace ContactList;

use ContactList\Contracts\CallIdInterface;

class CallId extends AbstractId implements CallIdInterface {
    protected $description = 'Состоялся звонок';
}
