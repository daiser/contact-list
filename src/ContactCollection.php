<?php


namespace ContactList;


use ContactList\Contracts\ContactCollectionInterface;
use ContactList\Contracts\ContactInterface;
use ContactList\Contracts\ContactOutputInterface;
use Webmozart\Assert\Assert;

class ContactCollection implements ContactCollectionInterface {
    /** @var ContactInterface[] */
    protected $items;
    private   $position = 0;


    function __construct(array $items) {
        $this->items = $items;
    }


    function show(ContactOutputInterface $output): void {
        $index = 1;
        foreach ($this->items as $contact) {
            $contact->showNext($index++, $output);
        }
    }


    function find(string $needle): ContactCollectionInterface {
        return new self(
            array_filter(
                $this->items,
                function($contact) use ($needle) {
                    return $contact->areYou($needle);
                }
            )
        );
    }


    function getContact(int $index): ContactInterface {
        Assert::keyExists($this->items, $index);

        return $this->items[$index];
    }


    public function current() {
        return $this->items[$this->position];
    }


    public function next() {
        ++$this->position;
    }


    public function key() {
        return $this->position;
    }


    public function valid() {
        return isset($this->items[$this->position]);
    }


    public function rewind() {
        $this->position = 0;
    }
}
