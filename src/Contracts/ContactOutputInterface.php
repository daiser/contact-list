<?php


namespace ContactList\Contracts;


interface ContactOutputInterface {
    function output(string $contactName):void;
}
