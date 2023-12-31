<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc10cfcf176b6175f80ccfa9e16744d92
{
    public static $classMap = array (
        'ComposerAutoloaderInitc10cfcf176b6175f80ccfa9e16744d92' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInitc10cfcf176b6175f80ccfa9e16744d92' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/connection.php',
        'Post' => __DIR__ . '/../..' . '/arrays/post.php',
        'Request' => __DIR__ . '/../..' . '/core/request.php',
        'Router' => __DIR__ . '/../..' . '/core/router.php',
        'controller\\PageController' => __DIR__ . '/../..' . '/controller/PageController.php',
        'core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'queryBuilder' => __DIR__ . '/../..' . '/core/database/queryBuilder.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitc10cfcf176b6175f80ccfa9e16744d92::$classMap;

        }, null, ClassLoader::class);
    }
}
