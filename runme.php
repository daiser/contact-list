<?php

namespace ContactList;

require_once __DIR__ . '/vendor/autoload.php';

$log           = new ConsoleLog();
$smsAggregator = new Megafon();
$output        = new ConsoleOutput();

$contacts = new ContactList();

$contacts->addContact(
    new Contact(
        'Alice',
        [new Phone('111-11'), new Phone('111-22')],
        [new Email('alice@example.com')]
    )
);
$contacts->addContact(
    new Contact(
        'Bob',
        [new Phone('222-11'), new Phone('222-22')],
        [new Email('bob@example.com'), new Email('mega-bob@example.com')]
    )
);

echo "Контакты:" . PHP_EOL;
$contacts->show($output);
echo PHP_EOL;

echo "Ищем 'Alice'" . PHP_EOL;
$contacts->find('Alice')->show($output);
echo PHP_EOL;

foreach ($contacts as $contact) {
    $sentIds = $contact->sendText($smsAggregator, 'Привет! Приходи в гости в субботу.');
    foreach ($sentIds as $sentId)
        $sentId->saveTo($log);
}
