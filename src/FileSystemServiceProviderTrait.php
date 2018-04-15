<?php
/**
 * Created by PhpStorm.
 * User: sebas
 * Date: 06.12.2016
 * Time: 14:11
 */
namespace SKoziel\Silex\Filesystem;

use Symfony\Component\Filesystem\Filesystem;

/**
 * Trait FileSystemServiceProviderTrait
 * @package SKoziel\Silex\Filesystem
 */
trait FileSystemServiceProviderTrait
{
    /**
     * @return Filesystem
     */
    public function fileSystem(): Filesystem
    {
        return $this['filesystem'];
    }
}
