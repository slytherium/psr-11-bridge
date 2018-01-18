# PSR-11 Bridge

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Converts [PSR-11](http://www.php-fig.org/psr/psr-11) containers to [Zapheus](https://github.com/zapheus/zapheus) containers and vice versa. Also contains an implementation of [PSR-11](http://www.php-fig.org/psr/psr-11).

## Install

Via Composer

``` bash
$ composer require zapheus/psr-11-bridge
```

## Usage

### PSR-11 to Zapheus

Install a PSR-11 compliant package first (e.g [League Container](http://container.thephpleague.com)):

``` bash
$ composer require league/container
```

``` php
use Zapheus\Bridge\Psr\ZapheusContainer;

$psr = new League\Container\Container;

// ... set dependencies here

// Zapheus\Container\ContainerInterface
$container = new ZapheusContainer($psr);
```

### Zapheus to PSR-11

``` php
use Zapheus\Bridge\Psr\InteropContainer;

$zapheus = new Zapheus\Container\Container;

// ... set dependencies here

// Psr\Container\ContainerInterface
$container = new InteropContainer($zapheus);
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Security

If you discover any security related issues, please email rougingutib@gmail.com instead of using the issue tracker.

## Credits

- [Rougin Royce Gutib][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [LICENSE.md](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/zapheus/psr-11-bridge.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/zapheus/psr-11-bridge/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/zapheus/psr-11-bridge.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/zapheus/psr-11-bridge.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/zapheus/psr-11-bridge.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/zapheus/psr-11-bridge
[link-travis]: https://travis-ci.org/zapheus/psr-11-bridge
[link-scrutinizer]: https://scrutinizer-ci.com/g/zapheus/psr-11-bridge/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/zapheus/psr-11-bridge
[link-downloads]: https://packagist.org/packages/zapheus/psr-11-bridge
[link-author]: https://github.com/rougin
[link-contributors]: ../../contributors