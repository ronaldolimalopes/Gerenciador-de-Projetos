<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfca8cb89a4039da2084e4dd02b800781
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SON\\Framework\\' => 14,
        ),
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SON\\Framework\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfca8cb89a4039da2084e4dd02b800781::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfca8cb89a4039da2084e4dd02b800781::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitfca8cb89a4039da2084e4dd02b800781::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitfca8cb89a4039da2084e4dd02b800781::$classMap;

        }, null, ClassLoader::class);
    }
}
