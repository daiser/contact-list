<?php


namespace ContactList\Contracts;


use Iterator;

interface ContactCollectionInterface extends Iterator {
    function show(ContactOutputInterface $output): void;
    function find(string $needle): ContactCollectionInterface;
    function getContact(int $index): ContactInterface;
}
