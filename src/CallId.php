<?php

namespace ContactList;

use ContactList\Contracts\CallIdInterface;

class CallId extends AbstractId implements CallIdInterface {
    private const DESCRIPTION = 'Состоялся звонок';


    protected function describe(): string {
        return self::DESCRIPTION;
    }
}
