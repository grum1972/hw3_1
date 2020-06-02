<?php

//task1
function task1(array $users)
{
    //Кодируем массив в формат JSON
    $jsonStringOut = json_encode($users);
    print_r($jsonStringOut);
    echo '<br><br>';
    //Записываем в файл
    file_put_contents('users.json', $jsonStringOut);
}

//task2
function task2($fileName)
{
    //Считываем из файла
    $jsonStringIn = file_get_contents($fileName);
    // Декодируем JSON
    print_r(json_decode($jsonStringIn, true));
}

//task3
function task3(array $users)
{
    // Создаем массив со всеми именами встечающимеся в мсходном массиве
    $userNames = [];

    foreach ($users as $user) {
        $userNames[] = $user['name'];
    }
    // Создаем массив с частотой встреч имен
    $userNamesFrequency = array_count_values($userNames);
    // Выводим количество пользователей для имен
    foreach ($userNamesFrequency as $key => $frequency) {
        print_r("Количестов пользователей с именем {$key} встречается {$frequency} раз(а) \n");
    }
    echo '<br>';
}

//task4

function task4(array $users)
{
    $sumAge = 0;
    foreach ($users as $user) {
        $sumAge += $user['age'];
    }
    $countUser = sizeof($users);
    $avgAge = (int)($sumAge / $countUser);
    return $avgAge;
}