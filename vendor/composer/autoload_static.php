<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf41d2368773b1bdeca83e3fd004a378f
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DiskominfotikBandaAceh\\ESignBSrE\\' => 33,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DiskominfotikBandaAceh\\ESignBSrE\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf41d2368773b1bdeca83e3fd004a378f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf41d2368773b1bdeca83e3fd004a378f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf41d2368773b1bdeca83e3fd004a378f::$classMap;

        }, null, ClassLoader::class);
    }
}