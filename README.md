##### project directory
```
scribe/
app/
├─ Console/
├─ Exceptions/
├─ Http/
│   ├─ Controllers/
│   │   ├─ ApiController.php
│   │   └─ ...
│   ├─ Middleware/
│   │   ├─ ...
│   ├─  Requests/
│   │   ├─ ApiRequest.php
│   │   └─ ...
│   └─ Resources/
│       ├─ UserResource.php
│       └─ ...
├─ Models/
│   ├─ User.php
│   └─ ...
├─ Services/
│   ├─ ...
├─ ...
```

##### About project
Base project for bootstrapping Laravel projects

##### Requirements
The minimum requirement by this project template that your Web server supports PHP 8.1

##### PHP and Composer
* [PHP 8.2.*](https://computingforgeeks.com/how-to-install-php-8-2-on-ubuntu/)
* [Composer](https://getcomposer.org/doc/00-intro.md#using-composer)

##### Project setup
- **clone repo**
- **create `.env` file and paste `.env.example` into `.env`**
- **create `.env` file credentials**

```
composer install
```
##### serve app
```
php artisan serve
```
##### generate api docs after creating new endpoint
```
php artisan scribe:generate
```
* [scribe doc tutorial](https://youtu.be/a3nQrBEtufw?si=XI1613_kVKR9GOsQ)
* [scribe official doc](https://scribe.knuckles.wtf/laravel/reference/config)

#### some laravel auto-generated artisan commands
```bash
php artisan make:model NameModel
php artisan make:controller NameController
php artisan make:job NameJob
php artisan make:command NameCommand
php artisan make:observer NameObserver
php artisan make:event NameEvent
php artisan make:listener NameListerner
php artisan make:request NameRequest
php artisan make:mail NameMail
php artisan make:notification NameNotification
php artisan make:rule NameRule
php artisan make:exception NameException
```
