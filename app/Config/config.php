<?php
$dir = new FilesystemIterator(__DIR__ . '/config');

foreach ($dir as $file) {
    require_once $file->getPathname();
}

Configure::write('Exception.renderer', 'AppExceptionRenderer');