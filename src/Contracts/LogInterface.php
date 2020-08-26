<?php


namespace ContactList\Contracts;


interface LogInterface {
    function store(string $sentId, string $description): void;
}
