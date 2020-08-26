<?php


namespace ContactList;


use DateTime;
use ContactList\Contracts\LogInterface;

class ConsoleLog implements LogInterface {
    function store(string $sentId, string $description): void {
        $now = (new DateTime())->format('d.m.Y H:i:s.u');
        echo "Log: {$now} {$description} (id={$sentId})" . PHP_EOL;
    }
}
