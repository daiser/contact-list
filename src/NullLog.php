<?php


namespace ContactList;


use ContactList\Contracts\LogInterface;

class NullLog implements LogInterface {
    function store(string $sentId, string $description): void { }
}
