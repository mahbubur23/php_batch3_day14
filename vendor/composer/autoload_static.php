<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcf919b63cfe02ba733238a8dddfef2be
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcf919b63cfe02ba733238a8dddfef2be::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcf919b63cfe02ba733238a8dddfef2be::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcf919b63cfe02ba733238a8dddfef2be::$classMap;

        }, null, ClassLoader::class);
    }
}
