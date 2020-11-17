<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit588832fcba9b6db1b22eef9de5cde47a
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit588832fcba9b6db1b22eef9de5cde47a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit588832fcba9b6db1b22eef9de5cde47a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit588832fcba9b6db1b22eef9de5cde47a::$classMap;

        }, null, ClassLoader::class);
    }
}
