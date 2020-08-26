<?php


namespace ContactList;


use ContactList\Contracts\ContactOutputInterface;

class ConsoleOutput implements ContactOutputInterface {
    function output(string $contactName): void {
        echo $contactName;
    }


    public function outputListItem(int $index, string $contactName): void {
        echo "{$index}. {$contactName}" . PHP_EOL;
    }
}
