<?php
require_once 'zend_autoload.php';

// const DS = DIRECTORY_SEPARATOR;
define('DS', DIRECTORY_SEPARATOR);

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// Zend_Debug::dump($path);

$dir = __DIR__;
// Zend_Debug::dump($dir);

// $file = new SplFileInfo($dir . DS . $path);
// Zend_Debug::dump($file->isDir());

$file = $dir . DS . $path;

if (is_file($file)) {
    Zend_Debug::dump('no rewrite!');
    return false;
} else {
    Zend_Debug::dump('rewrite!');
    require_once 'index.php';
    return true;
}
