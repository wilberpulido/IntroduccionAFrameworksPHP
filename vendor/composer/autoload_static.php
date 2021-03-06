<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf79584ca56767cbf5e4cef3b217ced4f
{
    public static $files = array (
        '557d99428f74a3b5460b149f0f7f2db2' => __DIR__ . '/../..' . '/app/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf79584ca56767cbf5e4cef3b217ced4f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf79584ca56767cbf5e4cef3b217ced4f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf79584ca56767cbf5e4cef3b217ced4f::$classMap;

        }, null, ClassLoader::class);
    }
}
