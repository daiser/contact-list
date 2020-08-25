<?php


namespace ContactList;


use ContactList\Contracts\LogInterface;

class NullLog implements LogInterface {
    function store(string $sentIdent, string $description) { }
}
