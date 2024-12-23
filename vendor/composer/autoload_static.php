<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4c596d3f10a082424c16d90a691f28be
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
            0 => __DIR__ . '/../..' . '/factory_pattern',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4c596d3f10a082424c16d90a691f28be::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4c596d3f10a082424c16d90a691f28be::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4c596d3f10a082424c16d90a691f28be::$classMap;

        }, null, ClassLoader::class);
    }
}
