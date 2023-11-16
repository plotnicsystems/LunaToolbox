## LunaToolbox

The LunaToolbox simple PHP Framework

<p align="center">
<a href="https://github.com/plotnicsystems/lunatoolbox/actions/workflows/codeql-analysis.yml">
    <img src="https://github.com/plotnicsystems/lunatoolbox/actions/workflows/codeql-analysis.yml/badge.svg" alt="CodeQL">
</a>
<a href="https://github.com/plotnicsystems/lunatoolbox/actions/workflows/ci.yml">
        <img src="https://github.com/plotnicsystems/lunatoolbox/actions/workflows/ci.yml/badge.svg" alt="CI Tests">
</a>
<a href="https://wakatime.com/@99cd0cde-2b33-42da-9915-2d87d65aa19c">
    <img src="https://wakatime.com/badge/user/99cd0cde-2b33-42da-9915-2d87d65aa19c.svg" alt="Total time coded since Sep 16 2023" />
</a>
<a href="https://packagist.org/packages/plotnicsystems/lunatoolbox">
    <img src="https://img.shields.io/packagist/l/plotnicsystems/lunatoolbox" alt="License">
</a>
</p>

### Installation
The best way to use this boilerplate is using [Composer](https://getcomposer.org/).

```bash
composer create-project plotnicsystems/lunatoolbox app-name
```
#### Run local server
Run the server using default php.
```bash
php -S localhost:8000 -t public
```

#### Authentication
LunaToolbox default authentication.
```bash
composer require plotnicsystems/lunatoolbox-auth
```
Register the LunaToolbox auth provider 
```LunaToolbox\LunaToolboxAuth\Illuminate\Foundation\Support\LunaToolboxauthServiceProvider``` at ```config/app.php```
```php
...
'providers' => [
        /*
         * LunaToolbox Framework Service Providers...
         */
        LunaToolbox\Framework\Illuminate\Debug\DebugServiceProvider::class,
        LunaToolbox\Framework\Illuminate\Foundation\Support\Providers\AuthServiceProvider::class,
        App\Providers\RouteServiceProvider::class,
        App\Providers\AppServiceProvider::class,

        LunaToolbox\LunaToolboxAuth\Illuminate\Foundation\Support\LunaToolboxauthServiceProvider::class,
        ...
]
```
For configuring features, create a php file ```config/lunatoolbox-auth.php```, fill
```php
<?php

return [
    'features' => [
        'login' => env('LT_AUTH_LOGIN', true),
        'register' => env('LT_AUTH_REGISTER', true),
    ]
];
```
Login : [http://localhost:8000/auth/login](http://localhost:8000/auth/login)

Register : [http://localhost:8000/auth/register](http://localhost:8000/auth/register)



### Security Vulnerabilities
If you discover a security vulnerability within LunaToolbox, please send an e-mail to LunaToolbox Email via [mail@lunatoolbox.eu](mailto:mail@lunatoolbox.eu). All security vulnerabilities will be promptly addressed.


### License
The LunaToolbox framework is open-sourced software licensed under the MIT license.
