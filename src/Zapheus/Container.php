<?php

namespace Zapheus\Bridge\Psr\Zapheus;

use Psr\Container\ContainerInterface as PsrContainerInterface;
use Zapheus\Bridge\Psr\AbstractContainer;
use Zapheus\Container\ContainerInterface;

/**
 * Zapheus to PSR-11 Container Bridge
 *
 * @package Zapheus
 * @author  Rougin Royce Gutib <rougingutib@gmail.com>
 */
class Container extends AbstractContainer implements ContainerInterface
{
    /**
     * @var \Psr\Container\ContainerInterface
     */
    protected $container;

    /**
     * Initializes the container instance.
     *
     * @param \Psr\Container\ContainerInterface $container
     */
    public function __construct(PsrContainerInterface $container)
    {
        $this->container = $container;
    }
}
