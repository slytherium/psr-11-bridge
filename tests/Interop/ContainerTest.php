<?php

namespace Zapheus\Bridge\Psr\Interop;

use Zapheus\Bridge\Psr\Fixture\FoodController;
use Zapheus\Bridge\Psr\Fixture\TestController;
use Zapheus\Container\Container as ZapheusContainer;

/**
 * PSR-11 Container Test
 *
 * @package Zapheus
 * @author  Rougin Royce Gutib <rougingutib@gmail.com>
 */
class ContainerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Psr\Container\ContainerInterface
     */
    protected $container;

    /**
     * Sets up the container instance.
     *
     * @return void
     */
    public function setUp()
    {
        $container = new ZapheusContainer;

        $container->set('food', new FoodController);

        $this->container = new Container($container);
    }

    /**
     * Tests ContainerInterface::get.
     *
     * @return void
     */
    public function testGetMethod()
    {
        $expected = new FoodController;

        $result = $this->container->get('food');

        $this->assertEquals($expected, $result);
    }

    /**
     * Tests ContainerInterface::has.
     *
     * @return void
     */
    public function testHasMethod()
    {
        $exists = $this->container->has('food');

        $this->assertTrue($exists);
    }
}
