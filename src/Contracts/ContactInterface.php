<?php


namespace NoGePhone\Contracts;


interface ContactInterface extends PersonInterface {
    function call():array;
    function sendMail(string $subject, string $body):array;
    function sendText(string $message):array;
    function show(ContactOutputInterface $output):void;
}
