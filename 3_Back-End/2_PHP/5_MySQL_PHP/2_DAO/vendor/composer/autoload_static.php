<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcdea27a1b66c1a071d06b1062e8e0024
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcdea27a1b66c1a071d06b1062e8e0024::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcdea27a1b66c1a071d06b1062e8e0024::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcdea27a1b66c1a071d06b1062e8e0024::$classMap;

        }, null, ClassLoader::class);
    }
}
