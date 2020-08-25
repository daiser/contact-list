<?php


namespace NoGePhone;


use NoGePhone\Contracts\LogInterface;

class NullLog implements LogInterface {
    function store(string $sentIdent, string $description) { }
}
