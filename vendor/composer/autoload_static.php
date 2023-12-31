<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit227a0538315d4e68e5595d3a3555c54e
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Project\\Apirest\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Project\\Apirest\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit227a0538315d4e68e5595d3a3555c54e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit227a0538315d4e68e5595d3a3555c54e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit227a0538315d4e68e5595d3a3555c54e::$classMap;

        }, null, ClassLoader::class);
    }
}
