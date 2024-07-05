# How to deploy

* Copy all folders except public in a custom folder e.g(huellitas)
* Inside the folder create a public folder and copy build/* files
* Copy public/* content in the root directory
* Copy the following for the index.php

```php
<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));


// Register the Composer autoloader...
require __DIR__.'/huellitas/vendor/autoload.php';

// Bootstrap Laravel and handle the request...
(require_once __DIR__.'/huellitas/bootstrap/app.php')
    ->handleRequest(Request::capture());

```

And add the following contento for .httaccess

```php
<IfModule mod_rewrite.c>
    RewriteEngine On

    # Redirect Trailing Slashes If Not A Folder...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^(.*)/$ /$1 [L,R=301]

    # Handle Front Controller...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]

    # Ensure Authorization Header Is Passed To The Backend...
    RewriteCond %{HTTP:Authorization} .
    RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]
</IfModule>
```

