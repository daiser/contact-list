<?php

namespace ContactList;

use ContactList\Contracts\CallIdInterface;
use ContactList\Contracts\LogInterface;

class CallId extends AbstractId implements CallIdInterface {
    private const DESCRIPTION = 'Состоялся звонок';


    public function saveTo(LogInterface $log): void {
        $log->store($this->id, self::DESCRIPTION);
    }
}
