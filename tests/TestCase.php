<?php namespace GNAHotelSolutions\LaravelElasticsearch\Tests;

use GNAHotelSolutions\LaravelElasticsearch\Facade;
use GNAHotelSolutions\LaravelElasticsearch\ServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;


/**
 * Class TestCase
 *
 * @package Tests
 */
abstract class TestCase extends Orchestra
{

    /**
     * @inheritdoc
     */
    protected function getPackageProviders($app)
    {
        return [
            ServiceProvider::class,
        ];
    }

    /**
     * @inheritdoc
     */
    protected function getPackageAliases($app)
    {
        return [
            'Elasticsearch' => Facade::class,
        ];
    }
}
