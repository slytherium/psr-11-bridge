<?php

namespace Zapheus\Bridge\Psr;

use Psr\Container\ContainerExceptionInterface;

/**
 * Not Found Exception
 *
 * @package Zapheus
 * @author  Rougin Royce Gutib <rougingutib@gmail.com>
 */
class ContainerException extends \InvalidArgumentException implements ContainerExceptionInterface
{
}
