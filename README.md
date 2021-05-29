## Installation & loading
ShortURL is available on [Packagist](https://packagist.org/packages/shorturl/shorturl) (using semantic versioning), and installation via [Composer](https://getcomposer.org) is the recommended way to install ShortURL. Just add this line to your `composer.json` file:

```json
"shorturl/shorturl": "dev-master"
```

or run

```sh
composer require shorturl/shorturl
```

## A Simple Example

```php
<?php
//Import ShortURL classes into the global namespace
//These must be at the top of your script, not inside a function
use ShortURL\ShortURL\Shorten;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Simple Usage
echo Shorten::create('http://yourdomain.com/');

//Usage with text format
echo Shorten::create('http://yourdomain.com/', '', 'text');

```