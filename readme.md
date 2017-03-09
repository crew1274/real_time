# Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)
<br>
<code>$ composer install</code><br>
<code>$ cp .env.example .env</code><br>
check .env<br>
<code>$ php artisan key:generate</code><br>
<code>$ php artisan migrate</code><br>
<code>$ php artisan db:seed</code><br>
<code>$ npm install</code><br>
<code>$ gulp</code><br>
<code>$ cp storage/app/control_backup.json storage/app/control.json</code><br>
<code>$ sudo chmod 755 -R ../real_time/</code><br>
<code>$ sudo chmod o+w -R storage/</code><br>
<code>$ sudo vim /etc/apache2/sites-available/real_time.conf</code><br>
'''
    ServerAdmin webmaster@localhost
    DocumentRoot /var/www/html/real_time/public

    <Directory /var/www/html/real_time>
        AllowOverride All
    </Directory>
'''
<code>$ sudo a2dissite 000-default.conf</code><br>
<code>$ sudo a2ensite real_time.conf</code><br>
<code>$ sudo a2enmod rewrite</code><br>
<code>$ sudo service apache2 restart</code>
