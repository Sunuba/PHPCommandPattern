<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0d2464849112b0a63feea8a818d08337
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Command\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Command\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0d2464849112b0a63feea8a818d08337::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0d2464849112b0a63feea8a818d08337::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
