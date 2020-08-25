<?php

namespace ContactList;

require_once __DIR__ . '/../vendor/autoload.php';

$log    = new ConsoleLog();
$smsAgg = new Megafon();
$out    = new ConsoleOutput();

$list = new ContactList([]);

$list->addContact(
    new Contact(
        'Alice', [
        new Phone('111-11'),
        new Phone('111-22')
    ], [new Email('alice@example.com')]
    )
);
$list->addContact(
    new Contact(
        'Bob', [
        new Phone('222-11'),
        new Phone('222-22')
    ], [new Email('bob@example.com'), new Email('mega-bob@example.com')]
    )
);

echo "Контакты:" . PHP_EOL;
$list->show($out);
echo PHP_EOL;

echo "Ищем 'Alice'" . PHP_EOL;
$list->find('Alice')->show($out);
echo PHP_EOL;

foreach ($list as $contact) {
    $ids = $contact->sendText($smsAgg, 'Привет! Приходи в гости.');
    foreach ($ids as $id)
        $id->store($log);
}
