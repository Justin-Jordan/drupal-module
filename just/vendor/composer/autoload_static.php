<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit896101ad559362c796bdd417c970ca4e
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Drupal\\Just\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Drupal\\Just\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit896101ad559362c796bdd417c970ca4e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit896101ad559362c796bdd417c970ca4e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit896101ad559362c796bdd417c970ca4e::$classMap;

        }, null, ClassLoader::class);
    }
}