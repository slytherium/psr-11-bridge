<?php

namespace Zapheus\Bridge\Psr\Interop;

use Psr\Container\ContainerInterface as PsrContainerInterface;
use Zapheus\Bridge\Psr\AbstractContainer;
use Zapheus\Container\ContainerInterface;

/**
 * Zapheus to PSR-11 Container Bridge
 *
 * @package Zapheus
 * @author  Rougin Royce Gutib <rougingutib@gmail.com>
 */
class Container extends AbstractContainer implements PsrContainerInterface
{
    /**
     * @var \Zapheus\Container\ContainerInterface
     */
    protected $container;

    /**
     * Initializes the container instance.
     *
     * @param \Zapheus\Container\ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }
}
