<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitfce26d7515eaaa4f57fd0f225aece7af
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

        spl_autoload_register(array('ComposerAutoloaderInitfce26d7515eaaa4f57fd0f225aece7af', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitfce26d7515eaaa4f57fd0f225aece7af', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        \Composer\Autoload\ComposerStaticInitfce26d7515eaaa4f57fd0f225aece7af::getInitializer($loader)();

        $loader->register(true);

        return $loader;
    }
}
