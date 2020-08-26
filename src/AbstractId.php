<?php


namespace ContactList;


use ContactList\Contracts\IdInterface;

abstract class AbstractId implements IdInterface {
    protected $id;


    function __construct(string $id) {
        $this->id = $id;
    }
}
