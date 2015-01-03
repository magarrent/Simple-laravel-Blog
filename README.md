#### Live Demo => http://laravel.magarrent.com/
##### User => demo
##### Password => demo

> * Author: Marc Garcia Torrent
> * Technology: Laravel 4.2
> * Info: marc@magarrent.com

## Requeriments

* PHP >= 5.4
* MySQL
* MCrypt PHP Extension

## Features

### Blog
* Nice minimal blog design provided by [Start Bootstrap](http://startbootstrap.com/)
* Contact form with custom email sending

![Home page](http://s4.postimg.org/d1xnqi7rh/Marc_Garcia_Torrent_Magarrent_Home.png)

### Admin
* Nice interface designed by [BinaryCart](http://binarycart.com/)
* Twitter bootstrap v3 integrated
* [Trumbowyg](http://alex-d.github.io/Trumbowyg/) for a nice writting
* Posts administration
* User manager

![Add posts](http://s22.postimg.org/9ux6hrhoh/www_magarrent_com_Supersecret_Administrator.png)

## Installation

First of all, download the files to your computer or server with the next URL:

[https://github.com/mgarcia96/Simple-laravel-Blog/archive/master.zip](https://github.com/mgarcia96/Simple-laravel-Blog/archive/master.zip)

You will php for install laravel, navigate to the installation folder with the terminal (/var/www) or web server path and run the next command:

`$ php composer.phar install`

And composer will begin to install all laravel files.

![Composer install](http://s22.postimg.org/9qkzijio1/screenshot_08.png)

After this, we will need to configure database, edit `app/config/database.php` and enter your MySQL credentials:

![Database config](http://s11.postimg.org/nz9ig2jzn/screenshot_09.png)

And if you need to send emails configure `app/config/mail.php` with your mail credentials.
If you need to send emails with the contact form, in the `BlogController` change the email.
