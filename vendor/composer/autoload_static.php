<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb27b819332a4ffc383a29331a86762d3
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wouter0100\\Opauth\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wouter0100\\Opauth\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb27b819332a4ffc383a29331a86762d3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb27b819332a4ffc383a29331a86762d3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}