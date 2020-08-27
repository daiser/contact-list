<?php


namespace ContactList;


use ContactList\Contracts\IdInterface;
use ContactList\Contracts\LogInterface;

abstract class AbstractId implements IdInterface {
    protected $id;


    function __construct(string $id) {
        $this->id = $id;
    }


    protected abstract function getDescription(): string;


    public function saveTo(LogInterface $log): void {
        $log->store($this->id, $this->getDescription());
    }
}
