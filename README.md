# The Filesystem Service Provider for Silex 2.0

The Filesystem Service Provider for Silex 2.0 based on The Symfony 3.2 File System Component

## Requirements

- silex/silex >=2.0
- PHP >= 5.6

## Registering

```php
$app->register(new SKoziel\Silex\Filesystem\FileSystemServiceProvider());
```

## Trait

```php
use SKoziel\Silex\Filesystem\FileSystemServiceProviderTrait;

$app->mkdir('/tmp/photos', 0700);
```

## Usage
The Filesystemm Service Provider provides the same functionality as [The Filesystem Component](http://symfony.com/doc/current/components/filesystem.html).
Example usage:
```php
$app['filesystem']->mkdir('/tmp/photos', 0700);

// this directory exists, return true
$app['filesystem']->exists('/tmp/photos');

// works only if image-ICC has been modified after image.jpg
$app['filesystem']->copy('image-ICC.jpg', 'image.jpg');
```