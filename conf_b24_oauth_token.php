<?php
return [
    'production' => [
        //идентификатор приложения: https://domain.bitrix24.ru/marketplace/local/list/
        'client_id' => '',
        //секретный код приложения: https://domain.bitrix24.ru/marketplace/local/list/
        'client_secret' => '',
        'scope' => 'user,task,tasks_extended',
        //домен третьего уровня клиентского проекта в Bitrix24
        'domain' => 'domain.bitrix24.ru',
        //данные пользователя bitrix24
        'login' => 'email',
        'password' => 'password',
    ]
];
?>
