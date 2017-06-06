# Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)
<br>
<code>$ cd /var/www/html</code>      
<code>$ git clone https://github.com/crew1274/real_time</code>      
<code>$ cd real_time</code>       
<code>$ composer install</code>     
<code>$ cp .env.example .env</code>     
> **Note:** 檢查 .env的設定，預設使用SQLite3，需要PHP SQLite Extension。   

<code>$ touch database/database.sqlite</code><br>
<code>$ php artisan key:generate</code><br>
<code>$ php artisan migrate --seed</code><br>
<code>$ cp storage/app/control_backup.json storage/app/control.json</code><br>
<code>$ sudo chmod 755 -R ../real_time/</code><br>
<code>$ sudo chmod o+w -R storage/</code><br>
<code>$ sudo vim /etc/apache2/sites-available/real_time.conf</code><br>
```sh
    ServerAdmin webmaster@localhost
    DocumentRoot /var/www/html/real_time/public

    <Directory /var/www/html/real_time>
        AllowOverride All
    </Directory>
```
<code>$ sudo a2dissite 000-default.conf</code>      
<code>$ sudo a2ensite real_time.conf</code>     
<code>$ sudo a2enmod rewrite</code>     
<code>$ sudo service apache2 restart</code>     
