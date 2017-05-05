<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9a53cce0a20e6f8f84ec8a9021f66d9a
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LLMS\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LLMS\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9a53cce0a20e6f8f84ec8a9021f66d9a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9a53cce0a20e6f8f84ec8a9021f66d9a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
