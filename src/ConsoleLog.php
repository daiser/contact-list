<?php


namespace NoGePhone;


use DateTime;
use NoGePhone\Contracts\LogInterface;

class ConsoleLog implements LogInterface {
    function store(string $sentIdent, string $description) {
        $now = (new DateTime())->format('d.m.Y H:i:s.u');
        echo "Log: {$now} {$description} (id={$sentIdent}" . PHP_EOL;
    }
}
