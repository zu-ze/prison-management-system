<?php

class AutoLoader {
    private $dirmap;

    public function __construct($config)
    {
        $this->dirmap = $config;
    }
    function autoload($class){
        $file = strtolower(str_replace("\\", DIRECTORY_SEPARATOR, trim($class, "\\"))).".php";
        $paths = $this->dirmap;

        foreach ($paths as $path) {
            $combined = $path.DIRECTORY_SEPARATOR.$file;
            if (file_exists($combined)) {
                include($combined);
                return;
            }
        }
        throw new Exception("{$class} not found");
    }

    public function loadClasses()
    {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }
}
