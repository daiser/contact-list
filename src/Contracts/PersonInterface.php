<?php


namespace ContactList\Contracts;


interface PersonInterface {
    function areYou(string $needle):bool;
}
