<?php
require __DIR__ . '/config/config.php';

spl_autoload_register(function ($class_name) {
    $paths = [
        __DIR__ . '/app/Core/' . $class_name . '.php',
        __DIR__ . '/app/Forms/' . $class_name . '.php',
    ];

    foreach ($paths as $path) {
        if (file_exists($path)) {
            require $path;
            return;
        }
    }
});
