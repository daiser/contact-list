<?php


namespace ContactList;


use ContactList\Contracts\ContactOutputInterface;

class ConsoleOutput implements ContactOutputInterface {
    function output(string $contactName): void {
        echo $contactName;
    }


    public function outputNext(string $contactName, int $index): void {
        echo "{$index}. {$contactName}" . PHP_EOL;
    }
}
