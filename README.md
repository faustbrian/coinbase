# Coinbase PHP Client

[![Build Status](https://img.shields.io/travis/faustbrian/Coinbase-PHP-Client/master.svg?style=flat-square)](https://travis-ci.org/faustbrian/Coinbase-PHP-Client)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/faustbrian/coinbase-php-client.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/faustbrian/Coinbase-PHP-Client.svg?style=flat-square)](https://github.com/faustbrian/Coinbase-PHP-Client/releases)
[![License](https://img.shields.io/packagist/l/faustbrian/Coinbase-PHP-Client.svg?style=flat-square)](https://packagist.org/packages/faustbrian/Coinbase-PHP-Client)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/coinbase-php-client
```

## Usage

```php
<?php

$client = new BrianFaust\Coinbase\Client('key', 'secret', 'version');

dump($client->api('Wallet\Accounts')->all());
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@brianfaust.me. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.me)
