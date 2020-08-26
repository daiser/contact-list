<?php


namespace ContactList\Contracts;


interface ContactOutputInterface {
    function output(string $contactName): void;
    function outputNext(string $contactName, int $index): void;
}
