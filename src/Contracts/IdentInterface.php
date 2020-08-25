<?php


namespace NoGePhone\Contracts;


interface IdentInterface {
    function store(LogInterface $log):void;
}
