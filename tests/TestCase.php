<?php

namespace Myfender\PrestashopWebService\Tests;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    /**
     * Get package providers.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            \Myfender\PrestashopWebService\PrestashopWebServiceProvider::class,
        ];
    }
    /**
     * Define environment setup.
     *
     * @param  Illuminate\Foundation\Application    $app
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('app.debug', true);
        $app['config']->set('prestashop-webservice', require('config/prestashop-webservice.php'));
    }

    protected function getPackageAliases($app)
    {
        return [
            'Prestashop' => \Myfender\PrestashopWebService\PrestashopWebServiceFacade::class,
        ];
    }
}
