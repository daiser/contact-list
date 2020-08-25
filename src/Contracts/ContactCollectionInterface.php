<?php


namespace NoGePhone\Contracts;


use Iterator;

interface ContactCollectionInterface extends Iterator {
    function show(ContactOutputInterface $output):void;
    function find(string $needle):array;
    function getContact(int $index):ContactInterface;
}
