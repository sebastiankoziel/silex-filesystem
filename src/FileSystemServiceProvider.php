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

/**
 * Class FileSystemServiceProvider
 * @package SKoziel\Silex\Filesystem
 */
class FileSystemServiceProvider implements ServiceProviderInterface
{
    /**
     * @param Container $app
     */
    public function register(Container $app)
    {
        $app['filesystem'] = new Filesystem();
    }
}
