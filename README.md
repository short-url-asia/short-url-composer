# ShortURL – A free URL Shortener class for PHP

## Installation & loading
ShortURL is available on [Packagist](https://packagist.org/packages/shorturl/shorturl) (using semantic versioning), and installation via [Composer](https://getcomposer.org) is the recommended way to install ShortURL. Just add this line to your `composer.json` file:

> :warning: This package is not installable via Composer 1.x, please make sure you upgrade to Composer 2+. Read more about our Composer 1.x deprecation policy.



```json
"shorturl/shorturl": "dev-master"
```

or run

```sh
composer require shorturl/shorturl
```

## Quick Start

```php
<?php

use ShortURL\ShortURL\Shorten;

require 'vendor/autoload.php';

$shorten = new Shorten();

echo $shorten->text('https://google.com');

```


## Start and manage your URL

Get your API Key [here](https://short-url.asia/user/register)

```php
<?php

use ShortURL\ShortURL\Shorten;

require 'vendor/autoload.php';

$shorten = new Shorten('your_api_key');

echo $shorten->json('https://google.com');

```

#### No errors
```json
{
  "error":0,
  "short":"https:\/\/short-url.asia\/DkZOb"
}
```

#### An error has occurred
```json
{
  "error":1,
  "msg":"Please enter a valid url"
 }
```