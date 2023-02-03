<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8cbdcac0704dbd3efba934caceb7cb54
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/lib',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInit8cbdcac0704dbd3efba934caceb7cb54::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInit8cbdcac0704dbd3efba934caceb7cb54::$classMap;

        }, null, ClassLoader::class);
    }
}