<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc086aa40fba460906919bc3896b6fc58
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc086aa40fba460906919bc3896b6fc58::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc086aa40fba460906919bc3896b6fc58::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
