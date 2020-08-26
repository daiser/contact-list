<?php


namespace ContactList\Contracts;


interface IdInterface {
    function saveTo(LogInterface $log): void;
}
