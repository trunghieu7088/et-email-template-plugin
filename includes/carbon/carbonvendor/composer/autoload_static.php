<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd607d9b28074d2b7a86dd2b72dddff2e
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Carbon_Fields\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Carbon_Fields\\' => 
        array (
            0 => __DIR__ . '/..' . '/htmlburger/carbon-fields/core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd607d9b28074d2b7a86dd2b72dddff2e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd607d9b28074d2b7a86dd2b72dddff2e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd607d9b28074d2b7a86dd2b72dddff2e::$classMap;

        }, null, ClassLoader::class);
    }
}
