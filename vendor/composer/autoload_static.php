<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit73bf8e23227da8be4b8959a24b59e764
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Klein\\' => 6,
        ),
        'F' => 
        array (
            'FrameworkWell\\' => 14,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Klein\\' => 
        array (
            0 => __DIR__ . '/..' . '/klein/klein/src/Klein',
        ),
        'FrameworkWell\\' => 
        array (
            0 => __DIR__ . '/..' . '/frameworkWell',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit73bf8e23227da8be4b8959a24b59e764::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit73bf8e23227da8be4b8959a24b59e764::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}