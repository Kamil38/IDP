<?php 

function translate($key) {
    global $_SESSION;
    $langcode = $_SESSION['lang'];
    $lang = require(__DIR__ . '/' . $langcode . '.php');
    // print_r($lang);
    if (isset($lang[$key])) {
        return $lang[$key];
    }
    return 'GEEN VERTALING ('.$key.')';
}