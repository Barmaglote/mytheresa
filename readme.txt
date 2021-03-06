Пароль от Postgres: 
mysecret

Запускаем контейнер
docker run --name postgres -e POSTGRES_PASSWORD=mysecretpassword -d postgres

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

Установка Doctrine для работы с БД (ORM)
composer require symfony/orm-pack
composer require --dev symfony/maker-bundle

