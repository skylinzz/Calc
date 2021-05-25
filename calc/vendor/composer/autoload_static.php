<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit58d2dac58aa1b3270cb6074e5c6f7add
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MyApp\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MyApp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'MyApp\\IOperation' => __DIR__ . '/../..' . '/classes/IOperation.php',
        'MyApp\\OperationFactory' => __DIR__ . '/../..' . '/classes/OperationFactory.php',
        'MyApp\\Operations\\BaseOperation' => __DIR__ . '/../..' . '/classes/Operations/BaseOperation.php',
        'MyApp\\Operations\\DivisionOperation' => __DIR__ . '/../..' . '/classes/Operations/DivisionOperation.php',
        'MyApp\\Operations\\MultiplyOperation' => __DIR__ . '/../..' . '/classes/Operations/MultiplyOperation.php',
        'MyApp\\Operations\\SubOperation' => __DIR__ . '/../..' . '/classes/Operations/SubOperation.php',
        'MyApp\\Operations\\SumOperation' => __DIR__ . '/../..' . '/classes/Operations/SumOperation.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit58d2dac58aa1b3270cb6074e5c6f7add::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit58d2dac58aa1b3270cb6074e5c6f7add::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit58d2dac58aa1b3270cb6074e5c6f7add::$classMap;

        }, null, ClassLoader::class);
    }
}