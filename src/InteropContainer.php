<?php

namespace Zapheus\Bridge\Psr;

use Psr\Container\ContainerInterface as PsrContainerInterface;
use Zapheus\Container\ContainerInterface;

/**
 * Zapheus to PSR-11 Container Bridge
 *
 * @package Zapheus
 * @author  Rougin Royce Gutib <rougingutib@gmail.com>
 */
class InteropContainer extends AbstractContainer implements PsrContainerInterface
{
    /**
     * Initializes the container instance.
     *
     * @param \Zapheus\Container\ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * Calls methods from \Zapheus\Container\Container.
     *
     * @param  string $method
     * @param  mixed  $parameters
     * @return mixed
     */
    public function __call($method, $parameters)
    {
        $instance = array($this->container, $method);

        return call_user_func_array($instance, $parameters);
    }
}
