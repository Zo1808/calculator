<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit81a7cc6204ee477609ccc4f865cdeed4
{
    public static $prefixLengthsPsr4 = array (
        'd' => 
        array (
            'doun\\testing\\' => 13,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'doun\\testing\\' => 
        array (
            0 => __DIR__ . '/../..' . '/packages/doun/testing/src',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit81a7cc6204ee477609ccc4f865cdeed4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit81a7cc6204ee477609ccc4f865cdeed4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit81a7cc6204ee477609ccc4f865cdeed4::$classMap;

        }, null, ClassLoader::class);
    }
}