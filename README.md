## Ответы на вопросы

1. Перечислите список composer-пакетов, которые использует фреймворк Laravel после установки.

```
"require": {
    "php": "^7.3|^8.0",
    "fruitcake/laravel-cors": "^2.0",
    "guzzlehttp/guzzle": "^7.0.1",
    "laravel/framework": "^8.75",
    "laravel/sanctum": "^2.11",
    "laravel/tinker": "^2.5"
},
"require-dev": {
    "facade/ignition": "^2.5",
    "fakerphp/faker": "^1.9.1",
    "laravel/sail": "^1.0.1",
    "mockery/mockery": "^1.4.4",
    "nunomaduro/collision": "^5.10",
    "phpunit/phpunit": "^9.5.10"
},

```

2. Изучите директорию `config` и опишите какие файлы хранятся в этой директории.

В директории `config` хранятся файлы, которые формируют конфигурации приложения.
База данных приложения может быть настроена в файле database.php. Можно установить параметры конфигурации, которые будут использоваться различными базами данных. Также можно использовать настройки по умолчанию.


3. В какой директории хранятся основные файлы (классы) с бизнес-логикой приложения?

В директории `App\Actions`