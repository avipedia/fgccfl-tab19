<?php

define('APP', __DIR__);

spl_autoload_register(function ($klass) {
    $fn = APP . '/' . strtolower(str_replace('\\', '/', $klass)) . '.php';
    if (is_file($fn) || is_link($fn)) include $fn;
});

session_name('fgcsid');
session_cache_limiter('nocache');
session_set_cookie_params(28800);
session_start();
setcookie(session_name(), session_id(), time() + 28800);

