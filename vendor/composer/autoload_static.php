<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit36f99aea2c2593cd7e663042ab6a9b1a
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'M' => 
        array (
            'Model\\' => 6,
            'MVC\\' => 4,
        ),
        'C' => 
        array (
            'Controllers\\' => 12,
            'Classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
        'MVC\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controllers',
        ),
        'Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit36f99aea2c2593cd7e663042ab6a9b1a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit36f99aea2c2593cd7e663042ab6a9b1a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit36f99aea2c2593cd7e663042ab6a9b1a::$classMap;

        }, null, ClassLoader::class);
    }
}
