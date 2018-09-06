## Project Wrapper for Akane Framework v3

*Wrapper for Akane Framework v3 based website project*

[Akane Framework v3](http://akane.webhade.com)

Version: 0.0.1

Last Update: 2017-10-08

Author: [WebHade Creative](http://www.webhade.id)
___

### Minimum Requirement

1. PHP 5.3.9 and up
2. MySQL / MariaDB
3. Composer

### Instalation

create database called `akane3` and running this command on your terminal/cmd based on your OS.

#### Linux

```sh
$ composer create-project --prefer-dist inuvalogic/akanewrapper yourproject
$ cd yourproject
$ vendor/bin/phinx migrate
$ vendor/bin/phinx seed:run
```

#### Windows

```sh
C:\xampp\htdocs> composer create-project --prefer-dist inuvalogic/akanewrapper yourproject
C:\xampp\htdocs> cd yourproject
C:\xampp\htdocs> vendor\bin\phinx.bat migrate
C:\xampp\htdocs> vendor\bin\phinx.bat seed:run
```

### Documentation

For futher detailed documentation can be found here

[akane.webhade.com](http://akane.webhade.com)

___

## Contribute

Feel free to contribute to this project

visit our site here

[akane.webhade.com](http://akane.webhade.com)

### Change Log

v.0.0.1 Master Release (Oct 8, 2017)
- minimum wrapper for akane3
- sample database