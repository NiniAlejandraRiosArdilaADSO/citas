<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8844c79f33cd3f972bcf709ddeb34722
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Adso\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Adso\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8844c79f33cd3f972bcf709ddeb34722::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8844c79f33cd3f972bcf709ddeb34722::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8844c79f33cd3f972bcf709ddeb34722::$classMap;

        }, null, ClassLoader::class);
    }
}