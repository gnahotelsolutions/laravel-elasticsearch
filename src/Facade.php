<?php namespace GNAHotelSolutions\LaravelElasticsearch;

use Illuminate\Support\Facades\Facade as BaseFacade;


/**
 * Class Facade
 *
 * @package GNAHotelSolutions\LaravelElasticsearch
 */
class Facade extends BaseFacade
{

    /**
     * @inheritdoc
     */
    protected static function getFacadeAccessor()
    {
        return 'elasticsearch';
    }
}
