<?php


namespace ContactList\Contracts;


interface LogInterface {
    function store(string $sentIdent, string $description);
}
