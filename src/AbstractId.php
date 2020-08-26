<?php


namespace ContactList;


use ContactList\Contracts\IdInterface;
use ContactList\Contracts\LogInterface;

abstract class AbstractId implements IdInterface {
    protected $id;
    protected $description = 'default description';


    function __construct(string $id) {
        $this->id = $id;
    }


    public function saveTo(LogInterface $log): void {
        $log->store($this->id, $this->description);
    }
}
