<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf60fefb63bbd98b108152126ab1a4245
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf60fefb63bbd98b108152126ab1a4245::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf60fefb63bbd98b108152126ab1a4245::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
