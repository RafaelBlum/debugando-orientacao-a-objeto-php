<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3667c326245d569b5e8b4057f9a95fde
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3667c326245d569b5e8b4057f9a95fde::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3667c326245d569b5e8b4057f9a95fde::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3667c326245d569b5e8b4057f9a95fde::$classMap;

        }, null, ClassLoader::class);
    }
}