<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf848bf722626c2a87f16fbeca56406ff
{
    public static $prefixLengthsPsr4 = array (
        'd' => 
        array (
            'demo_plugin\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'demo_plugin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf848bf722626c2a87f16fbeca56406ff::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf848bf722626c2a87f16fbeca56406ff::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}