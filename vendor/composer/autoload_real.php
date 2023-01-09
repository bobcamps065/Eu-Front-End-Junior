<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitf233d26d9d517d0229d1a2a5ce77e83a
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

        spl_autoload_register(array('ComposerAutoloaderInitf233d26d9d517d0229d1a2a5ce77e83a', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitf233d26d9d517d0229d1a2a5ce77e83a', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitf233d26d9d517d0229d1a2a5ce77e83a::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}