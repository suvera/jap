<?php

function _import_package($package) {
    static $imported = array();
    if (!$package || isset($imported[$package])) {
        return;
    }
    $imported[$package] = 1;
    
    foreach (glob($package . "/*.php") as $filename) {
        require_once($filename);
    }
}

