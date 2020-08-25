<?php


namespace NoGePhone\Contracts;


interface LogInterface {
    function store(string $sentIdent, string $description);
}
