<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcdd6ca4d543f722696bb5fff811afda5
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcdd6ca4d543f722696bb5fff811afda5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcdd6ca4d543f722696bb5fff811afda5::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
