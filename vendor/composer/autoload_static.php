<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit026bce962e299c4f99b2d5623ada3b23
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
        'App\\model\\database' => __DIR__ . '/../..' . '/app/model/database.php',
        'App\\model\\sanpham' => __DIR__ . '/../..' . '/app/model/sanpham.php',
        'App\\model\\xl_data' => __DIR__ . '/../..' . '/app/model/xl_data.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit026bce962e299c4f99b2d5623ada3b23::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit026bce962e299c4f99b2d5623ada3b23::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit026bce962e299c4f99b2d5623ada3b23::$classMap;

        }, null, ClassLoader::class);
    }
}
