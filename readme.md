Php-8.2
https://windows.php.net/download/
VS16 x64 Thread Safe (2024-Sep-25 08:54:58) - по-моему этот будет совместим - у себя его тестировал


https://curl.se/windows/ - вроде как должен быть из коробки


Скачать в папку в корне диска например H
H:\php/8.2/

H:\soap-example\php.ini - 'это файл из репозитория '
в нем заменить пути
extension=H:\php\8.2\ext\php_curl.dll
extension=H:\php\8.2\ext\php_soap.dll

Если изменился путь

**Проверка  Soap**

запустить
H:\php\8.2\php.exe -c H:\soap-example\php.ini  -S localhost:8000

и в другом терминале  
H:\php\8.2\php.exe -c H:\soap-example\php.ini H:\php\soap-example\client.php

Ответ
H:\php\8.2\php.exe -c H:\php\8.2\php-my.ini-development H:\php\soap-example\client.php
The sum is: 8
Process finished with exit code 0

Значит OK

**Проверка  curl**
H:\php\8.2\php.exe -c H:\php\8.2\php-my.ini-development H:\php\soap-example\test_curl.php
{"test":"OK"}