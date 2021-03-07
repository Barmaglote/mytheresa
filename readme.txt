Пароль от Postgres: 
mysecret

Запускаем контейнер
docker run -d -p 5432:54321 --name postgres -e POSTGRES_PASSWORD=mysecret --hostname postgressvr postgres -c shared_buffers=256MB -c max_connections=200

подключаюсь к контейнеру, чтобы создать служебную учетную запись
docker exec -it postgres bash

Запускаем
psql -U postgres

Создаем служебную учетную запись:
CREATE USER booksservice;

Создаем базу данных:
CREATE DATABASE booksdb;

Даем права на базу данных созданной служебной учетной записи
GRANT ALL PRIVILEGES ON DATABASE booksdb TO booksservice;

Задаем служебной учетке пароль
ALTER USER booksservice WITH password 'bookspassword'

Чтобы можно было определять пути прямо в контроллере
composer require annotations

Установка Doctrine для работы с БД (ORM)
composer require symfony/orm-pack
composer require --dev symfony/maker-bundle

Создаем объект БД (класс)
php bin/console make:entity

Подготовка миграции
php bin/console make:migration
Отработка миграций
php bin/console doctrine:migrations:migrate

Создание контроллеров
php bin/console make:crud Book

Аналог Seeds в Laravel, установка 
composer require --dev orm-fixtures

Запускаем seed
php bin/console doctrine:fixtures:load



