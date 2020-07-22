<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit31f442fec11521a7c27a8d8ed923faf9
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit31f442fec11521a7c27a8d8ed923faf9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit31f442fec11521a7c27a8d8ed923faf9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}