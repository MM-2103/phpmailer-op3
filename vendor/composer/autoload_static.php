<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1fd4df47c8f0c90ec3c29bf34f6b6784
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1fd4df47c8f0c90ec3c29bf34f6b6784::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1fd4df47c8f0c90ec3c29bf34f6b6784::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1fd4df47c8f0c90ec3c29bf34f6b6784::$classMap;

        }, null, ClassLoader::class);
    }
}
