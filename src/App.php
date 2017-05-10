<?php

namespace rstmpw\core7\app;

class App {
    public static function startWeb() {
        return new self('web');
    }

    /**
     * App constructor.
     * @param string $appType Type of [web|cli]
     */
    public function __construct($appType)
    {
        echo $appType;
    }
}