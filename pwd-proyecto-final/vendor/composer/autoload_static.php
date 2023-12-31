<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd2c35bbaf9961bd470d86af493a95e94
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd2c35bbaf9961bd470d86af493a95e94::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd2c35bbaf9961bd470d86af493a95e94::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd2c35bbaf9961bd470d86af493a95e94::$classMap;

        }, null, ClassLoader::class);
    }
}
