<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit612a32cd7520fe3f4f1ba8e8a65ea50a
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Combodo\\iTop\\Extension\\CMDBChangeCleaner\\' => 41,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Combodo\\iTop\\Extension\\CMDBChangeCleaner\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Combodo\\iTop\\Extension\\CMDBChangeCleaner\\Service\\CMDBChangeCleaner' => __DIR__ . '/../..' . '/src/Service/CMDBChangeCleaner.php',
        'Combodo\\iTop\\Extension\\CMDBChangeCleaner\\Service\\CMDBChangeCleanerBackgroundProcessesDefaults' => __DIR__ . '/../..' . '/src/Service/CMDBChangeCleanerBackgroundProcessesDefaults.php',
        'Combodo\\iTop\\Extension\\CMDBChangeCleaner\\Service\\CMDBChangePeriodicCleaner' => __DIR__ . '/../..' . '/src/Service/CMDBChangePeriodicCleaner.php',
        'Combodo\\iTop\\Extension\\CMDBChangeCleaner\\Service\\CMDBChangeScheduledCleaner' => __DIR__ . '/../..' . '/src/Service/CMDBChangeScheduledCleaner.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit612a32cd7520fe3f4f1ba8e8a65ea50a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit612a32cd7520fe3f4f1ba8e8a65ea50a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit612a32cd7520fe3f4f1ba8e8a65ea50a::$classMap;

        }, null, ClassLoader::class);
    }
}
