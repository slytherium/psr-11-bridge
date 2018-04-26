<?php

namespace Zapheus\Bridge\Psr\Zapheus;

use Psr\Container\ContainerInterface as PsrContainerInterface;
use Zapheus\Container\ContainerInterface;

/**
 * Zapheus to PSR-11 Container Bridge
 *
 * @package Zapheus
 * @author  Rougin Royce Gutib <rougingutib@gmail.com>
 */
class Container implements ContainerInterface
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

    /**
     * Finds an entry of the container by its identifier and returns it.
     *
     * @param  string $id
     * @return mixed
     */
    public function get($id)
    {
        return $this->container->get($id);
    }

    /**
     * Returns true if the container can return an entry for the given identifier.
     *
     * @param  string $id
     * @return boolean
     */
    public function has($id)
    {
        return $this->container->has($id);
    }
}
