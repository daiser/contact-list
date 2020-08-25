<?php


namespace ContactList;


use ContactList\Contracts\IdentInterface;
use ContactList\Contracts\LogInterface;

abstract class AbstractIdent implements IdentInterface {
    protected $id;
    protected $description = 'default description';


    function __construct(string $id) {
        $this->id = $id;
    }


    public function store(LogInterface $log): void {
        $log->store($this->id, $this->description);
    }
}
