<?php


namespace ContactList\Contracts;


interface ContactListInterface extends ContactCollectionInterface {
    function addContact(ContactInterface $contact): int;
    function removeContact(int $index): void;
}
