<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita5424c1a6efa62dd0a0b7739cdef602e
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Captcha\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Captcha\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita5424c1a6efa62dd0a0b7739cdef602e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita5424c1a6efa62dd0a0b7739cdef602e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}