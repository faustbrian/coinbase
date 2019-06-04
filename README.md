# Coinbase PHP Client

[![Build Status](https://img.shields.io/travis/plients/Coinbase-PHP-Client/master.svg?style=flat-square)](https://travis-ci.org/plients/Coinbase-PHP-Client)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/plients/coinbase.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/plients/Coinbase-PHP-Client.svg?style=flat-square)](https://github.com/plients/Coinbase-PHP-Client/releases)
[![License](https://img.shields.io/packagist/l/plients/Coinbase-PHP-Client.svg?style=flat-square)](https://packagist.org/packages/plients/Coinbase-PHP-Client)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

```bash
$ composer require plients/coinbase
```

## Usage

```php
<?php

$client = new Plients\Coinbase\Client('key', 'secret', 'version');

dump($client->api('Wallet\Accounts')->all());
```

## Testing

```bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@basecode.sh. All security vulnerabilities will be promptly addressed.

## Credits

-   [Brian Faust](https://github.com/faustbrian)
-   [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://basecode.sh)
