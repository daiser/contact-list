<?php


namespace ContactList\Contracts;


interface IdentInterface {
    function store(LogInterface $log):void;
}
