<?php


namespace ContactList;


use ContactList\Contracts\ContactInterface;
use ContactList\Contracts\ContactListInterface;

class ContactList extends ContactCollection implements ContactListInterface {
    public function __construct(array $items = []) { parent::__construct($items); }


    function addContact(ContactInterface $contact): int {
        $this->items[] = $contact;

        return count($this->items) - 1;
    }


    function removeContact(int $index): void {
        unset($this->items[$index]);
    }
}
