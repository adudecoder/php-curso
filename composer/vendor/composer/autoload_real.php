<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitf6fd954a93942b6bf7c106454d437020
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitf6fd954a93942b6bf7c106454d437020', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitf6fd954a93942b6bf7c106454d437020', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        \Composer\Autoload\ComposerStaticInitf6fd954a93942b6bf7c106454d437020::getInitializer($loader)();

        $loader->register(true);

        return $loader;
    }
}
