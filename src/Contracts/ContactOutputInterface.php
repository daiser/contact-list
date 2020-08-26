<?php


namespace ContactList\Contracts;


interface ContactOutputInterface {
    function output(string $contactName): void;
    function outputListItem(int $index, string $contactName): void;
}
