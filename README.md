# Как развернуть проект у себя?

 - Скопировать репозиторий на свою машину при помощи команды `git clone`
 
## Backend
 - Установить зависимости в директории `lib_back`
 ```
 composer install
 ```
 - Создать БД 
 ```sql
 CREATE DATABASE library;
 ```
 - Создать пользователя 
 ```sql
 CREATE USER 'имя_пользователя'@'localhost' IDENTIFIED BY 'пароль';
 ```
 - Выдать права на БД 
 ```sql
 GRANT ALL PRIVILEGES ON library.* TO 'имя_пользователя'@'localhost';
 ```
 - Создать копию файла `/lib_back/.env.example в файле /lib_back/.env`
 - Прописать в файле `/lib_back/.env` имя БД, имя пользователя и пароль
 - Запустить миграцию в директории `lib_back`
 ```
 php artisan migrate
 ```
 - Запустить сервер
 ```
 php artisan serve
 ```
 
 ## Frontend
 - Установить зависимости в директории `lib_front`
 ```
 npm i
 ```
 - Запустить dev-сервер в директории `lib_front`
 ```
 npm run dev
 ```
 
 ## Have fun :)
