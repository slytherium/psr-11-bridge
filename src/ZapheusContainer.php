<?php

namespace Zapheus\Bridge\Psr;

use Psr\Container\ContainerInterface;
use Zapheus\Container\ContainerInterface as ZapheusContainerInterface;

/**
 * Zapheus to PSR-11 Container Bridge
 *
 * @package Zapheus
 * @author  Rougin Royce Gutib <rougingutib@gmail.com>
 */
class ZapheusContainer extends AbstractContainer implements ZapheusContainerInterface
{
    /**
     * Initializes the container instance.
     *
     * @param \Psr\Container\ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }
}
