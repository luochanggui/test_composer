<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit67513d1a2c5771e513795b5e16ef6088
{
    public static $prefixLengthsPsr4 = array (
        'l' => 
        array (
            'luochanggui\\test_composer\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'luochanggui\\test_composer\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit67513d1a2c5771e513795b5e16ef6088::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit67513d1a2c5771e513795b5e16ef6088::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
