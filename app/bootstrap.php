<?php

    // Load Config
    require_once "config/config.php";
    
    // Autoload Libaries
    spl_autoload_register(function($className){
        require_once "libaries/".$className.".php";
    });