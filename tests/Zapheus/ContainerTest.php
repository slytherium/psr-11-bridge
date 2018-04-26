<?php

namespace Zapheus\Bridge\Psr\Zapheus;

use Zapheus\Bridge\Psr\Fixture\FoodController;
use Zapheus\Bridge\Psr\Fixture\TestController;
use Zapheus\Bridge\Psr\Container as InteropContainer;

/**
 * Zapheus Container Test
 *
 * @package Zapheus
 * @author  Rougin Royce Gutib <rougingutib@gmail.com>
 */
class ContainerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Zapheus\Container\ContainerInterface
     */
    protected $container;

    /**
     * Sets up the container instance.
     *
     * @return void
     */
    public function setUp()
    {
        $container = new InteropContainer;

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
