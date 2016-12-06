<?php
/**
 * Created by PhpStorm.
 * User: sebas
 * Date: 06.12.2016
 * Time: 14:11
 */

namespace SKoziel\Silex\Filesystem;

use Traversable;
use Symfony\Component\Filesystem\Filesystem;

trait FileSystemServiceProviderTrait
{
    /**
     * @param string|array|Traversable $dirs
     * @param int $mode
     */
    public function mkdir($dirs, $mode = 511)
    {
        /** @var FileSystem $this */
        $this['filesystem']->mkdir($dirs, $mode);
    }

    /**
     * @param  string|array|Traversable $files
     * @return bool
     */
    public function exists($files)
    {
        return $this['filesystem']->exists($files);
    }

    /**
     * @param string|array|Traversable $files
     * @param int|null $time
     * @param int|null $atime
     */
    public function touch($files, $time = null, $atime = null)
    {
        $this['filesystem']->touch($files, $time, $atime);
    }

    /**
     * @param string|array|Traversable $files
     */
    public function remove($files)
    {
        $this['filesystem']->remove($files);
    }

    /**
     * @param string|array|Traversable $files
     * @param int $mode
     * @param int $umask
     * @param bool $recursive
     */
    public function chmod($files, $mode, $umask, $recursive = false)
    {
        $this['filesystem']->chmod($files, $mode, $umask, $recursive);
    }

    /**
     * @param string|array|Traversable $files
     * @param string $user
     * @param bool $recursive
     */
    public function chown($files, $user, $recursive = false)
    {
        $this['filesystem']->chown($files, $user, $recursive);
    }

    /**
     * @param string|array|Traversable $files
     * @param string $group
     * @param bool $recursive
     */
    public function chgrp($files, $group, $recursive = false)
    {
        $this['filesystem']->chgrp($files, $group, $recursive);
    }

    /**
     * @param string $origin
     * @param string $target
     * @param bool $overwrite
     */
    public function rename($origin, $target, $overwrite = false)
    {
        $this['filesystem']->rename($origin, $target, $overwrite);
    }

    /**
     * @param string $originDir
     * @param string $targetDir
     * @param bool $copyOnWindows
     */
    public function symlink($originDir, $targetDir, $copyOnWindows = false)
    {
        $this['filesystem']->symlink($originDir, $targetDir, $copyOnWindows);
    }

    /**
     * @param string $endPath
     * @param string $startPath
     * @return string
     */
    public function makePathRelative($endPath, $startPath)
    {
        return $this['filesystem']->makePathRelative($endPath, $startPath);
    }

    /**
     * @param string $originDir
     * @param string $targetDir
     * @param Traversable|null $iterator
     * @param array $options
     */
    public function mirror($originDir, $targetDir, Traversable $iterator = null, array $options = array())
    {
        $this['filesystem']->mirror($originDir, $targetDir, $iterator, $options);
    }

    /**
     * @param string $file
     * @return bool
     */
    public function isAbsolutePath($file)
    {
        return $this['filesystem']->isAbsolutePath($file);
    }

    /**
     * @param string $dir
     * @param string $prefix
     * @return string
     */
    public function tempnam($dir, $prefix)
    {
        return $this['filesystem']->tempnam($dir, $prefix);
    }

    /**
     * @param string $filename
     * @param string $content
     * @param null|int $mode
     */
    public function dumpFile($filename, $content, $mode = 438)
    {
        $this['filesystem']->dumpFile($filename, $content, $mode);
    }
}