<?php

/**
 * Created by PhpStorm.
 * User: sebas
 * Date: 06.12.2016
 * Time: 14:01
 */
namespace SKoziel\Silex\Filesystem;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Symfony\Component\Filesystem\Filesystem;

class FileSystemServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['filesystem'] = new Filesystem();
    }
}