<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb394c7c02824c86b63812aa1f15d1573
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb394c7c02824c86b63812aa1f15d1573::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb394c7c02824c86b63812aa1f15d1573::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
