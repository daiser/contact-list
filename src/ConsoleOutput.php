<?php


namespace ContactList;


use ContactList\Contracts\ContactOutputInterface;

class ConsoleOutput implements ContactOutputInterface {
    function output(string $contactName): void {
        echo $contactName . PHP_EOL;
    }
}
