# PSR-11 Bridge

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]][link-license]
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Converts [PSR-11](http://www.php-fig.org/psr/psr-11) containers to [Zapheus](https://github.com/zapheus/zapheus) containers and vice versa. Also contains an implementation of [PSR-11](http://www.php-fig.org/psr/psr-11).

## Installation

Install `PSR-11 Bridge` via [Composer](https://getcomposer.org/):

``` bash
$ composer require zapheus/psr-11-bridge
```

## Basic Usage

### PSR-11 to Zapheus

Install a PSR-11 compliant package first (e.g [League Container](http://container.thephpleague.com)):

``` bash
$ composer require league/container
```

``` php
use Zapheus\Bridge\Psr\Zapheus\Container;

$psr = new League\Container\Container;

// ... set dependencies here

// Zapheus\Container\ContainerInterface
$container = new Container($psr);
```

### Zapheus to PSR-11

``` php
use Zapheus\Bridge\Psr\Interop\Container;

$zapheus = new Zapheus\Container\Container;

// ... set dependencies here

// Psr\Container\ContainerInterface
$container = new Container($zapheus);
```

## Changelog

Please see [CHANGELOG][link-changelog] for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Credits

- [All contributors][link-contributors]

## License

The MIT License (MIT). Please see [LICENSE][link-license] for more information.

[ico-code-quality]: https://img.shields.io/scrutinizer/g/zapheus/psr-11-bridge.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/zapheus/psr-11-bridge.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/zapheus/psr-11-bridge.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/zapheus/psr-11-bridge/master.svg?style=flat-square
[ico-version]: https://img.shields.io/packagist/v/zapheus/psr-11-bridge.svg?style=flat-square

[link-changelog]: https://github.com/zapheus/psr-11-bridge/blob/master/CHANGELOG.md
[link-code-quality]: https://scrutinizer-ci.com/g/zapheus/psr-11-bridge
[link-contributors]: https://github.com/zapheus/psr-11-bridge/contributors
[link-downloads]: https://packagist.org/packages/zapheus/psr-11-bridge
[link-license]: https://github.com/zapheus/psr-11-bridge/blob/master/LICENSE.md
[link-packagist]: https://packagist.org/packages/zapheus/psr-11-bridge
[link-scrutinizer]: https://scrutinizer-ci.com/g/zapheus/psr-11-bridge/code-structure
[link-travis]: https://travis-ci.org/zapheus/psr-11-bridge