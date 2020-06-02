<?php

require_once('functions.php');

// Создаем массив имен
$names = [
    'John',
    'Alex',
    'Lisa',
    'Pete',
    'Mike'
];

echo '<pre>';
// Создаем массив пользоваиелей
$users = [];
for ($i = 0; $i < 5; $i++) {
    $user = [
        'id' => $i,
        'name' => $names[mt_rand(0, 4)],
        'age' => mt_rand(18, 45)
    ];
    $users[] = $user;
}
// Выводим массив пользователей
print_r($users);
echo '<br><br>';

// TASK #1
echo 'TASK1' . '<br><br>';

task1($users);

// TASK #2
echo 'TASK2' . '<br><br>';

$fileName = 'users.json';

task2($fileName);

// TASK #3
echo 'TASK3' . '<br><br>';
task3($users);

// TASK #4
echo 'TASK4' . '<br><br>';

$avgAge = task4($users);

print_r("Средний возраст пользователей: {$avgAge}");

